<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin\ListTables;

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

final class ServicesTable extends \WP_List_Table {

	public function __construct() {
		parent::__construct( [
			'singular' => 'service',
			'plural'   => 'services',
			'ajax'     => false,
		] );
	}

	public function get_columns(): array {
		return [
			'cb'             => '<input type="checkbox" />',
			'name'           => __( 'Name', 'emi-ai-assistant' ),
			'slug'           => __( 'Slug', 'emi-ai-assistant' ),
			'tier'           => __( 'Tier', 'emi-ai-assistant' ),
			'price_range'    => __( 'Price range', 'emi-ai-assistant' ),
			'landing_url'    => __( 'Landing URL', 'emi-ai-assistant' ),
			'enabled'        => __( 'Enabled', 'emi-ai-assistant' ),
		];
	}

	public function get_sortable_columns(): array {
		return [ 'name' => [ 'name', true ], 'slug' => [ 'slug', false ], 'tier' => [ 'tier', false ] ];
	}

	public function get_bulk_actions(): array {
		return [
			'enable'  => __( 'Enable',  'emi-ai-assistant' ),
			'disable' => __( 'Disable', 'emi-ai-assistant' ),
			'delete'  => __( 'Delete',  'emi-ai-assistant' ),
		];
	}

	public function process_bulk_action(): void {
		$action = $this->current_action();
		if ( ! $action ) return;
		check_admin_referer( 'bulk-services' );

		$ids = array_map( 'intval', (array) ( $_POST['service'] ?? [] ) );
		if ( ! $ids ) return;

		global $wpdb;
		$table = $wpdb->prefix . 'emi_services';
		$ph    = implode( ',', array_fill( 0, count( $ids ), '%d' ) );

		switch ( $action ) {
			case 'enable':
				$wpdb->query( $wpdb->prepare( "UPDATE {$table} SET enabled = 1 WHERE id IN ({$ph})", ...$ids ) );
				break;
			case 'disable':
				$wpdb->query( $wpdb->prepare( "UPDATE {$table} SET enabled = 0 WHERE id IN ({$ph})", ...$ids ) );
				break;
			case 'delete':
				$wpdb->query( $wpdb->prepare( "DELETE FROM {$table} WHERE id IN ({$ph})", ...$ids ) );
				break;
		}
	}

	public function prepare_items(): void {
		global $wpdb;
		$table   = $wpdb->prefix . 'emi_services';
		$per_pg  = 20;
		$page    = max( 1, (int) $this->get_pagenum() );
		$offset  = ( $page - 1 ) * $per_pg;

		$search  = trim( (string) ( $_REQUEST['s'] ?? '' ) );
		$orderby = sanitize_key( (string) ( $_REQUEST['orderby'] ?? 'menu_order' ) );
		$order   = strtoupper( (string) ( $_REQUEST['order'] ?? 'ASC' ) );
		if ( ! in_array( $order, [ 'ASC', 'DESC' ], true ) ) { $order = 'ASC'; }
		$allowed_orderby = [ 'name', 'slug', 'tier', 'menu_order' ];
		if ( ! in_array( $orderby, $allowed_orderby, true ) ) { $orderby = 'menu_order'; }

		$where = '1=1';
		$params = [];
		if ( $search !== '' ) {
			$where   .= ' AND (name LIKE %s OR slug LIKE %s OR synonyms LIKE %s)';
			$like     = '%' . $wpdb->esc_like( $search ) . '%';
			$params   = [ $like, $like, $like ];
		}

		$total = (int) $wpdb->get_var(
			$params
				? $wpdb->prepare( "SELECT COUNT(*) FROM {$table} WHERE {$where}", ...$params )
				: "SELECT COUNT(*) FROM {$table}"
		);

		$sql = "SELECT * FROM {$table} WHERE {$where} ORDER BY {$orderby} {$order} LIMIT %d OFFSET %d";
		$params[] = $per_pg;
		$params[] = $offset;
		$this->items = $wpdb->get_results( $wpdb->prepare( $sql, ...$params ), ARRAY_A );

		$this->set_pagination_args( [
			'total_items' => $total,
			'per_page'    => $per_pg,
			'total_pages' => (int) ceil( $total / $per_pg ),
		] );
		$this->_column_headers = [ $this->get_columns(), [], $this->get_sortable_columns() ];
		$this->process_bulk_action();
	}

	public function column_cb( $item ): string {
		return sprintf( '<input type="checkbox" name="service[]" value="%d" />', (int) $item['id'] );
	}

	public function column_name( $item ): string {
		$edit_url = add_query_arg( [ 'page' => 'emi-ai-services', 'action' => 'edit', 'id' => (int) $item['id'] ], admin_url( 'admin.php' ) );
		$delete_url = wp_nonce_url( add_query_arg( [ 'page' => 'emi-ai-services', 'action' => 'delete', 'id' => (int) $item['id'] ], admin_url( 'admin.php' ) ), 'delete-service-' . (int) $item['id'] );
		$actions = [
			'edit'   => sprintf( '<a href="%s">%s</a>', esc_url( $edit_url ),   esc_html__( 'Edit',   'emi-ai-assistant' ) ),
			'delete' => sprintf( '<a href="%s" onclick="return confirm(\'%s\')">%s</a>', esc_url( $delete_url ), esc_js( __( 'Delete this service?', 'emi-ai-assistant' ) ), esc_html__( 'Delete', 'emi-ai-assistant' ) ),
		];
		return sprintf( '<strong><a href="%s">%s</a></strong>%s', esc_url( $edit_url ), esc_html( $item['name'] ), $this->row_actions( $actions ) );
	}

	public function column_default( $item, $column_name ): string {
		switch ( $column_name ) {
			case 'slug':        return '<code>' . esc_html( $item['slug'] ) . '</code>';
			case 'tier':        return esc_html( $item['tier'] );
			case 'price_range':
				$min = (int) $item['base_price_min']; $max = (int) $item['base_price_max'];
				return $min || $max ? '$' . number_format( $min ) . ' – $' . number_format( $max ) : '—';
			case 'landing_url':
				$url = (string) $item['landing_url'];
				return $url ? sprintf( '<a href="%s" target="_blank">%s</a>', esc_url( $url ), esc_html( wp_parse_url( $url, PHP_URL_PATH ) ?: $url ) ) : '—';
			case 'enabled':     return ! empty( $item['enabled'] ) ? '✅' : '❌';
		}
		return '';
	}

	public function no_items(): void {
		printf(
			'<em>%s</em>',
			esc_html__( 'No services yet. Seed sample data via Tools → Seed sample data, or add one with the button above.', 'emi-ai-assistant' )
		);
	}
}
