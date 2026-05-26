<?php /* Template Name: Tech Board */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/twentytwentyone-child/assets/css/pages/58270.css?v=0192837483" />
<script type="application/ld+json">
    {

        "@context": "https://schema.org",

        "@type": "FAQPage",

        "mainEntity": [{

            "@type": "Question",

            "name": "How does Emizentech share daily tech updates?",

            "acceptedAnswer": {

                "@type": "Answer",

                "text": "We track global technology trends, major product launches, startup innovations, and AI breakthroughs. Each update is curated based on relevance, search interest, and potential impact for our readers."

            }

        }, {

            "@type": "Question",

            "name": "Are these tech updates only about gadgets or consumer technology?",

            "acceptedAnswer": {

                "@type": "Answer",

                "text": "Not at all. While gadgets are included, we also cover AI & ML, Blockchain, SaaS solutions, cybersecurity developments, and enterprise software trends."

            }

        }, {

            "@type": "Question",

            "name": "How quickly do updates appear after a new tech development?",

            "acceptedAnswer": {

                "@type": "Answer",

                "text": "We aim to post updates within 24 hours of major announcements, ensuring our readers get fresh, real-time tech news."

            }

        }, {

            "@type": "Question",

            "name": "How are these updates different from typical tech blogs?",

            "acceptedAnswer": {

                "@type": "Answer",

                "text": "Unlike long-form blogs, each update is a short PR-style snippet that delivers the essence of news, allowing readers to stay informed quickly."

            }

        }, {

            "@type": "Question",

            "name": "Will I find global tech news or only tech trends?",

            "acceptedAnswer": {

                "@type": "Answer",

                "text": "Both. We cover global technology news, including AI, SaaS, gadgets, and cybersecurity, while also highlighting key developments also."

            }

        }, {

            "@type": "Question",

            "name": "Can I subscribe for daily updates without missing any post?",

            "acceptedAnswer": {

                "@type": "Answer",

                "text": "Yes! You can subscribe to our newsletter or enable notifications to receive daily curated updates directly in your inbox."

            }

        }]

    }
