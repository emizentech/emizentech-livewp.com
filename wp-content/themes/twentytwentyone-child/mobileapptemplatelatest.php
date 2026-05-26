<?php

/**
 * Template Name:  Mobile App page 2026 
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
    <link href="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123524" rel="stylesheet" type="text/css" media="all" />
<link href="https://emizentech.com/wp-content/themes/twentytwentyone-child/assets/css/font-awesome.min.css?123510" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo get_site_url(); ?>/wp-content/themes/twentytwentyone-child/assets/css/pages/healthcare-template.css?5805" rel="stylesheet" type="text/css" media="all" />
 <style>

         /* ===== CSS RESET & VARIABLES ===== */
         *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
         :root {
         --primary: #4F46E5;
         --primary-dark: #3730A3;
         --primary-light: #818CF8;
         --accent: #F59E0B;
         --accent-dark: #D97706;
         --dark: #0F172A;
         --dark-2: #1E293B;
         --gray-1: #334155;
         --gray-2: #64748B;
         --gray-3: #94A3B8;
         --gray-4: #CBD5E1;
         --gray-5: #E2E8F0;
         --gray-6: #F1F5F9;
         --white: #FFFFFF;
         --success: #10B981;
         --healthcare: #06B6D4;
         --fintech: #8B5CF6;
         --ecommerce: #F43F5E;
         --food: #F97316;
         --education: #14B8A6;
         --ondemand: #EC4899;
         --gradient-1: linear-gradient(135deg, #52a1c3 0%, #007db2 50%, #2196F3 100%);
         --gradient-2: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
         --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
         --shadow-md: 0 4px 20px rgba(0,0,0,0.1);
         --shadow-lg: 0 10px 40px rgba(0,0,0,0.12);
         --shadow-xl: 0 20px 60px rgba(0,0,0,0.15);
         --radius-sm: 8px;
         --radius-md: 12px;
         --radius-lg: 20px;
         --radius-xl: 28px;
         }
         html { scroll-behavior: smooth; font-size: 16px; }
         body {
         font-family: 'Inter', -apple-system, sans-serif;
         color: var(--dark);
         background: var(--white);
         line-height: 1.6;
         overflow-x: hidden;
         }
         h1, h2, h3, h4, h5 { font-family: 'Space Grotesk', sans-serif; line-height: 1.2; }
         a { text-decoration: none; color: inherit; }
         img { max-width: 100%; display: block; }
         /* ===== UTILITY ===== */
         .container { max-width: 1640px; margin: 0 auto; padding: 0 20px; }
         .section { padding: 100px 0; }
         .text-center { text-align: center; }
         .text-gradient {
         background: var(--gradient-1);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         background-clip: text;
         }
         .badge {
         display: inline-flex; align-items: center; gap: 6px;
         padding: 6px 16px; border-radius: 100px; font-size: 0.8rem; font-weight: 600;
         letter-spacing: 0.5px; text-transform: uppercase;
         }
         .badge-primary { background: rgba(79,70,229,0.1); color: var(--primary); }
         .badge-accent { background: rgba(245,158,11,0.1); color: var(--accent-dark); }
         /* ===== CTA BUTTONS ===== */
         .cta-btn {
         display: inline-flex; align-items: center; gap: 10px;
         padding: 16px 36px; border-radius: 100px; font-weight: 700;
         font-size: 1rem; border: none; cursor: pointer;
         transition: all 0.35s cubic-bezier(0.4,0,0.2,1);
         position: relative; overflow: hidden; letter-spacing: 0.3px;
         }
         .cta-btn::before {
         content: ''; position: absolute; inset: 0;
         background: linear-gradient(135deg, rgba(255,255,255,0.15), transparent);
         transform: translateX(-100%); transition: transform 0.5s ease;
         }
         .cta-btn:hover::before { transform: translateX(100%); }
         .cta-primary {
         background: var(--gradient-1); color: var(--white);
         box-shadow: 0 4px 20px rgba(79,70,229,0.4);
         }
         .cta-primary:hover {color: #fff; transform: translateY(-3px); box-shadow: 0 8px 30px rgba(79,70,229,0.5); }
         .cta-secondary {background: var(--white); color: var(--primary);
         border: 2px solid var(--primary); box-shadow: var(--shadow-sm);
         }
         a:hovr{text-decoration: none;}
         .cta-secondary:hover { background: var(--primary); color: var(--white); transform: translateY(-3px); }
         .cta-accent {
         background: linear-gradient(135deg, #F59E0B, #F97316); color: var(--white);
         box-shadow: 0 4px 20px rgba(245,158,11,0.4);
         }
         a.cta-btn.cta-accent:hover {color: #fff;}
         .cta-accent:hover { transform: translateY(-3px); box-shadow: 0 8px 30px rgba(245,158,11,0.5); }
         .cta-dark {background: var(--dark); color: var(--white);box-shadow: 0 4px 20px rgba(15,23,42,0.3);}
         .cta-dark:hover {color: #fff; text-decoration: none; background: var(--dark-2); transform: translateY(-3px); }
         .cta-icon { font-size: 1.2rem; transition: transform 0.3s; }
         .cta-btn:hover .cta-icon { transform: translateX(4px); }
         /* ===== FLOATING CTA BAR ===== */
         .floating-cta {
         position: fixed; bottom: 0; left: 0; right: 0; z-index: 1000;
         background: rgba(15,23,42,0.95); backdrop-filter: blur(20px);
         padding: 14px 24px; display: flex; align-items: center; justify-content: center; gap: 16px;
         transform: translateY(100%); transition: transform 0.5s cubic-bezier(0.4,0,0.2,1);
         border-top: 1px solid rgba(255,255,255,0.1);
         }
         .floating-cta.visible { transform: translateY(0); }
         .floating-cta p { color: var(--gray-4); font-size: 0.9rem; font-weight: 500; }
         .floating-cta .cta-btn { padding: 12px 28px; font-size: 0.9rem; }
         
         /* ===== HERO SECTION ===== */
        .hero{margin-top:97px;min-height:calc(100vh - 80px);display:flex;align-items:flex-start;position:relative;overflow:hidden;background:var(--gradient-2);padding-top:120px;}
        a:hover{text-decoration: none !important;}
         .hero::before {
         content: ''; position: absolute; inset: 0;
         background:
         radial-gradient(circle at 20% 50%, rgb(0 125 178 / 20%) 0%, transparent 50%), 
         radial-gradient(circle at 80% 20%, rgba(124, 58, 237, 0.1) 0%, transparent 40%), 
         radial-gradient(circle at 60% 80%, rgb(0 125 178) 0%, transparent 40%)
         }
         .hero-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; position: relative; z-index: 2; }
         .hero-content { color: var(--white); }
         .hero-badge {
         display: inline-flex; align-items: center; gap: 8px;
         background: rgba(79,70,229,0.2); border: 1px solid rgba(79,70,229,0.3);
         padding: 8px 20px; border-radius: 100px; font-size: 0.8rem;
         color: var(--primary-light); font-weight: 600; margin-bottom: 28px;
         animation: pulse-glow 2s infinite;
         }
         @keyframes pulse-glow {
         0%, 100% { box-shadow: 0 0 0 0 rgba(79,70,229,0.3); }
         50% { box-shadow: 0 0 20px 4px rgba(79,70,229,0.15); }
         }
         .hero h1 { font-size: 3rem; font-weight: 600; line-height: 1.1; margin-bottom: 24px; }
         .hero h1 .highlight { color: #10A0DD; }
         .hero p { font-size: 1.15rem; color: var(--gray-3); margin-bottom: 36px; max-width: 680px; line-height: 1.7; }
         .hero-ctas { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 48px; }
         .hero-stats { display: flex; gap: 40px; }
         .stat-item { text-align: left; }
         .stat-number { font-family: 'Space Grotesk', sans-serif; font-size: 2.2rem; font-weight: 800; color: #10A0DD; }
         .stat-label { font-size: 0.8rem; color: var(--gray-3); font-weight: 500; text-transform: uppercase; letter-spacing: 1px; }
         /* Hero Visual */
         .hero-visual { position: relative; }
         .hero-phone-mockup {
         width: 320px; height: 620px; margin: 0 auto;
         background: linear-gradient(145deg, #1a1a2e, #16213e);
         border-radius: 40px; border: 3px solid rgba(255,255,255,0.1);
         position: relative; overflow: hidden;
         box-shadow: 0 40px 80px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.05);
         animation: float 6s ease-in-out infinite;
         }
         @keyframes float {
         0%, 100% { transform: translateY(0); }
         50% { transform: translateY(-20px); }
         }
         .phone-notch {
         width: 140px; height: 28px; background: #0a0a1a;
         border-radius: 0 0 20px 20px; margin: 0 auto; position: relative; z-index: 2;
         }
         .phone-screen {
         padding: 20px; height: calc(100% - 28px);
         background: linear-gradient(180deg, #1a1a3e 0%, #0f0f2d 100%);
         }
         .phone-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
         .phone-greeting { color: var(--gray-3); font-size: 0.75rem; }
         .phone-title { color: var(--white); font-weight: 700; font-size: 1rem; }
         .phone-avatar { width: 36px; height: 36px; border-radius: 50%; background: var(--gradient-1); }
         .phone-cards { display: flex; flex-direction: column; gap: 12px; }
         .phone-card {
         background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08);
         border-radius: 16px; padding: 16px; transition: 0.3s;
         }
         .phone-card:hover { background: rgba(255,255,255,0.1); }
         .phone-card-icon { width: 36px; height: 36px; border-radius: 10px; margin-bottom: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
         .phone-card h4 { color: var(--white); font-size: 0.85rem; margin-bottom: 4px; }
         .phone-card p { color: var(--gray-3); font-size: 0.7rem; }
         .phone-nav { position: absolute; bottom: 0; left: 0; right: 0; height: 60px; background: rgba(10,10,26,0.9); backdrop-filter: blur(10px); display: flex; justify-content: space-around; align-items: center; border-top: 1px solid rgba(255,255,255,0.05); }
         .phone-nav-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--gray-3); }
         .phone-nav-dot.active { width: 24px; border-radius: 3px; background: var(--primary); }
         /* Orbit elements */
         .orbit-ring { position:absolute; border:1px dashed rgba(79,70,229,0.2); border-radius:50%; top:0; left:0; animation:spin 30s linear infinite; right:0; margin:auto;}
         @keyframes spin {from{transform:rotate(0deg);} to{ transform:rotate(360deg);}}
         .orbit-1 { width: 460px; height: 460px; }
         .orbit-2 { width: 580px; height: 580px; animation-direction: reverse; animation-duration: 45s; }
         .orbit-dot { position:absolute; width:40px; height:40px; border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:1.1rem; box-shadow:0 4px 15px rgba(0,0,0,0.2)}
         .orbit-dot-1 { top: 0; left: 50%; transform: translate(-50%, -50%); background: linear-gradient(135deg, #06B6D4, #0891B2); }
         .orbit-dot-2 { bottom: 0; left: 50%; transform: translate(-50%, 50%); background: linear-gradient(135deg, #8B5CF6, #7C3AED); }
         .orbit-dot-3 { top: 50%; right: 0; transform: translate(50%, -50%); background: linear-gradient(135deg, #F43F5E, #E11D48); }
         .orbit-dot-4 { top: 50%; left: 0; transform: translate(-50%, -50%); background: linear-gradient(135deg, #F97316, #EA580C); }
         .orbit-dot-5 { top: 15%; right: 10%; transform: translate(50%, -50%); background: linear-gradient(135deg, #10B981, #059669); }
         .orbit-dot-6 { bottom: 15%; left: 10%; transform: translate(-50%, 50%); background: linear-gradient(135deg, #EC4899, #DB2777); }
         /* ===== TRUSTED BY / LOGOS ===== */
         .trust-bar {    border-radius: 15px;
         background: var(--gray-6); padding: 32px 0; border-bottom: 1px solid var(--gray-5);
         }
         .trust-bar p { font-size: 0.8rem; color: var(--gray-2); text-transform: uppercase; letter-spacing: 2px; font-weight: 600; margin-bottom: 20px; text-align: center; }
         .trust-logos { display: flex; justify-content: center; gap: 48px; align-items: center; flex-wrap: wrap; }
         .trust-logo {
         font-family: 'Space Grotesk', sans-serif; font-size: 1.2rem; font-weight: 700;
         color: var(--gray-3); transition: opacity 0.3s;
         }
         .trust-logo:hover { opacity: 1; }
         /* ===== SERVICES SECTION ===== */
         .services { background: var(--white); }
         .section-header { max-width: 800px; margin: 0 auto 60px; text-align: center; }
         .section-header .badge { margin-bottom: 16px; }
         .section-header h2 { font-size: 2.6rem; font-weight:600; margin-bottom: 16px; color: var(--dark); }
         .section-header p { font-size: 1.05rem; color: var(--gray-2); line-height: 1.7; }
         .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
         .service-card {
         background: var(--white); border: 1px solid var(--gray-5);
         border-radius: var(--radius-lg); padding: 36px; position: relative;
         transition: all 0.4s cubic-bezier(0.4,0,0.2,1); overflow: hidden;
         }
         .service-card::before {
         content: ''; position: absolute; top: 0; left: 0; right: 0;
         height: 4px; background: var(--gradient-1); transform: scaleX(0);
         transition: transform 0.4s; transform-origin: left;
         }
         .service-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-xl); border-color: transparent; }
         .service-card:hover::before { transform: scaleX(1); }
         .service-icon {
         width: 60px; height: 60px; border-radius: 16px;
         display: flex; align-items: center; justify-content: center;
         font-size: 1.6rem; margin-bottom: 20px;
         }
         .service-card h3 { font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: var(--dark); }
         .service-card p { color: var(--gray-2); font-size: 0.92rem; line-height: 1.7; margin-bottom: 16px; }
         .service-tags { display: flex; flex-wrap: wrap; gap: 6px; }
         .service-tag {
         padding: 4px 12px; background: var(--gray-6); border-radius: 100px;
         font-size: 0.72rem; color: var(--gray-2); font-weight: 500;
         }
         /* ===== INDUSTRY SECTION ===== */
         .industries { background: var(--dark); color: var(--white); position: relative; overflow: hidden; }
         .industries::before {
         content: ''; position: absolute; inset: 0;
         background:
         radial-gradient(circle at 10% 20%, rgba(79,70,229,0.08) 0%, transparent 40%),
         radial-gradient(circle at 90% 80%, rgba(236,72,153,0.06) 0%, transparent 40%);
         }
         .industries .section-header h2 { color: var(--white); }
         .industries .section-header p { color: var(--gray-3); }
         .industry-tabs { display: flex; justify-content: center; gap: 8px; margin-bottom: 48px; flex-wrap: wrap; position: relative; z-index: 2; }
         .industry-tab {
         padding: 10px 24px; border-radius: 100px; font-size: 0.85rem; font-weight: 600;
         cursor: pointer; border: 1px solid rgba(255,255,255,0.1);
         background: rgba(255,255,255,0.03); color: var(--gray-3);
         transition: all 0.3s; display: flex; align-items: center; gap: 8px;
         }
         .industry-tab:hover, .industry-tab.active {
         border-color: var(--primary); color: var(--white); background: rgba(79,70,229,0.15);
         }
         .industry-tab .tab-icon { font-size: 1rem; }
         .industry-tab .tab-volume { font-size: 0.7rem; opacity: 0.6; }
         .industry-panels { position: relative; z-index: 2; }
         .industry-panel { display: none; animation: fadeIn 0.5s ease; }
         .industry-panel.active { display: block; }
         @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
         .industry-panel-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
         .industry-info { }
         .industry-info .industry-badge {
         display: inline-flex; padding: 6px 14px; border-radius: 100px;
         font-size: 0.75rem; font-weight: 700; letter-spacing: 0.5px;
         text-transform: uppercase; margin-bottom: 20px;
         }
         .industry-info h3 { font-size: 2rem; font-weight: 600; margin-bottom: 16px; }
         .industry-info > p { color: var(--gray-3); line-height: 1.7; margin-bottom: 24px; font-size: 0.95rem; }
         .industry-features { list-style: none; margin-bottom: 28px; }
         .industry-features li {
         display: flex; align-items: flex-start; gap: 12px; padding: 8px 0;
         color: var(--gray-4); font-size: 0.9rem;
         }
         .industry-features li::before { content: '✓'; color: var(--success); font-weight: 700; flex-shrink: 0; margin-top: 2px; }
         .industry-keywords { display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 28px; }
         .industry-keyword {
         padding: 4px 12px; border-radius: 100px; font-size: 0.7rem;
         background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08);
         color: var(--gray-3);
         }
         .industry-showcase {
         background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);
         border-radius: var(--radius-xl); padding: 32px; position: relative; overflow: hidden;
         }
         .industry-showcase::before {
         content: ''; position: absolute; top: 0; right: 0; width: 200px; height: 200px;
         border-radius: 50%; filter: blur(80px); opacity: 0.3;
         }
         .industry-showcase-header { display: flex; align-items: center; gap: 16px; margin-bottom: 24px; }
         .industry-showcase-icon { width: 56px; height: 56px; border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; }
         .industry-showcase-title h4 { font-size: 1.1rem; font-weight: 700; color: var(--white); }
         .industry-showcase-title p { font-size: 0.8rem; color: var(--gray-3); }
         .showcase-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px; }
         .showcase-stat {
         background: rgba(255,255,255,0.04); border-radius: var(--radius-md);
         padding: 16px; text-align: center;
         }
         .showcase-stat .num { font-family: 'Space Grotesk', sans-serif; font-size: 1.6rem; font-weight: 600; }
         .showcase-stat .label { font-size: 0.72rem; color: var(--gray-3); margin-top: 4px; }
         .showcase-screens { display: flex; gap: 12px; }
         .showcase-screen {
         flex: 1; height: 160px; border-radius: var(--radius-md);
         background: linear-gradient(135deg, rgba(255,255,255,0.06), rgba(255,255,255,0.02));
         border: 1px solid rgba(255,255,255,0.06); display: flex; flex-direction: column;
         align-items: center; justify-content: center; gap: 8px;
         }
         .showcase-screen .screen-icon { font-size: 2rem; opacity: 0.6; }
         .showcase-screen .screen-label { font-size: 0.7rem; color: var(--gray-3); }
         /* ===== TECH STACK ===== */
         .tech-stack { background: var(--gray-6); }
         .tech-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 40px; }
         .tech-card {
         background: var(--white); border-radius: var(--radius-lg); padding: 28px;
         text-align: center; border: 1px solid var(--gray-5); transition: all 0.3s;
         position: relative;
         }
         .tech-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
         .tech-card-icon {max-width: 50px; font-size: 2.5rem; margin-bottom: 12px; }
         .tech-card h4 { font-size: 1rem; font-weight: 700; margin-bottom: 6px; }
         .tech-card p { font-size: 0.8rem; color: var(--gray-2); }
         .tech-card .vol-badge {
         position: absolute; top: 12px; right: 12px;
         background: rgba(79,70,229,0.1); color: var(--primary);
         padding: 2px 10px; border-radius: 100px; font-size: 0.65rem; font-weight: 700;
         }
         /* ===== PROCESS SECTION ===== */
         .process { background: var(--white); }
         .process-timeline { position: relative; max-width:900px; margin: 0 auto; }
         .process-timeline::before {
         content: ''; position: absolute; left: 50%; top: 0; bottom: 0;
         width: 2px; background: var(--gray-5); transform: translateX(-50%);
         }
         .process-step {
         display: flex; align-items: center; gap: 60px; margin-bottom: 60px;
         position: relative;
         }
         .process-step:nth-child(even) {/* flex-direction: row-reverse;*/ }
         .process-step-content {
         flex: 1; background: var(--white); border: 1px solid var(--gray-5);
         border-radius: var(--radius-lg); padding: 32px;
         transition: all 0.3s;
         }
         .process-step-content:hover { box-shadow: var(--shadow-lg); border-color: var(--primary-light); }
         .process-step-number {
         width: 56px; height: 56px; border-radius: 50%;
         background: var(--gradient-1); color: var(--white);
         display: flex; align-items: center; justify-content: center;
         font-family: 'Space Grotesk', sans-serif; font-weight: 800; font-size: 1.2rem;
         flex-shrink: 0; position: relative; z-index: 2;
         box-shadow: 0 4px 20px rgba(79,70,229,0.3);
         }
         .process-step-content h3 { font-size: 1.2rem; font-weight: 700; margin-bottom: 8px; }
         .process-step-content p { color: var(--gray-2); font-size: 0.9rem; line-height: 1.7; }
         .process-step .spacer { flex: 1; }
         /* ===== CASE STUDIES / PORTFOLIO ===== */
         .portfolio { background: var(--gray-6); }
         .portfolio-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px; }
         .portfolio-card {
         background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
         border: 1px solid var(--gray-5); transition: all 0.4s;
         cursor: pointer;
         }
         .portfolio-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-xl); }
         .portfolio-thumb {
         height: 220px; position: relative; overflow: hidden;
         display: flex; align-items: center; justify-content: center;
         }
         .portfolio-thumb .thumb-icon { font-size: 4rem; opacity:1; }
        .portfolio-thumb .thumb-icon img {width: auto !important;height: auto !important;}
         .portfolio-thumb .portfolio-tag {
         position: absolute; top: 16px; left: 16px;
         padding: 4px 14px; border-radius: 100px; font-size: 0.72rem;
         font-weight: 700; color: var(--white); text-transform: uppercase; letter-spacing: 0.5px;
         }
         .portfolio-content { padding: 24px; }
         .portfolio-content h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 8px; }
         .portfolio-content p { font-size: 0.85rem; color: var(--gray-2); line-height: 1.6; margin-bottom: 16px; }
         .portfolio-metrics { display: flex; gap: 20px; }
         .portfolio-metric { text-align: center; }
         .portfolio-metric .value { font-family: 'Space Grotesk', sans-serif; font-size: 1.2rem; font-weight: 800; color: #007DB2; }
         .portfolio-metric .label { font-size: 0.68rem; color: var(--gray-3); text-transform: uppercase; letter-spacing: 0.5px; }
         /* ===== WHY CHOOSE US ===== */
         .why-us { background: var(--white); }
         .why-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; align-items: center; }
         .why-features { display: flex; flex-direction: column; gap: 20px; }
         .why-feature {
         display: flex; gap: 20px; padding: 24px; border-radius: var(--radius-lg);
         border: 1px solid var(--gray-5); transition: all 0.3s; align-items: flex-start;
         }
         .why-feature:hover { border-color: var(--primary-light); box-shadow: var(--shadow-md); }
         .why-feature-icon {
         width: 48px; height: 48px; border-radius: 14px; flex-shrink: 0;
         display: flex; align-items: center; justify-content: center; font-size: 1.3rem;
         }
         .why-feature h4 { font-size: 1rem; font-weight: 700; margin-bottom: 4px; }
         .why-feature p { font-size: 0.85rem; color: var(--gray-2); line-height: 1.6; }
         .why-stats-panel {
         background: var(--gradient-2); border-radius: var(--radius-xl); padding: 48px;
         color: var(--white); position: relative; overflow: hidden;
         z-index: 1;
         }
         .why-stats-panel::before {
         content: ''; position: absolute; inset: 0;
         background: radial-gradient(circle at 70% 30%, rgba(79,70,229,0.2) 0%, transparent 50%);
         z-index: -1;
         }
         .why-stats-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 32px; position: relative; z-index: 2; }
         .why-stat { text-align: center; }
         .why-stat .number { font-family: 'Space Grotesk', sans-serif; font-size: 3rem; font-weight: 600; }
         .why-stat .label { font-size: 0.85rem; color: var(--gray-3); }
         .why-stat .number .accent { color: var(--accent); }
         .awards-row { display: flex; justify-content: center; gap: 24px; margin-top: 32px; position: relative; z-index: 2; }
         .award {
         width: 56px; height: 56px; border-radius: 50%;
         background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.1);
         display: flex; align-items: center; justify-content: center; font-size: 1.3rem;
         }
         /* ===== TESTIMONIALS ===== */
         .testimonials { background: var(--gray-6); }
         .testimonial-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
         .testimonial-card {
         background: var(--white); border-radius: var(--radius-lg); padding: 32px;
         border: 1px solid var(--gray-5); position: relative;
         transition: all 0.3s;
         }
         .testimonial-card:hover { box-shadow: var(--shadow-lg); }
         .testimonial-card .stars { color: var(--accent); font-size: 0.9rem; margin-bottom: 16px; letter-spacing: 2px; }
         .testimonial-card blockquote { font-size: 0.92rem; color: var(--gray-1); line-height: 1.7; font-style: italic; margin-bottom: 20px; }
         .testimonial-author { display: flex; align-items: center; gap: 12px; }
         .testimonial-avatar {
         width: 44px; height: 44px; border-radius: 50%;
         background: var(--gradient-1); display: flex; align-items: center;
         justify-content: center; color: var(--white); font-weight: 700; font-size: 0.9rem;
         }
         .testimonial-name { font-weight: 700; font-size: 0.9rem; }
         .testimonial-role { font-size: 0.78rem; color: var(--gray-3); }
         /* ===== FINAL CTA / CONTACT ===== */
         .final-cta {
         background: var(--gradient-2); color: var(--white);
         position: relative; overflow: hidden; padding: 120px 0;
         }
         .final-cta::before {
         content: ''; position: absolute; inset: 0;
         background:
         radial-gradient(circle at 30% 30%, rgba(79,70,229,0.15) 0%, transparent 50%),
         radial-gradient(circle at 70% 70%, rgba(245,158,11,0.08) 0%, transparent 50%);
         }
         .final-cta-content { position: relative; z-index: 2; }
         .final-cta h2 { font-size: 3rem; font-weight: 600; margin-bottom: 16px; }
         .final-cta > .container > .final-cta-content > p { font-size: 1.1rem; color: var(--gray-3); max-width: 600px; margin: 0 auto 40px; }
         .final-cta-buttons { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; margin-bottom: 48px; }
         .contact-form-wrapper {
         max-width: 680px; margin: 0 auto;
         background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
         border-radius: var(--radius-xl); padding: 20px;
         backdrop-filter: blur(10px);
         }

        .final-cta form.elementor-form .elementor-size-sm {border: 1px solid #AACCDA;padding: 10px 10px;font-size: 18px;color: #000;border-radius: 10px;}

        .final-cta .contact-form button.elementor-button.elementor-button[type="submit"] {background: #007DB3;border-radius: 100px;opacity: 1;border: 1px solid #007DB2;font-size: 16px;font-weight: 600;line-height: normal;letter-spacing: 0.2px;position: relative;transition: all .3s;padding: 15px 30px 15px 30px;}
        .final-cta .contact-form button.elementor-button.elementor-button[type="submit"]:hover {background: #007DB3;color: #fff;}
        .final-cta .contact-form span.wpcf7-spinner {position: absolute;left: 0;right: 0;bottom: 10px;margin: auto;}
        .final-cta form.elementor-form .elementor-size-sm.elementor-field-telephone {padding-left: 50px;}
        .final-cta form.elementor-form .form-title {font-size: 22px;font-weight: 600;line-height: normal;}
        .final-cta form.elementor-form .elementor-size-sm::placeholder {color: #ccc!important;opacity: 1;margin: 0;}
        .final-cta form.elementor-form textarea.elementor-size-sm {resize: none;height: 65px;}
        .final-cta form.elementor-form .elementor-field-group.elementor-column.elementor-col-50 {max-width: 100%;width: 100%;}
        .final-cta form.elementor-form .elementor-size-sm{border:1px solid #AACCDA;padding:10px 10px;font-size:18px;color:#000;border-radius:10px;}
        section.final-cta .elementor-field-group.elementor-column.elementor-field-type-submit.elementor-col-100.e-form__buttons button{background:#007DB3;border-radius:100px;opacity:1;border:1px solid #007DB2;font-size:16px;font-weight:600;line-height:normal;letter-spacing:0.2px;position:relative;transition:all .3s;padding:15px 30px 15px 30px;}

        .contact-form-wrapper h3 { font-size: 1.3rem; font-weight: 700; margin-bottom: 24px; text-align: center; }
         
         
         /* ===== SCROLL ANIMATIONS ===== */
         .reveal {
         opacity: 0; transform: translateY(40px);
         transition: all 0.8s cubic-bezier(0.4,0,0.2,1);
         }
         .reveal.visible { opacity: 1; transform: translateY(0); }
         .reveal-delay-1 { transition-delay: 0.1s; }
         .reveal-delay-2 { transition-delay: 0.2s; }
         .reveal-delay-3 { transition-delay: 0.3s; }
         /* ===== RESPONSIVE ===== */
         @media (max-width:1750px){
            .hero h1{font-size:2.5rem;line-height:1.3;margin-bottom:20px;}
            .hero{padding-top:80px;}
            .hero p{font-size:1.1rem;}
            .final-cta h2,.section-header h2{font-size:2rem;}
            .why-stats-grid{gap:15px;}
        }

        @media (max-width:1050px){
            .hero h1{font-size:2.6rem;}
            .services-grid{grid-template-columns:repeat(2,1fr);}
            .tech-grid{grid-template-columns:repeat(2,1fr);}
            .portfolio-grid{grid-template-columns:repeat(2,1fr);}
            .footer-grid{grid-template-columns:repeat(2,1fr);}
            section.hero{min-height:auto;padding-bottom:50px;}
            .hero-grid{gap:30px;}
            .header-call-link img{margin-right:0;filter:brightness(0) invert(1);}
            .hero-stats{gap:20px;}
        }

         @media (max-width: 768px) {
            .section{padding:60px 0;}
            .hero-grid{grid-template-columns:1fr;text-align:center;}
            .hero p{margin-left:auto;margin-right:auto;}
            .hero-ctas{justify-content:center;}
            .hero-stats{gap:20px;text-align:center;justify-content:center;}
            .stat-number{font-size:1.8rem;}
            .stat-item{text-align:center;}
            .hero-visual{display:none;}
            .hero h1{font-size:2.1rem;line-height:1.33;}
            .section-header h2{font-size:1.7rem;}
            .services-grid{grid-template-columns:1fr;}
            .industry-panel-grid{grid-template-columns:1fr;}
            .tech-grid{grid-template-columns:repeat(1,1fr);}
            .process-step{flex-direction:column!important;gap:20px;margin-bottom:20px;}
            .process-timeline::before{display:none;}
            .process-step .spacer{display:none;}
            .portfolio-grid{grid-template-columns:1fr;}
            .why-grid{grid-template-columns:1fr;}
            .testimonial-grid{grid-template-columns:1fr;}
            .footer-grid{grid-template-columns:1fr;}
            .final-cta h2{font-size:2rem;}
            .form-row{grid-template-columns:1fr;}
            .nav-links{display:none;}
            .hamburger{display:flex;}
            .service-card{padding:25px;}
            .why-stat .number{font-size:2rem;}
            .why-stats-panel{padding:28px;}
            .awards-row{gap:9px;margin-top:32px;}
            .award{width:46px;height:46px;flex:0 0 46px;font-size:1.2rem;}
            .floating-cta p{display:none;}
            .header-call-link{font-size:0;display:flex;align-items:center;}
            .header-call-link >span{background:#007db2;display:flex;border-radius:100%;height:40px;width:40px;align-items:center;justify-content:center;line-height:normal;}
            
            .services-grid{gap:15px;}
            .section-title:after{display:none;}
            section.conntect--us .contact-info .border-space img{margin-right:10px;max-width:60px;}
            .industry-tab{padding:8px 10px;font-weight:600;gap:2px;}
            section.hero{padding:60px 0 50px 0;margin-top:100px;min-height:auto;}
            .site-main > *{margin-top:calc(1.8 * var(--global--spacing-vertical));margin-bottom:calc(1.8 * var(--global--spacing-vertical));}
            span.badge{white-space:normal;line-height:24px;}
        }
        .watsappic{position:fixed;z-index:9;bottom:10px;left:10px;height:auto;float:left;}
        .zls-sptwndw.siqembed.siqtrans.zsiq-mobhgt.zsiq-newtheme.siq_rht.zsiq_size2.siqanim{display:none!important;}
        .zsiq_floatmain.zsiq_theme1.siq_bR{display:none!important;}
</style>
<style>
    header.mob-header.bg-white{display:none!important;}
footer.emizen-footer{display:none!important;}
.custom-header nav.navbar.navbar-expand-lg{padding:20px 0;background:#fff}
.custom-header{top:0;left:0;z-index:9;width:100%;}
.custom-header .navbar ul.navbar-nav{border-radius:75px;border:1px solid #33394E;background:rgba(255,255,255,0.10);padding:8px 15px;margin:auto; /* show when req */display:none;}
.custom-header .navbar ul.navbar-nav li.header-link  a{color:#FFF;font-size:16px;display:inline-block;font-weight:500;line-height:normal;padding:8px 17px;}
.custom-header .navbar ul.navbar-nav li.header-link  a:hover{color:#8fceed;}
a.enquiry-btn.new-btn:hover{background:#007db2;color:#fff}
.conntect--us .consulting--container h3 strong{color:#FECA57;}
.conntect--us .consulting--container h3{color:#fff;font-size:30px;line-height:45px;font-weight:600;}
.footer-custom{border:1px solid #FFFFFF14;padding:20px;}
section.conntect--us.mn_fooer .consulting--container li{text-align:center;display:inline-block;max-width:33%;}
section.conntect--us.mn_fooer .consulting--container li a{border-radius:5px;border:1px solid #244F6B;}
section.conntect--us .footer-custom p a{color:#fff;text-decoration:underline;}
.connect-with-us{padding:30px 25px;border-radius:5px;border:1px solid #FFFFFF14;height:100%;}
section.conntect--us .contact-info .border-space{border-radius:5px;height:100%;border:1px solid #FFFFFF14;padding:25px;}
section.conntect--us .follow-up{margin:50px 0;padding:0}
section.conntect--us .follow-up a{color:#fff;font-size:16px;font-weight:500;border:1px solid #FFFFFF26;border-radius:8px;background:transparent;height:100%;width:100%}
section.conntect--us.mn_fooer .consulting--container ul{padding:0;display:flex;align-items:center;margin-top:10px;}
section.conntect--us.mn_fooer .consulting--container ul li img{display:block;}
section.conntect--us.mn_fooer .consulting--container ul li a{color:#0F1528;border-radius:5px;border:1px solid #fff;font-weight:600;background:#fff;}
.follow-up li{max-width:20%;flex:0 0 auto;width: 100%}
.follow-up li a{display:inline-block;}
section.conntect--us.mn_fooer .footer-custom p.copyright{color:#CECECE;font-size:15px;line-height:24px;font-weight:400;}
section.conntect--us.mn_fooer .footer-custom p.copyright a{color:#CECECE;text-decoration:underline;font-weight:normal;}
section.trusted-partner{margin:50px 0 0;}
section.trusted-partner h3{color:#0F1528;border-radius:100px;border:1px solid rgba(0,125,178,0.20);background:rgba(0,125,178,0.10);font-size:22px;font-weight:500;line-height:normal;padding:8px 18px;}
section.trusted-partner ul{gap:0 20px}
section.trusted-partner li{padding:40px 0;flex:calc(16.66% - 20px);border-radius:10px;background:radial-gradient(50% 50% at 50% 50%,#FCFEFF 0%,#E3F7FF 100%);}
div#pricingModal{margin:0;}

/*faq section */
section.emiz-blogs.pt-80{padding-top:70px;}
section.emiz-blogs .blog-card{border-radius:10px;border:1px solid #E0E0E0;background:#FFF;}
section.conntect--us{margin:0;background:#05263F;padding:50px}
section.conntect--us .col-md-3:last-child .contact-info{justify-content:center;}
.footer-bottom-new .outline-border{border-bottom:1px solid rgba(255,255,255,0.30);background:rgba(255,255,255,0.05);padding:0 40px!important;}
section.conntect--us .connect-with-us p.address{font-size:15px;font-weight:400;line-height:24px;}
section.conntect--us .connect-with-us p.address img{margin-right:14px;}
.emizentech-social a{border-color:white;opacity:1;display:flex;align-items:center;justify-content:center;padding:6px;color:#fff;border-width:1px;}
.emizentech-social li:not(:last-child){margin-right:12px;}
.emizentech-social li a:hover{color:#fff;background-color:#007db2;}
.consulting--container{margin:30px 0;max-width:100%;background:#FFFFFF0D;padding:25px;}
 section.conntect--us.mn_fooer .consulting--container ul li a:hover img{filter:none;}
footer.emizen-footer{display:none!important;}
a.enquiry-btn.new-btn{border-radius:18px;background:#007db2;line-height:24px;letter-spacing:0.16px;text-transform:capitalize;border:1px solid #fff;padding:15px 20px;color:#fff;font-weight:600;font-size:16px;overflow:hidden;}
a.enquiry-btn.new-btn:hover{background:#007db2;border-color:#fff;color:#fff}
section.conntect--us{margin:0}
section.conntect--us .col-md-3:last-child .contact-info{justify-content:center;}
.footer-bottom-new .outline-border{border-bottom:1px solid rgba(255,255,255,0.30);background:rgba(255,255,255,0.05);padding:0 40px!important;}
section.conntect--us .connect-with-us p.address{color:#FFF;font-size:16px;font-weight:400;line-height:29px;}
section.conntect--us .connect-with-us p.address img{margin-right:14px;}
.emizentech-social a{line-height:36px;text-align:center;font-size:18px;border:1px solid #fff;border-radius:100%;width:38px;height:38px}
.emizentech-social li:not(:last-child){margin-right:12px;}
.emizentech-social li a:hover{color:#fff;background-color:#007db2;}
.emizentech-social li a:hover{color:#fff;background-color:#007db2;}
.consulting--container{max-width:100%;}
.conntect--us .consulting--container h3 strong{font-size:42px;line-height:55px;text-transform:uppercase;}
.consulting--container li{font-size:18px;font-weight:400;line-height:27px;max-width:33.33%;width:100%;}
.consulting--container li:not(:last-child){padding:0px 10px 0 0;}
.consulting--container li a{color:#fff;opacity:1;display:inline-block;width:100%;text-align:left;text-decoration:none;padding:20px 20px!important;font-size:18px;font-weight:400;}
.consulting--container li a:hover img{filter:none;color:none}
 
section.conntect--us.mn_fooer .consulting--container ul li img{display:block;filter:none;}
.follow-up li{flex:0 0 auto;}
.follow-up li img{max-width:113px;}
.follow-up li i{font-size:14px;margin-left:5px;}
section.conntect--us.mn_fooer .footer-custom p.copyright a{color:#CECECE;text-decoration:underline;font-weight:normal;}
section.trusted-partner{margin:50px 0 0;}
section.trusted-partner h3{color:#0F1528;border-radius:100px;border:1px solid rgba(0,125,178,0.20);background:rgba(0,125,178,0.10);font-size:22px;font-weight:500;line-height:normal;padding:8px 18px;}
section.trusted-partner ul{gap:0 20px}
section.trusted-partner li{padding:40px 0;flex:calc(16.66% - 20px);border-radius:10px;background:radial-gradient(50% 50% at 50% 50%,#FCFEFF 0%,#E3F7FF 100%);}
section.trusted-partner li img{max-width:80px;max-height:80px;object-fit:contain;}
 
.follow-up ul li a i{color:#f4b537ff}
.follow-up ul li a:hover,section.conntect--us .follow-up a{padding:9px 12px;}
section.conntect--us .contact-info p{margin:0;font-size:16px;font-weight:500;line-height:22px;text-align:left;}
.follow-up li{max-width:20%;}
.blog-card  img{max-height:260px;object-fit:cover;object-position:unset;border-radius:10px;}
 .header-call-link span {
    display: inline-block;
    vertical-align: sub;
}
@media(max-width:991px){
    .navbar-expand-lg>.container {
    padding: 0 20px;
}

    .elementor-column.elementor-col-50,.elementor-column[data-col="50"]{flex:0 0 100%;}
    .contact-form .form-title{font-size:19px;line-height:26px;}
    .btn-wraper{gap:10px;display:block;}
    section.hero-top-sec .hero-content-box .emizen-btn{width:fit-content;}
}

@media screen and (min-width:1300px){
    section.form-sec .container{max-width:1200px;padding:0 20px;}
    section.flexible-modal .container{max-width:1140px;margin:auto;}
}
@media screen and (min-width:1500px){
    section.flexible-modal .container{max-width:1340px;margin:auto;}
    .container{max-width:1440px}
    section.form-sec .container{max-width:1400px;padding:0 50px;}
}
@media screen and (min-width:1700px){
    section.flexible-modal .container{max-width:1340px;margin:auto;}
    section.form-sec .container{max-width:1500px;padding:0 50px;}
    .container{max-width:1640px;padding:0 20px;}
}
@media screen and (min-width:1300px){
    .container{max-width:1240px}
}
@media screen and (min-width:1500px){
    .container{max-width:1440px}
}
@media screen and (min-width:1700px){
    .container{max-width:1640px}
}
@media(max-width:1440px){
    .follow-up li{max-width:20%;}
    .connect-with-us,section.conntect--us .contact-info .border-space{padding:15px;}
}
@media (max-width:1199px){
    section.home_faq_sec .faq_card button.btn.btn-link{font-size:16px;line-height:22px;}
    section.conntect--us{padding:40px 0;}
    section.conntect--us .contact-info p a{font-size:15px;}
    .conntect--us .consulting--container h3{font-size:26px;}
    .conntect--us .consulting--container h3 strong {
    font-size: 32px;
    line-height: 39px;
 }
    .custom-header .navbar ul.navbar-nav li.header-link  a{font-size:16px;padding:8px 10px;}
   
}
@media(max-width:1024px){
    .header-call-link{font-size:0;line-height:normal;}
    .header-call-link >span{background:#007db2;display:flex;border-radius:100%;height:40px;width:40px;align-items:center;justify-content:center;line-height:normal;}
    .header-call-link img{margin-right:0;}
    section.conntect--us .contact-info p a{font-size:15px;}
    .custom-header .navbar ul.navbar-nav{padding-left:10px;padding-right:10px;}
    .custom-header .navbar ul.navbar-nav li.header-link a{padding:8px 12px}
    .footer-bottom-new .outline-border{margin:0!important;padding:0 10px!important;}
}

@media(min-width:768px) and (max-width:1024px){
    section.conntect--us .contact-info p img{max-width:40px;}
    section.conntect--us.mn_fooer .consulting--container ul{flex-wrap:wrap;padding-left:0;}
    section.conntect--us .follow-up{margin-bottom:0}
    section.flexible-modal .blog-card .title3 span{font-size:16px;}
    .growing-card-box{padding:20px;}
    h3.indust-title{font-size:19px;line-height:21px;}
    .follow-up li{max-width:33%;flex:0 0 25%;padding:7px;}
}
@media(max-width:991px){
    .consulting--container{padding:15px;}
    .conntect--us .consulting--container h3{font-size:25px;line-height:38px;}
    .conntect--us .consulting--container h3 strong{font-size:26px;line-height:36px}
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
    section.conntect--us.mn_fooer .footer-custom p.copyright{text-align:center;}
    .follow-up li{max-width:50%;width:100%;padding:7px;height:100%;flex:0 0 50%;}
}
@media(max-width:640px){
    section.conntect--us.mn_fooer .consulting--container li{max-width:100%;flex:0 0 100%}
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

            <div class="custom-header position-fixed">
 
                  <nav class="navbar navbar-expand-lg magento-navbar">
                        <div class="container">
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
                        <a href="#contact" class="ml-md-auto header-call-link d-block d-lg-none"><span> <img src="https://emizentech.com/wp-content/uploads/2026/03/Phone-black.svg" width="20" height="20" alt="+(989)535-9295"></span>+1(989)535-9295</a>
                 

                        <a href="#contact" class="enquiry-btn new-btn ml-3 btn emizen-btn d-none d-lg-block"><img class="d-lg-none d-block" src="https://emizentech.com/wp-content/uploads/2025/08/phone-call.svg" alt="Get My Free Consultation" width="30" height="30"> <span class="pre-text"> Get My Free Consultation</span> <span class="hover-text">Map Your Project Today!</span> </a>
                        
                    </div>
                    </nav>
           
            </div>
  <!-- ===== HERO SECTION ===== -->
      <section class="hero mb-0" id="hero">
         <div class="container">
            <div class="hero-grid">
               <div class="hero-content">
                  <div class="hero-badge">🚀 #1 Rated Mobile App Development Company in Singapore</div>
                  <h1>
                     Transform Your Ideas Into <span class="highlight">Powerful Mobile Apps</span> That Drive Growth
                  </h1>
                  <p>
                     From custom iOS &amp; Android app development to enterprise-grade cross-platform solutions — we build mobile applications that users love. Trusted by startups, SMEs, and Fortune 500 companies across Healthcare, FinTech, eCommerce, and more.
                  </p>
                  <div class="hero-ctas">
                     <a href="#contact" class="cta-btn cta-primary">Start Your Project <span class="cta-icon">→</span></a>
                     <!-- <a href="https://emizentech.com/portfolio.html" class="cta-btn cta-secondary" style="border-color: rgba(255,255,255,0.3); ">View Portfolio <span class="cta-icon">→</span></a> -->
                  </div>
                  <div class="hero-stats">
                     <div class="stat-item">
                        <div class="stat-number">1200+</div>
                        <div class="stat-label">Apps Delivered</div>
                     </div>
                     <div class="stat-item">
                        <div class="stat-number">12+</div>
                        <div class="stat-label">Years Experience</div>
                     </div>
                     <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Expert Developers</div>
                     </div>
                  </div>
               </div>
               <div class="hero-visual">
                  <div class="orbit-ring orbit-1 d-none d-xl-block">
                     <div class="orbit-dot orbit-dot-1">🏥</div>
                     <div class="orbit-dot orbit-dot-2">💰</div>
                     <div class="orbit-dot orbit-dot-3">🛒</div>
                     <div class="orbit-dot orbit-dot-4">🍔</div>
                  </div>
                  <div class="orbit-ring orbit-2 d-none d-xl-block">
                     <div class="orbit-dot orbit-dot-5">📚</div>
                     <div class="orbit-dot orbit-dot-6">⚡</div>
                  </div>
                  <div class="hero-phone-mockup">
                     <div class="phone-notch"></div>
                     <div class="phone-screen">
                        <div class="phone-header">
                           <div>
                              <div class="phone-greeting">Hello, Welcome</div>
                              <div class="phone-title">Your App Dashboard</div>
                           </div>
                           <div class="phone-avatar"></div>
                        </div>
                        <div class="phone-cards">
                           <div class="phone-card">
                              <div class="phone-card-icon" style="background: rgba(6,182,212,0.15);">🏥</div>
                              <h4>HealthTrack Pro</h4>
                              <p>Telemedicine & EHR Integration</p>
                           </div>
                           <div class="phone-card">
                              <div class="phone-card-icon" style="background: rgba(139,92,246,0.15);">💳</div>
                              <h4>PaySwift Wallet</h4>
                              <p>Digital Banking & Payments</p>
                           </div>
                           <div class="phone-card">
                              <div class="phone-card-icon" style="background: rgba(244,63,94,0.15);">🛍️</div>
                              <h4>ShopEase</h4>
                              <p>eCommerce Mobile App</p>
                           </div>
                           <div class="phone-card">
                              <div class="phone-card-icon" style="background: rgba(249,115,22,0.15);">🍕</div>
                              <h4>QuickBite</h4>
                              <p>Food Delivery Platform</p>
                           </div>
                        </div>
                     </div>
                     <div class="phone-nav">
                        <div class="phone-nav-dot active"></div>
                        <div class="phone-nav-dot"></div>
                        <div class="phone-nav-dot"></div>
                        <div class="phone-nav-dot"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ===== TRUST BAR ===== -->
      <div class="trust-bar mt-0">
         <div class="container">
            <p>Trusted by industry leaders worldwide</p>
            <div class="trust-logos">
               <div class="trust-logo"><img src="https://emizentech.com/wp-content/uploads/2026/04/image-10-1-1.svg" alt="Clutch" ></div>
               <div class="trust-logo"><img src="https://emizentech.com/wp-content/uploads/2026/04/Layer_1-1.svg" alt="GoodFirms Top Rated" ></div>
               <div class="trust-logo"><img src="https://emizentech.com/wp-content/uploads/2026/04/microsoft-1-2.svg" alt="Microsoft Gold" ></div>
               <div class="trust-logo"><img src="https://emizentech.com/wp-content/uploads/2026/04/image-11-1-1.svg" alt="ISO 27001" ></div>
               <div class="trust-logo"><img src="https://emizentech.com/wp-content/uploads/2026/04/image-12-1-1.svg" alt="Google Partner" ></div>
               <div class="trust-logo"><img src="https://emizentech.com/wp-content/uploads/2026/04/image-12590-1.svg" alt="AWS Partner" ></div>
            </div>
         </div>
      </div>
      <!-- ===== SERVICES SECTION ===== -->
      <section class="section services py-0" id="services">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge badge-primary">Our Services</span>
               <h2>Full-Spectrum <span class="text-gradient">Mobile App Development</span> Services</h2>
               <p>Whether you need a custom mobile app development company or want to hire dedicated mobile app developers, we offer end-to-end mobile app development services tailored to your business.</p>
            </div>
            <div class="services-grid">
               <div class="service-card reveal reveal-delay-1">
                  <div class="service-icon" style="background: rgba(79,70,229,0.1);">📱</div>
                  <h3>Custom Mobile App Development</h3>
                  <p>Bespoke iOS and Android apps built from the ground up. Our custom mobile app development services deliver pixel-perfect, performance-optimized applications for startups and enterprises alike.</p>
                  <div class="service-tags">
                     <span class="service-tag">Custom App Dev</span>
                     <span class="service-tag">MVP Development</span>
                     <span class="service-tag">Startup Apps</span>
                     <span class="service-tag">Enterprise Apps</span>
                  </div>
               </div>
               <div class="service-card reveal reveal-delay-2">
                  <div class="service-icon" style="background: rgba(6,182,212,0.1);">🔄</div>
                  <h3>Cross-Platform App Development</h3>
                  <p>Build once, deploy everywhere. Our cross-platform mobile app development services using Flutter and React Native reduce costs by 40% while delivering native-like experiences on both platforms.</p>
                  <div class="service-tags">
                     <span class="service-tag">Flutter Apps</span>
                     <span class="service-tag">React Native</span>
                     <span class="service-tag">Hybrid Apps</span>
                     <span class="service-tag">Cross-Platform</span>
                  </div>
               </div>
               <div class="service-card reveal reveal-delay-3">
                  <div class="service-icon" style="background: rgba(139,92,246,0.1);">🤖</div>
                  <h3>AI-Powered Mobile App Development</h3>
                  <p>Integrate cutting-edge AI, ML, and NLP capabilities into your mobile apps. From intelligent chatbots to predictive analytics, we build AI-powered mobile apps that anticipate user needs.</p>
                  <div class="service-tags">
                     <span class="service-tag">AI Integration</span>
                     <span class="service-tag">Machine Learning</span>
                     <span class="service-tag">Smart Apps</span>
                     <span class="service-tag">Predictive UX</span>
                  </div>
               </div>
               <div class="service-card reveal reveal-delay-1">
                  <div class="service-icon" style="background: rgba(16,185,129,0.1);">🏢</div>
                  <h3>Enterprise Mobile App Development</h3>
                  <p>Scalable, secure enterprise mobile app development solutions that streamline operations. We build business mobile apps with robust backend architecture, SSO, and compliance-first design.</p>
                  <div class="service-tags">
                     <span class="service-tag">Enterprise Grade</span>
                     <span class="service-tag">Business Apps</span>
                     <span class="service-tag">Secure &amp; Scalable</span>
                  </div>
               </div>
               <div class="service-card reveal reveal-delay-2">
                  <div class="service-icon" style="background: rgba(244,63,94,0.1);">☁️</div>
                  <h3>Cloud & Backend Development</h3>
                  <p>Robust cloud infrastructure on AWS and Azure powering your mobile applications. Our cloud mobile app development services ensure 99.9% uptime, auto-scaling, and real-time data sync.</p>
                  <div class="service-tags">
                     <span class="service-tag">AWS Mobile</span>
                     <span class="service-tag">Azure Cloud</span>
                     <span class="service-tag">Serverless</span>
                     <span class="service-tag">API Dev</span>
                  </div>
               </div>
               <div class="service-card reveal reveal-delay-3">
                  <div class="service-icon" style="background: rgba(245,158,11,0.1);">👨‍💻</div>
                  <h3>Hire Dedicated App Developers</h3>
                  <p>Hire mobile app developers on flexible engagement models — dedicated teams, staff augmentation, or offshore mobile app development. Scale your team instantly with our 250+ vetted experts.</p>
                  <div class="service-tags">
                     <span class="service-tag">Dedicated Teams</span>
                     <span class="service-tag">Staff Augmentation</span>
                     <span class="service-tag">Offshore Dev</span>
                  </div>
               </div>
            </div>
            <div class="text-center" style="margin-top: 40px;">
               <a href="#contact" class="cta-btn cta-primary">Discuss Your Project <span class="cta-icon">→</span></a>
            </div>
         </div>
      </section>
      <!-- ===== INDUSTRY SOLUTIONS ===== -->
      <section class="section industries mb-0" id="industries">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge" style="background: rgba(255,255,255,0.08); color: var(--primary-light);">Industry Solutions</span>
               <h2>Mobile Apps for <span class="text-gradient">Every Industry</span></h2>
               <p>We've delivered 1500+ apps across Healthcare, FinTech, eCommerce, Food Tech, Education, and On-Demand services — each built with deep domain expertise.</p>
            </div>
            <div class="industry-tabs reveal">
               <div class="industry-tab active" data-tab="healthcare">
                  <span class="tab-icon">🏥</span> Healthcare
                  </div>
               <div class="industry-tab" data-tab="fintech">
                  <span class="tab-icon">💰</span> FinTech & Banking
                  </div>
               <div class="industry-tab" data-tab="ecommerce">
                  <span class="tab-icon">🛒</span> eCommerce & Retail
                  </div>
               <div class="industry-tab" data-tab="food">
                  <span class="tab-icon">🍔</span> Food & Restaurant
                  </div>
               <div class="industry-tab" data-tab="education">
                  <span class="tab-icon">📚</span> Education & eLearning
                  </div>
               <div class="industry-tab" data-tab="ondemand">
                  <span class="tab-icon">⚡</span> On-Demand
                  </div>
            </div>
            <div class="industry-panels">
               <!-- HEALTHCARE PANEL -->
               <div class="industry-panel active" id="panel-healthcare">
                  <div class="industry-panel-grid">
                     <div class="industry-info">
                        <div class="industry-badge" style="background: rgba(6,182,212,0.15); color: var(--healthcare);">Healthcare App Development</div>
                        <h3>Healthcare & Medical Mobile App Development</h3>
                        <p>Build HIPAA-compliant healthcare mobile apps that transform patient care. From telemedicine mobile app development to EHR-integrated solutions, we deliver medical mobile apps that improve outcomes and streamline clinical workflows.</p>
                        <ul class="industry-features pl-0">
                           <li>Telemedicine &amp; video consultation apps with real-time scheduling</li>
                           <li>EHR/EMR integrated mobile app development for seamless data access</li>
                           <li>Doctor appointment booking &amp; hospital management apps</li>
                           <li>Remote patient monitoring with IoT &amp; wearable integration</li>
                           <li>HIPAA, GDPR, and HL7 FHIR compliance built-in</li>
                           <li>Mobile health (mHealth) apps for chronic disease management</li>
                        </ul>
                        <div class="industry-keywords">
                           <span class="industry-keyword">healthcare mobile app development</span>
                           <span class="industry-keyword">medical mobile app development</span>
                           <span class="industry-keyword">telemedicine app</span>
                           <span class="industry-keyword">EHR mobile app</span>
                           <span class="industry-keyword">mobile health app</span>
                           <span class="industry-keyword">doctor appointment app</span>
                           <span class="industry-keyword">hospital app</span>
                        </div>
                        <a href="#contact" class="cta-btn cta-primary">Build Your Healthcare App <span class="cta-icon">→</span></a>
                     </div>
                     <div class="industry-showcase">
                        <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:rgba(6,182,212,0.15); border-radius:50%; filter:blur(80px);"></div>
                        <div class="industry-showcase-header">
                           <div class="industry-showcase-icon" style="background: linear-gradient(135deg, #06B6D4, #0891B2); color: #fff;">🏥</div>
                           <div class="industry-showcase-title">
                              <h4>Healthcare App Portfolio</h4>
                              <p>Trusted by hospitals &amp; clinics</p>
                           </div>
                        </div>
                        <div class="showcase-stats">
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--healthcare);">120+</div>
                              <div class="label">Healthcare Apps</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--healthcare);">2M+</div>
                              <div class="label">Patients Served</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--healthcare);">99.9%</div>
                              <div class="label">HIPAA Compliant</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--healthcare);">45%</div>
                              <div class="label">Cost Reduction</div>
                           </div>
                        </div>
                        <div class="showcase-screens">
                           <div class="showcase-screen">
                              <div class="screen-icon">📋</div>
                              <div class="screen-label">Patient Portal</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">📹</div>
                              <div class="screen-label">Telehealth</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">💊</div>
                              <div class="screen-label">Pharmacy</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- FINTECH PANEL -->
               <div class="industry-panel" id="panel-fintech">
                  <div class="industry-panel-grid">
                     <div class="industry-info">
                        <div class="industry-badge" style="background: rgba(139,92,246,0.15); color: var(--fintech);">FinTech App Development</div>
                        <h3>FinTech & Mobile Banking App Development</h3>
                        <p>Secure, PCI-DSS compliant fintech mobile app development that powers digital banking, mobile wallets, and trading platforms. We build mobile banking apps, payment solutions, and lending platforms with bank-grade security.</p>
                        <ul class="industry-features pl-0">
                           <li>Mobile banking app development with biometric authentication</li>
                           <li>Digital wallet &amp; mobile payment app development (NFC, QR)</li>
                           <li>Investment &amp; mobile trading app development platforms</li>
                           <li>Loan &amp; lending mobile app development with instant KYC</li>
                           <li>Neobank &amp; challenger bank mobile applications</li>
                           <li>Blockchain &amp; crypto portfolio management apps</li>
                        </ul>
                        <div class="industry-keywords">
                           <span class="industry-keyword">fintech mobile app development</span>
                           <span class="industry-keyword">mobile banking app</span>
                           <span class="industry-keyword">mobile wallet development</span>
                           <span class="industry-keyword">mobile payment app</span>
                           <span class="industry-keyword">mobile trading app</span>
                           <span class="industry-keyword">neobank app</span>
                        </div>
                        <a href="#contact" class="cta-btn cta-primary">Build Your FinTech App <span class="cta-icon">→</span></a>
                     </div>
                     <div class="industry-showcase">
                        <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:rgba(139,92,246,0.15); border-radius:50%; filter:blur(80px);"></div>
                        <div class="industry-showcase-header">
                           <div class="industry-showcase-icon" style="background: linear-gradient(135deg, #8B5CF6, #7C3AED); color: #fff;">💰</div>
                           <div class="industry-showcase-title">
                              <h4>FinTech App Portfolio</h4>
                              <p>Banking-grade security</p>
                           </div>
                        </div>
                        <div class="showcase-stats">
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--fintech);">80+</div>
                              <div class="label">FinTech Apps</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--fintech);">$5B+</div>
                              <div class="label">Transactions</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--fintech);">PCI-DSS</div>
                              <div class="label">Certified</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--fintech);">0.01s</div>
                              <div class="label">Latency</div>
                           </div>
                        </div>
                        <div class="showcase-screens">
                           <div class="showcase-screen">
                              <div class="screen-icon">🏦</div>
                              <div class="screen-label">Banking</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">💳</div>
                              <div class="screen-label">Payments</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">📈</div>
                              <div class="screen-label">Trading</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ECOMMERCE PANEL -->
               <div class="industry-panel" id="panel-ecommerce">
                  <div class="industry-panel-grid">
                     <div class="industry-info">
                        <div class="industry-badge" style="background: rgba(244,63,94,0.15); color: var(--ecommerce);">eCommerce App Development</div>
                        <h3>eCommerce & Retail Mobile App Development</h3>
                        <p>Convert browsers into buyers with our ecommerce mobile app development services. We build Shopify-integrated, feature-rich shopping apps with AI-powered recommendations, AR try-on, and seamless checkout experiences.</p>
                        <ul class="industry-features pl-0">
                           <li>Custom eCommerce mobile app development with multi-vendor support</li>
                           <li>Shopify mobile app development &amp; deep integrations</li>
                           <li>AI-powered product recommendations &amp; personalized shopping</li>
                           <li>AR-enabled virtual try-on &amp; 3D product visualization</li>
                           <li>Multi-payment gateway integration (Stripe, PayPal, Apple Pay)</li>
                           <li>Real-time inventory management &amp; push notification campaigns</li>
                        </ul>
                        <div class="industry-keywords">
                           <span class="industry-keyword">ecommerce mobile app development</span>
                           <span class="industry-keyword">shopify mobile app</span>
                           <span class="industry-keyword">shopping app development</span>
                           <span class="industry-keyword">retail mobile app</span>
                           <span class="industry-keyword">e-commerce app</span>
                        </div>
                        <a href="#contact" class="cta-btn cta-primary">Build Your eCommerce App <span class="cta-icon">→</span></a>
                     </div>
                     <div class="industry-showcase">
                        <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:rgba(244,63,94,0.15); border-radius:50%; filter:blur(80px);"></div>
                        <div class="industry-showcase-header">
                           <div class="industry-showcase-icon" style="background: linear-gradient(135deg, #F43F5E, #E11D48); color: #fff;">🛒</div>
                           <div class="industry-showcase-title">
                              <h4>eCommerce App Portfolio</h4>
                              <p>Conversion-focused design</p>
                           </div>
                        </div>
                        <div class="showcase-stats">
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ecommerce);">200+</div>
                              <div class="label">Stores Built</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ecommerce);">3.5x</div>
                              <div class="label">Revenue Boost</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ecommerce);">68%</div>
                              <div class="label">Conv. Rate Up</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ecommerce);">< 2s</div>
                              <div class="label">Load Time</div>
                           </div>
                        </div>
                        <div class="showcase-screens">
                           <div class="showcase-screen">
                              <div class="screen-icon">🛍️</div>
                              <div class="screen-label">Store</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">🔍</div>
                              <div class="screen-label">Search</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">💳</div>
                              <div class="screen-label">Checkout</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- FOOD PANEL -->
               <div class="industry-panel" id="panel-food">
                  <div class="industry-panel-grid">
                     <div class="industry-info">
                        <div class="industry-badge" style="background: rgba(249,115,22,0.15); color: var(--food);">Food Tech App Development</div>
                        <h3>Food Delivery & Restaurant Mobile App Development</h3>
                        <p>Build the next UberEats or GrabFood with our food delivery mobile app development services. We create end-to-end food ordering, grocery delivery, and restaurant management mobile applications with real-time tracking.</p>
                        <ul class="industry-features pl-0">
                           <li>Food delivery mobile app development with real-time GPS tracking</li>
                           <li>Grocery delivery mobile app development (multi-store support)</li>
                           <li>Restaurant POS-integrated food ordering mobile apps</li>
                           <li>AI-powered delivery route optimization &amp; ETA prediction</li>
                           <li>Multi-vendor marketplace with driver management panels</li>
                           <li>Loyalty programs, promo engines &amp; subscription models</li>
                        </ul>
                        <div class="industry-keywords">
                           <span class="industry-keyword">food delivery app development</span>
                           <span class="industry-keyword">grocery delivery app</span>
                           <span class="industry-keyword">food ordering app</span>
                           <span class="industry-keyword">restaurant app</span>
                        </div>
                        <a href="#contact" class="cta-btn cta-primary">Build Your Food App <span class="cta-icon">→</span></a>
                     </div>
                     <div class="industry-showcase">
                        <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:rgba(249,115,22,0.15); border-radius:50%; filter:blur(80px);"></div>
                        <div class="industry-showcase-header">
                           <div class="industry-showcase-icon" style="background: linear-gradient(135deg, #F97316, #EA580C); color: #fff;">🍔</div>
                           <div class="industry-showcase-title">
                              <h4>Food Tech Portfolio</h4>
                              <p>From order to delivery</p>
                           </div>
                        </div>
                        <div class="showcase-stats">
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--food);">60+</div>
                              <div class="label">Food Apps</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--food);">10M+</div>
                              <div class="label">Orders Processed</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--food);">28min</div>
                              <div class="label">Avg Delivery</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--food);">4.8★</div>
                              <div class="label">Avg Rating</div>
                           </div>
                        </div>
                        <div class="showcase-screens">
                           <div class="showcase-screen">
                              <div class="screen-icon">🍕</div>
                              <div class="screen-label">Menu</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">🗺️</div>
                              <div class="screen-label">Tracking</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">🛵</div>
                              <div class="screen-label">Driver</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- EDUCATION PANEL -->
               <div class="industry-panel" id="panel-education">
                  <div class="industry-panel-grid">
                     <div class="industry-info">
                        <div class="industry-badge" style="background: rgba(20,184,166,0.15); color: var(--education);">EdTech App Development</div>
                        <h3>Education & eLearning Mobile App Development</h3>
                        <p>Revolutionize learning with our education mobile app development services. We build interactive eLearning platforms, virtual classrooms, and gamified educational mobile apps that engage learners and deliver measurable outcomes.</p>
                        <ul class="industry-features pl-0">
                           <li>eLearning mobile app development with live streaming &amp; video courses</li>
                           <li>LMS-integrated educational mobile apps with progress tracking</li>
                           <li>Gamified learning experiences with leaderboards &amp; rewards</li>
                           <li>AI-powered personalized learning paths &amp; adaptive assessments</li>
                           <li>Virtual classroom &amp; collaborative learning tools</li>
                           <li>Multi-language support for global education platforms</li>
                        </ul>
                        <div class="industry-keywords">
                           <span class="industry-keyword">education mobile app development</span>
                           <span class="industry-keyword">e-learning mobile app</span>
                           <span class="industry-keyword">educational app development</span>
                           <span class="industry-keyword">elearning app</span>
                        </div>
                        <a href="#contact" class="cta-btn cta-primary">Build Your EdTech App <span class="cta-icon">→</span></a>
                     </div>
                     <div class="industry-showcase">
                        <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:rgba(20,184,166,0.15); border-radius:50%; filter:blur(80px);"></div>
                        <div class="industry-showcase-header">
                           <div class="industry-showcase-icon" style="background: linear-gradient(135deg, #14B8A6, #0D9488); color: #fff;">📚</div>
                           <div class="industry-showcase-title">
                              <h4>EdTech Portfolio</h4>
                              <p>Transforming education</p>
                           </div>
                        </div>
                        <div class="showcase-stats">
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--education);">45+</div>
                              <div class="label">EdTech Apps</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--education);">500K+</div>
                              <div class="label">Learners</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--education);">92%</div>
                              <div class="label">Completion Rate</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--education);">4.7★</div>
                              <div class="label">App Rating</div>
                           </div>
                        </div>
                        <div class="showcase-screens">
                           <div class="showcase-screen">
                              <div class="screen-icon">🎓</div>
                              <div class="screen-label">Courses</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">📝</div>
                              <div class="screen-label">Quizzes</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">📊</div>
                              <div class="screen-label">Analytics</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ON-DEMAND PANEL -->
               <div class="industry-panel" id="panel-ondemand">
                  <div class="industry-panel-grid">
                     <div class="industry-info">
                        <div class="industry-badge" style="background: rgba(236,72,153,0.15); color: var(--ondemand);">On-Demand App Development</div>
                        <h3>On-Demand Services Mobile App Development</h3>
                        <p>Launch your on-demand mobile app with our battle-tested architecture. From home services to doctor-on-demand platforms, we build multi-sided marketplace apps with real-time matching, scheduling, and payments.</p>
                        <ul class="industry-features pl-0">
                           <li>On-demand delivery services mobile app development</li>
                           <li>Home services &amp; handyman booking app platforms</li>
                           <li>Doctor on-demand &amp; healthcare booking mobile apps</li>
                           <li>Real-time service provider matching &amp; scheduling</li>
                           <li>In-app payments, ratings &amp; review systems</li>
                           <li>Admin panels, analytics dashboards &amp; CRM integrations</li>
                        </ul>
                        <div class="industry-keywords">
                           <span class="industry-keyword">on demand app development</span>
                           <span class="industry-keyword">home services app</span>
                           <span class="industry-keyword">doctor on demand app</span>
                           <span class="industry-keyword">delivery app</span>
                        </div>
                        <a href="#contact" class="cta-btn cta-primary">Build Your On-Demand App <span class="cta-icon">→</span></a>
                     </div>
                     <div class="industry-showcase">
                        <div style="position:absolute; top:0; right:0; width:200px; height:200px; background:rgba(236,72,153,0.15); border-radius:50%; filter:blur(80px);"></div>
                        <div class="industry-showcase-header">
                           <div class="industry-showcase-icon" style="background: linear-gradient(135deg, #EC4899, #DB2777); color: #fff;">⚡</div>
                           <div class="industry-showcase-title">
                              <h4>On-Demand Portfolio</h4>
                              <p>Marketplace excellence</p>
                           </div>
                        </div>
                        <div class="showcase-stats">
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ondemand);">35+</div>
                              <div class="label">Marketplace Apps</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ondemand);">5M+</div>
                              <div class="label">Bookings</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ondemand);">< 3s</div>
                              <div class="label">Match Time</div>
                           </div>
                           <div class="showcase-stat">
                              <div class="num" style="color:var(--ondemand);">98%</div>
                              <div class="label">Fulfillment</div>
                           </div>
                        </div>
                        <div class="showcase-screens">
                           <div class="showcase-screen">
                              <div class="screen-icon">🏠</div>
                              <div class="screen-label">Booking</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">📍</div>
                              <div class="screen-label">Tracking</div>
                           </div>
                           <div class="showcase-screen">
                              <div class="screen-icon">⭐</div>
                              <div class="screen-label">Reviews</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ===== TECHNOLOGY STACK ===== -->
      <section class="section tech-stack my-0" id="tech">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge badge-primary">Technology Stack</span>
               <h2>Cutting-Edge <span class="text-gradient">Technologies</span> We Master</h2>
               <p>Our mobile app developers leverage the latest frameworks and cloud platforms to build future-proof applications that scale effortlessly.</p>
            </div>
            <div class="tech-grid">
               <div class="tech-card reveal">
                    <div class="tech-card-icon mx-auto"> <img src="https://emizentech.com/wp-content/uploads/2026/02/reactks.svg" width="50" height="50" alt="react-native-app"></div>
                    <h4>React Native</h4>
                    <p>Cross-platform apps with native performance. React Native mobile app development for iOS &amp; Android.</p>
               </div>
               <div class="tech-card reveal">
                    <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/flutter-icon.svg" alt="flutter" width="40" height="40"></div>
                    <h4>Flutter</h4>
                    <p>Google's UI toolkit for beautiful, natively compiled apps. Flutter mobile app development services.</p>
               </div>
               <div class="tech-card reveal">
                <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/cross-plateform.svg" alt="Cross-Platform" width="40" height="40"></div>
                  <h4>Cross-Platform</h4>
                  <p>Build once, deploy everywhere. Cross-platform mobile app development that reduces time-to-market by 40%.</p>
               </div>
               <div class="tech-card reveal">
                <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/android-native.svg" alt="Android Native" width="50" height="50"></div>
                  <h4>Android Native</h4>
                  <p>Kotlin &amp; Java-powered Android mobile app development with Material Design excellence.</p>
               </div>
               <div class="tech-card reveal">
                <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/ios-native.svg" alt="iOS Native" width="50" height="50"></div>
                  <h4>iOS Native</h4>
                  <p>Swift-powered iOS mobile app development with seamless Apple ecosystem integration.</p>
               </div>
               <div class="tech-card reveal">
                <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/aws-developent.svg" alt="AWS Cloud" width="40" height="40"></div>
                  <h4>AWS Cloud</h4>
                  <p>AWS mobile app development with Lambda, Amplify, and AppSync for serverless architecture.</p>
               </div>
               <div class="tech-card reveal">
                <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/ai-ml-developemnt.svg" alt="& ML" width="40" height="40"></div>
                  <h4>AI & ML</h4>
                  <p>AI-powered mobile app development with TensorFlow, Core ML, and GPT integration.</p>
               </div>
               <div class="tech-card reveal">
                <div class="tech-card-icon mx-auto"><img src="https://emizentech.com/wp-content/uploads/2026/04/cross-plateform.svg" alt="Hybrid Apps" width="40" height="40"></div>
                  <h4>Hybrid Apps</h4>
                  <p>Ionic &amp; Capacitor hybrid mobile app development for rapid prototyping and deployment.</p>
               </div>
            </div>
            <div class="text-center">
               <a href="#contact" class="cta-btn cta-dark">Consult Our Tech Experts <span class="cta-icon">→</span></a>
            </div>
         </div>
      </section>
      <!-- ===== DEVELOPMENT PROCESS ===== -->
      <section class="section process my-0" id="process">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge badge-accent">Our Process</span>
               <h2>From Idea to <span class="text-gradient">App Store</span> in 6 Steps</h2>
               <p>Our battle-tested agile development process ensures your mobile app is delivered on time, on budget, and beyond expectations.</p>
            </div>
            <div class="process-timeline">
               <div class="process-step reveal">
                  <div class="process-step-content">
                     <h3>Discovery & Strategy</h3>
                     <p>We deep-dive into your business goals, target audience, and competitive landscape. Our strategists map user journeys, define features, and create a comprehensive product roadmap that aligns with your vision.</p>
                  </div>
                  <div class="process-step-number d-none d-lg-flex">01</div>
                  <div class="spacer"></div>
               </div>
               <div class="process-step reveal">
                  <div class="spacer"></div>
                  <div class="process-step-number d-none d-lg-flex">02</div>
                  <div class="process-step-content">
                     <h3>UI/UX Design</h3>
                     <p>Our designers create wireframes, interactive prototypes, and stunning visual designs. Every pixel is crafted to maximize engagement, minimize friction, and deliver an intuitive user experience.</p>
                  </div>
               </div>
               <div class="process-step reveal">
                  <div class="process-step-content">
                     <h3>Agile Development</h3>
                     <p>Two-week sprints with daily standups, CI/CD pipelines, and rigorous code reviews. We use industry-leading practices to build scalable, maintainable, and high-performance mobile applications.</p>
                  </div>
                  <div class="process-step-number d-none d-lg-flex">03</div>
                  <div class="spacer"></div>
               </div>
               <div class="process-step reveal">
                  <div class="spacer"></div>
                  <div class="process-step-number d-none d-lg-flex">04</div>
                  <div class="process-step-content">
                     <h3>QA & Testing</h3>
                     <p>Comprehensive testing across 200+ device configurations — manual, automated, performance, and security testing. We ensure your app is bug-free and optimized before launch.</p>
                  </div>
               </div>
               <div class="process-step reveal">
                  <div class="process-step-content">
                     <h3>Deployment & Launch</h3>
                     <p>Seamless App Store and Google Play submission, ASO optimization, and launch strategy. We handle everything from certificates to compliance to get your app live with maximum visibility.</p>
                  </div>
                  <div class="process-step-number d-none d-lg-flex">05</div>
                  <div class="spacer"></div>
               </div>
               <div class="process-step reveal">
                  <div class="spacer"></div>
                  <div class="process-step-number d-none d-lg-flex">06</div>
                  <div class="process-step-content">
                     <h3>Support & Growth</h3>
                     <p>Post-launch monitoring, performance analytics, regular updates, and feature enhancements. Our dedicated support team ensures your app stays ahead of the competition and continues to grow.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ===== PORTFOLIO / CASE STUDIES ===== -->
      <section class="section portfolio my-0" id="portfolio">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge badge-primary">Case Studies & Portfolio</span>
               <h2>Apps We've Built. <span class="text-gradient">Results That Speak.</span></h2>
               <p>Explore our portfolio of mobile app development projects across industries — each one a testament to our expertise in delivering transformative digital products.</p>
            </div>
            <div class="portfolio-grid">
               <div class="portfolio-card reveal">
                  <div class="portfolio-thumb" style="background: linear-gradient(135deg, #06B6D4, #0891B2);">
                     <div class="thumb-icon"><img draggable="false" role="img" class="emoji"  alt="Remittance_AKIPaga" src="https://emizentech.com/wp-content/uploads/2026/04/Mask-group.png" width="170" height="72"> </div>
                     <span class="portfolio-tag" style="background: rgba(0,0,0,0.3);">Healthcare</span>
                  </div>
                  <div class="portfolio-content">
                     <h3>ZamZam — Telemedicine Platform</h3>
                     <p>A HIPAA-compliant telemedicine mobile app connecting 50,000+ patients with 2,000+ doctors. Features include video consultations, e-prescriptions, EHR integration, and appointment scheduling.</p>
                     <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                           <div class="value">50K+</div>
                           <div class="label">Users</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">4.8★</div>
                           <div class="label">Rating</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">60%</div>
                           <div class="label">Wait Reduction</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="portfolio-card reveal">
                  <div class="portfolio-thumb" style="background: linear-gradient(135deg, #007DB2, #1F86B1);">
                     <div class="thumb-icon"><img draggable="false" role="img" class="emoji" alt="Remittance_AKIPaga" src="https://emizentech.com/wp-content/uploads/2026/04/Remittance_AKIPaga.png" width="170" height="72"> </div>
                     <span class="portfolio-tag" style="background: rgba(0,0,0,0.3);">FinTech</span>
                  </div>
                  <div class="portfolio-content">
                     <h3>AKIPaga — Digital Wallet & Banking</h3>
                     <p>A PCI-DSS compliant mobile banking app with instant P2P transfers, bill payments, investment tracking, and NFC tap-to-pay. Processes $2B+ in transactions annually.</p>
                     <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                           <div class="value">$2B+</div>
                           <div class="label">Processed</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">200K+</div>
                           <div class="label">Users</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">0.01s</div>
                           <div class="label">Latency</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="portfolio-card reveal">
                  <div class="portfolio-thumb" style="background: linear-gradient(135deg, #F43F5E, #E11D48);">
                     <div class="thumb-icon"><img  draggable="false" role="img" src="https://emizentech.com/wp-content/uploads/2026/04/Privykart-1.png" width="175" height="41" alt="Chomp"> </div>
                     <span class="portfolio-tag" style="background: rgba(0,0,0,0.3);">eCommerce</span>
                  </div>
                  <div class="portfolio-content">
                     <h3>PrivyKart — Multi-Vendor Marketplace</h3>
                     <p>An AI-powered eCommerce mobile app with AR try-on, personalized recommendations, and Shopify integration. Increased client revenue by 3.5x in the first year.</p>
                     <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                           <div class="value">3.5x</div>
                           <div class="label">Revenue Growth</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">1M+</div>
                           <div class="label">Downloads</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">68%</div>
                           <div class="label">Conv. Up</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="portfolio-card reveal">
                  <div class="portfolio-thumb" style="background: linear-gradient(135deg, #F97316, #EA580C);">
                     <div class="thumb-icon"><img  draggable="false" role="img" src="https://emizentech.com/wp-content/uploads/2026/04/chomp.svg" width="175" height="41" alt="kappa_maths"> </div>
                     <span class="portfolio-tag" style="background: rgba(0,0,0,0.3);">Food Tech</span>
                  </div>
                  <div class="portfolio-content">
                     <h3>chomp — Food Delivery Platform</h3>
                     <p>End-to-end food delivery mobile app with real-time GPS tracking, AI route optimization, and multi-restaurant ordering. Serving 500+ restaurants in 3 cities.</p>
                     <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                           <div class="value">500+</div>
                           <div class="label">Restaurants</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">28min</div>
                           <div class="label">Avg Delivery</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">4.7★</div>
                           <div class="label">Rating</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="portfolio-card reveal">
                  <div class="portfolio-thumb" style="background: linear-gradient(135deg, #14B8A6, #0D9488);">
                     <div class="thumb-icon"><img  draggable="false" role="img" src="https://emizentech.com/wp-content/uploads/2026/04/kappa_maths.png" width="" height="" alt=""></div>
                     <span class="portfolio-tag" style="background: rgba(0,0,0,0.3);">Education</span>
                  </div>
                  <div class="portfolio-content">
                     <h3>kappa_maths — eLearning Platform</h3>
                     <p>Gamified education mobile app with live classes, AI-powered adaptive learning, progress tracking, and a marketplace for 10,000+ courses across 50+ categories.</p>
                     <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                           <div class="value">300K+</div>
                           <div class="label">Learners</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">92%</div>
                           <div class="label">Completion</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">10K+</div>
                           <div class="label">Courses</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="portfolio-card reveal">
                  <div class="portfolio-thumb" style="background: linear-gradient(135deg, #EC4899, #DB2777);">
                     <div class="thumb-icon"><img  draggable="false" role="img" src="https://emizentech.com/wp-content/uploads/2026/04/HapaService.png" width="182" height="70" alt="HapaService"></div>
                     <span class="portfolio-tag" style="background: rgba(0,0,0,0.3);">On-Demand</span>
                  </div>
                  <div class="portfolio-content">
                     <h3>HapaService — Home Services App</h3>
                     <p>On-demand home services mobile app connecting users with verified professionals. Features real-time booking, in-app payments, and a comprehensive provider management dashboard.</p>
                     <div class="portfolio-metrics">
                        <div class="portfolio-metric">
                           <div class="value">100K+</div>
                           <div class="label">Bookings</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">5K+</div>
                           <div class="label">Providers</div>
                        </div>
                        <div class="portfolio-metric">
                           <div class="value">98%</div>
                           <div class="label">Fulfillment</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center">
               <a href="#contact" class="cta-btn cta-accent">See Full Portfolio & Get Estimate <span class="cta-icon">→</span></a>
            </div>
         </div>
      </section>
      <!-- ===== WHY CHOOSE US ===== -->
      <section class="section why-us my-0" id="why-us">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge badge-primary">Why Emizentech</span>
               <h2>Why <span class="text-gradient">1500+ Businesses</span> Choose Us ?</h2>
               <p>As a top-rated mobile app development company, we combine deep technical expertise with industry domain knowledge to deliver apps that create real business impact.</p>
            </div>
            <div class="why-grid">
               <div class="why-features">
                  <div class="why-feature reveal">
                     <div class="why-feature-icon" style="background: rgba(79,70,229,0.1);">🏆</div>
                     <div>
                        <h4>Top-Rated on Clutch & GoodFirms</h4>
                        <p>Consistently ranked among the best mobile app development companies globally with a 4.9/5 client satisfaction rating across 500+ verified reviews.</p>
                     </div>
                  </div>
                  <div class="why-feature reveal">
                     <div class="why-feature-icon" style="background: rgba(16,185,129,0.1);">💰</div>
                     <div>
                        <h4>40% Cost Savings vs. Local Agencies</h4>
                        <p>Enterprise-quality mobile app development at offshore rates. Our Singapore-optimized delivery model offers best-in-class value without compromising on quality.</p>
                     </div>
                  </div>
                  <div class="why-feature reveal">
                     <div class="why-feature-icon" style="background: rgba(245,158,11,0.1);">⚡</div>
                     <div>
                        <h4>2x Faster Time-to-Market</h4>
                        <p>Agile methodology with pre-built modules, CI/CD pipelines, and parallel development tracks that cut your development timeline in half.</p>
                     </div>
                  </div>
                  <div class="why-feature reveal">
                     <div class="why-feature-icon" style="background: rgba(244,63,94,0.1);">🔒</div>
                     <div>
                        <h4>Enterprise-Grade Security</h4>
                        <p>ISO 27001 certified. Every app undergoes rigorous OWASP security testing, data encryption, and compliance verification before deployment.</p>
                     </div>
                  </div>
                  <div class="why-feature reveal">
                     <div class="why-feature-icon" style="background: rgba(139,92,246,0.1);">🤝</div>
                     <div>
                        <h4>Dedicated Project Manager</h4>
                        <p>Your single point of contact throughout the project lifecycle. Daily updates, weekly demos, and transparent communication via your preferred channels.</p>
                     </div>
                  </div>
               </div>
               <div class="why-stats-panel reveal">
                  <div class="why-stats-grid">
                     <div class="why-stat">
                        <div class="number">1200<span class="accent">+</span></div>
                        <div class="label">Apps Delivered</div>
                     </div>
                     <div class="why-stat">
                        <div class="number">150<span class="accent">+</span></div>
                        <div class="label">Expert Developers</div>
                     </div>
                     <div class="why-stat">
                        <div class="number">12<span class="accent">+</span></div>
                        <div class="label">Years Experience</div>
                     </div>
                     <div class="why-stat">
                        <div class="number">98<span class="accent">%</span></div>
                        <div class="label">Client Retention</div>
                     </div>
                     <div class="why-stat">
                        <div class="number">35<span class="accent">+</span></div>
                        <div class="label">Countries Served</div>
                     </div>
                     <div class="why-stat">
                        <div class="number">4.9<span class="accent">/5</span></div>
                        <div class="label">Clutch Rating</div>
                     </div>
                  </div>
                  <div class="awards-row">
                     <div class="award">🏆</div>
                     <div class="award">⭐</div>
                     <div class="award">🥇</div>
                     <div class="award">🎖️</div>
                     <div class="award">💎</div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ===== TESTIMONIALS ===== -->
      <section class="section testimonials my-0">
         <div class="container">
            <div class="section-header reveal">
               <span class="badge badge-accent">Client Testimonials</span>
               <h2>What Our <span class="text-gradient">Clients Say</span></h2>
               <p>Real feedback from businesses that trusted us with their mobile app development projects.</p>
            </div>
            <div class="testimonial-grid">
               <div class="testimonial-card reveal">
                  <div class="stars">★★★★★</div>
                  <blockquote>Emizentech transformed our healthcare operations with a telemedicine app that our patients love. The team's understanding of HIPAA compliance and medical workflows was exceptional."</blockquote>
                  <div class="testimonial-author">
                     <div class="testimonial-avatar">DR</div>
                     <div>
                        <div class="testimonial-name">Dr. Rachel Tan</div>
                        <div class="testimonial-role">CTO, MedConnect Singapore</div>
                     </div>
                  </div>
               </div>
               <div class="testimonial-card reveal">
                  <div class="stars">★★★★★</div>
                  <blockquote>Our fintech mobile banking app handles millions in transactions daily with zero downtime. The security architecture and performance optimization were world-class. Highly recommend."</blockquote>
                  <div class="testimonial-author">
                     <div class="testimonial-avatar">JL</div>
                     <div>
                        <div class="testimonial-name">James Lee</div>
                        <div class="testimonial-role">CEO, SwiftPay Technologies</div>
                     </div>
                  </div>
               </div>
               <div class="testimonial-card reveal">
                  <div class="stars">★★★★★</div>
                  <blockquote>From concept to App Store in just 4 months. The eCommerce app they built increased our mobile revenue by 3.5x. Their cross-platform expertise saved us significant development costs."</blockquote>
                  <div class="testimonial-author">
                     <div class="testimonial-avatar">SK</div>
                     <div>
                        <div class="testimonial-name">Sarah Kim</div>
                        <div class="testimonial-role">Founder, ShopVerse</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ===== FINAL CTA / CONTACT FORM ===== -->
      <section class="section final-cta mb-0">
         <div class="container">
            <div class="final-cta-content text-center">
               <span class="badge" style="background: rgba(245,158,11,0.15); color: var(--accent); margin-bottom: 16px;">Limited Offer: Free Technical Consultation + Project Estimate</span>
               <h2>Ready to Build Your <span style="color: var(--accent);">Next-Gen Mobile App?</span></h2>
               <p style="font-size: 1.1rem; color: var(--gray-3); max-width: 600px; margin: 0 auto 40px;">Share your idea and get a free consultation with our mobile app development experts. No commitment, just clarity on technology, timeline, and costs.</p>
               <div class="final-cta-buttons" id="contact">
                  <a href="https://wa.me/+19895359295" class="cta-btn cta-primary">💬 WhatsApp Us <span class="cta-icon">→</span></a>
               </div>
               <div class="contact-form-wrapper">
                  <h3>Get Your Free App Development Quote</h3>
                                    <?php echo do_shortcode('[elementor-template id="35205"]'); ?>
                  <p style="text-align:center; margin-top: 16px; font-size: 0.78rem; color: var(--gray-2);">🔒 Your information is 100% secure. We respond within 2 business hours.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- ===== FOOTER ===== -->

 

 <section class="conntect--us mn_fooer">
                <div class="container">
                    <div class="d-block contact-info p-0 position-relative">
                       <div class="row ">
                          <div class="col-lg-9">
                             <div class="connect-with-us d-flex align-items-center justify-content-between">
                                <img src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/emiz-footer-icon.png" alt="footer" width="172" height="40">
                                <p class="address text-white d-flex align-items-center pb-0"> <img class="mr-2" src="https://emizentech.com/blog/wp-content/uploads/sites/2/2025/01/ft-Location-icon.png" alt="Address" width="32" height="38">  30 NGould St Ste R Sheridan, WY 82801 USA</p>
                             </div>
                          </div>
                          <div class="col-lg-3 mt-3 mt-lg-0">
                             <p class="text-white border-space d-flex align-items-center"><img class="mr-2" src="https://emizentech.com/wp-content/uploads/2026/03/Icon-4.svg" alt="USA" width="65" height="65"> <span>USA<a class="text-white d-block" class="d-block" href="tel:+19895359295">+1 (989) 535-9295</a></span></p>
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
                                 <li><a href="tel:+1 (989) 535-9295"> <img class="d-block" src="https://emizentech.com/wp-content/uploads/2026/03/phone.svg" width="30" height="30" alt="+1 (989) 535-9295">+1 (989) 535-9295</a></li>
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
                                        <li class="txts"> <a class="m-0" href="https://www.facebook.com/EmizenTech/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="http://www.linkedin.com/company/emizen-tech" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a class="m-0" href="https://www.instagram.com/emizentech/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                                    <li class="txts"> <a href="https://x.com/EmizenTech" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                              
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
            <div class="modal fade hiring-modal-popup" id="pricingModal" tabindex="-1" role="dialog" aria-labelledby="pricingModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="contact-form modal-from">
                                <div class="row">
                                    <div class="col-md-6 text-left d-md-flex d-none">
                                        <div class="form-left-box w-100">
                                            <h3 class="form-title text-white text-left">Wait! Don’t Let Your Competitors Outspace You</h3>
                                            <ul class="px-0 text-white">
                                                <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons3.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2">Rapid Response Guarantee: Get a response within 2 hours during the business day.</li>
                                                <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons1.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2"> Certified Talent, Better Rates: Access 150+ Shopify and Adobe Experts at ~40% less than US agency fees.</li>
                                                <li class="text-white"><img src="https://emizentech.com/wp-content/uploads/2026/01/icons2.svg" alt="inda" width="34" height="18" class="mr-md-3 mr-2"> Zero Risk Discovery: Fully NDA - Protected technical consultation with no obligations.</li>
                                            </ul>
                                            <ul class="px-0 d-flex flex-wrap badge-logo align-items-center">
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/02/image-11670.png" width="135" height="168" alt="badge"></li>
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/02/Group-1321318155.png" width="161" height="168" alt="badge"></li>
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/02/shopware-partner.png" width="159" height="168" alt="badge"></li>
                                                <li><img src="https://emizentech.com/wp-content/uploads/2026/02/automotive-2026.png" width="800" height="864" alt="badge"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-right">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span>&times;</span>
                                            </button>
                                            <div class="consulting-fgorm">
                                                <h3 class="form-tiitle">Get Your Free Technical Roadmap & Quote</h3>
                                                <?php echo do_shortcode('[elementor-template id="21197"]'); ?>

                                                <div class="trusted-txt text-center">Trusted By 1200+ Global Brands Including:</div>
                                                <ul class="d-flex trusted-logos align-items-center px-0 mb-0">
                                                    <li class="logos3">
                                                        <img src="https://emizentech.com/wp-content/uploads/2026/01/ego-1.svg" width="222" height="63" alt="buitanda">
                                                    </li>
                                                    <li class="logos3">
                                                        <img src="https://emizentech.com/wp-content/uploads/2026/01/kia.svg" width="222" height="63" alt="buitanda">
                                                    </li>
                                                    <li class="logos3">
                                                        <img src="https://emizentech.com/wp-content/uploads/2026/01/buitanda.svg" width="222" height="63" alt="buitanda">
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
         // Industry tabs
         document.querySelectorAll('.industry-tab').forEach(tab => {
           tab.addEventListener('click', () => {
             document.querySelectorAll('.industry-tab').forEach(t => t.classList.remove('active'));
             document.querySelectorAll('.industry-panel').forEach(p => p.classList.remove('active'));
             tab.classList.add('active');
             document.getElementById('panel-' + tab.dataset.tab).classList.add('active');
           });
         });
         
         // Scroll reveal
         const revealElements = document.querySelectorAll('.reveal');
         const revealOnScroll = () => {
           const windowHeight = window.innerHeight;
           revealElements.forEach(el => {
             const elementTop = el.getBoundingClientRect().top;
             if (elementTop < windowHeight - 80) {
               el.classList.add('visible');
             }
           });
         };
         window.addEventListener('scroll', revealOnScroll);
         window.addEventListener('load', revealOnScroll);
         
         // Smooth scroll for anchor links
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