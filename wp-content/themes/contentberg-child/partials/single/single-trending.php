<?php
get_header(); ?>
<style>
  
  .single-post-layout {
    display: grid;
    grid-template-columns: 20% 1fr 20%;
    gap: 20px;
    margin: 20px auto;
    max-width: 1600px;
    padding: 100px 10px 10px 10px;
  }

  .single-post-layout .toc,
  .single-post-layout .related-posts {
    padding: 15px;
    border-radius: 8px;
    font-size: 0.9rem;
  }

  .single-post-layout .toc h3,
  .single-post-layout .related-posts h3 {
    margin-bottom: 10px;
    font-size: 1.1rem;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
  }

  #ez-toc-container a:hover::before {
    width: auto !important;
  }

  .post-content #ez-toc-container {
    display: none;
  }

  .box {
    padding: 20px;
    background-image: -webkit-linear-gradient(90deg, #06c 0, #2182df 100%);
    color: #fff;
    border-radius: 20px;
  }

  .box button {
    background-color: #fff !important;
    color: #000 !important;
    border-radius: 50px;
    width: 100%;
  }

  ul.ez-toc-list a.ez-toc-link {
    color: #1d2d44;
    font-size: 15px;
    border-bottom: 1px solid rgb(239 239 239);
    line-height: 19px;
    padding: 9px 0;
    width: 100%;
    font-weight: 500;
    transition: all .3s;
  }
</style>
<article id="post-<?php echo get_the_ID(); ?>" class="blog-inner single-post-layout">

  <!-- Left Sidebar: Table of Contents -->
  <aside class="sidebar-box toc">
    <?php
    echo do_shortcode('[toc]');
    ?>
  </aside>

  <!-- Center: Post Content -->
  <div class="post-content">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_title('<h1>', '</h1>');
        the_content();
      endwhile;
    endif;
    ?>
  </div>
  <?php
  $title   = get_post_meta(get_the_ID(), '_lsb_title', true);
  $content = get_post_meta(get_the_ID(), '_lsb_content', true);
  $btn_txt = get_post_meta(get_the_ID(), '_lsb_btn_text', true);
  $btn_url = get_post_meta(get_the_ID(), '_lsb_btn_url', true);
  ?>
  <!-- Right Sidebar: Related Posts -->
  <aside class="cta">
    <div class="box">
      <h4><strong><?php echo __($title); ?></strong></h4>
      <p><?php echo __($content); ?></p>
      <button><a href="<?php echo esc_url($btn_url); ?>"><?php echo __($btn_txt); ?></a></button>
    </div>
  </aside>
</article>
<?php get_footer(); ?>