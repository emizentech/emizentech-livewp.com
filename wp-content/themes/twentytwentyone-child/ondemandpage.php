<?php
/**
* Template Name: Ondemand Page Template
*/
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" type="image/x-icon" />


        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123510" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/styles.css?123510" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/font-awesome.min.css?123510" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/header.css?123511" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/aos.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/ondemandpage.css?123711" rel="stylesheet" type="text/css" media="all" />

        <!-- Remember to include jQuery :) -->
        <style>
            @media(max-width: 767px){

            .header-call-link {
                    font-size: 0;
                    display: flex;
                    align-items: center;
                }

                .header-call-link >span {
                    background: #007db2;
                    display: flex;
                    border-radius: 100%;
                    height: 40px;
                    width: 40px;
                    align-items: center;
                    justify-content: center;
                    line-height: normal;
                }
            .header-call-link img{margin-right: 0}
            }
.zls-sptwndw.siqembed.siqtrans.zsiq-mobhgt.zsiq-newtheme.siq_rht.zsiq_size2.siqanim{display:none!important;}
.zsiq_floatmain.zsiq_theme1.siq_bR{display:none!important;}

        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

            <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-WQB2Z8D');
        </script>
        <!-- End Google Tag Manager -->
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11006513864"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-11006513864');
        </script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=G-84ZQDW2CJX"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-84ZQDW2CJX');
        </script>
        
        <link href="https://cdn.jsdelivr.net" rel="stylesheet">
        <style>
     
            /* THE TRACK: Overall scrollable area */
            .scroll-track{position:relative;height:350vh;transition:background-color 0.8s cubic-bezier(0.4,0,0.2,1);margin:0;}

            /* THE STICKY VIEWPORT */
            .sticky-content{position:sticky;top:99px;height:90vh;display:flex;align-items:center;overflow:hidden;}

            /* Slide Layers */
            .slide-layer{position:absolute;top:0;left:0;width:100%;height:100%;display:flex;align-items:center;opacity:0;visibility:hidden;transform:translateY(30px);transition:all 0.7s ease-in-out;color:white;}
            .slide-layer.active{opacity:1;visibility:visible;transform:translateY(0);}
            .phone-mockup{max-height:75vh;filter:drop-shadow(0 20px 50px rgba(0,0,0,0.3));}

            /* Scroll Triggers (Invisible) */
            .trigger-wrapper{position:absolute;top:0;width:100%;height:100%;pointer-events:none;}
            .step{height:100vh;}
            .cta-bar{background:rgba(255,255,255,0.1);backdrop-filter:blur(10px);padding:15px 30px;border-radius:50px;display:flex;justify-content:space-between;align-items:center;margin-top:40px;border:1px solid rgba(255,255,255,0.2);}
            .spacer{height:100vh;background:#f8f9fa;display:flex;align-items:center;justify-content:center;}
        </style>
    </head>

    <body>
     <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB2Z8D" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Google Tag Manager (noscript) -->
        <div id="primary" class="content-area">            
            <main id="main" class="site-main">            
                <div class="custom-header">
                  <div class="container">
                      <nav class="navbar navbar-expand-lg magento-navbar">
                          <a class="navbar-brand" href="https://emizentech.com/">
                            <svg width="210" height="49" viewBox="0 0 210 49" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_124_7422)"> <path d="M22.1432 41.124C39.4202 41.7042 45.8967 31.091 45.8967 31.091C54.4884 20.197 41.9659 7.67447 41.9659 7.67447C44.0436 10.8566 42.3777 14.9184 42.3777 14.9184C40.2251 21.8067 30.6226 25.7563 30.6226 25.7563C20.833 30.0428 12.26 29.5187 12.26 29.5187C11.8856 41.124 22.1432 41.124 22.1432 41.124Z" fill="#007DB2"></path> <path d="M34.3854 2.41465C32.4762 1.19796 29.0507 0.26205 26.5051 0.0935861C10.501 -1.17925 0.542844 10.9876 0.0187329 22.7427C-0.205886 29.1256 2.17133 34.7411 3.7811 36.8188C2.78903 33.6367 2.3398 31.2595 2.50826 28.302C3.50033 10.5758 19.7103 -0.598989 34.3854 2.41465Z" fill="#007DB2"></path> <path d="M30.7353 18.7557L31.0161 18.4C36.5193 11.5679 33.6741 7.91781 32.9815 7.44985C30.3797 5.12879 24.9888 5.87752 21.0393 9.60245C12.0171 18.4 12.2417 28.6015 12.2417 28.6015C12.2417 28.6015 21.1142 28.7138 30.7353 18.7557Z" fill="#007DB2"></path> <path d="M49.2106 24.9514C48.5742 32.1954 43.8198 37.5301 43.8198 37.5301C37.6802 44.7179 29.388 45.9907 29.388 45.9907C21.3953 48.0684 14.2637 46.103 14.2637 46.103C22.0317 49.5846 28.2836 48.4241 28.2836 48.4241C40.0387 46.7956 45.0365 38.466 45.0365 38.466C49.5663 31.7274 49.2106 24.9514 49.2106 24.9514Z" fill="#007DB2"></path> <path d="M58.2885 22.3496C58.588 24.1653 59.3741 25.7002 60.7218 26.973C62.0508 28.2459 63.5109 28.8636 65.0458 28.8636C66.3748 28.8636 67.5353 28.5079 68.5648 27.834C69.5943 27.104 70.4553 26.0745 71.1853 24.6145L72.5143 25.1573C71.8405 26.7297 70.942 27.9464 69.7253 28.8074C68.3963 29.7807 66.8614 30.2674 65.0458 30.2674C62.8557 30.2674 60.9652 29.4813 59.3928 27.9651C57.7456 26.3179 56.9033 24.2589 56.9033 21.7693C56.9033 19.5793 57.5772 17.6888 58.85 16.0603C60.3662 14.1697 62.4439 13.1964 65.0458 13.1964C67.3481 13.1964 69.2948 14.0387 70.8859 15.6859C72.4582 17.3331 73.1882 19.336 73.1882 21.7693V22.4432H58.2885V22.3496ZM71.7843 21.0206C71.4848 18.9616 70.6238 17.3705 69.1638 16.1539C67.8909 15.1244 66.5432 14.5815 65.027 14.5815C63.2675 14.5815 61.7513 15.1805 60.4598 16.3972C59.1869 17.6139 58.4569 19.1301 58.2136 21.0206H71.7843Z" fill="#007DB2"></path> <path d="M75.4346 18.5311C75.4346 16.7715 76.0336 15.4238 77.2502 14.4505C78.2798 13.6082 79.5526 13.1776 81.0126 13.1776C82.1731 13.1776 83.1465 13.4771 83.9888 14.02C84.8311 14.5628 85.4488 15.349 85.8045 16.3972C86.1601 15.4238 86.7778 14.6377 87.6202 14.02C88.4625 13.4771 89.5107 13.1776 90.6525 13.1776C92.1125 13.1776 93.3292 13.6082 94.3587 14.3943C95.5754 15.3677 96.1744 16.7715 96.1744 18.5311V29.893H94.7705V18.4562C94.7705 17.1272 94.34 16.079 93.4415 15.4238C92.7115 14.8248 91.7943 14.5815 90.6525 14.5815C89.492 14.5815 88.4625 14.9372 87.6763 15.6672C86.8901 16.3972 86.4596 17.4267 86.4596 18.7744V29.893H85.0558V18.8306C85.0558 17.5016 84.6252 16.4533 83.8391 15.7233C83.0529 14.9933 82.0796 14.5628 80.919 14.5628C79.8334 14.5628 78.86 14.8623 78.13 15.4051C77.2128 16.1351 76.7261 17.1646 76.7261 18.5123V29.8743H75.3223V18.5311H75.4346Z" fill="#007DB2"></path> <path d="M99.1506 10.1266C98.8511 10.1266 98.5516 10.0143 98.3083 9.82709C98.065 9.58376 98.0088 9.34042 98.0088 8.98477C98.0088 8.68528 98.1211 8.38579 98.3083 8.14245C98.5516 7.89911 98.795 7.7868 99.1506 7.7868C99.5063 7.7868 99.7496 7.89911 99.9929 8.14245C100.236 8.38579 100.292 8.62913 100.292 8.98477C100.292 9.34042 100.18 9.58376 99.9929 9.82709C99.7683 10.0143 99.525 10.1266 99.1506 10.1266ZM98.4767 29.8931V13.5333H99.8806V29.8931H98.4767Z" fill="#007DB2"></path> <path d="M114.05 29.8931H103.287C102.856 29.8931 102.557 29.7807 102.314 29.4625C102.07 29.2192 101.958 28.8636 101.958 28.4892C101.958 28.0587 102.389 27.2725 103.287 26.112L110.587 17.4829C110.887 17.1272 111.186 16.7529 111.504 16.3972C111.804 16.0416 111.935 15.6672 111.935 15.3115C111.935 15.0682 111.635 15.0121 111.093 15.0121H110.606H103.006V13.6082H111.935C112.534 13.6082 112.964 13.7954 113.339 14.2072C113.582 14.5067 113.694 14.75 113.694 14.9933C113.694 15.349 113.694 15.5923 113.638 15.7795C113.582 15.9667 113.526 16.1351 113.339 16.3785L104.653 26.9543C104.466 27.1415 104.354 27.3099 104.223 27.441C103.98 27.6843 103.867 27.9276 103.867 28.1148C103.867 28.3582 104.223 28.4143 104.841 28.4143H114.013V29.8743H114.05V29.8931Z" fill="#007DB2"></path> <path d="M117.158 22.3496C117.457 24.1653 118.243 25.7002 119.591 26.973C120.92 28.2459 122.38 28.8636 123.915 28.8636C125.244 28.8636 126.404 28.5079 127.434 27.834C128.463 27.104 129.324 26.0745 130.054 24.6145L131.383 25.1573C130.71 26.7297 129.811 27.9464 128.594 28.8074C127.265 29.7807 125.731 30.2674 123.915 30.2674C121.725 30.2674 119.834 29.4813 118.262 27.9651C116.615 26.3179 115.772 24.2589 115.772 21.7693C115.772 19.5793 116.446 17.6888 117.719 16.0603C119.235 14.1697 121.313 13.1964 123.915 13.1964C126.217 13.1964 128.164 14.0387 129.755 15.6859C131.327 17.3331 132.057 19.336 132.057 21.7693V22.4432H117.158V22.3496ZM130.653 21.0206C130.354 18.9616 129.493 17.3705 128.033 16.1539C126.76 15.1244 125.412 14.5815 123.896 14.5815C122.137 14.5815 120.62 15.1805 119.329 16.3972C118.056 17.6139 117.326 19.1301 117.083 21.0206H130.653Z" fill="#007DB2"></path> <path d="M134.06 29.893V18.7744C134.06 17.1272 134.733 15.742 136.119 14.6377C137.391 13.6643 138.908 13.1776 140.611 13.1776C142.37 13.1776 143.887 13.7205 145.178 14.75C146.582 15.9105 147.237 17.2957 147.237 18.999V29.8743H145.833V19.3547C145.833 17.8946 145.291 16.7341 144.261 15.8918C143.232 15.0495 142.015 14.5628 140.555 14.5628C139.151 14.5628 137.934 14.9184 137.036 15.7233C135.95 16.6405 135.389 17.7823 135.389 19.3172V29.893H134.06Z" fill="#007DB2"></path> <path d="M149.802 6.49525H151.206V13.7392H157.401V15.0682H151.206V25.2697C151.206 26.2992 151.636 27.1602 152.478 27.8153C153.321 28.4892 154.294 28.8448 155.399 28.8448C156.072 28.8448 156.802 28.7325 157.458 28.4143C158.131 28.1148 158.73 27.6843 159.273 27.1415L160.359 28.3582C159.629 28.9571 158.843 29.3877 157.982 29.762C157.121 30.1364 156.278 30.3049 155.436 30.3049C153.864 30.3049 152.572 29.8743 151.486 28.9759C150.401 28.0587 149.839 26.9169 149.839 25.382V6.47653H149.802V6.49525Z" fill="#007DB2"></path> <path d="M162.998 22.3496C163.298 24.1653 164.084 25.7002 165.432 26.973C166.761 28.2459 168.221 28.8636 169.756 28.8636C171.085 28.8636 172.245 28.5079 173.275 27.834C174.304 27.104 175.165 26.0745 175.895 24.6145L177.224 25.1573C176.55 26.7297 175.652 27.9464 174.435 28.8074C173.106 29.7807 171.571 30.2674 169.756 30.2674C167.566 30.2674 165.675 29.4813 164.103 27.9651C162.456 26.3179 161.613 24.2589 161.613 21.7693C161.613 19.5793 162.287 17.6888 163.56 16.0603C165.076 14.1697 167.154 13.1964 169.756 13.1964C172.058 13.1964 174.005 14.0387 175.596 15.6859C177.168 17.3331 177.898 19.336 177.898 21.7693V22.4432H162.998V22.3496ZM176.494 21.0206C176.195 18.9616 175.334 17.3705 173.874 16.1539C172.601 15.1244 171.253 14.5815 169.737 14.5815C167.977 14.5815 166.461 15.1805 165.17 16.3972C163.897 17.6139 163.167 19.1301 162.924 21.0206H176.494Z" fill="#007DB2"></path> <path d="M179.826 21.7506C179.826 19.3734 180.556 17.3705 182.072 15.6672C183.589 14.02 185.535 13.1776 187.969 13.1776C189.485 13.1776 190.889 13.5333 192.161 14.3382C193.247 15.012 194.108 15.8544 194.707 16.8839L193.547 17.801C193.004 16.8839 192.218 16.0977 191.244 15.4987C190.271 14.8997 189.185 14.5815 187.969 14.5815C186.078 14.5815 184.506 15.3115 183.158 16.7154C181.829 18.1193 181.211 19.8226 181.211 21.7693C181.211 23.4727 181.81 25.045 183.102 26.505C184.506 28.0774 186.078 28.9384 187.969 28.9384C189.185 28.9384 190.271 28.5828 191.375 27.9089C192.218 27.3661 192.948 26.6361 193.565 25.7189L194.726 26.6922C193.884 27.9089 192.966 28.8261 191.937 29.4251C190.907 30.0241 189.56 30.3423 187.987 30.3423C185.554 30.3423 183.551 29.4251 182.035 27.6656C180.556 25.9435 179.826 23.9968 179.826 21.7506Z" fill="#007DB2"></path> <path d="M209.925 29.893H208.521V19.5606C208.521 17.9134 208.034 16.6967 207.061 15.7982C206.218 15.012 205.114 14.5815 203.897 14.5815C202.625 14.5815 201.464 14.8249 200.435 15.3677C199.405 15.8544 198.675 16.6405 198.376 17.5577V29.893H196.972V5.82138H198.376V15.4238C198.731 14.8249 199.461 14.2633 200.678 13.8515C201.895 13.421 202.98 13.1777 204.085 13.1777C205.788 13.1777 207.117 13.6643 208.165 14.6938C209.382 15.8544 209.981 17.5577 209.981 19.8601V29.893H209.925Z" fill="#007DB2"></path> <path d="M59.0561 41.6294V39.0088L57.1094 35.4898H58.0266L58.8689 37.1932C59.1122 37.6798 59.2994 38.0355 59.4679 38.466C59.6551 38.0355 59.8235 37.6798 60.0669 37.1932L60.984 35.4898H61.9012L59.8422 39.0088V41.6294H59.0561Z" fill="#007DB2"></path> <path d="M67.5729 39.3832C67.5729 41.0304 66.4124 41.7604 65.3829 41.7604C64.1662 41.7604 63.249 40.9181 63.249 39.4581C63.249 37.998 64.2224 37.0809 65.4391 37.0809C66.7119 37.137 67.5729 38.0355 67.5729 39.3832ZM64.0352 39.4394C64.0352 40.4127 64.578 41.1427 65.3642 41.1427C66.1504 41.1427 66.6932 40.4127 66.6932 39.4394C66.6932 38.7093 66.3375 37.736 65.3642 37.736C64.3908 37.736 64.0352 38.597 64.0352 39.4394Z" fill="#007DB2"></path> <path d="M73.9562 40.4127C73.9562 40.8994 73.9562 41.255 74.0124 41.6294H73.2824L73.2262 40.8994C73.039 41.255 72.5523 41.7417 71.7662 41.7417C71.0923 41.7417 70.25 41.3861 70.25 39.795V37.1745H71.0362V39.6078C71.0362 40.4501 71.2795 41.0117 72.0095 41.0117C72.5523 41.0117 72.9267 40.656 73.039 40.2817C73.0952 40.1694 73.0952 40.0383 73.0952 39.8512V37.1745H73.8813V40.394H73.9562V40.4127Z" fill="#007DB2"></path> <path d="M76.9321 38.597C76.9321 38.0542 76.9321 37.6237 76.876 37.1932H77.606V38.0355H77.6621C77.8493 37.4365 78.336 37.0621 78.8788 37.0621C78.9911 37.0621 79.066 37.0621 79.1222 37.0621V37.8483C79.066 37.8483 78.935 37.8483 78.8227 37.8483C78.2798 37.8483 77.8493 38.2788 77.737 38.8778C77.737 38.9901 77.6809 39.1211 77.6809 39.2335V41.6107H76.9321V38.597Z" fill="#007DB2"></path> <path d="M85.9912 35.4898V41.6855H85.2051V35.4898H85.9912Z" fill="#007DB2"></path> <path d="M92.8047 35.1342V40.4876C92.8047 40.8432 92.8047 41.3299 92.8609 41.6481H92.1308L92.0747 40.8619C91.8313 41.3486 91.2885 41.7043 90.5585 41.7043C89.4728 41.7043 88.668 40.7871 88.668 39.4581C88.668 37.9981 89.5852 37.0809 90.6708 37.0809C91.3447 37.0809 91.8313 37.3803 91.9998 37.7547V35.078H92.786V35.1342H92.8047ZM91.9998 39.0088C91.9998 38.8965 91.9998 38.7655 91.9437 38.6532C91.8314 38.1665 91.4008 37.736 90.7831 37.736C89.9408 37.736 89.4541 38.466 89.4541 39.4394C89.4541 40.3565 89.8847 41.0866 90.7831 41.0866C91.326 41.0866 91.8126 40.7309 91.9437 40.1132C91.9437 40.0009 91.9998 39.8699 91.9998 39.7576V39.0088Z" fill="#007DB2"></path> <path d="M96.2678 39.5704C96.2678 40.656 96.9978 41.0866 97.784 41.0866C98.3268 41.0866 98.7012 40.9742 99.0006 40.8432L99.1129 41.386C98.8135 41.4984 98.3268 41.6855 97.6529 41.6855C96.3239 41.6855 95.4629 40.7683 95.4629 39.4394C95.4629 38.1104 96.2491 37.0621 97.5219 37.0621C98.9819 37.0621 99.3376 38.335 99.3376 39.1211C99.3376 39.3083 99.3376 39.4206 99.3376 39.4768H96.2303V39.5704H96.2678ZM98.6263 39.0088C98.6263 38.5222 98.4391 37.6798 97.5406 37.6798C96.7544 37.6798 96.3801 38.4098 96.3239 39.0088H98.6263Z" fill="#007DB2"></path> <path d="M104.466 41.6294L104.41 41.0866C104.167 41.4422 103.68 41.7604 103.081 41.7604C102.164 41.7604 101.752 41.1614 101.752 40.4876C101.752 39.4019 102.725 38.8404 104.429 38.8404V38.7281C104.429 38.3724 104.316 37.6986 103.399 37.6986C102.969 37.6986 102.557 37.8109 102.239 37.9981L102.051 37.4552C102.407 37.2119 102.969 37.0996 103.511 37.0996C104.84 37.0996 105.215 38.0168 105.215 38.9152V40.5625C105.215 40.9181 105.215 41.3486 105.271 41.592H104.485V41.6294H104.466ZM104.354 39.3832C103.511 39.3832 102.463 39.4955 102.463 40.3566C102.463 40.8994 102.819 41.1427 103.249 41.1427C103.792 41.1427 104.223 40.7871 104.335 40.4127C104.335 40.3566 104.391 40.2255 104.391 40.1694V39.3832H104.354Z" fill="#007DB2"></path> <path d="M108.004 40.8432C108.247 41.0304 108.678 41.1427 109.033 41.1427C109.632 41.1427 109.876 40.8432 109.876 40.4689C109.876 40.1132 109.632 39.8699 109.033 39.6827C108.247 39.3832 107.873 38.9527 107.873 38.4098C107.873 37.6798 108.416 37.137 109.389 37.137C109.82 37.137 110.231 37.2493 110.475 37.4365L110.288 38.0355C110.1 37.9232 109.801 37.7921 109.37 37.7921C108.884 37.7921 108.64 38.0916 108.64 38.3911C108.64 38.7468 108.884 38.934 109.483 39.1211C110.269 39.4206 110.643 39.795 110.643 40.4501C110.643 41.2363 110.044 41.7791 108.996 41.7791C108.509 41.7791 108.079 41.6668 107.779 41.4796L108.004 40.8432Z" fill="#007DB2"></path> <path d="M112.74 42.7899C112.927 42.2471 113.171 41.2737 113.283 40.5999L114.2 40.4876C114.013 41.2737 113.601 42.3032 113.358 42.7338L112.74 42.7899Z" fill="#007DB2"></path> <path d="M124.421 39.3832C124.421 41.0304 123.26 41.7604 122.231 41.7604C121.014 41.7604 120.097 40.9181 120.097 39.4581C120.097 37.998 121.07 37.0809 122.287 37.0809C123.56 37.137 124.421 38.0355 124.421 39.3832ZM120.883 39.4394C120.883 40.4127 121.426 41.1427 122.212 41.1427C122.998 41.1427 123.541 40.4127 123.541 39.4394C123.541 38.7093 123.185 37.736 122.212 37.736C121.313 37.736 120.883 38.597 120.883 39.4394Z" fill="#007DB2"></path> <path d="M130.803 40.4127C130.803 40.8994 130.803 41.255 130.859 41.6294H130.129L130.073 40.8994C129.886 41.255 129.399 41.7417 128.613 41.7417C127.939 41.7417 127.097 41.3861 127.097 39.795V37.1745H127.883V39.6078C127.883 40.4501 128.126 41.0117 128.856 41.0117C129.399 41.0117 129.773 40.656 129.886 40.2817C129.942 40.1694 129.942 40.0383 129.942 39.8512V37.1745H130.728V40.394H130.803V40.4127Z" fill="#007DB2"></path> <path d="M133.78 38.597C133.78 38.0542 133.78 37.6237 133.724 37.1932H134.454V38.0355H134.51C134.697 37.4365 135.184 37.0621 135.726 37.0621C135.839 37.0621 135.914 37.0621 135.97 37.0621V37.8483C135.914 37.8483 135.783 37.8483 135.67 37.8483C135.127 37.8483 134.697 38.2788 134.585 38.8778C134.585 38.9901 134.529 39.1211 134.529 39.2335V41.6107H133.742V38.5783H133.78V38.597Z" fill="#007DB2"></path> <path d="M142.839 35.4898V41.6855H142.053V35.4898H142.839Z" fill="#007DB2"></path> <path d="M145.946 38.4099C145.946 37.9232 145.946 37.5675 145.89 37.1932H146.62L146.676 37.9232C146.919 37.4927 147.406 37.0809 148.136 37.0809C148.735 37.0809 149.708 37.4365 149.708 38.9714V41.6481H148.922V39.1024C148.922 38.3724 148.679 37.7734 147.892 37.7734C147.35 37.7734 146.919 38.1291 146.807 38.6158C146.751 38.7281 146.751 38.8591 146.751 38.9714V41.6481H145.965L145.946 38.4099Z" fill="#007DB2"></path> <path d="M152.685 38.4099C152.685 37.9232 152.685 37.5675 152.629 37.1932H153.359L153.415 37.9232C153.658 37.4927 154.145 37.0809 154.875 37.0809C155.474 37.0809 156.447 37.4365 156.447 38.9714V41.6481H155.661V39.1024C155.661 38.3724 155.418 37.7734 154.632 37.7734C154.089 37.7734 153.658 38.1291 153.546 38.6158C153.49 38.7281 153.49 38.8591 153.49 38.9714V41.6481H152.704L152.685 38.4099Z" fill="#007DB2"></path> <path d="M163.448 39.3832C163.448 41.0304 162.287 41.7604 161.258 41.7604C160.041 41.7604 159.124 40.9181 159.124 39.4581C159.124 37.998 160.097 37.0809 161.314 37.0809C162.531 37.137 163.448 38.0355 163.448 39.3832ZM159.929 39.4394C159.929 40.4127 160.472 41.1427 161.258 41.1427C162.044 41.1427 162.587 40.4127 162.587 39.4394C162.587 38.7093 162.231 37.736 161.258 37.736C160.341 37.736 159.929 38.597 159.929 39.4394Z" fill="#007DB2"></path> <path d="M166.368 37.1932L167.211 39.6827C167.323 40.1132 167.454 40.4689 167.566 40.8432C167.678 40.4876 167.81 40.1132 167.922 39.6827L168.764 37.1932H169.606L167.847 41.6294H167.061L165.357 37.1932C165.395 37.1932 166.368 37.1932 166.368 37.1932Z" fill="#007DB2"></path> <path d="M174.51 41.6294L174.454 41.0866C174.211 41.4422 173.724 41.7604 173.125 41.7604C172.208 41.7604 171.796 41.1614 171.796 40.4876C171.796 39.4019 172.769 38.8404 174.473 38.8404V38.7281C174.473 38.3724 174.36 37.6986 173.443 37.6986C173.013 37.6986 172.601 37.8109 172.283 37.9981L172.095 37.4552C172.451 37.2119 173.013 37.0996 173.555 37.0996C174.884 37.0996 175.259 38.0168 175.259 38.9152V40.5625C175.259 40.9181 175.259 41.3486 175.315 41.592H174.529V41.6294H174.51ZM174.398 39.3832C173.555 39.3832 172.507 39.4955 172.507 40.3566C172.507 40.8994 172.863 41.1427 173.293 41.1427C173.836 41.1427 174.267 40.7871 174.379 40.4127C174.379 40.3566 174.435 40.2255 174.435 40.1694V39.3832H174.398Z" fill="#007DB2"></path> <path d="M179.021 35.9203V37.1932H180.182V37.7921H179.021V40.2255C179.021 40.7683 179.208 41.0678 179.62 41.0678C179.807 41.0678 179.976 41.0678 180.107 41.0117L180.163 41.6107C179.976 41.6668 179.732 41.723 179.433 41.723C179.077 41.723 178.759 41.6107 178.591 41.3673C178.347 41.124 178.291 40.7683 178.291 40.2068V37.7734H177.617V37.1744H178.291V36.1449L179.021 35.9203Z" fill="#007DB2"></path> <path d="M183.626 35.9765C183.626 36.276 183.439 36.4632 183.139 36.4632C182.84 36.4632 182.652 36.2198 182.652 35.9765C182.652 35.677 182.84 35.4898 183.139 35.4898C183.457 35.4898 183.626 35.677 183.626 35.9765ZM182.727 41.6294V37.1932H183.513V41.6294H182.727Z" fill="#007DB2"></path> <path d="M190.57 39.3832C190.57 41.0304 189.409 41.7604 188.38 41.7604C187.163 41.7604 186.246 40.9181 186.246 39.4581C186.246 37.998 187.219 37.0809 188.436 37.0809C189.709 37.137 190.57 38.0355 190.57 39.3832ZM187.032 39.4394C187.032 40.4127 187.575 41.1427 188.361 41.1427C189.147 41.1427 189.69 40.4127 189.69 39.4394C189.69 38.7093 189.335 37.736 188.361 37.736C187.463 37.736 187.032 38.597 187.032 39.4394Z" fill="#007DB2"></path> <path d="M193.248 38.4099C193.248 37.9232 193.248 37.5675 193.191 37.1932H193.921L193.978 37.9232C194.221 37.4927 194.708 37.0809 195.438 37.0809C196.037 37.0809 197.01 37.4365 197.01 38.9714V41.6481H196.224V39.1024C196.224 38.3724 195.98 37.7734 195.194 37.7734C194.651 37.7734 194.221 38.1291 194.109 38.6158C194.052 38.7281 194.052 38.8591 194.052 38.9714V41.6481H193.266L193.248 38.4099Z" fill="#007DB2"></path> <path d="M199.873 40.8432C200.116 41.0304 200.547 41.1427 200.903 41.1427C201.502 41.1427 201.745 40.8432 201.745 40.4689C201.745 40.1132 201.502 39.8699 200.903 39.6827C200.116 39.3832 199.742 38.9527 199.742 38.4098C199.742 37.6798 200.285 37.137 201.258 37.137C201.689 37.137 202.101 37.2493 202.344 37.4365L202.157 38.0355C201.97 37.9232 201.67 37.7921 201.239 37.7921C200.753 37.7921 200.509 38.0916 200.509 38.3911C200.509 38.7468 200.753 38.934 201.352 39.1211C202.138 39.4206 202.512 39.795 202.512 40.4501C202.512 41.2363 201.913 41.7791 200.865 41.7791C200.378 41.7791 199.948 41.6668 199.648 41.4796L199.873 40.8432Z" fill="#007DB2"></path> <path d="M208.689 41.1989C208.689 40.8994 208.933 40.656 209.232 40.656C209.532 40.656 209.775 40.8994 209.775 41.1989C209.775 41.4984 209.588 41.7417 209.232 41.7417C208.877 41.7417 208.689 41.5171 208.689 41.1989ZM208.858 39.8699L208.746 35.4898H209.588L209.476 39.8699H208.858Z" fill="#007DB2"></path> </g> <defs> <clipPath id="clip0_124_7422"> <rect width="210" height="48.6113" fill="white"></rect> </clipPath> </defs> </svg> 
                        </a>
                        <a href="tel:+1(989)535-9295" class="ml-md-auto header-call-link d-md-flex"><span> <img width="20" height="20" alt="+(989)535-9295" src="https://emizentech.com/wp-content/uploads/2026/03/Phone-black.svg"></span>+1(989)535-9295</a>
                        <a   data-toggle="modal" data-target="#pricingModal"  class="enquiry-btn new-btn ml-3 rounded-pill d-none d-lg-block"><img class="d-lg-none d-block" src="https://emizentech.com/wp-content/uploads/2025/08/phone-call.svg" alt="Get My Free Consultation" width="30" height="30"> Get My Free Consultation</a>           
                      </nav>
                  </div>
                </div>
                <section class="ecommerce-hero-sec position-relative overflow-hidden my-lg-0">
                   <div class="container">
                      <div class="row align-items-center">
                         <div class="col-lg-6">
                            <div class="hero-title-sec mx-auto banner-ondmnd">
                               <h1 class="sec-title text-capitalize"><span> On-Demand App</span> Development Services </h1>
                               <span class="sub-head">for Speed, Reach, and Competitive Edge</span>
                               <p class="hero-disc pb-3">Engage, deliver, and scale effortlessly, with your own on-demand app. Stop losing customers to slow load times and use a high-performance mobile platform to manage thousands of orders, bookings, and appointments simultaneously. Get expert on-demand app development services for your business and move ahead strategically, so you never have to worry about technical debt.</p>
                               <a   data-toggle="modal" data-target="#pricingModal"  class="btn emizen-btn mt-lg-3 mt-2 rounded-pill"><span class="pre-text"> Start Your Project </span> <span class="hover-text">Book a Free Consultation</span>
                               <img class="ml-2" src="https://emizentech.com/wp-content/uploads/2025/12/btn-arrow-1.svg" width="30" height="30" alt="contact us" />
                               </a>
                            </div>
                         </div>
                         <div class="col-sm-6 d-none d-lg-block">
                            <section class="scroll-section">
                               <div class="scroll-wrapper">
                                  <!-- LEFT COLUMN -->
                                  <div class="scroll-column">
                                     <div class="scroll-track scroll-up">
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg1.jpg"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg3.jpg"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg4.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg5.png"></div>
                                        <!-- duplicate -->
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg6.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg11.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg12.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg13.png"></div>
                                     </div>
                                  </div>
                                  <!-- RIGHT COLUMN -->
                                  <div class="scroll-column">
                                     <div class="scroll-track scroll-down">
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg14.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg15.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg16.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg17.png"></div>
                                        <!-- duplicate -->
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg1.jpg"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg3.jpg"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg4.png"></div>
                                        <div class="card"><img src="https://emizentech.com/wp-content/uploads/2026/03/slideimg5.png"></div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                         </div>
                      </div>
                   </div>
                </section>

                    <section class="form-sec mb-0 align-items-center">
                        <div class="container">
                            <div class="brand-l-f">
                                <div class="row justify-content-between">
                                    <div class="col-lg-4 col-xl-4 col-md-5 mt-4 mt-lg-0">
                                        <div class="left-form">
                                            <div class="consulting-form">
                                                <h3 class="form-title text-white">Claim Your Free Technical Audit & Roadmap</h3>
                                                <?php echo do_shortcode('[elementor-template id="37178"]'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-xl-7 col-lg-8 mt-4 mt-md-0">
                                        <div class="innercontainer">
                                        <div class="sec-head">
                                            <h2 class="sec-title aos-init aos-animate" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">Backed by the Trust of Top Brands and Startups Across the USA</h2>
                                            <p class="sec-disc aos-init aos-animate" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">Join 500+ satisfied clients transforming the on-demand economy.</p>
                                        </div>
                                       <ul class="d-flex flex-wrap px-0 justify-content-center mb-0 brands-listing">
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"><img src="https://emizentech.com/wp-content/uploads/2026/03/fivelogo.svg" width="131" height="42" alt="fivelogo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"><img src="https://emizentech.com/wp-content/uploads/2026/03/bidytlogo.svg" width="140" height="36" alt="bidlyt"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800"><img src="https://emizentech.com/wp-content/uploads/2026/03/roomlogo.svg" width="130" height="20" alt="roomlogo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"><img src="https://emizentech.com/wp-content/uploads/2026/03/listalogo.svg" width="140" height="24" alt="listalogo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"><img src="https://emizentech.com/wp-content/uploads/2026/03/affayerslogo.svg" width="124" height="86" alt="affayerslogo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"><img src="https://emizentech.com/wp-content/uploads/2026/03/oceanlogo.svg" width="150" height="15" alt="oceanlogo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400"><img src="https://emizentech.com/wp-content/uploads/2026/03/richabrotherslogo.svg" width="140" height="24" alt="richabrotherslogo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400"><img src="https://emizentech.com/wp-content/uploads/2026/03/Rove_logo-2.svg" width="87" height="38" alt="Rove_logo"></li>
                                            <li data-aos="fade-down" data-aos-easing="linear" data-aos-duration="400"><img src="https://emizentech.com/wp-content/uploads/2026/03/buitandalogo.svg" width="112" height="26" alt="buitandalogo"></li>
                                           
                                        </ul>
                                        <div class="sec-cta d-flex justify-content-between align-items-center mt-40">
                                               <p class="sec-disc"><strong> Join 500+</strong> satisfied clients transforming the on-demand economy</p>
                                               <a   data-toggle="modal" data-target="#pricingModal"  class="btn emizen-btn"><span class="pre-text">Join the Revolution</span> <span class="hover-text">Build Your App Now</span><img src="https://emizentech.com/wp-content/uploads/2026/03/white-forword-arrow.svg" alt="forword-arrow" height="12" width="15"> </a>
                                            
                                            </div>
                                         </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                         
                    </section>
                     <section class="emz-award-section py-80 w-100 position-relative">
                                    <img src="https://emizentech.com/wp-content/uploads/2026/03/leaf-left.svg" class="left-leaf d-none d-md-block"  width="162" height="411">
                        <img src="https://emizentech.com/wp-content/uploads/2026/03/leaf-right.svg" class="right-leaf d-none d-md-block" width="162" height="411">
                        <div class="container">
                            <div class="text-center">
                                <img src="https://emizentech.com/wp-content/uploads/2026/03/rating-stars.svg" width="100" height="48" alt="rating">
                                <h2 class="sec-title text-white"  data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">Awards and Recognitions</h2>
                            </div>
                            <div class="row align-itmes-start justify-content-md-between justify-content-center pt-lg-4">
                                <div class="award-card-box">
                                    <div class="award-icon text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1600">
                                        <img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/08/GoodFirms_Pro_Badge1.svg" alt="GoodFirms Official Partner" width="1920" height="953">
                                    </div>
                                </div>
                                <div class="award-card-box">
                                    <div class="award-icon text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
                                        <img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2026/03/cross-plateform-app-developer.png" alt="Top Automotive Software Developers 2025" width="367" height="503">
                                    </div>
                                </div>
                                <div class="award-card-box">
                                    <div class="award-icon text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2000">
                                        <img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2026/02/top-app-develpment-company-2026.png" alt="top-app-develpment-company-2026" width="800" height="864">
                                    </div>
                                </div>
                                 <div class="award-card-box">
                                    <div class="award-icon text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1200">
                                        <img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2026/03/mobile-game-develoer.png" alt="prestashop-badge2026" width="741" height="800">
                                    </div>
                                </div>
                               
                                
                               
                                <div class="award-card-box">
                                    <div class="award-icon text-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="2400">
                                        <img class="d-block mx-auto" src="https://emizentech.com/wp-content/uploads/2025/08/Automotive-1.svg" alt="Spring 2025 Clutch Global" width="200" height="200">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="industry-section">
                       <div class="container">
                          <div class="industry-top align-items-center">
                             <div class="industry-text">
                                <h2 class="head-h2">Enabling Digital Excellence with On-Demand App Solutions Across Industries</h2>
                                <p class="sec-disc">
                                   Reduce friction between user’s request and service delivery. Becomes a leading brand in your niche with on-demand solutions designed for different usage patterns and trends.
                                </p>
                             </div>
                             <div class="industry-cta">
                                <span>Didn’t find your industry? Get a custom solution.</span>
                                <a class="emizen-btn"   data-toggle="modal" data-target="#pricingModal" > <span class="pre-text">Discuss Your Idea</span> <span class="hover-text">Talk to an Expert </span> <img src="https://emizentech.com/wp-content/uploads/2026/03/btn-arrow.svg" width="15" class="emizen-btn-arrow" height="12"></a>
                             </div>
                          </div>
                          <div class="industry-pillars">
                             <div class="pillar-item">
                                <div class="circle orange">
                                   <h3>Delivery and Logistics Ecosystems</h3>
                                   <p class="circle-disc">
                                      Planning to scale but facing delays? Let our on-demand delivery app development services do the work. From GPS tracking to smart route optimization, get a feature-rich app that meets customer expectations and drives success.
                                   </p>
                                </div>
                                <div class="pillar pillar1"></div>
                             </div>
                             <div class="pillar-item">
                                <div class="circle pink">
                                   <h3>Healthcare and Telemedicine </h3>
                                   <p class="circle-disc">Simplify communication between patients and healthcare providers using secure, on-demand doctor mobile app development services. We build encrypted portals for video consultations, digital prescriptions, and instant lab results, ensuring 100% data privacy and easy scheduling.
                                   </p>
                                </div>
                                <div class="pillar pillar2"></div>
                             </div>
                             <div class="pillar-item">
                                <div class="circle blue">
                                   <h3>Home and Professional Services</h3>
                                   <p class="circle-disc">From HVAC to house cleaning, grow your service business with an automated booking marketplace. Our on-demand home services app development strategy offers service provider vetting, instant bookings, and secure payment escrow, simplifying scheduling into a single tap.
                                </div>
                                <div class="pillar pillar3"></div>
                             </div>
                          </div>
                       </div>
                    </section>


                <section class="scroll-track" id="mainTrack" style="background-color: #22577A;">
                   <div class="sticky-content">
                      <div class="container position-relative">
                         <!-- Slide 1 -->
                         <div class="slide-layer active" id="s1">
                            
                            <div class="row align-items-center">
                               <div class="col-lg-6 success-left">
                                  <h2 class="fw-bold mb-lg-4 head-h2 text-white">Inspiring Success Stories Across Industries, with Custom On-Demand App Development </h2>
                                  <p class="subtext">Explore real-world solutions that are making a real impact. </p>
                                  <div class="about-story">
                                     <h3 class="display-6">Mazadi</h3>
                                     <p class="lead description">Developed an on on-demand marketplace split solution for buying and selling products across different categories. The platform supports and simplifies real-time listings, location-based discovery, secure transactions, and high user concurrency across geographies.</p>
                                  </div>
                                  <div class="cta-box">
                                     <span>Tap below to be our next success story</span>
                                     <a   data-toggle="modal" data-target="#pricingModal"  class="cta-btn">
                                   <span class="pre-text">Talk to a Consultant</span> <span class="hover-text">Access Your Own Project Roadmap </span> <img class="ml-2" src="https://emizentech.com/wp-content/uploads/2026/03/white-forword-arrow.svg" alt="forword arrow" width="15" height="12">
                                     </a>
                                  </div>
                               </div>
                               <div class="col-lg-6 text-center success-right d-none d-md-block">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/mazadi.png" class="mazadi">
                               </div>
                            </div>
                         </div>
                         <!-- Slide 2 -->
                         <div class="slide-layer" id="s2">
                            <div class="row align-items-center">
                               <div class="col-lg-6 success-left">
                                  <h2 class="fw-bold mb-lg-4 head-h2 text-white">Inspiring Success Stories Across Industries, with Custom On-Demand App Development</h2>
                                  <p class="subtext">Explore real-world solutions that are making a real impact.</p>
                                  <div class="about-story">
                                     <h3 class="display-6">LifePlus Treatments </h3>
                                     <p class="lead description">Delivered doctor on-demand mobile app development services, enabling patients to book treatments on demand. The app makes appointment scheduling, certified provider selection, data handling, and video consultations, simpler and more secure across iOS and Android.</p>
                                  </div>
                                  <div class="cta-box">
                                     <span>Tap below to be our next success story</span>
                                     <a   data-toggle="modal" data-target="#pricingModal"  class="cta-btn">
                                     <span class="pre-text">Talk to a Consultant</span> <span class="hover-text">Access Your Own Project Roadmap </span> <img src="https://emizentech.com/wp-content/uploads/2026/03/white-forword-arrow.svg" alt="forword arrow" width="15" height="12">
                                     </a>
                                  </div>
                               </div>
                               <div class="col-lg-6 text-center success-right d-none d-md-block">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/LifePlus-Treatments.png" class="LifePlus">
                               </div>
                            </div>
                         </div>
                         <!-- Slide 3 -->
                         <div class="slide-layer" id="s3">
                            <div class="row align-items-center">
                               <div class="col-lg-6 success-left">
                                  <h2 class="fw-bold mb-lg-4 head-h2 text-white">Inspiring Success Stories Across Industries, with Custom On-Demand App Development</h2>
                                  <p class="subtext">Explore real-world solutions that are making a real impact. </p>
                                  <div class="about-story">
                                     <h3 class="display-6">Talking Tomatoes </h3>
                                     <p class="lead description">Planned, designed, and developed full-scale on-demand food delivery app. The platform supports scheduled deliveries, real-time order tracking, and location-based availability. It simplifies high-frequency order handling, vendor management, and checkout.</p>
                                  </div>
                                  <div class="cta-box">
                                     <span>Tap below to be our next success story.</span>
                                     <a   data-toggle="modal" data-target="#pricingModal"  class="cta-btn"><span class="pre-text">Talk to a Consultant</span> <span class="hover-text">Access Your Own Project Roadmap </span><img src="https://emizentech.com/wp-content/uploads/2026/03/white-forword-arrow.svg" alt="forword arrow" width="15" height="12">
                                     </a>
                                  </div>
                               </div>
                               <div class="col-lg-6 text-center success-right d-none d-md-block">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/Talking-Tomatoes.png" class="Talking-Tomatoes">
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- TRIGGERS: Added 'data-color' to define the background for each section -->
                    <div class="trigger-wrapper">
                       <div class="step" data-target="s1" data-gradient="linear-gradient(180deg, #22577A 0%, #38A3A5 100%)"></div>

                       <div class="step" data-target="s2" data-gradient="linear-gradient(180deg, #2940D3 0%, #39A9CB 100%)"></div>

                       <div class="step" data-target="s3" data-gradient="linear-gradient(180deg, #FF5700 0%, #FF9642 100%)"></div>
                    </div>
                </section>


                <section class="industry-section complt-dmnd">
                   <div class="container">
                      <div class="industry-top  align-items-center">
                         <div class="industry-text">
                            <h2 class="head-h2">Complete On-Demand Development Services, One Stop </h2>
                            <p>
                               Cut through the technical noise and build lean, high-traffic infrastructures from scratch. As your development partner, we will handle the entire lifecycle ensuring nothing goes wrong.
                            </p>
                         </div>
                         <div class="industry-cta">
                            <span>From concept to launch, we handle it all.</span>
                            <a class="emizen-btn"   data-toggle="modal" data-target="#pricingModal" ><span class="pre-text"> Unlock Full Roadmap </span><span class="hover-text"> Let’s Talk About Your Project </span> <img src="https://emizentech.com/wp-content/uploads/2026/03/btn-arrow.svg" width="15" class="emizen-btn-arrow" height="12"></a>
                         </div>
                      </div>
                      <div class="services-section">
                         <div class="services-grid">
                            <!-- CARD 1 -->
                            <div class="service-card blue1">
                               <div class="icon-box">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/ui-design.svg" width="40" height="40" alt="mobile">
                               </div>
                               <h3>UI/UX Design</h3>
                               <p>
                                  Convert customers faster through the zero-friction interface of your on-demand app. We take every tap and screen seriously. Our on-demand mobile app development team focuses on thumb-friendly layouts and high-speed page loads, so that the user reaches the checkout space without a hassle.
                               </p>
                            </div>
                            <!-- CARD 2 -->
                            <div class="service-card purple1">
                               <div class="icon-box">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/Custom-Backend-Development.svg" width="40" height="40" alt="mobile">
                               </div>
                               <h3>Custom Backend Development </h3>
                               <p>
                                  Launch a solution that handles a massive number of concurrent transactions with a server-side architecture. We write modular code that supports real-time GPS data, quick notifications, and even the most complex user databases without lag. This heavy-duty engine takes control of the backend, keeping your on-demand application development project running 24/7.
                               </p>
                            </div>
                            <!-- CARD 3 -->
                            <div class="service-card orange1">
                               <div class="icon-box">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/API-Integration-and-Migration.svg" width="40" height="40" alt="mobile">
                               </div>
                               <h3>API Integration and Migration </h3>
                               <p>
                                  Make your business work in sync with the global digital ecosystem through seamless third-party connections. As your on-demand app development company, we help you enjoy 5X faster operations by integrating payment, communications, GPS, and more solutions. This adds value to your app and makes customer experience a lot more fulfilling. Rest assured, we make sure that data security and speed are not compromised here.
                               </p>
                            </div>
                            <!-- CARD 4 -->
                            <div class="service-card green1">
                               <div class="icon-box">
                                  <img src="https://emizentech.com/wp-content/uploads/2026/03/Maintenance-and-Support.svg" width="40" height="40" alt="mobile">
                               </div>
                               <h3>Maintenance and Support </h3>
                               <p>
                                  We maintain on-demand apps as seriously as we develop one. Stay ahead of trends, abrupt demands, and challenges with regular OS updates, hardware changes, monitoring, optimization and bug fixes. Keep your platform secure and steady, so it never misses any revenue opportunity.
                               </p>
                            </div>
                         </div>
                      </div>
                   </div>
                </section>


                <section class="industry-section next-gen">
                   <div class="container">
                      <div class="industry-top">
                         <div class="industry-text">
                            <h2 class="head-h2">Keeping Brands Ahead of the Crowded Market, with <span>Next-Gen</span> Technologies</h2>
                            <p>
                               You are just a perfect tech stack away from making apps a byproduct of speed, intelligence, and competitive advantage. 
                            </p>
                         </div>
                         <div class="industry-cta">
                            <span>Leverage advanced technologies, beat your competition.</span>
                            <a class="emizen-btn"   data-toggle="modal" data-target="#pricingModal" ><span class="pre-text">Upgrade Your Tech</span><span class="hover-text">Consult Our CTO </span> <img src="https://emizentech.com/wp-content/uploads/2026/03/btn-arrow.svg" width="15" class="emizen-btn-arrow" height="12"></a>
                         </div>
                      </div>
                      <div class="next-gen-main">
                         <div class="card">
                            <div class="number">1</div>
                            <div class="icon iot"><img src="https://emizentech.com/wp-content/uploads/2026/03/Icon-5.svg" width="32" height="32" alt="IoT Integration-service"></div>
                            <h3>AI and Predictive Analytics</h3>
                            <p class="sec-disc">
                               Integrate AI to enhance speed and customer engagement. Manage demand spikes, user behavior, and smart recommendations on the go. Set new benchmarks of customer experience with AI-focused on-demand food delivery app development. Simplify how you retain customers.
                            </p>
                         </div>
                         <div class="card iot">
                            <div class="number">2</div>
                            <div class="icon iot"><img src="https://emizentech.com/wp-content/uploads/2026/03/AI-and-Predictive-Analytics.svg" width="32" height="32" alt="IoT Integration-service"></div>
                            <h3>IoT Integration</h3>
                            <p class="sec-disc">
                               Enable real-time tracking and status visibility for logistics-heavy platforms. Built for on demand courier app development and delivery networks that require location accuracy and operational control.
                            </p>
                         </div>
                         <div class="card crs">
                            <div class="number">3</div>
                            <div class="icon iot"><img src="https://emizentech.com/wp-content/uploads/2026/03/Cross-Platform.svg" width="32" height="32" alt="IoT Integration-service"></div>
                            <h3>Cross-Platform Development</h3>
                            <p class="sec-disc">
                               Use Flutter and React Native for building faster and smarter. Reduce both time and costs for on-demand mobile app development. Deliver non-stop performance across iOS and Android. 
                            </p>
                         </div>
                      </div>
                   </div>
                </section>

            <section class="reviews-section">
               <div class="container">
                  <h2 class="head-h2">Rated <span>4.9/5</span> on <a href="#"><img src="https://emizentech.com/wp-content/uploads/2026/03/Clutch.png" alt="mobile"></a></h2>
                  <p class="subtitle">Here's What Our Clients Are Saying</p>
                  <!-- Row 1 -->
                  <div class="marquee">
                     <div class="marquee-track left">
                        <div class="review-card">
                           <p>They're great at communicating and always there when I need them. Emizentech delivered two incredible apps, a great admin panel and fully supports our goal. I highly recommend Emizentech — ask for Robin to be your project manager."Project: Emergency Notification Mobile App</p>
                           <hr>
                           <h4>Mike Robison</h4>
                           <span class="role">President, School Security First (Idaho, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>The quality of the service and the speed with which it was developed were impressive. While other providers promised over 6 months of development for a functional MVP, Emizen Tech did it within 2 months."Project: iOS & Android Mobile App</p>
                           <hr>
                           <h4>Marcin Miller</h4>
                           <span class="role">Managing Director, AI & Automation Solutions Co (Warsaw, Poland)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Their setup works very well. Emizen Tech's most important attribute is its ability to respond to requests quickly throughout the process. The app is full-featured and delivered on time."Project: Android & iOS Mobile App Design & Development</p>
                           <hr>
                           <h4>Kamil Sliwak</h4>
                           <span class="role">Co-Founder, Software Development Company (Wroclaw, Poland)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>We are so happy with the end result. The design and operation are exactly what we were looking for. I would like to thank Shankar and Ayushi — they have both been instrumental in delivering the app and were always available."Project: Golf Event Management Mobile App</p>
                           <hr>
                           <h4>Anonymous Executive</h4>
                           <span class="role">RiddyGolf Limited (United Kingdom)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Their willingness to adapt to our needs, combined with clear and consistent communication, made the entire process both productive and smooth. Their detailed documentation helped our team integrate the new technology."Project: IoT-Integrated Health & Wearable Mobile App </p>
                           <hr>
                           <h4>Shane Tobin</h4>
                           <span class="role">CEO, Lowquotes.ie Insurance Company (Ireland)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>What impressed me most was that Emizen Tech took the project personally and treated our company like theirs. We were teammates working to build the app together. Our project manager was amazing."Project: Mobile App with GPS, Inventory & Drone Integration</p>
                           <hr>
                           <h4>Steven Parr</h4>
                           <span class="role">Operational Director, Timber Harvesting Company (United Kingdom)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Their ability to bridge the gap between technology and healthcare was truly unique and invaluable to our success. They not only delivered a high-quality mobile app but also provided valuable insights to further optimize our tools."Project: Telemedicine & Remote Monitoring Mobile App</p>
                           <hr>
                           <h4>Shauna Parker-Clevenger</h4>
                           <span class="role">VP of Operations, Biotechnology Company (Los Angeles, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Emizen Tech's responsiveness and ability to adapt to our evolving needs were remarkable, making the entire process smooth and collaborative. Their passion for creating a high-quality, user-centered app was evident in every aspect."Project: Remote Control & Management Mobile App</p>
                           <hr>
                           <h4>Antti Arola</h4>
                           <span class="role">Technical Director, Communication Systems Developer (Finland)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Their team is truly great, and they care. When there were issues, they listened and always worked hard to fix them as soon as possible. We couldn't have picked anyone better."Project: P2P Lending Marketplace Mobile App</p>
                           <hr>
                           <h4>Don Davis</h4>
                           <span class="role">CEO, Financial Services Company (San Francisco, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>They were incredibly transparent and highly responsive to our needs, making adjustments whenever necessary. Emizen Tech has been an invaluable partner in helping us empower our clients."Project: On-Demand Booking & Appointment Management App</p>
                           <hr>
                           <h4>Frankie Paterson</h4>
                           <span class="role">Director & Speech Language Therapist, Wellness Center (United Kingdom)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <!-- duplicate cards for smooth loop -->
                        <div class="review-card">
                           <p>It felt like we were collaborating with a partner rather than just a service provider. Their proactive approach in suggesting improvements was invaluable — they didn't just deliver a product, they provided a solution."Project: On-Demand Shipper & Trucker Connection Platform</p>
                           <hr>
                           <h4>Sunil Sharma</h4>
                           <span class="role">CPO & CTO, Logistics Company (San Francisco, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                     </div>
                  </div>
                  <!-- Row 2 -->
                  <div class="marquee">
                     <div class="marquee-track right">
                        <div class="review-card">
                           <p>They were highly organized and delivered each stage of the project on time. Communication was clear and consistent. The team's deep knowledge exceeded our expectations."Project: IoT Inventory & Supply Chain Management App</p>
                           <hr>
                           <h4>Brock Leger</h4>
                           <span class="role">IT Manager, Nutritional Blends & Vitamins Company (Louisiana, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>What stood out most was Emizen Tech's attention to detail and genuine commitment to understanding our business. The project felt like a true collaboration where our input was valued."Project: IoT Smart Inventory Management App</p>
                           <hr>
                           <h4>Paul Sims</h4>
                           <span class="role">CEO, Nuqleous (B2B SaaS Provider) (Bentonville, Arkansas)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>We felt like valued partners, with open lines of communication and regular progress reports. They make the most difficult challenges seem trivial and easy to overcome."Project: GPS & Fleet Tracking Mobile App</p>
                           <hr>
                           <h4>Vytenis Norušis</h4>
                           <span class="role">CEO, Supply Chain & Transport Company (Vilnius, Lithuania)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Emizen Tech was an exceptional partner. Any time we had a new idea or needed to adjust something, they were quick to accommodate and provided thoughtful solutions throughout every phase."Project: AR Try-On & E-Commerce Mobile Experience</p>
                           <hr>
                           <h4>Hope Schneider</h4>
                           <span class="role">CEO & Founder, Fashion Brand (El Segundo, California)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>


                        <div class="review-card">
                           <p>What impressed me most was that Emizen Tech took the project personally and treated our company like theirs. We were teammates working to build the app together. Our project manager was amazing."Project: Mobile App with GPS, Inventory & Drone Integration</p>
                           <hr>
                           <h4>Steven Parr</h4>
                           <span class="role">Operational Director, Timber Harvesting Company (United Kingdom)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Their ability to bridge the gap between technology and healthcare was truly unique and invaluable to our success. They not only delivered a high-quality mobile app but also provided valuable insights to further optimize our tools."Project: Telemedicine & Remote Monitoring Mobile App</p>
                           <hr>
                           <h4>Shauna Parker-Clevenger</h4>
                           <span class="role">VP of Operations, Biotechnology Company (Los Angeles, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Emizen Tech's responsiveness and ability to adapt to our evolving needs were remarkable, making the entire process smooth and collaborative. Their passion for creating a high-quality, user-centered app was evident in every aspect."Project: Remote Control & Management Mobile App</p>
                           <hr>
                           <h4>Antti Arola</h4>
                           <span class="role">Technical Director, Communication Systems Developer (Finland)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>Their team is truly great, and they care. When there were issues, they listened and always worked hard to fix them as soon as possible. We couldn't have picked anyone better."Project: P2P Lending Marketplace Mobile App</p>
                           <hr>
                           <h4>Don Davis</h4>
                           <span class="role">CEO, Financial Services Company (San Francisco, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <div class="review-card">
                           <p>They were incredibly transparent and highly responsive to our needs, making adjustments whenever necessary. Emizen Tech has been an invaluable partner in helping us empower our clients."Project: On-Demand Booking & Appointment Management App</p>
                           <hr>
                           <h4>Frankie Paterson</h4>
                           <span class="role">Director & Speech Language Therapist, Wellness Center (United Kingdom)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>
                        <!-- duplicate cards for smooth loop -->
                        <div class="review-card">
                           <p>It felt like we were collaborating with a partner rather than just a service provider. Their proactive approach in suggesting improvements was invaluable — they didn't just deliver a product, they provided a solution."Project: On-Demand Shipper & Trucker Connection Platform</p>
                           <hr>
                           <h4>Sunil Sharma</h4>
                           <span class="role">CPO & CTO, Logistics Company (San Francisco, USA)</span>
                           <div class="stars">★★★★★ <span><img src="https://emizentech.com/wp-content/uploads/2026/03/verfy-clutch.png"></span></div>
                        </div>


                     </div>
                  </div>
               </div>
            </section>
<section class="cta_Sec cta2 mb-0">
    <div class="container">
        <div class="cta_Sec-box position-relative overflow-hidden">
    <div class="cta_container d-flex justify-content-between align-items-center  w-100">
            <div class="cta-cotnent-wrap">
                <h3 class="text-white">Still Deciding? Let Our Experts Help!</h3>
                <p class="text-white pb-40">Join 500+ US brands running stable, revenue-ready platforms built by a trusted eCommerce website development company.</p>
            </div>
            <div class="cta-right-sec">                            
                <a   data-toggle="modal" data-target="#pricingModal"  class="btn emizen-btn mt-lg-3 mt-2" target="_blank"><span class="pre-text">Schedule My Discovery Call</span> <span class="hover-text"> It’s Free and Strictly Technical</span>
                    <img src="https://emizentech.com/wp-content/uploads/2026/03/white-forword-arrow.svg" alt="forword-arrow" height="12" width="15">
                  
                </a>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="home_faq_sec py-80 my-0">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-12 d-flex flex-wrap align-items-center justify-content-between flex-wrap">
                <div class="sec-head faq-head text-left">
                    <h2 class="sec-title">Frequently Asked Questions</h2>
                    <p class="sec-disc">Get expert feedback on your unique idea without ever worrying about privacy or intellectual property theft.
                    </p>
                </div>
                <a data-toggle="modal" data-target="#pricingModal" class="btn emizen-btn" target="_blank"><span class="pre-text">Contact Support</span> <span class="hover-text">Chat With Us Now</span><img class="ml-2" src="https://emizentech.com/wp-content/uploads/2026/03/white-forword-arrow.svg" alt="forword-arrow" height="12" width="15"> </a>
            </div>
            <div class="col-md-12">
                <div class="faq-wrap">
                    <div id="homefaq">
                         <div class="faq_card my-2">
                            <div id="faqtitleTwo" class="card-header"> <button class="btn btn-link">How much does it cost to build an on-demand delivery app?</button> </div>
                            <div id="collapseTwo" class=" collap-card" aria-labelledby="faqtitleTwo" style="display: none;">
                                <div class="card-body">It depends. Several factors, including features, scale, and integrations impact the overall cost of on-demand app development projects.</div>
                            </div>
                        </div>


                        <div class="faq_card my-2">
                            <div id="faqtitleTwo" class="card-header"> <button class="btn btn-link">How long does it take to launch?</button> </div>
                            <div id="collapseTwo" class=" collap-card" aria-labelledby="faqtitleTwo" style="display: none;">
                                <div class="card-body">An MVP typically goes live in 3-4 months, while a full-scale project can last up to 6 months. Again, factors like project scope, resources, and feedback can influence the timeline.</div>
                            </div>
                        </div>
                        <div class="faq_card my-2">
                            <div id="faqtitlethree" class="card-header"> <button class="btn btn-link">Do you provide source code ownership?</button> </div>
                            <div id="collapsethree" class=" collap-card" aria-labelledby="faqtitlethree" style="display: none;">
                                <div class="card-body">Yes. With us, you get complete ownership. In fact, it comes as a standard part of every on-demand application development project.
                                </div>
                            </div>
                        </div>
                        <div class="faq_card my-2 active">
                            <div id="faqtitlefour" class="card-header"> <button class="btn btn-link">Can you build a clone of Uber or DoorDash?</button> </div>
                            <div id="collapsefour" class=" collap-card" aria-labelledby="faqtitlefour" style="display: block;">
                                <div class="card-body">Yes. On-demand app development services cover clones with better performance, scalability, and business logic.</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


     <section class="conntect--us mn_fooer">
                <div class="container">
                    <div class="d-block contact-info p-0 text-center position-relative">
                       <div class="row ">
                          <div class="col-lg-9">
                             <div class="connect-with-us d-flex align-items-center justify-content-between">
                                <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz-footer-icon.png" alt="footer" width="172" height="40">
                                <p class="address text-white d-flex align-items-center pb-0"> <img class="mr-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/ft-Location-icon.png" alt="Address" width="32" height="38"> 30 NGould St Ste R Sheridan, WY 82801 USA</p>
                             </div>
                          </div>
                          <div class="col-lg-3 mt-3 mt-lg-0">
                             <p class="text-white border-space d-flex align-items-center"><img src="https://emizentech.com/wp-content/uploads/2026/03/Icon-4.svg" alt="USA" width="65" height="65"> <span>USA<a class="d-block" href="tel:+19895359295">+1 (989) 535-9295</a></span></p>
                          </div>
                       </div>
                    </div>
                    
                    <div class="consulting--container text-md-left text-center">
                        <div class="row align-items-center">
                           <div class="col-lg-4">
                              <h3 class="p-0">We Offer a <strong>60 minute Free</strong> Consultation</h3>
                           </div>
                           <div class="col-lg-8 mt-3 mt-lg-0">
                              <ul class="text-md-left m-0">
                                 <li><a href="tel:+19895359295"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/phone.svg" width="30" height="30" alt="+1 (989) 535-9295">+1 (989) 535-9295</a></li>
                                 <li><a href="mailto:info@emizentech.com"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/email.svg" alt="emizentech">info@emizentech.com</a></li>
                                 <li><a target="_blank" href="https://teams.live.com/l/invite/FEATkVbdw40mc785gE"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/team-icon.svg" width="30" height="30" alt="emizentech">emizentech</a></li>
                              </ul>
                           </div>
                        </div>
                    </div>
                         <div class="footer-custom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="copyright-box">
                                <p class="copyright">Copyright © 2013 - 2026 Emizentech . All Rights Reserved. <a class="d-block" href="https://emizentech.com/privacy-policy.html">Privacy Policy</a> </p>
                                <ul class="pl-0 emizentech-social d-flex mb-0 mt-2 pt-2">
                                    <li class="txts"> <a class="m-0" href="https://www.facebook.com/EmizenTech/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="http://www.linkedin.com/company/emizen-tech" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="https://www.instagram.com/emizentech/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a href="https://x.com/EmizenTech" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                </ul>
                                </div>
                                </div>
                            <div class="follow-up col-lg-8 mt-lg-0 mt-4">
                                <ul class="d-flex justify-content-center px-0">
                                    <li class="px-1"><a href="https://clutch.co/profile/emizen-tech" target="_blank" rel="nofollow"><img src="https://emizentech.com/wp-content/uploads/2026/03/clutch.svg" alt="clutch" width="66" height="19"> <i class="fa fa-star"></i> 4.9<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.goodfirms.co/company/emizen-tech-pvt-ltd" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/goodfirms.png" alt="goodfirms" width="100" height="16"> <i class="fa fa-star"></i> 5.0<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.designrush.com/agency/profile/emizen-tech" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/designrush.png" alt="designrush" width="108" height="26"> <i class="fa fa-star"></i> 4.9<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.businessofapps.com/app-developers/emizen-tech/" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/boa-new.png" alt="Business-of-app" width="87" height="26"> <i class="fa fa-star"></i> 5.0<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.softwareworld.co/service/emizentech-reviews/" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/nav_logo.png" alt="nav_logo" width="124" height="20"> <i class="fa fa-star"></i> 5.0<br>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                      </div>
              
               
            </section>

 

<div class="modal fade hiring-modal-popup" id="pricingModal" tabindex="-1" role="dialog" aria-labelledby="pricingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                <div class="contact-form modal-from">
                    <div class="row">
                        <div class="col-md-6 text-left d-md-flex d-none">
                        <div class="form-left-box w-100">
                              <h3 class="form-title text-white text-left">Wait! Don’t Let Your Competitors Outpace You</h3>
                         <ul class="px-0 text-white">
                            <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons3.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2">Rapid Response Guarantee: Connect with an on-demand mobile solutions architect within 2 hours during the business day.</li>
                            <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons1.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2"> Specialized Talent, Better Rates: Access 150+ mobile experts experienced in real-time tracking, dispatch systems, and geolocation APIs at ~40% less than US agency fees.</li>
                            <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons2.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2"> Zero-Risk Discovery: Get a fully NDA-protected technical consultation to map out the architecture for your user, provider, and admin apps with no obligations.</li>                    
                        </ul>
                        <ul class="px-0 d-flex flex-wrap badge-logo">
                            <li><img src="https://emizentech.com/wp-content/uploads/2026/03/goodfirmslogo.svg" width="178" height="174" alt="badge"></li>
                            <li><img src="https://emizentech.com/wp-content/uploads/2026/03/awslogo.svg" width="178" height="174" alt="badge"></li>
                            <li><img src="https://emizentech.com/wp-content/uploads/2026/03/badge_clutchapp.svg" width="178" height="174" alt="badge"></li>
                            <li><img src="https://emizentech.com/wp-content/uploads/2026/03/top-app-develpmentcluthch.svg" width="178" height="174" alt="badge"></li>
                        </ul>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-right">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
                <div class="consulting-fgorm">
                    <h3 class="form-tiitle">Get Your Free On-Demand App Blueprint & Quote</h3>
                        <?php echo do_shortcode('[elementor-template id="37178"]'); ?>
               
                <div class="trusted-txt text-center">Trusted By 1200+ Global Brands Including:</div>
                <ul class="d-flex trusted-logos align-items-center px-0">
                    <li class="logos3">
                        <img src="https://emizentech.com/wp-content/uploads/2026/03/listalogos.svg" width="222" height="63" alt="lista">
                    </li>
                    <li class="logos3">
                        <img src="https://emizentech.com/wp-content/uploads/2026/03/bidlytss.svg" width="222" height="63" alt="bidlyt">
                    </li>
                    <li class="logos3">
                        <img src="https://emizentech.com/wp-content/uploads/2026/03/Rove_logo-1-1.svg" width="222" height="63" alt="rove">
                    </li>
                    </ul>
                </div>
                 </div> </div>
                            
                        </div>
                    </div>
                    </div>
                
            </div>
           
     </div>
 </div>
</div>
</div>
</section>



</main>

         
        
<div class="watsappic">
  <a href="https://wa.me/19895359295" target="_blank" id="whatsapp-link" rel="nofollow">
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="30" cy="30" r="30" fill="#54C45F"/>
    <path d="M42.3379 17.5926C40.7335 15.972 38.8225 14.687 36.7163 13.8127C34.6101 12.9384 32.3508 12.4922 30.0704 12.5001C20.5154 12.5001 12.7279 20.2876 12.7279 29.8426C12.7279 32.9051 13.5329 35.8801 15.0379 38.5051L12.5879 47.5001L21.7754 45.0851C24.3129 46.4676 27.1654 47.2026 30.0704 47.2026C39.6254 47.2026 47.4129 39.4151 47.4129 29.8601C47.4129 25.2226 45.6104 20.8651 42.3379 17.5926ZM30.0704 44.2626C27.4804 44.2626 24.9429 43.5626 22.7204 42.2501L22.1954 41.9351L16.7354 43.3701L18.1879 38.0501L17.8379 37.5076C16.3989 35.2098 15.6349 32.5538 15.6329 29.8426C15.6329 21.8976 22.1079 15.4226 30.0529 15.4226C33.9029 15.4226 37.5254 16.9276 40.2379 19.6576C41.581 20.9945 42.6454 22.5848 43.3693 24.3361C44.0933 26.0874 44.4624 27.965 44.4554 29.8601C44.4904 37.8051 38.0154 44.2626 30.0704 44.2626ZM37.9804 33.4826C37.5429 33.2726 35.4079 32.2226 35.0229 32.0651C34.6204 31.9251 34.3404 31.8551 34.0429 32.2751C33.7454 32.7126 32.9229 33.6926 32.6779 33.9726C32.4329 34.2701 32.1704 34.3051 31.7329 34.0776C31.2954 33.8676 29.8954 33.3951 28.2504 31.9251C26.9554 30.7701 26.0979 29.3526 25.8354 28.9151C25.5904 28.4776 25.8004 28.2501 26.0279 28.0226C26.2204 27.8301 26.4654 27.5151 26.6754 27.2701C26.8854 27.0251 26.9729 26.8326 27.1129 26.5526C27.2529 26.2551 27.1829 26.0101 27.0779 25.8001C26.9729 25.5901 26.0979 23.4551 25.7479 22.5801C25.3979 21.7401 25.0304 21.8451 24.7679 21.8276H23.9279C23.6304 21.8276 23.1754 21.9326 22.7729 22.3701C22.3879 22.8076 21.2679 23.8576 21.2679 25.9926C21.2679 28.1276 22.8254 30.1926 23.0354 30.4726C23.2454 30.7701 26.0979 35.1451 30.4379 37.0176C31.4704 37.4726 32.2754 37.7351 32.9054 37.9276C33.9379 38.2601 34.8829 38.2076 35.6354 38.1026C36.4754 37.9801 38.2079 37.0526 38.5579 36.0376C38.9254 35.0226 38.9254 34.1651 38.8029 33.9726C38.6804 33.7801 38.4179 33.6926 37.9804 33.4826Z" fill="white"/>
    </svg>
      </a>
</div>
<script src="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/js/aos.js"></script>
<script>
    AOS.init();
</script>   
      <script>
      const previewImg = document.getElementById('projectPreview');

      document.querySelectorAll('.project-card').forEach(card => {
          card.addEventListener('mouseenter', () => {
              const newImg = card.dataset.image;
              if (!newImg) return;

              previewImg.style.opacity = 0;
              setTimeout(() => {
                  previewImg.src = newImg;
                  previewImg.style.opacity = 1;
              }, 120);
          });
      });
      </script>


      <script>
    $(document).ready(function(){

      if ($(window).width() > 0) {

        $('.collap-card').hide(); // hide all
        $('#homefaq .faq_card:eq(1) .collap-card').show(); // open second FAQ by default

        $('#homefaq .faq_card').mouseenter(function(){

          var $content = $(this).find('.collap-card');

          if(!$content.is(':visible')){
            $('.collap-card').stop(true,true).slideUp(200);
            $content.stop(true,true).slideDown(200);
          }

        });

      }

    });
</script>
<script>$(document).ready(function () {

    // open second FAQ by default
    $('#homefaq .faq_card').removeClass('active');
    $('#homefaq .faq_card:eq(1)').addClass('active');

    $('#homefaq .faq_card').hover(function () {

        if (!$(this).hasClass('active')) {
            $('#homefaq .faq_card').removeClass('active');
            $(this).addClass('active');
        }

    });

});</script>


<script>

jQuery(document).ready(function ($) {

    const $pillars = $('.pillar-item');

    // If mobile → show all and stop
    if ($(window).width() <= 767) {
        $pillars.addClass('show'); // make all visible
        return;
    }

    // Desktop → run observer
    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry, index) => {

            if (entry.isIntersecting) {

                setTimeout(() => {
                    $(entry.target).addClass('show');
                }, index * 250);

            } else {

                $(entry.target).removeClass('show');

            }

        });

    }, { threshold: 0.4 });

    $pillars.each(function () {
        observer.observe(this);
    });

});

</script>

 
<script>

$(document).ready(function(){

    const steps = document.querySelectorAll('.step');
    const layers = $('.slide-layer');
    const track = $('#mainTrack');

    const observer = new IntersectionObserver(function(entries){

        entries.forEach(function(entry){

            if(entry.isIntersecting){

                let targetId = $(entry.target).data('target');
                let bgGradient = $(entry.target).data('gradient');

                // Change Background Gradient
                track.css('background', bgGradient);

                // Change Active Layer
                layers.removeClass('active');
                $('#' + targetId).addClass('active');

            }

        });

    },{
        threshold:0.5
    });

    steps.forEach(function(step){
        observer.observe(step);
    });

});
</script>
        <?php wp_footer(); ?>

    </body>
</html>
