<?php
   /**
   * Template Name: Gitex page Template
   */
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Gitex Africa 2024 | Meet Our Experts at Stand 8L-08, Hall 8</title>
        <meta name="Title" content="Gitex Africa 2024 | Meet Our Experts at Stand 8L-08, Hall 8" />
        <meta name="description" content="Explore business tech's future at Gitex Africa Morocco 2024 with EmizenTech. Visit Stand 8L-08, Hall 8 for insights from industry experts.">
        <link rel="canonical" href="<?php echo get_site_url(); ?>/gitex-africa.html"/>
        
        <link rel="shortcut icon" type="image/png" href="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123457" />
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/5599.css?1235" />
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
                // Set the target date and time for africa (UTC+1)
                    

                    var targetDate = new Date("2024-05-29T11:30:00+01:00").getTime();

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
