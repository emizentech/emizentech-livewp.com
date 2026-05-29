<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Admin\MetaBoxes;

use Emizentech\AiAssistant\CPT\CaseStudyCpt;

/**
 * Renders custom metaboxes on the emi_case_study CPT edit screen.
 */
final class CaseStudyMetaBoxes {

	public static function register(): void {
		add_action( 'add_meta_boxes_' . CaseStudyCpt::POST_TYPE, [ self::class, 'add' ] );
		add_action( 'save_post_' . CaseStudyCpt::POST_TYPE, [ self::class, 'save' ], 10, 2 );
	}

	public static function add(): void {
		add_meta_box(
			'emi_case_details',
			__( 'Case Study details', 'emi-ai-assistant' ),
			[ self::class, 'render_details' ],
			CaseStudyCpt::POST_TYPE,
			'normal',
			'high'
		);
		add_meta_box(
			'emi_case_metrics',
			__( 'Outcome metrics', 'emi-ai-assistant' ),
			[ self::class, 'render_metrics' ],
			CaseStudyCpt::POST_TYPE,
			'normal',
			'default'
		);
		add_meta_box(
			'emi_case_ai',
			__( 'AI search controls', 'emi-ai-assistant' ),
			[ self::class, 'render_ai_controls' ],
			CaseStudyCpt::POST_TYPE,
			'side',
			'default'
		);
	}

