<?php /* Template Name: Gitex Dubai page Template */ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="index, follow" />
        <title>Gitex Global 2024 | Meet our experts at stand H15-D30.14</title>
        <meta name="Title" content="Gitex Global 2024 | Meet our experts at stand H15-D30.14" />
        <meta name="description" content="Visit EmizenTech at Gitex Global Dubai 2024 for innovative digital transformation solutions, software development and technology consulting services.">
        <link rel="canonical" href="<?php echo get_site_url(); ?>/gitex-global.html"/>
        
        <link rel="shortcut icon" type="image/png" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123457" />
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/7278.css?1235" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/owl.carousel.min.css" />
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WQB2Z8D');</script>
        <!-- End Google Tag Manager -->
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <div id="primary" class="content-area">
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB2Z8D"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <main id="main" class="site-main">
                <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
            </main>
        </div>
        <script src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/js/jquery.min.js"></script>
        <script src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                    // Set the target date and time for Dubai (UTC+4)
                    var targetDate = new Date("2024-10-14T12:00:00+04:00").getTime();
                    var countdownInterval = setInterval(function() {
                    var currentDate = new Date().getTime();
                    
                    var distance = targetDate - currentDate;
                    // Calculate days, hours, minutes, and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Display the countdown
                    $("#countdown").html("<div class='timer_texts'> <ul><li>" + days + "<span>DAYS</span> </li> <li>" + hours + "<span>HOURS</span> </li> <li>" + minutes + "<span>MINUTES </span></li> <li>" + seconds + "<span>SECONDS </span> </li></ul></div>");

                    // If the countdown is over, clear the interval
                    if (distance <= 0) {
                        clearInterval(countdownInterval);
                        $("#countdown").html("<p>WE ARE LIVE NOW!</p>");
                    }
                }, 1000); 
            });
        </script>
        <script>
            $(".owl-carousel.OND_ser_slider ").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,

                responsive: {
                    0: {
                        items: 1,
                    },
                },
            });
        </script>
       
    </body>
</html>
