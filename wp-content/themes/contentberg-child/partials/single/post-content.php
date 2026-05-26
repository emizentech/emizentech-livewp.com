<?php

/**
 * Partial: Post content part of the layout
 */
extract(array(
	'author_box'     => 'partials/author-box',
	'share_float'    => Bunyad::options()->single_share_float,
	'spacious_style' => Bunyad::posts()->meta('layout_spacious')
), EXTR_SKIP);

$classes = array('post-content description cf entry-content col-9 ');

if ($share_float) {
	$classes[] = 'has-share-float';
}

// Spacious Style
if ($spacious_style) {
	$classes[] = Bunyad::core()->get_sidebar() === 'none' ? 'content-spacious-full' : 'content-spacious';
} else {
	$classes[] = 'content-normal';
}

?>

<?php if ($share_float && class_exists('ContentBerg_Core')): // Extra div for a theia bug 
?>
	<div>

		<?php
		// See plugins/contentberg-core/social-share/views/social-share-float.php
		Bunyad::get('cb_social')->render('social-share-float');
		?>

	</div>
<?php endif; ?>

<div class="post_custom_inner">
	<div class="table_custom">
		<div class="tablelist">
			<?php
			if (is_active_sidebar('table_social_sidebar')) {
				dynamic_sidebar('table_social_sidebar');
			}
			?>
		</div>
		<div class="the-post-foot cf">

			<?php
			wp_link_pages(array(
				'before' => '<div class="page-links post-pagination">',
				'after' => '</div>',
				'link_before' => '<span>',
				'link_after' => '</span>'
			));
			?>

			<div class="tag-share cf">
				<a class="preferences_s" href="https://www.google.com/preferences/source?q=emizentech.com" target="_blank" rel="nofollow noopener">
					<img src="https://emizentech.com/wp-content/uploads/2026/02/googleg_standard_color_18dp.png" width="18" height="18" alt="Google">
					Add us as a preferred source on Google
					<i class="fa fa-angle-double-right"></i>
					<style>
						.tag-share .preferences_s {
							position: relative;
							display: inline-flex;
							align-items: center;
							gap: 10px;
							padding: 10px 16px;
							border-radius: 10px;
							font-size: 12px;
							font-weight: 500;
							color: #fff;
							text-decoration: none;
							background: #007db2;
							margin-bottom: 10px;
							overflow: hidden;
							z-index: 1;
							transition: transform 0.3s ease;
						}

						/* Fix image styling */
						.tag-share .preferences_s img {
							mix-blend-mode: plus-lighter;
						}

						/* Animated border layer */
						.tag-share .preferences_s::before {
							content: "";
							position: absolute;
							inset: -2px;
							border-radius: 12px;
							background: linear-gradient(120deg, #1d2d44, #007db2, #1d2d44, #007db2);
							background-size: 300% 300%;
							animation: borderMove 5s linear infinite;
							z-index: -2;
						}

						/* Inner background + glow */
						.tag-share .preferences_s::after {
							content: "";
							position: absolute;
							inset: 0;
							border-radius: 10px;
							background: #0000;
							z-index: -1;
							box-shadow: 0 0 15px #1d2d44,
								0 0 25px #007db2;
							transition: box-shadow 0.3s ease;
						}

						/* Border animation */
						@keyframes borderMove {
							0% {
								background-position: 0% 50%;
							}

							100% {
								background-position: 300% 50%;
							}
						}

						/* Hover effects */
						.tag-share .preferences_s:hover {
							transform: translateY(-2px);
						}

						.tag-share .preferences_s:hover::after {
							box-shadow: 0 0 25px rgba(0, 240, 255, 0.9),
								0 0 40px rgba(0, 240, 255, 0.6);
						}
					</style>
				</a>
				<?php if (class_exists('ContentBerg_Core')): ?>
					<h4>Share With</h4>
					<?php
					// See plugins/contentberg-core/social-share/views/social-share-b.php
					Bunyad::get('cb_social')->render('social-share');
					?>
				<?php endif; ?>

			</div>


		</div>
	</div>

	<div class="post-content custom_post_c description cf entry-content content-normal">


		<?php

		// Excerpts or main content?
		if (is_single() or Bunyad::options()->post_body == 'full'):

			/**
			 * A wrapper for the_content() for some of our magic.
			 * 
			 * Note: the_content filter is applied.
			 * 
			 * @see the_content()
			 */
			Bunyad::posts()->the_content(null, false);

		else:

			// Show the excerpt,  always add Keep Reading button (more button), and respect <!--more--> (teaser) 
			echo Bunyad::posts()->excerpt(null, Bunyad::options()->post_excerpt_blog, array('force_more' => true, 'use_teaser' => true));

		endif;

		?>

	</div><!-- .post-content -->
	<div class="custom_sidebarstticy">
		<?php
		$tooltip = get_post_meta($post->ID, '_lsb_is_tooltip_on', true);
		$modified_date = get_the_modified_date('F d, Y', $post->ID);
		?>
		<style>
			.post-date-tegs {
				display: flex;
				align-items: center;
				font-size: 15px;
				margin: 0px 0px 20px 0px;
				gap: 10px;
				font-weight: 500;

				.i {
					position: relative;
					display: inline-flex;
					cursor: pointer;
					height: 16px;
					width: 16px;
				}

				.i svg {
					display: block;
				}

				.i::before {
					content: attr(data-t);
					position: absolute;
					width: 250px;
					top: 100%;
					right: 0px;
					/* transform: translateX(-50%) translateY(10px); */
					background: #fff;
					color: #333;
					padding: 8px 12px;
					border-radius: 4px;
					font-size: 14px;
					box-shadow: 0px 0px 5px 5px #191b2326;
					visibility: hidden;
					opacity: 0;
					transition: opacity 0.3s, transform 0.3s;
					z-index: 10;
				}

				.i::after {
					content: '';
					position: absolute;
					top: 40%;
					left: 50%;
					/* transform: translateX(-50%) translateY(1px); */
					border: 5px solid;
					border-color: transparent transparent #fff transparent;
					visibility: hidden;
					opacity: 0;
					transition: opacity 0.3s, transform 0.3s;
					z-index: 10;
				}

				.i:hover::before,
				.i:hover::after {
					visibility: visible;
					opacity: 1;
					/* transform: translateX(-50%) translateY(5px); */
				}
			}
		</style>
		<div class="post-date-tegs">
			<svg aria-hidden="true" tabindex="-1" style="fill:#3A74DA" width="16" height="16" viewBox="0 0 16 16" data-group="m">
				<path d="M11.8274 6.55747L6.46238 15.5471C5.82153 16.5015 4.34049 15.7978 4.67562 14.6981L6.41223 9H4.00019C3.39117 9 2.92358 8.46022 3.01041 7.85743L4.51022 0.857429C4.5811 0.365299 5.00279 0 5.5 0H9.09602C9.75989 0 10.2395 0.634984 10.0579 1.27353L8.99817 5H10.9972C11.7974 5 12.2734 5.89314 11.8274 6.55747Z"></path>
			</svg>
			<span>Last Updated: <?php echo $modified_date; ?></span>
			<?php
			if ($tooltip == 'checked') {
			?>
				<span class="i" data-t="We update our insights every month to help you stay informed about market trends and quickly identify shifts in user interests.">
					<svg aria-hidden="true" tabindex="-1" style="fill: #8a8e9b;" width="16" height="16" viewBox="0 0 16 16">
						<path d="M7.82 6a1 1 0 0 1 .99 1.16L8 12h2a1 1 0 1 1 0 2H7.18a1 1 0 0 1-.99-1.16L7 8H6a1 1 0 0 1 0-2h1.82ZM8.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
					</svg>
				</span>
			<?php } ?>
		</div>
		<?php
		$title   = get_post_meta(get_the_ID(), '_lsb_title', true);
		$content = get_post_meta(get_the_ID(), '_lsb_content', true);
		$btn_txt = get_post_meta(get_the_ID(), '_lsb_btn_text', true);
		$btn_url = get_post_meta(get_the_ID(), '_lsb_btn_url', true);
		if ($title && $content && $btn_txt && $btn_url) {
		?>
			<style>
				.single-emzb-box {
					padding: 20px;
					background: #007db2 !important;
					border-radius: 20px;

					h4,
					p {
						color: #fff !important;
					}
				}

				.single-emzb-box a {
					background-color: #fff !important;
					border-radius: 50px;
					width: 100%;
					display: block;
					text-align: center;
					padding: 10px;
					color: #000 !important;
				}
			</style>
			<div class="single-emzb-box">
				<h4><strong><?php echo __($title); ?></strong></h4>
				<p><?php echo __($content); ?></p>
				<a href="<?php echo esc_url($btn_url); ?>"><?php echo __($btn_txt); ?></a>
			</div>
		<?php
		} else {
		?>
			<?php if (has_excerpt()) : ?>
				<div class="post-excerpt">
					<span class="sumsingle">Summary:</span>
					<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>
		<?php
			if (is_active_sidebar('sidebar-10')) {
				dynamic_sidebar('sidebar-10');
			}
		}
		?>
	</div>

</div>



<?php if (Bunyad::options()->author_box): ?>

	<?php get_template_part($author_box); ?>

<?php endif; ?>


<?php

if (Bunyad::options()->single_navigation):
	get_template_part('partials/single/post-navigation');
endif;

?>

<?php get_template_part('partials/single/related-posts'); ?>

<?php //comments_template('', true); 
?>