	public static function render_details( \WP_Post $post ): void {
		wp_nonce_field( 'emi_case_meta_save', 'emi_case_meta_nonce' );
		$region     = (string) get_post_meta( $post->ID, '_emi_region',     true );
		$tech_stack = (string) get_post_meta( $post->ID, '_emi_tech_stack', true );
		$case_url   = (string) get_post_meta( $post->ID, '_emi_case_url',   true );
		?>
		<table class="form-table" role="presentation">
			<tr>
				<th><label for="emi_region"><?php esc_html_e( 'Region', 'emi-ai-assistant' ); ?></label></th>
				<td>
					<select id="emi_region" name="_emi_region">
						<option value=""    <?php selected( $region, '' );    ?>>—</option>
						<?php foreach ( [ 'US' => 'US', 'UK' => 'UK', 'EU' => 'EU', 'MEA' => 'Middle East / Africa', 'IN' => 'India', 'APAC' => 'Asia Pacific', 'LATAM' => 'Latin America', 'Global' => 'Global' ] as $code => $label ) : ?>
							<option value="<?php echo esc_attr( $code ); ?>" <?php selected( $region, $code ); ?>><?php echo esc_html( $label ); ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<th><label for="emi_tech_stack"><?php esc_html_e( 'Tech stack', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="text" id="emi_tech_stack" name="_emi_tech_stack" value="<?php echo esc_attr( $tech_stack ); ?>" class="large-text" placeholder="React Native, Node.js, Postgres" /><p class="description"><?php esc_html_e( 'Comma-separated. Powers the “tech” faceted filter in the widget.', 'emi-ai-assistant' ); ?></p></td>
			</tr>
			<tr>
				<th><label for="emi_case_url"><?php esc_html_e( 'Full case-study URL', 'emi-ai-assistant' ); ?></label></th>
				<td><input type="url" id="emi_case_url" name="_emi_case_url" value="<?php echo esc_attr( $case_url ); ?>" class="large-text" placeholder="https://emizentech.com/case-studies/…" /></td>
			</tr>
		</table>
		<?php
	}

	public static function render_metrics( \WP_Post $post ): void {
		$raw    = (string) get_post_meta( $post->ID, '_emi_metrics', true );
		$items  = $raw ? ( json_decode( $raw, true ) ?: [] ) : [];
		if ( ! is_array( $items ) ) $items = [];

		// Always render at least 4 rows (existing + blank).
		while ( count( $items ) < 4 ) { $items[] = ''; }
		?>
		<p class="description"><?php esc_html_e( 'One metric per row. Examples: "+38% conversion", "HIPAA-compliant", "94% precision".', 'emi-ai-assistant' ); ?></p>
		<div id="emi-metrics-list">
			<?php foreach ( $items as $i => $m ) : ?>
				<p><input type="text" name="_emi_metrics_raw[]" value="<?php echo esc_attr( is_string( $m ) ? $m : (string) wp_json_encode( $m ) ); ?>" class="large-text" /></p>
			<?php endforeach; ?>
		</div>
		<button type="button" class="button" onclick="emiAddMetric()"><?php esc_html_e( '+ Add metric row', 'emi-ai-assistant' ); ?></button>
		<script>
			function emiAddMetric(){
				const wrap = document.getElementById('emi-metrics-list');
				const p = document.createElement('p');
				p.innerHTML = '<input type="text" name="_emi_metrics_raw[]" value="" class="large-text" />';
				wrap.appendChild(p);
			}
		</script>
		<?php
	}

	public static function render_ai_controls( \WP_Post $post ): void {
		$excluded = (bool) get_post_meta( $post->ID, '_emi_excluded', true );
		?>
		<p>
			<label>
				<input type="checkbox" name="_emi_excluded" value="1" <?php checked( $excluded ); ?>>
				<?php esc_html_e( 'Exclude from chat AI search', 'emi-ai-assistant' ); ?>
			</label>
		</p>
		<p class="description"><?php esc_html_e( 'When checked, this case study still shows in the admin but is hidden from the widget’s Cases finder.', 'emi-ai-assistant' ); ?></p>
		<p>
			<button type="button" class="button" onclick="emiResyncFromEditor()"><?php esc_html_e( 'Re-sync to FULLTEXT index', 'emi-ai-assistant' ); ?></button>
		</p>
		<p class="description"><?php esc_html_e( 'Re-runs the search-index sync for this post. Auto-runs on save anyway.', 'emi-ai-assistant' ); ?></p>
		<script>
			function emiResyncFromEditor(){
				const id = <?php echo (int) $post->ID; ?>;
				fetch(ajaxurl + '?action=emi_ai_resync_case&id=' + id + '&_wpnonce=' + '<?php echo esc_js( wp_create_nonce( 'emi_resync_case_' . $post->ID ) ); ?>')
					.then(r => r.json()).then(d => alert(d.message || 'Done'));
			}
		</script>
		<?php
	}

	public static function save( int $post_id, \WP_Post $post ): void {
		if ( ! isset( $_POST['emi_case_meta_nonce'] ) || ! wp_verify_nonce( $_POST['emi_case_meta_nonce'], 'emi_case_meta_save' ) ) return;
		if ( wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		$region     = sanitize_text_field( (string) ( $_POST['_emi_region'] ?? '' ) );
		$tech_stack = sanitize_text_field( (string) ( $_POST['_emi_tech_stack'] ?? '' ) );
		$case_url   = esc_url_raw( (string) ( $_POST['_emi_case_url'] ?? '' ) );
		$excluded   = ! empty( $_POST['_emi_excluded'] ) ? 1 : 0;

		update_post_meta( $post_id, '_emi_region',     $region );
		update_post_meta( $post_id, '_emi_tech_stack', $tech_stack );
		update_post_meta( $post_id, '_emi_case_url',   $case_url );
		update_post_meta( $post_id, '_emi_excluded',   $excluded );

		// Collect metrics from the repeater.
		$raws = (array) ( $_POST['_emi_metrics_raw'] ?? [] );
		$metrics = [];
		foreach ( $raws as $r ) {
			$r = trim( (string) $r );
			if ( $r !== '' ) $metrics[] = $r;
		}
		update_post_meta( $post_id, '_emi_metrics', wp_json_encode( $metrics ) );

		// The CPT class' save_post_ hook will pick up the new meta and re-sync to FULLTEXT.
	}
}
