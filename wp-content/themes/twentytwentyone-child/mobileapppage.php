<?php
/**
* Template Name: Mobile app Template
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  wp_head(); ?>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="/wp-content/themes/twentytwentyone-child/assets/css/font-awesome.min.css?123456" rel="stylesheet" type="text/css" media="all" />
        <link href="/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123456" rel="stylesheet" type="text/css" media="all" />
        <link href="/wp-content/themes/twentytwentyone-child/assets/css/styles.css?123456" rel="stylesheet" type="text/css" media="all" />
        <link href="/wp-content/themes/twentytwentyone-child/assets/css/responsive.css?123456" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="/wp-content/themes/twentytwentyone-child/assets/css/stick-to-me.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" />
        <link href="/wp-content/themes/twentytwentyone-child/assets/css/owl.carousel.min.css?123456" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/29039.css?123512" rel="stylesheet" type="text/css" media="all" />
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
                    <!-- Remember to include jQuery :) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
                    <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

        <script src="/wp-content/themes/twentytwentyone-child/assets/js/owl.carousel.min.js"></script>  
        <script src="/wp-content/themes/twentytwentyone-child/assets/js/stick-to-me.js"></script>  
        <style>
            html{scroll-behavior:smooth;}
        .mobile-app-dev.Food-app-User .row,.mobile-app-dev.Finance-app-User .row,.mobile-app-dev.Realestate-app-User .row,.mobile-app-dev.Grocery-app-User .row,.mobile-app-dev.eLearning-app-User .row,.mobile-app-dev.Wedding-app-User .row,.mobile-app-dev.Restaurant-app-User .row,.mobile-app-dev.Event-app-User .row,.mobile-app-dev.NFT-app-User .row,.mobile-app-dev.Video-app-User .row,.mobile-app-dev.Security-app-User .row,.mobile-app-dev.Social-app-User .row,.mobile-app-dev.Dating-app-User .row,.mobile-app-dev.Demand-app-User .row,.mobile-app-dev.Health-app-User .row,.mobile-app-dev.normal-company-User .row{align-items:center;}
        .mobile_app_popup input[class*="form-control "],.mobile_app_popup textarea{border:0;border-bottom:1px solid #ddd;border-radius:0;font-weight:400;font-size:16px;line-height:19px;letter-spacing:0.01em;color:#8C8C8C;padding:0;height:50px;outline:none;width:100%;margin-bottom:1.5rem;}
        .contact-form .grunion-field-wrap input,.contact-form .grunion-field-wrap textarea,.contact-form .grunion-field-wrap select{border:0;border-bottom:1px solid #ddd;border-radius:0;font-weight:400;font-size:15px;line-height:19px;letter-spacing:0.01em;color:#000;padding:10px 0 0;height:40px;outline:none;width:100%;margin-bottom:0;}
        .contact-form .grunion-field-wrap label{font-weight:400;font-size:16px;}
        .contact-form .grunion-field-wrap textarea{height:130px;resize:none;}
        .contact-form button.wp-block-button__link{background:#109cd8!important;font-size:20px;text-align:center;position:relative;border-radius:35px;width:auto;min-width:170px;color:#fff!important;margin:auto;display:block;line-height:26px;text-transform:uppercase;transition:all .3s;}
        .contact-form__error{
            display:none!important;
        }
        .emizen_mobiel_app_solutions .banner-title.medium_title{font-size:25px;line-height:38px;}
        .mobile_app_wrapper{background:#fff;}
        .mobile_app_wrapper .mobile-app-dev{padding-top:12rem;}
        .mobile_app_wrapper .banner-heading span{font-weight:600;font-size:121px;line-height:121px;}
        .mobile_app_wrapper .banner-heading{color:#010101;font-size:60px;line-height:60px;}
        .mobile_app_wrapper .mobile-app-dev p{margin-bottom:15px;color:#000;}
        .Emizen_target{background:#fff;border:1px solid #ddd;border-radius:8px;padding:10px 10px;}
        .Emizen_target h3{font-weight:600;font-size:45px;line-height:55px;letter-spacing:0.01em;color:#007db2;}
        .emizen_achivement{padding-top:50px;}
        .mobile_app_wrapper .Emizen_target h3 span{font-size:20px;line-height:26px;letter-spacing:0.01em;color:#000;font-weight:600;}
        .Emizen-business_modals .banner-title span{font-size:100px;line-height:112px;}
        .Emizen-business_modals p{font-size:18px;}
        ul.navbar-nav{justify-content:center;border:0;}
        .Emizen-business_modals{margin-top:80px;padding:80px 0;}
        .text-strock{color:#000;letter-spacing:0.01em;}
        .Emizen_target h2{font-weight:600;font-size:48px;line-height:58px;letter-spacing:.01em;color:#007db2;}
        .mobile_app_wrapper .Emizen_target h2 span{font-size:20px;line-height:29px;letter-spacing:.01em;color:#010101;font-weight:600;}
        .container{padding:0 15px;}
        .tab_img img{filter:invert(1) brightness(0);}
        .Emizen-business_modals .nav-tabs{max-width:100%;margin-top:0;}
        .Emizen-business_modals .nav-link{font-weight:600;font-size:24px;line-height:20px;text-align:center;color:#000;background:transparent;padding-bottom:15px;border-bottom:4px solid #232222;}
        .Emizen-business_modals .nav-link:hover{border-color:#007db2;color:#007db2;}
        .Emizen-business_modals .nav-link.active{background:transparent;color:#007db2;border-bottom:4px solid #007db2;border-radius:0;}
        .Emizen-business_modals .tab_content h3{font-weight:600;font-size:32px;line-height:40px;letter-spacing:0.01em;color:#010101;}
        .Emizen-business_modals .tab_content li{font-weight:600;font-size:18px;line-height:24px;color:#010101;padding:0 0 20px 31px;}
        .Emizen-business_modals .tab_content li:before{content:"";position:absolute;height:16px;border:1.6px solid #010101;width:16px;border-radius:50px;left:0;top:5px;}
        .banner-title.medium_title{font-weight:600;color:#010101;font-size:34px;line-height:46px;}
        .banner-title.medium_title span{font-size:50px;line-height:65px;text-align:center;letter-spacing:0.01em;/* font-family:'ProximaNova-Bold'; */}
        .emizen_mobiel_app_solutions{padding:100px 0;}
        .emizen_mobile_app_Services{padding:70px 0;}
        .app_solution_form  .wpcf7-response-output{color:#fff;border-color:red!important;}
        .app_solution_form .wpcf7-form-control-wrap{display:block;width:100%;position:relative;margin-bottom:10px;}
        .wpcf7-not-valid-tip{font-size:14px;position:absolute;bottom:-6px;}
        .emizen_mobiel_app_solutions p{font-size:16px;color:#010101;}
        .emizen_mobiel_app_solutions .banner-title{font-weight:600;}
        .app_solution_form{box-shadow:rgb(0 125 178 / 38%) 0px 0px 20px;background:#fafafa;border:1px solid #2b3539;border-radius:8px;}
        .app_solution_form input,.app_solution_form textarea{background:transparent;border:0;border-bottom:1px solid #2b3539;width:100%;color:#000!important;}
        .app_solution_form input:focus,.app_solution_form textarea:focus{outline:none;}
        .app_solution_form input::placeholder,.app_solution_form textarea::placeholder{color:#8c8c8c;}
        .app_solution_form h3{font-weight:600;font-size:30px;line-height:36px;margin:20px 0 30px;letter-spacing:0.01em;color:#010101;}
        .app_solution_form input{margin-bottom:20px;padding-left:0;}
        .app_solution_form textarea{margin-bottom:15px;height:90px;}
        .app_solution_form .wpcf7-submit{min-width:270px;padding:14px 15px;background-color:#109cd8!important;font-size:20px;text-align:center;outline:none;transition:all ease 0.4s;border-radius:35px;width:auto;display:block;margin:50px auto 0;}
        .app_solution_form .wpcf7-spinner{position:absolute;bottom:20px;right:0;}
        .services_card{background:#ffffff;padding:22px 30px;margin-top:30px;border-radius:8px;box-shadow:rgb(4 4 4 / 9%) 0px 0px 14px}
        .services_card h4{font-weight:600;line-height:24px;letter-spacing:0.01em;color:#007db2;padding:15px 0;}
        .get_started_box{background:#d5e8ff url(/wp-content/uploads/2022/11/mobile_app_get.png) no-repeat right center;border-radius:8px;padding:50px 30px;}
        .get_started_box h4{font-size:40px;line-height:47px;letter-spacing:0.01em;}
        .get_started_box h4 strong{font-weight:600;}
        .mobile_app_wrapper .mobile-app-dev .get_started_box p{font-weight:400;font-size:16px;line-height:24px;max-width:600px;color:#fafafa;}
        .mobile_app_wrapper .emizentech-btn{background:#007db2;}
        .mobile_app_wrapper .app_solution_form .wpcf7-submit{background:#007db2!important;margin-top:0;border:0;color:#fff!important}
        .emizen_get_started{padding:100px 0;}
        .bg-dark-black{background:#fafafa;}
        .services_card img{filter:invert(1);}

        /*faq*/
        .mobile_app_wrapper .emizentech-faq{padding:75px 0;}
        .mobile_app_wrapper .faq-wrap{margin-top:20px;}
        .mobile_app_wrapper .emizentech-faq #accordion .btn.btn-link{background:#232222;border-color:#2b3539;border-bottom:0;color:#ffffff;font-size:18px;}
        .mobile_app_wrapper .card{border-color:#2b3539;margin-bottom:20px;background:#fafafa;}
        .mobile_app_wrapper #accordion{border-color:transparent;}
        .mobile_app_wrapper .card-body{border:1px solid #2b3539;background:#fafafa;font-weight:400;font-size:18px;line-height:22px;color:#010101;padding:20px;}
        .mobile_app_wrapper .emizentech-faq .card-body p,.mobile_app_wrapper .emizentech-faq .card-body li{font-size:18px;line-height:22px;color:#010101;}
        .mobile_app_wrapper .emizentech-faq .card-body li{margin-bottom:15px;position:relative;padding-left:30px;background:transparent;}
        .mobile_app_wrapper .emizentech-faq .btn.btn-link:after{filter:brightness(0) invert(1);background:url(/wp-content/uploads/2022/11/faq_arrow.png);}
        .mobile_app_wrapper .emizentech-faq .card-body li:before{border:solid #232222;border-width:0 2px 2px 0;display:inline-block;vertical-align:middle;position:absolute;left:0;top:50%;padding:5px;content:"";transform:translatey(-50%) rotate(-43deg);}
        section.our_demand .get_started_box{background:#defffe url(/wp-content/uploads/2022/11/demand_img.png) center right;background-size:cover;padding:60px 30px 100px;}
        section.our_demand .get_started_box h4 strong{font-weight:600;font-size:50px;line-height:61px;letter-spacing:0.01em;color:#111111;}
        section.our_demand .get_started_box p{font-weight:400;font-size:16px;line-height:24px;color:#111111;max-width:710px;}
        .mobile_app_wrapper .clients li{border:1px solid #2b3539;flex:0 0 25%;padding:40px 0;}
        .mobile_app_wrapper .clients li img{filter:invert(1);}
        .pt-100{padding-top:100px;}
        .pb-100{padding-bottom:100px;}
        .solutions_Tabs{margin-top:20px;}
        .solutions_Tabs .nav-pills .nav-link{font-weight:600;font-size:20px;line-height:24px;letter-spacing:0.01em;margin-bottom:15px;color:#fefefe;}
        .solutions_Tabs .nav-pills .nav-link.active{background:linear-gradient(90deg,rgb(0 125 178 / 72%) -9.71%,rgba(26,26,26,0) 62.66%);border-radius:8px;color:#fff;}
        .solutions_Tabs .tab-content h3{font-weight:600;font-size:36px;line-height:50px;letter-spacing:0.01em;color:#ffffff;}
        .solutions_Tabs .tab-content p{font-weight:400;font-size:16px;line-height:24px;color:#fff;}
        .solutions_Tabs .tab-content li{font-weight:600;font-size:20px;line-height:22px;color:#fff;margin:15px 0;display:inline-block;width:100%;position:relative;padding-left:26px;}
        .solutions_Tabs .tab-content li:before{content:"";border:2.6px solid #fff;width:16px;height:16px;display:inline-block;border-radius:50px;position:absolute;left:0;top:50%;transform:translatey(-50%);}
        .bg-yellow-light{background:#f4e8c6;border-radius:8px;}
        .technologie_box{background:#302b2b linear-gradient(136deg,rgba(26,26,26,0) 31.81%,rgba(49,109,169,0.765) 172.26%);border-radius:8px;width:200px;height:166px;}
        .technologie_box p{font-size:16px;line-height:19px;letter-spacing:0.01em;padding:14px 0 0;color:#ffffff;}
        .technologie_box:before{background:linear-gradient(188.65deg,rgba(26,26,26,0) 31.81%,rgba(49,109,169,0.765) 152.26%);}
        .technologie_box .owl-prev{font-size:0;}
        .technologie_box .owl-carousel .owl-nav{font-size:0;}
        .technologies_slider{margin-top:70px;}
        .Emizen_Solutions{background:#111111;}
        .Emizen_Solutions .banner-title.medium_title{color:#fff;}
        .Emizen_Solutions .banner-title.medium_title span.text-strock{color:#fff;}

        /*slider css*/
        .emizen_mobile_app_Technology .owl-carousel .owl-nav{position:static;font-size:0;}
        .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-prev,.emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-next{background-image:none;}
        .emizen_mobile_app_Technology .owl-carousel .owl-nav i{font-size:17px;color:#fff;background:#302b2b linear-gradient(136deg,rgba(26,26,26,0) 31.81%,rgba(49,109,169,0.765) 172.26%);border-radius:50px;height:30px;width:30px;display:flex;align-items:center;justify-content:center;}
        .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-next{right:-50px;position:absolute;top:50%;transform:translatey(-50%);}
        .emizen_mobile_app_Technology .owl-prev{position:absolute;top:50%;transform:translatey(-50%);}
        .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-prev{left:-40px;}
        .emizen_PortFolio .Emizen_target{float:left;width:50%;border:0;padding-bottom:20px;}
        .emizen_PortFolio .Emizen_target h3 span{font-weight:600;}
        .emizen_PortFolio .protfolio_card{margin-bottom:50px;}
        .emizen_PortFolio .protfolio_card h4{background:linear-gradient(90deg,rgba(0,125,178,0.5) -9.71%,rgba(26,26,26,0) 62.66%);border-radius:0px 0px 8px 8px;font-weight:600;font-size:40px;line-height:49px;color:#010101;padding:10px 20px 20px;width:100%;}
        .emizen_PortFolio .protfolio_card h4 span{font-weight:400;font-size:16px;line-height:19px;display:block;color:#010101;}
        .emizen_PortFolio .banner-title.medium_title{margin-bottom:40px;}
        .card_img_container{overflow:hidden;}
        .card_img_container img{transition:transform .5s ease;}
        .card_img_container:hover img{transform:scale(1.1);}
        .overlay_container{height:0;position:absolute;background:#000000e6;bottom:0;opacity:0;padding:0 30px;transition:all .3s;justify-content:center;}
        .overlay_container p{font-size:19px;line-height:34px;color:#fff;}
        .card_img_container:hover .overlay_container{height:100%;opacity:1;}
        .innovation_container{padding:70px 50px;background:#fff url(/wp-content/uploads/2022/11/innovation.png) no-repeat bottom center;background-size:contain;}
        .innovation_container h3 strong{font-size:45px;line-height:50px;letter-spacing:0.01em;color:#111;}
        .mobile_app_wrapper .innovation_container p{font-weight:400;font-size:16px;line-height:24px;color:#111;max-width:500px;}
        .carousel.slide.video_slider{max-width:722px;margin:60px auto 0;}
        .video_inner{max-width:1060px;}
        .performance_slider .owl-dots .owl-dot.active{border-color:#007DB2;border-radius:100px!important;width:31px;height:8px;background:#007DB2;border-width:0!important;}
        .performance_slider .owl-dots .owl-dot{background:#4E4E4E;border-color:#4E4E4E;height:10px;width:10px;}
        .img-fluid.left-top{position:absolute;right:0;bottom:0;}
        .img-fluid.bottom-right{position:absolute;left:0;top:0;}
        .cwhite{color:#555;}
        #Fitness .bg-blue-light{background:#BDDBF7;border-radius:8px;}
        #Real-estate .bg-yellow-light{background:#D9DAEA;}
        #Sports .bg-yellow-light{background:#E3E6ED;}
        #Entertainment .bg-yellow-light{background:#D9DAEA;}
        #Fintech .bg-yellow-light{background:#D9DAEA;}
        #Fashion .bg-yellow-light{background:#D9DAEA;}
        #Real-estate .bg-yellow-light{background:#D9DAEA;}
        #Food-Delivery .bg-yellow-light{background:#D9DAEA;}
        #Healthcare .bg-yellow-light{background:#D9DAEA;}
        #Travel .bg-yellow-light{background:#FEE3E5;}
        #Social-Networking .bg-yellow-light{background:#E3E6ED;}
        #e-Learning .bg-yellow-light{background:#D9DAEA;}
        #Gaming .bg-yellow-light{background:#2E2E2E;}
        #Metaverse .bg-yellow-light{background:#19154B;}
        #Blockchain-NFTs .bg-yellow-light{background:#1C1A24;}
        #On-demand .bg-yellow-light{background:#98A8AA;}
        #e-Learning .bg-yellow-light{background:#E3E6ED;}
        .scroll_nav{overflow:auto;max-height:748px;}
        .scroll_nav::-webkit-scrollbar{width:10px;}

        /* Track */
        .mobile_devp_popup .Shopify_form{max-height:600px;overflow-y:auto;}
        .scroll_nav::-webkit-scrollbar-track{background:#f1f1f1;border-radius:50px;}

        /* Handle */
        .scroll_nav::-webkit-scrollbar-thumb{background:#007db2;border-radius:100px;height:70px;display:inline-block;}

        /* Handle on hover */
        .scroll_nav::-webkit-scrollbar-thumb:hover{background:#007db2;}
        .iframe_container{position:relative;width:100%;overflow:hidden;padding-top:56.25%; /* 16:9 Aspect Ratio */}
        .responsive-iframe{position:absolute;top:0;left:0;bottom:0;right:0;width:100%;height:100%!important;max-height:100%!important;border:none;}
        .mobile_devp_popup{max-width:800px;}
        .mobile_devp_popup a.close-modal{z-index:9999;right:2px;top:2px;}
        .mobile_devp_popup a.close-modal{z-index:9999;right:12px;top:18px;}
        .mobile_devp_popup .popuphide{background:#109cd8;color:#fff;font-size:20px;outline:none;border-radius:35px;padding:10px 40px;margin:20px auto;display:block;width:200px;}
        .mobile_devp_popup h3{font-weight:600;background:#109cd8;color:#fff;padding:20px 20px;margin:0;line-height:26px;}
        .mobile_app_popup h3{font-weight:600;font-size:23px;line-height:23px;text-align:center;padding:10px 0 20px;}
        .mobile_devp_popup{padding:0 0;}
        .mobile_app_popup{max-width:500px;}
        .mobile_app_popup input[class*="form-control "],.mobile_app_popup textarea{border:0;border-bottom:1px solid #ddd;border-radius:0;font-weight:400;font-size:16px;line-height:19px;letter-spacing:0.01em;color:#8C8C8C;padding:0;height:50px;width:100%;margin-bottom:1.5rem;outline:none;}
        .mobile_app_popup input.has-spinner.wpcf7-submit{background:#109cd8!important;font-size:20px;text-align:center;position:relative;border-radius:35px;width:auto;min-width:260px;color:#fff!important;margin:auto;display:block;}
        .mobile_app_popup{max-width:500px;}
        .mobile_app_popup h3{font-weight:600;font-size:23px;line-height:23px;text-align:center;padding:10px 0 20px;}
        .mobile_app_popup input[class*="form-control "],.mobile_app_popup textarea{border:0;border-bottom:1px solid #ddd;border-radius:0;font-weight:400;font-size:16px;line-height:19px;letter-spacing:0.01em;color:#8C8C8C;padding:0;height:50px;outline:none;width:100%;margin-bottom:1.5rem;}
        .mobile_app_popup a.close-modal{color:#000;top:20px;right:20px;background:none;height:auto;}
        .mobile_app_popup a.close-modal:after,.mobile_app_popup a.close-modal:before{content:" | ";position:absolute;height:18px;width:2px;display:inline-block;right:11px;line-height:30;visibility:visible;opacity:1;z-index:99999;background:#4A5568;}
        .mobile_app_popup a.close-modal:before{transform:rotate(45deg);}
        .mobile_app_popup a.close-modal:after{transform:rotate(-45deg);}
        .mobile_app_wrapper .app_solution_form .wpcf7-submit:hover{border:none;}
        .overlay_container img{max-width:170px;margin-bottom:50px;border-radius:20px;}
        .fixed-modal-footer{position:sticky;bottom:0;padding:8px 0;display:inline-block;width:100%;}
        .mobile_development_slider.owl-carousel .owl-nav{position:static;font-size:0;display:none;}
        .mobile_development_slider.owl-carousel .owl-nav .owl-prev,.mobile_development_slider.owl-carousel .owl-nav .owl-next{background-image:none;}
        .mobile_development_slider.owl-carousel .owl-nav i{font-size:17px;color:#010101;background:linear-gradient(90deg,rgba(0,125,178,0.5) -9.71%,rgba(26,26,26,0) 115.62%);border-radius:50px;height:30px;width:30px;display:flex;align-items:center;justify-content:center;}
        .mobile_development_slider.owl-carousel .owl-nav .owl-next{right:-50px;position:absolute;top:50%;transform:translatey(-50%);}
        .mobile_development_slider.owl-prev{position:absolute;top:50%;transform:translatey(-50%);}
        .mobile_development_slider.owl-carousel .owl-nav .owl-prev{left:-40px;}
        .btn.btn-info.solution_btn{background:#109cd8;text-transform:uppercase;font-size:20px;width:100%;text-align:left;border:1px solid #109cd8;display:none;}
        .mobile_app_popup .wpcf7-form-control-wrap{display:inline-block;width:100%;position:relative;}
        .mobile_app_popup .wpcf7-form-control-wrap .wpcf7-not-valid-tip{font-size:14px;bottom:0px;}

        /* css  */
        div#company_infos h1.banner-heading.banner-title-smaller.text-capitalize span,.mobile_app_wrapper .banner-heading span{font-size:50px;line-height:66px;letter-spacing:0.03em;color:#000;}
        div#company_infos  .banner-info h3{font-weight:600;font-size:40pxq;line-height:60px;color:#010101;}
        div#company_infos  .banner-info  img{margin-left:15px;}
        div#company_infos  h2.company_names{font-weight:600;font-size:40px;line-height:40px;color:#007DB2;}
        div#company_infos  p strong{font-weight:500;padding-bottom:5px;font-size:27px;line-height:34px;display:inline-block;}
        div#company_infos  p{font-weight:400;font-size:18px;line-height:28px;}
        div#company_infos  .company_logs{display:inline-block;}
        .company_logs img{max-height:70px;}
        h2.company_names{color:#007db2;padding:10px 0;}
        .our_demand{background:#e5f2f7;padding:80px 0;}
        a.header-btn{position:relative;border-radius:5px;float:right;padding:12px 18px;white-space:nowrap;}
        .emizentech-btn{display:inline-block;min-width:270px;padding:14px 25px;}
        @media(max-width:1600px){
            .mobile_app_wrapper .mobile-app-dev{padding-top:8rem;}
            .mobile_app_wrapper .banner-heading{font-size:50px;line-height:50px;}
            .mobile_development_slider .item img{max-width:240px;}
            .mobile_app_wrapper .mobile-app-dev p{font-size:16px}
            .mobile_app_wrapper .banner-heading span{/*font-size:100px;line-height:100px;*/}
            .Emizen-business_modals .tab_content h3{font-size:32px;line-height:36px;}
            .emizen_mobiel_app_solutions{padding:100px 0;}
            .mobile_app_wrapper .emizentech-faq #accordion .btn.btn-link{font-size:18px;}
            p{font-size:16px;}
            .banner-title.medium_title span{font-size:42px;line-height:55px;}
            .mobile_app_wrapper .banner-heading span{font-size:51px;line-height:62px;}
        }
        @media(max-width:1440px){
            .Emizen_target h3{font-size:45px;line-height:50px;}
            .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-next{right:-13px;}
            .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-prev{left:-13px;}
            .emizen_PortFolio .protfolio_card h4{font-size:33px;line-height:38px;}
            .mobile_app_wrapper .container{padding:0 15px;}
            .mobile_app_wrapper .banner-heading span{font-size:42px;line-height:52px;}
        }
        @media(max-width:1366px){
            .Emizen_target h2{font-size:45px;line-height:50px;}
            .mobile_app_wrapper .emizentech-faq #accordion .btn.btn-link{font-size:16px}
            .mobile_app_wrapper .Emizen_target h2 span{font-size:20px;}
            .Emizen-business_modals .nav-link{font-size:20px;}
            .emizen_mobiel_app_solutions .banner-title.medium_title{font-size:23px;}
            .banner-title.medium_title span{font-size:38px;}
            .app_solution_form h3{font-size:28px;}
            .get_started_box h4{font-size:34px;line-height:46px;}
            .solutions_Tabs .nav-pills .nav-link{font-size:17px;}
            .container{padding:0 15px;}
            .overlay_container p{font-size:16px;}
            .innovation_container h3 strong{font-size:37px;line-height:45px;}
            a.header-btn{padding:12px 20px;margin:0;}
            .navbar-expand-lg .navbar-nav .nav-link{font-size:16px;}
            .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-next{right:0;}
            .emizen_mobile_app_Technology .owl-carousel .owl-nav .owl-prev{left:0;}
            .mobile_app_wrapper .Emizen_target h3 span{font-size:17px}
        }
        @media(max-width:1280px){
            .mobile_development_slider .item img{margin:0 auto;}
            .mobile_app_wrapper .Emizen_target h3 span,.emizen_PortFolio .Emizen_target h3 span{font-size:18px;line-height:24px;}
            .banner-title.medium_title{font-size:31px;line-height:37px;}
            .get_started_box{padding:30px 30px 40px;}
            .get_started_box{padding:30px 30px 40px;}
            .innovation_container h3 strong{font-size:46px;line-height:41px;}
            .innovation_container{padding:30px 30px;}
        }
        @media(max-width:1199px){
            .header-btn .sprites-image{display:block;}
            .header-btn{flex-flow:column;}
            .header-btn span{padding-top:0;font-size:14px;}
            .header-btn .sprites-image{margin-bottom:10px;}
            .Emizen-business_modals{margin-top:60px;}
            .mobile_app_wrapper .Emizen_target h2 span{font-size:17px;line-height:26px;}
            .Emizen_target h2{font-size:35px;line-height:40px;}
        }
        @media(max-width:1024px){
            .mobile_app_wrapper .banner-info{max-width:100%;}
            .Emizen-business_modals .nav-tabs .nav-item{max-width:33.33%;float:left;}
            .Emizen-business_modals .nav-link{display:inline-block;}
            .solutions_Tabs .nav-pills .nav-link{font-size:16px;line-height:20px;margin-bottom:5px;padding-left:5px;padding-right:5px;}
            .Emizen-business_modals .nav-tabs .nav-item{text-align:center;}
            .mobile_app_wrapper .Emizen_target h3 span{font-size:20px;}
            .app_solution_form h3{line-height:30px;margin-bottom:0;font-size:23px;}
            .pb-100{padding-bottom:70px;}
            .pt-100{padding-top:70px;}
            .technologie_box{width:100%;max-width:80%;height:135px;}
            .overlay_container p{font-size:18px;line-height:31px;}
            .card_img_container:hover img{transform:scale(1.1);}
            section.our_demand .get_started_box{padding:30px 30px 50px;}
            .navbar-light  button.navbar-toggler{background:transparent!important;}
            .mobile_app_wrapper .mobile-app-dev{padding-top:7rem;}
            .mobile_app_wrapper .navbar-light .navbar-nav .nav-link{font-size:16px;padding-right:0.3rem;padding-left:0.5rem;}
        }
        @media(max-width:991px){
            .banner.col-lg-6{max-width:600px;display:block;margin:30px auto 0;}
            .mobile_app_wrapper .mobile-app-dev p{max-width:600px;}
            .app_solution_form{max-width:500px;margin:auto;}
            .emizen_mobiel_app_solutions .banner-title{font-size:30px;margin-bottom:20px;}
            .Emizen-business_modals .tab_content li{font-size:17px;}
            .Emizen-business_modals .tab_content h3{font-size:30px;line-height:30px;}
            .emizen_mobiel_app_solutions{padding:40px 0 70px;}
            .emizen_mobile_app_Services{padding:50px 0 30px;}
            .mobile_development_slider.owl-carousel .owl-nav{display:block;}
            .Emizen-business_modals .nav-link{font-size:19px;padding:0 0px 15px;}
            .mobile_development_slider.owl-carousel .owl-nav .owl-prev{top:50%;left:0;position:absolute;}
            .mobile_development_slider.owl-carousel .owl-nav .owl-next{top:50%;right:0;}
            .mobile_app_wrapper .emizentech-faq.solutions_Tabs h3{font-size:26px;padding:15px;line-height:36px;padding-bottom:10px;}
            .mobile_app_wrapper .emizentech-faq.solutions_Tabs li{font-size:18px;}
            .emizentech-faq.solutions_Tabs.d-lg-none{padding-top:30px;padding-bottom:30px}
            a.header-btn{position:relative;border-radius:5px;padding:14px 28px;white-space:nowrap;width:auto;float:none;display:inline-block;margin-top:10px;}
            button.navbar-toggler{background:#000!important;}
            .innovation_container h3 strong{font-size:34px}
            .Emizen-business_modals{padding:40px 0;margin-top:40px;}
            .services_card h4{font-size:21px;line-height:normal;}
            .get_started_box{background:#aad2f0;text-align:center;}
            .solutions_Tabs .tab-content h3{color:#000;}
            .emizen_mobiel_app_solutions .banner-title.medium_title{font-size:18px;line-height:28px;}
            .our_demand{padding:30px 0;margin:0;}
            .emizen_PortFolio .protfolio_card:last-child{margin-bottom:20px;}
            .solutions_Tabs .tab-content li:before{border-color:#000;}
            .mobile_app_wrapper .emizentech-faq.solutions_Tabs li{padding-left:30px;margin-left:15px;font-size:16px;}
            .pt-100{padding-top:30px;}
            .carousel.slide.video_slider{margin-top:20px;}
            .pb-100{padding-bottom:30px;}
            .Emizen_target h3{font-size:28px;line-height:36px;}
            .mobile_app_wrapper .Emizen_target h3 span{line-height:normal;font-size:18px;}
            .solutions_Tabs .tab-content p,.mobile_app_wrapper .emizentech-faq.solutions_Tabs li{color:#000;padding:0 15px;}
            .mobile_app_wrapper .emizentech-faq.solutions_Tabs li{padding-left:25px}
            .mobile_app_wrapper .card{border:0;margin-bottom:20px;background:#fafafa;padding:0;}
            .small_app_img{padding-bottom:30px;}
            button.navbar-toggler span.navbar-toggler-icon{background:#fff url(/wp-content/themes/twentytwentyone-child/assets/images/sprites.png);width:29px;height:24px;background-position:-30px 0;background-size:250px auto;}
            button.navbar-toggler{background-color:transparent!important;}
            .tab_img img{max-width:240px;}
        }
        @media(min-width:768px){
            .scroll_nav #demo{display:block;}
        }
        @media(max-width:767px){
            .mobile_app_wrapper .banner-info{padding-right:0}
            .mobile_app_wrapper .banner-heading{font-size:8vw;line-height:9vw;}
            .mobile_app_wrapper .banner-heading span,div#company_infos h1.banner-heading.banner-title-smaller.text-capitalize span{font-size:28px;line-height:40px;}
            section.our_demand .get_started_box h4 strong{font-size:40px;line-height:40px;}
            section.our_demand .get_started_box{padding:30px 30px 40px;}
            .Emizen-business_modals .tab_img{text-align:center;}
            .tab_content{padding-top:30px;}
            .innovation_container h3 strong{font-size:28px;line-height:32px;font-weight:600;}
            .technologie_box{width:100%;max-width:80%;height:135px;}
            .emizen_achivement{padding-top:0px;}
            .get_started_box{background-color:#d5e8ff;}
            .innovation_container{padding:20px 20px 30px;}
            .Emizen-business_modals{padding:40px 0 20px;}
            .small_app_img img{margin-top:1.5rem!important;max-width:50%;float:left;padding:0 10px;}
            .Emizen_Solutions .tab-content{padding-top:30px;}
            .get_started_box p br{display:none;}
            .mobile_app_wrapper .emizentech-faq{padding-top:40px;padding-bottom:30px;}
            .overlay_container img{max-width:90px;margin-bottom:17px;}
            .overlay_container p{font-size:14px;line-height:20px;}
            .overlay_container{border:1px solid #3a3434;}
            .scroll_nav .btn.btn-info.solution_btn{display:block;}
            .scroll_nav .nav.flex-column.nav-pills{padding-top:10px;background:#000;padding:20px 10px;border:1px solid #383333;}
            .mobile_app_wrapper .emizentech-faq .card-body p,.mobile_app_wrapper .emizentech-faq .card-body li,.Emizen-business_modals .nav-link,.innovation_container a.emizentech-btn{font-size:16px;}
            .mobile_app_wrapper .emizentech-faq .card-body li:before{padding:3px;}
            .mobile_app_wrapper .emizentech-faq .card-body li{margin:0;padding-left:20px;}
            .emizen_PortFolio .protfolio_card h4{font-size:25px;line-height:38px;}
            .emizen_PortFolio{padding-top:10px;}
            .Emizen-business_modals .nav-tabs .nav-item{padding:0 0;}
        }
        @media(max-width:640px){
            .banner-title.medium_title{font-size:30px;line-height:32px;}
            .Emizen-business_modals .tab_content li{font-size:16px;}
            .banner-title.medium_title span{font-size:30px;line-height:42px;}
            .banner-title.medium_title{font-size:22px;}
            .emizen_mobiel_app_solutions{padding:50px 0;}
            .get_started_box,section.our_demand .get_started_box{background-image:none;text-align:center;}
            .get_started_box h4{font-size:24px;line-height:30px;}
            .mobile_app_wrapper .clients li{flex:0 0 50%;}
            .emizen_PortFolio .banner-title.medium_title{margin-bottom:10px;}
            .get_started_box h4 > br{display:none;}
            .solutions_Tabs .tab-content h3{font-size:35px;}
            section.Emizen_Solutions .tab-content{padding-top:40px;}
            .small_app_img img{max-width:100%;float:none;padding:0;margin:auto;}
            .Emizen-business_modals .tab_content h3{font-size:23px;line-height:28px;padding-bottom:0}
            .mobile_app_wrapper .emizentech-faq.solutions_Tabs h3.banner-title{font-size:22px;line-height:36px;}
            section.our_demand .get_started_box{padding:30px 15px 40px;}
            section.our_demand .get_started_box h4 strong{font-size:30px;line-height:30px;}
            .tab_img img{max-width:160px;}
            .mobile_app_wrapper .emizentech-btn{font-size:16px;padding:13px;}
        }
        @media(max-width:575px){
            .Emizen-business_modals .nav-tabs .nav-item:not(:last-child){margin-bottom:20px;}
            .emizen_PortFolio .Emizen_target{width:100%;}
        }
        @media(max-width:440px){
            .mobile_app_popup input.has-spinner.wpcf7-submit,.app_solution_form .wpcf7-submit{width:100%;max-width:100%;min-width:100%;}
            .mobile_app_wrapper nav.navbar{padding-left:0;padding-right:0;}
            .card_img_container:hover .overlay_container{padding:10px 10px;}
            .card_img_container .overlay_container img{max-width:80px;}
        }

        </style>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WQB2Z8D');</script>
        <!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16806753194"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "AW-16806753194");
</script>

    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB2Z8D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
   <!-- Google Tag Manager (noscript) -->
        <div id="primary" class="content-area">
            
            <main id="main" class="site-main">
                <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
            </main>
        </div>
        
    <script>
        $(document).ready(function () {
            $.stickToMe({
                layer: "#sopify_popup",

                // <a href="https://www.jqueryscript.net/animation/">Animation</a> speed in ms
                fadespeed: 400,

                // Where detection of exit intent takes place
                trigger: ["top"],

                // min/max time
                maxtime: 0,
                mintime: 0,

                // Delay before showing popup when exit intent is detected
                delay: 0,

                // Interval between popups
                //interval: 5000,

                // Maximum times the popup will be triggered
                maxamount: 2,

                // Set cookie to prevent opening again on the same browser
                cookie: false,

                // Define the cookie expiration in seconds
                cookieExpiration: 0,

                // Clickon background to close the popup
                bgclickclose: true,

                // Press ESC to close the popup
                escclose: true,

                // Chrome disable
                disableleftscroll: true,

                // Callback function
                onleave: function (e) {},
            });
        });
        // technologies slider
        $(".technologies_slider ").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay:true,
             autoplayTimeout:2000,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 4,
                },
                1200: {
                    items: 5,
                },
            },
        });
        $(".performance_slider ").owlCarousel({
            loop: true,
            margin: 10,
            arrow:true,
            autoplay:false,
             autoplayTimeout:2000,
            dots:true,
            responsive: {
                0: {
                    items: 1,
                },
               
            },
        });
        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
        $(".mobile_development_slider ").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay:true,

            autoplayTimeout:2000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
               
               
            },
        });
        $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
    </script>
    <script>
        $(document).ready(function () {
            $(".popuphide").on('click',function(){
                $("#iraqcars").modal('hide');
                $("#groceryster").modal('hide');
                $("#walkys").modal('hide');
                $("#buitandas").modal('hide');

            });
        });    
    </script>
    <script>
        $(document).ready(function () {
            //Disable cut copy paste
            $('body').bind('cut copy paste', function (e) {
               e.preventDefault();
            });
            //Disable mouse right click
            $("body").on("contextmenu",function(e){
               return false;
            });
        });
    </script>
    <script>
        $(document).ready(function () {
                $(document).click(function (event) {
                    var clickover = $(event.target);
                    var _opened = $(".navbar-collapse").hasClass("show");
                    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                        $(".navbar-toggler").click();
                    }
                });
            });
    </script>
    <script>
        $(document).ready(function () {    
        
            var queryString = window.location.search;
            var urlParams = new URLSearchParams(queryString);
            var utm_campname = urlParams.get('utm_campaign');
            
            if(utm_campname == 'Food Delivery App'){
              $(".Food-app-User").show();
            }else if(utm_campname == 'Grocery Delivery App'){
              $(".Grocery-app-User").show();
            }else if(utm_campname == 'Realestate App'){
              $(".Realestate-app-User").show();
            }else if(utm_campname == 'Finance App'){
              $(".Finance-app-User").show();
            }else if(utm_campname == 'eLearning App'){
              $(".eLearning-app-User").show();
            }else if(utm_campname == 'Wedding Planner App'){
              $(".Wedding-app-User").show();
            }else if(utm_campname == 'Restaurant Reservation App'){
              $(".Restaurant-app-User").show();
            }else if(utm_campname == 'Event Booking App'){
              $(".Event-app-User").show();
            }else if(utm_campname == 'NFT Marketplace App'){
              $(".NFT-app-User").show();
            }else if(utm_campname == 'Video Streaming App'){
              $(".Video-app-User").show();
            }else if(utm_campname == 'Home Security App'){
              $(".Security-app-User").show();
            }else if(utm_campname == 'Social Media App'){
              $(".Social-app-User").show();
            }else if(utm_campname == 'Dating App'){
              $(".Dating-app-User").show();
            }else if(utm_campname == 'On demand App'){
              $(".Demand-app-User").show();
            }else if(utm_campname == 'Healthcare App'){
              $(".Health-app-User").show();
            }else if(utm_campname == 'Fantasy App'){
              $(".fantasy-sports-app").show();
            }else if(utm_campname == 'Laundry App'){
              $(".Laundryapp").show();
            }else {
              $(".normal-company-User").show();
            }
        });    
    </script>


    <?php wp_footer(); ?>
    </body>
</html>
