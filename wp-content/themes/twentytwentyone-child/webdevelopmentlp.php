<?php

/**
 * Template Name: Webdevelopment Page Template
 */
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" type="image/x-icon" />

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/css/aos.css" rel="stylesheet" type="text/css" media="all" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- AOS Animations -->
    <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/web-template.css?5802" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<style>
:root{--primary:#0B57D0;--primary-dark:#0842A0;--primary-light:#D3E3FD;--primary-lighter:#ECF3FE;--accent:#00C853;--accent-dark:#00A844;--dark:#0F1B2D;--dark-2:#1A2B45;--gray-100:#F8FAFC;--gray-200:#E8EDF2;--gray-500:#6B7B8D;--gray-700:#3A4A5C;--white:#FFFFFF;--gradient-primary:linear-gradient(135deg,#0B57D0 0%,#1976D2 50%,#2196F3 100%);--gradient-dark:linear-gradient(135deg,#0F1B2D 0%,#1A2B45 100%);--gradient-accent:linear-gradient(135deg,#00C853 0%,#00E676 100%);--shadow-sm:0 2px 8px rgba(11,87,208,0.08);--shadow-md:0 4px 24px rgba(11,87,208,0.12);--shadow-lg:0 8px 40px rgba(11,87,208,0.16);--shadow-card:0 2px 16px rgba(0,0,0,0.06);--radius:12px;--radius-lg:20px;--radius-xl:28px;}
*{margin:0;padding:0;box-sizing:border-box;}
@media screen and (min-width:1300px){
    .container{max-width:1240px}
}
@media screen and (min-width:1500px){
    .container{max-width:1440px}
}
@media screen and (min-width:1700px){
    .container{max-width:1640px;}
}
h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6,p,form,label{font-family:'Poppins',Arial,sans-serif!important;}
body{background:#fff!important;}
section{position:relative;}
.header-call-link img{margin-right:10px;}
.header-call-link{color:#0f1528;font-size:16px;font-weight:600;line-height:24px;transition:all .4s;}
.header-call-link:hover{text-decoration:underline;color:#0f1528;}
p{margin-bottom:0;}
a{text-decoration:none;}
.site-main > *{margin-top:inherit;margin-bottom:inherit;}
body{font-family:'Poppins',sans-serif;color:var(--dark);background:var(--white);overflow-x:hidden;-webkit-font-smoothing:antialiased;}

/* ===== UTILITY ===== */
.text-primary-custom{color:var(--primary)!important;}
.text-accent{color:var(--accent)!important;}
.bg-primary-custom{background:var(--gradient-primary)!important;}
.bg-dark-custom{background:var(--gradient-dark)!important;}
.section-pad{padding:80px 0;}
.section-pad-lg{padding:100px 0;}
.section-label{display:inline-flex;align-items:center;gap:8px;background:var(--primary-lighter);color:var(--primary);font-size:13px;font-weight:600;padding:6px 16px;border-radius:50px;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:16px;}
.section-title{font-size:2.5rem;font-weight:600;line-height:1.2;margin-bottom:16px;color:var(--dark);}
.section-title span{color:var(--primary);}
.section-subtitle{font-size:1.1rem;color:var(--gray-500);line-height:1.7;max-width:700px;}
.btn-primary-custom{background:var(--gradient-primary);color:var(--white);border:none;padding:14px 32px;border-radius:50px;font-weight:600;font-size:15px;letter-spacing:0.3px;transition:all 0.3s ease;box-shadow:0 4px 20px rgba(11,87,208,0.3);display:inline-flex;align-items:center;gap:8px;}
.btn-primary-custom:hover{background:linear-gradient(290deg,#0B57D0 0%,#1976D2 50%,#125991 100%);color:#fff;}
.btn-primary-custom:hover{transform:translateY(-2px);box-shadow:0 6px 30px rgba(11,87,208,0.4);color:var(--white);}
.btn-outline-custom{background:transparent;color:var(--primary);border:2px solid var(--primary);padding:12px 28px;border-radius:50px;font-weight:600;font-size:15px;transition:all 0.3s ease;display:inline-flex;align-items:center;gap:8px;}
.btn-outline-custom:hover{background:var(--primary);color:var(--white);transform:translateY(-2px);}
.btn-white-custom{background:var(--white);color:var(--primary);border:none;padding:14px 32px;border-radius:50px;font-weight:600;font-size:15px;transition:all 0.3s ease;box-shadow:0 4px 20px rgba(0,0,0,0.1);display:inline-flex;align-items:center;gap:8px;}
.btn-white-custom:hover{transform:translateY(-2px);box-shadow:0 6px 30px rgba(0,0,0,0.15);color:var(--white);border:1px solid #fff;}
.btn-accent-custom{background:var(--gradient-accent);color:var(--white);border:none;padding:14px 32px;border-radius:50px;font-weight:600;font-size:15px;transition:all 0.3s ease;box-shadow:0 4px 20px rgba(0,200,83,0.3);display:inline-flex;align-items:center;gap:8px;}
.btn-accent-custom:hover{transform:translateY(-2px);box-shadow:0 6px 30px rgba(0,200,83,0.4);color:var(--white);}

/* ===== STICKY NAV ===== */
.navbar-custom{background:rgba(255,255,255,0.95);backdrop-filter:blur(20px);border-bottom:1px solid var(--gray-200);padding:12px 0;transition:all 0.3s ease;z-index:1000;}
.navbar-custom.scrolled{box-shadow:var(--shadow-md);}
.navbar-brand img{height:40px;}
.nav-cta-btn{background:var(--gradient-primary);color:var(--white)!important;padding:10px 24px;border-radius:50px;font-weight:600;font-size:14px;transition:all 0.3s ease;text-decoration:none;}
.nav-cta-btn:hover{box-shadow:0 4px 20px rgba(11,87,208,0.3);transform:translateY(-1px);}
.nav-phone{color:var(--dark);font-weight:600;text-decoration:none;display:flex;align-items:center;gap:6px;}
.nav-phone i{color:var(--primary);}

/* ===== HERO ===== */
.hero-section-main{background:var(--gradient-dark)!important;position:relative;overflow:hidden;min-height:calc(100vh - 30px);display:flex;align-items:center;margin:79px 0 0;}
.hero-section-main::before{content:'';position:absolute;top:-50%;right:-20%;width:800px;height:800px;background:radial-gradient(circle,rgba(11,87,208,0.15) 0%,transparent 70%);border-radius:50%;}
.hero-section-main::after{content:'';position:absolute;bottom:-30%;left:-10%;width:600px;height:600px;background:radial-gradient(circle,rgba(0,200,83,0.08) 0%,transparent 70%);border-radius:50%;}
.hero-content{position:relative;z-index:2;}
.hero-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(11,87,208,0.2);border:1px solid rgba(11,87,208,0.3);color:#7CB3FF;font-size:13px;font-weight:500;padding:8px 18px;border-radius:50px;margin-bottom:24px;}
.hero-badge .dot{width:8px;height:8px;background:var(--accent);border-radius:50%;animation:pulse 2s infinite;}
@keyframes pulse{
    0%,100%{opacity:1;}
    50%{opacity:0.5;}
}
.hero-title{font-size:3.5rem;font-weight:700;color:var(--white);line-height:1.1;margin-bottom:20px;}
.hero-title .highlight{background:var(--gradient-primary);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
.hero-subtitle{font-size:1.15rem;color:rgba(255,255,255,0.7);line-height:1.8;margin-bottom:32px;max-width:540px;}
.hero-cta-group{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:48px;}
.hero-stats{display:flex;gap:40px;flex-wrap:wrap;}
.hero-stat{text-align:center;}
.hero-stat-number{font-size:2.2rem;font-weight:800;color:var(--white);line-height:1;}
.hero-stat-number span{color:var(--accent);}
.hero-stat-label{font-size:13px;color:rgba(255,255,255,0.5);margin-top:4px;font-weight:500;}

/* Hero right - Trust / Form */
.hero-form-card{background:var(--white);border-radius:var(--radius-lg);padding:32px;box-shadow:0 20px 60px rgba(0,0,0,0.3);position:relative;z-index:2;}
.hero-form-card h3{font-size:1.25rem;font-weight:700;margin-bottom:4px;color:var(--dark);}
.hero-form-card .form-sub{font-size:13px;color:var(--gray-500);margin-bottom:20px;}
.hero-form-card .form-control{border:1.5px solid var(--gray-200);border-radius:var(--radius);padding:12px 16px;font-family:'Poppins',sans-serif;font-size:14px;transition:border-color 0.3s;}
.hero-form-card .form-control:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(11,87,208,0.1);}
.hero-form-card .form-select{border:1.5px solid var(--gray-200);border-radius:var(--radius);padding:12px 16px;font-family:'Poppins',sans-serif;font-size:14px;color:var(--gray-500);}
.hero-form-card .form-select:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(11,87,208,0.1);}
.form-submit-btn{width:100%;background:var(--gradient-primary);color:var(--white);border:none;padding:14px;border-radius:50px;font-weight:700;font-size:15px;cursor:pointer;transition:all 0.3s;box-shadow:0 4px 20px rgba(11,87,208,0.3);}
.form-submit-btn:hover{transform:translateY(-2px);box-shadow:0 6px 30px rgba(11,87,208,0.4);}
.form-trust-row{display:flex;align-items:center;gap:16px;margin-top:16px;padding-top:16px;border-top:1px solid var(--gray-200);}
.form-trust-item{display:flex;align-items:center;gap:6px;font-size:12px;color:var(--gray-500);}
.form-trust-item i{color:var(--accent);font-size:14px;}

/* ===== TRUST BAR ===== */
.trust-bar{background:var(--white);border-bottom:1px solid var(--gray-200);padding:24px 0;}
.trust-bar-inner{display:flex;align-items:center;justify-content:center;gap:40px;flex-wrap:wrap;}
.trust-badge{display:flex;align-items:center;gap:10px;padding:8px 16px;background:var(--gray-100);border-radius:var(--radius);border:1px solid var(--gray-200);transition:all 0.3s;}
.trust-badge:hover{box-shadow:var(--shadow-sm);transform:translateY(-2px);}
.trust-badge-icon{width:36px;height:36px;display:flex;align-items:center;justify-content:center;font-size:20px;}
.trust-badge-text{font-size:12px;font-weight:600;color:var(--dark);line-height:1.3;}
.trust-badge-text small{display:block;font-weight:400;color:var(--gray-500);font-size:10px;}
.trust-stars{color:#FFB800;font-size:11px;}

/* ===== PORTFOLIO ===== */
.portfolio-card{background:var(--white);border-radius:var(--radius-lg);border:1px solid var(--gray-200);overflow:hidden;transition:all 0.4s ease;height:100%;}
.portfolio-card:hover{box-shadow:var(--shadow-lg);transform:translateY(-8px);border-color:var(--primary-light);}
.portfolio-card-header{padding:24px 24px 0;}
.portfolio-card-icon{width:56px;height:56px;background:var(--primary-lighter);border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:24px;color:var(--primary);margin-bottom:16px;}
.portfolio-card h4{font-size:1.2rem;font-weight:700;margin-bottom:4px;}
.portfolio-card .tech-tags{display:flex;gap:6px;flex-wrap:wrap;margin-top:8px;margin-bottom:12px;}
.tech-tag{background:var(--primary-lighter);color:var(--primary);font-size:11px;font-weight:600;padding:4px 10px;border-radius:50px;}
.portfolio-card-body{padding:16px 24px 24px;}
.portfolio-card-body p{font-size:14px;color:var(--gray-500);line-height:1.7;}
.portfolio-results{display:flex;gap:16px;margin-top:16px;padding-top:16px;border-top:1px dashed var(--gray-200);}
.portfolio-result{text-align:center;flex:1;}
.portfolio-result strong{display:block;font-size:1.1rem;color:var(--primary);font-weight:700;}
.portfolio-result small{font-size:11px;color:var(--gray-500);}

/* ===== CTA BANNERS ===== */
.cta-banner{background:var(--gradient-primary);border-radius:var(--radius-xl);padding:48px;position:relative;overflow:hidden;}
.cta-banner::before{content:'';position:absolute;top:-50%;right:-10%;width:400px;height:400px;background:radial-gradient(circle,rgba(255,255,255,0.1) 0%,transparent 70%);border-radius:50%;}
.cta-banner h2{font-size:2rem;font-weight:800;color:var(--white);margin-bottom:8px;}
.cta-banner p{color:rgba(255,255,255,0.8);font-size:1rem;margin-bottom:24px;}
.cta-banner .btn-group-cta{display:flex;gap:12px;flex-wrap:wrap;}
.cta-dark{background:var(--gradient-dark);}

/* ===== REVIEWS ===== */
.review-card{background:var(--white);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);height:100%;transition:all 0.3s;position:relative;}
.review-card:hover{box-shadow:var(--shadow-md);transform:translateY(-4px);}
.review-card .quote-icon{font-size:32px;color:var(--primary-light);margin-bottom:12px;}
.review-card p{font-size:14px;color:var(--gray-700);line-height:1.8;font-style:italic;margin-bottom:20px;}
.review-author{display:flex;align-items:center;gap:12px;}
.review-avatar{width:48px;height:48px;border-radius:50%;background:var(--gradient-primary);color:var(--white);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:16px;}
.review-author-info h6{font-size:14px;font-weight:600;margin-bottom:0;}
.review-author-info small{font-size:12px;color:var(--gray-500);}
.review-stars{color:#FFB800;font-size:13px;margin-bottom:12px;}
.review-platform{position:absolute;top:20px;right:20px;font-size:11px;font-weight:600;color:var(--gray-500);background:var(--gray-100);padding:4px 10px;border-radius:50px;}

/* ===== SERVICES ===== */
.service-card{background:var(--white);border-radius:var(--radius-lg);padding:32px;border:1px solid var(--gray-200);height:100%;transition:all 0.4s ease;position:relative;overflow:hidden;}
.service-card::after{content:'';position:absolute;bottom:0;left:0;width:100%;height:3px;background:var(--gradient-primary);transform:scaleX(0);transition:transform 0.4s;}
.service-card:hover{box-shadow:var(--shadow-lg);transform:translateY(-8px);}
.service-card:hover::after{transform:scaleX(1);}
.service-icon{width:64px;height:64px;background:var(--primary-lighter);border-radius:18px;display:flex;align-items:center;justify-content:center;font-size:28px;color:var(--primary);margin-bottom:20px;transition:all 0.3s;}
.service-card:hover .service-icon{background:var(--primary);color:var(--white);}
.service-card h4{font-size:1.15rem;font-weight:700;margin-bottom:12px;}
.service-card p{font-size:14px;color:var(--gray-500);line-height:1.7;}

/* ===== TECH STACK ===== */
.tech-stack-wrapper{position:relative;}
.tech-category-card{background:var(--white);border-radius:var(--radius-lg);padding:32px 28px;border:1px solid var(--gray-200);height:100%;transition:all 0.4s ease;position:relative;overflow:hidden;}
.tech-category-card::before{content:'';position:absolute;top:0;left:0;width:100%;height:4px;background:var(--gradient-primary);transform:scaleX(0);transition:transform 0.4s;transform-origin:left;}
.tech-category-card:hover{box-shadow:var(--shadow-lg);transform:translateY(-8px);border-color:var(--primary-light);}
.tech-category-card:hover::before{transform:scaleX(1);}
.tech-cat-header{display:flex;align-items:center;gap:14px;margin-bottom:24px;}
.tech-cat-icon{width:52px;height:52px;background:var(--primary-lighter);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:22px;color:var(--primary);transition:all 0.3s;flex-shrink:0;}
.tech-category-card:hover .tech-cat-icon{background:var(--primary);color:var(--white);}
.tech-cat-header h5{font-size:1.05rem;font-weight:700;margin:0;color:var(--dark);}
.tech-cat-header small{display:block;font-size:12px;color:var(--gray-500);font-weight:400;margin-top:2px;}
.tech-list{list-style:none;padding:0;margin:0;}
.tech-list li{display:flex;align-items:center;gap:12px;padding:10px 14px;margin-bottom:8px;border-radius:10px;background:var(--gray-100);font-size:14px;font-weight:500;color:var(--dark);transition:all 0.25s;cursor:default;}
.tech-list li:last-child{margin-bottom:0;}
.tech-list li:hover{background:var(--primary-lighter);transform:translateX(6px);}
.tech-list li .tech-dot{width:8px;height:8px;border-radius:50%;background:var(--primary);flex-shrink:0;}
.tech-list li:hover .tech-dot{background:var(--accent);box-shadow:0 0 0 3px rgba(0,200,83,0.2);}
.tech-marquee-row{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:48px;}
.tech-floating-tag{display:inline-flex;align-items:center;gap:8px;background:var(--white);border:1px solid var(--gray-200);border-radius:50px;padding:10px 20px;font-size:13px;font-weight:600;color:var(--dark);transition:all 0.3s;box-shadow:var(--shadow-sm);}
.tech-floating-tag:hover{border-color:var(--primary);background:var(--primary-lighter);transform:translateY(-3px);box-shadow:var(--shadow-md);}
.tech-floating-tag .tft-icon{width:28px;height:28px;border-radius:50%;background:var(--primary-lighter);display:flex;align-items:center;justify-content:center;font-size:14px;color:var(--primary);}
.tech-floating-tag:hover .tft-icon{background:var(--primary);color:var(--white);}

/* ===== PRICING ===== */
.pricing-card{background:var(--white);border-radius:var(--radius-lg);padding:32px;border:1px solid var(--gray-200);height:100%;transition:all 0.4s;position:relative;}
.pricing-card.featured{border-color:var(--primary);box-shadow:var(--shadow-lg);transform:scale(1.02);}
.pricing-card.featured .popular-tag{position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:var(--gradient-primary);color:var(--white);font-size:11px;font-weight:700;padding:5px 20px;border-radius:50px;text-transform:uppercase;letter-spacing:1px;}
.pricing-card:hover{box-shadow:var(--shadow-lg);transform:translateY(-6px);}
.pricing-card.featured:hover{transform:scale(1.02) translateY(-6px);}
.pricing-card h4{font-size:1.1rem;font-weight:700;margin-bottom:8px;}
.pricing-amount{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:8px;}
.pricing-amount small{font-size:0.9rem;font-weight:500;color:var(--gray-500);}
.pricing-desc{font-size:13px;color:var(--gray-500);margin-bottom:20px;line-height:1.6;}
.pricing-features{list-style:none;padding:0;margin-bottom:24px;}
.pricing-features li{font-size:13px;color:var(--gray-700);padding:8px 0;border-bottom:1px solid var(--gray-100);display:flex;align-items:center;gap:10px;}
.pricing-features li i{color:var(--accent);font-size:16px;}

/* ===== INDUSTRIES ===== */
.industry-chip{display:inline-flex;align-items:center;gap:10px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius);padding:16px 24px;font-size:14px;font-weight:600;color:var(--dark);transition:all 0.3s;}
.industry-chip:hover{border-color:var(--primary);background:var(--primary-lighter);box-shadow:var(--shadow-sm);transform:translateY(-3px);}
.industry-chip i{font-size:22px;color:var(--primary);}

/* ===== TRENDS ===== */
.trend-card{background:var(--white);border-radius:var(--radius-lg);padding:28px;border:1px solid var(--gray-200);height:100%;transition:all 0.3s;}
.trend-card:hover{box-shadow:var(--shadow-md);transform:translateY(-4px);}
.trend-number{font-size:2.5rem;font-weight:900;color:var(--primary-light);line-height:1;margin-bottom:12px;}
.trend-card h5{font-size:1rem;font-weight:700;margin-bottom:10px;}
.trend-card p{font-size:13px;color:var(--gray-500);line-height:1.7;}
.trend-tags{display:flex;gap:6px;flex-wrap:wrap;margin-top:12px;}
.trend-tag{background:var(--primary-lighter);color:var(--primary);font-size:11px;font-weight:600;padding:4px 10px;border-radius:50px;}

/* ===== GLOBAL PARTNER ===== */
.location-badge{display:inline-flex;align-items:center;gap:6px;background:var(--primary-lighter);color:var(--primary);font-size:13px;font-weight:600;padding:8px 16px;border-radius:50px;}
.savings-highlight{background:var(--gradient-accent);color:var(--white);border-radius:var(--radius-lg);padding:24px 32px;display:flex;align-items:center;gap:16px;}
.savings-highlight i{font-size:36px;}
.savings-highlight h5{font-weight:700;margin-bottom:4px;color:var(--white);}
.savings-highlight p{font-size:13px;margin:0;opacity:0.9;}

/* ===== CONTACT / FORM ===== */
.contact-section{background:var(--gradient-dark);position:relative;overflow:hidden;}
.contact-section::before{content:'';position:absolute;top:-30%;left:-10%;width:600px;height:600px;background:radial-gradient(circle,rgba(11,87,208,0.12) 0%,transparent 70%);border-radius:50%;}
.contact-form-wrapper{background:var(--white);border-radius:var(--radius-xl);padding:40px;box-shadow:0 20px 60px rgba(0,0,0,0.2);}
.contact-form-wrapper h3{font-size:1.5rem;font-weight:800;margin-bottom:4px;}
.contact-form-wrapper .form-control,.contact-form-wrapper .form-select{border:1.5px solid var(--gray-200);border-radius:var(--radius);padding:12px 16px;font-family:'Poppins',sans-serif;font-size:14px;}
.contact-form-wrapper .form-control:focus,.contact-form-wrapper .form-select:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(11,87,208,0.1);}
.calendly-placeholder{background:var(--gray-100);border:2px dashed var(--gray-200);border-radius:var(--radius-lg);min-height:400px;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:32px;}
.calendly-placeholder i{font-size:48px;color:var(--primary);margin-bottom:16px;}
.calendly-placeholder h5{font-weight:700;margin-bottom:8px;}
.calendly-placeholder p{font-size:13px;color:var(--gray-500);}

/* ===== FOOTER ===== */
.footer{background:var(--dark);padding:40px 0 24px;}
.footer p{color:rgba(255,255,255,0.5);font-size:13px;}
.footer a{color:rgba(255,255,255,0.7);text-decoration:none;transition:color 0.3s;}
.footer a:hover{color:var(--white);}

/* ===== FLOATING CTA ===== */
.floating-cta{position:fixed;bottom:24px;right:24px;z-index:999;display:flex;flex-direction:column;gap:12px;}
.floating-btn{width:56px;height:56px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:22px;color:var(--white);border:none;cursor:pointer;box-shadow:0 4px 20px rgba(0,0,0,0.2);transition:all 0.3s;text-decoration:none;}
.floating-btn:hover{transform:scale(1.1);color:var(--white);}
.floating-btn.phone{background:var(--accent);}
.floating-btn.chat{background:var(--primary);}

/* ===== COUNTER ANIMATION ===== */
.counter-row{display:flex;justify-content:center;gap:48px;flex-wrap:wrap;}
.counter-item{text-align:center;}
.counter-number{font-size:3rem;font-weight:900;color:var(--white);}
.counter-label{font-size:14px;color:rgba(255,255,255,0.6);font-weight:500;}



/* ===== SCROLL ANIMATIONS ===== */
[data-aos]{transition-duration:600ms!important;}
.custom-header{top:0;left:0;z-index:9;width:100%;background:#fff;position:fixed;margin:0;}
header.mob-header.bg-white{display:none!important;}
.custom-header nav.navbar.navbar-expand-lg{padding:20px 0;}
.custom-header .navbar ul.navbar-nav{border-radius:75px;border:1px solid #33394E;background:rgba(255,255,255,0.10);padding:8px 15px;margin:auto; /* show when req */display:none;}
.custom-header .navbar ul.navbar-nav li.header-link  a{color:#FFF;font-size:16px;display:inline-block;font-weight:500;line-height:normal;padding:8px 17px;}
.custom-header .navbar ul.navbar-nav li.header-link  a:hover{color:#8fceed;}
section.conntect--us.mn_fooer .consulting--container ul li a{border-radius:5px;border:1px solid #244F6B;font-weight:600;text-align:left;background:#fff;}
.footer-custom{border:1px solid #FFFFFF14;padding:20px;}
section.conntect--us .footer-custom p{text-align:center;padding:20px 0;color:#fff;background:rgba(9,23,35,1);font-size:16px;font-weight:400;line-height:24px;margin:0;border-top:1px solid rgba(255,255,255,.2);}
section.conntect--us .footer-custom p a{color:#fff;text-decoration:underline;}
.connect-with-us{display:inline-block;width:100%;}
section.conntect--us .follow-up{margin:50px 0;padding:0}
section.conntect--us.mn_fooer .consulting--container ul{padding:0;display:flex;align-items:center;margin-top:10px;}
section.conntect--us.mn_fooer .consulting--container li a img{display:block;margin-bottom:7px;}
section.conntect--us .follow-up{margin:50px 0;}
section.conntect--us .follow-up a{color:#fff;font-size:16px;font-weight:500;border:1px solid #FFFFFF26;border-radius:8px;background:transparent;opacity:1;height:100%;display:inline-block;width:100%;}
section.conntect--us.mn_fooer .footer-custom p.copyright{background:transparent;border:0;padding-top:0;text-align:left;}
section.conntect--us.mn_fooer .footer-custom p.copyright a{color:#fff;text-decoration:underline;}
section.trusted-partner{margin:50px 0 0;}
section.trusted-partner h3{color:#0F1528;border-radius:100px;border:1px solid rgba(0,125,178,0.20);background:rgba(0,125,178,0.10);font-size:22px;font-weight:500;line-height:normal;padding:8px 18px;}
section.trusted-partner ul{gap:0 20px}
section.trusted-partner li{padding:40px 0;flex:calc(16.66% - 20px);border-radius:10px;background:radial-gradient(50% 50% at 50% 50%,#FCFEFF 0%,#E3F7FF 100%);}
section.trusted-partner li img{max-width:80px;max-height:80px;object-fit:contain;}
div#pricingModal{margin:0;}


/* ===== RESPONSIVE ===== */
@media(min-width:1200px) and (max-width:1539px){
    .hero-section-main{padding-top:0;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column .elementor-field.elementor-size-sm{border-radius:8px;border:1px solid #ddd;line-height:1;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column{margin-bottom:12px!important;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column .elementor-field-label{font-size:16px;margin-bottom:5px;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column textarea{height:50px;}
    .hero-form-card .form-sub{margin-bottom:0;}
    .hero-title{font-size:3rem;line-height:1.3;}
    .hero-subtitle{font-size:16px;line-height:1.8;margin-bottom:20px;}
    .consulting--container li a{font-size:16px;padding:15px!important;}
    .follow-up li{max-width:20%;width:100%}
    .connect-with-us,section.conntect--us .contact-info .border-space{padding:15px;}
}
@media (max-width:1199px){
    .hero-section-main{padding-top:0;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column .elementor-field.elementor-size-sm{border-radius:8px;border:1px solid #ddd;line-height:1;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column{margin-bottom:12px!important;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column .elementor-field-label{font-size:16px;margin-bottom:5px;}
    .hero-section-main .hero-form-card .elementor-field-group.elementor-column textarea{height:50px;}
    .hero-form-card .form-sub{margin-bottom:0;}
    .hero-title{font-size:3rem;line-height:1.3;}
    .hero-subtitle{font-size:16px;line-height:1.8;margin-bottom:20px;}
    .consulting--container li a{font-size:16px;padding:15px!important;}
    .follow-up li{max-width:20%;width:100%}
    .connect-with-us,section.conntect--us .contact-info .border-space{padding:15px;}
    section.conntect--us.mn_fooer .consulting--container ul li a{font-size:16px;padding:10px!important;}
    section.home_faq_sec .faq_card button.btn.btn-link{font-size:16px;line-height:22px;}
    .consulting--container li a{text-align:center;}
    section.conntect--us .contact-info p a{font-size:15px;}
    .conntect--us .consulting--container h3{font-size:26px;line-height:36px;max-width:650px;}
    .custom-header .navbar ul.navbar-nav li.header-link  a{font-size:16px;padding:8px 10px;}
}
@media(max-width:1024px){
    .hero-subtitle{max-width: 100%}
    section.conntect--us .contact-info p a{font-size:15px;}
    .custom-header .navbar ul.navbar-nav{padding-left:10px;padding-right:10px;}
    .custom-header .navbar ul.navbar-nav li.header-link a{padding:8px 12px}
    .footer-bottom-new .outline-border{margin:0!important;padding:0 10px!important;}
}
@media(min-width:768px) and (max-width:1024px){
    section.conntect--us .contact-info p img{max-width:40px;}
    section.conntect--us.mn_fooer .consulting--container ul{flex-wrap:wrap;padding-left:0;}
    section.conntect--us.mn_fooer .consulting--container li{max-width:32%;}

}
@media(max-width:991px){
    .header-call-link{line-height: normal!important;}
    .header-call-link{color:#fff;}
    .header-call-link img{filter:brightness(0) invert(1);}
    .consulting--container{padding:15px;}
    .conntect--us .consulting--container h3{font-size:25px;line-height:38px;}
    section.conntect--us.mn_fooer .consulting--container li{padding:0 5px}
    section.conntect--us .follow-up{margin:20px 0 0;}
    .custom-header nav.navbar.navbar-expand-lg button.navbar-toggler{background:transparent}
    .custom-header .navbar ul.navbar-nav{border-radius:10px;background:transparent;border:0;display:inline-block;width:100%;padding:0  0 20px;}
    a.enquiry-btn.new-btn{margin:0;font-size:0;padding:0;border:1px solid #fff;width:35px;height:35px;display:flex;align-items:center;justify-content:center;}
    a.enquiry-btn.new-btn img{max-width:20px;}
    .custom-header .navbar-collapse{background:#000;}
    .custom-header div.navbar-collapse{background:#041f2f;border:1px solid #33394E;padding:10px 10px 30px;}
    .adobe-img{justify-content:center;}
}
@media(max-width:767px){
    .consulting--container li a img{margin:0 auto!important;}
    section.trusted-partner li{flex:calc(50% - 15px);}
    section.trusted-partner ul{gap:15px 15px;}
    section .award-card-box{flex:0 0 50%;}
    .btn-wraper{gap:10px;flex-wrap:wrap;}
    .hero_sec-btn .adobe-img img{max-width:140px;}
    .adobe-img{justify-content:center;gap:0px 10px;padding-top:0;}
    .conntect--us .consulting--container h3 strong{font-size:26px;}
    section.conntect--us .follow-up a{padding:10px 10px;}
    section.conntect--us .contact-info p a{font-size:15px;}
    .follow-up li{max-width:50%;width:100%;padding:0 7px;height:100%;flex:0 0 50%;}
    section.conntect--us .contact-info p{font-size:16px;}
    section.conntect--us .follow-up a{padding:10px 10px;}
    section.conntect--us [class*="col"]{padding:0 15px;flex:0 0 100%;}
    section.conntect--us [class*="col"].follow-up.col-12{padding:0;}
    section.conntect--us .connect-with-us p.address{padding:20px 0 20px!important;}
    .follow-up li a{padding:10px;}
    .follow-up ul{justify-content:center!important;}
    .follow-up li a img{width:auto;}
    section.conntect--us [class*="col"].col-md-3{flex:0 0 50%;}
}
@media (max-width:1199px){
    .hero-title{font-size:3rem;}
    .section-title{font-size:2.2rem;}
}
@media (max-width:991px){
    .hero-title{font-size:2.5rem;}
    .hero-section-main{min-height:auto;padding:50px 0 60px;}
    .hero-stats{gap:24px;}
    .hero-form-card{margin-top:40px;}
    .section-pad{padding:60px 0;}
    .section-pad-lg{padding:70px 0;}
    .cta-banner{padding:36px;}
    .cta-banner h2{font-size:1.6rem;}
    .trust-bar-inner{gap:20px;}
    .pricing-card.featured{transform:scale(1);}
    .pricing-card.featured:hover{transform:translateY(-6px);}
}

@media(max-width:1440px){
    .follow-up li{max-width:20%;}
    .follow-up li{max-width:20%;}
    .connect-with-us,section.conntect--us .contact-info .border-space{padding:15px;}
}
@media(min-width:1025px) and (max-width:1199px){
    .custom-header .navbar ul.navbar-nav li.header-link  a{font-size:16px;padding:8px 10px;}
}
@media(max-width:1024px){
    section.conntect--us.mn_fooer .consulting--container ul li a{text-align:center;}
    .custom-header .navbar ul.navbar-nav{padding-left:10px;padding-right:10px;}
    .connect-with-us{padding-left:15px;}
    .conntect--us .consulting--container h3 strong{font-size:32px;line-height:45px;}
    section.conntect--us{margin-top:0;}
    .custom-header .navbar ul.navbar-nav li.header-link a{padding:8px 12px}
    .footer-bottom-new .outline-border{margin:0!important;padding:0 10px!important;}
}
@media(min-width:768px) and (max-width:1024px){
    section.conntect--us.mn_fooer .consulting--container ul{flex-wrap:wrap;padding-left:0;}
    section.conntect--us.mn_fooer .consulting--container li{padding:0 5px;flex:0 0 48%;max-width:48%;margin:6px 0;}
}
@media(max-width:991px){
    .connect-with-us{padding-left:0;padding-top:15px;}
    section.conntect--us.mn_fooer .consulting--container li{padding:0 5px}
    section.conntect--us .follow-up{margin:20px 0 20px;}
    .custom-header nav.navbar.navbar-expand-lg button.navbar-toggler{background:transparent}
    .custom-header .navbar ul.navbar-nav{border-radius:10px;background:transparent;border:0;display:inline-block;width:100%;padding:0  0 20px;}
    a.enquiry-btn.new-btn{margin:0;font-size:0;padding:0;border:1px solid #fff;width:35px;background:transparent;height:35px;display:flex;align-items:center;justify-content:center;}
    a.enquiry-btn.new-btn img{max-width:20px;}
    .custom-header .navbar-collapse{background:#000;}
    .custom-header div.navbar-collapse{background:#041f2f;border:1px solid #33394E;padding:10px 10px 30px;}
    .custom-header nav.navbar.navbar-expand-lg{padding:10px 0;}
    .custom-header{position:fixed;background:#0073aa;}
    .navbar-brand svg{filter:brightness(0) invert(1);}
    .adobe-img{justify-content:center;}
.header-call-link {
font-size: 0 !important;        line-height: normal;
}
.header-call-link >span {
background: #121f33;
display: flex;
border-radius: 100%;
height: 40px;
width: 40px;
align-items: center;
justify-content: center;
line-height: normal;
}
.header-call-link img{margin-right: 0 !important;}
}
@media (max-width:767px){
    .header-call-link{font-size:0 !important;display:flex;align-items:center;}
    .hero-title{font-size:2rem;}
    .hero-subtitle{font-size:1rem;}
    .hero-stats{gap:10px 0;}
    .hero-stat {
    padding: 10px 10px;
    max-width: 50%;
    width: 100%;
}
    .hero-stat-number{font-size:1.6rem;}
    .hero-cta-group{flex-direction:column;}
    .hero-cta-group .btn{width:100%;justify-content:center;}
    .section-title{font-size:1.8rem;}
    .section-subtitle{font-size:0.95rem;}
    .cta-banner{padding:28px;border-radius:var(--radius-lg);}
    .cta-banner h2{font-size:1.4rem;}
    .cta-banner .btn-group-cta{flex-direction:column;}
    .cta-banner .btn-group-cta .btn{width:100%;justify-content:center;}
    .trust-bar-inner{gap:12px;}
    .trust-badge{padding:6px 12px;}
    .floating-cta{bottom:16px;right:16px;}
    .counter-row{gap:24px;}
    .counter-number{font-size:2.2rem;}
    .navbar-custom .nav-phone{display:none;}
    .header-call-link >span{background:#13233b;display:flex;border-radius:100%;height:40px;width:40px;align-items:center;justify-content:center;line-height:normal;}
    .header-call-link img{margin-right:0;filter:brightness(0) invert(1);}
    section.trusted-partner li{flex:calc(50% - 15px);}
    section.trusted-partner ul{gap:15px 15px;}
    section .award-card-box{flex:0 0 50%;}
    .btn-wraper{gap:10px;flex-wrap:wrap;}
    .hero_sec-btn .adobe-img img{max-width:140px;}
    .adobe-img{justify-content:center;gap:0px 10px;padding-top:0;}
    .follow-up ul li a:hover{padding:10px 10px;}
    .conntect--us .consulting--container h3 strong{font-size:26px;}
    section.conntect--us .follow-up a{padding:10px 10px;}
    section.conntect--us .contact-info p a{font-size:15px;}
    .follow-up li{max-width:50%;width:100%;padding:0 7px;height:100%;flex:0 0 50%;}
    section.conntect--us .contact-info p{font-size:16px;}
    section.conntect--us .follow-up a{padding:10px 10px;}
    section.conntect--us [class*="col"]{padding:0 15px;flex:0 0 100%;}
    section.conntect--us [class*="col"].follow-up.col-12{padding:0;}
    section.conntect--us .connect-with-us p.address{padding:20px 0 20px!important;}
    .follow-up li a{padding:10px;}
    .follow-up ul{justify-content:center;gap:10px 0}
    .follow-up li a img{width:auto;}
    .servicesbox{padding:20px;}
    .industry-chip{max-width:calc(50% - 9px);width:100%;}
    section.conntect--us [class*="col"].col-md-3{flex:0 0 50%;}
}
@media(max-width:640px){
    .connect-with-us{flex-direction:column;}
    section.conntect--us .contact-info img{max-width:100%;}
    section.conntect--us.mn_fooer .consulting--container ul{flex-wrap:wrap;gap:0;margin:0;}
    section.conntect--us.mn_fooer .consulting--container li{padding:0 5px;flex:0 0 100%;max-width:100%;margin:6px 0;}
    a.btn.emizen-btn,.m_brand_success .brand_su_inner .brand_su_content a.btn.emizen-btn{padding:10px 15px;font-size:15px;}
    section.em-review-sec .owl-stage .item .slider-card .btn.emizen-btn{padding:10px 20px;}
}
@media (max-width:575px){
    .hero-title{font-size:1.75rem;}
    .hero-form-card{padding:24px;}
    .contact-form-wrapper{padding:24px;}
    .service-card,.pricing-card{padding:24px;}
    a.navbar-brand img{max-width:180px;}
}
@media(max-width:480px){
    a.navbar-brand img{max-width:165px;}
}
.watsappic{position:fixed;z-index:9;bottom:10px;left:10px;height:auto;float:left;}
.zls-sptwndw.siqembed.siqtrans.zsiq-mobhgt.zsiq-newtheme.siq_rht.zsiq_size2.siqanim{display:none!important;}
.zsiq_floatmain.zsiq_theme1.siq_bR{display:none!important;}
li{list-style:none;}

</style>


    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <!-- ===== SCRIPTS ===== -->
        
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
    
<style>
      
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
                        <a class="navbar-brand" href="https://emizentech.com/"><svg width="210" height="49" viewBox="0 0 210 49" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <a href="tel:+1(989)535-9295" class="ms-md-auto header-call-link"> <span><img src="https://emizentech.com/wp-content/uploads/2026/03/Phone-black.svg" width="20" height="20" alt="+(989)535-9295"></span>+1(989)535-9295</a>
                       
                        <a  data-toggle="modal" data-target="#pricingModal" class="enquiry-btn new-btn ms-3 btn emizen-btn d-none d-lg-block"><img class="d-lg-none d-block" src="https://emizentech.com/wp-content/uploads/2025/08/phone-call.svg" alt="Get My Free Consultation" width="30" height="30"> <span class="pre-text"> Get My Free Consultation</span> <span class="hover-text">Map Your Project Today!</span> </a>

                    </nav>
                </div>
            </div>

           <!-- ===== HERO SECTION ===== -->
<section class="hero-section-main" id="hero">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 hero-content">
                <div class="hero-badge">
                    <span class="dot"></span>
                    Trusted by 250+ US Businesses
                </div>
                <h1 class="hero-title">
                    Custom <span class="highlight">Web Development</span> Company in the USA
                </h1>
                <p class="hero-subtitle">
                    Are you looking for an enterprise web application or a progressive web app? We offer custom web development services tailored to your specific business requirements.
                </p>
                <div class="hero-cta-group">
                    <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-primary-custom">
                        <i class="bi bi-rocket-takeoff"></i> Get Your Free Consultation
                    </a>
                    <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-outline-custom" style="border-color: rgba(255,255,255,0.3); color: var(--white);">
                        <i class="bi bi-camera-video"></i> 60 Min Free Call
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-number">1200<span>+</span></div>
                        <div class="hero-stat-label">Projects Delivered</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">12<span>+</span></div>
                        <div class="hero-stat-label">Years Experience</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">250<span>+</span></div>
                        <div class="hero-stat-label">Happy Clients</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">95<span>%</span></div>
                        <div class="hero-stat-label">Success Rate</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ml-auto">
                <div class="hero-form-card ms-auto px-lg-4 px-3">
                    <h3>Get Your Free Proposal</h3>
                    <p class="form-sub">Tell us about your project &mdash; response within 24 hours</p>
                    <?php echo do_shortcode('[elementor-template id="37178"]'); ?>
                    <div class="form-trust-row">
                        <div class="form-trust-item">
                            <i class="bi bi-shield-check"></i> NDA Protected
                        </div>
                        <div class="form-trust-item">
                            <i class="bi bi-clock-fill"></i> 24hr Response
                        </div>
                        <div class="form-trust-item">
                            <i class="bi bi-cash-stack"></i> Free Quote
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== TRUST BAR ===== -->
<section class="trust-bar">
    <div class="container">
        <div class="trust-bar-inner">
            <div class="trust-badge">
                <div class="trust-badge-icon">&#11088;</div>
                <div class="trust-badge-text">
                    Clutch 5.0
                    <div class="trust-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <small>138+ Reviews</small>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon"><i class="bi bi-trophy-fill" style="color: #FFB800;"></i></div>
                <div class="trust-badge-text">
                    Clutch Global Leader
                    <small>Spring 2024 Winner</small>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon"><i class="bi bi-award-fill" style="color: var(--primary);"></i></div>
                <div class="trust-badge-text">
                    Clutch Champion
                    <small>Spring 2024</small>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon"><i class="bi bi-patch-check-fill" style="color: #4285F4;"></i></div>
                <div class="trust-badge-text">
                    GoodFirms
                    <small>Top Rated</small>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon"><i class="bi bi-star-fill" style="color: #FF492C;"></i></div>
                <div class="trust-badge-text">
                    G2 Verified
                    <small>High Performer</small>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon"><i class="bi bi-globe" style="color: var(--accent);"></i></div>
                <div class="trust-badge-text">
                    Best AI Solutions
                    <small>UAE Awards 2025</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PORTFOLIO ===== -->
<section class="section-pad" id="portfolio">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label"><i class="bi bi-collection-fill"></i> Our Work</span>
            <h2 class="section-title mx-auto">Explore Our <span>Web Application</span> Development Portfolio</h2>
            <p class="section-subtitle mx-auto">With more than 12 years of experience, we have provided strategic web application development services for a wide range of clients.</p>
        </div>
        <div class="row g-4">
            <!-- Case Study 1 -->
            <div class="col-lg-6">
                <div class="portfolio-card">
                    <div class="portfolio-card-header">
                        <div class="portfolio-card-icon"><i class="bi bi-shield-lock"></i></div>
                        <h4>Stampin.io</h4>
                        <div class="tech-tags">
                            <span class="tech-tag">Blockchain</span>
                            <span class="tech-tag">Smart Contracts</span>
                            <span class="tech-tag">CI/CD</span>
                            <span class="tech-tag">Cloud</span>
                        </div>
                    </div>
                    <div class="portfolio-card-body">
                        <p>Built a blockchain-powered certification platform with secure APIs, smart contract integration, CI/CD pipelines, and cloud infrastructure designed for enterprise-scale document verification.</p>
                        <div class="portfolio-results">
                            <div class="portfolio-result">
                                <strong>3x</strong>
                                <small>Faster Auth</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>99.9%</strong>
                                <small>Uptime</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>50K+</strong>
                                <small>Verifications</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case Study 2 -->
            <div class="col-lg-6">
                <div class="portfolio-card">
                    <div class="portfolio-card-header">
                        <div class="portfolio-card-icon"><i class="bi bi-briefcase"></i></div>
                        <h4>ShifterJob</h4>
                        <div class="tech-tags">
                            <span class="tech-tag">Cloud Architecture</span>
                            <span class="tech-tag">APIs</span>
                            <span class="tech-tag">Database</span>
                        </div>
                    </div>
                    <div class="portfolio-card-body">
                        <p>Created a scalable digital hiring platform with job posting management, applicant tracking, secure user authentication, and cloud-based backend for seamless recruitment.</p>
                        <div class="portfolio-results">
                            <div class="portfolio-result">
                                <strong>60%</strong>
                                <small>Faster Hiring</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>10K+</strong>
                                <small>Job Posts</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>2x</strong>
                                <small>User Growth</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case Study 3 -->
            <div class="col-lg-6">
                <div class="portfolio-card">
                    <div class="portfolio-card-header">
                        <div class="portfolio-card-icon"><i class="bi bi-cpu"></i></div>
                        <h4>Neo-X</h4>
                        <div class="tech-tags">
                            <span class="tech-tag">SaaS</span>
                            <span class="tech-tag">DevOps</span>
                            <span class="tech-tag">Cloud</span>
                            <span class="tech-tag">Security</span>
                        </div>
                    </div>
                    <div class="portfolio-card-body">
                        <p>Developed a scalable SaaS platform with secure login, data management, automated deployment pipelines, and continuous feature updates for modern enterprise operations.</p>
                        <div class="portfolio-results">
                            <div class="portfolio-result">
                                <strong>40%</strong>
                                <small>Faster Releases</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>5x</strong>
                                <small>User Capacity</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>99.5%</strong>
                                <small>Uptime</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case Study 4 -->
            <div class="col-lg-6">
                <div class="portfolio-card">
                    <div class="portfolio-card-header">
                        <div class="portfolio-card-icon"><i class="bi bi-people"></i></div>
                        <h4>Sukkal</h4>
                        <div class="tech-tags">
                            <span class="tech-tag">Custom App</span>
                            <span class="tech-tag">APIs</span>
                            <span class="tech-tag">Cloud</span>
                        </div>
                    </div>
                    <div class="portfolio-card-body">
                        <p>Built a unified ecosystem for opportunity discovery with secure backend APIs, cloud architecture, streamlined listing management, and professional networking capabilities.</p>
                        <div class="portfolio-results">
                            <div class="portfolio-result">
                                <strong>3x</strong>
                                <small>Engagement</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>80%</strong>
                                <small>Faster Discovery</small>
                            </div>
                            <div class="portfolio-result">
                                <strong>100%</strong>
                                <small>Digital Growth</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 1 ===== -->
<section class="section-pad-lg" style="padding-top: 0;">
    <div class="container">
        <div class="cta-banner text-center">
            <h2><i class="bi bi-trophy me-2"></i>Join Our Success Club of 1200+ Projects!</h2>
            <p>Partner with the team that delivers results. Let's discuss how we can transform your business.</p>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-white-custom"><i class="bi bi-chat-dots"></i> Consult Your Project Scope</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-telephone"></i> Free Call with Project Managers</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== REVIEWS ===== -->
<section class="section-pad" style="background: var(--gray-100);" id="reviews">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label"><i class="bi bi-chat-quote-fill"></i> Testimonials</span>
            <h2 class="section-title">What Clients Say About Our <span>Custom Web Development</span> Services</h2>
            <p class="section-subtitle mx-auto">Here's what our valuable clients have to say about our development services.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="review-card">
                    <span class="review-platform">Clutch</span>
                    <div class="review-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p>"Our project manager Robin Sharma is amazing. The team is great at communicating and always there when I need them. Highly recommend for web development."</p>
                    <div class="review-author">
                        <div class="review-avatar">JM</div>
                        <div class="review-author-info">
                            <h6>Verified Client</h6>
                            <small>US-Based Startup, CEO</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="review-card">
                    <span class="review-platform">Clutch</span>
                    <div class="review-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p>"Ayushi and her team managed to deliver on time, with low budget and app that is aligned and sometimes exceeding my expectations. Truly exceptional work."</p>
                    <div class="review-author">
                        <div class="review-avatar">SK</div>
                        <div class="review-author-info">
                            <h6>Verified Client</h6>
                            <small>Enterprise Client, Founder</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="review-card">
                    <span class="review-platform">Clutch</span>
                    <div class="review-stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p>"They have a can-do attitude and strong work ethic. Always willing to help regardless of the challenge, big or small. Our go-to development partner."</p>
                    <div class="review-author">
                        <div class="review-avatar">AW</div>
                        <div class="review-author-info">
                            <h6>Verified Client</h6>
                            <small>SaaS Company, CTO</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- ===== CTA BANNER 2 ===== -->
<section class="section-pad-lg" style="padding-bottom: 0;">
    <div class="container">
        <div class="cta-banner cta-dark text-center">
            <h2>Hundreds of US Businesses Trusted Us. <span style="color: var(--accent);">It's Your Turn Now!</span></h2>
            <p>From startups to Fortune 500 companies, our web development expertise drives real business results.</p>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-primary-custom"><i class="bi bi-file-earmark-text"></i> Get Your Proposal</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-calendar-check"></i> Schedule a Call</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="section-pad-lg" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label"><i class="bi bi-gear-fill"></i> What We Do</span>
            <h2 class="section-title">Our Core <span>Web App Development</span> Services</h2>
            <p class="section-subtitle mx-auto">From custom platforms to enterprise SaaS products, our web app development services help businesses launch robust digital solutions.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-code-slash"></i></div>
                    <h4>Custom Web Apps &amp; Website Development</h4>
                    <p>Secure architectures, intuitive interfaces, and high-speed experiences designed for performance, scalability, and long-term flexibility around your unique business needs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-phone"></i></div>
                    <h4>Progressive Web Apps (PWA)</h4>
                    <p>App-like experiences through web browsers with rapid loading times, offline capabilities, and responsive design ensuring smooth experiences on any device.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-building"></i></div>
                    <h4>Enterprise Solutions</h4>
                    <p>Dependable systems to manage intricate workflows and substantial data. Focused on security, scalability, and effortless integration for large organizations.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon"><i class="bi bi-cloud"></i></div>
                    <h4>SaaS &amp; Cloud Platforms</h4>
                    <p>Cloud-based web applications supporting thousands of users simultaneously with focus on performance, data security, and seamless deployment pipelines.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 3 ===== -->
<section style="padding-bottom: 80px;">
    <div class="container">
        <div class="cta-banner text-center">
            <h2><i class="bi bi-lightbulb me-2"></i>Wandering with Ideas for a Web Application?</h2>
            <p>Turn your concept into a high-performance web app with the help of our skilled developers.</p>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-white-custom"><i class="bi bi-rocket-takeoff"></i> Let's Start Your Project</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-headset"></i> Schedule Call with Technical Expert</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== TECH STACK ===== -->
<section class="section-pad" style="background: var(--gray-100);" id="tech">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label"><i class="bi bi-stack"></i> Tech Stack</span>
            <h2 class="section-title">Web Application Development Across <span>All Modern Stacks</span></h2>
            <p class="section-subtitle mx-auto">We pick the right tools for your project — not the other way around. Here's what powers our builds.</p>
        </div>

        <div class="tech-stack-wrapper">
            <div class="row g-4">
                <!-- Frontend -->
                <div class="col-lg-3 col-md-6">
                    <div class="tech-category-card">
                        <div class="tech-cat-header">
                            <div class="tech-cat-icon"><i class="bi bi-window-stack"></i></div>
                            <div>
                                <h5>Frontend</h5>
                                <small>Interfaces &amp; Interactions</small>
                            </div>
                        </div>
                        <ul class="tech-list">
                            <li><span class="tech-dot"></span> Angular</li>
                            <li><span class="tech-dot"></span> AngularJS</li>
                            <li><span class="tech-dot"></span> ReactJS</li>
                            <li><span class="tech-dot"></span> React</li>
                            <li><span class="tech-dot"></span> JavaScript</li>
                        </ul>
                    </div>
                </div>

                <!-- Backend -->
                <div class="col-lg-3 col-md-6">
                    <div class="tech-category-card">
                        <div class="tech-cat-header">
                            <div class="tech-cat-icon"><i class="bi bi-server"></i></div>
                            <div>
                                <h5>Backend</h5>
                                <small>Logic &amp; Data Processing</small>
                            </div>
                        </div>
                        <ul class="tech-list">
                            <li><span class="tech-dot"></span> Node.js</li>
                            <li><span class="tech-dot"></span> Python</li>
                            <li><span class="tech-dot"></span> Ruby on Rails</li>
                            <li><span class="tech-dot"></span> Java</li>
                            <li><span class="tech-dot"></span> .NET</li>
                            <li><span class="tech-dot"></span> ASP.NET</li>
                        </ul>
                    </div>
                </div>

                <!-- Frameworks -->
                <div class="col-lg-3 col-md-6">
                    <div class="tech-category-card">
                        <div class="tech-cat-header">
                            <div class="tech-cat-icon"><i class="bi bi-layers"></i></div>
                            <div>
                                <h5>Frameworks</h5>
                                <small>Rapid Development</small>
                            </div>
                        </div>
                        <ul class="tech-list">
                            <li><span class="tech-dot"></span> Laravel</li>
                            <li><span class="tech-dot"></span> Django</li>
                        </ul>
                    </div>
                </div>

                <!-- E-commerce & CMS -->
                <div class="col-lg-3 col-md-6">
                    <div class="tech-category-card">
                        <div class="tech-cat-header">
                            <div class="tech-cat-icon"><i class="bi bi-cart3"></i></div>
                            <div>
                                <h5>E-commerce &amp; CMS</h5>
                                <small>Storefronts &amp; Content</small>
                            </div>
                        </div>
                        <ul class="tech-list">
                            <li><span class="tech-dot"></span> Shopify</li>
                            <li><span class="tech-dot"></span> WordPress</li>
                            <li><span class="tech-dot"></span> Magento</li>
                            <li><span class="tech-dot"></span> shopware</li>
                            <li><span class="tech-dot"></span> Bigcommerce</li>
                                                    </ul>
                    </div>
                </div>
            </div>

            <!-- Floating tech tags row -->
            <div class="tech-marquee-row">
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-cloud"></i></span> AWS</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-cloud"></i></span> Google Cloud</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-cloud"></i></span> Azure</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-database"></i></span> MongoDB</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-database"></i></span> PostgreSQL</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-database"></i></span> MySQL</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-box"></i></span> Docker</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-gear-wide-connected"></i></span> Kubernetes</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-git"></i></span> CI/CD</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-lightning"></i></span> Redis</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-search"></i></span> Elasticsearch</div>
                <div class="tech-floating-tag"><span class="tft-icon"><i class="bi bi-diagram-3"></i></span> GraphQL</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 4 ===== -->
<section class="section-pad" style="padding-top: 0;  position: relative; z-index: 2;">
    <div class="container">
        <div class="cta-banner cta-dark text-center">
            <h2>Know Your Goals, but Not Your Stack?</h2>
            <p>We're here to figure out the best tech stack, architect the solution, and deliver it to you.</p>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-primary-custom"><i class="bi bi-person-video3"></i> Talk to our CTO</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-white-custom"><i class="bi bi-clock"></i> Get Free 60 Min Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== GLOBAL PARTNER ===== -->
<section class="section-pad">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="section-label"><i class="bi bi-globe2"></i> Global Reach</span>
                <h2 class="section-title">Your Global Partner for <span>Website Development</span> Services</h2>
                <p class="section-subtitle mb-4">We focus on creating bespoke solutions. Our teams help businesses build scalable digital platforms with reliable digital products.</p>
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="location-badge"><i class="bi bi-geo-alt-fill"></i> New York</span>
                    <span class="location-badge"><i class="bi bi-geo-alt-fill"></i> Chicago</span>
                    <span class="location-badge"><i class="bi bi-geo-alt-fill"></i> Dallas</span>
                    <span class="location-badge"><i class="bi bi-geo-alt-fill"></i> Denver</span>
                    <span class="location-badge"><i class="bi bi-geo-alt-fill"></i> St. Louis</span>
                    <span class="location-badge"><i class="bi bi-geo-alt-fill"></i> Texas</span>
                </div>
                <div class="savings-highlight">
                    <i class="bi bi-piggy-bank"></i>
                    <div>
                        <h5>Save Up to 40% on Development</h5>
                        <p>Premium offshore development &mdash; same quality, significantly lower costs for startups and enterprises.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div style="background: var(--primary-lighter); border-radius: var(--radius-xl); padding: 40px; text-align: center;">
                    <div class="mb-4">
                        <div style="font-size: 3.5rem; font-weight: 900; color: var(--primary);">40%</div>
                        <div style="font-size: 1.1rem; font-weight: 600; color: var(--dark);">Lower Development Costs</div>
                        <div style="font-size: 14px; color: var(--gray-500);">Compared to US market rates</div>
                    </div>
                    <div class="row g-3 text-center">
                        <div class="col-6">
                            <div style="background: var(--white); border-radius: var(--radius); padding: 20px;">
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">200+</div>
                                <div style="font-size: 12px; color: var(--gray-500);">Expert Developers</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background: var(--white); border-radius: var(--radius); padding: 20px;">
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">24/7</div>
                                <div style="font-size: 12px; color: var(--gray-500);">Support Available</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background: var(--white); border-radius: var(--radius); padding: 20px;">
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">ISO</div>
                                <div style="font-size: 12px; color: var(--gray-500);">Certified</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background: var(--white); border-radius: var(--radius); padding: 20px;">
                                <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary);">95%</div>
                                <div style="font-size: 12px; color: var(--gray-500);">Client Retention</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 5 ===== -->
<section style="padding-bottom: 80px;">
    <div class="container">
        <div class="cta-banner text-center">
            <h2>Why Go Local When You Can Go <span style="color: var(--accent);">Better?</span></h2>
            <p>Ditch overpriced local options for expert offshore developers at 40% lower cost.</p>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-white-custom"><i class="bi bi-calendar-check"></i> Schedule a Consultation</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-headset"></i> Talk to Our Expert</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== PRICING ===== -->
<section class="section-pad" style="background: var(--gray-100);" id="pricing">
    <div class="container">
        <div class="text-center mb-5" >
            <span class="section-label"><i class="bi bi-tag-fill"></i> Pricing</span>
            <h2 class="section-title">Transparent Pricing That <span>Fits Your Needs</span></h2>
            <p class="section-subtitle mx-auto">Adaptable development models designed to align with your product vision, budget, and long-term expansion plans.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="pricing-card">
                    <h4>MVP Development</h4>
                    <div class="pricing-amount">$5K - $15K</div>
                    <p class="pricing-desc">Get your idea off the ground with a lean, scalable Minimum Viable Product.</p>
                    <ul class="pricing-features">
                        <li><i class="bi bi-check-circle-fill"></i> Core Features</li>
                        <li><i class="bi bi-check-circle-fill"></i> User-Friendly UI</li>
                        <li><i class="bi bi-check-circle-fill"></i> Reliable Architecture</li>
                        <li><i class="bi bi-check-circle-fill"></i> Market-Ready Launch</li>
                    </ul>
                    <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-outline-custom w-100 justify-content-center">Get Started</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="pricing-card featured">
                    <span class="popular-tag">Most Popular</span>
                    <h4>Business Web App</h4>
                    <div class="pricing-amount">$15K - $40K</div>
                    <p class="pricing-desc">Internal systems, portals, or customer platforms that streamline operations.</p>
                    <ul class="pricing-features">
                        <li><i class="bi bi-check-circle-fill"></i> Full-Stack Development</li>
                        <li><i class="bi bi-check-circle-fill"></i> Scalable Architecture</li>
                        <li><i class="bi bi-check-circle-fill"></i> API Integrations</li>
                        <li><i class="bi bi-check-circle-fill"></i> Dedicated PM</li>
                    </ul>
                    <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-primary-custom w-100 justify-content-center">Get Quote</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="pricing-card">
                    <h4>Enterprise &amp; Bespoke</h4>
                    <div class="pricing-amount">$40K+ <small>Custom</small></div>
                    <p class="pricing-desc">Complex business ecosystems with high security, integrations, and custom workflows.</p>
                    <ul class="pricing-features">
                        <li><i class="bi bi-check-circle-fill"></i> Enterprise Security</li>
                        <li><i class="bi bi-check-circle-fill"></i> Custom Workflows</li>
                        <li><i class="bi bi-check-circle-fill"></i> Multi-System Integration</li>
                        <li><i class="bi bi-check-circle-fill"></i> Digital Transformation</li>
                    </ul>
                    <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-outline-custom w-100 justify-content-center">Custom Quote</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="pricing-card">
                    <h4>Dedicated Teams</h4>
                    <div class="pricing-amount">Flexible <small>Retainer</small></div>
                    <p class="pricing-desc">Scale your capacity with experienced developers working exclusively on your project.</p>
                    <ul class="pricing-features">
                        <li><i class="bi bi-check-circle-fill"></i> Exclusive Team</li>
                        <li><i class="bi bi-check-circle-fill"></i> Faster Delivery</li>
                        <li><i class="bi bi-check-circle-fill"></i> Flexible Engagement</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ongoing Support</li>
                    </ul>
                    <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-outline-custom w-100 justify-content-center">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 6 ===== -->
<section class="section-pad">
    <div class="container">
        <div class="cta-banner cta-dark text-center">
            <h2>Pick Your Model Right to <span style="color: var(--accent);">Skip Overpaying!</span></h2>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-primary-custom"><i class="bi bi-calculator"></i> Get Custom Quote</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-piggy-bank"></i> Save ~40% vs Market</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== INDUSTRIES ===== -->
<section class="section-pad" style="background: var(--gray-100);" id="industries">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label"><i class="bi bi-grid-3x3-gap-fill"></i> Industries</span>
            <h2 class="section-title">Industries We <span>Transformed</span> with Web Technology</h2>
            <p class="section-subtitle mx-auto">One size doesn't fit all. Our specialists craft web platforms to address the specific hurdles and prospects of various industries.</p>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <div class="industry-chip"><i class="bi bi-heart-pulse"></i> Healthcare</div>
            <div class="industry-chip"><i class="bi bi-bank"></i> Finance &amp; Fintech</div>
            <div class="industry-chip"><i class="bi bi-cart3"></i> E-Commerce &amp; Retail</div>
            <div class="industry-chip"><i class="bi bi-mortarboard"></i> EdTech &amp; E-Learning</div>
            <div class="industry-chip"><i class="bi bi-cloud-arrow-up"></i> SaaS &amp; Enterprise</div>
            <div class="industry-chip"><i class="bi bi-controller"></i> Media &amp; Gaming</div>
            <div class="industry-chip"><i class="bi bi-truck"></i> Logistics &amp; Supply Chain</div>
            <div class="industry-chip"><i class="bi bi-house-door"></i> Real Estate &amp; PropTech</div>
            <div class="industry-chip"><i class="bi bi-cup-hot"></i> Food &amp; Restaurant Tech</div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 7 ===== -->
<section class="section-pad" style="padding-top: 0;  position: relative; z-index: 2;">
    <div class="container">
        <div class="cta-banner text-center">
            <h2>Settling for Generic Web Apps? <span style="color: var(--accent);">Let's Build the Best of Your Industry.</span></h2>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-white-custom"><i class="bi bi-person-badge"></i> Talk to Our Industry Expert</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-rocket-takeoff"></i> Kickstart Your Project</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== TRENDS 2026 ===== -->
<section class="section-pad pt-3" id="trends">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label"><i class="bi bi-graph-up-arrow"></i> Trends</span>
            <h2 class="section-title">What's Shaping <span>Web Development</span> in 2026?</h2>
            <p class="section-subtitle mx-auto">Stay ahead of the curve with modern trends redefining performance, user experience, and scalability.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="trend-card">
                    <div class="trend-number">01</div>
                    <h5>AI-Native Architecture</h5>
                    <p>Integration of LLMs into core business workflows with real-time data processing and self-healing codebases.</p>
                    <div class="trend-tags">
                        <span class="trend-tag">LLM Integration</span>
                        <span class="trend-tag">Automation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="trend-card">
                    <div class="trend-number">02</div>
                    <h5>Progressive Web Apps (PWA)</h5>
                    <p>Faster, more reliable, and closer to native apps with offline-first functionality and native-like push notifications.</p>
                    <div class="trend-tags">
                        <span class="trend-tag">Offline-First</span>
                        <span class="trend-tag">Push Notifications</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="trend-card">
                    <div class="trend-number">03</div>
                    <h5>WebAssembly (Wasm)</h5>
                    <p>Running heavy computational tasks at native speeds, enabling complex video and 3D tools without downloads.</p>
                    <div class="trend-tags">
                        <span class="trend-tag">Native Speed</span>
                        <span class="trend-tag">3D/Video</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="trend-card">
                    <div class="trend-number">04</div>
                    <h5>API-First Development</h5>
                    <p>Designing the API first-hand enables seamless integrations, faster development cycles, and third-party connectivity.</p>
                    <div class="trend-tags">
                        <span class="trend-tag">Faster Cycles</span>
                        <span class="trend-tag">Integrations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="trend-card">
                    <div class="trend-number">05</div>
                    <h5>Edge-First Rendering</h5>
                    <p>Shifting from central servers to distributed edge servers for near-zero latency and faster personalized experiences.</p>
                    <div class="trend-tags">
                        <span class="trend-tag">Zero Latency</span>
                        <span class="trend-tag">CDN Edge</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="trend-card">
                    <div class="trend-number">06</div>
                    <h5>Predictive UX Design</h5>
                    <p>Layouts that dynamically reorganize based on intent with reduced friction and behavioral analytics pre-loading data.</p>
                    <div class="trend-tags">
                        <span class="trend-tag">Smart UX</span>
                        <span class="trend-tag">Analytics</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA BANNER 8 ===== -->
<section style="padding-bottom: 80px;">
    <div class="container">
        <div class="cta-banner text-center">
            <h2>Know What's Best for Your App, <span style="color: var(--accent);">With Our CTO!</span></h2>
            <p>No fluff, just practical insights on building, scaling, and launching your web app the right way.</p>
            <div class="btn-group-cta justify-content-center pt-3">
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-white-custom"><i class="bi bi-telephone"></i> Free Call with CTO</a>
                <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom"><i class="bi bi-clock"></i> Get 60 Min Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== READY CTA FULL-WIDTH ===== -->
<section class="section-pad" style="background: var(--gradient-dark); position: relative; overflow: hidden;">
    <div style="position: absolute; top: -40%; right: -15%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(11,87,208,0.12) 0%, transparent 70%); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -40%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(0,200,83,0.06) 0%, transparent 70%); border-radius: 50%;"></div>
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(11,87,208,0.25); border: 1px solid rgba(11,87,208,0.35); color: #7CB3FF; font-size: 13px; font-weight: 600; padding: 10px 24px; border-radius: 50px; margin-bottom: 28px; letter-spacing: 1px; text-transform: uppercase;">
            <i class="bi bi-chat-dots-fill"></i> LET'S TALK
        </div>
        <h2 class="section-title text-white">
            Ready to Develop a Web Application? <span style="color: var(--accent);">Let's Talk.</span>
        </h2>
        <p style="font-size: 1.1rem; color: rgba(255,255,255,0.55); max-width: 600px; margin: 0 auto 36px; line-height: 1.7;">
            Partner with EmizenTech to build scalable and secure digital products.<br>Start your project discussion today.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a  data-toggle="modal" data-target="#pricingModal" class="btn btn-primary-custom" style="padding: 16px 36px; font-size: 16px;">
                <i class="bi bi-rocket-takeoff"></i> Get Your Free Consultation
            </a>
            <a data-toggle="modal" data-target="#pricingModal" class="btn btn-accent-custom" style="padding: 16px 36px; font-size: 16px;">
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
                                <p class="address text-white d-flex align-items-center pb-0"> <img class="mr-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/ft-Location-icon.png" alt="Address" width="32" height="38"> 30 NGould St Ste R Sheridan, WY 82801 USA</p>
                             </div>
                          </div>
                          <div class="col-lg-3 mt-3 mt-lg-0">
                             <p class="text-white border-space d-flex align-items-center"><img src="https://emizentech.com/wp-content/uploads/2026/03/Icon-4.svg" alt="USA" width="65" height="65"> <span>USA<a class="text-white d-block" class="d-block" href="tel:+19895359295">+1 (989) 535-9295</a></span></p>
                          </div>
                       </div>
                    </div>
                    
                    <div class="consulting--container text-md-start text-center">
                        <div class="row align-items-center">
                           <div class="col-lg-4">
                              <h3 class="p-0">We Offer a <strong>60 minute Free</strong> Consultation</h3>
                           </div>
                           <div class="col-lg-8 mt-3 mt-lg-0">
                              <ul class="text-md-start m-0">
                                 <li><a href="tel:+19895359295"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/phone.svg" width="30" height="30" alt="+1 (989) 535-9295">+1 (989) 535-9295</a></li>
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
                                    <li class="txts"> <a class="m-0" href="https://www.facebook.com/EmizenTech/" target="_blank"> <i class="bi-facebook" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="http://www.linkedin.com/company/emizen-tech" target="_blank"> <i class="bi bi-linkedin" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="https://www.instagram.com/emizentech/" target="_blank"> <i class="bi bi-instagram" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a href="https://x.com/EmizenTech" target="_blank"><i class="bi bi-twitter" aria-hidden="true"></i></a> </li>
                                </ul>
                                </div>
                                </div>
                            <div class="follow-up col-lg-8 mt-lg-0 mt-4">
                                <ul class="d-flex justify-content-end px-0 flex-wrap">
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
                                                <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons3.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2">Rapid Response Guarantee: Connect with a senior web app architect within 2 hours during the business day.</li>
                                                <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons1.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2"> Elite Engineering Talent, Better Rates: Access 150+ vetted Full-Stack Developers (React, Node.js, Python).</li>
                                                <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons2.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2"> Zero-Risk Discovery: Get a fully NDA-protected technical consultation and architecture review with zero obligations.</li>
                                            </ul>
                                            <ul class="px-0 d-flex flex-wrap badge-logo align-items-center">
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/03/goodfirmslogo.svg" width="135" height="168" alt="goodfirmslogo"></li>
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/03/microsoft-1.svg" width="800" height="864" alt="microsoft"></li>
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/03/awslogo.svg" width="161" height="168" alt="awslogo"></li>
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/03/badge_clutchapp.svg" width="159" height="168" alt="badge clutch app"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-right">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                            <div class="consulting-fgorm">
                                                <h3 class="form-tiitle">Get Your Free Web App Technical Roadmap & Quote</h3>
                                                <?php echo do_shortcode('[elementor-template id="37178"]'); ?>

                                                <div class="trusted-txt text-center">Trusted By 1200+ Global Brands Including:</div>
                                                <ul class="d-flex trusted-logos align-items-center px-0 mb-0">
                                                    <li class="logos3">
                                                        <img src="https://emizentech.com/wp-content/uploads/2026/03/Logo-5.svg" width="222" height="63" alt="stafin">
                                                    </li>
                                                    <li class="logos3">
                                                        <img src="https://emizentech.com/wp-content/uploads/2026/03/logo-1-1.svg" width="222" height="63" alt="sukkal">
                                                    </li>
                                                    <li class="logos3">
                                                        <img src="https://emizentech.com/wp-content/uploads/2026/03/Neo-X-2-2.svg" width="222" height="63" alt="Neo-X">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script>
            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            });

        </script>

    <?php wp_footer(); ?>

</body>

</html>