<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin\ListTables;

use Emizentech\AiAssistant\Admin\Menu;

/**
 * Services admin page — wraps WP_List_Table for list view and renders an
 * add/edit form for the same screen via ?action=new|edit.
 */
final class ServicesPage {

	public static function render(): void {
		if ( ! current_user_can( Menu::CAP ) ) wp_die( __( 'Permission denied', 'emi-ai-assistant' ) );

		$action = sanitize_key( (string) ( $_REQUEST['action'] ?? 'list' ) );

		// Handle delete first.
		if ( $action === 'delete' && ! empty( $_GET['id'] ) ) {
			check_admin_referer( 'delete-service-' . (int) $_GET['id'] );
			global $wpdb;
			$wpdb->delete( $wpdb->prefix . 'emi_services', [ 'id' => (int) $_GET['id'] ], [ '%d' ] );
			wp_safe_redirect( admin_url( 'admin.php?page=emi-ai-services&deleted=1' ) );
			exit;
		}

		// Handle save.
		if ( ! empty( $_POST['emi_ai_service_save'] ) ) {
			check_admin_referer( 'emi_ai_service_save' );
			$id = self::save( $_POST );
			wp_safe_redirect( admin_url( 'admin.php?page=emi-ai-services&saved=' . (int) $id ) );
			exit;
		}

		// CSV import / export.
		if ( $action === 'export_csv' ) {
			self::export_csv(); exit;
		}
		if ( ! empty( $_POST['emi_ai_import_csv'] ) && ! empty( $_FILES['csv_file']['tmp_name'] ) ) {
			check_admin_referer( 'emi_ai_import_csv' );
			$result = self::import_csv( $_FILES['csv_file']['tmp_name'] );
			$action = 'list';
			set_transient( 'emi_ai_csv_import_result', $result, 30 );
		}

		?>
		<div class="wrap emi-ai-wrap">
			<?php if ( $action === 'new' || $action === 'edit' ) : ?>
				<?php self::render_form( $action === 'edit' ? (int) $_GET['id'] : 0 ); ?>
			<?php else : ?>
				<?php self::render_list(); ?>
			<?php endif; ?>
		</div>
		<?php
	}

	private static function render_list(): void {
		$table = new ServicesTable();
		$table->prepare_items();
		?>
		<h1 class="wp-heading-inline"><?php esc_html_e( 'Services catalog', 'emi-ai-assistant' ); ?></h1>
		<a href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-services&action=new' ) ); ?>" class="page-title-action"><?php esc_html_e( 'Add new', 'emi-ai-assistant' ); ?></a>
		<a href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-services&action=export_csv' ) ); ?>" class="page-title-action"><?php esc_html_e( 'Export CSV', 'emi-ai-assistant' ); ?></a>
		<hr class="wp-header-end" />

		<?php if ( ! empty( $_GET['saved'] ) ) : ?>
			<div class="notice notice-success is-dismissible"><p><?php esc_html_e( 'Service saved.', 'emi-ai-assistant' ); ?></p></div>
		<?php endif; ?>
		<?php if ( ! empty( $_GET['deleted'] ) ) : ?>
			<div class="notice notice-success is-dismissible"><p><?php esc_html_e( 'Service deleted.', 'emi-ai-assistant' ); ?></p></div>
		<?php endif; ?>
		<?php
		$import_result = get_transient( 'emi_ai_csv_import_result' );
		if ( $import_result ) {
			delete_transient( 'emi_ai_csv_import_result' );
			printf(
				'<div class="notice notice-info is-dismissible"><p>%s</p></div>',
				esc_html( sprintf( __( 'CSV imported: %d inserted, %d updated, %d skipped.', 'emi-ai-assistant' ), $import_result['inserted'], $import_result['updated'], $import_result['skipped'] ) )
			);
		}
		?>

		<form method="get" action="">
			<input type="hidden" name="page" value="emi-ai-services" />
			<?php $table->search_box( __( 'Search', 'emi-ai-assistant' ), 'search-service' ); ?>
		</form>

		<form method="post">
			<?php
			wp_nonce_field( 'bulk-services' );
			$table->display();
			?>
		</form>

		<h2 style="margin-top:30px"><?php esc_html_e( 'Import CSV', 'emi-ai-assistant' ); ?></h2>
		<form method="post" enctype="multipart/form-data">
			<?php wp_nonce_field( 'emi_ai_import_csv' ); ?>
			<input type="hidden" name="emi_ai_import_csv" value="1" />
			<p>
				<input type="file" name="csv_file" accept=".csv" />
				<?php submit_button( __( 'Import', 'emi-ai-assistant' ), 'secondary', '', false ); ?>
			</p>
			<p class="description">
				<?php esc_html_e( 'CSV columns (header row required):', 'emi-ai-assistant' ); ?>
				<code>slug,name,category,short_pitch,synonyms,landing_url,base_price_min,base_price_max,tier,enabled</code>
			</p>
		</form>
		<?php
	}

