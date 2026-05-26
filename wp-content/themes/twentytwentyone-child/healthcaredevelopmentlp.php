<?php

/**
 * Template Name: healthcare Page Template
 */
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
       <link href="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123524" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/healthcare-template.css?5807" rel="stylesheet" type="text/css" media="all" />

 <style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    .site-main > *{margin-top:0;margin-bottom:0;}
    :root{--blue-primary:#1246BE;--blue-dark:#0a1f5c;--blue-mid:#1a56db;--blue-light:#3b82f6;--blue-accent:#06b6d4;--blue-pale:#EEF4FF;--blue-border:#c7d7ff;--white:#ffffff;--gray-50:#f8faff;--gray-100:#f0f4ff;--gray-200:#e2e8f0;--gray-600:#475569;--gray-700:#334155;--gray-900:#0f172a;--green:#10b981;--orange:#f59e0b;--red:#ef4444;--shadow-sm:0 2px 8px rgba(18,70,190,0.08);--shadow-md:0 8px 32px rgba(18,70,190,0.12);--shadow-lg:0 20px 60px rgba(18,70,190,0.18);--radius:12px;--radius-lg:20px;}
    html{scroll-behavior:smooth;}
    body{font-family:'Poppins',sans-serif;color:var(--gray-900);background:var(--white);overflow-x:hidden;}
    .container{margin-left: auto;margin-right: auto;}
    /* ── TOP BAR ── */
    .top-bar{background:var(--blue-dark);color:var(--white);padding:10px 0;font-size:13px;}
    .top-bar .container{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:8px;}
    .top-bar a{color:var(--white);text-decoration:none;}
    .top-bar .top-info{display:flex;gap:24px;align-items:center;}
    .top-bar .top-info span{display:flex;align-items:center;gap:6px;}
    .top-bar .top-badge{background:var(--green);color:#fff;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;animation:pulse 2s infinite;}
    .hero-content{max-width:880px;}
    @keyframes pulse{
      0%,100%{opacity:1}
      50%{opacity:.75}
    }

    /* ── HEADER ── */
    header{background:var(--white);box-shadow:0 2px 20px rgba(18,70,190,0.1);position:sticky;top:0;z-index:999;transition:all .3s;}
    header .container{display:flex;align-items:center;justify-content:space-between;padding:16px 20px;}
    .logo{display:flex;align-items:center;gap:10px;text-decoration:none;}
    .logo-icon{width:44px;height:44px;background:linear-gradient(135deg,var(--blue-primary),var(--blue-accent));border-radius:10px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:20px;font-weight:800;}
    .logo-text{font-size:20px;font-weight:700;color:var(--blue-dark);line-height:1.2;}
    .logo-text span{color:var(--blue-primary);}
    .logo-sub{font-size:11px;font-weight:400;color:var(--gray-600);}
    .header-cta{display:flex;align-items:center;gap:16px;}
    .header-phone{display:flex;align-items:center;gap:8px;font-size:15px;font-weight:600;color:var(--blue-dark);text-decoration:none;}
    .header-phone i{color:var(--green);font-size:18px;}
    .btn-primary{background:linear-gradient(135deg,var(--blue-primary),var(--blue-mid));color:#fff;padding:12px 24px;border-radius:8px;font-family:'Poppins',sans-serif;font-size:14px;font-weight:600;border:none;cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:all .3s;box-shadow:0 4px 15px rgba(18,70,190,0.3);}
    .btn-primary:hover{transform:translateY(-2px);box-shadow:0 8px 25px rgba(18,70,190,0.4);}
    .btn-secondary{background:transparent;color:var(--blue-primary);padding:11px 24px;border-radius:8px;font-family:'Poppins',sans-serif;font-size:14px;font-weight:600;border:2px solid var(--blue-primary);cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:all .3s;}
    .btn-secondary:hover{background:var(--blue-primary);color:#fff;}
    .btn-white{background:#fff;color:var(--blue-primary);padding:14px 32px;border-radius:8px;font-family:'Poppins',sans-serif;font-size:15px;font-weight:700;border:none;cursor:pointer;text-decoration:none;display:inline-flex;align-items:center;gap:8px;transition:all .3s;box-shadow:0 4px 20px rgba(0,0,0,.2);}
    .btn-white:hover{transform:translateY(-2px);box-shadow:0 8px 30px rgba(0,0,0,.25);}

    /* ── HERO ── */
    .hero{background:linear-gradient(135deg,var(--blue-dark) 0%,var(--blue-primary) 60%,var(--blue-accent) 100%);position:relative;overflow:hidden;padding:70px 0 80px;  margin-top: 140px;}
    .hero::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width=!string!height=!string!viewBox=!string!xmlns=!string!%3E%3Cg fill=!string!fill-rule=!string!%3E%3Cg fill=!string!fill-opacity=!string!%3E%3Ccircle cx=!string!cy=!string!r=!string!/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}
    .hero-blob{position:absolute;border-radius:50%;filter:blur(80px);opacity:.15;}
    .hero-blob-1{width:500px;height:500px;background:var(--blue-accent);top:-200px;right:-100px;}
    .hero-blob-2{width:400px;height:400px;background:#7c3aed;bottom:-150px;left:-100px;}
    .hero .container{display:grid;grid-template-columns:1fr 420px;gap:60px;align-items:center;position:relative;}
    .hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.15);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,.25);color:#fff;padding:8px 18px;border-radius:30px;font-size:13px;font-weight:500;margin-bottom:20px;}
    .hero-badge i{color:var(--orange);}
    .hero h1{font-size:46px;font-weight:600;color:#fff;line-height:1.35;margin-bottom:20px;}
    .hero h1 span{color:#67e8f9;}
    .hero-sub{font-size:17px;color:rgba(255,255,255,.85);line-height:1.7;margin-bottom:30px;max-width:660px;}
    .hero-chips{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:36px;}
    .chip{background:rgba(255,255,255,.12);color:#fff;padding:6px 14px;border-radius:20px;font-size:13px;font-weight:500;border:1px solid rgba(255,255,255,.2);display:flex;align-items:center;gap:6px;}
    .chip i{color:#86efac;font-size:12px;}
    .hero-actions{display:flex;gap:14px;flex-wrap:wrap;}
    .hero-trust{display:flex;align-items:center;gap:16px;margin-top:28px;}
    .hero-trust-item{display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.8);font-size:13px;}
    .hero-trust-item i{color:#fbbf24;}
    .custom-header {
    position: fixed;
    width: 100%;
    left: 0;
    top: 0;
}

#contact-form{
    scroll-margin-top: 150px; /* adjust according to header height */
}
    /* ── HERO FORM ── */
    .hero-form-card{background:var(--white);border-radius:var(--radius-lg);padding:24px;box-shadow:0 30px 80px rgba(0,0,0,.25);position:relative;z-index:2;}
    .form-title{font-size:20px;font-weight:700;color:var(--blue-dark);margin-bottom:6px;}
    .form-sub{font-size:13px;color:var(--gray-600);margin-bottom:12px;}
    .form-sub span{color:var(--green);font-weight:600;}
    .form-group{margin-bottom:16px;position:relative;}
    .form-group label{display:block;font-size:12px;font-weight:600;color:var(--gray-700);margin-bottom:6px;text-transform:uppercase;letter-spacing:.5px;}
    .form-group input,.form-group select,.form-group textarea{width:100%;padding:13px 16px 13px 42px;border:2px solid var(--gray-200);border-radius:8px;font-family:'Poppins',sans-serif;font-size:14px;color:var(--gray-900);transition:all .3s;background:var(--white);outline:none;}
    .form-group input:focus,.form-group select:focus,.form-group textarea:focus{border-color:var(--blue-primary);box-shadow:0 0 0 4px rgba(18,70,190,.08);}
    .form-group .field-icon{position:absolute;left:14px;top:38px;color:var(--blue-light);font-size:15px;}
    .form-group select{padding-left:42px;appearance:none;cursor:pointer;}
    .form-group textarea{padding-left:16px;resize:vertical;min-height:80px;}
    .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;}
    .btn-form{width:100%;padding:16px;background:linear-gradient(135deg,var(--blue-primary),var(--blue-mid));color:#fff;border:none;border-radius:10px;font-family:'Poppins',sans-serif;font-size:15px;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px;margin-top:8px;transition:all .3s;box-shadow:0 6px 20px rgba(18,70,190,.35);position:relative;overflow:hidden;}
    .btn-form::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.2),transparent);transition:left .5s;}
    .btn-form:hover::before{left:100%;}
    .btn-form:hover{transform:translateY(-2px);box-shadow:0 10px 30px rgba(18,70,190,.45);}
    .form-guarantee{display:flex;align-items:center;gap:8px;justify-content:center;margin-top:14px;font-size:12px;color:var(--gray-600);}
    .form-guarantee i{color:var(--green);}

    /* ── TRUST BAR ── */
    .trust-bar{background:var(--white);padding:28px 0;border-bottom:1px solid var(--gray-200);box-shadow:var(--shadow-sm);}
    .trust-bar .container{display:flex;align-items:center;justify-content:space-around;flex-wrap:wrap;gap:24px;}
    .trust-item{display:flex;align-items:center;gap:12px;color:var(--gray-700);font-size:14px;font-weight:500;}
    .trust-icon{width:46px;height:46px;background:var(--blue-pale);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:20px;color:var(--blue-primary);}
    .symbol,.trust-stat{font-size:22px;font-weight:800;color:var(--blue-primary);display:block;}

    /* ── SECTIONS ── */
    section{padding:65px 0;}
    .section-label{display:inline-flex;align-items:center;gap:8px;background:var(--blue-pale);color:var(--blue-primary);padding:6px 16px;border-radius:30px;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:1px;margin-bottom:14px;}
    h2.section-title{font-size:38px;font-weight:600;color:var(--blue-dark);line-height:1.25;margin-bottom:16px;}
    h2.section-title span{color:var(--blue-primary);}
    .section-desc{font-size:16px;color:var(--gray-600);line-height:1.75;max-width:640px;}
    .section-head{margin-bottom:25px;}
    .text-center{text-align:center;}
    .text-center .section-desc{margin:0 auto;}
    .section-title.text-md-left::after {
        left: 0;
        right: auto;
    }
    /* ── SERVICES GRID ── */
    .services-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;}
    .service-card{background:var(--white);border-radius:var(--radius-lg);padding:36px 28px;border:1.5px solid var(--blue-border);transition:all .3s;position:relative;overflow:hidden;}
    .service-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(135deg,var(--blue-primary),var(--blue-accent));transform:scaleX(0);transform-origin:left;transition:transform .3s;}
    .service-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:transparent;}
    .service-card:hover::before{transform:scaleX(1);}
    .service-card:hover .service-icon i{color:#fff;transform:scale(1.1);}
    .service-icon{width:60px;height:60px;border-radius:14px;background:var(--blue-pale);display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:20px;transition:all .3s;}
    .service-card:hover .service-icon{transform:rotate(8deg);background:var(--blue-primary);color:#fff;}
    .service-card h3{font-size:18px;font-weight:600;color:var(--blue-dark);margin-bottom:12px;}
    .service-card p{font-size:14px;color:var(--gray-600);line-height:1.7;margin-bottom:16px;}
    .service-tags{display:flex;flex-wrap:wrap;gap:6px;}
    .stag{background:var(--blue-pale);color:var(--blue-primary);padding:3px 10px;border-radius:12px;font-size:11px;font-weight:600;}

    /* ── FEATURES STRIP ── */
    .features-strip{background:var(--gray-100);}
    .features-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;}
    .feat-card{background:var(--white);border-radius:var(--radius);padding:28px 24px;text-align:center;box-shadow:var(--shadow-sm);transition:all .3s;}
    .feat-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);}
    .feat-card .feat-num{font-size:40px;font-weight:600;color:var(--blue-primary);line-height:1;margin-bottom:6px;}
    .feat-card h4{font-size:14px;font-weight:600;color:var(--gray-700);}

    /* ── WHO WE SERVE ── */
    .serve-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;}
    .serve-card{background:var(--white);border-radius:var(--radius);padding:28px 20px;text-align:center;border:1.5px solid var(--blue-border);transition:all .3s;cursor:default;}
    .serve-card:hover{background:var(--blue-primary);border-color:var(--blue-primary);transform:translateY(-4px);}
    .serve-card:hover *{color:#fff!important;}
    .serve-card .serve-icon{font-size:36px;margin-bottom:14px;display:block;}
    .serve-card h4{font-size:15px;font-weight:700;color:var(--blue-dark);margin-bottom:8px;}
    .serve-card p{font-size:12px;color:var(--gray-600);line-height:1.6;}
    .serve-card .serve-icon img {
        max-width: 50px;
    }
    /* ── PROCESS ── */
    .process-bg{background:linear-gradient(135deg,var(--blue-dark) 0%,var(--blue-primary) 100%);}
    .process-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:0;position:relative;}
    .process-grid::before{content:'';position:absolute;top:46px;left:12.5%;right:12.5%;height:2px;background:rgba(255,255,255,.2);}
    .process-step{text-align:center;padding:0 20px;}
    .step-num{width:56px;height:56px;background:rgba(255,255,255,.15);backdrop-filter:blur(10px);border:2px solid rgba(255,255,255,.3);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:20px;font-weight:800;color:#fff;margin:0 auto 20px;position:relative;z-index:1;}
    .process-step h3{font-size:16px;font-weight:700;color:#fff;margin-bottom:10px;}
    .process-step p{font-size:13px;color:rgba(255,255,255,.75);line-height:1.6;}

    /* ── WHY US ── */
    .why-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
    .why-image-block{position:relative;}
    .why-main-img{width:100%;border-radius:var(--radius-lg);background:linear-gradient(135deg,var(--blue-pale),var(--blue-border));height:420px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;}
    .why-main-img .big-icon{font-size:120px;opacity:.15;}
    .why-float-badge{position:absolute;background:var(--white);border-radius:12px;padding:14px 20px;box-shadow:var(--shadow-md);display:flex;align-items:center;gap:12px;min-width:180px;}
    .why-float-badge.top-right{top:30px;right:-20px;}
    .why-float-badge.bottom-left{bottom:30px;left:-20px;}
    .badge-icon{font-size:28px;}
    .badge-text strong{display:block;font-size:18px;font-weight:800;color:var(--blue-primary);}
    .badge-text span{font-size:11px;color:var(--gray-600);}
    .why-list{list-style:none;display:flex;flex-direction:column;gap:20px;margin:28px 0;padding-left: 0}
    .why-list li{display:flex;gap:16px;align-items:flex-start;}
    .why-check{width:28px;height:28px;min-width:28px;background:var(--blue-pale);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--blue-primary);font-size:13px;margin-top:2px;}
    .why-list h4{font-size:15px;font-weight:700;color:var(--blue-dark);margin-bottom:4px;}
    .why-list p{font-size:13px;color:var(--gray-600);line-height:1.6;}

    /* ── COMPLIANCE ── */
    .compliance-bg{background:var(--blue-pale);}
    .compliance-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
    .comp-card{background:var(--white);border-radius:var(--radius);padding:30px 24px;text-align:center;box-shadow:var(--shadow-sm);transition:all .3s;}
    .comp-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);}
    .comp-card i{font-size:40px;color:var(--blue-primary);margin-bottom:16px;display:block;}
    .comp-card h4{font-size:16px;font-weight:700;color:var(--blue-dark);margin-bottom:10px;}
    .comp-card p{font-size:13px;color:var(--gray-600);line-height:1.6;}

    /* ── TESTIMONIALS ── */
    .testimonials-bg{background:var(--gray-100);}
    .testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;}
    .testi-card{background:var(--white);border-radius:var(--radius-lg);padding:32px 28px;box-shadow:var(--shadow-sm);border:1.5px solid var(--blue-border);transition:all .3s;position:relative;}
    .testi-card:hover{box-shadow:var(--shadow-md);transform:translateY(-4px);}
    .testi-quote{position:absolute;top:24px;right:28px;font-size:48px;color:var(--blue-pale);font-family:Georgia,serif;line-height:1;}
    .stars{color:var(--orange);font-size:14px;margin-bottom:14px;letter-spacing:2px;}
    .testi-text{font-size:14px;color:var(--gray-700);line-height:1.75;margin-bottom:20px;font-style:italic;}
    .testi-author{display:flex;align-items:center;gap:12px;}
    .author-avatar{width:44px;height:44px;border-radius:50%;background:linear-gradient(135deg,var(--blue-primary),var(--blue-accent));display:flex;align-items:center;justify-content:center;color:#fff;font-size:16px;font-weight:700;}
    .author-name{font-size:14px;font-weight:700;color:var(--blue-dark);}
    .author-role{font-size:12px;color:var(--gray-600);}

    /* ── FAQ ── */
    .faq-list{max-width:780px;margin:0 auto;}
    .faq-item{border:1.5px solid var(--blue-border);border-radius:var(--radius);margin-bottom:12px;overflow:hidden;transition:all .3s;}
    .faq-item:hover{border-color:var(--blue-primary);}
    .faq-q{display:flex;justify-content:space-between;align-items:center;padding:20px 24px;cursor:pointer;user-select:none;background:var(--white);}
    .faq-q h4{font-size:15px;font-weight:600;color:var(--blue-dark);flex:1;padding-right:20px;}
    .faq-icon{width:30px;height:30px;background:var(--blue-pale);border-radius:8px;display:flex;align-items:center;justify-content:center;color:var(--blue-primary);font-size:14px;transition:all .3s;min-width:30px;}
    .faq-item.open .faq-icon{background:var(--blue-primary);color:#fff;transform:rotate(45deg);}
    .faq-a{padding:0 24px;max-height:0;overflow:hidden;transition:all .4s ease;font-size:14px;color:var(--gray-600);line-height:1.75;}
    .faq-item.open .faq-a{max-height:300px;padding:0 24px 20px;}

    /* ── CTA BAND ── */
    .cta-band{border-radius:25px;background:linear-gradient(135deg,var(--blue-dark),var(--blue-primary),var(--blue-accent));padding:80px 0;text-align:center;position:relative;overflow:hidden;max-width:1200px!important;margin:60px auto 0;}
    .cta-band::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width=!string!height=!string!viewBox=!string!xmlns=!string!%3E%3Cg fill=!string!%3E%3Ccircle cx=!string!cy=!string!r=!string!fill=!string!opacity=!string!/%3E%3C/g%3E%3C/svg%3E");}
    .cta-band h2{font-size:40px;font-weight:600;color:#fff;margin-bottom:16px;position:relative;}
    .cta-band p{font-size:17px;color:rgba(255,255,255,.85);margin-bottom:36px;position:relative;}
    .cta-actions{display:flex;gap:16px;justify-content:center;flex-wrap:wrap;position:relative;}

    /* ── FOOTER ── */
    footer{background:var(--blue-dark);color:rgba(255,255,255,.7);}
    .footer-main{padding:60px 0 40px;}
    .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:40px;}
    .footer-brand p{font-size:13px;line-height:1.75;margin:16px 0;}
    .footer-socials{display:flex;gap:10px;}
    .footer-socials a{width:36px;height:36px;background:rgba(255,255,255,.1);border-radius:8px;display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.7);transition:all .3s;font-size:15px;}
    .footer-socials a:hover{background:var(--blue-primary);color:#fff;}
    .footer-col h5{font-size:14px;font-weight:700;color:#fff;margin-bottom:16px;}
    .footer-col ul{list-style:none;display:flex;flex-direction:column;gap:10px;}
    .footer-col ul li a{font-size:13px;color:rgba(255,255,255,.65);text-decoration:none;transition:color .3s;}
    .footer-col ul li a:hover{color:var(--blue-accent);}
    .footer-bottom{border-top:1px solid rgba(255,255,255,.1);padding:20px 0;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;font-size:12px;}

    /* ── FLOATING CTA ── */
    .float-cta{position:fixed;bottom:30px;right:30px;z-index:1000;display:flex;flex-direction:column;gap:12px;align-items:flex-end;}
    .float-btn{width:56px;height:56px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:22px;color:#fff;border:none;cursor:pointer;box-shadow:0 8px 24px rgba(0,0,0,.25);transition:all .3s;text-decoration:none;}
    .float-btn:hover{transform:scale(1.1);}
    .float-phone{background:var(--green);}
    .float-chat{background:var(--blue-primary);}
    .float-label{background:var(--blue-dark);color:#fff;padding:5px 12px;border-radius:20px;font-size:11px;font-weight:600;white-space:nowrap;}
    .float-row{display:flex;align-items:center;gap:10px;}

    /* ── NOTIFICATION TOAST ── */
    .toast{position:fixed;bottom:30px;left:30px;background:var(--white);border-radius:12px;padding:16px 20px;box-shadow:0 10px 40px rgba(0,0,0,.15);display:flex;align-items:center;gap:14px;border-left:4px solid var(--green);z-index:998;transform:translateX(-120%);transition:transform .5s cubic-bezier(.34,1.56,.64,1);max-width:320px;}
    .toast.show{transform:translateX(0);}
    .toast-icon{font-size:24px;}
    .toast-text strong{display:block;font-size:14px;font-weight:700;color:var(--blue-dark);}
    .toast-text span{font-size:12px;color:var(--gray-600);}

    /* ── SCROLL REVEAL ── */
    .reveal{opacity:0;transform:translateY(30px);transition:all .7s cubic-bezier(.25,.46,.45,.94);}
    .reveal.visible{opacity:1;transform:translateY(0);}
    .reveal-left{opacity:0;transform:translateX(-40px);transition:all .7s cubic-bezier(.25,.46,.45,.94);}
    .reveal-left.visible{opacity:1;transform:translateX(0);}
    .reveal-right{opacity:0;transform:translateX(40px);transition:all .7s cubic-bezier(.25,.46,.45,.94);}
    .reveal-right.visible{opacity:1;transform:translateX(0);}

    /* ── SUCCESS MESSAGE ── */
    .success-msg{display:none;text-align:center;padding:24px;animation:fadeIn .5s ease;}
    .success-msg i{font-size:48px;color:var(--green);margin-bottom:16px;}
    .success-msg h3{font-size:20px;font-weight:700;color:var(--blue-dark);margin-bottom:8px;}
    .success-msg p{font-size:14px;color:var(--gray-600);}
    .partner-sec{font-size: 1.1rem; color: #000; max-width: 600px; margin: 0 auto 36px; line-height: 1.7;}
    @keyframes fadeIn{
      from{opacity:0;transform:scale(.9);}
      to{opacity:1;transform:scale(1);}
    }

    /* ── RESPONSIVE ── */
    @media (max-width:1480px){
        .hero h1{font-size:38px;line-height: 1.50;margin-bottom: 15px;}
        h2.section-title,.cta-band h2{font-size: 32px;line-height: 44px;}
    .conntect--us .consulting--container h3 {font-size: 32px;line-height:36px;} 
    .conntect--us .consulting--container h3 strong {
      font-size:32px;line-height:36px;
    }
        .feat-card .feat-num{font-size: 32px;}

    }
    @media (max-width:1199px){
        .hero-trust {
      flex-wrap: wrap;
    }
    .hero-trust-item {
      width: 100%;gap: 2px;
    }
    .trust-bar .container {
        gap: 34px 10px;
    }
    .cta-band{margin-top: 40px;padding:25px 0;}
    section {
        padding: 45px 0;
    }
    .partner-sec{font-size:16px;max-width:100%; margin: 0 auto 15px; line-height: 1.7;}
    .service-card {
        padding: 22px 18px;
     }
     .hero h1 {
        font-size: 36px;
        line-height: 1.30;
     }
     .custom-header nav.navbar.navbar-expand-lg {
        padding: 10px 0;
        background: #fff;
    }
    }
    @media (max-width:1024px){
        .hero-sub {
        font-size: 16px;
        line-height: 1.7;
        margin-bottom: 15px;
        max-width: 100%;
    }.conntect--us .consulting--container h3 strong,
    .conntect--us .consulting--container h3 {
        font-size: 23px;
        line-height: 36px;
    }
    .hero-blob-2,.hero-blob-1{display: none;}
    .hero .container{gap:30px;}
      .hero .container{grid-template-columns:1fr;}
      .hero-form-card{max-width:500px;}
      .services-grid{grid-template-columns:repeat(2,1fr);}
      .features-grid{grid-template-columns:repeat(2,1fr);}
      .serve-grid{grid-template-columns:repeat(2,1fr);}
      .process-grid{grid-template-columns:repeat(2,1fr);}
      .why-grid{grid-template-columns:1fr;}
      .compliance-grid{grid-template-columns:1fr 1fr;}
      .testi-grid{grid-template-columns:1fr 1fr;}
      .footer-grid{grid-template-columns:1fr 1fr;}
    .hero{padding-bottom: 50px}
    .top-bar{display: none;}
    .hero {
        text-align: center;
    padding: 60px 0 50px;
    margin-top: 90px;
    }
    .hero-chips, .hero-actions, .hero-trust,.hero-trust-item {
    justify-content: center;
}
.cta-band {max-width: 80%!important;}
        }
         

        @media (max-width:767px){
            .section-pad .btn-primary-custom {
            margin: 10px 0;
        }
        .service-tags{justify-content: center;}
        .trust-item {
          flex-direction: column;
          align-items: center;
          text-align: center;
          max-width: calc(50% - 5px);
        }
        .section-title.text-md-left::after {
            left: 0;
            right: 0;
        }
        .trust-bar .container {
          padding: 0;
        }

          .hero h1{font-size:26px;}
          .cta-band h2, h2.section-title{font-size:24px;line-height: 36px;}
          .services-grid,.features-grid,.serve-grid,.process-grid,.testi-grid,.compliance-grid{grid-template-columns:1fr;}
          .header-phone{display:none;}
          .form-grid{grid-template-columns:1fr;}
          .top-bar .top-info{gap:12px;font-size:11px;}
          .footer-grid{grid-template-columns:1fr;}
          .float-cta{bottom:20px;right:16px;}
          .cta-band p{font-size: 16px;}
          .header-call-link {
                font-size: 0 !important;
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
.header-call-link img {
    margin-right: 0;filter: brightness(0) invert(1);
}
        }
        section.conntect--us .contact-info .border-space img {
        margin-right: 10px;
        max-width: 60px;
    }
    .watsappic {
        position: fixed;
        z-index: 9;
        bottom: 10px;
        left: 10px;
        height: auto;
        float: left;
    }
.zls-sptwndw.siqembed.siqtrans.zsiq-mobhgt.zsiq-newtheme.siq_rht.zsiq_size2.siqanim {
    display: none !important;
}
    .zsiq_floatmain.zsiq_theme1.siq_bR {
    display: none !important;
}
</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
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

<!-- ── TOP BAR ── -->
<div class="top-bar">
  <div class="container">
    <div class="top-info">
      <span><i class="fas fa-map-marker-alt"></i>1 Barratt St
Suite #1100
Hurstville, NSW 2220</span>
      <span><i class="fas fa-clock"></i> Mon–Fri 9am–6pm AEST</span>
    </div>
    <span class="top-badge"><i class="fas fa-circle" style="font-size:7px"></i> &nbsp;5 Spots Left This Month</span>
  </div>
</div>
 
                    <nav class="navbar navbar-expand-lg magento-navbar">
                        <div class="container">
                            
                        <a class="navbar-brand d-inline-block" href="https://emizentech.com/"><svg class="d-block" width="210" height="49" viewBox="0 0 210 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_124_7422)">
                                <path d="M22.1432 41.124C39.4202 41.7042 45.8967 31.091 45.8967 31.091C54.4884 20.197 41.9659 7.67447 41.9659 7.67447C44.0436 10.8566 42.3777 14.9184 42.3777 14.9184C40.2251 21.8067 30.6226 25.7563 30.6226 25.7563C20.833 30.0428 12.26 29.5187 12.26 29.5187C11.8856 41.124 22.1432 41.124 22.1432 41.124Z" fill="#007DB2"></path>
                                <path d="M34.3854 2.41465C32.4762 1.19796 29.0507 0.26205 26.5051 0.0935861C10.501 -1.17925 0.542844 10.9876 0.0187329 22.7427C-0.205886 29.1256 2.17133 34.7411 3.7811 36.8188C2.78903 33.6367 2.3398 31.2595 2.50826 28.302C3.50033 10.5758 19.7103 -0.598989 34.3854 2.41465Z" fill="#007DB2"></path>
                                <path d="M30.7353 18.7557L31.0161 18.4C36.5193 11.5679 33.6741 7.91781 32.9815 7.44985C30.3797 5.12879 24.9888 5.87752 21.0393 9.60245C12.0171 18.4 12.2417 28.6015 12.2417 28.6015C12.2417 28.6015 21.1142 28.7138 30.7353 18.7557Z" fill="#007DB2"></path>
                                <path d="M49.2106 24.9514C48.5742 32.1954 43.8198 37.5301 43.8198 37.5301C37.6802 44.7179 29.388 45.9907 29.388 45.9907C21.3953 48.0684 14.2637 46.103 14.2637 46.103C22.0317 49.5846 28.2836 48.4241 28.2836 48.4241C40.0387 46.7956 45.0365 38.466 45.0365 38.466C49.5663 31.7274 49.2106 24.9514 49.2106 24.9514Z" fill="#007DB2"></path>
                                <path d="M58.2885 22.3496C58.588 24.1653 59.3741 25.7002 60.7218 26.973C62.0508 28.2459 63.5109 28.8636 65.0458 28.8636C66.3748 28.8636 67.5353 28.5079 68.5648 27.834C69.5943 27.104 70.4553 26.0745 71.1853 24.6145L72.5143 25.1573C71.8405 26.7297 70.942 27.9464 69.7253 28.8074C68.3963 29.7807 66.8614 30.2674 65.0458 30.2674C62.8557 30.2674 60.9652 29.4813 59.3928 27.9651C57.7456 26.3179 56.9033 24.2589 56.9033 21.7693C56.9033 19.5793 57.5772 17.6888 58.85 16.0603C60.3662 14.1697 62.4439 13.1964 65.0458 13.1964C67.3481 13.1964 69.2948 14.0387 70.8859 15.6859C72.4582 17.3331 73.1882 19.336 73.1882 21.7693V22.4432H58.2885V22.3496ZM71.7843 21.0206C71.4848 18.9616 70.6238 17.3705 69.1638 16.1539C67.8909 15.1244 66.5432 14.5815 65.027 14.5815C63.2675 14.5815 61.7513 15.1805 60.4598 16.3972C59.1869 17.6139 58.4569 19.1301 58.2136 21.0206H71.7843Z" fill="#007DB2"></path>
                                <path d="M75.4346 18.5311C75.4346 16.7715 76.0336 15.4238 77.2502 14.4505C78.2798 13.6082 79.5526 13.1776 81.0126 13.1776C82.1731 13.1776 83.1465 13.4771 83.9888 14.02C84.8311 14.5628 85.4488 15.349 85.8045 16.3972C86.1601 15.4238 86.7778 14.6377 87.6202 14.02C88.4625 13.4771 89.5107 13.1776 90.6525 13.1776C92.1125 13.1776 93.3292 13.6082 94.3587 14.3943C95.5754 15.3677 96.1744 16.7715 96.1744 18.5311V29.893H94.7705V18.4562C94.7705 17.1272 94.34 16.079 93.4415 15.4238C92.7115 14.8248 91.7943 14.5815 90.6525 14.5815C89.492 14.5815 88.4625 14.9372 87.6763 15.6672C86.8901 16.3972 86.4596 17.4267 86.4596 18.7744V29.893H85.0558V18.8306C85.0558 17.5016 84.6252 16.4533 83.8391 15.7233C83.0529 14.9933 82.0796 14.5628 80.919 14.5628C79.8334 14.5628 78.86 14.8623 78.13 15.4051C77.2128 16.1351 76.7261 17.1646 76.7261 18.5123V29.8743H75.3223V18.5311H75.4346Z" fill="#007DB2"></path>
                                <path d="M99.1506 10.1266C98.8511 10.1266 98.5516 10.0143 98.3083 9.82709C98.065 9.58376 98.0088 9.34042 98.0088 8.98477C98.0088 8.68528 98.1211 8.38579 98.3083 8.14245C98.5516 7.89911 98.795 7.7868 99.1506 7.7868C99.5063 7.7868 99.7496 7.89911 99.9929 8.14245C100.236 8.38579 100.292 8.62913 100.292 8.98477C100.292 9.34042 100.18 9.58376 99.9929 9.82709C99.7683 10.0143 99.525 10.1266 99.1506 10.1266ZM98.4767 29.8931V13.5333H99.8806V29.8931H98.4767Z" fill="#007DB2"></path>
                                <path d="M114.05 29.8931H103.287C102.856 29.8931 102.557 29.7807 102.314 29.4625C102.07 29.2192 101.958 28.8636 101.958 28.4892C101.958 28.0587 102.389 27.2725 103.287 26.112L110.587 17.4829C110.887 17.1272 111.186 16.7529 111.504 16.3972C111.804 16.0416 111.935 15.6672 111.935 15.3115C111.935 15.0682 111.635 15.0121 111.093 15.0121H110.606H103.006V13.6082H111.935C112.534 13.6082 112.964 13.7954 113.339 14.2072C113.582 14.5067 113.694 14.75 113.694 14.9933C113.694 15.349 113.694 15.5923 113.638 15.7795C113.582 15.9667 113.526 16.1351 113.339 16.3785L104.653 26.9543C104.466 27.1415 104.354 27.3099 104.223 27.441C103.98 27.6843 103.867 27.9276 103.867 28.1148C103.867 28.3582 104.223 28.4143 104.841 28.4143H114.013V29.8743H114.05V29.8931Z" fill="#007DB2"></path>
                                <path d="M117.158 22.3496C117.457 24.1653 118.243 25.7002 119.591 26.973C120.92 28.2459 122.38 28.8636 123.915 28.8636C125.244 28.8636 126.404 28.5079 127.434 27.834C128.463 27.104 129.324 26.0745 130.054 24.6145L131.383 25.1573C130.71 26.7297 129.811 27.9464 128.594 28.8074C127.265 29.7807 125.731 30.2674 123.915 30.2674C121.725 30.2674 119.834 29.4813 118.262 27.9651C116.615 26.3179 115.772 24.2589 115.772 21.7693C115.772 19.5793 116.446 17.6888 117.719 16.0603C119.235 14.1697 121.313 13.1964 123.915 13.1964C126.217 13.1964 128.164 14.0387 129.755 15.6859C131.327 17.3331 132.057 19.336 132.057 21.7693V22.4432H117.158V22.3496ZM130.653 21.0206C130.354 18.9616 129.493 17.3705 128.033 16.1539C126.76 15.1244 125.412 14.5815 123.896 14.5815C122.137 14.5815 120.62 15.1805 119.329 16.3972C118.056 17.6139 117.326 19.1301 117.083 21.0206H130.653Z" fill="#007DB2"></path>
                                <path d="M134.06 29.893V18.7744C134.06 17.1272 134.733 15.742 136.119 14.6377C137.391 13.6643 138.908 13.1776 140.611 13.1776C142.37 13.1776 143.887 13.7205 145.178 14.75C146.582 15.9105 147.237 17.2957 147.237 18.999V29.8743H145.833V19.3547C145.833 17.8946 145.291 16.7341 144.261 15.8918C143.232 15.0495 142.015 14.5628 140.555 14.5628C139.151 14.5628 137.934 14.9184 137.036 15.7233C135.95 16.6405 135.389 17.7823 135.389 19.3172V29.893H134.06Z" fill="#007DB2"></path>
                                <path d="M149.802 6.49525H151.206V13.7392H157.401V15.0682H151.206V25.2697C151.206 26.2992 151.636 27.1602 152.478 27.8153C153.321 28.4892 154.294 28.8448 155.399 28.8448C156.072 28.8448 156.802 28.7325 157.458 28.4143C158.131 28.1148 158.73 27.6843 159.273 27.1415L160.359 28.3582C159.629 28.9571 158.843 29.3877 157.982 29.762C157.121 30.1364 156.278 30.3049 155.436 30.3049C153.864 30.3049 152.572 29.8743 151.486 28.9759C150.401 28.0587 149.839 26.9169 149.839 25.382V6.47653H149.802V6.49525Z" fill="#007DB2"></path>
                                <path d="M162.998 22.3496C163.298 24.1653 164.084 25.7002 165.432 26.973C166.761 28.2459 168.221 28.8636 169.756 28.8636C171.085 28.8636 172.245 28.5079 173.275 27.834C174.304 27.104 175.165 26.0745 175.895 24.6145L177.224 25.1573C176.55 26.7297 175.652 27.9464 174.435 28.8074C173.106 29.7807 171.571 30.2674 169.756 30.2674C167.566 30.2674 165.675 29.4813 164.103 27.9651C162.456 26.3179 161.613 24.2589 161.613 21.7693C161.613 19.5793 162.287 17.6888 163.56 16.0603C165.076 14.1697 167.154 13.1964 169.756 13.1964C172.058 13.1964 174.005 14.0387 175.596 15.6859C177.168 17.3331 177.898 19.336 177.898 21.7693V22.4432H162.998V22.3496ZM176.494 21.0206C176.195 18.9616 175.334 17.3705 173.874 16.1539C172.601 15.1244 171.253 14.5815 169.737 14.5815C167.977 14.5815 166.461 15.1805 165.17 16.3972C163.897 17.6139 163.167 19.1301 162.924 21.0206H176.494Z" fill="#007DB2"></path>
                                <path d="M179.826 21.7506C179.826 19.3734 180.556 17.3705 182.072 15.6672C183.589 14.02 185.535 13.1776 187.969 13.1776C189.485 13.1776 190.889 13.5333 192.161 14.3382C193.247 15.012 194.108 15.8544 194.707 16.8839L193.547 17.801C193.004 16.8839 192.218 16.0977 191.244 15.4987C190.271 14.8997 189.185 14.5815 187.969 14.5815C186.078 14.5815 184.506 15.3115 183.158 16.7154C181.829 18.1193 181.211 19.8226 181.211 21.7693C181.211 23.4727 181.81 25.045 183.102 26.505C184.506 28.0774 186.078 28.9384 187.969 28.9384C189.185 28.9384 190.271 28.5828 191.375 27.9089C192.218 27.3661 192.948 26.6361 193.565 25.7189L194.726 26.6922C193.884 27.9089 192.966 28.8261 191.937 29.4251C190.907 30.0241 189.56 30.3423 187.987 30.3423C185.554 30.3423 183.551 29.4251 182.035 27.6656C180.556 25.9435 179.826 23.9968 179.826 21.7506Z" fill="#007DB2"></path>
                                <path d="M209.925 29.893H208.521V19.5606C208.521 17.9134 208.034 16.6967 207.061 15.7982C206.218 15.012 205.114 14.5815 203.897 14.5815C202.625 14.5815 201.464 14.8249 200.435 15.3677C199.405 15.8544 198.675 16.6405 198.376 17.5577V29.893H196.972V5.82138H198.376V15.4238C198.731 14.8249 199.461 14.2633 200.678 13.8515C201.895 13.421 202.98 13.1777 204.085 13.1777C205.788 13.1777 207.117 13.6643 208.165 14.6938C209.382 15.8544 209.981 17.5577 209.981 19.8601V29.893H209.925Z" fill="#007DB2"></path>
                                <path d="M59.0561 41.6294V39.0088L57.1094 35.4898H58.0266L58.8689 37.1932C59.1122 37.6798 59.2994 38.0355 59.4679 38.466C59.6551 38.0355 59.8235 37.6798 60.0669 37.1932L60.984 35.4898H61.9012L59.8422 39.0088V41.6294H59.0561Z" fill="#007DB2"></path>
                                <path d="M67.5729 39.3832C67.5729 41.0304 66.4124 41.7604 65.3829 41.7604C64.1662 41.7604 63.249 40.9181 63.249 39.4581C63.249 37.998 64.2224 37.0809 65.4391 37.0809C66.7119 37.137 67.5729 38.0355 67.5729 39.3832ZM64.0352 39.4394C64.0352 40.4127 64.578 41.1427 65.3642 41.1427C66.1504 41.1427 66.6932 40.4127 66.6932 39.4394C66.6932 38.7093 66.3375 37.736 65.3642 37.736C64.3908 37.736 64.0352 38.597 64.0352 39.4394Z" fill="#007DB2"></path>
                                <path d="M73.9562 40.4127C73.9562 40.8994 73.9562 41.255 74.0124 41.6294H73.2824L73.2262 40.8994C73.039 41.255 72.5523 41.7417 71.7662 41.7417C71.0923 41.7417 70.25 41.3861 70.25 39.795V37.1745H71.0362V39.6078C71.0362 40.4501 71.2795 41.0117 72.0095 41.0117C72.5523 41.0117 72.9267 40.656 73.039 40.2817C73.0952 40.1694 73.0952 40.0383 73.0952 39.8512V37.1745H73.8813V40.394H73.9562V40.4127Z" fill="#007DB2"></path>
                                <path d="M76.9321 38.597C76.9321 38.0542 76.9321 37.6237 76.876 37.1932H77.606V38.0355H77.6621C77.8493 37.4365 78.336 37.0621 78.8788 37.0621C78.9911 37.0621 79.066 37.0621 79.1222 37.0621V37.8483C79.066 37.8483 78.935 37.8483 78.8227 37.8483C78.2798 37.8483 77.8493 38.2788 77.737 38.8778C77.737 38.9901 77.6809 39.1211 77.6809 39.2335V41.6107H76.9321V38.597Z" fill="#007DB2"></path>
                                <path d="M85.9912 35.4898V41.6855H85.2051V35.4898H85.9912Z" fill="#007DB2"></path>
                                <path d="M92.8047 35.1342V40.4876C92.8047 40.8432 92.8047 41.3299 92.8609 41.6481H92.1308L92.0747 40.8619C91.8313 41.3486 91.2885 41.7043 90.5585 41.7043C89.4728 41.7043 88.668 40.7871 88.668 39.4581C88.668 37.9981 89.5852 37.0809 90.6708 37.0809C91.3447 37.0809 91.8313 37.3803 91.9998 37.7547V35.078H92.786V35.1342H92.8047ZM91.9998 39.0088C91.9998 38.8965 91.9998 38.7655 91.9437 38.6532C91.8314 38.1665 91.4008 37.736 90.7831 37.736C89.9408 37.736 89.4541 38.466 89.4541 39.4394C89.4541 40.3565 89.8847 41.0866 90.7831 41.0866C91.326 41.0866 91.8126 40.7309 91.9437 40.1132C91.9437 40.0009 91.9998 39.8699 91.9998 39.7576V39.0088Z" fill="#007DB2"></path>
                                <path d="M96.2678 39.5704C96.2678 40.656 96.9978 41.0866 97.784 41.0866C98.3268 41.0866 98.7012 40.9742 99.0006 40.8432L99.1129 41.386C98.8135 41.4984 98.3268 41.6855 97.6529 41.6855C96.3239 41.6855 95.4629 40.7683 95.4629 39.4394C95.4629 38.1104 96.2491 37.0621 97.5219 37.0621C98.9819 37.0621 99.3376 38.335 99.3376 39.1211C99.3376 39.3083 99.3376 39.4206 99.3376 39.4768H96.2303V39.5704H96.2678ZM98.6263 39.0088C98.6263 38.5222 98.4391 37.6798 97.5406 37.6798C96.7544 37.6798 96.3801 38.4098 96.3239 39.0088H98.6263Z" fill="#007DB2"></path>
                                <path d="M104.466 41.6294L104.41 41.0866C104.167 41.4422 103.68 41.7604 103.081 41.7604C102.164 41.7604 101.752 41.1614 101.752 40.4876C101.752 39.4019 102.725 38.8404 104.429 38.8404V38.7281C104.429 38.3724 104.316 37.6986 103.399 37.6986C102.969 37.6986 102.557 37.8109 102.239 37.9981L102.051 37.4552C102.407 37.2119 102.969 37.0996 103.511 37.0996C104.84 37.0996 105.215 38.0168 105.215 38.9152V40.5625C105.215 40.9181 105.215 41.3486 105.271 41.592H104.485V41.6294H104.466ZM104.354 39.3832C103.511 39.3832 102.463 39.4955 102.463 40.3566C102.463 40.8994 102.819 41.1427 103.249 41.1427C103.792 41.1427 104.223 40.7871 104.335 40.4127C104.335 40.3566 104.391 40.2255 104.391 40.1694V39.3832H104.354Z" fill="#007DB2"></path>
                                <path d="M108.004 40.8432C108.247 41.0304 108.678 41.1427 109.033 41.1427C109.632 41.1427 109.876 40.8432 109.876 40.4689C109.876 40.1132 109.632 39.8699 109.033 39.6827C108.247 39.3832 107.873 38.9527 107.873 38.4098C107.873 37.6798 108.416 37.137 109.389 37.137C109.82 37.137 110.231 37.2493 110.475 37.4365L110.288 38.0355C110.1 37.9232 109.801 37.7921 109.37 37.7921C108.884 37.7921 108.64 38.0916 108.64 38.3911C108.64 38.7468 108.884 38.934 109.483 39.1211C110.269 39.4206 110.643 39.795 110.643 40.4501C110.643 41.2363 110.044 41.7791 108.996 41.7791C108.509 41.7791 108.079 41.6668 107.779 41.4796L108.004 40.8432Z" fill="#007DB2"></path>
                                <path d="M112.74 42.7899C112.927 42.2471 113.171 41.2737 113.283 40.5999L114.2 40.4876C114.013 41.2737 113.601 42.3032 113.358 42.7338L112.74 42.7899Z" fill="#007DB2"></path>
                                <path d="M124.421 39.3832C124.421 41.0304 123.26 41.7604 122.231 41.7604C121.014 41.7604 120.097 40.9181 120.097 39.4581C120.097 37.998 121.07 37.0809 122.287 37.0809C123.56 37.137 124.421 38.0355 124.421 39.3832ZM120.883 39.4394C120.883 40.4127 121.426 41.1427 122.212 41.1427C122.998 41.1427 123.541 40.4127 123.541 39.4394C123.541 38.7093 123.185 37.736 122.212 37.736C121.313 37.736 120.883 38.597 120.883 39.4394Z" fill="#007DB2"></path>
                                <path d="M130.803 40.4127C130.803 40.8994 130.803 41.255 130.859 41.6294H130.129L130.073 40.8994C129.886 41.255 129.399 41.7417 128.613 41.7417C127.939 41.7417 127.097 41.3861 127.097 39.795V37.1745H127.883V39.6078C127.883 40.4501 128.126 41.0117 128.856 41.0117C129.399 41.0117 129.773 40.656 129.886 40.2817C129.942 40.1694 129.942 40.0383 129.942 39.8512V37.1745H130.728V40.394H130.803V40.4127Z" fill="#007DB2"></path>
                                <path d="M133.78 38.597C133.78 38.0542 133.78 37.6237 133.724 37.1932H134.454V38.0355H134.51C134.697 37.4365 135.184 37.0621 135.726 37.0621C135.839 37.0621 135.914 37.0621 135.97 37.0621V37.8483C135.914 37.8483 135.783 37.8483 135.67 37.8483C135.127 37.8483 134.697 38.2788 134.585 38.8778C134.585 38.9901 134.529 39.1211 134.529 39.2335V41.6107H133.742V38.5783H133.78V38.597Z" fill="#007DB2"></path>
                                <path d="M142.839 35.4898V41.6855H142.053V35.4898H142.839Z" fill="#007DB2"></path>
                                <path d="M145.946 38.4099C145.946 37.9232 145.946 37.5675 145.89 37.1932H146.62L146.676 37.9232C146.919 37.4927 147.406 37.0809 148.136 37.0809C148.735 37.0809 149.708 37.4365 149.708 38.9714V41.6481H148.922V39.1024C148.922 38.3724 148.679 37.7734 147.892 37.7734C147.35 37.7734 146.919 38.1291 146.807 38.6158C146.751 38.7281 146.751 38.8591 146.751 38.9714V41.6481H145.965L145.946 38.4099Z" fill="#007DB2"></path>
                                <path d="M152.685 38.4099C152.685 37.9232 152.685 37.5675 152.629 37.1932H153.359L153.415 37.9232C153.658 37.4927 154.145 37.0809 154.875 37.0809C155.474 37.0809 156.447 37.4365 156.447 38.9714V41.6481H155.661V39.1024C155.661 38.3724 155.418 37.7734 154.632 37.7734C154.089 37.7734 153.658 38.1291 153.546 38.6158C153.49 38.7281 153.49 38.8591 153.49 38.9714V41.6481H152.704L152.685 38.4099Z" fill="#007DB2"></path>
                                <path d="M163.448 39.3832C163.448 41.0304 162.287 41.7604 161.258 41.7604C160.041 41.7604 159.124 40.9181 159.124 39.4581C159.124 37.998 160.097 37.0809 161.314 37.0809C162.531 37.137 163.448 38.0355 163.448 39.3832ZM159.929 39.4394C159.929 40.4127 160.472 41.1427 161.258 41.1427C162.044 41.1427 162.587 40.4127 162.587 39.4394C162.587 38.7093 162.231 37.736 161.258 37.736C160.341 37.736 159.929 38.597 159.929 39.4394Z" fill="#007DB2"></path>
                                <path d="M166.368 37.1932L167.211 39.6827C167.323 40.1132 167.454 40.4689 167.566 40.8432C167.678 40.4876 167.81 40.1132 167.922 39.6827L168.764 37.1932H169.606L167.847 41.6294H167.061L165.357 37.1932C165.395 37.1932 166.368 37.1932 166.368 37.1932Z" fill="#007DB2"></path>
                                <path d="M174.51 41.6294L174.454 41.0866C174.211 41.4422 173.724 41.7604 173.125 41.7604C172.208 41.7604 171.796 41.1614 171.796 40.4876C171.796 39.4019 172.769 38.8404 174.473 38.8404V38.7281C174.473 38.3724 174.36 37.6986 173.443 37.6986C173.013 37.6986 172.601 37.8109 172.283 37.9981L172.095 37.4552C172.451 37.2119 173.013 37.0996 173.555 37.0996C174.884 37.0996 175.259 38.0168 175.259 38.9152V40.5625C175.259 40.9181 175.259 41.3486 175.315 41.592H174.529V41.6294H174.51ZM174.398 39.3832C173.555 39.3832 172.507 39.4955 172.507 40.3566C172.507 40.8994 172.863 41.1427 173.293 41.1427C173.836 41.1427 174.267 40.7871 174.379 40.4127C174.379 40.3566 174.435 40.2255 174.435 40.1694V39.3832H174.398Z" fill="#007DB2"></path>
                                <path d="M179.021 35.9203V37.1932H180.182V37.7921H179.021V40.2255C179.021 40.7683 179.208 41.0678 179.62 41.0678C179.807 41.0678 179.976 41.0678 180.107 41.0117L180.163 41.6107C179.976 41.6668 179.732 41.723 179.433 41.723C179.077 41.723 178.759 41.6107 178.591 41.3673C178.347 41.124 178.291 40.7683 178.291 40.2068V37.7734H177.617V37.1744H178.291V36.1449L179.021 35.9203Z" fill="#007DB2"></path>
                                <path d="M183.626 35.9765C183.626 36.276 183.439 36.4632 183.139 36.4632C182.84 36.4632 182.652 36.2198 182.652 35.9765C182.652 35.677 182.84 35.4898 183.139 35.4898C183.457 35.4898 183.626 35.677 183.626 35.9765ZM182.727 41.6294V37.1932H183.513V41.6294H182.727Z" fill="#007DB2"></path>
                                <path d="M190.57 39.3832C190.57 41.0304 189.409 41.7604 188.38 41.7604C187.163 41.7604 186.246 40.9181 186.246 39.4581C186.246 37.998 187.219 37.0809 188.436 37.0809C189.709 37.137 190.57 38.0355 190.57 39.3832ZM187.032 39.4394C187.032 40.4127 187.575 41.1427 188.361 41.1427C189.147 41.1427 189.69 40.4127 189.69 39.4394C189.69 38.7093 189.335 37.736 188.361 37.736C187.463 37.736 187.032 38.597 187.032 39.4394Z" fill="#007DB2"></path>
                                <path d="M193.248 38.4099C193.248 37.9232 193.248 37.5675 193.191 37.1932H193.921L193.978 37.9232C194.221 37.4927 194.708 37.0809 195.438 37.0809C196.037 37.0809 197.01 37.4365 197.01 38.9714V41.6481H196.224V39.1024C196.224 38.3724 195.98 37.7734 195.194 37.7734C194.651 37.7734 194.221 38.1291 194.109 38.6158C194.052 38.7281 194.052 38.8591 194.052 38.9714V41.6481H193.266L193.248 38.4099Z" fill="#007DB2"></path>
                                <path d="M199.873 40.8432C200.116 41.0304 200.547 41.1427 200.903 41.1427C201.502 41.1427 201.745 40.8432 201.745 40.4689C201.745 40.1132 201.502 39.8699 200.903 39.6827C200.116 39.3832 199.742 38.9527 199.742 38.4098C199.742 37.6798 200.285 37.137 201.258 37.137C201.689 37.137 202.101 37.2493 202.344 37.4365L202.157 38.0355C201.97 37.9232 201.67 37.7921 201.239 37.7921C200.753 37.7921 200.509 38.0916 200.509 38.3911C200.509 38.7468 200.753 38.934 201.352 39.1211C202.138 39.4206 202.512 39.795 202.512 40.4501C202.512 41.2363 201.913 41.7791 200.865 41.7791C200.378 41.7791 199.948 41.6668 199.648 41.4796L199.873 40.8432Z" fill="#007DB2"></path>
                                <path d="M208.689 41.1989C208.689 40.8994 208.933 40.656 209.232 40.656C209.532 40.656 209.775 40.8994 209.775 41.1989C209.775 41.4984 209.588 41.7417 209.232 41.7417C208.877 41.7417 208.689 41.5171 208.689 41.1989ZM208.858 39.8699L208.746 35.4898H209.588L209.476 39.8699H208.858Z" fill="#007DB2"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_124_7422">
                                    <rect width="210" height="48.6113" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg></a>
                        <a href="tel:+61468280070" class="ml-md-auto header-call-link"> <span><img src="https://emizentech.com/wp-content/uploads/2026/03/Phone-black.svg" width="20" height="20" alt="+61468280070"></span>+61468280070</a>
                        <a href="https://emizentech.com/enquiry.html" class="enquiry-btn new-btn ml-3 btn emizen-btn d-none d-lg-block"><img class="d-lg-none d-block" src="https://emizentech.com/wp-content/uploads/2025/08/phone-call.svg" alt="Get My Free Consultation" width="30" height="30"> <span class="pre-text"> Get My Free Consultation</span> <span class="hover-text">Map Your Project Today!</span> </a>
                    
                    </div>
                    </nav>

           
            </div>
 


<!-- ── HERO ── -->
<section class="hero" id="home">
  <div class="hero-blob hero-blob-1"></div>
  <div class="hero-blob hero-blob-2"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-badge"><i class="fas fa-star"></i> #1 Healthcare Website Development Australia</div>
      <h1>Expert <span>Healthcare Website</span> Development Services in Australia</h1>
      <p class="hero-sub">
        Trusted by 500+ Australian healthcare providers. We build NDIS-compliant, telehealth-ready, aged care and medical practice websites that attract patients, drive bookings, and grow your practice — with full Australian healthcare regulation compliance.
      </p>
      <div class="hero-chips">
        <div class="chip"><i class="fas fa-check-circle"></i> NDIS Compliant</div>
        <div class="chip"><i class="fas fa-check-circle"></i> Telehealth Ready</div>
        <div class="chip"><i class="fas fa-check-circle"></i> WCAG 2.1 Accessible</div>
        <div class="chip"><i class="fas fa-check-circle"></i> My Health Record Integrated</div>
        <div class="chip"><i class="fas fa-check-circle"></i> Australian Privacy Act Compliant</div>
      </div>
      <div class="hero-actions">
        <a href="#contact-form" class="btn-white"><i class="fas fa-rocket"></i> Get Free Proposal</a>
        <a href="tel:+61468280070" class="btn-secondary" style="border-color:rgba(255,255,255,.5);color:#fff"><i class="fas fa-phone"></i> Call Us Now</a>
      </div>
      <div class="hero-trust">
        <div class="hero-trust-item"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span>4.9/5 on Google (120+ Reviews)</span></div>
        <div class="hero-trust-item"><i class="fas fa-shield-alt"></i> <span>ISO 27001 Certified</span></div>
      </div>
    </div>

    <!-- HERO FORM -->
    <div class="hero-form-card" id="contact-form">
      <div class="form-title">Get a Free Quote Today</div>
      <div class="form-sub">Healthcare website experts ready to help. <span>Response within 2 hours.</span></div>
      <div id="main-form">
          <?php echo do_shortcode('[elementor-template id="34781"]'); ?>
      </div>
      <div class="success-msg" id="success-msg">
        <i class="fas fa-check-circle"></i>
        <h3>Request Received!</h3>
        <p>Thank you! Our healthcare web team will contact you within 2 business hours.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── TRUST BAR ── -->
<section class="trust-sec">  
<div class="container">
    

<div class="trust-bar">
  <div class="container">
    <div class="trust-item">
      <div class="trust-icon"><i class="fas fa-hospital"></i></div>
      <div><span class="trust-stat" data-count="500">500</span>+ Healthcare Clients</div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><i class="fas fa-award"></i></div>
      <div><span class="trust-stat" data-count="12">12</span>+ Years Experience</div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><i class="fas fa-globe"></i></div>
      <div><span class="trust-stat" data-count="8">8</span> Australian Cities</div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><i class="fas fa-star"></i></div>
      <div><span class="trust-stat">4.9</span>/5 Average Rating</div>
    </div>
    <div class="trust-item">
      <div class="trust-icon"><i class="fas fa-clock"></i></div>
      <div><span class="trust-stat d-inline-block" data-count="98">98</span> <span class="symbol d-inline-block">%</span>
      <p>On-time delivery</p> 
  </div>
    </div>
  </div>
</div>
</div>
</section>

<!-- ── SERVICES ── -->
<section id="services" class="bg-light">
  <div class="container">
    <div class="section-head text-center reveal">
      <div class="section-label"><i class="fas fa-stethoscope"></i> Our Specialisations</div>
      <h2 class="section-title">Healthcare Website Development <span>Services We Offer</span></h2>
      <p class="section-desc">End-to-end healthcare website development tailored for Australian providers — from GP clinics to large hospital networks and NDIS providers.</p>
    </div>
    <div class="services-grid">
      <div class="service-card reveal text-center text-md-left">
        <div class="service-icon mx-md-0 mx-auto" style="color:var(--blue-primary)"><i class="fas fa-heartbeat"></i></div>
        <h3>Medical Practice Websites</h3>
        <p>Custom websites for GP clinics, specialist medical centres and private practices with online appointment booking, patient portals, and Medicare integration.</p>
        <div class="service-tags"><span class="stag">GP Clinics</span><span class="stag">Specialists</span><span class="stag">Online Booking</span><span class="stag">Patient Portal</span></div>
      </div>
      <div class="service-card reveal text-center text-md-left">
        <div class="service-icon mx-md-0 mx-auto" style="color:var(--blue-primary)"><i class="fas fa-laptop-medical"></i></div>
        <h3>Telehealth Platform Development</h3>
        <p>Build compliant telehealth websites and video-consultation platforms for virtual GP visits, mental health support, and chronic disease management across regional Australia.</p>
        <div class="service-tags"><span class="stag">Video Consult</span><span class="stag">Medicare Billing</span><span class="stag">MBS Compliant</span></div>
      </div>
      <div class="service-card reveal text-center text-md-left">
        <div class="service-icon mx-md-0 mx-auto" style="color:var(--blue-primary)"><i class="fas fa-wheelchair"></i></div>
        <h3>NDIS Website Development</h3>
        <p>Specialist NDIS service provider websites built to strict accessibility standards (WCAG 2.1), with participant registration, plan management and provider portal capabilities.</p>
        <div class="service-tags"><span class="stag">NDIS Compliant</span><span class="stag">WCAG 2.1</span><span class="stag">Participant Portal</span></div>
      </div>
      <div class="service-card reveal text-center text-md-left">
        <div class="service-icon mx-md-0 mx-auto" style="color:var(--blue-primary)"><i class="fas fa-user-nurse"></i></div>
        <h3>Aged Care Website Development</h3>
        <p>Digital platforms for aged care providers navigating Australia's reforms, with family portals, residential placement systems, home care management and accessible interfaces for seniors.</p>
        <div class="service-tags"><span class="stag">Aged Care Reform</span><span class="stag">Family Portals</span><span class="stag">ACQSC Compliant</span></div>
      </div>
      <div class="service-card reveal text-center text-md-left">
        <div class="service-icon mx-md-0 mx-auto" style="color:var(--blue-primary)"><i class="fas fa-brain"></i></div>
        <h3>Mental Health & Allied Health</h3>
        <p>Sensitive, trust-building websites for psychologists, counsellors, physios, dietitians and allied health providers with secure booking and AHPRA compliance.</p>
        <div class="service-tags"><span class="stag">Psychology</span><span class="stag">Physiotherapy</span><span class="stag">AHPRA Compliant</span></div>
      </div>
      <div class="service-card reveal text-center text-md-left">
        <div class="service-icon mx-md-0 mx-auto" style="color:var(--blue-primary)"><i class="fas fa-pills"></i></div>
        <h3>Pharmacy & Health eCommerce</h3>
        <p>TGA-compliant online pharmacy websites with product catalogues, prescription management, script repeat ordering and secure payment gateways for Australian health ecommerce.</p>
        <div class="service-tags"><span class="stag">TGA Compliant</span><span class="stag">Script Ordering</span><span class="stag">eCommerce</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ── STATS ── -->
<section class="features-strip">
  <div class="container">
    <div class="features-grid">
      <div class="feat-card reveal"><div class="feat-num" data-count="500">500</div><h4>Healthcare Websites Delivered</h4></div>
      <div class="feat-card reveal"><div class="feat-num">4.9 <span>★</span> </div><h4>Average Client Rating</h4></div>
      <div class="feat-num-card feat-card reveal"><div class="feat-num" data-count="98">98</div><h4>% On-Time Delivery Rate</h4></div>
      <div class="feat-card reveal"><div class="feat-num" data-count="12">12</div><h4>Years in Healthcare Web Dev</h4></div>
    </div>
  </div>
</section>

<!-- ── WHO WE SERVE ── -->
<section id="who-we-serve">
  <div class="container">
    <div class="section-head text-center reveal">
      <div class="section-label"><i class="fas fa-users"></i> Healthcare Sectors</div>
      <h2 class="section-title">Who We Build <span>Healthcare Websites</span> For</h2>
      <p class="section-desc">Specialist healthcare website development for every segment of Australia's health industry.</p>
    </div>
    <div class="serve-grid">
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f3e5.svg" alt="home"></span><h4>Hospitals & Health Networks</h4><p>Enterprise-scale hospital websites with patient information systems and multi-location directories</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f468-200d-2695-fe0f.svg" alt="home"> </span><h4>GP & Medical Centres</h4><p>Modern clinic websites for Melbourne, Sydney, Brisbane & Perth practices with appointment booking</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/267f.svg" alt="home"> </span><h4>NDIS Providers</h4><p>WCAG 2.1 AA-compliant websites for registered NDIS service providers across Australia</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f3e1.svg" alt="home"> </span><h4>Aged Care Providers</h4><p>Family-facing digital platforms for residential and home care providers navigating aged care reforms</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f48a.svg" alt="home"> </span><h4>Pharmacies</h4><p>TGA-compliant online pharmacy websites with script management and health product ecommerce</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f9e0.svg" alt="home"></span><h4>Mental Health Services</h4><p>Sensitive, conversion-optimised websites for psychologists, counsellors and mental health clinics</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f9b7.svg" alt="home"> </span><h4>Dental Practices</h4><p>High-converting dental websites with smile gallery, online booking and Google Ads integration</p></div>
      <div class="serve-card reveal"><span class="serve-icon"><img src="https://emizentech.com/wp-content/uploads/2026/03/1f3c3.svg" alt="home"> </span><h4>Allied Health & Physio</h4><p>Professional websites for physiotherapists, dietitians, occupational therapists and podiatrists</p></div>
    </div>
  </div>
</section>

<!-- ── PROCESS ── -->
<section class="process-bg">
  <div class="container">
    <div class="section-head text-center reveal">
      <div class="section-label" style="background:rgba(255,255,255,.15);color:#fff"><i class="fas fa-cogs"></i> Our Process</div>
      <h2 class="section-title" style="color:#fff">How We Build Your <span style="color:#67e8f9">Healthcare Website</span></h2>
      <p class="section-desc" style="color:rgba(255,255,255,.8)">A proven 4-step process refined through 500+ healthcare website development projects across Australia.</p>
    </div>
    <div class="process-grid">
      <div class="process-step reveal">
        <div class="step-num">1</div>
        <h3>Discovery & Strategy</h3>
        <p>We map your healthcare sector requirements, compliance obligations (NDIS, TGA, AHPRA), patient journey and business goals in a free 60-minute strategy session.</p>
      </div>
      <div class="process-step reveal">
        <div class="step-num">2</div>
        <h3>Design & Prototyping</h3>
        <p>Patient-centric UI/UX design with wireframes, accessibility testing (WCAG 2.1), and brand alignment. You see and approve every page before development begins.</p>
      </div>
      <div class="process-step reveal">
        <div class="step-num">3</div>
        <h3>Development & Integration</h3>
        <p>Secure, HIPAA-aligned healthcare website development with EHR integration, booking systems, Medicare APIs, patient portals and Australian Privacy Act compliance built-in.</p>
      </div>
      <div class="process-step reveal">
        <div class="step-num">4</div>
        <h3>Launch & Support</h3>
        <p>Thorough QA testing, performance optimisation, Google Search Console setup, and ongoing 24/7 Australian support to keep your healthcare website running perfectly.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── WHY US ── -->
<section id="why-us" class="why-us">
  <div class="container">
    <div class="why-grid">
      <div class="why-image-block reveal-left">
        <div class="why-main-img">
          <span class="big-icon"><i class="fas fa-hospital"></i></span>
          <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:16px">
            <div style="font-size:56px">🏥</div>
            <div style="font-size:18px;font-weight:700;color:var(--blue-dark)">Australia's Healthcare Web Experts</div>
            <div style="font-size:14px;color:var(--gray-600);text-align:center;padding:0 40px">500+ websites delivered for Australian healthcare providers</div>
          </div>
        </div>
        <div class="why-float-badge top-right">
          <span class="badge-icon">⭐</span>
          <div class="badge-text">
            <strong>4.9/5</strong>
            <span>Google Reviews</span>
          </div>
        </div>
        <div class="why-float-badge bottom-left">
          <span class="badge-icon">🛡️</span>
          <div class="badge-text">
            <strong>100%</strong>
            <span>NDIS Compliant</span>
          </div>
        </div>
      </div>
      <div class="reveal-right text-md-left text-center">
        <div class="section-label"><i class="fas fa-trophy"></i> Why Emizentech</div>
        <h2 class="section-title text-md-left">Why Australian Healthcare Providers <span>Choose Us</span></h2>
        <p style="font-size:15px;color:var(--gray-600);line-height:1.75;margin-bottom:10px">
          Unlike generic web developers, we specialise exclusively in healthcare website development for Australia's unique regulatory environment — NDIS, aged care reforms, TGA, AHPRA and the Australian Privacy Act.
        </p>
        <ul class="why-list text-left">
          <li>
            <div class="why-check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Healthcare Regulation Expertise</h4>
              <p>Deep knowledge of Australian Privacy Act, NDIS Quality & Safeguards Commission, AHPRA, TGA and aged care regulatory frameworks built into every website.</p>
            </div>
          </li>
          <li>
            <div class="why-check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Telehealth & My Health Record Integration</h4>
              <p>Seamless integration with Australia's My Health Record system, Medicare, Healthpoint and leading telehealth platforms for a connected digital health experience.</p>
            </div>
          </li>
          <li>
            <div class="why-check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Accessibility-First Development (WCAG 2.1)</h4>
              <p>All healthcare websites are built to WCAG 2.1 AA accessibility standards — mandatory for NDIS providers and best practice for all health services.</p>
            </div>
          </li>
          <li>
            <div class="why-check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Google Ads Optimised Landing Pages</h4>
              <p>Our healthcare websites are built with Google Ads Quality Score in mind — fast load times, keyword-matched content and conversion-focused design that lowers your CPC.</p>
            </div>
          </li>
        </ul>
        <a href="#contact-form" class="btn-primary"><i class="fas fa-calendar"></i> Book a Free Strategy Call</a>
      </div>
    </div>
  </div>
</section>

<!-- ── COMPLIANCE ── -->
<section class="compliance-bg">
  <div class="container">
    <div class="section-head text-center reveal">
      <div class="section-label"><i class="fas fa-shield-alt"></i> Compliance & Security</div>
      <h2 class="section-title">Built for Australian <span>Healthcare Compliance</span></h2>
      <p class="section-desc">Every healthcare website we build meets Australia's strict health data, privacy and accessibility requirements.</p>
    </div>
    <div class="compliance-grid">
      <div class="comp-card reveal"><i class="fas fa-user-shield"></i><h4>Australian Privacy Act</h4><p>Full compliance with the Privacy Act 1988 and Australian Privacy Principles for patient health information protection.</p></div>
      <div class="comp-card reveal"><i class="fas fa-wheelchair"></i><h4>NDIS Quality Standards</h4><p>Websites built to NDIS Practice Standards, ensuring your online presence meets NDIS Quality and Safeguards Commission requirements.</p></div>
      <div class="comp-card reveal"><i class="fas fa-universal-access"></i><h4>WCAG 2.1 AA Accessibility</h4><p>Accessibility-first development ensuring your healthcare website is usable by all Australians, including those with disabilities.</p></div>
      <div class="comp-card reveal"><i class="fas fa-lock"></i><h4>ISO 27001 Security</h4><p>Healthcare data security standards aligned with ISO 27001, protecting sensitive patient information at every level.</p></div>
      <div class="comp-card reveal"><i class="fas fa-stethoscope"></i><h4>AHPRA Guidelines</h4><p>Content and advertising compliance with AHPRA's strict guidelines for registered health practitioners across all disciplines.</p></div>
      <div class="comp-card reveal"><i class="fas fa-pills"></i><h4>TGA Compliance</h4><p>Therapeutic Goods Administration compliance for pharmacy websites, health product ecommerce and medical device platforms.</p></div>
    </div>
  </div>
</section>

<!-- ── TESTIMONIALS ── -->
<section class="testimonials-bg bg-light" id="testimonials">
  <div class="container">
    <div class="section-head text-center reveal">
      <div class="section-label"><i class="fas fa-quote-left"></i> Client Stories</div>
      <h2 class="section-title">What Australian Healthcare <span>Providers Say</span></h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card reveal">
        <span class="testi-quote">"</span>
        <div class="stars">★★★★★</div>
        <p class="testi-text">Emizentech built our NDIS provider website from scratch. They understood the compliance requirements better than any developer we'd spoken to — and delivered ahead of schedule. Our online enquiries have tripled since launch.</p>
        <div class="testi-author">
          <div class="author-avatar">SM</div>
          <div>
            <div class="author-name">Sarah Mitchell</div>
            <div class="author-role">CEO — Ability Connect, Melbourne</div>
          </div>
        </div>
      </div>
      <div class="testi-card reveal">
        <span class="testi-quote">"</span>
        <div class="stars">★★★★★</div>
        <p class="testi-text">Our aged care facility needed a website that families could trust. Emizentech delivered an accessible, warm, and professional site that perfectly represents our ethos. Appointment bookings went up 40% in the first month.</p>
        <div class="testi-author">
          <div class="author-avatar">JC</div>
          <div>
            <div class="author-name">Dr. James Chen</div>
            <div class="author-role">Director — CareFirst Aged Living, Sydney</div>
          </div>
        </div>
      </div>
      <div class="testi-card reveal">
        <span class="testi-quote">"</span>
        <div class="stars">★★★★★</div>
        <p class="testi-text">We needed a telehealth platform that integrated with Medicare and worked on every device. Emizentech delivered exactly that — on budget and within 6 weeks. Our rural patients now access care they couldn't before.</p>
        <div class="testi-author">
          <div class="author-avatar">KP</div>
          <div>
            <div class="author-name">Dr. Karen Patel</div>
            <div class="author-role">Founder — RemoteHealth Australia, Brisbane</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ── CTA BAND ── -->
<section class="cta-band">
  <div class="container">
    <h2>Ready to Build Your Healthcare Website?</h2>
    <p>Join 500+ Australian healthcare providers who trust Emizentech for healthcare website development. Get your free consultation and proposal today.</p>
    <div class="cta-actions">
      <a href="#contact-form" class="btn-white"><i class="fas fa-rocket"></i> Get Free Proposal</a>
      <a href="tel:+61468280070" class="btn-secondary" style="border-color:rgba(255,255,255,.5);color:#fff;padding:14px 32px"><i class="fas fa-phone"></i> +61468280070</a>
    </div>
  </div>
</section>
 
<!-- ── FAQ ── -->
<section id="faq" class="pb-0">
  <div class="container">
    <div class="section-head text-center reveal">
      <div class="section-label"><i class="fas fa-question-circle"></i> FAQs</div>
      <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
    </div>
    <div class="faq-list">
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <h4>How much does healthcare website development cost in Australia?</h4>
          <div class="faq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-a">Healthcare website development in Australia typically ranges from $3,000 for a simple GP clinic website to $50,000+ for complex telehealth platforms or NDIS management systems. We provide free, detailed quotes tailored to your specific requirements after a discovery call. Most medical practice websites fall in the $5,000–$20,000 range.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <h4>Do you build NDIS-compliant websites?</h4>
          <div class="faq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-a">Yes. We specialise in NDIS service provider website development that meets WCAG 2.1 AA accessibility standards and NDIS Quality and Safeguards Commission requirements. Our NDIS websites include participant registration forms, provider directory listings, support plan information, and fully accessible navigation for users with disabilities.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <h4>Can you integrate online booking for my medical practice?</h4>
          <div class="faq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-a">Absolutely. We integrate with all major Australian medical booking platforms including HotDoc, HealthEngine, Coreplus, Best Practice, Medical Director and custom booking systems. We can also build custom appointment booking with SMS reminders, online payments, and telehealth video integration.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <h4>How long does healthcare website development take?</h4>
          <div class="faq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-a">A standard medical practice website takes 3–6 weeks from sign-off to launch. Complex platforms such as telehealth systems, NDIS portals or aged care management systems typically take 8–16 weeks. We provide a detailed project timeline before work begins and keep you updated at every stage.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <h4>Are your healthcare websites compliant with the Australian Privacy Act?</h4>
          <div class="faq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-a">Yes. Every healthcare website we develop is built with Australian Privacy Act 1988 and Australian Privacy Principles compliance built-in, including secure data handling, privacy policy integration, consent management, and encrypted storage for any patient health information (PHI).</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          <h4>Do you offer ongoing support after website launch?</h4>
          <div class="faq-icon"><i class="fas fa-plus"></i></div>
        </div>
        <div class="faq-a">Yes. We offer flexible maintenance and support packages for all Australian clients. This includes security updates, content updates, performance monitoring, backups, and priority support. Our Australian-based support team is available during AEST business hours, with emergency support available 24/7 for critical issues.</div>
      </div>
    </div>
  </div>
</section>



<!-- ===== READY CTA FULL-WIDTH ===== -->
<section class="section-pad" style="background: var(--gradient-dark); position: relative; overflow: hidden;">
    <div style="position: absolute; top: -40%; right: -15%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(11,87,208,0.12) 0%, transparent 70%); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -40%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(0,200,83,0.06) 0%, transparent 70%); border-radius: 50%;"></div>
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div style="display: inline-flex;align-items: center;gap: 8px;background: linear-gradient(135deg, var(--blue-dark), var(--blue-primary), var(--blue-accent));color: #fff;13px;font-weight: 600;padding: 10px 24px;border-radius: 50px;margin-bottom: 28px;letter-spacing: 1px;text-transform: uppercase;">
            <i class="bi bi-chat-dots-fill"></i> LET'S TALK
        </div>
        <h2 class="section-title">
            Ready to Develop a Web Application? <span style="color: var(--accent);">Let's Talk.</span>
        </h2>
        <p class="partner-sec">
            Partner with EmizenTech to build scalable and secure digital products.<br>Start your project discussion today.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="#contact-form" class="btn btn-primary-custom mx-2" style="background: #0e6fc6;color: #fff;padding: 14px 32px;border-radius: 8px;font-size: 15px;font-weight: 700;border: none;cursor: pointer;text-decoration: none;display: inline-flex;align-items: center;gap: 8px;transition: all .3s;">
                <i class="bi bi-rocket-takeoff"></i> Get Your Free Consultation
            </a>
            <a href="#contact-form" class="btn btn-accent-custom mx-2" style="background: transparent;border: 1px solid #0e6fc6;color: #0e6fc6;padding: 14px 32px;border-radius: 8px;font-size: 15px;font-weight: 700;cursor: pointer;text-decoration: none;display: inline-flex;align-items: center;gap: 8px;transition: all .3s;">
                <i class="bi bi-calendar-check"></i> Schedule a Discovery Call
            </a>
        </div>
    </div>
</section>

             



            <section class="conntect--us mn_fooer">
                <div class="container">
                    <div class="d-block contact-info p-0 position-relative">
                       <div class="row ">
                          <div class="col-lg-9">
                             <div class="connect-with-us d-flex align-items-center justify-content-between">
                                <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz-footer-icon.png" alt="footer" width="172" height="40">
                                <p class="address text-white d-flex align-items-center pb-0"> <img class="mr-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/ft-Location-icon.png" alt="Address" width="32" height="38"> 1 Barratt St Suite #1100 Hurstville, NSW 2220</p>
                             </div>
                          </div>
                          <div class="col-lg-3 mt-3 mt-lg-0">
                             <p class="text-white border-space d-flex align-items-center"><img src="https://emizentech.com/wp-content/uploads/2026/03/aus-icon.svg" alt="USA" width="65" height="65"> <span>AUS<a class="text-white d-block" class="d-block" href="tel:+61468280070">+61468280070</a></span></p>
                          </div>
                       </div>
                    </div>
                    
                    <div class="consulting--container text-md-left text-center">
                        <div class="row align-items-center">
                           <div class="col-lg-4">
                              <h3 class="p-0">We Offer a <strong>60 minute Free</strong> Consultation</h3>
                           </div>
                           <div class="col-lg-8 mt-3 mt-lg-0">
                              <ul class="text-md-start m-0">
                                 <li><a href="tel:+61468280070"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/phone.svg" width="30" height="30" alt="+1 (989) 535-9295">+61468280070</a></li>
                                 <li><a href="mailto:info@emizentech.com"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/email.svg" width="30" height="30" alt="emizentech">info@emizentech.com</a></li>
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
                                <ul class="ps-0 emizentech-social d-flex mb-0 mt-2 pt-2 list-unstyled">
                                    <li class="txts"> <a class="m-0" href="https://www.facebook.com/EmizenTech/" target="_blank"> <i class="fa-brands fa-facebook-f"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="http://www.linkedin.com/company/emizen-tech" target="_blank"> <i class="fa-brands fa-linkedin" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="https://www.instagram.com/emizentech/" target="_blank"> <i class="fa-brands fa-instagram" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a href="https://x.com/EmizenTech" target="_blank"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a> </li>
                                </ul>
                                </div>
                                </div>
                            <div class="follow-up col-lg-8 mt-lg-0 mt-4">
                                <ul class="d-flex justify-content-lg-start px-0 flex-wrap list-unstyled">
                                    <li class="px-1"><a href="https://clutch.co/profile/emizen-tech" target="_blank" rel="nofollow"><img src="https://emizentech.com/wp-content/uploads/2026/03/clutch.svg" alt="clutch" width="66" height="19"> <i class="bi bi-star-fill"></i> 4.9<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.goodfirms.co/company/emizen-tech-pvt-ltd" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/goodfirms.png" alt="goodfirms" width="100" height="16"> <i class="bi bi-star-fill"></i> 5.0<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.designrush.com/agency/profile/emizen-tech" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/designrush.png" alt="designrush" width="108" height="26"> <i class="bi bi-star-fill"></i> 4.9<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.businessofapps.com/app-developers/emizen-tech/" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/boa-new.png" alt="Business-of-app" width="87" height="26"> <i class="bi bi-star-fill"></i> 5.0<br>
                                        </a>
                                    </li>
                                    <li class="px-1"><a href="https://www.softwareworld.co/service/emizentech-reviews/" target="_blank" rel="nofollow"> <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/nav_logo.png" alt="nav_logo" width="124" height="20"> <i class="bi bi-star-fill"></i> 5.0<br>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                      </div>
                </div>
               
            </section>
    </main>



    <div class="watsappic">
        <a href="https://wa.me/19895359295" target="_blank" id="whatsapp-link" rel="nofollow">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="#54C45F" />
                <path d="M42.3379 17.5926C40.7335 15.972 38.8225 14.687 36.7163 13.8127C34.6101 12.9384 32.3508 12.4922 30.0704 12.5001C20.5154 12.5001 12.7279 20.2876 12.7279 29.8426C12.7279 32.9051 13.5329 35.8801 15.0379 38.5051L12.5879 47.5001L21.7754 45.0851C24.3129 46.4676 27.1654 47.2026 30.0704 47.2026C39.6254 47.2026 47.4129 39.4151 47.4129 29.8601C47.4129 25.2226 45.6104 20.8651 42.3379 17.5926ZM30.0704 44.2626C27.4804 44.2626 24.9429 43.5626 22.7204 42.2501L22.1954 41.9351L16.7354 43.3701L18.1879 38.0501L17.8379 37.5076C16.3989 35.2098 15.6349 32.5538 15.6329 29.8426C15.6329 21.8976 22.1079 15.4226 30.0529 15.4226C33.9029 15.4226 37.5254 16.9276 40.2379 19.6576C41.581 20.9945 42.6454 22.5848 43.3693 24.3361C44.0933 26.0874 44.4624 27.965 44.4554 29.8601C44.4904 37.8051 38.0154 44.2626 30.0704 44.2626ZM37.9804 33.4826C37.5429 33.2726 35.4079 32.2226 35.0229 32.0651C34.6204 31.9251 34.3404 31.8551 34.0429 32.2751C33.7454 32.7126 32.9229 33.6926 32.6779 33.9726C32.4329 34.2701 32.1704 34.3051 31.7329 34.0776C31.2954 33.8676 29.8954 33.3951 28.2504 31.9251C26.9554 30.7701 26.0979 29.3526 25.8354 28.9151C25.5904 28.4776 25.8004 28.2501 26.0279 28.0226C26.2204 27.8301 26.4654 27.5151 26.6754 27.2701C26.8854 27.0251 26.9729 26.8326 27.1129 26.5526C27.2529 26.2551 27.1829 26.0101 27.0779 25.8001C26.9729 25.5901 26.0979 23.4551 25.7479 22.5801C25.3979 21.7401 25.0304 21.8451 24.7679 21.8276H23.9279C23.6304 21.8276 23.1754 21.9326 22.7729 22.3701C22.3879 22.8076 21.2679 23.8576 21.2679 25.9926C21.2679 28.1276 22.8254 30.1926 23.0354 30.4726C23.2454 30.7701 26.0979 35.1451 30.4379 37.0176C31.4704 37.4726 32.2754 37.7351 32.9054 37.9276C33.9379 38.2601 34.8829 38.2076 35.6354 38.1026C36.4754 37.9801 38.2079 37.0526 38.5579 36.0376C38.9254 35.0226 38.9254 34.1651 38.8029 33.9726C38.6804 33.7801 38.4179 33.6926 37.9804 33.4826Z" fill="white" />
            </svg>
        </a>
    </div>

<script>
$(document).ready(function(){

  if ($(window).width() > 1025) {

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
<script>
  // Scroll reveal
  const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.1 });
  reveals.forEach(el => observer.observe(el));
  // FAQ toggle
  function toggleFaq(el) {
    const item = el.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if(!isOpen) item.classList.add('open');
  }

  // Form submit
  function handleSubmit(e) {
    e.preventDefault();
    document.getElementById('main-form').style.display = 'none';
    document.getElementById('success-msg').style.display = 'block';
  }

  // Form field animations
  document.querySelectorAll('.form-group input, .form-group select, .form-group textarea').forEach(el => {
    el.addEventListener('focus', () => {
      el.parentElement.querySelector('.field-icon') && (el.parentElement.querySelector('.field-icon').style.color = 'var(--blue-primary)');
    });
    el.addEventListener('blur', () => {
      el.parentElement.querySelector('.field-icon') && (el.parentElement.querySelector('.field-icon').style.color = 'var(--blue-light)');
    });
  });
</script>

<?php wp_footer(); ?>
</body>

</html>