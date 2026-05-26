<?php
get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/twentytwentyone-child/assets/css/single-tech-board.css?v=0192837483" />
<article id="post-<?php echo get_the_ID(); ?>" class="blog-inner single-post-layout">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <div class="container">
        <div class="banner">
          <div class="container">
            <div class="banner-content">
              <div class="inner">
                <?php the_title('<h1>', '</h1>'); ?>
                <div class="banner-meta">
                  Published: <?php echo get_the_modified_date('F j, Y', get_the_ID()); ?> | Read Time: <?php echo emz_get_read_time(get_the_ID()); ?> minutes
                </div>
              </div>
              <div class="car-image">
                <img src="https://emizentech.com/wp-content/uploads/2025/09/Rectangle34625889.svg" alt="Decorative Image" width="590" height="305" class="decorative-img">
                <img class="feat-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php echo get_the_title(get_the_ID()); ?>" width="523" height="300">
              </div>
            </div>
          </div>
          <nav class="breadcrumb">
            <div class="container">
              <a href="/">Home</a> <i class="fa fa-angle-right"></i>
              <a href="/tech-board/">Tech Board</a> <i class="fa fa-angle-right"></i>
              <span><?php echo get_post_field( 'post_name', get_the_ID() ); ?></span>
            </div>
          </nav>
        </div>
        <div class="main-content">
          <main class="article">
            <div class="post_tech_board_inner">
              <?php the_content(); ?>
            </div>
            <section class="author-section">
              <div class="author-info">
                <div class="author-avatar">
                  <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                </div>
                <div class="author-details">
                  <h4><?php the_author(); ?></h4>
                  <p><?php echo get_the_author_meta('description'); ?></p>
                </div>
              </div>
            </section>
            <hr />
            <div class="social-links">
              <?php
              $url   = urlencode(get_permalink());
              $title = urlencode(get_the_title());
              $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
              ?>
              <a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>"
                class="social-link facebook" target="_blank" rel="noopener noreferrer">
                <img src="https://emizentech.com/wp-content/uploads/2025/09/facebook.svg" alt="Facebook" width="25" height="25">
              </a>
              <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&amp;text=<?php echo $title; ?>"
                class="social-link twitter" target="_blank" rel="noopener noreferrer">
                <img src="https://emizentech.com/wp-content/uploads/2025/09/twitter-x.svg" alt="Twitter" width="25" height="25">
              </a>
              <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>"
                class="social-link linkedin" target="_blank" rel="noopener noreferrer">
                <img src="https://emizentech.com/wp-content/uploads/2025/09/linkedin-1.svg" alt="LinkedIn" width="25" height="25">
              </a>
            </div>
          </main>
          <aside class="sidebar">
            <div class="subs-container">
              <h2 class="subs-title">Stay Updated In The Loop</h2>
              <p class="subs-subtitle">Our best secrets, straight to your inbox</p>
              <div class="subs-form">
                <form class="newsletter-form" method="POST">
                                  <input type="email" name="newsletter_email" placeholder="Enter your email" required>
                                  <button type="submit" class="btn submit-btn">Subscribe</button>
                                </form>
                            <?php if (isset($_GET['subscribed']) && $_GET['subscribed'] === 'true') : ?>
                              <p class="success-msg">Thanks for subscribing!</p>
                            <?php endif; ?>
              </div>
              <p class="subs-terms">By providing your email, you accept our <a href="#" class="subs-terms-link">Terms & Conditions</a></p>
            </div>
            <div class="releted-posts">
              <h3>Check Out the Latest Updates</h3>
              <?php
              $args = array(
                'post_type'      => 'tech-board',
                'posts_per_page' => 4, // get all posts
                'orderby'        => 'modified', // order by last updated
                'order'          => 'ASC',
                'post__not_in'   => array(get_the_ID())
              );
              $tech_board_posts = get_posts($args);
              foreach ($tech_board_posts as $post) {
              ?>
                <div class="sidebar-item">
                  <a href="<?php echo get_permalink($post->ID); ?>" target="_blank" rel="noopener">
                    <div class="sidebar-image"><img decoding="async" src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>" width="1109" height="623" alt="<?php echo get_the_title($post->ID); ?>" class="w-100 mb-3"></div>
                    <div class="sidebar-content">
                      <h4><?php echo get_the_title($post->ID); ?></h4>
                      <p><?php echo wp_trim_words(get_the_excerpt($post->ID), 10, '...'); ?></p>
                    </div>
                  </a>
            </div>
          <?php } ?>
        </div>
        </aside>
      </div>
      <div class="related-posts-section">
        <h2 class="related-posts-title">Related Articles</h2>
        <div class="related-posts-grid">
          <?php
          $current_id = get_the_ID();
          $taxonomy   = 'tech_board_category';

          $terms = wp_get_post_terms($current_id, $taxonomy, ['fields' => 'ids']);

          $args = [
            'post_type'      => 'tech-board',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
            'post__not_in'   => [$current_id],
            'orderby'        => 'date',
            'order'          => 'DESC',
          ];

          if (!empty($terms)) {
            $args['tax_query'] = [
              [
                'taxonomy' => $taxonomy,
                'field'    => 'term_id',
                'terms'    => $terms,
              ],
            ];
          }

          $related_posts = get_posts($args);
          foreach ($related_posts as $post) {
          ?>
            <div class="related-post-card">
              <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>" alt="<?php echo get_the_title($post->ID); ?>" class="related-post-image" width="520" height="335">
              <div class="related-post-content">
                <p class="related-post-date">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days">
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                    <rect width="18" height="18" x="3" y="4" rx="2" />
                    <path d="M3 10h18" />
                    <path d="M8 14h.01" />
                    <path d="M12 14h.01" />
                    <path d="M16 14h.01" />
                    <path d="M8 18h.01" />
                    <path d="M12 18h.01" />
                    <path d="M16 18h.01" />
                  </svg>
                  <?php echo get_the_modified_date('F j, Y', $post->ID); ?>
                </p>
                <h3 class="related-post-title"><?php echo get_the_title($post->ID); ?></h3>
                <p class="related-post-description"><?php echo wp_trim_words(get_the_excerpt($post->ID), 10, '...'); ?></p>
                <a href="<?php echo get_permalink($post->ID); ?>" class="related-post-link">Read More →</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="newsletter-banner">
        <h2 class="newsletter-title">Unlock Tomorrow’s Tech, Today</h2>
        <p class="text-white">From AI to eCommerce, discover expert articles that keep you informed, inspired, and ready for what’s next.</p>
        <div class="newsletter-form">
          <div class="sbcribeform">
                                <form class="newsletter-form" method="POST">
                                  <input type="email" name="newsletter_email" placeholder="Enter your email" required>
                                  <button type="submit" class="btn submit-btn">Subscribe</button>
                                </form>
                            <?php if (isset($_GET['subscribed']) && $_GET['subscribed'] === 'true') : ?>
                              <p class="success-msg" style="color:#fff;">Thanks for subscribing!</p>
                            <?php endif; ?>
                    </div>
        </div>
      </div>
  <?php
    endwhile;
  endif;
  ?>
</article>
<script>
  jQuery(document).ready(function($) {
    $('.rank-math-answer').not('.active').slideUp(200);
    $(document).on('click', '.rank-math-question', function() {
      var $item = $(this).closest('.rank-math-list-item');
      var $answer = $(this).closest('.rank-math-list-item').find('.rank-math-answer');

      if ($answer.hasClass('active')) {
        $answer.removeClass('active').slideUp(200);
        $item.removeClass('active');
      } else {
        $('.rank-math-list-item.active').removeClass('active');
        $('.rank-math-answer.active').removeClass('active').slideUp(200);
        $answer.addClass('active').slideDown(200);
        $item.addClass('active');
      }
    });
  });
</script>
<?php get_footer(); ?>