<?php
declare(strict_types=1);

namespace Emizentech\AiAssistant\Flow;

/**
 * MySQL FULLTEXT search over wp_emi_case_studies + faceted filters.
 * Falls back to "top 3 by recency" when no FULLTEXT match.
 */
final class CaseStudyFinder {

	public static function search( array $args ): array {
		global $wpdb;

		$query    = trim( (string) ( $args['query']    ?? '' ) );
		$industry = trim( (string) ( $args['industry'] ?? '' ) );
		$region   = trim( (string) ( $args['region']   ?? '' ) );
		$tech     = trim( (string) ( $args['tech']     ?? '' ) );
		$limit    = max( 1, min( 10, (int) ( $args['limit'] ?? 3 ) ) );

		$table = $wpdb->prefix . 'emi_case_studies';

		if ( $query ) {
			$sql    = "SELECT *, MATCH(title, summary, tags) AGAINST(%s IN NATURAL LANGUAGE MODE) AS score
			           FROM {$table}
			           WHERE excluded = 0 AND MATCH(title, summary, tags) AGAINST(%s IN NATURAL LANGUAGE MODE)";
			$params = [ $query, $query ];
		} else {
			$sql    = "SELECT *, 0 AS score FROM {$table} WHERE excluded = 0";
			$params = [];
		}

		if ( $industry ) {
			$sql       .= ' AND industry = %s';
			$params[]   = $industry;
		}
		if ( $region ) {
			$sql       .= ' AND region = %s';
			$params[]   = $region;
		}
		if ( $tech ) {
			$sql       .= ' AND tech_stack LIKE %s';
			$params[]   = '%' . $wpdb->esc_like( $tech ) . '%';
		}

		$sql      .= ' ORDER BY score DESC, published_at DESC LIMIT %d';
		$params[]  = $limit;

		$rows = $wpdb->get_results( $wpdb->prepare( $sql, ...$params ), ARRAY_A );

		// Fallback: top 3 by recency if no hits.
		if ( ! $rows && $query ) {
			$rows = $wpdb->get_results(
				$wpdb->prepare(
					"SELECT * FROM {$table} WHERE excluded = 0 ORDER BY published_at DESC LIMIT %d",
					$limit
				),
				ARRAY_A
			);
		}

		return array_map( [ self::class, 'shape' ], $rows ?: [] );
	}

	private static function shape( array $row ): array {
		return [
			'id'         => (int) $row['id'],
			'slug'       => $row['slug'],
			'title'      => $row['title'],
			'summary'    => $row['summary'],
			'industry'   => $row['industry'],
			'region'     => $row['region'],
			'tech_stack' => array_filter( array_map( 'trim', explode( ',', (string) $row['tech_stack'] ) ) ),
			'tags'       => array_filter( array_map( 'trim', explode( ',', (string) $row['tags'] ) ) ),
			'metrics'    => json_decode( (string) $row['metrics'], true ) ?: [],
			'url'        => $row['case_url'],
		];
	}
}