	private static function render_form( int $id ): void {
		global $wpdb;
		$row = $id ? $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}emi_services WHERE id = %d", $id ), ARRAY_A ) : null;
		if ( $id && ! $row ) { wp_die( __( 'Service not found.', 'emi-ai-assistant' ) ); }

		$row = $row ?: [
			'id' => 0, 'slug' => '', 'name' => '', 'category' => '', 'short_pitch' => '',
			'synonyms' => '', 'landing_url' => '', 'base_price_min' => 0, 'base_price_max' => 0,
			'tier' => 'standard', 'enabled' => 1, 'menu_order' => 0,
		];
		?>
		<h1><?php echo $id ? esc_html__( 'Edit service', 'emi-ai-assistant' ) : esc_html__( 'Add service', 'emi-ai-assistant' ); ?></h1>
		<form method="post">
			<?php wp_nonce_field( 'emi_ai_service_save' ); ?>
			<input type="hidden" name="emi_ai_service_save" value="1" />
			<input type="hidden" name="id" value="<?php echo (int) $row['id']; ?>" />

			<table class="form-table" role="presentation">
				<tr>
					<th><label for="svc_slug"><?php esc_html_e( 'Slug', 'emi-ai-assistant' ); ?> *</label></th>
					<td><input type="text" id="svc_slug" name="slug" value="<?php echo esc_attr( $row['slug'] ); ?>" required class="regular-text" pattern="[a-z0-9-]+" /></td>
				</tr>
				<tr>
					<th><label for="svc_name"><?php esc_html_e( 'Name', 'emi-ai-assistant' ); ?> *</label></th>
					<td><input type="text" id="svc_name" name="name" value="<?php echo esc_attr( $row['name'] ); ?>" required class="large-text" /></td>
				</tr>
				<tr>
					<th><label for="svc_category"><?php esc_html_e( 'Category', 'emi-ai-assistant' ); ?></label></th>
					<td><input type="text" id="svc_category" name="category" value="<?php echo esc_attr( $row['category'] ); ?>" class="regular-text" placeholder="e.g. mobile, ecommerce, ai" /></td>
				</tr>
				<tr>
					<th><label for="svc_pitch"><?php esc_html_e( 'Short pitch', 'emi-ai-assistant' ); ?></label></th>
					<td><textarea id="svc_pitch" name="short_pitch" rows="3" class="large-text"><?php echo esc_textarea( $row['short_pitch'] ); ?></textarea></td>
				</tr>
				<tr>
					<th><label for="svc_synonyms"><?php esc_html_e( 'Synonyms (comma-separated)', 'emi-ai-assistant' ); ?></label></th>
					<td><input type="text" id="svc_synonyms" name="synonyms" value="<?php echo esc_attr( $row['synonyms'] ); ?>" class="large-text" placeholder="mobile, app, ios, android" /></td>
				</tr>
				<tr>
					<th><label for="svc_url"><?php esc_html_e( 'Landing URL', 'emi-ai-assistant' ); ?></label></th>
					<td><input type="url" id="svc_url" name="landing_url" value="<?php echo esc_attr( $row['landing_url'] ); ?>" class="large-text" placeholder="https://emizentech.com/…" /></td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Price range (USD)', 'emi-ai-assistant' ); ?></th>
					<td>
						<input type="number" name="base_price_min" value="<?php echo esc_attr( (string) $row['base_price_min'] ); ?>" min="0" step="1000" /> –
						<input type="number" name="base_price_max" value="<?php echo esc_attr( (string) $row['base_price_max'] ); ?>" min="0" step="1000" />
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Tier', 'emi-ai-assistant' ); ?></th>
					<td>
						<select name="tier">
							<?php foreach ( [ 'starter', 'standard', 'enterprise' ] as $t ) : ?>
								<option value="<?php echo esc_attr( $t ); ?>" <?php selected( $row['tier'], $t ); ?>><?php echo esc_html( ucfirst( $t ) ); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<th><?php esc_html_e( 'Enabled', 'emi-ai-assistant' ); ?></th>
					<td><label><input type="checkbox" name="enabled" value="1" <?php checked( ! empty( $row['enabled'] ) ); ?>> <?php esc_html_e( 'Visible to recommender flow', 'emi-ai-assistant' ); ?></label></td>
				</tr>
				<tr>
					<th><label for="svc_order"><?php esc_html_e( 'Menu order', 'emi-ai-assistant' ); ?></label></th>
					<td><input type="number" id="svc_order" name="menu_order" value="<?php echo esc_attr( (string) ( $row['menu_order'] ?? 0 ) ); ?>" min="0" /></td>
				</tr>
			</table>

