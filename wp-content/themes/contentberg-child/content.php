<?php
/**
 * Content Template is used for every post format and used on single posts
 * 
 * It is also used on archives called via loop.php
 */

$classes = array_merge((array) $classes, array('the-post'));

?>

<article <?php
	// Setup article attributes
	Bunyad::markup()->attribs('post-wrapper', array(
		'id'        => 'post-' . get_the_ID(),
		'class'     => join(' ', get_post_class($classes)),
	)); ?>>
	
	<header class="post-header the-post-header custom_post_head cf">
			
		<?php 
			/*Bunyad::helpers()->post_meta(
				'single', 
				array(
					'enable_cat' => 1, 
					'is_single'  => 1,
					'add_class'  => 'the-post-meta'
				)
			); */
		?>

		<?php // get_template_part('partials/single/featured'); ?>
    <div class="custom_headp">
		<div class="post_head_left">
			<?php 
			/**
			 * Set h1 tag on single post page
			 */
			$tag = 'h1';
			
			if (!is_single() OR is_front_page()) {
				$tag = 'h2';
			}
	?>
	
			<div class="post-meta">
			
				
				<<?php echo esc_attr($tag); ?> class="post-title" itemprop="name headline">
			
				<?php 
					if (is_single()): 
						the_title(); 
					else: ?>
				
					<a href="<?php the_permalink(); ?>" rel="bookmark" class="post-title-link"><?php the_title(); ?></a>
						
				<?php endif;?>
				
				</<?php echo esc_attr($tag); ?>>			
				
				<span class="post-cat"><?php Bunyad::get('helpers')->meta_cats(); ?></span>
                <div class="post_cat_date">
                <span class="post-author"><?php echo esc_html(get_the_author()); ?></span>
				<time class="post-date" datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?></time>
                </div>
				</div>
			</div>
			<div class="post_head_right">

            <?php
				if (Bunyad::posts()->meta('featured_disable')) {
				    return;
				}
				?>

				<div class="featured">
				    <?php if (get_post_format() == 'gallery'): // get gallery template ?>
				    
				        <?php get_template_part('partials/gallery-format'); ?>
				        
				    <?php elseif (Bunyad::posts()->meta('featured_video')): // featured video available? ?>
				    
				        <div class="featured-vid">
				            <?php echo apply_filters('bunyad_featured_video', esc_html(Bunyad::posts()->meta('featured_video'))); ?>
				        </div>
				        
				    <?php elseif (has_post_thumbnail()): ?>
				    
				        <?php
				            /**
				             * Normal featured image when no post format
				             */
				            $caption = get_post(get_post_thumbnail_id())->post_excerpt;
				            $url     = get_permalink();
				            
				            // On single page? Link to image
				            if (is_single()):
				                $url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); 
				                $url = $url[0];
				            endif;
				            
				            // Use the 'full' size to avoid cropping
				            $image = 'full';
				        ?>
				    
				        <a href="<?php echo esc_url($url); ?>" class="image-link"><?php the_post_thumbnail(
				                $image,  // use full size image
				                array('title' => strip_tags(get_the_title()))
				            ); ?>
				        </a>
				        
				    <?php endif; // normal featured image ?>
				    
				</div>
			</div>
		</div>     
	</header><!-- .post-header -->

	<?php get_template_part('partials/single/post-content'); ?>
		
</article> <!-- .the-post -->