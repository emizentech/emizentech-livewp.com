<?php
/**
 * Template Name: Tech Board Category Listing
 * Description: Custom Post Type "tech-board" category listing page template
 */

get_header();
?>
<style>
/* ==========================================
   TECH BOARD LISTING PAGE CSS
========================================== */

.tech-board-wrapper{
    padding:60px 0;
}

.tech-board-heading{
    text-align:center;
    margin-bottom:50px;
}

.tech-board-heading h1{
    font-size:42px;
    font-weight:700;
    color:#222;
    margin-bottom:15px;
}

.tech-board-heading p{
    font-size:16px;
    color:#777;
    max-width:700px;
    margin:0 auto;
}

.tech-board-card{
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 18px rgba(0,0,0,0.08);
    transition:all 0.3s ease;
    height:100%;
    display:flex;
    flex-direction:column;
}

.tech-board-card:hover{
    transform:translateY(-6px);
    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

.tech-board-thumb{
    position:relative;
    overflow:hidden;
}

.tech-board-thumb img{
    width:100%;
    height:240px;
    object-fit:cover;
    transition:0.4s ease;
}

.tech-board-card:hover .tech-board-thumb img{
    transform:scale(1.05);
}

.tech-board-content{
    padding:25px;
    display:flex;
    flex-direction:column;
    flex-grow:1;
}

.tech-board-title{
    font-size:24px;
    font-weight:700;
    margin-bottom:15px;
    line-height:1.4;
}

.tech-board-title a{
    color:#222;
    text-decoration:none;
    transition:0.3s ease;
}

.tech-board-title a:hover{
    color:#007bff;
}

.tech-board-desc{
    font-size:15px;
    line-height:1.8;
    color:#666;
    margin-bottom:25px;
    flex-grow:1;
}

.read-more-btn{
    display:inline-block;
    color:#007bff;
    font-weight:600;
    text-decoration:none;
    transition:0.3s ease;
}

.read-more-btn:hover{
    color:#0056b3;
    text-decoration:none;
    letter-spacing:0.5px;
}

.no-post-found{
    text-align:center;
    font-size:20px;
    color:#777;
    padding:80px 0;
}

/* Pagination */
.tech-pagination{
    margin-top:50px;
    text-align:center;
}

.tech-pagination .page-numbers{
    display:inline-block;
    margin:0 5px;
    width:42px;
    height:42px;
    line-height:42px;
    background:#fff;
    color:#222;
    border-radius:50%;
    text-decoration:none;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
    transition:0.3s ease;
}

.tech-pagination .page-numbers.current,
.tech-pagination .page-numbers:hover{
    background:#007bff;
    color:#fff;
}

/* Responsive */
@media(max-width:991px){

    .tech-board-heading h1{
        font-size:34px;
    }

    .tech-board-thumb img{
        height:220px;
    }
}

@media(max-width:767px){

    .tech-board-wrapper{
        padding:40px 0;
    }

    .tech-board-heading h1{
        font-size:28px;
    }

    .tech-board-content{
        padding:20px;
    }

    .tech-board-title{
        font-size:20px;
    }
}
</style>

<div class="tech-board-wrapper">

    <div class="container">

        <div class="tech-board-heading">
            <h1>Tech Board Listing</h1>
            <p>
                Latest technology board posts with modern Bootstrap grid layout.
            </p>
        </div>

        <div class="row">

            <?php

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'tech-board',
                'posts_per_page' => 9,
                'paged'          => $paged,
                'post_status'    => 'publish',
            );

            $tech_query = new WP_Query($args);

            if($tech_query->have_posts()) :

                while($tech_query->have_posts()) : $tech_query->the_post();
            ?>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="tech-board-card">

                        <div class="tech-board-thumb">

                            <a href="<?php the_permalink(); ?>">

                                <?php if(has_post_thumbnail()) : ?>

                                    <?php the_post_thumbnail('large', array(
                                        'class' => 'img-fluid'
                                    )); ?>

                                <?php else : ?>

                                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="<?php the_title(); ?>">

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
                                    echo wp_trim_words(get_the_excerpt(), 50, '...');
                                ?>
                            </div>

                            <div>
                                <a href="<?php the_permalink(); ?>" class="read-more-btn">
                                    Read More →
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            <?php
                endwhile;
            else :
            ?>

                <div class="col-12">
                    <div class="no-post-found">
                        No Tech Board Posts Found.
                    </div>
                </div>

            <?php endif; ?>

        </div>

        <!-- Pagination -->
        <div class="tech-pagination">

            <?php
                echo paginate_links(array(
                    'total'   => $tech_query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                ));
            ?>

        </div>

        <?php wp_reset_postdata(); ?>

    </div>

</div>

<?php get_footer(); ?>