			<?php submit_button( $id ? __( 'Update service', 'emi-ai-assistant' ) : __( 'Add service', 'emi-ai-assistant' ) ); ?>
			<a href="<?php echo esc_url( admin_url( 'admin.php?page=emi-ai-services' ) ); ?>" class="button"><?php esc_html_e( 'Cancel', 'emi-ai-assistant' ); ?></a>
		</form>
		<?php
	}

	private static function save( array $post ): int {
		global $wpdb;
		$table = $wpdb->prefix . 'emi_services';

		$data = [
			'slug'           => sanitize_title( (string) ( $post['slug'] ?? '' ) ),
			'name'           => sanitize_text_field( (string) ( $post['name'] ?? '' ) ),
			'category'       => sanitize_text_field( (string) ( $post['category'] ?? '' ) ),
			'short_pitch'    => sanitize_textarea_field( (string) ( $post['short_pitch'] ?? '' ) ),
			'synonyms'       => sanitize_text_field( (string) ( $post['synonyms'] ?? '' ) ),
			'landing_url'    => esc_url_raw( (string) ( $post['landing_url'] ?? '' ) ),
			'base_price_min' => (int) ( $post['base_price_min'] ?? 0 ),
			'base_price_max' => (int) ( $post['base_price_max'] ?? 0 ),
			'tier'           => in_array( $post['tier'] ?? '', [ 'starter', 'standard', 'enterprise' ], true ) ? $post['tier'] : 'standard',
			'enabled'        => ! empty( $post['enabled'] ) ? 1 : 0,
			'menu_order'     => (int) ( $post['menu_order'] ?? 0 ),
		];
		$id = (int) ( $post['id'] ?? 0 );

		if ( $id ) {
			$wpdb->update( $table, $data, [ 'id' => $id ] );
			return $id;
		}
		$wpdb->insert( $table, $data );
		return (int) $wpdb->insert_id;
	}

	private static function export_csv(): void {
		global $wpdb;
		$rows = $wpdb->get_results( "SELECT slug,name,category,short_pitch,synonyms,landing_url,base_price_min,base_price_max,tier,enabled FROM {$wpdb->prefix}emi_services ORDER BY menu_order, name", ARRAY_A );

		header( 'Content-Type: text/csv; charset=utf-8' );
		header( 'Content-Disposition: attachment; filename="emi-services-' . gmdate( 'Y-m-d' ) . '.csv"' );
		$out = fopen( 'php://output', 'w' );
		fputcsv( $out, [ 'slug', 'name', 'category', 'short_pitch', 'synonyms', 'landing_url', 'base_price_min', 'base_price_max', 'tier', 'enabled' ] );
		foreach ( $rows as $r ) {
			fputcsv( $out, $r );
		}
		fclose( $out );
	}

	private static function import_csv( string $tmp_path ): array {
		$result = [ 'inserted' => 0, 'updated' => 0, 'skipped' => 0 ];
		$fp = fopen( $tmp_path, 'r' );
		if ( ! $fp ) return $result;
		$header = fgetcsv( $fp );
		if ( ! $header ) { fclose( $fp ); return $result; }

		global $wpdb;
		$table = $wpdb->prefix . 'emi_services';

		while ( ( $row = fgetcsv( $fp ) ) !== false ) {
			if ( count( $row ) < count( $header ) ) { $result['skipped']++; continue; }
			$d = array_combine( $header, $row );

			$slug = sanitize_title( (string) ( $d['slug'] ?? '' ) );
			if ( ! $slug ) { $result['skipped']++; continue; }

			$exists = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM {$table} WHERE slug = %s", $slug ) );

			$record = [
				'slug'           => $slug,
				'name'           => sanitize_text_field( (string) ( $d['name'] ?? '' ) ),
				'category'       => sanitize_text_field( (string) ( $d['category'] ?? '' ) ),
				'short_pitch'    => sanitize_textarea_field( (string) ( $d['short_pitch'] ?? '' ) ),
				'synonyms'       => sanitize_text_field( (string) ( $d['synonyms'] ?? '' ) ),
				'landing_url'    => esc_url_raw( (string) ( $d['landing_url'] ?? '' ) ),
				'base_price_min' => (int) ( $d['base_price_min'] ?? 0 ),
				'base_price_max' => (int) ( $d['base_price_max'] ?? 0 ),
				'tier'           => in_array( $d['tier'] ?? '', [ 'starter', 'standard', 'enterprise' ], true ) ? $d['tier'] : 'standard',
				'enabled'        => ! empty( $d['enabled'] ) && $d['enabled'] !== '0' ? 1 : 0,
			];

			if ( $exists ) {
				$wpdb->update( $table, $record, [ 'id' => (int) $exists ] );
				$result['updated']++;
			} else {
				$wpdb->insert( $table, $record );
				$result['inserted']++;
			}
		}
		fclose( $fp );
		return $result;
	}
}