</script>
<main>
    <?php
    // Posts
    $args = array(
        'post_type'      => 'tech-board',
        'posts_per_page' => -1, // get all posts
        'orderby'        => 'modified', // order by last updated
        'order'          => 'DESC'
    );
    $tech_board_posts = get_posts($args);

    // Categories
    $tech_board_categories = get_terms(array(
        'taxonomy'   => 'tech_board_category',
        'hide_empty' => true,
    ));
    ?>
    <div class="main-blog-sec">
        <div style="display: none;">
            <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>
        </div>
        <section class="blog-inner">
            <div class="container mt-4">
                <div class="row flex-wrap">
                    <?php
                    foreach ($tech_board_posts as $p_key => $post) {
                        if ($p_key != 0) break;
                        $terms = get_the_terms($post->ID, 'tech_board_category');
                    ?>
                        <div class="col-blog">
                            <h1 class="blog-page-title">Tech Board -  <span class="titlespan" style="color : #007db2"> Trending Tech First </span> </h1>
                            <img decoding="async" src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>" alt="<?php echo get_the_title($post->ID); ?>" width="1109" height="623" class="w-100 mb-3 d-none d-md-block" alt="blog">
                            <div class="blog-stitle pb-2">
                                <?php
                                $terms = get_the_terms($post->ID, 'tech_board_category');
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    $output = [];
                                    foreach ($terms as $term) {
                                        $term_link = get_term_link($term);
                                        if (!is_wp_error($term_link)) {
                                            $output[] = '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                                        }
                                    }
                                    echo implode(', ', $output);
                                }
                                ?>
                                <span class="publish-date"><?php echo get_the_modified_date('F j, Y', $post->ID); ?> | <?php echo emz_get_read_time($post->ID); ?> Mins Read</span>
                            </div>
                            <a href="<?php echo get_permalink($post->ID); ?>" rel="noopener">
                                <h2 class="blog-title pb-0"><?php echo get_the_title($post->ID); ?></h2>
                            </a>
                            <p class="blog-discp pb-0"><?php echo wp_trim_words(get_the_excerpt($post->ID), 25); ?></p>
                        </div>
                    <?php } ?>
                    <div class="blog-sidebar">
                        <div class="sarchform">
                            <form action="" method="get">
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control" name="search" placeholder="Search">
                                    <button type="submit" class="btn submit-btn">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="recommd-list mb-4">
                            <h3 class="Recommendation-title">Recommendation</h3>
                            <?php foreach ($tech_board_posts as $rp_key => $post) {
                                if ($rp_key > 2) break;
                            ?>
                                <div class="recommd-card">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>" class="blog-img mx-auto mx-sm-0" alt="<?php echo get_the_title($post->ID); ?>" width="110" height="70">
                                    <div class="sideblog-info">
                                        <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
                                        <p><?php echo wp_trim_words(get_the_excerpt($post->ID), 15); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="sarchform pt-3">
                            <h3><img decoding="async" src="https://emizentech.com/wp-content/uploads/2025/09/newsletter.svg" alt="Subscribe to our Newsletter" width="70" height="58"> Subscribe to our Newsletter</h3>
                            <div class="form-group position-relative mb-0 sub-form">
                                <form class="newsletter-form" method="POST">
                                    <input type="email" name="newsletter_email" placeholder="Enter your email" required>
                                    <button type="submit" class="btn submit-btn">Subscribe</button>
                                </form>
                            </div>
                            <?php if (isset($_GET['subscribed']) && $_GET['subscribed'] === 'true') : ?>
                                <p class="success-msg" style="color:green;">Thanks for subscribing!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <?php if (isset($tech_board_categories)) { ?>
        <section class="category_sec_blog mt-5">
            <div class="container">
                <h2 class="category-title sec-title2 pb-0">Categories</h2>
                <div class="category-tabs mt-4">
                    <nav>
                        <div class="nav nav-tabs mt-0 d-flex flex-wrap" id="nav-tab" role="tablist">
                            <?php foreach ($tech_board_categories as $cat_key => $category) { ?>
                                <button class="w-100 text-left nav-link <?php echo $cat_key == array_key_first($tech_board_categories) ? 'active' : '' ?>" id="nav-cat-<?php echo $cat_key; ?>-tab" data-toggle="tab"
                                    data-target="#nav-cat-<?php echo $cat_key; ?>" type="button" role="tab" aria-controls="nav-cat-<?php echo $cat_key; ?>"
                                    aria-selected="true"><?php echo $category->name; ?></button>
                            <?php } ?>
                        </div>
                    </nav>
                    <div class="tab-listing">
                        <div class="tab-content d-block" id="nav-tabContent">
                            <?php foreach ($tech_board_categories as $cat_c_key => $category) {
                                $cat_args = array(
                                    'post_type'      => 'tech-board',
                                    'posts_per_page' => -1,
                                    'tax_query'      => array(
                                        array(
                                            'taxonomy' => 'tech_board_category',
                                            'field'    => 'term_id',
                                            'terms'    => array($category->term_id),
                                        ),
                                    ),
                                );
                                if (isset($_GET['search'])) {
                                    $cat_args['s'] = $_GET['search'];
                                }
                                $tech_board_c_posts = get_posts($cat_args);
                            ?>
                                <div class="tab-pane fade <?php echo $cat_c_key == array_key_first($tech_board_categories) ? 'show active' : '' ?>" id="nav-cat-<?php echo $cat_c_key; ?>" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="px-md-3">
                                        <div class="row">
                                            <?php foreach ($tech_board_c_posts as $cat_p_key => $post) { ?>
                                                <div class="col-md-6 mb-2">
                                                    <div class="recommd-card">
                                                        <img decoding="async"
                                                            src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>"
                                                            class="blog-img"
                                                            alt="<?php echo get_the_title($post->ID); ?>" width="200" height="130">
                                                        <div class="sideblog-info">
                                                            <h3>
                                                                <a href="<?php echo get_permalink($post->ID); ?>">
                                                                    <?php echo get_the_title($post->ID); ?>
                                                                </a>
                                                            </h3>
                                                            <p><?php echo wp_trim_words(get_the_excerpt($post->ID), 10, '...'); ?></p>
                                                            <p class="blog-time"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                                                                <?php echo get_the_modified_date('F j, Y', $post->ID); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <section class="service-sec">
        <div class="container">
            <div class="row">
                <?php
                foreach ($tech_board_posts as $pl_key => $post) {
                    if ($pl_key == 0) continue;
                    $terms = get_the_terms($post->ID, 'tech_board_category');
                ?>
                    <div class="col-xl-3 col-md-4 col-lg-6 mt-3 mb-1 pb-1">
                        <div class="service-card position-relative overflow-hidden text-md-left text-center">
                            <div class="overlay-infos">
                                <h3 class="service-title text-white">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'tech_board_category');
                                    if (!empty($terms) && !is_wp_error($terms)) {
                                        $output = [];
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            if (!is_wp_error($term_link)) {
                                                $output[] = '<a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a>';
                                            }
                                        }
                                        echo implode(', ', $output);
                                    }
                                    ?>
                                    </a></h3>
                                <a href="<?php echo get_permalink($post->ID); ?>" rel="noopener">
                                    <h4 class="homesubtitle">
                                        <?php echo get_the_title($post->ID); ?>
                                    </h4>
                                </a>
                                <p class="service-text text-white">
                                    <span class="ecomdate"><?php echo get_the_modified_date('F j, Y', $post->ID); ?> | <?php echo emz_get_read_time($post->ID); ?> Mins Read</span>
                                    <?php echo wp_trim_words(get_the_excerpt($post->ID), 25); ?>
                                </p>
                            </div>
                            <div class="image radimage d-none d-md-flex"><img class="w-100" src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>" alt="<?php echo get_the_title($post->ID); ?>" width="378" height="321"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="cta_section mt-lg-5 mt-4">
        <div class="container">
            <div class="cta-box text-center overflow-hidden position-relative">
                <img decoding="async" src="https://emizentech.com/wp-content/uploads/2025/09/cta_blog.png" class="cta_img-absolute w-100" alt="cta">
                <h3 class="text-white pb">Stay Ahead with Emizentech’s Tech Board</h3>
                <p class="text-white">Dive into the latest in AI, mobile apps, eCommerce, and Salesforce insights. Our expert-driven articles and guides are designed to keep you informed and ahead of the curve.</p>
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
    </section>
    <section class="home_faq_sec pb-lg-5 pb-4">
        <div class="container">
            <div class="text-center pb-1">
                <h2 class="sec-title2">Frequently Asked Questions</h2>
            </div>
            <div class="faq-wrap pt-4">
                <div id="homefaq">
                    <div class="faq_card mb-2">
                        <div id="faqtitleOne" class="card-header">
                            <button class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" aria-expanded="true">How does Emizentech share daily tech updates?</button>
                        </div>
                        <div id="collapseOne" class="collapse collap-card show" aria-labelledby="faqtitleOne" data-parent="#homefaq">
                            <div class="card-body">We track global technology trends, major product launches, startup innovations, and AI breakthroughs. Each update is curated based on relevance, search interest, and potential impact for our readers.</div>
                        </div>
                    </div>
                    <div class="faq_card mb-2">
                        <div id="faqtitleTwo" class="card-header">
                            <button class="btn btn-link collapsed" data-target="#collapseTwo" data-toggle="collapse" aria-expanded="false">Are these tech updates only about gadgets or consumer technology?</button>
                        </div>
                        <div id="collapseTwo" class="collapse collap-card" aria-labelledby="faqtitleTwo" data-parent="#homefaq">
                            <div class="card-body">Not at all. While gadgets are included, we also cover AI & ML, Blockchain, SaaS solutions, cybersecurity developments, and enterprise software trends.</div>
                        </div>
                    </div>
                    <div class="faq_card mb-2">
                        <div id="faqtitlethree" class="card-header">
                            <button class="btn btn-link collapsed" data-target="#collapsethree" data-toggle="collapse" aria-expanded="false">How quickly do updates appear after a new tech development?</button>
                        </div>
                        <div id="collapsethree" class="collapse collap-card" aria-labelledby="faqtitlethree" data-parent="#homefaq">
                            <div class="card-body">We aim to post updates within 24 hours of major announcements, ensuring our readers get fresh, real-time tech news.</div>
                        </div>
                    </div>
                    <div class="faq_card mb-2">
                        <div id="faqtitlefour" class="card-header">
                            <button class="btn btn-link collapsed" data-target="#collapsefour" data-toggle="collapse" aria-expanded="false">How are these updates different from typical tech blogs?</button>
                        </div>
                        <div id="collapsefour" class="collapse collap-card" aria-labelledby="faqtitlefour" data-parent="#homefaq">
                            <div class="card-body">Unlike long-form blogs, each update is a short PR-style snippet that delivers the essence of news, allowing readers to stay informed quickly.</div>
                        </div>
                    </div>
                    <div class="faq_card mb-2">
                        <div id="faqtitlesix" class="card-header">
                            <button class="btn btn-link collapsed" data-target="#collapsesix" data-toggle="collapse" aria-expanded="false">Will I find global tech news or only tech trends?</button>
                        </div>
                        <div id="collapsesix" class="collapse collap-card" aria-labelledby="faqtitlesix" data-parent="#homefaq">
                            <div class="card-body">Both. We cover global technology news, including AI, SaaS, gadgets, and cybersecurity, while also highlighting key developments also.</div>
                        </div>
                    </div>
                    <div class="faq_card mb-2">
                        <div id="faqtitleseven" class="card-header">
                            <button class="btn btn-link collapsed" data-target="#collapseseven" data-toggle="collapse" aria-expanded="false">Can I subscribe for daily updates without missing any post?</button>
                        </div>
                        <div id="collapseseven" class="collapse collap-card" aria-labelledby="faqtitleseven" data-parent="#homefaq">
                            <div class="card-body">Yes! You can subscribe to our newsletter or enable notifications to receive daily curated updates directly in your inbox.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</main>
<?php get_footer(); ?>