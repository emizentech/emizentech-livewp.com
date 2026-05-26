<?php
get_header('ecommerce'); // custom header
?>

<div class="ecommerce-page">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer('ecommerce'); // custom footer ?>