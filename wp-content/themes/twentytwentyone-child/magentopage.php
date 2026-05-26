<?php
/**
* Template Name: Magento Page Template
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <?php  wp_head(); ?>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
      <meta charset="UTF-8" />
      <link rel="shortcut icon" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" type="image/x-icon" />

      
      <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/owl.carousel.min.css?123510" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123510" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/styles.css?123510" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/font-awesome.min.css?123510" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/header.css?123511" rel="stylesheet" type="text/css" media="all" />
      <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/29039.css?123513" rel="stylesheet" type="text/css" media="all" />

      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
                    <!-- Remember to include jQuery :) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
                    <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

        <script src="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/js/owl.carousel.min.js"></script>  
        

       <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-WQB2Z8D');
      </script>
      <!-- End Google Tag Manager -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11006513864"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-11006513864');
        </script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=G-84ZQDW2CJX"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-84ZQDW2CJX');
        </script>

    </head>

    <body>
     <!-- Google Tag Manager (noscript) -->
      <noscript>
         <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB2Z8D" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
      </noscript>
   <!-- Google Tag Manager (noscript) -->
        <div id="primary" class="content-area">
            
            <main id="main" class="site-main">
              <?php
                $utm_term = isset($_GET['utm_term']) ? sanitize_text_field($_GET['utm_term']) : '';
                ?>
                <div class="custom-header">

    <div class="container">
        <nav class="navbar navbar-expand-lg magento-navbar">
            <a class="navbar-brand" href="https://emizentech.com/"><img src="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/logos/Logo-wt_210w.svg" height="49" width="210"> </a>
<a href="#contact-form-act" class="enquiry-btn new-btn ml-auto"><img class="d-md-none d-inline-block" src="https://emizentech.com/wp-content/uploads/2025/08/phone-call.svg" alt="Get My Free Consultation" width="30" height="30"><span class="d-inline-block d-none"> Get My Free Consultation </a>           
        </nav>
    </div>
</div>
<section class="emiz_hero_sec position-relative overflow-hidden">
   <img src="https://emizentech.com/wp-content/uploads/2025/11/banner-logo.png" class="center-img d-md-block d-none banner-img" alt="Your Trusted Magento Development Services / Adobe Commerce Experts in USA">
   <div class="container">
      <div class="row align-items-start">
         <div class="col-lg-7">
          
            <?php if ($utm_term === 'magento ecommerce development company') : ?>
            <div class="hero-title magento-ecommerce text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Top-Rated Magento Ecommerce Development Company for US Brands</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  As an Adobe Bronze Partner, we engineer scalable, high-performance online stores that drive revenue. Trust your growth to a dedicated team focused on US market success and ROI.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
            <?php elseif ($utm_term === 'magento web development company') : ?>
            <div class="hero-title magento-web text-lg-left text-center">
               <h1 class="text-header text-white mb-2">The Magento Web Development Company You Can Trust</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Stop dealing with downtime and slow speeds. Get a robust, secure, and optimized storefront built by certified experts who understand the complex demands of the American enterprise market.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
            <?php elseif ($utm_term === 'magento development company') : ?>
            <div class="hero-title magento-development text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Enterprise-Grade Magento Development Company</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  We help ambitious US retailers scale efficiently with clean custom code, lightning-fast load times, and seamless third-party integrations that ensure your business never misses a sale.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento development agency') : ?>
            <div class="hero-title magento-agency text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Full-Service Magento Development Agency</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Get Strategy, Design, and Development under one roof. Our 100% in-house team focuses on maximizing your ROI through data-driven architecture and rigorous quality assurance testing before launch.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'adobe commerce development company') : ?>
            <div class="hero-title adobe-commerce text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Premier Adobe Commerce Development Company</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Unlock the full potential of Adobe Commerce Cloud with certified enterprise experts. We deliver secure, cloud-native solutions designed to handle high-volume traffic without compromising on performance or security.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'adobe commerce agency') : ?>
            <div class="hero-title adobe-agency text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Your Strategic Adobe Commerce Agency Partner</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  We specialize in complex B2B integrations and seamless migrations delivered on time. Partner with an agency that prioritizes transparent communication and aligns perfectly with your business goals.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'adobe commerce development agency') : ?>
            <div class="hero-title adobe-commerce-agency text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Leading Adobe Commerce Development Agency</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Transform your legacy systems into modern, agile commerce experiences. We provide end-to-end development support, ensuring your platform is future-proof, secure, and ready to scale with your business.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento web development services') : ?>
            <div class="hero-title magento-web-services text-lg-left text-center">
               <h1 class="text-header text-white mb-2">End-to-End Magento Web Development Services</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  From initial architecture to ongoing maintenance, we handle your entire technical stack. Our US-aligned team ensures your storefront remains secure, fast, and fully optimized for peak traffic periods.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento development services') : ?>
            <div class="hero-title magento-development-services text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Expert Magento Development Services for Growth</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Achieve clean code, faster page speeds, and higher conversion rates. We provide comprehensive development services including theme customization, extension integration, and performance tuning for maximum efficiency.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento ecommerce development services') : ?>
            <div class="hero-title magento-ecommerce-services text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Scalable Magento eCommerce Development Services</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  We build B2B and B2C solutions designed to handle high traffic and complex inventories. Experience a stable platform that supports thousands of SKUs and concurrent users without crashing.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'custom magento development services') : ?>
            <div class="hero-title custom-magento-services text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Custom Magento Development Services for Unique Needs</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Don't settle for templates. We build custom modules tailored to your business logic, ensuring your unique workflows and customer experiences are perfectly implemented without technical debt.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'certified magento ecommerce services') : ?>

            <div class="hero-title certified-magento-ecommerce text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Certified Magento Ecommerce Services & Consulting</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Work directly with developers who know the core code inside out. We guarantee zero shortcuts and 100% compliance with Adobe's coding standards for a secure and stable store.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento customization services') : ?>
            <div class="hero-title magento-customization-services text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Advanced Magento Customization Services</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Extend your store's functionality with custom plugins, API integrations, and checkout flows. We modify your platform to fit your business, not the other way around, ensuring seamless operations.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'hire magento developer') : ?>
            <div class="hero-title hire-magento-developer text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Hire Magento Developers (Top 1% Agency Talent)</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Skip the risk of freelancers. Get a dedicated, certified team backed by a full-service agency. We provide transparent communication, daily updates, and seamless timezone overlap for your project.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'certified magento developers') : ?>
            <div class="hero-title certified-magento-developers text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Access Certified Magento Developers On-Demand</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Adobe Certified experts ready to join your project immediately. Scale your development capacity without overhead costs, ensuring you meet your project deadlines with high-quality, bug-free code.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento website developer') : ?>
            <div class="hero-title magento-website-developer text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Partner with a Senior Magento Website Developer</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Access technical excellence for complex builds. We fix what others break, providing senior-level problem solving for database issues, speed optimization, and complex third-party integrations.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento certified experts') : ?>
            <div class="hero-title magento-certified-experts text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Consult with Magento Certified Experts Today</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Get a technical audit from architects who have solved your specific problems before. We analyze your code, identify bottlenecks, and provide a clear roadmap to technical stability.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'adobe commerce developer') : ?>
            <div class="hero-title adobe-commerce-developer text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Adobe Commerce Developers for Enterprise</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Leverage specialized knowledge in Cloud infrastructure, B2B modules, and large-scale deployment. Our developers ensure your Adobe Commerce setup is optimized for security, speed, and massive scalability.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'hire adobe commerce developers') : ?>
            <div class="hero-title hire-adobe-commerce text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Hire Adobe Commerce Developers (Dedicated Team)</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Scale your dev capacity instantly with vetted experts. We integrate into your existing workflow, providing the manpower you need to ship features faster while maintaining strict code quality.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'custom magento development') : ?>
            <div class="hero-title custom-magento-development text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Tailored Custom Magento Development Solutions</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Your business isn't generic, and your store shouldn't be either. We code tailored solutions for your specific workflows, ensuring seamless ERP integration and a unique competitive advantage.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'magento ecommerce store development') : ?>
            <div class="hero-title magento-ecommerce-store text-lg-left text-center">
               <h1 class="text-header text-white mb-2">High-Conversion Magento eCommerce Store Development</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Beautiful User Experience meets powerful engineering. We build stores designed to convert US traffic by combining aesthetic design with a lightning-fast, secure, and mobile-responsive backend.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'custom adobe commerce development') : ?>
            <div class="hero-title custom-adobe-commerce  text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Custom Adobe Commerce Development for B2B</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  We build sophisticated portals, custom pricing engines, and SAP/ERP integrations. Our solutions are designed to automate your complex B2B operations and streamline your order management process.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php elseif ($utm_term === 'adobe commerce development') : ?>
            <div class="hero-title adobe-commerce-development text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Strategic Adobe Commerce Development</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  Future-proof your business with a platform built for scalability. We implement robust architecture that grows with your revenue, ensuring long-term stability and reduced maintenance costs.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>
                    <?php else : ?>
                      <div class="hero-title Defaltsection text-lg-left text-center">
               <h1 class="text-header text-white mb-2">Scale Your Store with Certified Magento (Adobe Commerce) Development Experts</h1>
               <p class="hero-desc text-white pb-2 mb-lg-2 mx-lg-0 mx-auto">
                  As a Certified Adobe Commerce Solution Partner, we deliver end-to-end full-stack Magento development services, including risk-free migration expertise and bespoke custom, scalable eCommerce solutions engineered for high-volume performance.
               </p>
               <div class="hero_sec-btn">
                  <a class="btn emizen-btn mt-md-4 mt-2  d-md-none" href="https://emizentech.com/enquiry.html">Get a Free Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                  <div class="adobe-img d-flex align-items-center">
                     <img src="https://emizentech.com/wp-content/uploads/2025/12/adobe-solution-partner-img.png" class="mt-3" alt="clutch" width="226" height="98"> <img src="https://emizentech.com/wp-content/uploads/2025/12/clutch-logo.png" class="mt-3" alt="clutch" width="226" height="98">
                  </div>
               </div>
            </div>

                    <?php endif; ?>
            
         </div>
         <div class="col-lg-5">
            <div class="contact-form" id="contact-form-act">
               <h3 class="form-title text-md-left">Start Your Magento Project Today</h3>
               <?php echo do_shortcode('[elementor-template id="21197"]'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="trusted-partners" class="trusted-partner">
<div class="container">
<h3 class="trusted-title d-inline-block mb-lg-4 mb-3">Trusted By Brands</h3>
<ul class="px-0 d-flex flex-wrap align-items-start mb-0">
    <li class="text-center"><img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/11/w-icon1.svg" alt="icon1" width="80" height="80" /></li>
    <li class="text-center"><img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/11/w-icon2.svg" alt="icon1" width="80" height="80" /></li>
    <li class="text-center"><img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/11/w-icon3.svg" alt="icon1" width="80" height="80" /></li>
    <li class="text-center"><img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/11/w-icon4.svg" alt="icon1" width="80" height="80" /></li>
    <li class="text-center"><img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/11/partner2.svg" alt="icon1" width="80" height="80" /></li>
    <li class="text-center"><img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/11/w-icon5.svg" alt="icon1" width="80" height="80" /></li>
</ul>
</div>
</section>
<section class="our-sucess-sec">
    <div class="container">
        <div class="counter-box">
            <div class="sec-header">
                <h2 class="text-white sec-title2">Your Trusted Magento Development Partner</h2>
                <p class="sec-disc text-white mx-auto">Transform your online business with our Magento certified experts delivering lightning-fast, conversion-optimized, and AI-powered eCommerce experiences.</p>
            </div>
            <div class="d-flex flex-wrap justify-content-lg-between justify-content-center middle-counter-box mt-3">
                <div class="counter-block d-inline-block">
                    <div class="emiz-pr-counter pb-md-0 pb-2">
                        <div class="skill-dsc text-center w-100 position-relative text-md-left text-center">
                            <h2 class="text-white text-center"><span class="emizentech-counter">11</span>+</h2>
                            <div class="text-white text-center">Years of IT Expertise</div>
                        </div>
                    </div>
                </div>
                <div class="counter-block d-inline-block">
                    <div class="emiz-pr-counter pb-md-0 pb-2">
                        <div class="skill-dsc text-center w-100 position-relative text-md-left text-center">
                            <h2 class="text-white text-center"><span class="emizentech-counter">150</span>+</h2>
                            <div class="text-white text-center">Certified Professionals</div>
                        </div>
                    </div>
                </div>
                <div class="counter-block d-inline-block">
                    <div class="emiz-pr-counter pb-md-0 pb-2">
                        <div class="skill-dsc text-center w-100 position-relative text-md-left text-center">
                            <h2 class="text-white text-center"><span class="emizentech-counter">100</span>+</h2>
                            <div class="text-white text-center">Industries we Serve</div>
                        </div>
                    </div>
                </div>
                <div class="counter-block d-inline-block">
                    <div class="emiz-pr-counter pb-md-0 pb-2">
                        <div class="skill-dsc text-center w-100 position-relative text-md-left text-center">
                            <h2 class="text-white text-center"><span class="emizentech-counters">24/7</span></h2>
                            <div class="text-white text-center">Dedicated Support</div>
                        </div>
                    </div>
                </div>
                <div class="counter-block d-inline-block">
                    <div class="emiz-pr-counter pb-md-0 pb-2">
                        <div class="skill-dsc text-center w-100 position-relative text-md-left text-center">
                            <h2 class="text-white text-center"><span class="emizentech-counter">50</span>+</h2>
                            <div class="text-white text-center">Countries Served Worldwide</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 mt-md-4 mt-3">
                <a class="btn emizen-btn mt-md-4 mt-2" data-toggle="modal" data-target="#pricingModal" href="#pricingModal">Hire Magento Certified Developers Now <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-sec pb-xl-5 mb-3 pb-3">
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 text-center mx-auto">
                <h2 class="sec-title2">Why Choose Emizentech for Magento Development Services</h2>
                <p class="sec-disc m-0">A Trusted Magento eCommerce Development Company &amp; Adobe Commerce Agency Delivering Expert Developers, Full-Suite Services &amp; Seamless Magento Migration.</p>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block"><img src="https://emizentech.com/wp-content/uploads/2025/11/certified-magento.svg" width="60" height="60" alt="Dedicated Full-Stack Developers"></span>
                        <h3 class="title3 pb-xl-3 pb-1 mb-2">Certified Magento Developers</h3>
                        <p class="hire-ds mb-3 pb-xl-1">Our certified Magento developers bring deep expertise in building custom, scalable Magento and Adobe Commerce stores. From custom modules and extensions to full storefront development, our team follows best coding practices to ensure performance, security, and long-term maintainability.
                        </p>
                    </div>
                    
                </div>
            </div>
             <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block"><img src="https://emizentech.com/wp-content/uploads/2025/11/full-suite-magento.svg" width="25" height="25" alt="Full-Suite Magento Development Services"></span>
                        <h3 class="title3 pb-xl-3 pb-1 mb-2">Full-Suite Magento Development Services</h3>
                        <p class="hire-ds mb-3 pb-xl-1">We offer complete Magento web development services, including UX/UI design, backend development, third-party integrations, and Adobe Commerce Cloud setup. Our team also handles theme development, API integrations, performance optimization, ongoing support, maintenance, and security updates for a fully future-ready store.</p>
                    </div>
                    
                </div>
            </div>
             <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block"><img src="https://emizentech.com/wp-content/uploads/2025/11/zero-downtime.svg" width="25" height="25" alt="Zero-Downtime Magento Migration"></span>
                        <h3 class="title3 pb-xl-3 pb-1 mb-2">Zero-Downtime Magento Migration</h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Our team ensures smooth, secure, and fully managed Magento migration from platforms like Shopify, WooCommerce, BigCommerce, and more. We maintain 100% data accuracy for products, customers, orders, SEO links, and custom functionalities — all with zero downtime and no disruptions.
                        </p>
                    </div>
                    
                </div>
            </div>
             <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block"><img src="https://emizentech.com/wp-content/uploads/2025/11/Experienced.svg" width="25" height="25" alt="Adobe Commerce Agency With Proven Expertise"></span>
                        <h3 class="title3 pb-xl-3 pb-1 mb-2">Adobe Commerce Agency With Proven Expertise</h3>
                        <p class="hire-ds mb-3 pb-xl-1">As a trusted Adobe Commerce and Magento development agency, we deliver high-performance, conversion-focused eCommerce solutions built on strong strategy and technical excellence. From audits and store optimizations to full-scale enterprise Adobe Commerce implementations, we help brands grow faster and smarter.</p>
                    </div>
                    
                </div>
            </div>
             <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block"><img src="https://emizentech.com/wp-content/uploads/2025/11/fast-onboarding.svg" width="25" height="25" alt="Fast Onboarding &amp; Transparent Process"></span>
                        <h3 class="title3 pb-xl-3 pb-1 mb-2">Fast Onboarding &amp; Transparent Process</h3>
                        <p class="hire-ds mb-3 pb-xl-1">Kick off your Magento project within 24–48 hours with agile workflows, dedicated project managers, and clear communication at every step. Our transparent process ensures predictable timelines, consistent updates, and a smooth development experience end to end.
                        </p>
                    </div>
                    
                </div>
            </div>                
             <div class="col-12 mt-4 text-center">
                <a class="btn emizen-btn fill-bg" data-toggle="modal" data-target="#pricingModal" href="#pricingModal">Start Your Magento Project <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
            </div>
        </div>
    </div>
</section>
<section class="growing-brands position-relative overflow-hidden" id="fashion-development">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/magento-logo.png" class="main-logo top-right d-none d-md-block" alt="magento">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/m-bottom.png" class="main-logo bottom-left d-none d-md-block" alt="magento">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-xl-4 pb-xl-3 mb-2">
                <div class="text-center">
                    <h2 class="sec-title2 text-white">Fashion &amp; Apparel Website Development Services for Growing Brands</h2>
                    <p class="sec-disc text-white">Transform your apparel brand into a digital powerhouse with high-performance, visually stunning eCommerce experiences. As a leading fashion eCommerce website development agency, we build Adobe Commerce (Magento) solutions for luxury boutiques and fast fashion, handling complex catalogs, seasonal spikes, and flawless visuals.</p>
                    <p class="sec-disc text-white">Brands trust our fashion website development company for aesthetics and technical robusticity. With virtual try-on integration, advanced size guides, and mobile-first design, our clothing store website developer experts turn scrollers into loyal buyers.</p>
                </div>
            </div>
        </div>
        <div class="growing-card-box">
            <div class="row">
            <div class="col-md-6">
                <div class="grw-card d-flex align-items-start">
                    <span class="rounded-pill circle-box">
                        <img src="https://emizentech.com/wp-content/uploads/2025/12/website.svg" width="30" height="30" alt="Custom Fashion Website Development">
                    </span>
                    <div class="grw-ctt">
                        <h3 class="text-white">Custom Fashion Website Development</h3>
                        <p class="text-white">Bespoke themes that reflect your brand’s identity, featuring interactive lookbooks, high-resolution galleries, and seamless navigation.</p>
                    </div>
                </div>
                 <div class="grw-card d-flex align-items-start">
                    <span class="rounded-pill circle-box">
                        <img src="https://emizentech.com/wp-content/uploads/2025/12/ec02.svg" width="30" height="30" alt="Apparel Ecommerce Development &amp; Scalability">
                    </span>
                    <div class="grw-ctt">
                        <h3 class="text-white">Apparel Ecommerce Development &amp; Scalability</h3>
                        <p class="text-white">Robust backend architecture designed to handle high-traffic events like Black Friday sales and seasonal product drops without downtime.</p>
                    </div>
                </div>
                 <div class="grw-card d-flex align-items-start">
                    <span class="rounded-pill circle-box">
                        <img src="https://emizentech.com/wp-content/uploads/2025/12/ec03.svg" width="30" height="30" alt="Omnichannel Fashion Ecommerce Agency">
                    </span>
                    <div class="grw-ctt">
                        <h3 class="text-white">Omnichannel Fashion Ecommerce Agency</h3>
                        <p class="text-white">Unified commerce solutions connecting your online store with physical retail POS, ERPs, and inventory management systems for real-time stock accuracy.</p>
                    </div>
                </div>
                 <div class="grw-card d-flex align-items-start">
                    <span class="rounded-pill circle-box">
                        <img src="https://emizentech.com/wp-content/uploads/2025/12/ec04.svg" width="30" height="30" alt="Conversion-Optimized Experience">
                    </span>
                    <div class="grw-ctt">
                        <h3 class="text-white">Conversion-Optimized Experience</h3>
                        <p class="text-white">Advanced checkout flows, AI-powered product recommendations, and "Shop the Look" features to maximize Average Order Value (AOV).</p>
                    </div>
                </div>
                  <div class="w-100 mt-lg-4 text-md-left text-center">
                <a class="btn emizen-btn unfill-bg" style="text-transform: none" data-toggle="modal" data-target="#pricingModal" href="#pricingModal"> Get a Fashion Industry Consultation <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
            </div>
            </div>
            <div class="col-md-6">
                <div class="transform-slider">
                    <div class="tranform-slider-box"><img src="https://emizentech.com/wp-content/uploads/2025/12/overlapping-img.png" width="170" height="517" alt="Fashion &amp; Apparel Website Development Services for Growing Brands"></div>
                    <img src="https://emizentech.com/wp-content/uploads/2025/12/growing-img.png" width="480" height="601" class="d-none d-md-block" alt="Fashion &amp; Apparel Website Development Services for Growing Brands">
                </div>
            </div>
                          
            </div>        
        </div>
        </div>
</section>
<section class="hire-developers-sec" id="dev-profile">
    <div class="container">
        <div class="sec-header mx-auto text-center mb-md-4 mb-3">
            <h2 class="sec-title2">Hire Adobe Commerce Developers</h2>
            <p class="sec-disc mx-auto">Looking to hire dedicated Magento developer or an entire team? Our talent pool includes:</p>
        </div>
        <div id="new-slider" class="owl-carousel" data-loop="true" data-autoplay="true" data-items="3" data-dots="false" data-items-mobile-portrait="1" data-items-tablet="2" data-items-mobile-landscape="2" data-margin="20" data-nav="true">
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/rps1.png" width="198" height="198" class="mt-2 rounded-pill" alt="Shankar Jangid">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Shankar Jangid <br><span class="work-exp">12+ Years of Experience</span> </h3>
                            <p class="suces-info pb-0">He is a highly-proficient Magento developer with experience delivering various projects within a specified timeframe.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li>PHP</li>
                                <li>Shopify </li>
                                <li>Magento </li>
                                <li>JavaScript </li>
                                <li>Git </li>
                                <li>Jquery </li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/profile-4.png" width="198" height="198" class="mt-2 rounded-pill" alt="Ajit Jain">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Ajit Jain <br><span class="work-exp">10+ Years of Experience </span> </h3>
                            <p class="suces-info pb-0">He is one of the best certified Magento developers of Emizentech who develop feature-rich and custom Magento development solutions.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li>PHP</li>
                                <li>Magento</li>
                                <li>JavaScript</li>
                                <li>Db</li>
                                <li>Jquery</li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                                <li>Git</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/rps13.png" width="198" height="198" class="mt-2 rounded-pill" alt="Sunil Gupta">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Sunil Gupta <br><span class="work-exp">9+ Years of Experience</span> </h3>
                            <p class="suces-info pb-0">He is committed to maintaining strong security and maximizing the store's overall performance. He keeps Magento stores steady, secure, and dependable with the entirety from speed improvements to PCI compliance and server optimization.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li> PHP</li>
                                <li>Magento</li>
                                <li>Shopify</li>
                                <li>JavaScript</li>
                                <li>Db</li>
                                <li>Jquery</li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/rps12.png" width="198" height="198" class="mt-2 rounded-pill" alt="Ganesh Tharol">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Ganesh Tharol <br><span class="work-exp">10+ Years of Experience</span> </h3>
                            <p class="suces-info pb-0">He is an expert in developing Magento stores that are user-friendly, responsive, and conversion-focused. He creates designs that captivate and convert way to his skills with PWA, React, and developing custom themes.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li>PHP</li>
                                <li>Magento</li>
                                <li>Shopify</li>
                                <li>JavaScript</li>
                                <li>Db</li>
                                <li>Jquery</li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/rps1.png" width="198" height="198" class="mt-2 rounded-pill" alt="Shankar Jangid">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Shankar Jangid <br><span class="work-exp">12+ Years of Experience</span> </h3>
                            <p class="suces-info pb-0">He is a highly-proficient Magento developer with experience delivering various projects within a specified timeframe.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li>PHP</li>
                                <li>Shopify </li>
                                <li>Magento </li>
                                <li>JavaScript </li>
                                <li>Git </li>
                                <li>Jquery </li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/profile-4.png" width="198" height="198" class="mt-2 rounded-pill" alt="Ajit Jain">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Ajit Jain <br><span class="work-exp">10+ Years of Experience </span> </h3>
                            <p class="suces-info pb-0">He is one of the best certified Magento developers of Emizentech who develop feature-rich and custom Magento development solutions.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li>PHP</li>
                                <li>Magento</li>
                                <li>JavaScript</li>
                                <li>Db</li>
                                <li>Jquery</li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                                <li>Git</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/rps13.png" width="198" height="198" class="mt-2 rounded-pill" alt="Sunil Gupta">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Sunil Gupta <br><span class="work-exp">9+ Years of Experience</span> </h3>
                            <p class="suces-info pb-0">He is committed to maintaining strong security and maximizing the store's overall performance. He keeps Magento stores steady, secure, and dependable with the entirety from speed improvements to PCI compliance and server optimization.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li> PHP</li>
                                <li>Magento</li>
                                <li>Shopify</li>
                                <li>JavaScript</li>
                                <li>Db</li>
                                <li>Jquery</li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-imger mt-2">
                    <div class="profile-card text-center py-xl-4 py-md-3">
                        <div class="profile-img mb-md-3 mb-2 pb-lg-1  d-block mx-auto">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/rps12.png" width="198" height="198" class="mt-2 rounded-pill" alt="Ganesh Tharol">
                        </div>
                        <div class="card-center pb-lg-4">
                            <h3 class="profile-name">Ganesh Tharol <br><span class="work-exp">10+ Years of Experience</span> </h3>
                            <p class="suces-info pb-0">He is an expert in developing Magento stores that are user-friendly, responsive, and conversion-focused. He creates designs that captivate and convert way to his skills with PWA, React, and developing custom themes.</p>
                            <ul class="px-0 d-flex gap-3 mb-3 flex-wrap justify-content-center pt-3">
                                <li>PHP</li>
                                <li>Magento</li>
                                <li>Shopify</li>
                                <li>JavaScript</li>
                                <li>Db</li>
                                <li>Jquery</li>
                                <li>MySql</li>
                                <li>API’s</li>
                                <li>Cloud</li>
                            </ul>
                            <div class="button-link">
                                <a class="btn emizen-btn mt-md-4 mt-2" href="#contact-form-act">Hire Now<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25" /> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-project-sec position-relative overflow-hidden">
      <img src="https://emizentech.com/wp-content/uploads/2025/11/magento-logo.png" class="main-logo top-right d-none d-md-block" alt="magento">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/m-bottom.png" class="main-logo bottom-left d-none d-md-block" alt="magento">
   
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2 class="sec-title2 text-white">Trusted by Global Brands for Magento Excellence</h2>
                <p class="sec-disc m-0 text-white">
                    Here are some example clients &amp; projects we delivered for, showcasing our capabilities:
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="Projects-slides" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">EGO UK </h3>
                                <p class="text-white">
                                    A fashion / retail brand with high traffic &amp; seasonal promotions, built on Magento / Adobe Commerce for responsive international catalog &amp; checkout.
                                </p>
                                <a href="https://ego.co.uk/" class="btn slide-btn unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/project-ego.png" class="w-100" alt="rebellious" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">50 ml </h3>
                                <p class="text-white">
                                    Niche online retailer for perfumes and skincare, migrated to Magento / Adobe Commerce for improved performance and multi-store checkout.
                                </p>
                                <a href="https://50-ml.it/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/50ml.png" class="w-100" alt="bang-bang" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Bricks Salvage </h3>
                                <p class="text-white">
                                    Marketplace / salvage bricks store with custom product variants, inventory &amp; shipping logic, built as scalable Magento store.
                                </p>
                                <a href="https://www.bricksalvage.com/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/project-bricks-salvage.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Dar Scrubs</h3>
                                <p class="text-white"> Healthcare / scrub apparel eCommerce site built on Magento with custom size &amp; bundle logic, simplified checkout for medical customers.
                                </p>
                                <a href="https://www.darscrubs.com/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/project-dar-scrubs.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Karcher Arabia</h3>
                                <p class="text-white">
                                    Regional B2B + B2C store for industrial cleaning equipment, built with Adobe Commerce cloud, custom pricing &amp; multi-region shipping.
                                </p>
                                <a href="http://karcherarabia.com/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/karchar-arabia.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Smart Ranchi</h3>
                                <p class="text-white">
                                    Local + national store built on Magento for consumer goods &amp; home appliances, integrating local logistics, payment gateways, and dynamic product catalog.
                                </p>
                                <a href="https://smartranchi.com/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/smart-ranchi.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Printzessin </h3>
                                <p class="text-white">
                                    Print products / custom merchandise site built with Magento, offering product customization, real-time previews and multi-currency checkout.
                                </p>
                                <a href="https://www.printzessin.ch/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/printzessin.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Buitanda </h3>
                                <p class="text-white">
                                    Lifestyle / accessories eCommerce store with custom theme, product bundles, and performance optimizations on Magento.
                                </p>
                                <a href="http://buitanda.com/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/project-buitanda.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">ControlTek USA </h3>
                                <p class="text-white">
                                    Industrial robotics / automation equipment store, built with Magento and integrated ERP / CRM for inventory &amp; order management
                                </p>
                                <a href="https://controltekusa.com/" class="btn slide-btn  unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/controltek.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-slider d-flex justify-content-between align-items-start">
                            <div class="project-info">
                                <h3 class="text-white">Harvey Canes </h3>
                                <p class="text-white">
                                    Regional retail chain / ecommerce presence built on Magento with store locator, local pickup &amp; eCommerce integration.
                                </p>
                                <a href="https://www.harvycanes.com/" class="btn slide-btn unfill-bg">
                                    Visit Store
                                    <img src="https://emizentech.com/wp-content/uploads/2025/11/portfolio-btn.svg" alt="arrow" width="24" height="24" />
                                </a>
                            </div>
                            <div class="project-img d-none d-lg-block">
                                <img src="https://emizentech.com/wp-content/uploads/2025/11/harvek-vanes.png" class="w-100" alt="proship" width="625" height="492" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 text-center">
                <a class="btn emizen-btn" data-toggle="modal" data-target="#pricingModal" href="#pricingModal">Request a Custom Magento Solution <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
            </div>
        </div>
    </div>
</section>
<section class="our-solutions-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 text-center mx-auto">
                <h2 class="sec-title2">Empower your eCommerce with tailored Magento &amp; Adobe Commerce Development Services</h2>
                <p class="sec-disc m-0">
                    We build performance-driven, scalable, and conversion-focused Magento stores designed around your business goals.
                </p>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/so-l1.svg" width="25" height="25" alt="Custom Magento Development"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Custom Magento Development</h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Tailored Magento solutions with advanced UI/UX, custom extensions, and feature-rich workflows to enhance performance and customer experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/so-l2.svg" width="25" height="25" alt="Magento Development &amp; Upgrades"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Magento Development &amp; Upgrades</h3>
                        <p class="hire-ds mb-3 pb-xl-1">Migrate or upgrade your Magento store securely with zero data loss, optimized speed, and improved customer checkout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/so-l3.svg" width="25" height="25" alt="Magento eCommerce Store Development"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Magento eCommerce Store Development</h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Build B2C, B2B, or multi-store eCommerce platforms optimized for speed, scalability, and conversion using certified Magento developers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/so-l4.svg" width="25" height="25" alt="Magento Website Maintenance"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Magento Website Maintenance</h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Continuous performance audits, bug fixes, and proactive optimization to keep your Magento store secure and lightning-fast.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/so-l5.svg" width="25" height="25" alt="Custom Integrations &amp; Extensions"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Custom Integrations &amp; Extensions
                        </h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Develop or integrate custom Magento modules for ERP, CRM, PIM, or marketing automation to streamline business operations.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 text-center">
                <a class="btn emizen-btn fill-bg" data-toggle="modal" data-target="#pricingModal" href="#pricingModal">Hire Expert Magento Developers<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
            </div>
        </div>
    </div>
</section>
<section class="benifits-sec position-relative overflow-hidden mb-0" id="ai-driven-solutions">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/magento-logo.png" class="main-logo top-right d-none d-md-block" alt="magento">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/m-bottom.png" class="main-logo bottom-left d-none d-md-block" alt="magento">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto pb-xl-4 pb-xl-3 mb-2">
                <div class="text-center">
                    <h2 class="sec-title2 text-white">Revolutionize your Adobe Commerce Store with Artificial Intelligence</h2>
                    <p class="sec-disc text-white">Harness the power of AI to boost conversions, improve personalization, and automate your eCommerce operations.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="d-none d-md-block" src="https://emizentech.com/wp-content/uploads/2025/11/magento-sec4-img.png" width="707" height="500">
            </div>
            <div class="col-md-6">
                <div class="overflow-ys">
                    <div class="benifits_card_box mb-4 position-relative d-flex align-items-center">
                        <span class="rounded-pill p-2 theme-clr">
                            <img src="https://emizentech.com/wp-content/uploads/2025/11/smart-product-recommend.svg" width="30" height="30" alt="Smart Product Recommendations">
                        </span>
                        <div class="card-infot">
                            <h3 class="title3">Smart Product Recommendations</h3>
                            <p class="card-info"> Use AI algorithms to deliver dynamic product recommendations, increasing average order value and customer retention.</p>
                        </div>
                    </div>
                    <div class="benifits_card_box mb-4 position-relative d-flex align-items-center">
                        <span class="rounded-pill p-2 theme-clr"><img src="https://emizentech.com/wp-content/uploads/2025/11/Predictive-Inventory-Management.svg" width="30" height="30" alt="Predictive Inventory Management"></span>
                        <div class="card-infot">
                            <h3 class="title3">Predictive Inventory Management</h3>
                            <p class="card-info">AI-driven forecasting tools to predict demand, optimize stock, and reduce operational costs in your Magento backend.</p>
                        </div>
                    </div>
                    <div class="benifits_card_box mb-4 position-relative d-flex align-items-center">
                        <span class="rounded-pill p-2 theme-clr"><img src="https://emizentech.com/wp-content/uploads/2025/11/automated-content-generation.svg" width="30" height="30" alt=" Automated SEO &amp; Content Generation"></span>
                        <div class="card-infot">
                            <h3 class="title3"> Automated SEO &amp; Content Generation </h3>
                            <p class="card-info"> AI tools generate SEO-rich product descriptions, meta tags, and dynamic content — keeping your Magento site search-friendly.</p>
                        </div>
                    </div>
                    <div class="benifits_card_box mb-4 position-relative d-flex align-items-center">
                        <span class="rounded-pill p-2 theme-clr"><img src="https://emizentech.com/wp-content/uploads/2025/11/Conversational-Commerce-Bots.svg" width="30" height="30" alt="Conversational Commerce Bots"></span>
                        <div class="card-infot">
                            <h3 class="title3">Conversational Commerce Bots</h3>
                            <p class="card-info">AI-powered chatbots and virtual assistants that guide customers, recover abandoned carts, and boost engagement.</p>
                        </div>
                    </div>
                    <div class="benifits_card_box mb-4 position-relative d-flex align-items-center">
                        <span class="rounded-pill p-2 theme-clr"><img src="https://emizentech.com/wp-content/uploads/2025/11/Personalized-Customer-Experiences.svg" width="30" height="30" alt="Personalized Customer Experiences"></span>
                        <div class="card-infot">
                            <h3 class="title3">Personalized Customer Experiences</h3>
                            <p class="card-info"> Leverage AI-based user behavior analytics to personalize product displays, offers, and on-site experiences in real time.</p>
                        </div>
                    </div>
                    <div class="w-100 mt-lg-4 text-md-left text-center">
                        <a class="btn emizen-btn unfill-bg" data-toggle="modal" data-target="#pricingModal" href="#pricingModal"> Request AI-Driven Magento Solutions<img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-solutions-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center mx-auto">
                <h2 class="sec-title2">Seamlessly Connect your Magento Store with Powerful Business Systems</h2>
                <p class="sec-disc m-0">
                    We specialize in high-performance integrations that unify your eCommerce ecosystem.
                </p>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/erp-icon.svg" width="60" height="60" alt="ERP &amp; CRM Integrations"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">ERP &amp; CRM Integrations</h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Connect Magento with SAP, NetSuite, Salesforce, or HubSpot to automate customer data and order management.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/payment-gateway.svg" width="25" height="25" alt="Payment Gateway Integration"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Payment Gateway Integration</h3>
                        <p class="hire-ds mb-3 pb-xl-1">Enable secure checkout with Stripe, PayPal, Authorize.net, and other U.S.-based payment providers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/shipping-logistric.svg" width="25" height="25" alt="Shipping &amp; Logistics Automation"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Shipping &amp; Logistics Automation</h3>
                        <p class="hire-ds mb-3 pb-xl-1"> Integrate with FedEx, UPS, DHL, or local carriers for real-time shipping rates and automatic fulfillment updates.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/Marketplace.svg" width="60" height="60" alt="Marketplace &amp; API Integrations"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2"> Marketplace &amp; API Integrations</h3>
                        <p class="hire-ds mb-3 pb-xl-1">Sync your store with Amazon, eBay, or Walmart via API connections for unified inventory and order management.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 d-flex mt-lg-4 mt-3 mb-2">
                <div class="tech-card-block text-md-left text-center">
                    <div class="tech-card-body">
                        <span class="tech-icon rounded-pill mx-md-0 mx-auto mb-lg-3 mb-2 d-block "><img src="https://emizentech.com/wp-content/uploads/2025/11/Data-Migration.svg" width="60" height="60" alt="Dedicated Full-Stack Developers"></span>
                        <h3 class="title3 pb-xl-2 pb-1 mb-2">Data Migration &amp; Cloud Sync</h3>
                        <p class="hire-ds mb-3 pb-xl-1">Migrate legacy systems or sync data between Adobe Commerce Cloud, ERP, and analytics tools securely and efficiently.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 text-center">
                <a class="btn emizen-btn fill-bg" data-toggle="modal" data-target="#pricingModal" href="#pricingModal"> Request a Magento Integration Consultation <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
            </div>
        </div>
    </div>
</section>
<section class="em-review-sec position-relative overflow-hidden">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/magento-logo.png" class="main-logo top-right d-none d-md-block" alt="magento">
    <img src="https://emizentech.com/wp-content/uploads/2025/11/m-bottom.png" class="main-logo bottom-left d-none d-md-block" alt="magento">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center mx-auto">
                <h2 class="sec-title2 text-white">Trusted by Leading Global Brands - Proven Results in Every Industry</h2>
                <p class="sec-disc m-0 text-white">
                    From fashion to manufacturing, our Magento web development company has powered online stores that redefine eCommerce performance.
                </p>
            </div>
            <div class="col-12">
                <div id="testimonial-slider" class="owl-carousel" data-loop="true" data-autoplay="true" data-items="3" data-dots="false" data-items-mobile-portrait="1" data-items-tablet="2" data-items-mobile-landscape="2" data-margin="30" data-nav="true">
                    <div class="item">
                        <div class="slider-card text-left">
                            <h3 class="slide-title">Sherpa Group AV <img src="https://emizentech.com/wp-content/uploads/2025/11/slide-qoute.svg" class="float-right qwote-img" alt="Sherpa Group AV"></h3>
                            <p class="client-review">Client Review</p>
                            <span class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </span>
                            <p class="slide-disc">We are the top supplier of AV solutions, and the experts at Emizentech helped us a lot in our entire journey. They delivered the project within the given timeline. Keep it up!</p>
                            <div class="mt-lg-3">
                                <a class="btn emizen-btn fill-bg" href="https://sherpagroupav.com/" target="_blank">Visit the Store <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-card text-left">
                            <h3 class="slide-title">Master Spa Parts <img src="https://emizentech.com/wp-content/uploads/2025/11/slide-qoute.svg" class="float-right qwote-img" alt="Sherpa Group AV"></h3>
                            <p class="client-review">Client Review</p>
                            <span class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <p class="slide-disc">Emizentech was there throughout our journey to a successful Magento store for our spa parts. Will catch you again to work with you!</p>
                            <div class="mt-lg-3">
                                <a class="btn emizen-btn fill-bg" href="https://www.masterparts.com/" target="_blank"> Visit the Store <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-card text-left">
                            <h3 class="slide-title">50-ml.it <img src="https://emizentech.com/wp-content/uploads/2025/11/slide-qoute.svg" class="float-right qwote-img" alt="Sherpa Group AV"></h3>
                            <p class="client-review">Client Review</p>
                            <span class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <p class="slide-disc">Our sales experienced a boost when we shifted to online mode, and the team was there to help us. Thanks for delivering the project as we needed.</p>
                            <div class="mt-lg-3">
                                <a class="btn emizen-btn fill-bg" href="https://50-ml.it/" target="_blank">Visit the Store <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-card text-left">
                            <h3 class="slide-title">Ego <img src="https://emizentech.com/wp-content/uploads/2025/11/slide-qoute.svg" class="float-right qwote-img" alt="Sherpa Group AV"></h3>
                            <p class="client-review">Client Review</p>
                            <span class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <p class="slide-disc">The professionals at Emizentech helped us reach the heights we wanted. Thanks to the team for being there whenever we needed your guidance and help at every phase.</p>
                            <div class="mt-lg-3">
                                <a class="btn emizen-btn fill-bg" href="https://ego.co.uk/" target="_blank">Visit the Store <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-card text-left">
                            <h3 class="slide-title">Nothingbutstyle <img src="https://emizentech.com/wp-content/uploads/2025/11/slide-qoute.svg" class="float-right qwote-img" alt="Sherpa Group AV"></h3>
                            <p class="client-review">Client Review</p>
                            <span class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </span>
                            <p class="slide-disc">Our Magento store is operating successfully. We are glad we chose you, and we will also recommend you to our known.</p>
                            <div class="mt-lg-3">
                                <a class="btn emizen-btn fill-bg" href="https://nothingbutstyle.com/" target="_blank">Visit the Store <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-card text-left">
                            <h3 class="slide-title">Buitanda <img src="https://emizentech.com/wp-content/uploads/2025/11/slide-qoute.svg" class="float-right qwote-img" alt="Sherpa Group AV"></h3>
                            <p class="client-review">Client Review</p>
                            <span class="rating-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                            <p class="slide-disc">Emizentech helped us develop our eCommerce store from scratch seamlessly. We reached them with a rough plan, and they guided us to a pathway. Thanks to the team.</p>
                            <div class="mt-lg-3">
                                <a class="btn emizen-btn fill-bg" href="https://www.buitanda.com/" target="_blank">Visit the Store <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" alt="contact us" width="25" height="25"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 mt-xl-5 text-center">
                <a class="btn emizen-btn fill-bg" data-toggle="modal" data-target="#pricingModal" href="#pricingModal"> Request a Quote <img class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg" width="25" height="25" alt="Magento Development Services | Certified Adobe Commerce Experts USA 33"> </a>
            </div>
        </div>
    </div>
</section>
<section class="m_brand_success overflow-visible">
    <div class="container">
        <div class="brand_su_inner">
            <div class="brand_su_content">
                <h2>Your Trusted Custom Adobe Commerce Development Company</h2>
                <p class="pb-3 mb-4">Work with certified Magento website developers who deliver powerful, future-ready Adobe Commerce solutions — built for performance and profitability.</p>
                <a data-toggle="modal" data-target="#pricingModal" href="#pricingModal" class="btn emizen-btn"> Schedule a Free Strategy Call <img alt="contact us" class="ml-2" src="/wp-content/uploads/2025/08/btn-arrow.svg"></a>
            </div>
            <div class="brand_su_img">
                <img src="https://emizentech.com/wp-content/uploads/2025/11/magento-cta.png" width="500" height="331" class="img-fluid" alt="Mobile App">
            </div>
        </div>
    </div>
</section>
<section class="conntect--us mn_fooer">
    <div class="container">
        <div class="footer-bottom-new">
            <div class="outline-border mb-xl-5 border-top-0">
                <div class="row justify-content-between">
                    <div class="col-md-3">
                        <div class="contact-info text-center position-relative">
                            <p><img class="d-block mx-auto mb-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz_ftr_icon1.png" alt="India" width="70" height="70"></p>
                            <p class="text-white pt-1 pb-0">India<a class="d-block" href="tel:+91-8529003873">+91-8529003873</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info text-center position-relative">
                            <p><img class="d-block mx-auto mb-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz_ftr_icon2.png" alt="USA" width="70" height="70"></p>
                            <p class="text-white pt-1 pb-0">USA<a class="d-block" href="tel:+19895359295">+1 (989) 535-9295</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info text-center position-relative">
                            <p><img class="d-block mx-auto mb-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/dubai-img-1.png" alt="UAE" width="70" height="70"></p>
                            <p class="text-white pt-1 pb-0">UAE<a class="d-block" href="tel:+971585876283">+971-585876283</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info text-center position-relative">
                            <p><img class="d-block mx-auto mb-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz_ftr_icon3.png" alt="UK" width="70" height="70"></p>
                            <p class="text-white pt-1 pb-0">UK</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="connect-with-us">
            <div class="row">
                <div class="col-md-4">
                    <p><img class="d-block" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz-footer-icon.png" alt="footer" width="172" height="40"></p>
                    <p class="address text-white d-flex align-items-center pt-md-3 pt-1 pb-0"> <img class="mr-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/ft-Location-icon.png" alt="Address" width="32" height="38"> 30 NGould St Ste R Sheridan, WY 82801 USA</p>
                    <ul class="pl-0 emizentech-social d-flex pt-md-4 pt-3">
                        <li class="txts"> <a class="m-0" href="https://www.facebook.com/EmizenTech/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                        <li class="txts"> <a class="m-0" href="http://www.linkedin.com/company/emizen-tech" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                        <li class="txts"> <a class="m-0" href="https://www.instagram.com/emizentech/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li class="txts"> <a href="https://x.com/EmizenTech" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="consulting--container">
                        <h3>We Offer a 60 minute <strong class="d-block">Free Consultation</strong></h3>
                        <ul class="text-center">
                            <li><a href="tel:+19895359295"> <img class="d-block mx-auto" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/call-icon.png" alt="+1 (989) 535-9295">+1 (989) 535-9295</a></li>
                            <li><a href="mailto:info@emizentech.com"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/email-icon.png" alt="info@emizentech.com">info@emizentech.com</a></li>
                            <li><a target="_blank" href="https://teams.live.com/l/invite/FEATkVbdw40mc785gE"> <img src="https://emizentech.com/wp-content/uploads/2025/07/teams.svg" alt="emizentech">emizentech</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="follow-up col-12">
                <ul class="d-flex justify-content-center px-0">
                    <li><a href="https://clutch.co/profile/emizen-tech" target="_blank" rel="nofollow"><img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/ftr_clutch.png" alt="clutch" width="80" height="24"> <i class="fa fa-star"></i> 4.9<br>
                        </a>
                    </li>
                    <li><a href="https://www.goodfirms.co/company/emizen-tech-pvt-ltd" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/goodfirms.png" alt="goodfirms" width="100" height="16"> <i class="fa fa-star"></i> 5.0<br>
                        </a>
                    </li>
                    <li><a href="https://www.designrush.com/agency/profile/emizen-tech" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/designrush.png" alt="designrush" width="108" height="26"> <i class="fa fa-star"></i> 4.9<br>
                        </a>
                    </li>
                    <li><a href="https://www.businessofapps.com/app-developers/emizen-tech/" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/boa-new.png" alt="Business-of-app" width="87" height="26"> <i class="fa fa-star"></i> 5.0<br>
                        </a>
                    </li>
                    <li><a href="https://www.softwareworld.co/service/emizentech-reviews/" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/nav_logo.png" alt="nav_logo" width="124" height="20"> <i class="fa fa-star"></i> 5.0<br>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-custom">
        <div class="bottom cf container">
            <p class="copyright">Copyright © 2013 - 2025 Emizentech . All Rights Reserved. <a href="https://emizentech.com/privacy-policy.html">Privacy Policy</a> </p>
            
        </div>
    </div>
</section>

<div class="modal fade hiring-modal-popup" id="pricingModal" role="dialog" aria-labelledby="pricingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h3 class="form-title"><span class="highlight-clr"> STOP! </span> Your Magento Store Could <span class="highlight-clr"> Perform 3X Better </span> With the Right Experts </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form modal-from">
                    <p class="title-disc">Power your eCommerce business with custom Magento development that boosts efficiency, enhances customer journeys, and secure long-term market advantage.</p>
                   <?php echo do_shortcode('[elementor-template id="21197"]'); ?>
                </div>
                <div class="contact-form-right">
                     <div class="modal-footer text-center p-0">
                <h3 class="mb-3">Rated <span class="highlight-clr"> 4.9 </span> by <span class="highlight-clr"> 1000+ </span> Happy Customers. <span class="highlight-clr"> 11+ Years</span> of Industry Experience.</h3>
                <ul class="px-0 d-none d-md-flex">
                    <li><a href="#"><img src="https://emizentech.com/wp-content/uploads/2025/11/usa-flag.png" alt="inda" width="34" height="18"> USA </a></li>
                    <li><a href="#"><img src="https://emizentech.com/wp-content/uploads/2025/11/uk-flag.svg" alt="inda" width="34" height="18"> UK </a></li>
                    <li><a href="#"><img src="https://emizentech.com/wp-content/uploads/2025/11/inda-flag.png" alt="inda" width="34" height="18"> INDIA </a></li>
                    <li><a href="#"><img src="https://emizentech.com/wp-content/uploads/2025/11/uae-flag.png" alt="uae" width="34" height="18"> UAE </a></li>
                </ul>
            </div>
             <ul class="d-md-flex d-none mx-auto justify-content-center mt-4">
                    <li class="mb-1"><a href="https://clutch.co/profile/emizen-tech" target="_blank"><img src="/wp-content/uploads/2025/08/clutch-footer.svg" alt="clutch" width="80" height="24"><span class="rating-number"><img class="ratingstar" src="https://emizentech.com/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23"> 4.9 </span>
                        </a></li>
                    <li class="mb-1"><a href="https://www.goodfirms.co/company/emizen-tech-pvt-ltd" target="_blank"> <img src="https://emizentech.com/wp-content/uploads/2025/08/goodfirms-2.png" alt="goodfirms" width="100" height="16"><span class="rating-number"><img class="ratingstar" src="https://emizentech.com/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23"> 5.0</span>
                        </a></li>
                    <li class="mb-1"><a href="https://www.designrush.com/agency/profile/emizen-tech" target="_blank"> <img src="https://emizentech.com/wp-content/uploads/2025/08/designrush-ftr.svg" alt="designrush" width="108" height="26"><span class="rating-number"><img class="ratingstar" src="https://emizentech.com/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23"> 4.9</span>
                        </a></li>
                    <li class="mb-1"><a href="https://www.businessofapps.com/app-developers/emizen-tech/" target="_blank"> <img src="https://emizentech.com/wp-content/uploads/2025/08/businessofapps.svg" alt="Business-of-app" width="87" height="26"><span class="rating-number"><img class="ratingstar" src="https://emizentech.com/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23"> 5.0</span>
                        </a></li>
                    <li class="mb-1"><a href="https://www.softwareworld.co/service/emizentech-reviews/" target="_blank">
                     <img src="/wp-content/uploads/2025/08/software-world.svg" alt="nav_logo" width="124" height="20">
                     <span class="rating-number">
                        <img class="ratingstar" src="https://emizentech.com/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23"> 5.0
                        </span></a></li>
                         <li><a href="https://www.softwareworld.co/service/emizentech-reviews/" target="_blank">
                     <img src="/wp-content/uploads/2025/08/software-world.svg" alt="nav_logo" width="124" height="20">
                     <span class="rating-number">
                        <img class="ratingstar" src="https://emizentech.com/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23"> 5.0
                        </span></a></li>
                </ul>
                </div>
            </div>
           
        </div>
    </div>
</div>

 
            </main>
        </div>
<div class="watsappic">
  <a href="https://wa.me/19895359295" target="_blank" id="whatsapp-link" rel="nofollow">
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="30" cy="30" r="30" fill="#54C45F"/>
    <path d="M42.3379 17.5926C40.7335 15.972 38.8225 14.687 36.7163 13.8127C34.6101 12.9384 32.3508 12.4922 30.0704 12.5001C20.5154 12.5001 12.7279 20.2876 12.7279 29.8426C12.7279 32.9051 13.5329 35.8801 15.0379 38.5051L12.5879 47.5001L21.7754 45.0851C24.3129 46.4676 27.1654 47.2026 30.0704 47.2026C39.6254 47.2026 47.4129 39.4151 47.4129 29.8601C47.4129 25.2226 45.6104 20.8651 42.3379 17.5926ZM30.0704 44.2626C27.4804 44.2626 24.9429 43.5626 22.7204 42.2501L22.1954 41.9351L16.7354 43.3701L18.1879 38.0501L17.8379 37.5076C16.3989 35.2098 15.6349 32.5538 15.6329 29.8426C15.6329 21.8976 22.1079 15.4226 30.0529 15.4226C33.9029 15.4226 37.5254 16.9276 40.2379 19.6576C41.581 20.9945 42.6454 22.5848 43.3693 24.3361C44.0933 26.0874 44.4624 27.965 44.4554 29.8601C44.4904 37.8051 38.0154 44.2626 30.0704 44.2626ZM37.9804 33.4826C37.5429 33.2726 35.4079 32.2226 35.0229 32.0651C34.6204 31.9251 34.3404 31.8551 34.0429 32.2751C33.7454 32.7126 32.9229 33.6926 32.6779 33.9726C32.4329 34.2701 32.1704 34.3051 31.7329 34.0776C31.2954 33.8676 29.8954 33.3951 28.2504 31.9251C26.9554 30.7701 26.0979 29.3526 25.8354 28.9151C25.5904 28.4776 25.8004 28.2501 26.0279 28.0226C26.2204 27.8301 26.4654 27.5151 26.6754 27.2701C26.8854 27.0251 26.9729 26.8326 27.1129 26.5526C27.2529 26.2551 27.1829 26.0101 27.0779 25.8001C26.9729 25.5901 26.0979 23.4551 25.7479 22.5801C25.3979 21.7401 25.0304 21.8451 24.7679 21.8276H23.9279C23.6304 21.8276 23.1754 21.9326 22.7729 22.3701C22.3879 22.8076 21.2679 23.8576 21.2679 25.9926C21.2679 28.1276 22.8254 30.1926 23.0354 30.4726C23.2454 30.7701 26.0979 35.1451 30.4379 37.0176C31.4704 37.4726 32.2754 37.7351 32.9054 37.9276C33.9379 38.2601 34.8829 38.2076 35.6354 38.1026C36.4754 37.9801 38.2079 37.0526 38.5579 36.0376C38.9254 35.0226 38.9254 34.1651 38.8029 33.9726C38.6804 33.7801 38.4179 33.6926 37.9804 33.4826Z" fill="white"/>
    </svg>
      </a>
</div>        
 
  
<script type="text/javascript">
  $('#Projects-slides').owlCarousel({
      loop:true,
      margin:10,
      dots:false,stagePadding: 400,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              stagePadding: 0
          },
          600:{
              items:1,
              nav:false,
              stagePadding: 0
          },
          1000:{
              items:1,
              nav:true,
              loop:true,
               stagePadding:200
          }
      }
  });
</script>
<script type="text/javascript">
  $('#new-slider').owlCarousel({
      loop:true,
      margin:30,
      responsiveClass:true,
       dots:false,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:2,
              nav:true
          },
          1000:{
              items:3,
              nav:true,
              loop:true
          }
      }
  });
</script>
<script type="text/javascript">
  $('#testimonial-slider').owlCarousel({
      loop:true,
      margin:30,
      responsiveClass:true,
       dots:false,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:1,
              nav:true
          },
          1000:{
              items:3,
              nav:true,
              loop:true
          }
      }
  });
</script>


        <?php wp_footer(); ?>

    </body>
</html>
