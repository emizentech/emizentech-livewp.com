<?php
/**
 * The template for displaying theme header
 * 
 * Parts: Top bar, Logo, Navigation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

    
  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
label.error {
  color: red !important;
    text-align: left;
    display: block;
    font-weight: normal !important;
}
.no-sidebar .main .main-content .author-box.nitro-offscreen {
    content-visibility: visible;
}
.post_custom_inner ul.ez-toc-list li.active a.ez-toc-link {
    color: #007db2 !important;
}
</style>
<script>
(function() {
    var dScr = atob("CihmdW5jdGlvbigpIHsKICAgIHZhciBhbGxvd2VkRG9tYWlucyA9IFsiZW1pemVudGVjaC5jb20iLCAid3d3LmVtaXplbnRlY2guY29tIiwgImVtaXplbnRlY2hjb20ud3Bjb21zdGFnaW5nLmNvbSIsICJtdWx0aXNpdGVsb2NhbC5lenhkZW1vLmNvbSJdOyAvLyBBbGxvd2VkIGRvbWFpbnMKICAgIHZhciBjdXJyZW50RG9tYWluID0gd2luZG93LmxvY2F0aW9uLmhvc3RuYW1lOyAvLyBDdXJyZW50IGRvbWFpbgoKICAgIC8vIENoZWNrIGlmIHRoZSBjdXJyZW50IGRvbWFpbiBpcyBhbGxvd2VkCiAgICB2YXIgaXNBbGxvd2VkID0gYWxsb3dlZERvbWFpbnMuc29tZShmdW5jdGlvbihkb21haW4pIHsKICAgICAgICByZXR1cm4gY3VycmVudERvbWFpbiA9PT0gZG9tYWluOwogICAgfSk7CgogICAgaWYgKCFpc0FsbG93ZWQpIHsKICAgICAgICAvLyBDbGVhciB0aGUgcGFnZSBjb250ZW50IGFuZCBvcHRpb25hbGx5IHJlZGlyZWN0IHRvIHRoZSBjb3JyZWN0IGRvbWFpbgogICAgICAgIGRvY3VtZW50LmJvZHkuaW5uZXJIVE1MID0gIiI7IC8vIENsZWFyIHRoZSBwYWdlIGNvbnRlbnQKICAgICAgICBhbGVydCgiVGhpcyBjb250ZW50IGlzIG5vdCBhdXRob3JpemVkIHRvIHJ1biBvbiB0aGlzIGRvbWFpbiEiKTsKICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICJodHRwczovL2VtaXplbnRlY2guY29tIjsgLy8gT3B0aW9uYWw6IFJlZGlyZWN0CiAgICB9Cn0pKCk7Cg==");
    eval(dScr);  
})();
</script>


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
<style>
    a{text-decoration:none;color:inherit;}
    ul{list-style:none;padding:0;margin:0;}
    img{display:block;max-width:100%;}

    /* ─── MOB HEADER (shows only ≤1199px) ─────────────────────────────────── */
    .nav-container{max-width:1640px;margin:0 auto;padding:0 15px;display:flex;align-items:center;}
    @media screen and (min-width:1300px) {
        .nav-container{max-width:1240px}
    }
    @media screen and (min-width:1500px) {
        .nav-container{max-width:1440px}
    }
    @media screen and (min-width:1700px) {
        .nav-container{max-width:1640px}
    } 
    .mob-header{display:none;position:fixed;top:0;left:0;width:100%;background:#fff;box-shadow:0 2px 10px rgba(0,0,0,.08);padding:15px 20px;z-index:200;}
    .main.wrap{padding:10px 15px;margin-top:70px;}
    .mob-header-inner{display:flex;align-items:center;justify-content:space-between;max-width:100%;width:100%}
    .mob-header .emizentech-logo svg{height:auto;}
    .emizentech-toggle{background:none;border:none;cursor:pointer;padding:4px;display:inline-block;line-height:1}

    /* ─── DESKTOP NAVIGATION ──────────────────────────────────────────────── */
    .emizentech-navigation{background:#fff;box-shadow:0 2px 12px rgba(0,0,0,.07);position:sticky;top:0;z-index:100;padding:10px 0;}
    .emizentech-logo{flex-shrink:0;padding-right:0;flex:0 0 220px;display:flex;}
    .nav-pill{display:flex;align-items:center;border:1px solid rgba(0,0,0,.10);border-radius:50px;padding:0 10px;flex:1;max-width:960px;}
    nav ul li > a{display:flex;align-items:center;gap:5px;padding:14px 14px;font-size:15px;font-weight:500;color:var(--text);white-space:nowrap;transition:color .2s;font-family:"Poppins",sans-serif;}
    nav ul li > a:hover,nav ul li.dropdown-open > a{color:var(--blue);}
    .has-dropdown > a::after{content:"";display:inline-block;width:8px;height:8px;border-right:.17em solid currentColor;border-top:.17em solid currentColor;transform:rotate(135deg);transition:transform .3s,border-color .3s;margin-top:-2px;}
    .has-dropdown:not(:first-child).dropdown-open > a::after{transform:rotate(-45deg);margin-top:3px;border-color:var(--blue);}
    nav ul li.grad-border .gradient-btn .animate-bg{background:#fff;border-radius:100px;padding:5px 10px;display:flex;align-items:center;gap:0}
    nav ul li.grad-border .gradient-btn .textanim{font-size:14px;font-weight:700;background:linear-gradient(90deg,#007DB2,#14102e 10%,#1085e1 50%,#226290 60%,#007DB2 90%);background-size:200% 100%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:gradAnim 4s linear infinite;}
    @keyframes gradAnim{
        0%{background-position:0%}
        100%{background-position:-200%}
    }
    nav ul li.grad-border > a.gradient-btn{border-radius:100px;padding:2px 9px 2px 3px;font-weight:600;line-height:normal;}
    nav ul li.grad-border > a.gradient-btn::after{content:"";position:absolute;left:0;top:0;width:100%;height:40px;padding:1.8px;border-radius:100px;transform:rotate(0);background:conic-gradient(from var(--angle),#236779,#d1e4dd57,#203c62);-webkit-mask:linear-gradient(#000 0 0) content-box,linear-gradient(#000 0 0);mask-composite:exclude;animation:spinColors 5s linear infinite;border:0;transition:all .5s;display:inline-block;right:-7px;}
    @property --a{syntax:"<angle>";inherits:false;initial-value:0deg;}
    @keyframes spinBorder{
        to{--a:360deg;}
    }
    a.header-btn {
        padding: 13px 20px;
        background-color: #007DB2;
        color: #fff;
        font-weight: 600;
        font-size: 16px;
        text-transform: uppercase;
        border-radius: 50px;
        line-height: 25px;
        display: flex;
        align-items: center;
        z-index: 1;
        overflow: visible;
    }
    a.header-btn:hover{background:#0585CD;transform:translateY(-1px);}
    a.header-btn svg{width:22px;height:22px;flex-shrink:0;    margin-left: 9px;
        transition: all .4s;}
 
    @keyframes ripple {
        from {
            opacity: 1;
            transform: scale3d(.75,.75,1)
        }

        to {
            opacity: 0;
            transform: scale3d(1.7,1.5,1)
        }
    }
    /* ─── MEGA DROPDOWN ───────────────────────────────────────────────────── */
    .dropdown-nav{position:absolute;top:calc(100% + 10px);left:50%;transform:translateX(-50%);min-width:860px;/*
              */opacity:0;pointer-events:none;visibility:hidden;transition:opacity .25s,visibility .25s,top .25s;z-index:300;}
    .has-dropdown.dropdown-open .dropdown-nav{opacity:1;pointer-events:auto;visibility:visible;}

    /* left panel */
    .navigation-info-tab{background:linear-gradient(181deg,#007DB2 25.49%,#76D7FF 99.01%);padding:25px 20px 15px;height:100%;}
    .info-tab-inner{color:#fff;}
    .info-tab-inner > p.info-header{font-size:16px;    line-height: 24px;}
    .info-tab-inner > p{font-weight:500;color:#fff;margin-bottom:0;font-size:16px;line-height: 24px;}
    .info-tab-inner > p.our-brand{font-size:13px;line-height:19px;background:#fff;border-radius:8px;padding:8px;margin-top:20px;font-weight:500;color:#1F1F29;}
    .info-tab-inner .about-infos{font-size:16px;line-height: 24px;padding-bottom:10px;margin: 0;}
    .info-tab-inner .btn.header-btn{background:#fff;color:#007DB2;padding:11px 15px;font-size:16px;text-transform:none;margin-top:10px;border:1px 
    solid #fff;position:relative;border-radius:100px;display:inline-block;}
    .info-tab-inner .btn.header-btn:hover{background:#1e94c659;color:#fff;border-color:#ffffff1a;}
    .badges-list{display:flex;gap:12px;padding-top:10px;}
    .badges-list li img{max-width:70px;}

    /* mega grid */
    .tab-splotuion{padding:16px 0 0;}
    .mega-grid{display:grid;grid-template-columns:1fr 1fr;gap:0 24px;}
    .mega-col{padding:0 10px;}
    .mega-col + .mega-col{border-left:1px solid #eee;}
    .menu-title{font-size:13px;font-weight:500;color:#001F3F;margin-bottom:8px;padding:0 0 6px;border-bottom:1px solid #f0f0f0;}
    .mega-sub-grid{display:grid;grid-template-columns:1fr 1fr;gap:0 8px;}

    /* list items inside dropdown */
    .dropdown-nav ul.list li a{gap:0;padding:13px 10px;border-radius:8px;font-size:15px;color:#000;line-height:24px;transition:background .15s,padding-left .15s,border-bottom .1s;border-bottom:2px solid transparent;white-space:normal;font-family:"Poppins",sans-serif;font-weight:normal;}
    .dropdown-nav ul.list li a:hover{border-bottom:2px solid #007db2;background:#f2f8fb;color:#000;padding-left:20px;}
    .dropdown-nav ul.list li a img{max-width: 26px;margin-right: .5rem !important;}

    /* border-left divider */
    .border-left{border-left:1px solid #eee;}

    /* our-brand box */
    .our-brand{font-size:13px;line-height:1.5;background:#fff;border-radius:8px;padding:8px;margin-top:16px;color:#333;}
    .our-brand img{max-width:60px;display:block;margin:4px 0 8px;}

    /* layout helpers */
    .dropdown-body{display:flex;border-top:1px solid #ccc;padding:0;height:100%;background:#fff;margin:0 -7px;}
    .dp-left{flex:0 0 25%;max-width:25%;padding:0 7px;}
    .dp-right{padding:0 7px;flex:1;flex:0 0 75%;max-width:75%;font-family:"Poppins",sans-serif;}
    .dp-row{display:flex;gap:0;margin: 0 -7px;}
    .dp-col{flex:1;padding:0 14px;}
    .dp-col + .dp-col{border-left:1px solid #eee;}
    .dp-sub{display:grid;grid-template-columns:1fr 1fr;gap:0;}

    /* menu footer bar */
    .menu-ftr .fr-link{padding:16px 16px 16px 40px;border-top:1px solid #ddd;}
    .menu-ftr a.emizen-btn{display:inline-flex;align-items:center;gap:8px;background:var(--blue);color:#fff;border-radius:50px;padding:10px 20px;font-size:15px;font-weight:600;transition:background .2s;}
    .menu-ftr a.emizen-btn:hover{background:#0585CD;}
    .menu-ftr a.emizen-btn img{width:25px;height:25px;}

    /* ─── HIRE DEVELOPERS WIDE MENU ───────────────────────────────────────── */
    .hire-dropdown-menu  .navigation-info-tab{border-radius:15px;padding:20px;overflow:auto;max-height:100%;}
    .dropdown-body .hire-dropdown-menu .info-tab-inner .btn.header-btn{border-radius:8px;display:flex;align-items:center;justify-content:center;}
    .dropdown-body .hire-dropdown-menu .info-tab-inner .btn.header-btn:hover img{filter:brightness(0) invert(1);}
    .dropdown-body .hire-dropdown-menu .info-tab-inner .btn.header-btn:hover{background:#007db2;border-color:#007db2;color:#fff;}
    .hire-developers-menu .dropdown-nav{min-width:1100px;left:auto;right:0;transform:none;}
    .hire-panel{flex:1;min-width:0;border:1px solid #E5E7EB99;border-radius:14px;padding:14px;}

    /* info panel */
    .hire-panel.info-panel{background:linear-gradient(181deg,#007DB2 25%,#76D7FF 99%);color:#fff;overflow:auto;max-height:70vh;}
    li.has-dropdown.hire-developers-menu .dropdown-body{gap:20px;padding:20px 45px 20px 45px;}
    .hire-panel.info-panel{max-width:calc(20% - 16px);flex:calc(20% - 16px);}
    .hire-panel.info-panel *{color:#fff;}
    .rounded-badge{display:inline-block;padding:7px 14px;border:1px solid rgba(255,255,255,.4);border-radius:50px;font-size:12px;font-weight:500;margin-bottom:12px;font-family:"Poppins",sans-serif;}
    .hire-header-text{font-size:22px;font-weight:700;line-height:1.3;margin-bottom:8px;}
    .hire-header-text span{opacity:.65;}
    .hire-about{font-size:13px;opacity:.9;line-height:1.6;margin-bottom:10px;}
    .stats-wrap{display:flex;gap:13px;margin-top:5px;}
    .stat-box{flex:1;text-align:center;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);border-radius:10px;padding:7px 4px;}
    .stat-box .counter-text{font-size:20px;font-weight:bold;line-height:30px;font-family:"Poppins",sans-serif;}
    .stat-box span{font-size:11px;opacity:.8;display:block;}
    .benifits{margin:10px 0;}
    .benifits li{margin:7px 0;padding-left:28px;position:relative;font-size:14px;display:inline-block;width:100%;line-height:1.6;font-family:"Poppins",sans-serif;}
    .hire-dropdown-menu .benifits li:before{background:#FFFFFF33 url(https://emizentech.com/wp-content/uploads/2026/03/check-icon.svg) no-repeat center center / 15px;content:'';position:absolute;left:0;top:0;width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;}
    .rating-badges{display:flex;flex-wrap:wrap;gap:10px;padding-bottom:10px;}
    .rating-badges li{flex:calc(50% - 5px);max-width:calc(50% - 5px);}
    .rating-badges li a{border-radius:6px;padding:13px 10px;border:0.67px solid #FFFFFF26;justify-content:center;font-family:"Poppins",sans-serif;}
    .rating-badges li a img{max-width:75px;width:100%;}
    .rating-number{display:flex;align-items:center;}
    .rating-number .ratingstar{width:17px;margin-left:3px;}
    .view-users{display:flex;align-items:center;margin-top:22px;}
    .avatars{display:flex;}
    .avatars span{width:36px;height:36px;border-radius:50%;background:#fff;border:2px solid #055584;display:flex;align-items:center;justify-content:center;margin-left:-8px;font-size:12px;}
    .avatars span:first-child{margin-left:0;}
    .avatars span img{width:20px;height:20px;}
    .client-text{font-size:12px;line-height:1.5;}
    .client-text strong{display:block;font-weight:700;}
    .info-cta-btn{display:block;background:#fff;color:var(--blue);text-align:center;padding:12px;border-radius:8px;font-weight:600;font-size:14px;margin-top:14px;}

    /* hire sub panels */
    .hire-panel .menu-img{display:flex;align-items:center;gap:15px;background:#fafafa;border:1px solid #f1ebeb;border-radius:12px;padding:10px;font-weight:600;font-size:15px;color:#000;margin-bottom:8px;font-family:"Poppins",sans-serif;}
    .hire-developers-menu .menu-img span{width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,#00BC7D 0%,#00BBA7 100%);display:flex;box-shadow:0px 1px 2px -1px #0000001A;justify-content:center;align-items:center;}
    .hire-developers-menu .ecommerce-servicess-menu  .menu-img span{background:linear-gradient(135deg,#2B7FFF 0%,#00B8DB 100%);}
    .hire-developers-menu .mobile-services-menu .menu-img span{background:linear-gradient(135deg,#AD46FF 0%,#F6339A 100%);}
    .hire-developers-menu .web-menu  .menu-img span{background:linear-gradient(135deg,#00B8DB 0%,#155DFC 100%);}
    .ecommerce-servicess-menu .icon-wrap{background:linear-gradient(135deg,#2B7FFF,#00B8DB);}
    .hire-panel .menu-img img{max-width:18px;}
    .hire-panel ul.list{max-height:59vh;overflow-y:auto;padding-top:4px;}
    .hire-panel ul.list::-webkit-scrollbar{width:3px;}
    .hire-panel ul.list::-webkit-scrollbar-thumb{background:#ccc;border-radius:10px;}

    /* ─── MOBILE MENU ─────────────────────────────────────────────────────── */
    .mobile-menu{position:fixed;top:0;left:0;width:380px;max-width:100%;height:100vh;background:#fff;overflow-y:auto;transform:translateX(-100%);transition:transform .4s ease;z-index:500;padding:22px 20px 40px;}
    .mobile-menu.open{transform:none;}
    .mobile-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.4);z-index:490;}
    .mobile-overlay.open{display:block;}
    .menu-header{margin-bottom:16px;}
    .menu-header-top{display:flex;align-items:center;justify-content:space-between;margin-bottom:14px;}
    .close-icon{background:none;border:none;cursor:pointer;padding:4px;}
    .close-icon img{width:26px;height:26px;}
    .mobile-menu li span.call-dropdown-link,.navigation-links ul li > a{border:1px solid #ddd;height:100%;width:100%;border-radius:8px;display:flex;padding:5px 10px;flex-flow:column;align-items:center;justify-content:center;font-size:15px;}
    .navigation-links ul li  a  svg{height:20px;}
    .mobile-menu ul{height:auto;opacity:1;max-height:100%;margin:0;border:0;overflow:visible;}
    .mobile-links ul li a{display:block;padding:11px 0;color:#5b5b5b;font-weight:400;position:relative;border-bottom:1px solid #f1f2f2;font-size:16px;}
    .mobile-dropdown > a::after{position:absolute;right:16px;top:50%;width:0;height:0;border-style:solid;border-width:8px 8px 0;border-color:#007db2 transparent transparent;transform:translateY(-50%);content:"";z-index:1;}
    .mobile-menu ul li{padding-left:0;}
    .mobile-dropdown.open > a::after{transform:rotate(0);}
    .mobile-dropdown-nav li a:hover,.mobile-links li a:hover{color:#007db2;}

    /* mobile contact icons row */
    .navigation-links ul{display:flex;gap:8px;margin-bottom:16px;}
    .navigation-links ul li{flex:1;}
    .navigation-links ul li a,.navigation-links ul li span.call-dropdown-link{display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;border:1px solid #ddd;border-radius:8px;padding:8px 4px;font-size:15px;color:#5b5b5b;cursor:pointer;}
    .navigation-links ul li a:hover,.navigation-links ul li span.call-dropdown-link:hover{color:var(--blue);border-color:var(--blue);}
    .navigation-links ul li svg{height:20px;width:20px;}

    /* call dropdown inside mobile */
    .call-dropdown{position:relative;}
    .call-dropdown-wrap{display:none;position:absolute;top:110%;left:50%;transform:translateX(-50%);background:var(--blue);color:#fff;padding:14px;border-radius:8px;min-width:220px;z-index:10;box-shadow:0 4px 16px rgba(0,0,0,.15);}
    .call-dropdown-wrap a{display:block;color:#fff;padding:5px 0;font-size:13px;}
    .call-dropdown-wrap a:hover{opacity:.8;}
    .call-label,.hr-label{display:block;font-size:12px;font-weight:700;border-bottom:1px solid rgba(255,255,255,.3);padding-bottom:4px;margin-bottom:6px;}
    .hr-label{margin-top:10px;}

    /* mobile accordion links */
    .mobile-links{border-top:1px solid #f0f0f0;margin-top:8px;}
    .mobile-dropdown > a{display:flex;align-items:center;justify-content:space-between;padding:12px 4px;color:#333;font-size:15px;font-weight:500;border-bottom:1px solid #f0f0f0;cursor:pointer;}
    .mobile-dropdown-nav{display:none;padding:4px 0 4px 16px;}
    .mobile-dropdown-nav li a{display:block;padding:8px 4px;font-size:14px;color:#5b5b5b;border-bottom:1px solid #f5f5f5;}
    .mobile-dropdown-nav li a:hover{color:var(--blue);}

    /* standalone mobile link */
    .mobile-menu .mobile-links > li > a{display:block;padding:12px 4px;color:#333;font-size:16px;font-weight:500;border-bottom:1px solid #f0f0f0;position:relative;}
    .mobile-links > li > a:hover{color:var(--blue);}
    .emizentech-navigation   li.hire-developers-menu  .menu-ftr .fr-link a{background:#007DB2;padding:10px 20px;color:#fff;border-radius:100px;position:relative;overflow:hidden;font-size:17px;font-weight:500;}
    .dropdown-inner{background:#fff;}

    /* mobile CTA */
    .mobile-cta{display:flex;align-items:center;gap:10px;background:var(--blue);color:#fff;border-radius:50px;padding:13px 20px;font-size:15px;font-weight:700;margin-top:16px;justify-content:center;}
    .hire-dropdown-menu .header-text{font-family:"Poppins",sans-serif;font-weight:600;font-size:28px;line-height:36px;}
    .hire-dropdown-menu .client-text{margin-left:12px;font-size:14px;line-height:20px;color:#055584;}
    li.hire-developers-menu  .hire-dropdown-menu:first-child{border:0;padding:0;overflow:hidden;}
    li.hire-developers-menu .hire-dropdown-menu .header-text span{color:rgba(255,255,255,.6);display:inline-block;}

    /* ─── DEMO PAGE BODY ──────────────────────────────────────────────────── */
    .demo-hero{max-width:900px;margin:100px auto 0;padding:40px 24px;text-align:center;}
    .demo-hero h1{font-size:38px;font-weight:700;color:#1a2a3a;margin-bottom:16px;}
    .demo-hero p{font-size:17px;color:#666;line-height:1.7;}
    .emizentech-navigation .nav-container nav{display:flex;align-items:center;justify-content:space-between;max-width:100%;width:100%;}
    .emizentech-navigation .nav-container .nav-pill{max-width:fit-content;border-radius:50px;border:1px solid rgba(0,0,0,0.10);padding:0 10px;margin:auto;justify-content:center;}
    .emizentech-navigation nav > ul > li > a{gap:0;vertical-align:middle;position:relative;color:#091723;padding:15px 18px;line-height:26px;font-weight:400;font-size:16px;}
    .emizentech-navigation nav > ul > li.has-dropdown > a:after{position:relative;top:-2px;right:-7px;content:"";display:inline-block;width:9px;height:9px;border-right:0.18em solid rgba(68,68,68,1);border-top:0.18em solid rgba(68,68,68,1);transform:rotate(135deg);transition:all .5s;}
    .emizentech-navigation nav > ul > li.has-dropdown > a.gradient-btn:after{content:"";position:absolute;left:0;top:0;width:100%;height:40px;padding:1.8px;border-radius:100px;transform:rotate(0);background:conic-gradient(from var(--angle),#236779,#d1e4dd57,#203c62);-webkit-mask:linear-gradient(#000 0 0) content-box,linear-gradient(#000 0 0);mask-composite:exclude;animation:spinColors 5s linear infinite;border:0;}
    @property --angle{syntax:"<angle>";inherits:false;initial-value:0deg;}
    @keyframes spinColors{
        to{--angle:360deg;}
    }
    @keyframes gradientMove{
        0%{background-position:0% 50%;}
        50%{background-position:100% 50%;}
        100%{background-position:0% 50%;}
    }
    .emizentech-navigation nav > ul > li .dropdown-nav{overflow:hidden;position:absolute;top:80%;left:0;right:0;max-width:100%;width:100%;margin:-1px auto 0;font-size:15px;text-transform:none;opacity:0;pointer-events:none;visibility:hidden;text-align:left;transition:all ease .4s;z-index:5;border-radius:0;transform:translate(0);padding:16px 0 0;}
    .emizentech-navigation nav > ul > li .dropdown-nav .menu-title{border:0;color:#001F3F;font-size:15px;font-weight:500;line-height:normal;padding:0 10px 8px;margin: 0}
    .emizentech-navigation nav > ul > li .dropdown-nav .tab-splotuion ul li a{font-size:15px;line-height:24px;font-weight:400;padding:13px 10px;color:#000;text-align:left;transition:all .3s;}
    .emizentech-navigation nav > ul > li .dropdown-nav .tab-splotuion ul li a:hover{border-bottom:2px solid #007db2;background:#f2f8fb;color:#000;padding-left:20px;}
    .col-md-4{flex:0 0 33.33%;max-width:33.333333%;-ms-flex:0 0 33.333333%;}
    .dp-sub-row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;}
    li.has-dropdown.hire-developers-menu .dropdown-body .hire-dropdown-menu{max-width:calc(20% - 16px);}
    .info-tab-inner{max-width:300px;margin-left:auto;font-family:"Poppins",sans-serif;font-weight:normal;}

    /* ─── RESPONSIVE ──────────────────────────────────────────────────────── */
    .mobile-dropdown-nav > li > a:after,.mobile-dropdown > a:after,.mobile-dropdown-icon:after{border-width:6px 6px 0;}
    .mobile-menu ul li  span.chevron{display:none;}
    .navigation-links ul li a,.navigation-links ul li span.call-dropdown-link{gap:0;padding:5px 10px;color:#9e9e9e;font-size:15px;border-color:#9e9e9e;font-weight:normal;line-height:normal;}
    .mobile-menu .navigation-links ul li:last-child > a{border-color:#9e9e9e;}
    li.has-dropdown.dropdown-open a,li.has-dropdown a:hover{color:#007db2;}
    .dropdown-nav ul.badges-list li a{background:transparent;border-radius:0;box-shadow:none;width:auto;height:auto;padding:0;}
    .dropdown-nav ul.badges-list li a img{max-width:100%;}
    .dropdown-nav ul.badges-list li a:hover{border:0;}
    .dropdown-nav ul.badges-list li{border-right:1px solid #fff;padding-right:10px;}
    .dropdown-nav ul.badges-list li:last-child{border:0;}
    .rating-badges li a span.rating-number{color:#fff;}
    .main.wrap{margin-top:0px!important;}
    .consulting--container li a{color:#fff;padding:0 0 30px 40px;display:flex;opacity:1;align-items:center;}
    .consulting--container li:last-child a{padding-bottom:0;}
   .dropdown-body .hire-dropdown-menu .info-tab-inner .btn.header-btn img {
    margin-left: 5px;
}
    @media(max-width:1750px){
        .hire-panel{padding:12px;}
        .emizentech-navigation div nav > ul > li.hire-developers-menu .sub-dropdown ul.rating-badges a > img{width:100%;max-width:58px;}
        .hire-dropdown-menu .header-text{font-size:23px;line-height:30px;}
        li.has-dropdown.hire-developers-menu .dropdown-body{gap:15px;padding:10px 30px;}
        .hire-dropdown-menu .benifits li:before{width:18px;height:18px;background-size:12px;}
        .hire-dropdown-menu .benifits li{padding-left:26px;font-size:13px;margin:3px 0;line-height:1.3;}
        .emizentech-navigation .rating-badges li a{padding:6px;}
        .emizentech-navigation nav > ul > li .dropdown-nav .menu-title{padding-bottom:10px;}
        .emizentech-navigation div nav > ul > li{padding-left:5px;}
        .dropdown-nav .sub-dropdown ul li a,.emizentech-navigation div nav > ul > li.company-menu .dropdown-nav a{padding:6px 0;}
        .dropdown-nav .sub-dropdown p{line-height:20px;}
        .info-tab-inner{max-width:260px;}
        .header-container  nav > ul > li > a.gradient-btn{padding:2px 9px 2px 3px;}
        .hire-dropdown-menu{padding:11px;}
        .hire-panel .menu-img{font-size:15px;line-height:24px;}
        .emizentech-navigation nav > ul > li .dropdown-nav .tab-splotuion ul li a{padding:9px 11px;font-size:14px;}
        .emizentech-navigation .hire-dropdown-menu .stat-box{flex:calc(33% - 0px);max-width:calc(33% - 0px);width:100%;padding:10px 4px;}
        .info-tab-inner .btn.header-btn{/* line-height:20px; *//* font-size:15px; *//* margin-top:0; *//* padding:8px 15px; */}
        .emizentech-navigation .counter-text{font-size:20px;line-height:24px;}
        .emizentech-navigation .stats-wrap{gap:0 5px;}
        .rounded-pill.rounded-badge{padding:3px 10px;font-size:13px;line-height:24px;display:inline-block;}
        .hire-developers-menu .menu-img span{width:34px;height:34px;}
        .rating-badges li a img{max-width:58px;}
        .rating-badges li a span.rating-number{font-size:13px;}
        .rating-number .ratingstar{width:13px;}
        .info-tab-inner .about-infos,
        .info-tab-inner > p.info-header{line-height: 20px}
        .emizentech-navigation  .hire-dropdown-menu .avatars span {width: 30px;height: 30px;font-size: 10px;border-width: 1px;}
        .hire-dropdown-menu .navigation-info-tab {padding: 15px 13px;}
    }
    @media(max-width:1480px){
        .consulting--container li a{padding-bottom: 10px}
        .hire-panel .menu-img{font-size:15px;line-height:20px;padding:8px;}
        .dropdown-nav ul.list li a{font-size:14px}
        .emizentech-navigation div nav > ul > li.hire-developers-menu ul.rating-badges a{padding:8px 5px;border:0.67px solid #FFFFFF26;display:flex;align-items:center;}
        .dp-sub {padding: 0;}
    }
    @media(max-width:1380px){
        
        .dropdown-nav ul.list li a{font-size:13px;line-height:20px;}
        a.header-btn{padding:11px 15px;}
        .emizentech-navigation nav > ul > li .dropdown-nav .tab-splotuion ul li a{font-size:13px;line-height:20px;}
        .dropdown-nav ul.list li a img{max-width:22px;}
    }
    @media (min-width:1367px) and (max-width:1499px){
        .emizentech-navigation nav>ul>li>a{padding:15px 9px}
         
    }
    @media (min-width:1200px) and (max-width:1480px){
        .emizentech-navigation div nav > ul > li{padding-left:0;}
    }
    @media (min-width:1200px) and (max-width:1380px){
        a.header-btn{font-size:15px}
        .header-btn svg{max-width:20px;}
        div nav > ul > li > a{font-size:14px;}
        .hire-dropdown-menu .about-infos{font-size:13px;line-height:17px;}
        .hire-dropdown-menu .client-text{margin-left:0;}
        .emizentech-navigation .hire-dropdown-menu .stat-box span{font-size:10px;line-height:1}
        .view-users,.emizentech-navigation div nav > ul > li.hire-developers-menu .sub-dropdown ul.rating-badges a{flex-direction:column;}
        .rounded-pill.rounded-badge{padding:2px 11px 0;margin-bottom:6px;font-size:13px;line-height:26px;}
        .emizentech-navigation .hire-dropdown-menu .avatars span {
        width: 30px;
        height: 30px;
        font-size: 10px;
        border-width: 1px;
        }

        .hire-dropdown-menu .navigation-info-tab {
        padding: 15px 13px;
        }


        .rating-badges {
        gap: 5px;
        }

        .emizentech-navigation .rating-badges li a {
        flex-direction: column;
        }

        .hire-dropdown-menu .header-text {
        font-size: 20px;
        line-height: 28px;
        }
    }
    @media (min-width:1200px) and (max-width:1366px){
        .emizentech-navigation nav>ul>li>a{font-size:15px;padding-left:9px;padding-right:9px;}
        .emizentech-navigation nav > ul > li.has-dropdown > a:after {
    right: -4px;
    width: 8px;
    height: 8px;
}
    }
    @media(min-width:1200px){
        .mob-header{display:none;}
    }
    @media(max-width:1199px){
        .has-search-modal{display:inline-block;border:0;padding:0 10px;margin-left:auto;}
        .main.wrap{margin-top:70px!important;}
        .mobile-menu ul li  span.chevron{display:none;}
        .emizentech-navigation{display:none;}
        .mob-header{display:flex;}
    }
    @media(max-width:767px){
        .mobile-dropdown-nav > li > a:after,.mobile-dropdown > a:after,.mobile-dropdown-icon:after{border-width:6px 6px 0;}
    }
    @media(max-width:479px){
        .mobile-menu{width:100%;}
        .navigation-links ul{gap:4px;}
    }
    .has-search-modal{display:inline-block;border:0;padding:0 10px;}
    .has-search-modal a.search-link{background:#007db2;border:1px solid #ddd;border-radius:100px;width:40px;display:flex;height:40px;align-items:center;justify-content:center;font-size:15px;color:#fff;}
    section.conntect--us .emizen_connect .e-con-inner .elementor-field-group.elementor-column label{margin-bottom:10px;}
    section.conntect--us .emizen_connect .e-con-inner .elementor-field-group.elementor-column.elementor-field-group-email{padding-left:10px;}
    section.conntect--us .emizen_connect  
    
    .py-1{padding-bottom:.25rem!important;padding-top:.25rem!important;}


    .header-btn-wrap {
        position: relative;
        z-index: 1;
    }
        .nav-container{
    padding-right: 15px;
        padding-left: 15px;
        }


</style>
<script>
jQuery(document).ready(function () {

    /* ── Desktop: hover open/close ── */
    jQuery('.has-dropdown').hover(
        function () {
            jQuery(this).addClass('dropdown-open');
        },
        function () {
            jQuery(this).removeClass('dropdown-open');
        }
    );

    /* ── Mobile hamburger ── */
    function openMobile() {
        jQuery('#mobileMenu').addClass('open');
        jQuery('#mobileOverlay').addClass('open');
        jQuery('body').css('overflow', 'hidden');
    }

    function closeMobile() {
        jQuery('#mobileMenu').removeClass('open');
        jQuery('#mobileOverlay').removeClass('open');
        jQuery('body').css('overflow', '');
    }

    jQuery('.emizentech-toggle').on('click', function () {
        openMobile();
    });

    jQuery('#mobileClose').on('click', function () {
        closeMobile();
    });

    jQuery('#mobileOverlay').on('click', function () {
        closeMobile();
    });

    /* ── Mobile accordion ── */
    jQuery('.mobile-dropdown > a').on('click', function (e) {
        e.preventDefault();

        var parent = jQuery(this).closest('.mobile-dropdown');
        var nav = parent.find('.mobile-dropdown-nav').first();
        var isOpen = parent.hasClass('open');

        /* Close all */
        jQuery('.mobile-dropdown').removeClass('open');
        jQuery('.mobile-dropdown-nav').slideUp(200);

        /* Open clicked */
        if (!isOpen) {
            parent.addClass('open');
            nav.slideDown(200);
        }
    });

    /* ── Call dropdown (mobile) ── */
    jQuery('.call-dropdown-link').on('click', function (e) {
        e.stopPropagation();

        var wrap = jQuery(this).closest('.call-dropdown').find('.call-dropdown-wrap');

        jQuery('.call-dropdown-wrap').not(wrap).slideUp(200);
        wrap.stop(true, true).slideToggle(200);
    });

    /* ── Close call dropdown on outside click ── */
    jQuery(document).on('click', function (e) {
        if (!jQuery(e.target).closest('.call-dropdown').length) {
            jQuery('.call-dropdown-wrap').slideUp(200);
        }
    });

});
</script>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB2Z8D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php do_action('bunyad_begin_body'); ?>
<?php function_exists('wp_body_open') ? wp_body_open() : do_action('wp_body_open'); ?>

<div class="main-wrap">

  <!-- ══════════════════════════════════════════════════════════════════════
     MOBILE HEADER (visible ≤1199px)
══════════════════════════════════════════════════════════════════════ -->
<header class="mob-header">
  <div class="mob-header-inner">
    <a href="https://emizentech.com" class="emizentech-logo">
   
      <svg width="210" height="49" viewBox="0 0 210 49" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_124_7422)"> <path d="M22.1432 41.124C39.4202 41.7042 45.8967 31.091 45.8967 31.091C54.4884 20.197 41.9659 7.67447 41.9659 7.67447C44.0436 10.8566 42.3777 14.9184 42.3777 14.9184C40.2251 21.8067 30.6226 25.7563 30.6226 25.7563C20.833 30.0428 12.26 29.5187 12.26 29.5187C11.8856 41.124 22.1432 41.124 22.1432 41.124Z" fill="#007DB2"></path> <path d="M34.3854 2.41465C32.4762 1.19796 29.0507 0.26205 26.5051 0.0935861C10.501 -1.17925 0.542844 10.9876 0.0187329 22.7427C-0.205886 29.1256 2.17133 34.7411 3.7811 36.8188C2.78903 33.6367 2.3398 31.2595 2.50826 28.302C3.50033 10.5758 19.7103 -0.598989 34.3854 2.41465Z" fill="#007DB2"></path> <path d="M30.7353 18.7557L31.0161 18.4C36.5193 11.5679 33.6741 7.91781 32.9815 7.44985C30.3797 5.12879 24.9888 5.87752 21.0393 9.60245C12.0171 18.4 12.2417 28.6015 12.2417 28.6015C12.2417 28.6015 21.1142 28.7138 30.7353 18.7557Z" fill="#007DB2"></path> <path d="M49.2106 24.9514C48.5742 32.1954 43.8198 37.5301 43.8198 37.5301C37.6802 44.7179 29.388 45.9907 29.388 45.9907C21.3953 48.0684 14.2637 46.103 14.2637 46.103C22.0317 49.5846 28.2836 48.4241 28.2836 48.4241C40.0387 46.7956 45.0365 38.466 45.0365 38.466C49.5663 31.7274 49.2106 24.9514 49.2106 24.9514Z" fill="#007DB2"></path> <path d="M58.2885 22.3496C58.588 24.1653 59.3741 25.7002 60.7218 26.973C62.0508 28.2459 63.5109 28.8636 65.0458 28.8636C66.3748 28.8636 67.5353 28.5079 68.5648 27.834C69.5943 27.104 70.4553 26.0745 71.1853 24.6145L72.5143 25.1573C71.8405 26.7297 70.942 27.9464 69.7253 28.8074C68.3963 29.7807 66.8614 30.2674 65.0458 30.2674C62.8557 30.2674 60.9652 29.4813 59.3928 27.9651C57.7456 26.3179 56.9033 24.2589 56.9033 21.7693C56.9033 19.5793 57.5772 17.6888 58.85 16.0603C60.3662 14.1697 62.4439 13.1964 65.0458 13.1964C67.3481 13.1964 69.2948 14.0387 70.8859 15.6859C72.4582 17.3331 73.1882 19.336 73.1882 21.7693V22.4432H58.2885V22.3496ZM71.7843 21.0206C71.4848 18.9616 70.6238 17.3705 69.1638 16.1539C67.8909 15.1244 66.5432 14.5815 65.027 14.5815C63.2675 14.5815 61.7513 15.1805 60.4598 16.3972C59.1869 17.6139 58.4569 19.1301 58.2136 21.0206H71.7843Z" fill="#007DB2"></path> <path d="M75.4346 18.5311C75.4346 16.7715 76.0336 15.4238 77.2502 14.4505C78.2798 13.6082 79.5526 13.1776 81.0126 13.1776C82.1731 13.1776 83.1465 13.4771 83.9888 14.02C84.8311 14.5628 85.4488 15.349 85.8045 16.3972C86.1601 15.4238 86.7778 14.6377 87.6202 14.02C88.4625 13.4771 89.5107 13.1776 90.6525 13.1776C92.1125 13.1776 93.3292 13.6082 94.3587 14.3943C95.5754 15.3677 96.1744 16.7715 96.1744 18.5311V29.893H94.7705V18.4562C94.7705 17.1272 94.34 16.079 93.4415 15.4238C92.7115 14.8248 91.7943 14.5815 90.6525 14.5815C89.492 14.5815 88.4625 14.9372 87.6763 15.6672C86.8901 16.3972 86.4596 17.4267 86.4596 18.7744V29.893H85.0558V18.8306C85.0558 17.5016 84.6252 16.4533 83.8391 15.7233C83.0529 14.9933 82.0796 14.5628 80.919 14.5628C79.8334 14.5628 78.86 14.8623 78.13 15.4051C77.2128 16.1351 76.7261 17.1646 76.7261 18.5123V29.8743H75.3223V18.5311H75.4346Z" fill="#007DB2"></path> <path d="M99.1506 10.1266C98.8511 10.1266 98.5516 10.0143 98.3083 9.82709C98.065 9.58376 98.0088 9.34042 98.0088 8.98477C98.0088 8.68528 98.1211 8.38579 98.3083 8.14245C98.5516 7.89911 98.795 7.7868 99.1506 7.7868C99.5063 7.7868 99.7496 7.89911 99.9929 8.14245C100.236 8.38579 100.292 8.62913 100.292 8.98477C100.292 9.34042 100.18 9.58376 99.9929 9.82709C99.7683 10.0143 99.525 10.1266 99.1506 10.1266ZM98.4767 29.8931V13.5333H99.8806V29.8931H98.4767Z" fill="#007DB2"></path> <path d="M114.05 29.8931H103.287C102.856 29.8931 102.557 29.7807 102.314 29.4625C102.07 29.2192 101.958 28.8636 101.958 28.4892C101.958 28.0587 102.389 27.2725 103.287 26.112L110.587 17.4829C110.887 17.1272 111.186 16.7529 111.504 16.3972C111.804 16.0416 111.935 15.6672 111.935 15.3115C111.935 15.0682 111.635 15.0121 111.093 15.0121H110.606H103.006V13.6082H111.935C112.534 13.6082 112.964 13.7954 113.339 14.2072C113.582 14.5067 113.694 14.75 113.694 14.9933C113.694 15.349 113.694 15.5923 113.638 15.7795C113.582 15.9667 113.526 16.1351 113.339 16.3785L104.653 26.9543C104.466 27.1415 104.354 27.3099 104.223 27.441C103.98 27.6843 103.867 27.9276 103.867 28.1148C103.867 28.3582 104.223 28.4143 104.841 28.4143H114.013V29.8743H114.05V29.8931Z" fill="#007DB2"></path> <path d="M117.158 22.3496C117.457 24.1653 118.243 25.7002 119.591 26.973C120.92 28.2459 122.38 28.8636 123.915 28.8636C125.244 28.8636 126.404 28.5079 127.434 27.834C128.463 27.104 129.324 26.0745 130.054 24.6145L131.383 25.1573C130.71 26.7297 129.811 27.9464 128.594 28.8074C127.265 29.7807 125.731 30.2674 123.915 30.2674C121.725 30.2674 119.834 29.4813 118.262 27.9651C116.615 26.3179 115.772 24.2589 115.772 21.7693C115.772 19.5793 116.446 17.6888 117.719 16.0603C119.235 14.1697 121.313 13.1964 123.915 13.1964C126.217 13.1964 128.164 14.0387 129.755 15.6859C131.327 17.3331 132.057 19.336 132.057 21.7693V22.4432H117.158V22.3496ZM130.653 21.0206C130.354 18.9616 129.493 17.3705 128.033 16.1539C126.76 15.1244 125.412 14.5815 123.896 14.5815C122.137 14.5815 120.62 15.1805 119.329 16.3972C118.056 17.6139 117.326 19.1301 117.083 21.0206H130.653Z" fill="#007DB2"></path> <path d="M134.06 29.893V18.7744C134.06 17.1272 134.733 15.742 136.119 14.6377C137.391 13.6643 138.908 13.1776 140.611 13.1776C142.37 13.1776 143.887 13.7205 145.178 14.75C146.582 15.9105 147.237 17.2957 147.237 18.999V29.8743H145.833V19.3547C145.833 17.8946 145.291 16.7341 144.261 15.8918C143.232 15.0495 142.015 14.5628 140.555 14.5628C139.151 14.5628 137.934 14.9184 137.036 15.7233C135.95 16.6405 135.389 17.7823 135.389 19.3172V29.893H134.06Z" fill="#007DB2"></path> <path d="M149.802 6.49525H151.206V13.7392H157.401V15.0682H151.206V25.2697C151.206 26.2992 151.636 27.1602 152.478 27.8153C153.321 28.4892 154.294 28.8448 155.399 28.8448C156.072 28.8448 156.802 28.7325 157.458 28.4143C158.131 28.1148 158.73 27.6843 159.273 27.1415L160.359 28.3582C159.629 28.9571 158.843 29.3877 157.982 29.762C157.121 30.1364 156.278 30.3049 155.436 30.3049C153.864 30.3049 152.572 29.8743 151.486 28.9759C150.401 28.0587 149.839 26.9169 149.839 25.382V6.47653H149.802V6.49525Z" fill="#007DB2"></path> <path d="M162.998 22.3496C163.298 24.1653 164.084 25.7002 165.432 26.973C166.761 28.2459 168.221 28.8636 169.756 28.8636C171.085 28.8636 172.245 28.5079 173.275 27.834C174.304 27.104 175.165 26.0745 175.895 24.6145L177.224 25.1573C176.55 26.7297 175.652 27.9464 174.435 28.8074C173.106 29.7807 171.571 30.2674 169.756 30.2674C167.566 30.2674 165.675 29.4813 164.103 27.9651C162.456 26.3179 161.613 24.2589 161.613 21.7693C161.613 19.5793 162.287 17.6888 163.56 16.0603C165.076 14.1697 167.154 13.1964 169.756 13.1964C172.058 13.1964 174.005 14.0387 175.596 15.6859C177.168 17.3331 177.898 19.336 177.898 21.7693V22.4432H162.998V22.3496ZM176.494 21.0206C176.195 18.9616 175.334 17.3705 173.874 16.1539C172.601 15.1244 171.253 14.5815 169.737 14.5815C167.977 14.5815 166.461 15.1805 165.17 16.3972C163.897 17.6139 163.167 19.1301 162.924 21.0206H176.494Z" fill="#007DB2"></path> <path d="M179.826 21.7506C179.826 19.3734 180.556 17.3705 182.072 15.6672C183.589 14.02 185.535 13.1776 187.969 13.1776C189.485 13.1776 190.889 13.5333 192.161 14.3382C193.247 15.012 194.108 15.8544 194.707 16.8839L193.547 17.801C193.004 16.8839 192.218 16.0977 191.244 15.4987C190.271 14.8997 189.185 14.5815 187.969 14.5815C186.078 14.5815 184.506 15.3115 183.158 16.7154C181.829 18.1193 181.211 19.8226 181.211 21.7693C181.211 23.4727 181.81 25.045 183.102 26.505C184.506 28.0774 186.078 28.9384 187.969 28.9384C189.185 28.9384 190.271 28.5828 191.375 27.9089C192.218 27.3661 192.948 26.6361 193.565 25.7189L194.726 26.6922C193.884 27.9089 192.966 28.8261 191.937 29.4251C190.907 30.0241 189.56 30.3423 187.987 30.3423C185.554 30.3423 183.551 29.4251 182.035 27.6656C180.556 25.9435 179.826 23.9968 179.826 21.7506Z" fill="#007DB2"></path> <path d="M209.925 29.893H208.521V19.5606C208.521 17.9134 208.034 16.6967 207.061 15.7982C206.218 15.012 205.114 14.5815 203.897 14.5815C202.625 14.5815 201.464 14.8249 200.435 15.3677C199.405 15.8544 198.675 16.6405 198.376 17.5577V29.893H196.972V5.82138H198.376V15.4238C198.731 14.8249 199.461 14.2633 200.678 13.8515C201.895 13.421 202.98 13.1777 204.085 13.1777C205.788 13.1777 207.117 13.6643 208.165 14.6938C209.382 15.8544 209.981 17.5577 209.981 19.8601V29.893H209.925Z" fill="#007DB2"></path> <path d="M59.0561 41.6294V39.0088L57.1094 35.4898H58.0266L58.8689 37.1932C59.1122 37.6798 59.2994 38.0355 59.4679 38.466C59.6551 38.0355 59.8235 37.6798 60.0669 37.1932L60.984 35.4898H61.9012L59.8422 39.0088V41.6294H59.0561Z" fill="#007DB2"></path> <path d="M67.5729 39.3832C67.5729 41.0304 66.4124 41.7604 65.3829 41.7604C64.1662 41.7604 63.249 40.9181 63.249 39.4581C63.249 37.998 64.2224 37.0809 65.4391 37.0809C66.7119 37.137 67.5729 38.0355 67.5729 39.3832ZM64.0352 39.4394C64.0352 40.4127 64.578 41.1427 65.3642 41.1427C66.1504 41.1427 66.6932 40.4127 66.6932 39.4394C66.6932 38.7093 66.3375 37.736 65.3642 37.736C64.3908 37.736 64.0352 38.597 64.0352 39.4394Z" fill="#007DB2"></path> <path d="M73.9562 40.4127C73.9562 40.8994 73.9562 41.255 74.0124 41.6294H73.2824L73.2262 40.8994C73.039 41.255 72.5523 41.7417 71.7662 41.7417C71.0923 41.7417 70.25 41.3861 70.25 39.795V37.1745H71.0362V39.6078C71.0362 40.4501 71.2795 41.0117 72.0095 41.0117C72.5523 41.0117 72.9267 40.656 73.039 40.2817C73.0952 40.1694 73.0952 40.0383 73.0952 39.8512V37.1745H73.8813V40.394H73.9562V40.4127Z" fill="#007DB2"></path> <path d="M76.9321 38.597C76.9321 38.0542 76.9321 37.6237 76.876 37.1932H77.606V38.0355H77.6621C77.8493 37.4365 78.336 37.0621 78.8788 37.0621C78.9911 37.0621 79.066 37.0621 79.1222 37.0621V37.8483C79.066 37.8483 78.935 37.8483 78.8227 37.8483C78.2798 37.8483 77.8493 38.2788 77.737 38.8778C77.737 38.9901 77.6809 39.1211 77.6809 39.2335V41.6107H76.9321V38.597Z" fill="#007DB2"></path> <path d="M85.9912 35.4898V41.6855H85.2051V35.4898H85.9912Z" fill="#007DB2"></path> <path d="M92.8047 35.1342V40.4876C92.8047 40.8432 92.8047 41.3299 92.8609 41.6481H92.1308L92.0747 40.8619C91.8313 41.3486 91.2885 41.7043 90.5585 41.7043C89.4728 41.7043 88.668 40.7871 88.668 39.4581C88.668 37.9981 89.5852 37.0809 90.6708 37.0809C91.3447 37.0809 91.8313 37.3803 91.9998 37.7547V35.078H92.786V35.1342H92.8047ZM91.9998 39.0088C91.9998 38.8965 91.9998 38.7655 91.9437 38.6532C91.8314 38.1665 91.4008 37.736 90.7831 37.736C89.9408 37.736 89.4541 38.466 89.4541 39.4394C89.4541 40.3565 89.8847 41.0866 90.7831 41.0866C91.326 41.0866 91.8126 40.7309 91.9437 40.1132C91.9437 40.0009 91.9998 39.8699 91.9998 39.7576V39.0088Z" fill="#007DB2"></path> <path d="M96.2678 39.5704C96.2678 40.656 96.9978 41.0866 97.784 41.0866C98.3268 41.0866 98.7012 40.9742 99.0006 40.8432L99.1129 41.386C98.8135 41.4984 98.3268 41.6855 97.6529 41.6855C96.3239 41.6855 95.4629 40.7683 95.4629 39.4394C95.4629 38.1104 96.2491 37.0621 97.5219 37.0621C98.9819 37.0621 99.3376 38.335 99.3376 39.1211C99.3376 39.3083 99.3376 39.4206 99.3376 39.4768H96.2303V39.5704H96.2678ZM98.6263 39.0088C98.6263 38.5222 98.4391 37.6798 97.5406 37.6798C96.7544 37.6798 96.3801 38.4098 96.3239 39.0088H98.6263Z" fill="#007DB2"></path> <path d="M104.466 41.6294L104.41 41.0866C104.167 41.4422 103.68 41.7604 103.081 41.7604C102.164 41.7604 101.752 41.1614 101.752 40.4876C101.752 39.4019 102.725 38.8404 104.429 38.8404V38.7281C104.429 38.3724 104.316 37.6986 103.399 37.6986C102.969 37.6986 102.557 37.8109 102.239 37.9981L102.051 37.4552C102.407 37.2119 102.969 37.0996 103.511 37.0996C104.84 37.0996 105.215 38.0168 105.215 38.9152V40.5625C105.215 40.9181 105.215 41.3486 105.271 41.592H104.485V41.6294H104.466ZM104.354 39.3832C103.511 39.3832 102.463 39.4955 102.463 40.3566C102.463 40.8994 102.819 41.1427 103.249 41.1427C103.792 41.1427 104.223 40.7871 104.335 40.4127C104.335 40.3566 104.391 40.2255 104.391 40.1694V39.3832H104.354Z" fill="#007DB2"></path> <path d="M108.004 40.8432C108.247 41.0304 108.678 41.1427 109.033 41.1427C109.632 41.1427 109.876 40.8432 109.876 40.4689C109.876 40.1132 109.632 39.8699 109.033 39.6827C108.247 39.3832 107.873 38.9527 107.873 38.4098C107.873 37.6798 108.416 37.137 109.389 37.137C109.82 37.137 110.231 37.2493 110.475 37.4365L110.288 38.0355C110.1 37.9232 109.801 37.7921 109.37 37.7921C108.884 37.7921 108.64 38.0916 108.64 38.3911C108.64 38.7468 108.884 38.934 109.483 39.1211C110.269 39.4206 110.643 39.795 110.643 40.4501C110.643 41.2363 110.044 41.7791 108.996 41.7791C108.509 41.7791 108.079 41.6668 107.779 41.4796L108.004 40.8432Z" fill="#007DB2"></path> <path d="M112.74 42.7899C112.927 42.2471 113.171 41.2737 113.283 40.5999L114.2 40.4876C114.013 41.2737 113.601 42.3032 113.358 42.7338L112.74 42.7899Z" fill="#007DB2"></path> <path d="M124.421 39.3832C124.421 41.0304 123.26 41.7604 122.231 41.7604C121.014 41.7604 120.097 40.9181 120.097 39.4581C120.097 37.998 121.07 37.0809 122.287 37.0809C123.56 37.137 124.421 38.0355 124.421 39.3832ZM120.883 39.4394C120.883 40.4127 121.426 41.1427 122.212 41.1427C122.998 41.1427 123.541 40.4127 123.541 39.4394C123.541 38.7093 123.185 37.736 122.212 37.736C121.313 37.736 120.883 38.597 120.883 39.4394Z" fill="#007DB2"></path> <path d="M130.803 40.4127C130.803 40.8994 130.803 41.255 130.859 41.6294H130.129L130.073 40.8994C129.886 41.255 129.399 41.7417 128.613 41.7417C127.939 41.7417 127.097 41.3861 127.097 39.795V37.1745H127.883V39.6078C127.883 40.4501 128.126 41.0117 128.856 41.0117C129.399 41.0117 129.773 40.656 129.886 40.2817C129.942 40.1694 129.942 40.0383 129.942 39.8512V37.1745H130.728V40.394H130.803V40.4127Z" fill="#007DB2"></path> <path d="M133.78 38.597C133.78 38.0542 133.78 37.6237 133.724 37.1932H134.454V38.0355H134.51C134.697 37.4365 135.184 37.0621 135.726 37.0621C135.839 37.0621 135.914 37.0621 135.97 37.0621V37.8483C135.914 37.8483 135.783 37.8483 135.67 37.8483C135.127 37.8483 134.697 38.2788 134.585 38.8778C134.585 38.9901 134.529 39.1211 134.529 39.2335V41.6107H133.742V38.5783H133.78V38.597Z" fill="#007DB2"></path> <path d="M142.839 35.4898V41.6855H142.053V35.4898H142.839Z" fill="#007DB2"></path> <path d="M145.946 38.4099C145.946 37.9232 145.946 37.5675 145.89 37.1932H146.62L146.676 37.9232C146.919 37.4927 147.406 37.0809 148.136 37.0809C148.735 37.0809 149.708 37.4365 149.708 38.9714V41.6481H148.922V39.1024C148.922 38.3724 148.679 37.7734 147.892 37.7734C147.35 37.7734 146.919 38.1291 146.807 38.6158C146.751 38.7281 146.751 38.8591 146.751 38.9714V41.6481H145.965L145.946 38.4099Z" fill="#007DB2"></path> <path d="M152.685 38.4099C152.685 37.9232 152.685 37.5675 152.629 37.1932H153.359L153.415 37.9232C153.658 37.4927 154.145 37.0809 154.875 37.0809C155.474 37.0809 156.447 37.4365 156.447 38.9714V41.6481H155.661V39.1024C155.661 38.3724 155.418 37.7734 154.632 37.7734C154.089 37.7734 153.658 38.1291 153.546 38.6158C153.49 38.7281 153.49 38.8591 153.49 38.9714V41.6481H152.704L152.685 38.4099Z" fill="#007DB2"></path> <path d="M163.448 39.3832C163.448 41.0304 162.287 41.7604 161.258 41.7604C160.041 41.7604 159.124 40.9181 159.124 39.4581C159.124 37.998 160.097 37.0809 161.314 37.0809C162.531 37.137 163.448 38.0355 163.448 39.3832ZM159.929 39.4394C159.929 40.4127 160.472 41.1427 161.258 41.1427C162.044 41.1427 162.587 40.4127 162.587 39.4394C162.587 38.7093 162.231 37.736 161.258 37.736C160.341 37.736 159.929 38.597 159.929 39.4394Z" fill="#007DB2"></path> <path d="M166.368 37.1932L167.211 39.6827C167.323 40.1132 167.454 40.4689 167.566 40.8432C167.678 40.4876 167.81 40.1132 167.922 39.6827L168.764 37.1932H169.606L167.847 41.6294H167.061L165.357 37.1932C165.395 37.1932 166.368 37.1932 166.368 37.1932Z" fill="#007DB2"></path> <path d="M174.51 41.6294L174.454 41.0866C174.211 41.4422 173.724 41.7604 173.125 41.7604C172.208 41.7604 171.796 41.1614 171.796 40.4876C171.796 39.4019 172.769 38.8404 174.473 38.8404V38.7281C174.473 38.3724 174.36 37.6986 173.443 37.6986C173.013 37.6986 172.601 37.8109 172.283 37.9981L172.095 37.4552C172.451 37.2119 173.013 37.0996 173.555 37.0996C174.884 37.0996 175.259 38.0168 175.259 38.9152V40.5625C175.259 40.9181 175.259 41.3486 175.315 41.592H174.529V41.6294H174.51ZM174.398 39.3832C173.555 39.3832 172.507 39.4955 172.507 40.3566C172.507 40.8994 172.863 41.1427 173.293 41.1427C173.836 41.1427 174.267 40.7871 174.379 40.4127C174.379 40.3566 174.435 40.2255 174.435 40.1694V39.3832H174.398Z" fill="#007DB2"></path> <path d="M179.021 35.9203V37.1932H180.182V37.7921H179.021V40.2255C179.021 40.7683 179.208 41.0678 179.62 41.0678C179.807 41.0678 179.976 41.0678 180.107 41.0117L180.163 41.6107C179.976 41.6668 179.732 41.723 179.433 41.723C179.077 41.723 178.759 41.6107 178.591 41.3673C178.347 41.124 178.291 40.7683 178.291 40.2068V37.7734H177.617V37.1744H178.291V36.1449L179.021 35.9203Z" fill="#007DB2"></path> <path d="M183.626 35.9765C183.626 36.276 183.439 36.4632 183.139 36.4632C182.84 36.4632 182.652 36.2198 182.652 35.9765C182.652 35.677 182.84 35.4898 183.139 35.4898C183.457 35.4898 183.626 35.677 183.626 35.9765ZM182.727 41.6294V37.1932H183.513V41.6294H182.727Z" fill="#007DB2"></path> <path d="M190.57 39.3832C190.57 41.0304 189.409 41.7604 188.38 41.7604C187.163 41.7604 186.246 40.9181 186.246 39.4581C186.246 37.998 187.219 37.0809 188.436 37.0809C189.709 37.137 190.57 38.0355 190.57 39.3832ZM187.032 39.4394C187.032 40.4127 187.575 41.1427 188.361 41.1427C189.147 41.1427 189.69 40.4127 189.69 39.4394C189.69 38.7093 189.335 37.736 188.361 37.736C187.463 37.736 187.032 38.597 187.032 39.4394Z" fill="#007DB2"></path> <path d="M193.248 38.4099C193.248 37.9232 193.248 37.5675 193.191 37.1932H193.921L193.978 37.9232C194.221 37.4927 194.708 37.0809 195.438 37.0809C196.037 37.0809 197.01 37.4365 197.01 38.9714V41.6481H196.224V39.1024C196.224 38.3724 195.98 37.7734 195.194 37.7734C194.651 37.7734 194.221 38.1291 194.109 38.6158C194.052 38.7281 194.052 38.8591 194.052 38.9714V41.6481H193.266L193.248 38.4099Z" fill="#007DB2"></path> <path d="M199.873 40.8432C200.116 41.0304 200.547 41.1427 200.903 41.1427C201.502 41.1427 201.745 40.8432 201.745 40.4689C201.745 40.1132 201.502 39.8699 200.903 39.6827C200.116 39.3832 199.742 38.9527 199.742 38.4098C199.742 37.6798 200.285 37.137 201.258 37.137C201.689 37.137 202.101 37.2493 202.344 37.4365L202.157 38.0355C201.97 37.9232 201.67 37.7921 201.239 37.7921C200.753 37.7921 200.509 38.0916 200.509 38.3911C200.509 38.7468 200.753 38.934 201.352 39.1211C202.138 39.4206 202.512 39.795 202.512 40.4501C202.512 41.2363 201.913 41.7791 200.865 41.7791C200.378 41.7791 199.948 41.6668 199.648 41.4796L199.873 40.8432Z" fill="#007DB2"></path> <path d="M208.689 41.1989C208.689 40.8994 208.933 40.656 209.232 40.656C209.532 40.656 209.775 40.8994 209.775 41.1989C209.775 41.4984 209.588 41.7417 209.232 41.7417C208.877 41.7417 208.689 41.5171 208.689 41.1989ZM208.858 39.8699L208.746 35.4898H209.588L209.476 39.8699H208.858Z" fill="#007DB2"></path> </g> <defs> <clipPath id="clip0_124_7422"> <rect width="210" height="48.6113" fill="white"></rect> </clipPath> </defs> </svg>
    </a>
    <div class="main-head head-nav-below has-search-modal">
      <div class="actions">
      
        <?php if (Bunyad::options()->topbar_search): ?>
        
          <a href="#" title="<?php esc_attr_e('Search', 'contentberg'); ?>" class="search-link"><i class="fa fa-search"></i></a>
                  
        <?php endif; ?>

      </div>
    </div>
     <div class="header-links">
                     <a href="JavaScript:void(0)" class="emizentech-toggle">
                      <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="29" height="3" rx="1.5" fill="#007DB2"/>
                        <rect y="11" width="7" height="3" rx="1.5" fill="#007DB2"/>
                        <rect x="9" y="11" width="20" height="3" rx="1.5" fill="#007DB2"/>
                        <rect y="22" width="29" height="3" rx="1.5" fill="#007DB2"/>
                      </svg>
                     </a>
                  </div>
  </div>
</header>

<!-- ══════════════════════════════════════════════════════════════════════
     DESKTOP NAVIGATION
══════════════════════════════════════════════════════════════════════ -->
<div class="emizentech-navigation">
  <div class="nav-container">

    <!-- Logo -->
    <a href="https://emizentech.com/" class="emizentech-logo">
      <svg width="210" height="49" viewBox="0 0 210 49" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_124_7422)"> <path d="M22.1432 41.124C39.4202 41.7042 45.8967 31.091 45.8967 31.091C54.4884 20.197 41.9659 7.67447 41.9659 7.67447C44.0436 10.8566 42.3777 14.9184 42.3777 14.9184C40.2251 21.8067 30.6226 25.7563 30.6226 25.7563C20.833 30.0428 12.26 29.5187 12.26 29.5187C11.8856 41.124 22.1432 41.124 22.1432 41.124Z" fill="#007DB2"></path> <path d="M34.3854 2.41465C32.4762 1.19796 29.0507 0.26205 26.5051 0.0935861C10.501 -1.17925 0.542844 10.9876 0.0187329 22.7427C-0.205886 29.1256 2.17133 34.7411 3.7811 36.8188C2.78903 33.6367 2.3398 31.2595 2.50826 28.302C3.50033 10.5758 19.7103 -0.598989 34.3854 2.41465Z" fill="#007DB2"></path> <path d="M30.7353 18.7557L31.0161 18.4C36.5193 11.5679 33.6741 7.91781 32.9815 7.44985C30.3797 5.12879 24.9888 5.87752 21.0393 9.60245C12.0171 18.4 12.2417 28.6015 12.2417 28.6015C12.2417 28.6015 21.1142 28.7138 30.7353 18.7557Z" fill="#007DB2"></path> <path d="M49.2106 24.9514C48.5742 32.1954 43.8198 37.5301 43.8198 37.5301C37.6802 44.7179 29.388 45.9907 29.388 45.9907C21.3953 48.0684 14.2637 46.103 14.2637 46.103C22.0317 49.5846 28.2836 48.4241 28.2836 48.4241C40.0387 46.7956 45.0365 38.466 45.0365 38.466C49.5663 31.7274 49.2106 24.9514 49.2106 24.9514Z" fill="#007DB2"></path> <path d="M58.2885 22.3496C58.588 24.1653 59.3741 25.7002 60.7218 26.973C62.0508 28.2459 63.5109 28.8636 65.0458 28.8636C66.3748 28.8636 67.5353 28.5079 68.5648 27.834C69.5943 27.104 70.4553 26.0745 71.1853 24.6145L72.5143 25.1573C71.8405 26.7297 70.942 27.9464 69.7253 28.8074C68.3963 29.7807 66.8614 30.2674 65.0458 30.2674C62.8557 30.2674 60.9652 29.4813 59.3928 27.9651C57.7456 26.3179 56.9033 24.2589 56.9033 21.7693C56.9033 19.5793 57.5772 17.6888 58.85 16.0603C60.3662 14.1697 62.4439 13.1964 65.0458 13.1964C67.3481 13.1964 69.2948 14.0387 70.8859 15.6859C72.4582 17.3331 73.1882 19.336 73.1882 21.7693V22.4432H58.2885V22.3496ZM71.7843 21.0206C71.4848 18.9616 70.6238 17.3705 69.1638 16.1539C67.8909 15.1244 66.5432 14.5815 65.027 14.5815C63.2675 14.5815 61.7513 15.1805 60.4598 16.3972C59.1869 17.6139 58.4569 19.1301 58.2136 21.0206H71.7843Z" fill="#007DB2"></path> <path d="M75.4346 18.5311C75.4346 16.7715 76.0336 15.4238 77.2502 14.4505C78.2798 13.6082 79.5526 13.1776 81.0126 13.1776C82.1731 13.1776 83.1465 13.4771 83.9888 14.02C84.8311 14.5628 85.4488 15.349 85.8045 16.3972C86.1601 15.4238 86.7778 14.6377 87.6202 14.02C88.4625 13.4771 89.5107 13.1776 90.6525 13.1776C92.1125 13.1776 93.3292 13.6082 94.3587 14.3943C95.5754 15.3677 96.1744 16.7715 96.1744 18.5311V29.893H94.7705V18.4562C94.7705 17.1272 94.34 16.079 93.4415 15.4238C92.7115 14.8248 91.7943 14.5815 90.6525 14.5815C89.492 14.5815 88.4625 14.9372 87.6763 15.6672C86.8901 16.3972 86.4596 17.4267 86.4596 18.7744V29.893H85.0558V18.8306C85.0558 17.5016 84.6252 16.4533 83.8391 15.7233C83.0529 14.9933 82.0796 14.5628 80.919 14.5628C79.8334 14.5628 78.86 14.8623 78.13 15.4051C77.2128 16.1351 76.7261 17.1646 76.7261 18.5123V29.8743H75.3223V18.5311H75.4346Z" fill="#007DB2"></path> <path d="M99.1506 10.1266C98.8511 10.1266 98.5516 10.0143 98.3083 9.82709C98.065 9.58376 98.0088 9.34042 98.0088 8.98477C98.0088 8.68528 98.1211 8.38579 98.3083 8.14245C98.5516 7.89911 98.795 7.7868 99.1506 7.7868C99.5063 7.7868 99.7496 7.89911 99.9929 8.14245C100.236 8.38579 100.292 8.62913 100.292 8.98477C100.292 9.34042 100.18 9.58376 99.9929 9.82709C99.7683 10.0143 99.525 10.1266 99.1506 10.1266ZM98.4767 29.8931V13.5333H99.8806V29.8931H98.4767Z" fill="#007DB2"></path> <path d="M114.05 29.8931H103.287C102.856 29.8931 102.557 29.7807 102.314 29.4625C102.07 29.2192 101.958 28.8636 101.958 28.4892C101.958 28.0587 102.389 27.2725 103.287 26.112L110.587 17.4829C110.887 17.1272 111.186 16.7529 111.504 16.3972C111.804 16.0416 111.935 15.6672 111.935 15.3115C111.935 15.0682 111.635 15.0121 111.093 15.0121H110.606H103.006V13.6082H111.935C112.534 13.6082 112.964 13.7954 113.339 14.2072C113.582 14.5067 113.694 14.75 113.694 14.9933C113.694 15.349 113.694 15.5923 113.638 15.7795C113.582 15.9667 113.526 16.1351 113.339 16.3785L104.653 26.9543C104.466 27.1415 104.354 27.3099 104.223 27.441C103.98 27.6843 103.867 27.9276 103.867 28.1148C103.867 28.3582 104.223 28.4143 104.841 28.4143H114.013V29.8743H114.05V29.8931Z" fill="#007DB2"></path> <path d="M117.158 22.3496C117.457 24.1653 118.243 25.7002 119.591 26.973C120.92 28.2459 122.38 28.8636 123.915 28.8636C125.244 28.8636 126.404 28.5079 127.434 27.834C128.463 27.104 129.324 26.0745 130.054 24.6145L131.383 25.1573C130.71 26.7297 129.811 27.9464 128.594 28.8074C127.265 29.7807 125.731 30.2674 123.915 30.2674C121.725 30.2674 119.834 29.4813 118.262 27.9651C116.615 26.3179 115.772 24.2589 115.772 21.7693C115.772 19.5793 116.446 17.6888 117.719 16.0603C119.235 14.1697 121.313 13.1964 123.915 13.1964C126.217 13.1964 128.164 14.0387 129.755 15.6859C131.327 17.3331 132.057 19.336 132.057 21.7693V22.4432H117.158V22.3496ZM130.653 21.0206C130.354 18.9616 129.493 17.3705 128.033 16.1539C126.76 15.1244 125.412 14.5815 123.896 14.5815C122.137 14.5815 120.62 15.1805 119.329 16.3972C118.056 17.6139 117.326 19.1301 117.083 21.0206H130.653Z" fill="#007DB2"></path> <path d="M134.06 29.893V18.7744C134.06 17.1272 134.733 15.742 136.119 14.6377C137.391 13.6643 138.908 13.1776 140.611 13.1776C142.37 13.1776 143.887 13.7205 145.178 14.75C146.582 15.9105 147.237 17.2957 147.237 18.999V29.8743H145.833V19.3547C145.833 17.8946 145.291 16.7341 144.261 15.8918C143.232 15.0495 142.015 14.5628 140.555 14.5628C139.151 14.5628 137.934 14.9184 137.036 15.7233C135.95 16.6405 135.389 17.7823 135.389 19.3172V29.893H134.06Z" fill="#007DB2"></path> <path d="M149.802 6.49525H151.206V13.7392H157.401V15.0682H151.206V25.2697C151.206 26.2992 151.636 27.1602 152.478 27.8153C153.321 28.4892 154.294 28.8448 155.399 28.8448C156.072 28.8448 156.802 28.7325 157.458 28.4143C158.131 28.1148 158.73 27.6843 159.273 27.1415L160.359 28.3582C159.629 28.9571 158.843 29.3877 157.982 29.762C157.121 30.1364 156.278 30.3049 155.436 30.3049C153.864 30.3049 152.572 29.8743 151.486 28.9759C150.401 28.0587 149.839 26.9169 149.839 25.382V6.47653H149.802V6.49525Z" fill="#007DB2"></path> <path d="M162.998 22.3496C163.298 24.1653 164.084 25.7002 165.432 26.973C166.761 28.2459 168.221 28.8636 169.756 28.8636C171.085 28.8636 172.245 28.5079 173.275 27.834C174.304 27.104 175.165 26.0745 175.895 24.6145L177.224 25.1573C176.55 26.7297 175.652 27.9464 174.435 28.8074C173.106 29.7807 171.571 30.2674 169.756 30.2674C167.566 30.2674 165.675 29.4813 164.103 27.9651C162.456 26.3179 161.613 24.2589 161.613 21.7693C161.613 19.5793 162.287 17.6888 163.56 16.0603C165.076 14.1697 167.154 13.1964 169.756 13.1964C172.058 13.1964 174.005 14.0387 175.596 15.6859C177.168 17.3331 177.898 19.336 177.898 21.7693V22.4432H162.998V22.3496ZM176.494 21.0206C176.195 18.9616 175.334 17.3705 173.874 16.1539C172.601 15.1244 171.253 14.5815 169.737 14.5815C167.977 14.5815 166.461 15.1805 165.17 16.3972C163.897 17.6139 163.167 19.1301 162.924 21.0206H176.494Z" fill="#007DB2"></path> <path d="M179.826 21.7506C179.826 19.3734 180.556 17.3705 182.072 15.6672C183.589 14.02 185.535 13.1776 187.969 13.1776C189.485 13.1776 190.889 13.5333 192.161 14.3382C193.247 15.012 194.108 15.8544 194.707 16.8839L193.547 17.801C193.004 16.8839 192.218 16.0977 191.244 15.4987C190.271 14.8997 189.185 14.5815 187.969 14.5815C186.078 14.5815 184.506 15.3115 183.158 16.7154C181.829 18.1193 181.211 19.8226 181.211 21.7693C181.211 23.4727 181.81 25.045 183.102 26.505C184.506 28.0774 186.078 28.9384 187.969 28.9384C189.185 28.9384 190.271 28.5828 191.375 27.9089C192.218 27.3661 192.948 26.6361 193.565 25.7189L194.726 26.6922C193.884 27.9089 192.966 28.8261 191.937 29.4251C190.907 30.0241 189.56 30.3423 187.987 30.3423C185.554 30.3423 183.551 29.4251 182.035 27.6656C180.556 25.9435 179.826 23.9968 179.826 21.7506Z" fill="#007DB2"></path> <path d="M209.925 29.893H208.521V19.5606C208.521 17.9134 208.034 16.6967 207.061 15.7982C206.218 15.012 205.114 14.5815 203.897 14.5815C202.625 14.5815 201.464 14.8249 200.435 15.3677C199.405 15.8544 198.675 16.6405 198.376 17.5577V29.893H196.972V5.82138H198.376V15.4238C198.731 14.8249 199.461 14.2633 200.678 13.8515C201.895 13.421 202.98 13.1777 204.085 13.1777C205.788 13.1777 207.117 13.6643 208.165 14.6938C209.382 15.8544 209.981 17.5577 209.981 19.8601V29.893H209.925Z" fill="#007DB2"></path> <path d="M59.0561 41.6294V39.0088L57.1094 35.4898H58.0266L58.8689 37.1932C59.1122 37.6798 59.2994 38.0355 59.4679 38.466C59.6551 38.0355 59.8235 37.6798 60.0669 37.1932L60.984 35.4898H61.9012L59.8422 39.0088V41.6294H59.0561Z" fill="#007DB2"></path> <path d="M67.5729 39.3832C67.5729 41.0304 66.4124 41.7604 65.3829 41.7604C64.1662 41.7604 63.249 40.9181 63.249 39.4581C63.249 37.998 64.2224 37.0809 65.4391 37.0809C66.7119 37.137 67.5729 38.0355 67.5729 39.3832ZM64.0352 39.4394C64.0352 40.4127 64.578 41.1427 65.3642 41.1427C66.1504 41.1427 66.6932 40.4127 66.6932 39.4394C66.6932 38.7093 66.3375 37.736 65.3642 37.736C64.3908 37.736 64.0352 38.597 64.0352 39.4394Z" fill="#007DB2"></path> <path d="M73.9562 40.4127C73.9562 40.8994 73.9562 41.255 74.0124 41.6294H73.2824L73.2262 40.8994C73.039 41.255 72.5523 41.7417 71.7662 41.7417C71.0923 41.7417 70.25 41.3861 70.25 39.795V37.1745H71.0362V39.6078C71.0362 40.4501 71.2795 41.0117 72.0095 41.0117C72.5523 41.0117 72.9267 40.656 73.039 40.2817C73.0952 40.1694 73.0952 40.0383 73.0952 39.8512V37.1745H73.8813V40.394H73.9562V40.4127Z" fill="#007DB2"></path> <path d="M76.9321 38.597C76.9321 38.0542 76.9321 37.6237 76.876 37.1932H77.606V38.0355H77.6621C77.8493 37.4365 78.336 37.0621 78.8788 37.0621C78.9911 37.0621 79.066 37.0621 79.1222 37.0621V37.8483C79.066 37.8483 78.935 37.8483 78.8227 37.8483C78.2798 37.8483 77.8493 38.2788 77.737 38.8778C77.737 38.9901 77.6809 39.1211 77.6809 39.2335V41.6107H76.9321V38.597Z" fill="#007DB2"></path> <path d="M85.9912 35.4898V41.6855H85.2051V35.4898H85.9912Z" fill="#007DB2"></path> <path d="M92.8047 35.1342V40.4876C92.8047 40.8432 92.8047 41.3299 92.8609 41.6481H92.1308L92.0747 40.8619C91.8313 41.3486 91.2885 41.7043 90.5585 41.7043C89.4728 41.7043 88.668 40.7871 88.668 39.4581C88.668 37.9981 89.5852 37.0809 90.6708 37.0809C91.3447 37.0809 91.8313 37.3803 91.9998 37.7547V35.078H92.786V35.1342H92.8047ZM91.9998 39.0088C91.9998 38.8965 91.9998 38.7655 91.9437 38.6532C91.8314 38.1665 91.4008 37.736 90.7831 37.736C89.9408 37.736 89.4541 38.466 89.4541 39.4394C89.4541 40.3565 89.8847 41.0866 90.7831 41.0866C91.326 41.0866 91.8126 40.7309 91.9437 40.1132C91.9437 40.0009 91.9998 39.8699 91.9998 39.7576V39.0088Z" fill="#007DB2"></path> <path d="M96.2678 39.5704C96.2678 40.656 96.9978 41.0866 97.784 41.0866C98.3268 41.0866 98.7012 40.9742 99.0006 40.8432L99.1129 41.386C98.8135 41.4984 98.3268 41.6855 97.6529 41.6855C96.3239 41.6855 95.4629 40.7683 95.4629 39.4394C95.4629 38.1104 96.2491 37.0621 97.5219 37.0621C98.9819 37.0621 99.3376 38.335 99.3376 39.1211C99.3376 39.3083 99.3376 39.4206 99.3376 39.4768H96.2303V39.5704H96.2678ZM98.6263 39.0088C98.6263 38.5222 98.4391 37.6798 97.5406 37.6798C96.7544 37.6798 96.3801 38.4098 96.3239 39.0088H98.6263Z" fill="#007DB2"></path> <path d="M104.466 41.6294L104.41 41.0866C104.167 41.4422 103.68 41.7604 103.081 41.7604C102.164 41.7604 101.752 41.1614 101.752 40.4876C101.752 39.4019 102.725 38.8404 104.429 38.8404V38.7281C104.429 38.3724 104.316 37.6986 103.399 37.6986C102.969 37.6986 102.557 37.8109 102.239 37.9981L102.051 37.4552C102.407 37.2119 102.969 37.0996 103.511 37.0996C104.84 37.0996 105.215 38.0168 105.215 38.9152V40.5625C105.215 40.9181 105.215 41.3486 105.271 41.592H104.485V41.6294H104.466ZM104.354 39.3832C103.511 39.3832 102.463 39.4955 102.463 40.3566C102.463 40.8994 102.819 41.1427 103.249 41.1427C103.792 41.1427 104.223 40.7871 104.335 40.4127C104.335 40.3566 104.391 40.2255 104.391 40.1694V39.3832H104.354Z" fill="#007DB2"></path> <path d="M108.004 40.8432C108.247 41.0304 108.678 41.1427 109.033 41.1427C109.632 41.1427 109.876 40.8432 109.876 40.4689C109.876 40.1132 109.632 39.8699 109.033 39.6827C108.247 39.3832 107.873 38.9527 107.873 38.4098C107.873 37.6798 108.416 37.137 109.389 37.137C109.82 37.137 110.231 37.2493 110.475 37.4365L110.288 38.0355C110.1 37.9232 109.801 37.7921 109.37 37.7921C108.884 37.7921 108.64 38.0916 108.64 38.3911C108.64 38.7468 108.884 38.934 109.483 39.1211C110.269 39.4206 110.643 39.795 110.643 40.4501C110.643 41.2363 110.044 41.7791 108.996 41.7791C108.509 41.7791 108.079 41.6668 107.779 41.4796L108.004 40.8432Z" fill="#007DB2"></path> <path d="M112.74 42.7899C112.927 42.2471 113.171 41.2737 113.283 40.5999L114.2 40.4876C114.013 41.2737 113.601 42.3032 113.358 42.7338L112.74 42.7899Z" fill="#007DB2"></path> <path d="M124.421 39.3832C124.421 41.0304 123.26 41.7604 122.231 41.7604C121.014 41.7604 120.097 40.9181 120.097 39.4581C120.097 37.998 121.07 37.0809 122.287 37.0809C123.56 37.137 124.421 38.0355 124.421 39.3832ZM120.883 39.4394C120.883 40.4127 121.426 41.1427 122.212 41.1427C122.998 41.1427 123.541 40.4127 123.541 39.4394C123.541 38.7093 123.185 37.736 122.212 37.736C121.313 37.736 120.883 38.597 120.883 39.4394Z" fill="#007DB2"></path> <path d="M130.803 40.4127C130.803 40.8994 130.803 41.255 130.859 41.6294H130.129L130.073 40.8994C129.886 41.255 129.399 41.7417 128.613 41.7417C127.939 41.7417 127.097 41.3861 127.097 39.795V37.1745H127.883V39.6078C127.883 40.4501 128.126 41.0117 128.856 41.0117C129.399 41.0117 129.773 40.656 129.886 40.2817C129.942 40.1694 129.942 40.0383 129.942 39.8512V37.1745H130.728V40.394H130.803V40.4127Z" fill="#007DB2"></path> <path d="M133.78 38.597C133.78 38.0542 133.78 37.6237 133.724 37.1932H134.454V38.0355H134.51C134.697 37.4365 135.184 37.0621 135.726 37.0621C135.839 37.0621 135.914 37.0621 135.97 37.0621V37.8483C135.914 37.8483 135.783 37.8483 135.67 37.8483C135.127 37.8483 134.697 38.2788 134.585 38.8778C134.585 38.9901 134.529 39.1211 134.529 39.2335V41.6107H133.742V38.5783H133.78V38.597Z" fill="#007DB2"></path> <path d="M142.839 35.4898V41.6855H142.053V35.4898H142.839Z" fill="#007DB2"></path> <path d="M145.946 38.4099C145.946 37.9232 145.946 37.5675 145.89 37.1932H146.62L146.676 37.9232C146.919 37.4927 147.406 37.0809 148.136 37.0809C148.735 37.0809 149.708 37.4365 149.708 38.9714V41.6481H148.922V39.1024C148.922 38.3724 148.679 37.7734 147.892 37.7734C147.35 37.7734 146.919 38.1291 146.807 38.6158C146.751 38.7281 146.751 38.8591 146.751 38.9714V41.6481H145.965L145.946 38.4099Z" fill="#007DB2"></path> <path d="M152.685 38.4099C152.685 37.9232 152.685 37.5675 152.629 37.1932H153.359L153.415 37.9232C153.658 37.4927 154.145 37.0809 154.875 37.0809C155.474 37.0809 156.447 37.4365 156.447 38.9714V41.6481H155.661V39.1024C155.661 38.3724 155.418 37.7734 154.632 37.7734C154.089 37.7734 153.658 38.1291 153.546 38.6158C153.49 38.7281 153.49 38.8591 153.49 38.9714V41.6481H152.704L152.685 38.4099Z" fill="#007DB2"></path> <path d="M163.448 39.3832C163.448 41.0304 162.287 41.7604 161.258 41.7604C160.041 41.7604 159.124 40.9181 159.124 39.4581C159.124 37.998 160.097 37.0809 161.314 37.0809C162.531 37.137 163.448 38.0355 163.448 39.3832ZM159.929 39.4394C159.929 40.4127 160.472 41.1427 161.258 41.1427C162.044 41.1427 162.587 40.4127 162.587 39.4394C162.587 38.7093 162.231 37.736 161.258 37.736C160.341 37.736 159.929 38.597 159.929 39.4394Z" fill="#007DB2"></path> <path d="M166.368 37.1932L167.211 39.6827C167.323 40.1132 167.454 40.4689 167.566 40.8432C167.678 40.4876 167.81 40.1132 167.922 39.6827L168.764 37.1932H169.606L167.847 41.6294H167.061L165.357 37.1932C165.395 37.1932 166.368 37.1932 166.368 37.1932Z" fill="#007DB2"></path> <path d="M174.51 41.6294L174.454 41.0866C174.211 41.4422 173.724 41.7604 173.125 41.7604C172.208 41.7604 171.796 41.1614 171.796 40.4876C171.796 39.4019 172.769 38.8404 174.473 38.8404V38.7281C174.473 38.3724 174.36 37.6986 173.443 37.6986C173.013 37.6986 172.601 37.8109 172.283 37.9981L172.095 37.4552C172.451 37.2119 173.013 37.0996 173.555 37.0996C174.884 37.0996 175.259 38.0168 175.259 38.9152V40.5625C175.259 40.9181 175.259 41.3486 175.315 41.592H174.529V41.6294H174.51ZM174.398 39.3832C173.555 39.3832 172.507 39.4955 172.507 40.3566C172.507 40.8994 172.863 41.1427 173.293 41.1427C173.836 41.1427 174.267 40.7871 174.379 40.4127C174.379 40.3566 174.435 40.2255 174.435 40.1694V39.3832H174.398Z" fill="#007DB2"></path> <path d="M179.021 35.9203V37.1932H180.182V37.7921H179.021V40.2255C179.021 40.7683 179.208 41.0678 179.62 41.0678C179.807 41.0678 179.976 41.0678 180.107 41.0117L180.163 41.6107C179.976 41.6668 179.732 41.723 179.433 41.723C179.077 41.723 178.759 41.6107 178.591 41.3673C178.347 41.124 178.291 40.7683 178.291 40.2068V37.7734H177.617V37.1744H178.291V36.1449L179.021 35.9203Z" fill="#007DB2"></path> <path d="M183.626 35.9765C183.626 36.276 183.439 36.4632 183.139 36.4632C182.84 36.4632 182.652 36.2198 182.652 35.9765C182.652 35.677 182.84 35.4898 183.139 35.4898C183.457 35.4898 183.626 35.677 183.626 35.9765ZM182.727 41.6294V37.1932H183.513V41.6294H182.727Z" fill="#007DB2"></path> <path d="M190.57 39.3832C190.57 41.0304 189.409 41.7604 188.38 41.7604C187.163 41.7604 186.246 40.9181 186.246 39.4581C186.246 37.998 187.219 37.0809 188.436 37.0809C189.709 37.137 190.57 38.0355 190.57 39.3832ZM187.032 39.4394C187.032 40.4127 187.575 41.1427 188.361 41.1427C189.147 41.1427 189.69 40.4127 189.69 39.4394C189.69 38.7093 189.335 37.736 188.361 37.736C187.463 37.736 187.032 38.597 187.032 39.4394Z" fill="#007DB2"></path> <path d="M193.248 38.4099C193.248 37.9232 193.248 37.5675 193.191 37.1932H193.921L193.978 37.9232C194.221 37.4927 194.708 37.0809 195.438 37.0809C196.037 37.0809 197.01 37.4365 197.01 38.9714V41.6481H196.224V39.1024C196.224 38.3724 195.98 37.7734 195.194 37.7734C194.651 37.7734 194.221 38.1291 194.109 38.6158C194.052 38.7281 194.052 38.8591 194.052 38.9714V41.6481H193.266L193.248 38.4099Z" fill="#007DB2"></path> <path d="M199.873 40.8432C200.116 41.0304 200.547 41.1427 200.903 41.1427C201.502 41.1427 201.745 40.8432 201.745 40.4689C201.745 40.1132 201.502 39.8699 200.903 39.6827C200.116 39.3832 199.742 38.9527 199.742 38.4098C199.742 37.6798 200.285 37.137 201.258 37.137C201.689 37.137 202.101 37.2493 202.344 37.4365L202.157 38.0355C201.97 37.9232 201.67 37.7921 201.239 37.7921C200.753 37.7921 200.509 38.0916 200.509 38.3911C200.509 38.7468 200.753 38.934 201.352 39.1211C202.138 39.4206 202.512 39.795 202.512 40.4501C202.512 41.2363 201.913 41.7791 200.865 41.7791C200.378 41.7791 199.948 41.6668 199.648 41.4796L199.873 40.8432Z" fill="#007DB2"></path> <path d="M208.689 41.1989C208.689 40.8994 208.933 40.656 209.232 40.656C209.532 40.656 209.775 40.8994 209.775 41.1989C209.775 41.4984 209.588 41.7417 209.232 41.7417C208.877 41.7417 208.689 41.5171 208.689 41.1989ZM208.858 39.8699L208.746 35.4898H209.588L209.476 39.8699H208.858Z" fill="#007DB2"></path> </g> <defs> <clipPath id="clip0_124_7422"> <rect width="210" height="48.6113" fill="white"></rect> </clipPath> </defs> </svg>
    </a>

    <!-- Nav pill -->
    <nav>
      <ul class="nav-pill">

        <!-- ── AI ── -->
        <li class="has-dropdown grad-border">
          <a href="#" class="gradient-btn">
            <span class="animate-bg">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><defs><linearGradient id="ag" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="#007DB2"><animate attributeName="stop-color" values="#007db2;#110d27;#007db2" dur="4s" repeatCount="indefinite"/></stop><stop offset="50%" stop-color="#000"><animate attributeName="stop-color" values="#007db2;#110d27;#007db2" dur="4s" repeatCount="indefinite"/></stop><stop offset="100%" stop-color="#007DB2"><animate attributeName="stop-color" values="#007db2;#110d27;#007db2" dur="4s" repeatCount="indefinite"/></stop></linearGradient></defs><path d="M8.52 4.88l.59 1.59c.32.87.84 1.67 1.51 2.32.67.66 1.48 1.16 2.37 1.47l1.63.57c.03.01.06.03.07.06.02.03.03.06.03.09s-.01.06-.03.09c-.02.03-.04.05-.07.06l-1.63.57c-.89.31-1.7.82-2.37 1.47-.67.66-1.19 1.46-1.51 2.32l-.59 1.59c-.01.03-.03.06-.06.07-.03.02-.06.03-.09.03s-.06-.01-.09-.03c-.03-.02-.05-.04-.06-.07L7.62 15.52c-.32-.87-.84-1.67-1.51-2.32-.67-.66-1.48-1.16-2.37-1.47L2.11 11.16c-.03-.01-.06-.03-.08-.06C1.99 11.07 1.98 11.04 1.98 11s.01-.07.03-.1.05-.05.08-.06l1.63-.57c.89-.31 1.7-.82 2.37-1.47.67-.66 1.19-1.46 1.51-2.32L8.2 4.88c.01-.03.03-.06.06-.07.03-.02.06-.03.09-.03s.06.01.09.03c.03.02.05.04.06.07z" fill="url(#ag)"/><path d="M15.86 1.05l.3.81c.16.44.42.84.76 1.17.34.33.74.58 1.18.74l.82.29c.02.01.04.02.05.04.01.01.02.03.02.05s-.01.04-.02.05c-.01.01-.03.02-.05.04l-.82.29c-.45.16-.85.41-1.18.74-.34.33-.6.73-.76 1.17l-.3.81c-.01.02-.02.03-.04.04-.01.01-.03.02-.05.02s-.04-.01-.05-.02c-.01-.01-.03-.02-.04-.04l-.3-.81c-.16-.44-.42-.84-.76-1.17-.34-.33-.74-.58-1.18-.74l-.82-.29c-.02-.01-.04-.02-.05-.04-.01-.01-.02-.03-.02-.05s.01-.04.02-.05c.01-.01.03-.02.05-.04l.82-.29c.45-.16.85-.41 1.18-.74.34-.33.6-.73.76-1.17l.3-.81c.01-.02.02-.03.04-.04.01-.01.03-.01.05-.01s.04 0 .05.01c.01.01.03.02.04.04z" fill="url(#ag)"/><path d="M15.86 14.75l.3.81c.16.44.42.84.76 1.17.34.33.74.58 1.18.74l.82.29c.02.01.04.02.05.04.01.01.02.03.02.05s-.01.04-.02.05c-.01.01-.03.02-.05.04l-.82.29c-.45.16-.85.41-1.18.74-.34.33-.6.73-.76 1.17l-.3.81c-.01.02-.02.03-.04.04-.01.01-.03.01-.05.01s-.04 0-.05-.01c-.01-.01-.03-.02-.04-.04l-.3-.81c-.16-.44-.42-.84-.76-1.17-.34-.33-.74-.58-1.18-.74l-.82-.29c-.02-.01-.04-.02-.05-.04-.01-.01-.02-.03-.02-.05s.01-.04.02-.05c.01-.01.03-.02.05-.04l.82-.29c.45-.16.85-.41 1.18-.74.34-.33.6-.73.76-1.17l.3-.81c.01-.02.06-.08.09-.08s.08.06.09.08z" fill="url(#ag)"/></svg>
              <span class="textanim">AI</span>
            </span>
          </a>
          <div class="dropdown-nav">
            <div class="dropdown-body">
              <div class="dp-left">
                <div class="navigation-info-tab">
                  <div class="info-tab-inner">
                    <p class="text-white py-1">Emizen With AI</p>
                    <p class="about-infos text-white">We deliver AI solutions that power smarter decisions and faster operations through intelligent, scalable, data-driven innovation.</p>
                    <a href="https://emizentech.com/enquiry.html" class="btn header-btn">Talk to an AI Expert</a>
                  </div>
                </div>
              </div>
              <div class="dp-right">
                <div class="tab-splotuion">
                  <div class="dp-row">
                    <div class="dp-col">
                      <div class="dp-sub">
                        <ul class="list">
                            <li>
                              <a href="https://emizentech.com/generative-ai-development-services.html" class="About">
                                  <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/Ai-generativeai.svg" alt="generativeai development" />
                                  Generative AI Development</a>
                          </li>
                          <li>
                              <a href="#">
                                  <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/ai-modal.svg" alt="AI Model Development" />
                                  AI Model Development</a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/ai-consulting-services.html">
                                  <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/Ai-consulting.svg" alt="AI Consulting Services" />
                                  AI Consulting Services</a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/llm-development-services.html">
                                  <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/Ai-LLm.svg" alt="LLM Development" />
                                  LLM Development</a>
                          </li>
                          </ul>
                        <ul class="list">
                          <li>
                            <a href="https://emizentech.com/ai-agent-development.html">
                                <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/Ai-agent-deve.svg" alt="AI Agent Development" />
                                AI Agent Development
                            </a>
                        </li>
                        <li>
                            <a href="https://emizentech.com/chatbot-development-services.html">
                                <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/AI-Chatbot.svg" alt="AI Chatbot Development" />
                                AI Chatbot Development
                            </a>
                        </li>
                        <li>
                            <a href="https://emizentech.com/ai-software-development-services.html">
                                <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/AI-software.svg" alt="AI Software Development" />
                                AI Software Development
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img width="30" height="30" class="header--icon mr-2" src="/wp-content/uploads/2025/08/Ai-delloyment.svg" alt="AI Deployment Services" />
                                AI Deployment Services
                            </a>
                        </li>
                        </ul>
                      </div>
                    </div>
                    <div class="dp-col border-left">
                      <div class="dp-sub">
                        <ul class="list">
                          <li>
                              <a href="https://emizentech.com/ai-integration-services.html">
                                  <img width="30" height="30" class="header--icon mr-2" src="https://emizentech.com/wp-content/uploads/2026/01/Ai-Integration.svg" alt="AI Integration">
                                  AI Integration
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/ai-app-development-company.html">
                                  <img width="30" height="30" class="header--icon mr-2" src="https://emizentech.com/wp-content/uploads/2026/01/Ai-App-Development.svg" alt="AI app">
                                  AI App Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/ai-ml-consulting-services.html">
                                  <img width="30" height="30" class="header--icon mr-2" src="https://emizentech.com/wp-content/uploads/2026/01/Ai-ML-Solutions.svg" alt="AI And ML Solutions">
                                  AI And ML Solutions
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <img width="30" height="30" class="header--icon mr-2" src="https://emizentech.com/wp-content/uploads/2025/08/Ai-video-coading.svg" alt="ai services">
                                  AI Services And Solutions
                              </a>
                          </li>
                      </ul>
                        <ul class="list">
                          <li>
                            <a href="#">
                                <img width="30" height="30" class="header--icon mr-2" src="https://emizentech.com/wp-content/uploads/2026/01/Mlops-services.svg" alt="Mlops services">
                                Mlops Services
                            </a>
                        </li>
                        <li>
                            <a href="https://emizentech.com/chatbot-development-services.html">
                                <img width="30" height="30" class="header--icon mr-2" src="https://emizentech.com/wp-content/uploads/2026/01/chatbot-development-services.svg" alt="chatbot">
                                Chatbot Development Services
                            </a>
                        </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        
        
        <!-- ── COMPANY ── -->
        <li class="has-dropdown company-menus">
          <a href="#">Company</a>
          <div class="dropdown-nav">
            <div class="dropdown-body">
              <div class="dp-left">
                <div class="navigation-info-tab">
                  <div class="info-tab-inner">
                    <p class="info-header py-1">Company</p>
                    <p class="about-infos text-white">Since 2013, we've grown beyond web, app, and eCommerce to providing complete digital solutions.</p>
                    <a href="https://emizentech.com/enquiry.html" class="btn header-btn">Let's Connect With Us!</a>
                    <ul class="px-0 d-flex align-items-center gap-30 py-3 badges-list">
                    <li class="pr-2">
                          <a class="px-0" target="_blank" rel="nofollow noreferrer" href="https://www.forbes.com/councils/forbestechcouncil/2021/09/16/is-your-business-ready-to-build-a-super-app/">
                              <img src="https://emizentech.com/wp-content/uploads/2026/01/Forbes_logo.svg" alt="Forbes_logo">
                          </a>
                      </li>
                      <li class="pr-2">
                          <a class="px-0" target="_blank" rel="nofollow noreferrer" href="https://clutch.co/profile/emizen-tech">
                              <img src="https://emizentech.com/wp-content/uploads/2026/01/clutch-logo-1.svg" alt="badge_clutch1">
                          </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="dp-right">
                <div class="tab-splotuion">
                  <div class="dp-row">
                    <div class="dp-col">
                      <div class="menu-title">Company</div>
                      <div class="dp-sub-row">
                        <div class="col-md-4">
                        <ul class="list">
                          <li>
                              <a href="https://emizentech.com/about-us.html" class="About">
                                  <img loading="lazy" src="https://emizentech.com/wp-content/uploads/2025/08/h-h-about.svg" alt="About" width="30" height="30" class="header--icon mr-2">About
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/awards.html" class="Award">
                                  <img loading="lazy" src="https://emizentech.com/wp-content/uploads/2025/08/h-awards.svg" alt="Awards" width="30" height="30" class="header--icon mr-2">Awards
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/partnership.html" class="Partnership">
                                  <img loading="lazy" src="https://emizentech.com/wp-content/uploads/2025/08/partnership.svg" alt="partnership" width="30" height="30" class="header--icon mr-2">Partnership
                              </a>
                          </li>
                        </ul>
                        </div>
                         <div class="col-md-4">
                        <ul class="list">
                           <li>
                                <a href="https://emizentech.com/career.html" class="Career">
                                    <img loading="lazy" src="https://emizentech.com/wp-content/uploads/2025/08/h-career.svg" alt="career" width="30" height="30" class="header--icon mr-2">Career
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/contact-us.html" class="Contact Us">
                                    <img loading="lazy" src="https://emizentech.com/wp-content/uploads/2025/08/h-contactus.svg" alt="contactus" width="30" height="30" class="header--icon mr-2">Contact us
                                </a>
                            </li>
                           
                        </ul>
                      </div>
                      <div class="col-md-4">
                        <ul class="list">
                            <li>
                                <a href="https://store.emizentech.com/" target="_blank" class="store storeweb">
                                    <img loading="lazy" src="/wp-content/uploads/2025/08/h-store.svg" alt="store" width="30" height="30" class="header--icon mr-2">Store
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/portfolio.html" class="store storeweb">
                                    <img loading="lazy" src="/wp-content/uploads/2025/08/r-tech-news.svg" alt="EmizenTech Portfolio" width="30" height="30" class="header--icon mr-2">Portfolio
                                </a>
                            </li>
                        </ul>
                      </div>
                      </div>
                    </div>
                    <div class="dp-col border-left">
                      <div class="menu-title">Resource</div>
                      <div class="dp-sub">
                        <ul class="list">
                           <li>
                            <a href="https://emizentech.com/blog/category/news" class="About">
                              <img loading="lazy" class="header--icon mr-2" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2025/08/r-tech-news.svg" alt="EmizenTech Tech news">Tech-News
                            </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/blog/" class="Blogs">
                                      <img loading="lazy" class="header--icon mr-2" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2025/08/r-blogs.svg" alt="Blogs">Blogs
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/whitepaper.html" class="Award">
                                      <img loading="lazy" class="header--icon mr-2" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2025/08/r-whitepaper.svg" alt="WhitePaper">WhitePaper
                                  </a>
                              </li>
                        </ul>
                        <ul class="list">
                         <li>
                              <a href="https://emizentech.com/case-studies.html" class="Case-Studies">
                                  <img loading="lazy" class="header--icon mr-2" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2025/08/r-case-study.svg" alt="Case-Studies">Case-Studies
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/tech-board/" class="portfolio">
                                  <img loading="lazy" class="header--icon mr-2" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Tech-board.svg" alt="r-tech-news">Tech-board
                              </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- ── SERVICES ── -->
        <li class="has-dropdown services-menu">
          <a href="https://emizentech.com/services.html">Services</a>
          <div class="dropdown-nav">
            <div class="dropdown-body">
              <div class="dp-left">
                <div class="navigation-info-tab">
                  <div class="info-tab-inner">
                    <p class="info-header py-1">Services</p>
                    <p class="about-infos text-white">Get mobile app development services delivering reliable, high-performance digital experiences.</p>
                    <a href="https://emizentech.com/enquiry.html" class="btn header-btn">Let's Build Together!</a>
                    <p class="our-brand">
                      <img src="https://emizentech.com/wp-content/uploads/2026/01/KIA_logo.svg" width="300" height="75" alt="KIA"/>
                      Delivered digital development for KIA across selected modules.
                    </p>
                  </div>
                </div>
              </div>
              <div class="dp-right">
                <div class="tab-splotuion">
                  <div class="dp-row">
                    <div class="dp-col">
                      <div class="dp-sub">
                        <ul class="list">
                           <li>
                              <a href="https://emizentech.com/mobile-app-development.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Mobile app development" src="https://emizentech.com/wp-content/uploads/2026/01/Mobileapp.svg" />Mobile App Development</a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/wearable-app-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Wearable app development" src="https://emizentech.com/wp-content/uploads/2026/01/wearable.svg">
                                  Wearable App Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/android-app-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Android" src="https://emizentech.com/wp-content/uploads/2026/01/Android-App-Development.svg">Android App Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/ios-app-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="iOS" src="https://emizentech.com/wp-content/uploads/2026/01/ios.svg">iOS App Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/hybrid-mobile-app-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Hybrid" src="https://emizentech.com/wp-content/uploads/2026/01/Hybrid-App-Development.svg">Hybrid Development
                              </a>
                          </li>
                        </ul>
                        <ul class="list">
                         <li>
                              <a href="https://emizentech.com/react-native-app-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="React" src="https://emizentech.com/wp-content/uploads/2026/01/React-Native-App-Development.svg">React Native Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/flutter-app-development.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Flutter" src="https://emizentech.com/wp-content/uploads/2026/01/header-flutter.svg">Flutter Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/ecommerce-development.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="E-commerce" src="https://emizentech.com/wp-content/uploads/2026/01/E-commerce-development.svg">E-commerce Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/ecommerce-app-development.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="E-commerce App" src="https://emizentech.com/wp-content/uploads/2026/01/E-commerce-app-development.svg">E-commerce App Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/software-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Software Development Services" src="https://emizentech.com/wp-content/uploads/2026/01/Software-Development-Services-1.svg">Software Development
                              </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="dp-col border-left">
                      <div class="dp-sub">
                        <ul class="list">
                          <li>
                              <a href="https://emizentech.com/web-development.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Web Development Services" src="https://emizentech.com/wp-content/uploads/2026/01/web-development-services.svg">
                                  Web Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/web-design.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Web Designing Services" src="https://emizentech.com/wp-content/uploads/2026/01/web-desgin.svg">
                                  Web Designing
                              </a>
                          </li>
                          
                          <li>
                              <a href="https://emizentech.com/cms-development-services.html"><img class="header--icon mr-1" width="30" height="30" alt="CMS Development" src="https://emizentech.com/wp-content/uploads/2026/01/cms-dev.svg">CMS Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/crm-software-development.html"><img class="header--icon mr-1" width="30" height="30" alt="CRM" src="https://emizentech.com/wp-content/uploads/2026/01/CRM-Software-Development.svg">CRM Software Development
                              </a>
                          </li>
                           <li>
                              <a href="https://emizentech.com/software-testing.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Software Testing & QA" src="https://emizentech.com/wp-content/uploads/2026/01/Software-Testing-QA.svg">
                                  Software Testing & QA
                              </a>
                          </li>
                        </ul>
                        <ul class="list">
                          <li>
                              <a href="https://emizentech.com/erp-software-development-services.html"><img class="header--icon mr-1" width="30" height="30" alt="ERP" src="https://emizentech.com/wp-content/uploads/2026/01/erp-software-development.svg">ERP Software Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/data-analytic/data-analytics-services.html"><img class="header--icon mr-1" width="30" height="30" alt="Data Analytics" src="https://emizentech.com/wp-content/uploads/2026/01/data-analysis.svg">Data Analytics
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/iot-internet-of-things-solutions.html"><img class="header--icon mr-1" width="30" height="30" alt="IoT" src="https://emizentech.com/wp-content/uploads/2026/01/IoT-developement.svg">IoT Development
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/low-code-development.html"><img class="header--icon mr-1" width="30" height="30" alt="No Code" src="https://emizentech.com/wp-content/uploads/2026/01/low-code.svg" />Low Code / No Code Development
                              </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- ── TECHNOLOGIES ── -->
        <li class="has-dropdown">
          <a href="https://emizentech.com/technologies.html">Technologies</a>
          <div class="dropdown-nav">
            <div class="dropdown-body">
              <div class="dp-left">
                <div class="navigation-info-tab">
                  <div class="info-tab-inner">
                    <p class="info-header py-1">Technologies</p>
                    <p class="about-infos text-white">Technologies that power growth — modern stacks to build secure, scalable, future-ready digital solutions.</p>
                    <a href="https://emizentech.com/enquiry.html" class="btn header-btn">Talk to Tech Experts</a>
                  </div>
                </div>
              </div>
              <div class="dp-right">
                <div class="tab-splotuion">
                  <div class="dp-row">
                    <div class="dp-col">
                      <div class="dp-sub">
                        <ul class="list">
                            <li>
                                <a href="#">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Google Cloud" src="https://emizentech.com/wp-content/uploads/2026/01/Google_Cloud_logo-1.svg">
                                    Google Cloud</a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="header--icon mr-1" width="30" height="30" alt="AWS (future" src="https://emizentech.com/wp-content/uploads/2026/01/header-aws.svg">
                                    AWS (future-ready)
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/microsoft-power-bi-services.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Microsoft Power development" src="https://emizentech.com/wp-content/uploads/2026/01/Power_BI_Logo.svg">
                                    Microsoft Power BI
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/microsoft-powerapps-development.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Microsoft PowerApps" src="https://emizentech.com/wp-content/uploads/2026/01/Powerapps-logo.svg">
                                    Microsoft PowerApps</a>
                            </li>
                        </ul>
                       <ul class="list">
                          <li>
                              <a href="https://emizentech.com/shopify-development.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Shopify" src="https://emizentech.com/wp-content/uploads/2026/01/header-shopify.svg">Shopify
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/shopify-plus-development-services.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Shopify Plus" src="https://emizentech.com/wp-content/uploads/2026/01/shopify-plus-3.svg">Shopify Plus
                              </a>
                          </li>
                          <li>
                              <a href="https://emizentech.com/adobe-commerce-development-company.html">
                                  <img class="header--icon mr-1" width="30" height="30" alt="Adobe Commerce" src="https://emizentech.com/wp-content/uploads/2026/01/adobe-commerce.svg">Adobe Commerce (Magento)
                              </a>
                          </li>
                      </ul>
                  </div>
                    </div>
                    <div class="dp-col border-left">
                       <div class="dp-sub">
                     
                                      <ul class="list">
                                          <li>
                                              <a href="https://emizentech.com/shopware-development.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="Shopware" src="https://emizentech.com/wp-content/uploads/2026/01/header-shopware.svg">Shopware</a>
                                          </li>
                                          <li>
                                              <a href="https://emizentech.com/woocommerce-development.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="WooCommerce" src="https://emizentech.com/wp-content/uploads/2026/01/WooCommerce_logo.svg">WooCommerce</a>
                                          </li>
                                          <li>
                                              <a href="https://emizentech.com/bigcommerce-development.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="BigCommerce" src="https://emizentech.com/wp-content/uploads/2026/01/header-bigcart.svg">BigCommerce</a>
                                          </li>
                                          <li><a href="https://emizentech.com/prestashop-development.html"><img class="header--icon mr-1" width="30" height="30" alt="Prestashop" src="https://emizentech.com/wp-content/uploads/2026/01/prestashop.svg">Prestashop</a></li>
                                      </ul>
                           
                                  
                                      <ul class="list">
                                          <li>
                                              <a href="https://emizentech.com/opencart-ecommerce-development.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="OpenCart" src="https://emizentech.com/wp-content/uploads/2026/01/header-opencart.svg">OpenCart</a>
                                          </li>
                                          <li>
                                              <a href="https://emizentech.com/salesforce.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="Salesforce" src="https://emizentech.com/wp-content/uploads/2026/01/header-salesforce.svg">Salesforce</a>
                                          </li>
                                          <li>
                                              <a href="https://emizentech.com/odoo-development-company.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="Odoo" src="https://emizentech.com/wp-content/uploads/2026/01/header-oddo.svg">Odoo
                                              </a>
                                          </li>
                                          <li>
                                              <a href="https://emizentech.com/creatio-development-services.html">
                                                  <img class="header--icon mr-1" width="30" height="30" alt="Creatio" src="https://emizentech.com/wp-content/uploads/2026/01/header-creatio.svg">Creatio</a>
                                          </li>
                                      </ul>
                                  </div>
                                  </div>
                               
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- ── INDUSTRIES ── -->
        <li class="has-dropdown">
          <a href="https://emizentech.com/industries/">Industries</a>
          <div class="dropdown-nav" style="min-width:920px;">
            <div class="dropdown-body">
              <div class="dp-left">
                <div class="navigation-info-tab">
                  <div class="info-tab-inner">
                    <p class="info-header py-1">Industries</p>
                    <p class="about-infos text-white">With 1200+ projects delivered across 450+ industries, our expertise runs deep.</p>
                    <a href="https://emizentech.com/enquiry.html" class="btn header-btn">Get Expert Consultation</a>
                  </div>
                </div>
              </div>
              <div class="dp-right">
                <div class="tab-splotuion">
                  <div class="dp-row">
                    <div class="dp-col">
                      <div class="dp-sub">
                         <ul class="list">
                              <li>
                                  <a href="https://emizentech.com/fintech-software-development.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Fintech" src="https://emizentech.com/wp-content/uploads/2025/08/ind-fintech.svg">Fintech</a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/retail-software-development.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Retail" src="https://emizentech.com/wp-content/uploads/2026/01/ind-Retail-Software.svg"> Retail
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/food-delivery-app-development.html"><img class="header--icon mr-1" width="30" height="30" alt="Food Delivery App" src="https://emizentech.com/wp-content/uploads/2026/01/food-delivery-app.svg">Food Delivery </a>
                              </li>
                              
                              <li>
                                  <a href="https://emizentech.com/healthcare-software-development.html"><img class="header--icon mr-1" width="30" height="30" alt="Software Development Services" src="https://emizentech.com/wp-content/uploads/2026/01/healthcare-development.svg">Healthcare 
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/dating-app-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Dating app development" src="https://emizentech.com/wp-content/uploads/2025/08/Dating-App-Development.svg">Dating App</a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/pet-care-app-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Petcare app development" src="https://emizentech.com/wp-content/uploads/2025/08/petcare.svg">Petcare App</a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/video-streaming-app-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Video app development" src="https://emizentech.com/wp-content/uploads/2025/08/video-streamin.svg">Video Streaming App</a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/grocery-app-development.html"><img class="header--icon mr-1" width="30" height="30" alt="Grocery App Development" src="https://emizentech.com/wp-content/uploads/2026/01/ind-Grocery-App.svg">Grocery App
                                  </a>
                              </li>
                          </ul>
                         <ul class="list">
                            <li>
                                <a href="https://emizentech.com/realestate-solution.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Real Estate" src="https://emizentech.com/wp-content/uploads/2025/08/ind-realestate.svg"> Real Estate
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/industries/travel-app-development/">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Travel app development" src="https://emizentech.com/wp-content/uploads/2026/01/travel-icon-menu.svg">Travel App
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/education-app-development.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Education app development" src="https://emizentech.com/wp-content/uploads/2026/01/education-app.svg">Education App
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/car-service-app-development-company.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Car Service App Development" src="https://emizentech.com/wp-content/uploads/2025/08/car-sercvice.svg">Car Service App
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/loyalty-app-development-company.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Loyalty App Development" src="https://emizentech.com/wp-content/uploads/2025/08/loyalty.svg">Loyalty App
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/fantasy-sports-app-development.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Fantasy app development" src="https://emizentech.com/wp-content/uploads/2026/01/ind-sports.svg">Fantasy Sports App
                                </a>
                            </li>
                            <li>
                                <a href="https://emizentech.com/fantasy-football-app-development-company.html">
                                    <img class="header--icon mr-1" width="30" height="30" alt="Fantasy Football App" src="https://emizentech.com/wp-content/uploads/2025/08/fantasy-football.svg">Fantasy Football App
                                </a>
                            </li>
                            
                        </ul>
                      </div>
                      </div>
                    <div class="dp-col border-left">
                      <div class="dp-sub">
                          <ul class="list">
                              <li>
                                  <a href="https://emizentech.com/automotive-industry.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Automotive app development" src="https://emizentech.com/wp-content/uploads/2026/01/automotive-menu-icon.svg">Automotive
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/logistic-transportation.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Logistic app development" src="https://emizentech.com/wp-content/uploads/2026/01/ind-logistic.svg"> Logistic & Transport
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/media-entertainment.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Media" src="https://emizentech.com/wp-content/uploads/2026/01/ind-media.svg">Media & Entertainment</a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/salon-app-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Salon app development" src="https://emizentech.com/wp-content/uploads/2026/01/salonapp.svg">Salon App
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/lawyer-app-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Lawyer app development" src="https://emizentech.com/wp-content/uploads/2025/08/lawyer.svg">Lawyer App
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/golf-mobile-app-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Golf app development" src="https://emizentech.com/wp-content/uploads/2026/01/golf.svg">Golf App 
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/industries/on-demand-app-development/"><img class="header--icon mr-1" width="30" height="30" alt="On-Demand App" 
                                    src="https://emizentech.com/wp-content/uploads/2026/01/ind-On-Demand.svg">On-Demand App</a>
                              </li>
                          </ul>
                          <ul class="list">
                              <li>
                                  <a href="https://emizentech.com/sports-application-development.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="sports" src="https://emizentech.com/wp-content/uploads/2025/08/ind-sports.svg">Sports
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/game-development-company.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Gaming app development" src="https://emizentech.com/wp-content/uploads/2026/03/gaming.svg">Gaming
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/events-tickets.html">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Events Tickets" src="https://emizentech.com/wp-content/uploads/2026/01/ind-ticketing.svg">Events & Tickets
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/industries/social-media-app-development/">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Social app development" src="https://emizentech.com/wp-content/uploads/2026/01/social-media.svg">Social Media App
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/industries/startup-app-development/">
                                      <img class="header--icon mr-1" width="30" height="30" alt="Startup app development" src="https://emizentech.com/wp-content/uploads/2026/01/startup.svg">Startup App
                                  </a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/onlyfans-clone-app-development.html"><img class="header--icon mr-1" width="30" height="30" alt="OnlyFans Clone App" src="https://emizentech.com/wp-content/uploads/2026/01/onlyfans.svg">OnlyFans Clone App</a>
                              </li>
                              <li>
                                  <a href="https://emizentech.com/fitness-app-development-company.html"><img class="header--icon mr-1" width="30" height="30" alt="Fitness App Development" src="https://emizentech.com/wp-content/uploads/2026/01/ind-fitness.svg">Fitness App
                                  </a>
                              </li>
                          </ul>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

        <!-- ── HIRE DEVELOPERS ── -->
        <li class="has-dropdown hire-developers-menu">
          <a href="#">Hire Developers</a>
          <div class="dropdown-nav">
            
                
             
              <div class="dropdown-inner">
            <div class="dropdown-body">
              <!-- Info panel -->
              <div class="hire-dropdown-menu">
                 <div class="navigation-info-tab">
                    <div class="info-tab-inner">
                      <div class="rounded-pill rounded-badge">AVAILABLE NOW</div>
                      <div class="header-text">
                        Hire <br>
                        Certified <span>Expert</span><br>
                        Developers
                      </div>
                      <!-- Stats -->
                      <div class="stats-wrap">
                        <div class="stat-box">
                          <div class="counter-text">100+</div>
                          <span>Developers</span>
                        </div>

                        <div class="stat-box">
                          <div class="counter-text">98%</div>
                          <span>Satisfaction</span>
                        </div>

                        <div class="stat-box">
                          <div class="counter-text">12+</div>
                          <span>Yrs Exp</span>
                        </div>
                      </div>

                      <!-- Benefits -->
                      <ul class="benifits">
                        <li>Dedicated & flexible engagement</li>
                        <li>Transparent, on-time delivery</li>
                        <li>Pre-vetted certified talent</li>
                      </ul>
                       <ul class="d-flex mx-auto justify-content-center rating-badges">
                            <li><a href="https://clutch.co/profile/emizen-tech" target="_blank" rel="nofollow"><img src="https://emizentech.com//wp-content/uploads/2025/08/clutch-footer.svg" alt="clutch" width="80" height="24" /><span class="rating-number"><img class="ratingstar" src="/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23" />4.9</span>
                              </a></li>
                            <li><a href="https://www.goodfirms.co/company/emizen-tech-pvt-ltd" target="_blank" rel="nofollow"> <img src="https://emizentech.com/wp-content/uploads/2025/08/goodfirms-2.png" alt="goodfirms" width="100" height="16" /><span class="rating-number"><img class="ratingstar" src="/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23" /> 5.0</span>
                              </a></li>
                            <li><a href="https://www.designrush.com/agency/profile/emizen-tech" target="_blank" rel="nofollow"> <img src="https://emizentech.com//wp-content/uploads/2025/08/designrush-ftr.svg" alt="designrush" width="108" height="26" /><span class="rating-number"><img class="ratingstar" src="/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23" /> 4.9</span>
                              </a></li>
                            <li><a href="https://www.businessofapps.com/app-developers/emizen-tech/" target="_blank" rel="nofollow"> <img src="https://emizentech.com//wp-content/uploads/2025/08/businessofapps.svg" alt="Business-of-app" width="87" height="26" /><span class="rating-number"><img class="ratingstar" src="/wp-content/uploads/2025/08/badgestar.svg" alt="rating-star" width="23" height="23" /> 5.0</span>
                              </a></li>
                            
                          </ul>

                      <!-- CTA -->
                      <a href="https://emizentech.com/enquiry.html" class="btn header-btn">
                        Start Hiring Now <img src="https://emizentech.com/wp-content/uploads/2026/03/hiring-arrow-btn.svg" width="13" height="13" alt="hiring-btn">
                      </a>

                      <!-- Clients -->
                      <div class="view-users">
                        <div class="avatars">
                            <span><img src="https://emizentech.com/wp-content/uploads/2026/03/ftr-icon4.svg" alt="logo1" width="23" height="21"></span>
                            <span><img src="https://emizentech.com/wp-content/uploads/2026/03/ftr-icon3.svg" alt="logo1" width="23" height="21"></span>
                            <span><img src="https://emizentech.com/wp-content/uploads/2026/03/ftr-icon2.svg" alt="logo1" width="23" height="21"></span>
                            <span><img src="https://emizentech.com/wp-content/uploads/2026/03/ftr-icon1.svg" alt="logo1" width="23" height="21"></span>                            
                        </div>
                        <div class="client-text">
                          <strong>200+ Clients</strong>
                          <span>Trust our talent</span>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

              <!-- Ecommerce -->
              <div class="hire-panel ecommerce-servicess-menu">
                <div class="menu-img">
                  <span class="icon-wrap">
                    <img src="https://emizentech.com/wp-content/uploads/2026/03/Icon-mobile.svg" alt="ecommerce more services" width="20" height="20">
                  </span>
                  Ecommerce
                </div>
                 <ul class="list">
                      <li>
                          <a href="https://emizentech.com/hire-ecommerce-developer.html">
                              <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2025/08/Hire-ecommerce.svg">Hire Ecommerce Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-shopify-developer.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2025/08/hireshopify.svg">Hire Shopify Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-shopware-developer.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2025/08/hire-shopware.svg">Hire Shopware Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-magento-developer.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/magento-2-logo-svgrepo-com-1.svg">Hire Magento Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-bigcommerce-developers.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/BigCommerce-Developers.svg">Hire Bigcommerce Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-woocommerce-developers.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/WooCommerce-Developers.svg">Hire WooCommerce Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-bigcart-developers.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-BigCart-Developers.svg">Hire Bigcart Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-oscommerce-developers.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/OsCommerce-Logo.wine-1.svg">Hire osCommerce Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-prestashop-developers.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-PrestaShop-Developers.svg">Hire Prestashop Developers
                          </a>
                      </li>
                      <li>
                          <a href="https://emizentech.com/hire-opencart-developer.html">
                              <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/opencart-2-1.svg">Hire Opencart Developer
                          </a>
                      </li>
                  </ul>
              </div>

              <!-- Mobile Apps -->
              <div class="hire-panel mobile-services-menu">
               <div class="menu-img">
                                                                        <span><img  src="https://emizentech.com/wp-content/uploads/2026/03/mobile-app.svg" alt="ecommerce more services" width="20" height="20"> </span>Mobile Apps </div>
               <ul class="list">
                    <li>
                        <a href="https://emizentech.com/hire-mobile-app-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Mobileapp.svg">Hire Mobile App Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-android-app-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2025/08/Hire-Android.svg">Hire Android Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-iphone-app-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/iOS-Developer.svg">Hire iOS Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-flutter-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/header-flutter.svg">Hire Flutter Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-react-native-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/React-Native-Developers.svg">Hire React Native Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-ionic-app-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Ionic-App-Developers.svg">Hire Ionic App Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-xamarin-app-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-Xamarin-Developers.svg">Hire Xamarin Developers
                        </a>
                    </li>
                    <li>
                        <a href="https://emizentech.com/hire-hybrid-developers.html">
                            <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-Hybrid-Developers.svg">Hire Hybrid Developers
                        </a>
                    </li>
                </ul>
              </div>

              <!-- Web -->
              <div class="hire-panel web-menu">
                <div class="menu-img">
                  <span><img loading="lazy" src="https://emizentech.com/wp-content/uploads/2026/03/Icon-web.svg" alt="Web services" width="20" height="20"> </span> Web </div>
                <ul class="list">
                  <li>
                      <a href="https://emizentech.com/hire-web-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-React-Developers.svg" alt="Hire Web Developers">Hire Web Developers
                      </a>
                  </li>
                   <li>
                      <a href="https://emizentech.com/hire-strapi-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/strapi.svg" alt="hire strapi developers">Hire Strapi Developers
                      </a>
                  </li>
                   <li>
                      <a href="https://emizentech.com/hire-wordpress-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/WordPress_blue_logo-1.svg" alt="hire wordpress developers">Hire Wordpress Developers
                      </a>
                  </li>
                  <li>
                      <a href="https://emizentech.com/hire-reactjs-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-React-Developers.svg" alt="hire react developers">Hire Reactjs Developers
                      </a>
                  </li>
                  <li>
                      <a href="https://emizentech.com/hire-php-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/PHP-Developers.svg" alt="hire php developers">Hire PHP Developers
                      </a>
                  </li>
                   <li>
                      <a href="https://emizentech.com/hire-laravel-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-Laravel-Developers.svg" alt="hire laravel developers">Hire Laravel Developers
                      </a>
                  </li>

                  <li>
                      <a href="https://emizentech.com/hire-angularjs-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/AngularJS-Developers.svg" alt="hire angular developers">Hire Angularjs Developers
                      </a>
                  </li>

                  <li>
                      <a href="https://emizentech.com/hire-nodejs-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Node.js_logo-1.svg" alt="hire nodejs developers">Hire Nodejs Developers
                      </a>
                  </li>
                  <li>
                      <a href="https://emizentech.com/hire-python-developers.html">
                          <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Python-Developers.svg" alt="hire python developers">Hire Python Developers
                      </a>
                  </li>
                  <li>
                    <a href="https://emizentech.com/hire-java-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/java-icon-1-1.svg" alt="hire java developers">Hire Java Developers
                    </a>
                </li>
                 <li>
                    <a href="https://emizentech.com/hire-drupal-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Drupal-Developers.svg" alt="hire drupal developers">Hire Drupal Developers
                    </a>
                </li> 
                <li>
                    <a href="https://emizentech.com/hire-joomla-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Joomla_Shiny_Icon-1.svg" alt="hire joomla developers">Hire Joomla Developers
                    </a>
                </li>

                <li>
                    <a href="https://emizentech.com/hire-asp-net-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/ASPNET-Developers.svg" alt="Hire ASP.NET Developer">Hire ASP.NET Developers
                    </a>
                </li>

                
                <li>
                    <a href="https://emizentech.com/hire-cakephp-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/CakePHP-Developers.svg" alt="hire cakephp developers">Hire Cakephp Developers
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-codeigniter-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/CodeIgniter-Developers.svg" alt="Hire CodeIgniter Developer">Hire CodeIgniter Developers
                    </a>
                </li>


                <li>
                    <a href="https://emizentech.com/hire-ruby-on-rails-developers.html">
                        <img class="header--icon mr-1" width="30" height="30" src="https://emizentech.com/wp-content/uploads/2026/01/Ruby-on-Rails-Developers.svg" alt="Hire Ruby on Rails Developer">Hire Ruby on Rails Developers
                    </a>
                </li>
                </ul>
              </div>

              <!-- More Services -->
              <div class="hire-panel more-services-menu">
                <div class="menu-img">
                  <span><img src="https://emizentech.com/wp-content/uploads/2026/03/more-services2.svg" alt="ecommerce more services" width="20" height="20"> </span>
                  More Services
                </div>
                <ul class="list">
                   <li>
                    <a href="https://emizentech.com/hire-fractional-cto.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/web-development-services.svg">Hire Fractional CTO
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-full-stack-developers.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-Full-Stack-Developers.svg">Hire Full Stack Developers
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-salesforce-developer.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Hire-Salesforce-Developer.svg">Hire Salesforce Developers
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-odoo-developer.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2025/08/hire-oddo.svg">Hire Odoo Developers
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-google-cloud-developers.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Google_Cloud_logo-1.svg">Hire Google Cloud Developers
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-servicenow-developers.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/hire-servicenow.svg">Hire Servicenow Developers
                    </a>
                </li>
                <li>
                    <a href="https://emizentech.com/hire-power-bi-developers.html">
                        <img class="header--icon mr-1" src="https://emizentech.com/wp-content/uploads/2026/01/Power-BI-Developers.svg">Hire Power BI Developers
                    </a>
                </li>
                </ul>
              </div>
              </div>
               <div class="menu-ftr col-12">
                      <div class="fr-link d-inline-block w-100"><a class="emizen-btn" href="https://emizentech.com/hire-developers.html">Hire Elite Talent Now! <span class="arrow-right"><img src="https://emizentech.com/wp-content/uploads/2025/08/btn-arrow.svg"></span></a> </div>
                  </div> 
            </div>
            <!-- footer CTA -->
            
          </div>
            
        </li>



      </ul>
    
    <div class="main-head head-nav-below has-search-modal">
      <div class="actions">
      
        <?php if (Bunyad::options()->topbar_search): ?>
        
          <a href="#" title="<?php esc_attr_e('Search', 'contentberg'); ?>" class="search-link"><i class="fa fa-search"></i></a>
                  
        <?php endif; ?>

      </div>
    </div>
    <!-- GET IN TOUCH -->
    <div class="header-btn-wrap">
      <a href="https://emizentech.com/enquiry.html" class="header-btn">
        Get in touch
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="12" fill="white"/>
          <path d="M16.63 8.75L8.4 16.99c-.38.38-1 .38-1.38 0-.38-.38-.38-1 0-1.38L15.25 7.37c.38-.38 1-.38 1.38 0 .38.38.38 1 0 1.38z" fill="#007DB2"/>
          <path d="M16.73 15.18c-.38.38-1 .38-1.38 0l.21-5.72-5.82.3c-.54.03-.99-.38-.99-.93s.41-.99.95-1.01l6.88-.37c.27-.01.54.09.73.28.19.19.28.46.27.73l-.26 6.79c-.01.24-.1.47-.26.64l-.33-.61z" fill="#007DB2"/>
        </svg>
      </a>

    </div>

    
</nav>
  </div><!-- /nav-container -->
</div>
<!-- /emizentech-navigation -->

<!-- ══════════════════════════════════════════════════════════════════════
     MOBILE OVERLAY
══════════════════════════════════════════════════════════════════════ -->
<div class="mobile-overlay" id="mobileOverlay"></div>

<!-- ══════════════════════════════════════════════════════════════════════
     MOBILE MENU DRAWER
══════════════════════════════════════════════════════════════════════ -->
<div class="mobile-menu" id="mobileMenu">
  <div class="menu-header">
    <div class="menu-header-top">
      <a href="https://emizentech.com/" class="emizentech-logo">
           <svg width="210" height="49" viewBox="0 0 210 49" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_124_7422)">
              <path d="M22.1432 41.124C39.4202 41.7042 45.8967 31.091 45.8967 31.091C54.4884 20.197 41.9659 7.67447 41.9659 7.67447C44.0436 10.8566 42.3777 14.9184 42.3777 14.9184C40.2251 21.8067 30.6226 25.7563 30.6226 25.7563C20.833 30.0428 12.26 29.5187 12.26 29.5187C11.8856 41.124 22.1432 41.124 22.1432 41.124Z" fill="#007DB2"/>
              <path d="M34.3854 2.41465C32.4762 1.19796 29.0507 0.26205 26.5051 0.0935861C10.501 -1.17925 0.542844 10.9876 0.0187329 22.7427C-0.205886 29.1256 2.17133 34.7411 3.7811 36.8188C2.78903 33.6367 2.3398 31.2595 2.50826 28.302C3.50033 10.5758 19.7103 -0.598989 34.3854 2.41465Z" fill="#007DB2"/>
              <path d="M30.7353 18.7557L31.0161 18.4C36.5193 11.5679 33.6741 7.91781 32.9815 7.44985C30.3797 5.12879 24.9888 5.87752 21.0393 9.60245C12.0171 18.4 12.2417 28.6015 12.2417 28.6015C12.2417 28.6015 21.1142 28.7138 30.7353 18.7557Z" fill="#007DB2"/>
              <path d="M49.2106 24.9514C48.5742 32.1954 43.8198 37.5301 43.8198 37.5301C37.6802 44.7179 29.388 45.9907 29.388 45.9907C21.3953 48.0684 14.2637 46.103 14.2637 46.103C22.0317 49.5846 28.2836 48.4241 28.2836 48.4241C40.0387 46.7956 45.0365 38.466 45.0365 38.466C49.5663 31.7274 49.2106 24.9514 49.2106 24.9514Z" fill="#007DB2"/>
              <path d="M58.2885 22.3496C58.588 24.1653 59.3741 25.7002 60.7218 26.973C62.0508 28.2459 63.5109 28.8636 65.0458 28.8636C66.3748 28.8636 67.5353 28.5079 68.5648 27.834C69.5943 27.104 70.4553 26.0745 71.1853 24.6145L72.5143 25.1573C71.8405 26.7297 70.942 27.9464 69.7253 28.8074C68.3963 29.7807 66.8614 30.2674 65.0458 30.2674C62.8557 30.2674 60.9652 29.4813 59.3928 27.9651C57.7456 26.3179 56.9033 24.2589 56.9033 21.7693C56.9033 19.5793 57.5772 17.6888 58.85 16.0603C60.3662 14.1697 62.4439 13.1964 65.0458 13.1964C67.3481 13.1964 69.2948 14.0387 70.8859 15.6859C72.4582 17.3331 73.1882 19.336 73.1882 21.7693V22.4432H58.2885V22.3496ZM71.7843 21.0206C71.4848 18.9616 70.6238 17.3705 69.1638 16.1539C67.8909 15.1244 66.5432 14.5815 65.027 14.5815C63.2675 14.5815 61.7513 15.1805 60.4598 16.3972C59.1869 17.6139 58.4569 19.1301 58.2136 21.0206H71.7843Z" fill="#007DB2"/>
              <path d="M75.4346 18.5311C75.4346 16.7715 76.0336 15.4238 77.2502 14.4505C78.2798 13.6082 79.5526 13.1776 81.0126 13.1776C82.1731 13.1776 83.1465 13.4771 83.9888 14.02C84.8311 14.5628 85.4488 15.349 85.8045 16.3972C86.1601 15.4238 86.7778 14.6377 87.6202 14.02C88.4625 13.4771 89.5107 13.1776 90.6525 13.1776C92.1125 13.1776 93.3292 13.6082 94.3587 14.3943C95.5754 15.3677 96.1744 16.7715 96.1744 18.5311V29.893H94.7705V18.4562C94.7705 17.1272 94.34 16.079 93.4415 15.4238C92.7115 14.8248 91.7943 14.5815 90.6525 14.5815C89.492 14.5815 88.4625 14.9372 87.6763 15.6672C86.8901 16.3972 86.4596 17.4267 86.4596 18.7744V29.893H85.0558V18.8306C85.0558 17.5016 84.6252 16.4533 83.8391 15.7233C83.0529 14.9933 82.0796 14.5628 80.919 14.5628C79.8334 14.5628 78.86 14.8623 78.13 15.4051C77.2128 16.1351 76.7261 17.1646 76.7261 18.5123V29.8743H75.3223V18.5311H75.4346Z" fill="#007DB2"/>
              <path d="M99.1506 10.1266C98.8511 10.1266 98.5516 10.0143 98.3083 9.82709C98.065 9.58376 98.0088 9.34042 98.0088 8.98477C98.0088 8.68528 98.1211 8.38579 98.3083 8.14245C98.5516 7.89911 98.795 7.7868 99.1506 7.7868C99.5063 7.7868 99.7496 7.89911 99.9929 8.14245C100.236 8.38579 100.292 8.62913 100.292 8.98477C100.292 9.34042 100.18 9.58376 99.9929 9.82709C99.7683 10.0143 99.525 10.1266 99.1506 10.1266ZM98.4767 29.8931V13.5333H99.8806V29.8931H98.4767Z" fill="#007DB2"/>
              <path d="M114.05 29.8931H103.287C102.856 29.8931 102.557 29.7807 102.314 29.4625C102.07 29.2192 101.958 28.8636 101.958 28.4892C101.958 28.0587 102.389 27.2725 103.287 26.112L110.587 17.4829C110.887 17.1272 111.186 16.7529 111.504 16.3972C111.804 16.0416 111.935 15.6672 111.935 15.3115C111.935 15.0682 111.635 15.0121 111.093 15.0121H110.606H103.006V13.6082H111.935C112.534 13.6082 112.964 13.7954 113.339 14.2072C113.582 14.5067 113.694 14.75 113.694 14.9933C113.694 15.349 113.694 15.5923 113.638 15.7795C113.582 15.9667 113.526 16.1351 113.339 16.3785L104.653 26.9543C104.466 27.1415 104.354 27.3099 104.223 27.441C103.98 27.6843 103.867 27.9276 103.867 28.1148C103.867 28.3582 104.223 28.4143 104.841 28.4143H114.013V29.8743H114.05V29.8931Z" fill="#007DB2"/>
              <path d="M117.158 22.3496C117.457 24.1653 118.243 25.7002 119.591 26.973C120.92 28.2459 122.38 28.8636 123.915 28.8636C125.244 28.8636 126.404 28.5079 127.434 27.834C128.463 27.104 129.324 26.0745 130.054 24.6145L131.383 25.1573C130.71 26.7297 129.811 27.9464 128.594 28.8074C127.265 29.7807 125.731 30.2674 123.915 30.2674C121.725 30.2674 119.834 29.4813 118.262 27.9651C116.615 26.3179 115.772 24.2589 115.772 21.7693C115.772 19.5793 116.446 17.6888 117.719 16.0603C119.235 14.1697 121.313 13.1964 123.915 13.1964C126.217 13.1964 128.164 14.0387 129.755 15.6859C131.327 17.3331 132.057 19.336 132.057 21.7693V22.4432H117.158V22.3496ZM130.653 21.0206C130.354 18.9616 129.493 17.3705 128.033 16.1539C126.76 15.1244 125.412 14.5815 123.896 14.5815C122.137 14.5815 120.62 15.1805 119.329 16.3972C118.056 17.6139 117.326 19.1301 117.083 21.0206H130.653Z" fill="#007DB2"/>
              <path d="M134.06 29.893V18.7744C134.06 17.1272 134.733 15.742 136.119 14.6377C137.391 13.6643 138.908 13.1776 140.611 13.1776C142.37 13.1776 143.887 13.7205 145.178 14.75C146.582 15.9105 147.237 17.2957 147.237 18.999V29.8743H145.833V19.3547C145.833 17.8946 145.291 16.7341 144.261 15.8918C143.232 15.0495 142.015 14.5628 140.555 14.5628C139.151 14.5628 137.934 14.9184 137.036 15.7233C135.95 16.6405 135.389 17.7823 135.389 19.3172V29.893H134.06Z" fill="#007DB2"/>
              <path d="M149.802 6.49525H151.206V13.7392H157.401V15.0682H151.206V25.2697C151.206 26.2992 151.636 27.1602 152.478 27.8153C153.321 28.4892 154.294 28.8448 155.399 28.8448C156.072 28.8448 156.802 28.7325 157.458 28.4143C158.131 28.1148 158.73 27.6843 159.273 27.1415L160.359 28.3582C159.629 28.9571 158.843 29.3877 157.982 29.762C157.121 30.1364 156.278 30.3049 155.436 30.3049C153.864 30.3049 152.572 29.8743 151.486 28.9759C150.401 28.0587 149.839 26.9169 149.839 25.382V6.47653H149.802V6.49525Z" fill="#007DB2"/>
              <path d="M162.998 22.3496C163.298 24.1653 164.084 25.7002 165.432 26.973C166.761 28.2459 168.221 28.8636 169.756 28.8636C171.085 28.8636 172.245 28.5079 173.275 27.834C174.304 27.104 175.165 26.0745 175.895 24.6145L177.224 25.1573C176.55 26.7297 175.652 27.9464 174.435 28.8074C173.106 29.7807 171.571 30.2674 169.756 30.2674C167.566 30.2674 165.675 29.4813 164.103 27.9651C162.456 26.3179 161.613 24.2589 161.613 21.7693C161.613 19.5793 162.287 17.6888 163.56 16.0603C165.076 14.1697 167.154 13.1964 169.756 13.1964C172.058 13.1964 174.005 14.0387 175.596 15.6859C177.168 17.3331 177.898 19.336 177.898 21.7693V22.4432H162.998V22.3496ZM176.494 21.0206C176.195 18.9616 175.334 17.3705 173.874 16.1539C172.601 15.1244 171.253 14.5815 169.737 14.5815C167.977 14.5815 166.461 15.1805 165.17 16.3972C163.897 17.6139 163.167 19.1301 162.924 21.0206H176.494Z" fill="#007DB2"/>
              <path d="M179.826 21.7506C179.826 19.3734 180.556 17.3705 182.072 15.6672C183.589 14.02 185.535 13.1776 187.969 13.1776C189.485 13.1776 190.889 13.5333 192.161 14.3382C193.247 15.012 194.108 15.8544 194.707 16.8839L193.547 17.801C193.004 16.8839 192.218 16.0977 191.244 15.4987C190.271 14.8997 189.185 14.5815 187.969 14.5815C186.078 14.5815 184.506 15.3115 183.158 16.7154C181.829 18.1193 181.211 19.8226 181.211 21.7693C181.211 23.4727 181.81 25.045 183.102 26.505C184.506 28.0774 186.078 28.9384 187.969 28.9384C189.185 28.9384 190.271 28.5828 191.375 27.9089C192.218 27.3661 192.948 26.6361 193.565 25.7189L194.726 26.6922C193.884 27.9089 192.966 28.8261 191.937 29.4251C190.907 30.0241 189.56 30.3423 187.987 30.3423C185.554 30.3423 183.551 29.4251 182.035 27.6656C180.556 25.9435 179.826 23.9968 179.826 21.7506Z" fill="#007DB2"/>
              <path d="M209.925 29.893H208.521V19.5606C208.521 17.9134 208.034 16.6967 207.061 15.7982C206.218 15.012 205.114 14.5815 203.897 14.5815C202.625 14.5815 201.464 14.8249 200.435 15.3677C199.405 15.8544 198.675 16.6405 198.376 17.5577V29.893H196.972V5.82138H198.376V15.4238C198.731 14.8249 199.461 14.2633 200.678 13.8515C201.895 13.421 202.98 13.1777 204.085 13.1777C205.788 13.1777 207.117 13.6643 208.165 14.6938C209.382 15.8544 209.981 17.5577 209.981 19.8601V29.893H209.925Z" fill="#007DB2"/>
              <path d="M59.0561 41.6294V39.0088L57.1094 35.4898H58.0266L58.8689 37.1932C59.1122 37.6798 59.2994 38.0355 59.4679 38.466C59.6551 38.0355 59.8235 37.6798 60.0669 37.1932L60.984 35.4898H61.9012L59.8422 39.0088V41.6294H59.0561Z" fill="#007DB2"/>
              <path d="M67.5729 39.3832C67.5729 41.0304 66.4124 41.7604 65.3829 41.7604C64.1662 41.7604 63.249 40.9181 63.249 39.4581C63.249 37.998 64.2224 37.0809 65.4391 37.0809C66.7119 37.137 67.5729 38.0355 67.5729 39.3832ZM64.0352 39.4394C64.0352 40.4127 64.578 41.1427 65.3642 41.1427C66.1504 41.1427 66.6932 40.4127 66.6932 39.4394C66.6932 38.7093 66.3375 37.736 65.3642 37.736C64.3908 37.736 64.0352 38.597 64.0352 39.4394Z" fill="#007DB2"/>
              <path d="M73.9562 40.4127C73.9562 40.8994 73.9562 41.255 74.0124 41.6294H73.2824L73.2262 40.8994C73.039 41.255 72.5523 41.7417 71.7662 41.7417C71.0923 41.7417 70.25 41.3861 70.25 39.795V37.1745H71.0362V39.6078C71.0362 40.4501 71.2795 41.0117 72.0095 41.0117C72.5523 41.0117 72.9267 40.656 73.039 40.2817C73.0952 40.1694 73.0952 40.0383 73.0952 39.8512V37.1745H73.8813V40.394H73.9562V40.4127Z" fill="#007DB2"/>
              <path d="M76.9321 38.597C76.9321 38.0542 76.9321 37.6237 76.876 37.1932H77.606V38.0355H77.6621C77.8493 37.4365 78.336 37.0621 78.8788 37.0621C78.9911 37.0621 79.066 37.0621 79.1222 37.0621V37.8483C79.066 37.8483 78.935 37.8483 78.8227 37.8483C78.2798 37.8483 77.8493 38.2788 77.737 38.8778C77.737 38.9901 77.6809 39.1211 77.6809 39.2335V41.6107H76.9321V38.597Z" fill="#007DB2"/>
              <path d="M85.9912 35.4898V41.6855H85.2051V35.4898H85.9912Z" fill="#007DB2"/>
              <path d="M92.8047 35.1342V40.4876C92.8047 40.8432 92.8047 41.3299 92.8609 41.6481H92.1308L92.0747 40.8619C91.8313 41.3486 91.2885 41.7043 90.5585 41.7043C89.4728 41.7043 88.668 40.7871 88.668 39.4581C88.668 37.9981 89.5852 37.0809 90.6708 37.0809C91.3447 37.0809 91.8313 37.3803 91.9998 37.7547V35.078H92.786V35.1342H92.8047ZM91.9998 39.0088C91.9998 38.8965 91.9998 38.7655 91.9437 38.6532C91.8314 38.1665 91.4008 37.736 90.7831 37.736C89.9408 37.736 89.4541 38.466 89.4541 39.4394C89.4541 40.3565 89.8847 41.0866 90.7831 41.0866C91.326 41.0866 91.8126 40.7309 91.9437 40.1132C91.9437 40.0009 91.9998 39.8699 91.9998 39.7576V39.0088Z" fill="#007DB2"/>
              <path d="M96.2678 39.5704C96.2678 40.656 96.9978 41.0866 97.784 41.0866C98.3268 41.0866 98.7012 40.9742 99.0006 40.8432L99.1129 41.386C98.8135 41.4984 98.3268 41.6855 97.6529 41.6855C96.3239 41.6855 95.4629 40.7683 95.4629 39.4394C95.4629 38.1104 96.2491 37.0621 97.5219 37.0621C98.9819 37.0621 99.3376 38.335 99.3376 39.1211C99.3376 39.3083 99.3376 39.4206 99.3376 39.4768H96.2303V39.5704H96.2678ZM98.6263 39.0088C98.6263 38.5222 98.4391 37.6798 97.5406 37.6798C96.7544 37.6798 96.3801 38.4098 96.3239 39.0088H98.6263Z" fill="#007DB2"/>
              <path d="M104.466 41.6294L104.41 41.0866C104.167 41.4422 103.68 41.7604 103.081 41.7604C102.164 41.7604 101.752 41.1614 101.752 40.4876C101.752 39.4019 102.725 38.8404 104.429 38.8404V38.7281C104.429 38.3724 104.316 37.6986 103.399 37.6986C102.969 37.6986 102.557 37.8109 102.239 37.9981L102.051 37.4552C102.407 37.2119 102.969 37.0996 103.511 37.0996C104.84 37.0996 105.215 38.0168 105.215 38.9152V40.5625C105.215 40.9181 105.215 41.3486 105.271 41.592H104.485V41.6294H104.466ZM104.354 39.3832C103.511 39.3832 102.463 39.4955 102.463 40.3566C102.463 40.8994 102.819 41.1427 103.249 41.1427C103.792 41.1427 104.223 40.7871 104.335 40.4127C104.335 40.3566 104.391 40.2255 104.391 40.1694V39.3832H104.354Z" fill="#007DB2"/>
              <path d="M108.004 40.8432C108.247 41.0304 108.678 41.1427 109.033 41.1427C109.632 41.1427 109.876 40.8432 109.876 40.4689C109.876 40.1132 109.632 39.8699 109.033 39.6827C108.247 39.3832 107.873 38.9527 107.873 38.4098C107.873 37.6798 108.416 37.137 109.389 37.137C109.82 37.137 110.231 37.2493 110.475 37.4365L110.288 38.0355C110.1 37.9232 109.801 37.7921 109.37 37.7921C108.884 37.7921 108.64 38.0916 108.64 38.3911C108.64 38.7468 108.884 38.934 109.483 39.1211C110.269 39.4206 110.643 39.795 110.643 40.4501C110.643 41.2363 110.044 41.7791 108.996 41.7791C108.509 41.7791 108.079 41.6668 107.779 41.4796L108.004 40.8432Z" fill="#007DB2"/>
              <path d="M112.74 42.7899C112.927 42.2471 113.171 41.2737 113.283 40.5999L114.2 40.4876C114.013 41.2737 113.601 42.3032 113.358 42.7338L112.74 42.7899Z" fill="#007DB2"/>
              <path d="M124.421 39.3832C124.421 41.0304 123.26 41.7604 122.231 41.7604C121.014 41.7604 120.097 40.9181 120.097 39.4581C120.097 37.998 121.07 37.0809 122.287 37.0809C123.56 37.137 124.421 38.0355 124.421 39.3832ZM120.883 39.4394C120.883 40.4127 121.426 41.1427 122.212 41.1427C122.998 41.1427 123.541 40.4127 123.541 39.4394C123.541 38.7093 123.185 37.736 122.212 37.736C121.313 37.736 120.883 38.597 120.883 39.4394Z" fill="#007DB2"/>
              <path d="M130.803 40.4127C130.803 40.8994 130.803 41.255 130.859 41.6294H130.129L130.073 40.8994C129.886 41.255 129.399 41.7417 128.613 41.7417C127.939 41.7417 127.097 41.3861 127.097 39.795V37.1745H127.883V39.6078C127.883 40.4501 128.126 41.0117 128.856 41.0117C129.399 41.0117 129.773 40.656 129.886 40.2817C129.942 40.1694 129.942 40.0383 129.942 39.8512V37.1745H130.728V40.394H130.803V40.4127Z" fill="#007DB2"/>
              <path d="M133.78 38.597C133.78 38.0542 133.78 37.6237 133.724 37.1932H134.454V38.0355H134.51C134.697 37.4365 135.184 37.0621 135.726 37.0621C135.839 37.0621 135.914 37.0621 135.97 37.0621V37.8483C135.914 37.8483 135.783 37.8483 135.67 37.8483C135.127 37.8483 134.697 38.2788 134.585 38.8778C134.585 38.9901 134.529 39.1211 134.529 39.2335V41.6107H133.742V38.5783H133.78V38.597Z" fill="#007DB2"/>
              <path d="M142.839 35.4898V41.6855H142.053V35.4898H142.839Z" fill="#007DB2"/>
              <path d="M145.946 38.4099C145.946 37.9232 145.946 37.5675 145.89 37.1932H146.62L146.676 37.9232C146.919 37.4927 147.406 37.0809 148.136 37.0809C148.735 37.0809 149.708 37.4365 149.708 38.9714V41.6481H148.922V39.1024C148.922 38.3724 148.679 37.7734 147.892 37.7734C147.35 37.7734 146.919 38.1291 146.807 38.6158C146.751 38.7281 146.751 38.8591 146.751 38.9714V41.6481H145.965L145.946 38.4099Z" fill="#007DB2"/>
              <path d="M152.685 38.4099C152.685 37.9232 152.685 37.5675 152.629 37.1932H153.359L153.415 37.9232C153.658 37.4927 154.145 37.0809 154.875 37.0809C155.474 37.0809 156.447 37.4365 156.447 38.9714V41.6481H155.661V39.1024C155.661 38.3724 155.418 37.7734 154.632 37.7734C154.089 37.7734 153.658 38.1291 153.546 38.6158C153.49 38.7281 153.49 38.8591 153.49 38.9714V41.6481H152.704L152.685 38.4099Z" fill="#007DB2"/>
              <path d="M163.448 39.3832C163.448 41.0304 162.287 41.7604 161.258 41.7604C160.041 41.7604 159.124 40.9181 159.124 39.4581C159.124 37.998 160.097 37.0809 161.314 37.0809C162.531 37.137 163.448 38.0355 163.448 39.3832ZM159.929 39.4394C159.929 40.4127 160.472 41.1427 161.258 41.1427C162.044 41.1427 162.587 40.4127 162.587 39.4394C162.587 38.7093 162.231 37.736 161.258 37.736C160.341 37.736 159.929 38.597 159.929 39.4394Z" fill="#007DB2"/>
              <path d="M166.368 37.1932L167.211 39.6827C167.323 40.1132 167.454 40.4689 167.566 40.8432C167.678 40.4876 167.81 40.1132 167.922 39.6827L168.764 37.1932H169.606L167.847 41.6294H167.061L165.357 37.1932C165.395 37.1932 166.368 37.1932 166.368 37.1932Z" fill="#007DB2"/>
              <path d="M174.51 41.6294L174.454 41.0866C174.211 41.4422 173.724 41.7604 173.125 41.7604C172.208 41.7604 171.796 41.1614 171.796 40.4876C171.796 39.4019 172.769 38.8404 174.473 38.8404V38.7281C174.473 38.3724 174.36 37.6986 173.443 37.6986C173.013 37.6986 172.601 37.8109 172.283 37.9981L172.095 37.4552C172.451 37.2119 173.013 37.0996 173.555 37.0996C174.884 37.0996 175.259 38.0168 175.259 38.9152V40.5625C175.259 40.9181 175.259 41.3486 175.315 41.592H174.529V41.6294H174.51ZM174.398 39.3832C173.555 39.3832 172.507 39.4955 172.507 40.3566C172.507 40.8994 172.863 41.1427 173.293 41.1427C173.836 41.1427 174.267 40.7871 174.379 40.4127C174.379 40.3566 174.435 40.2255 174.435 40.1694V39.3832H174.398Z" fill="#007DB2"/>
              <path d="M179.021 35.9203V37.1932H180.182V37.7921H179.021V40.2255C179.021 40.7683 179.208 41.0678 179.62 41.0678C179.807 41.0678 179.976 41.0678 180.107 41.0117L180.163 41.6107C179.976 41.6668 179.732 41.723 179.433 41.723C179.077 41.723 178.759 41.6107 178.591 41.3673C178.347 41.124 178.291 40.7683 178.291 40.2068V37.7734H177.617V37.1744H178.291V36.1449L179.021 35.9203Z" fill="#007DB2"/>
              <path d="M183.626 35.9765C183.626 36.276 183.439 36.4632 183.139 36.4632C182.84 36.4632 182.652 36.2198 182.652 35.9765C182.652 35.677 182.84 35.4898 183.139 35.4898C183.457 35.4898 183.626 35.677 183.626 35.9765ZM182.727 41.6294V37.1932H183.513V41.6294H182.727Z" fill="#007DB2"/>
              <path d="M190.57 39.3832C190.57 41.0304 189.409 41.7604 188.38 41.7604C187.163 41.7604 186.246 40.9181 186.246 39.4581C186.246 37.998 187.219 37.0809 188.436 37.0809C189.709 37.137 190.57 38.0355 190.57 39.3832ZM187.032 39.4394C187.032 40.4127 187.575 41.1427 188.361 41.1427C189.147 41.1427 189.69 40.4127 189.69 39.4394C189.69 38.7093 189.335 37.736 188.361 37.736C187.463 37.736 187.032 38.597 187.032 39.4394Z" fill="#007DB2"/>
              <path d="M193.248 38.4099C193.248 37.9232 193.248 37.5675 193.191 37.1932H193.921L193.978 37.9232C194.221 37.4927 194.708 37.0809 195.438 37.0809C196.037 37.0809 197.01 37.4365 197.01 38.9714V41.6481H196.224V39.1024C196.224 38.3724 195.98 37.7734 195.194 37.7734C194.651 37.7734 194.221 38.1291 194.109 38.6158C194.052 38.7281 194.052 38.8591 194.052 38.9714V41.6481H193.266L193.248 38.4099Z" fill="#007DB2"/>
              <path d="M199.873 40.8432C200.116 41.0304 200.547 41.1427 200.903 41.1427C201.502 41.1427 201.745 40.8432 201.745 40.4689C201.745 40.1132 201.502 39.8699 200.903 39.6827C200.116 39.3832 199.742 38.9527 199.742 38.4098C199.742 37.6798 200.285 37.137 201.258 37.137C201.689 37.137 202.101 37.2493 202.344 37.4365L202.157 38.0355C201.97 37.9232 201.67 37.7921 201.239 37.7921C200.753 37.7921 200.509 38.0916 200.509 38.3911C200.509 38.7468 200.753 38.934 201.352 39.1211C202.138 39.4206 202.512 39.795 202.512 40.4501C202.512 41.2363 201.913 41.7791 200.865 41.7791C200.378 41.7791 199.948 41.6668 199.648 41.4796L199.873 40.8432Z" fill="#007DB2"/>
              <path d="M208.689 41.1989C208.689 40.8994 208.933 40.656 209.232 40.656C209.532 40.656 209.775 40.8994 209.775 41.1989C209.775 41.4984 209.588 41.7417 209.232 41.7417C208.877 41.7417 208.689 41.5171 208.689 41.1989ZM208.858 39.8699L208.746 35.4898H209.588L209.476 39.8699H208.858Z" fill="#007DB2"/>
              </g>
              <defs>
              <clipPath id="clip0_124_7422">
              <rect width="210" height="48.6113" fill="white"/>
              </clipPath>
              </defs>
           </svg>
        </a>
      <button class="close-icon" id="mobileClose" aria-label="Close menu">
        <img  src="https://emizentech.com/wp-content/uploads/2026/03/cross-22.svg" alt="close-icon" width="28" height="28">
      </button>
    </div>

    <!-- Contact icons row -->
    <div class="navigation-links">
      <ul>
        <li>
          <a href="https://teams.live.com" target="_blank">
            <svg width="20" height="20" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.6459 8.396H3.52091C3.22176 8.396 2.97925 8.63851 2.97925 8.93766V17.0627C2.97925 17.3618 3.22176 17.6043 3.52091 17.6043H11.6459C11.9451 17.6043 12.1876 17.3618 12.1876 17.0627V8.93766C12.1876 8.63851 11.9451 8.396 11.6459 8.396Z" stroke="#9E9E9E" stroke-width="1.625" stroke-linejoin="round"></path>
                <path d="M13.948 8.6665C15.2942 8.6665 16.3855 7.5752 16.3855 6.229C16.3855 4.88281 15.2942 3.7915 13.948 3.7915C12.6018 3.7915 11.5105 4.88281 11.5105 6.229C11.5105 7.5752 12.6018 8.6665 13.948 8.6665Z" stroke="#9E9E9E" stroke-width="1.625"></path>
                <path d="M21.1251 8.66667C21.9478 8.66667 22.6147 7.99976 22.6147 7.17708C22.6147 6.35441 21.9478 5.6875 21.1251 5.6875C20.3024 5.6875 19.6355 6.35441 19.6355 7.17708C19.6355 7.99976 20.3024 8.66667 21.1251 8.66667Z" stroke="#9E9E9E" stroke-width="1.625"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5329 17.1761C18.7995 17.9002 19.4957 18.4167 20.3124 18.4167C21.3594 18.4167 22.2082 17.5679 22.2082 16.5208V12.1875H18.5166L18.4843 10.6979L16.9941 11.0149C17.0943 10.8748 17.2265 10.7607 17.3797 10.682C17.5329 10.6033 17.7027 10.5624 17.8749 10.5625H22.7499C23.0372 10.5625 23.3128 10.6766 23.5159 10.8798C23.7191 11.083 23.8332 11.3585 23.8332 11.6458V16.5208C23.8332 18.4653 22.2568 20.0417 20.3124 20.0417C19.4037 20.0429 18.53 19.6916 17.875 19.0617L18.5329 17.1761Z" fill="#9E9E9E"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.39575 17.6042C8.39575 20.5957 10.8209 23.0208 13.8124 23.0208C16.8039 23.0208 19.2291 20.5957 19.2291 17.6042V11.1042C19.2291 10.9605 19.172 10.8227 19.0704 10.7212C18.9689 10.6196 18.8311 10.5625 18.6874 10.5625H12.1874V12.1875H17.6041V17.6042C17.6041 19.6982 15.9065 21.3958 13.8124 21.3958C11.7183 21.3958 10.0208 19.6982 10.0208 17.6042H8.39575Z" fill="#9E9E9E"></path>
                <path d="M7.58333 14.8957V11.104M7.58333 11.104H5.6875M7.58333 11.104H9.47917" stroke="#9E9E9E" stroke-width="1.625" stroke-linecap="round"></path>
                </svg>
            Chat
          </a>
        </li>
        <li class="call-dropdown">
          <span class="call-dropdown-link">
           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24"><defs><style>.st21{fill:none;stroke:#848b91;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><path class="st21" d="M14.1,6.5c1.7.3,3.1,1.7,3.3,3.3M14.1,3.1c3.6.4,6.4,3.3,6.8,6.8M20.1,16.7v2.6c0,.9-.8,1.7-1.7,1.7h-.2c-2.7-.3-5.1-1.2-7.4-2.7-2.1-1.3-3.9-3.1-5.1-5.1-1.5-2.2-2.3-4.8-2.7-7.4,0-.9.6-1.8,1.5-1.9h2.7c.9,0,1.6.6,1.7,1.5,0,.9.3,1.6.6,2.4.3.6,0,1.4-.3,1.8l-1.1,1.1c1.2,2.1,3,3.9,5.1,5.1l1.1-1.1c.5-.4,1.2-.6,1.8-.3.8.3,1.5.5,2.4.6.9,0,1.5.9,1.5,1.7h0Z"></path></svg>
            Call
          </span>
          <div class="call-dropdown-wrap">
            <span class="call-label">Emizentech Contact</span>
            <a href="tel:+19895359295">USA: +1 (989) 535-9295</a>
            <a href="tel:+971585876283">UAE: +971 58 587 6283</a>
            <a href="tel:918529003877">IND: +91-8529003877</a>
            <span class="hr-label">Career/Openings</span>
            <a href="tel:919602561777">IND: +91-9602561777</a>
          </div>
        </li>
        <li>
          <a href="mailto:info@emizentech.com">
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32"><defs><style>.st11 {fill: #848b91;}</style></defs><g id="Layer_17"><path class="st11" d="M25.1,6H6.9c-2.1,0-3.9,1.7-3.9,3.9v11.2c0,2.1,1.7,3.9,3.9,3.9h18.2c2.1,0,3.9-1.7,3.9-3.9v-11.2c0-2.1-1.7-3.9-3.9-3.9ZM25.1,8h.2l-9.3,6.8-9.3-6.8h18.4ZM27,21.1c0,1-.8,1.9-1.9,1.9H6.9c-1,0-1.9-.9-1.9-1.9v-11.2c0-.2,0-.4,0-.6l10.3,7.5c.4.3.8.3,1.2,0l10.3-7.5c0,.2,0,.4.1.6v11.2Z"></path></g></svg>
            Email
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Mobile accordion links -->
  <ul class="mobile-links">
    <li class="mobile-dropdown">
      <a href="javascript:void(0)">Emizen AI</a>
      <ul class="mobile-dropdown-nav">
        <li><a href="https://emizentech.com/ai-integration-services.html" class="Award">AI Integration</a></li>
                     <li><a href="https://emizentech.com/ai-app-development-company.html" class="Partnership">AI App</a></li>
                     <li><a href="https://emizentech.com/ai-ml-consulting-services.html" class="Career">AI And ML</a></li>
                     <li><a href="https://emizentech.com/generative-ai-development-services.html" class="About">Generative Ai</a></li>
                     <li><a href="https://emizentech.com/ai-consulting-services.html" class="Award">AI Consulting</a></li>
                     <li><a href="https://emizentech.com/llm-development-services.html" class="Partnership">LLM Development</a></li>
                     <li><a href="https://emizentech.com/ai-agent-development.html" class="Career">AI Agent</a></li>
                     <li><a href="https://emizentech.com/chatbot-development-services.html" class="Contact Us">AI Chatbot</a></li>
                     <li><a href="https://emizentech.com/ai-software-development-services.html" class="About">AI Software</a></li>
      </ul>
    </li>
    <li class="mobile-dropdown">
      <a href="javascript:void(0)">Company</a>
      <ul class="mobile-dropdown-nav">
        <li><a href="https://emizentech.com/about-us.html" class="About">About</a></li>
        <li><a href="https://emizentech.com/awards.html" class="Award">Awards</a></li>
        <li><a href="https://emizentech.com/partnership.html" class="Partnership">Partnership</a></li>
                     <li><a href="https://emizentech.com/career.html" class="Career">Career</a></li>
                     <li><a href="https://emizentech.com/contact-us.html" class="Contact Us">Contact Us</a></li>
                     <li><a href="https://store.emizentech.com/" target="_blank" class="store storeweb">Store</a></li>
                     <li><a href="https://emizentech.com/blog/category/news" class="About">Tech-News</a></li>
                     <li><a href="https://emizentech.com/blog/">Blogs</a></li>
                     <li><a href="https://emizentech.com/whitepaper.html" class="Award">Whitepaper</a></li>
                     <li><a href="https://emizentech.com/case-studies.html">Case Studies</a></li>
                     <li><a href="https://emizentech.com/portfolio.html">Portfolio</a></li>
      </ul>
    </li>
    <li class="mobile-dropdown">
      <a href="javascript:void(0)">Services</a>
      <ul class="mobile-dropdown-nav">
        <li><a href="https://emizentech.com/mobile-app-development.html">Mobile App Development</a></li>
                      <li><a href="https://emizentech.com/wearable-app-development-services.html">Wearable App Development</a></li>
                      <li><a href="https://emizentech.com/android-app-development-services.html">Android App Development</a></li>
                      <li><a href="https://emizentech.com/ios-app-development-services.html">iOS App Development</a></li>
                      <li><a href="https://emizentech.com/hybrid-mobile-app-development-services.html">Hybrid App Development</a></li>
                      <li><a href="https://emizentech.com/flutter-app-development.html">Flutter App Development</a></li>
                      <li><a href="https://emizentech.com/react-native-app-development-services.html">React Native App Development</a></li>
                      <li><a href="https://emizentech.com/ecommerce-development.html">E-commerce Development</a></li>
                      <li><a href="https://emizentech.com/ecommerce-app-development.html">E-commerce App Development</a></li>
                      <li><a href="https://emizentech.com/software-development-services.html">Software Development Services</a></li>
                      <li><a href="https://emizentech.com/software-testing.html">Software Testing & QA</a></li>
                      <li><a href="https://emizentech.com/web-development.html">Web Development Services</a></li>
                      <li><a href="https://emizentech.com/web-design.html">Web Designing</a></li>
                      <li><a href="https://emizentech.com/healthcare-software-development.html">Healthcare Software Development</a></li>
                      <li><a href="https://emizentech.com/cms-development-services.html">CMS Development Services</a></li>
                      <li><a href="https://emizentech.com/crm-software-development.html">CRM Software Development</a></li>
                      <li><a href="https://emizentech.com/erp-software-development-services.html">ERP Software Development</a></li>
                      <li><a href="https://emizentech.com/data-analytic/data-analytics-services.html">Data Analytics Services</a></li>
                      <li><a href="https://emizentech.com/iot-internet-of-things-solutions.html">IoT Development Services</a></li>
                      <li><a href="https://emizentech.com/low-code-development.html">Low Code / No Code Development</a></li>
                      <li><a href="https://emizentech.com/software-testing.html">Software Testing & Quality Assurance Service</a></li>
      </ul>
    </li>
    <li class="mobile-dropdown">
      <a href="javascript:void(0)">Technologies</a>
      <ul class="mobile-dropdown-nav">
       <li><a href="https://emizentech.com/microsoft-power-bi-services.html">Microsoft Power BI</a></li>
                      <li><a href="https://emizentech.com/microsoft-powerapps-development.html">Microsoft PowerApps</a></li>
                      <li><a href="https://emizentech.com/shopify-development.html">Shopify</a></li>
                      <li><a href="https://emizentech.com/shopify-plus-development-services.html">Shopify Plus</a></li>
                      <li><a href="https://emizentech.com/magento-development-services.html">Magento</a></li>
                      <li><a href="https://emizentech.com/adobe-commerce-development-company.html">Adobe Commerce</a></li>
                      <li><a href="https://emizentech.com/shopware-development.html">Shopware</a></li>
                      <li><a href="https://emizentech.com/woocommerce-development.html">WooCommerce</a></li>
                      <li><a href="https://emizentech.com/bigcommerce-development.html">BigCommerce</a></li>
                      <li><a href="https://emizentech.com/prestashop-development.html">Prestashop</a></li>
                      <li><a href="https://emizentech.com/opencart-ecommerce-development.html">OpenCart</a></li>
                      <li><a href="https://emizentech.com/salesforce.html">Salesforce</a></li>
                      <li><a href="https://emizentech.com/odoo-development-company.html">Odoo</a></li>
                      <li><a href="https://emizentech.com/creatio-development-services.html">Creatio</a></li>
      </ul>
    </li>
    <li class="mobile-dropdown">
      <a href="javascript:void(0)">Industries</a>
      <ul class="mobile-dropdown-nav">
        <li><a href="https://emizentech.com/retail-software-development.html">Retail Software</a></li>
                      
                      <li><a href="https://emizentech.com/food-delivery-app-development.html">Food Delivery App</a></li>
                      <li><a href="https://emizentech.com/automotive-industry.html">Automotive</a></li>
                      <li><a href="https://emizentech.com/media-entertainment.html">Media & Entertainment</a></li>
                      <li><a href="https://emizentech.com/events-tickets.html">Ticketing & Event</a></li>
                      <li><a href="https://emizentech.com/realestate-solution.html">Real Estate</a></li>
                      <li><a href="https://emizentech.com/fitness-app-development-company.html">Fitness App Development</a></li>
                      <li><a href="https://emizentech.com/logistic-transportation.html">Logistic & Transport</a></li>
                      <li><a href="https://emizentech.com/education-app-development.html">Education App</a></li>
                      <li><a href="https://emizentech.com/fintech-software-development.html">Fintech Software</a></li>
                      <li><a href="https://emizentech.com/sports-application-development.html">Sports</a></li>
                      <li><a href="https://emizentech.com/fantasy-sports-app-development.html">Fantasy Sports</a></li>
                      <li><a href="https://emizentech.com/game-development-company.html">Gaming App</a></li>
                      <li><a href="https://emizentech.com/golf-mobile-app-development-company.html">Golf Mobile App</a></li>
                      <li><a href="https://emizentech.com/industries/on-demand-app-development/">On-Demand</a></li>
                     <li><a href="https://emizentech.com/dating-app-development-company.html">Dating App</a></li>
                    <li><a href="https://emizentech.com/pet-care-app-development-company.html">Petcare App</a></li>
                    <li><a href="https://emizentech.com/video-streaming-app-development-company.html">Video Streaming App</a></li>
               
                    <li><a href="https://emizentech.com/industries/travel-app-development/">Travel App</a></li>
                    <li><a href="https://emizentech.com/industries/social-media-app-development/">Social Media App</a></li>
                    <li><a href="https://emizentech.com/industries/startup-app-development/">Startup App</a></li>
                    <li><a href="https://emizentech.com/car-service-app-development-company.html">Car Service App</a></li>
                    <li><a href="https://emizentech.com/fantasy-football-app-development-company.html">Fantasy Football App</a></li>
                    <li><a href="https://emizentech.com/loyalty-app-development-company.html">Loyalty App</a></li>
                    <li><a href="https://emizentech.com/salon-app-development-company.html">Salon App</a></li>
                    <li><a href="https://emizentech.com/lawyer-app-development-company.html">Lawyer App</a></li>
                    <li><a href="https://emizentech.com/onlyfans-clone-app-development.html">Onlyfans App</a></li>
                    <li><a href="https://emizentech.com/grocery-app-development.html">Grocery App</a></li>
      </ul>
    </li>
    <li class="mobile-dropdown">
      <a href="javascript:void(0)">Hire Developers</a>
      <ul class="mobile-dropdown-nav">
       <li><a href="https://emizentech.com/hire-android-app-developers.html">Hire Android Developers</a></li>
                     <li><a href="https://emizentech.com/hire-mobile-app-developers.html">Hire Mobile App Developers</a></li>
                     <li><a href="https://emizentech.com/hire-web-developers.html">Hire Web Developers</a></li>

                      <li><a href="https://emizentech.com/hire-developers.html">Hire Dedicated Developers</a></li>
                      <li><a href="https://emizentech.com/hire-ecommerce-developer.html">Hire Ecommerce Developers</a></li>
                      <li><a href="https://emizentech.com/hire-shopify-developer.html">Hire Shopify Developers</a></li>
                      <li><a href="https://emizentech.com/hire-shopware-developer.html">Hire Shopware Developers</a></li>
                      <li><a href="https://emizentech.com/hire-odoo-developer.html">Hire Odoo Developers</a></li>
                      <li><a href="https://emizentech.com/hire-servicenow-developers.html">Hire Servicenow Developers</a></li>
                      <li><a href="https://emizentech.com/hire-salesforce-developer.html">Hire Salesforce Developers</a></li>
                      <li><a href="https://emizentech.com/hire-python-developers.html">Hire Python Developers</a></li>
                      <li><a href="https://emizentech.com/hire-strapi-developers.html">Hire Strapi Developers</a></li>
                      <li><a href="https://emizentech.com/hire-google-cloud-developers.html">Hire Google Cloud Developers</a></li>
                      <li><a href="https://emizentech.com/hire-iphone-app-developers.html">Hire iOS Developers</a></li>
                      <li><a href="https://emizentech.com/hire-react-native-developers.html">Hire React Native Developers</a></li>
                      <li><a href="https://emizentech.com/hire-reactjs-developers.html">Hire React Developers</a></li>
                      <li><a href="https://emizentech.com/hire-laravel-developers.html">Hire Laravel Developers</a></li>
                      <li><a href="https://emizentech.com/hire-php-developers.html">Hire PHP Developers</a></li>
                      <li><a href="https://emizentech.com/hire-drupal-developers.html">Hire Drupal Developers</a></li>
                      <li><a href="https://emizentech.com/hire-xamarin-app-developers.html">Hire Xamarin Developers</a></li>
                      <li><a href="https://emizentech.com/hire-cakephp-developers.html">Hire CakePHP Developers</a></li>
                      <li><a href="https://emizentech.com/hire-power-bi-developers.html">Hire Power BI Developers</a></li>
                      <li><a href="https://emizentech.com/hire-ruby-on-rails-developers.html">Hire Ruby on Rails Developers</a></li>
                      <li><a href="https://emizentech.com/hire-asp-net-developers.html">Hire ASP.NET Developers</a></li>
                      <li><a href="https://emizentech.com/hire-codeigniter-developers.html">Hire CodeIgniter Developers</a></li>
                      <li><a href="https://emizentech.com/hire-woocommerce-developers.html">Hire WooCommerce Developers</a></li>
                      <li><a href="https://emizentech.com/hire-bigcommerce-developers.html">Hire BigCommerce Developers</a></li>
                      <li><a href="https://emizentech.com/hire-ionic-app-developers.html">Hire Ionic App Developers</a></li>
                      <li><a href="https://emizentech.com/hire-nodejs-developers.html">Hire Node.js Developers</a></li>
                      <li><a href="https://emizentech.com/hire-wordpress-developers.html">Hire WordPress Developers</a></li>
                      <li><a href="https://emizentech.com/hire-angularjs-developers.html">Hire AngularJS Developers</a></li>
                      <li><a href="https://emizentech.com/hire-full-stack-developers.html">Hire Full Stack Developers</a></li>
                      <li><a href="https://emizentech.com/hire-java-developers.html">Hire Java Developers</a></li>
                      <li><a href="https://emizentech.com/hire-magento-developer.html">Hire Magento Developers</a></li>
                      <li><a href="https://emizentech.com/hire-hybrid-developers.html">Hire Hybrid Developers</a></li>
                      <li><a href="https://emizentech.com/hire-bigcart-developers.html">Hire BigCart Developers</a></li>
                      <li><a href="https://emizentech.com/hire-oscommerce-developers.html">Hire osCommerce Developers</a></li>
                      <li><a href="https://emizentech.com/hire-joomla-developers.html">Hire Joomla Developers</a></li>
                      <li><a href="https://emizentech.com/hire-opencart-developer.html">Hire OpenCart Developers</a></li>
                      <li><a href="https://emizentech.com/hire-prestashop-developers.html">Hire PrestaShop Developers</a></li>
      </ul>
    </li>
    <li><a href="https://emizentech.com/blog/">Blog</a></li>
  </ul>

  <a href="https://emizentech.com/enquiry.html" class="mobile-cta">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M20.1 16.7v2.6c0 .9-.8 1.7-1.7 1.7h-.2c-2.7-.3-5.1-1.2-7.4-2.7-2.1-1.3-3.9-3.1-5.1-5.1-1.5-2.2-2.3-4.8-2.7-7.4 0-.9.6-1.8 1.5-1.9h2.7c.9 0 1.6.6 1.7 1.5 0 .9.3 1.6.6 2.4.3.6 0 1.4-.3 1.8l-1.1 1.1c1.2 2.1 3 3.9 5.1 5.1l1.1-1.1c.5-.4 1.2-.6 1.8-.3.8.3 1.5.5 2.4.6.9 0 1.5.9 1.5 1.7z" fill="#fff"/></svg>
    Enquiry Now
  </a>
</div>
  
<?php do_action('bunyad_pre_main_content'); ?>
