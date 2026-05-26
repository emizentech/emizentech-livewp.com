<?php
/**
 * Template Name: Tech Board Category Listing
 * Template Post Type: page
 *
 * This template displays all posts from the current
 * tech-board taxonomy category in Bootstrap grid layout.
 */

get_header();

/**
 * Get current taxonomy term
 * Example URL:
 * /tech-board-category/software/
 */

$current_term = get_queried_object();

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'tech-board',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'tax_query'      => array(
        array(
            'taxonomy' => 'tech_board_category',
            'field'    => 'term_id',
            'terms'    => $current_term->term_id,
        ),
    ),
);

$query = new WP_Query($args);
?>

<style>
/* ==========================================
   Tech Board Category Listing CSS
========================================== */

.tech-board-wrapper {
    padding: 60px 0;
    background: #f5f7fb;
}

.tech-board-heading {
    margin-bottom: 40px;
    text-align: center;
}

.tech-board-heading h1 {
    font-size: 38px;
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
}

.tech-board-heading p {
    font-size: 16px;
    color: #666;
}

.tech-board-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.tech-board-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}

.tech-board-image {
    position: relative;
    overflow: hidden;
}

.tech-board-image img {
    width: 100%;
    height: 240px;
    object-fit: cover;
}

.tech-board-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.tech-board-title {
    font-size: 22px;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 15px;
}

.tech-board-title a {
    color: #222;
    text-decoration: none;
}

.tech-board-title a:hover {
    color: #007bff;
}

.tech-board-desc {
    font-size: 15px;
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
    flex-grow: 1;
}

.tech-board-readmore {
    display: inline-block;
    color: #007bff;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s ease;
}

.tech-board-readmore:hover {
    color: #0056b3;
    text-decoration: none;
}

.tech-board-pagination {
    margin-top: 50px;
    text-align: center;
}

.tech-board-pagination .page-numbers {
    display: inline-block;
    margin: 0 5px;
    padding: 10px 16px;
    background: #fff;
    border-radius: 6px;
    color: #222;
    text-decoration: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
}

.tech-board-pagination .current {
    background: #007bff;
    color: #fff;
}

.no-post-found {
    text-align: center;
    font-size: 20px;
    color: #666;
    width: 100%;
    padding: 60px 0;
}

/* ==========================================
   Responsive
========================================== */

@media(max-width: 991px){

    .tech-board-title {
        font-size: 20px;
    }

    .tech-board-image img {
        height: 220px;
    }
}

@media(max-width: 767px){

    .tech-board-wrapper {
        padding: 40px 0;
    }

    .tech-board-heading h1 {
        font-size: 30px;
    }

    .tech-board-image img {
        height: 200px;
    }

    .tech-board-content {
        padding: 20px;
    }
}
</style>

<div class="tech-board-wrapper">

    <div class="container">

        <div class="tech-board-heading">
            <h1>
                <?php echo single_term_title('', false); ?>
            </h1>

            <?php if(!empty($current_term->description)) : ?>
                <p>
                    <?php echo $current_term->description; ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="row">

            <?php if($query->have_posts()) : ?>

                <?php while($query->have_posts()) : $query->the_post(); ?>

                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="tech-board-card">

                            <div class="tech-board-image">

                                <a href="<?php the_permalink(); ?>">

                                    <?php if(has_post_thumbnail()) : ?>

                                        <?php the_post_thumbnail('large', array(
                                            'class' => 'img-fluid'
                                        )); ?>

                                    <?php else : ?>

                                        <img src="https://via.placeholder.com/600x400"
                                             class="img-fluid"
                                             alt="<?php the_title(); ?>">

                                    <?php endif; ?>

                                </a>

                            </div>

                            <div class="tech-board-content">

                                <h2 class="tech-board-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="tech-board-desc">
                                    <?php
                                    echo wp_trim_words(
                                        get_the_excerpt(),
                                        20,
                                        '...'
                                    );
                                    ?>
                                </div>

                                <a class="tech-board-readmore"
                                   href="<?php the_permalink(); ?>">

                                    Read More →

                                </a>

                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php else : ?>

                <div class="col-12">
                    <div class="no-post-found">
                        No posts found.
                    </div>
                </div>

            <?php endif; ?>

        </div>

        <!-- Pagination -->
        <div class="tech-board-pagination">

            <?php
            echo paginate_links(array(
                'total'     => $query->max_num_pages,
                'current'   => $paged,
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
            ));
            ?>

        </div>

    </div>

</div>

<?php
wp_reset_postdata();

get_footer();
?>