<?php /* Template Name: blog custom page */ ?>

<?php get_header(); ?>

<style>
  /* CSS for styling tabs and content */
  .tab {
    display: none;
  }
  .active-tab {
    display: block;
  }
  .pagination {
    margin-top: 10px;
  }
  .pagination button {
    margin-right: 5px;
  }
  .load-more {
    display: none;
    margin-top: 10px;
  }
</style>

<h1>Blog Custom Page</h1>

<div class="tabs">
  <?php
  // Get 4 categories
  $categories = get_categories(array(
    'number' => 4 // Limit to 4 categories
  ));
  foreach ($categories as $category) {
    echo '<button class="tab-link" data-category="' . $category->slug . '">' . $category->name . '</button>';
  }
  ?>
</div>

<?php
foreach ($categories as $category) {
  $posts_count = wp_count_posts()->publish;
  $pages = ceil($posts_count / 2);
  echo '<div id="' . $category->slug . '" class="tab">';
  echo '<h2>' . $category->name . ' Posts</h2>';
  echo '<ul class="posts-list">';
  
  // Retrieve posts for the current category
  $posts = get_posts(array(
    'category' => $category->term_id,
    'posts_per_page' => 2 // Limit to 2 posts initially
  ));
  
  // Display post titles
  foreach ($posts as $post) {
    echo '<li>' . $post->post_title . '</li>';
  }
  
  echo '</ul>';
  echo '<div class="pagination">';
  for ($i = 1; $i <= $pages; $i++) {
    echo '<button class="page-number" data-category="' . $category->term_id . '" data-page="' . $i . '">' . $i . '</button>';
  }
  echo '</div>';
  echo '</div>';
  echo '<br>';
}
?>

<script>
jQuery(document).ready(function($) {
  $('.tab-link').click(function() {
    var tabId = $(this).data('category');
    $('.tab').hide();
    $('#' + tabId).show();
    $('#' + tabId + ' .page-number:first').click(); // Show first page when switching tabs
  });

  $('.page-number').click(function() {
    var button = $(this);
    var categoryId = button.data('category');
    var page = button.data('page');
    $.ajax({
      url: '<?php echo admin_url('admin-ajax.php'); ?>',
      type: 'GET',
      data: {
        action: 'load_posts_by_page',
        category: categoryId,
        page: page
      },
      success: function(response) {
        $('#' + categoryId + ' .posts-list').html(response); // Replace existing content with new posts
      },
      error: function(xhr, status, error) {
        console.error('Error loading posts: ' + error);
      }
    });
  });
});
</script>

<?php get_footer(); ?>
