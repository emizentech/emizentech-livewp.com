<?php
// Template Name: Cost Calculator
get_header();
?>
<style>
    :root {
        --brand: #FF6B00;
        --brand-dark: #D95C00;
        --brand-light: #FFF0E5;
        --accent: #0A1628;
        --accent2: #1A3A6B;
        --gray-50: #F8F9FC;
        --gray-100: #EEF1F6;
        --gray-200: #D8DDE8;
        --gray-400: #8A94A6;
        --gray-600: #4A5568;
        --gray-900: #0F172A;
        --success: #10B981;
        --radius: 14px;
        --shadow: 0 20px 60px rgba(10, 22, 40, 0.13);
        --shadow-sm: 0 4px 16px rgba(10, 22, 40, 0.08);
    }

    /* ══════════════════════════════
       CALCULATOR CARD
    ══════════════════════════════ */
    .calc-card {
        background: #fff;
        border-radius: 24px;
        box-shadow: var(--shadow);
        overflow: hidden;
        margin-top: -50px;
        position: relative;
        z-index: 10;
    }

    /* ══════════════════════════════
       PROGRESS BAR
    ══════════════════════════════ */
    .calc-progress {
        height: 5px;
        border-radius: 0;
        background: var(--gray-100);
    }

    .calc-progress .progress-bar {
        background: linear-gradient(90deg, var(--brand-dark), var(--brand));
        transition: width 0.5s cubic-bezier(.4, 0, .2, 1);
        border-radius: 0;
    }

    /* ══════════════════════════════
       STEP HEADER
    ══════════════════════════════ */
    .step-label-text {
        font-size: 11px;
        font-weight: 500;
        color: var(--brand);
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .step-title-text {
        font-family: 'Syne', sans-serif;
        font-weight: 700;
        font-size: clamp(18px, 3vw, 24px);
        color: var(--gray-900);
        line-height: 1.25;
    }

    /* ══════════════════════════════
       STEP DOTS
    ══════════════════════════════ */
    .step-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--gray-200);
        display: inline-block;
        transition: all 0.3s;
    }

    .step-dot.active {
        background: var(--brand);
        transform: scale(1.35);
    }

    .step-dot.done {
        background: var(--success);
    }

    /* ══════════════════════════════
       STEP PANES
    ══════════════════════════════ */
    .step-pane {
        display: none;
        animation: fadeUp 0.35s ease both;
    }

    .step-pane.active {
        display: block;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ══════════════════════════════
       OPTION CARDS (single-select)
    ══════════════════════════════ */
    .option-card {
        border: 2px solid var(--gray-100);
        border-radius: var(--radius);
        padding: 16px 18px;
        cursor: pointer;
        background: var(--gray-50);
        user-select: none;
        transition: border-color .2s, background .2s, transform .2s, box-shadow .2s;
        position: relative;
        height: 100%;
    }

    .option-card:hover {
        border-color: var(--brand);
        background: var(--brand-light);
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }

    .option-card.selected {
        border-color: var(--brand);
        background: var(--brand-light);
        box-shadow: 0 0 0 4px rgba(255, 107, 0, 0.12);
    }

    .option-icon {
        font-size: 24px;
        display: block;
        margin-bottom: 8px;
    }

    .option-label {
        font-size: 14px;
        font-weight: 600;
        color: var(--gray-900);
        line-height: 1.3;
    }

    .option-sub {
        font-size: 12px;
        color: var(--gray-400);
        margin-top: 3px;
    }

    .option-check {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid var(--gray-200);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: transparent;
        transition: all .2s;
    }

    .option-card.selected .option-check {
        background: var(--brand);
        border-color: var(--brand);
        color: #fff;
    }

    /* ══════════════════════════════
       CHECKBOX ITEMS (multi-select)
    ══════════════════════════════ */
    .cb-item {
        border: 2px solid var(--gray-100);
        border-radius: var(--radius);
        padding: 13px 16px;
        cursor: pointer;
        background: var(--gray-50);
        user-select: none;
        transition: border-color .2s, background .2s;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .cb-item:hover {
        border-color: var(--brand);
        background: var(--brand-light);
    }

    .cb-item.checked {
        border-color: var(--brand);
        background: var(--brand-light);
    }

    .cb-box {
        width: 20px;
        height: 20px;
        min-width: 20px;
        border-radius: 5px;
        border: 2px solid var(--gray-200);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: transparent;
        transition: all .2s;
    }

    .cb-item.checked .cb-box {
        background: var(--brand);
        border-color: var(--brand);
        color: #fff;
    }

    .cb-label {
        font-size: 14px;
        font-weight: 500;
        color: var(--gray-900);
        line-height: 1.4;
    }

    /* ══════════════════════════════
       FORM INPUTS
    ══════════════════════════════ */
    .form-label {
        font-size: 13px;
        font-weight: 600;
        color: var(--gray-600);
        margin-bottom: 6px;
    }

    .form-control {
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        border: 2px solid var(--gray-100);
        border-radius: var(--radius);
        background: var(--gray-50);
        color: var(--gray-900);
        padding: 12px 16px;
        transition: border-color .2s, background .2s;
    }

    .form-control:focus {
        border-color: var(--brand);
        background: #fff;
        box-shadow: 0 0 0 3px rgba(255, 107, 0, 0.1);
    }

    .optional-tag {
        font-size: 11px;
        color: var(--gray-400);
        font-weight: 400;
        margin-left: 4px;
    }

    /* ══════════════════════════════
       ERROR MESSAGES
    ══════════════════════════════ */
    .err-msg {
        color: #EF4444;
        font-size: 13px;
        font-weight: 500;
        display: none;
    }

    .err-msg.show {
        display: block;
    }

    /* ══════════════════════════════
       NAV BUTTONS
    ══════════════════════════════ */
    .btn-calc-back {
        font-family: 'DM Sans', sans-serif;
        font-weight: 600;
        font-size: 15px;
        padding: 12px 24px;
        border-radius: 12px;
        border: 2px solid var(--gray-200);
        background: transparent;
        color: var(--gray-600);
        transition: all .2s;
        cursor: pointer;
    }

    .btn-calc-back:hover {
        border-color: var(--gray-400);
        color: var(--gray-900);
        background: var(--gray-50);
    }

    .btn-calc-next {
        font-family: 'DM Sans', sans-serif;
        font-weight: 600;
        font-size: 15px;
        padding: 12px 28px;
        border-radius: 12px;
        border: none;
        background: #ff6b00 !important;
        color: #fff !important;
        box-shadow: 0 4px 16px rgba(255, 107, 0, 0.35);
        transition: all .22s;
        cursor: pointer;
        margin-left: auto;
        display: block;
    }

    .btn-calc-next:hover {
        background: var(--brand-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(255, 107, 0, 0.4);
        color: #fff;
    }

    /* ══════════════════════════════
       SUCCESS SCREEN
    ══════════════════════════════ */
    #successScreen {
        display: none;
    }

    #successScreen.show {
        display: block;
        animation: fadeUp .5s ease both;
    }

    .success-icon-wrap {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--brand), var(--brand-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
        box-shadow: 0 8px 32px rgba(255, 107, 0, 0.35);
        font-size: 32px;
        color: #fff;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            box-shadow: 0 8px 32px rgba(255, 107, 0, 0.35);
        }

        50% {
            box-shadow: 0 8px 48px rgba(255, 107, 0, 0.55);
        }
    }

    .success-title {
        font-family: 'Syne', sans-serif;
        font-weight: 800;
        font-size: 30px;
        color: var(--gray-900);
    }

    .success-desc {
        color: var(--gray-600);
        font-size: 16px;
        line-height: 1.7;
        max-width: 480px;
        margin: 0 auto;
    }

    .trust-divider {
        border-top: 2px solid var(--gray-100);
    }

    .trust-num {
        font-family: 'Syne', sans-serif;
        font-weight: 800;
        font-size: 28px;
        color: var(--brand);
    }

    .trust-label {
        font-size: 13px;
        color: var(--gray-400);
        margin-top: 2px;
    }

    .gap-1 {
        gap: .25rem !important;
    }

    button.btn-calc-back {
        border: 2px solid #d8dde8;
        background: transparent;
        color: #4a5568;
        transition: all .2s;
    }

    button.btn-calc-back {
        border: 2px solid #d8dde8 !important;
        background: transparent !important;
        color: #4a5568 !important;
        font-weight: 600;
    }

    .step-pane .form-control {
        font-family: 'DM Sans', sans-serif;
        font-size: 15px;
        border: 2px solid #eef1f6;
        border-radius: 14px;
        background: #f8f9fc;
        color: #0f172a;
        padding: 12px 16px;
        transition: border-color .2s, background .2s;
        line-height: 1.5;
        height: auto;
    }

    div.calc-card div .step-pane .form-control:focus {
        background-color: #f4f4f4;
        box-shadow: none !important;
        outline: none;
    }
</style>
<section class="cost-page-section mt-5">
    <div class="bg-shape-right"></div>
    <div class="bg-blob-left"></div>
    <?php
    if (isset($_POST['submit'])) {

        // echo "<pre>";
        // print_r($_POST);
        // exit;

        // Process form data here
        $websiteType = $_POST['websiteType'];
        $pageCount = $_POST['pageCount'];
        $industry = $_POST['industry'];
        $features = $_POST['features'];
        $traffic = $_POST['traffic'];
        $design = $_POST['design'];
        $compliance = $_POST['compliance'];
        $integrations = $_POST['integrations'];
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $siteurl = $_POST['siteurl'];
        $notes = $_POST['notes'];

        // send all details to email
        //$to = $_POST['contactEmail'];
        $to = 'info@emizentech.com';
        $subject = "Cost estimate request from $fname ($email)";
        // $message = "Hello $fname,\n\nThank you for using our Cost Cost Calculator. Here is a summary of your selections:\n\n";
        $message .= "Email: $email\n";
        $message .= "Phone: $phone\n";
        $message .= "Website Type: $websiteType\n";
        $message .= "Page Count: $pageCount\n";
        $message .= "Industry: $industry\n";
        $message .= "Features: $features\n";
        $message .= "Traffic: $traffic\n";
        $message .= "Design Requirements: $design\n";
        $message .= "Compliance Needs: $compliance\n";
        $message .= "Integrations: $integrations\n";
        $message .= "Site URL: $siteurl\n";
        $message .= "Notes: $notes\n";
        // $message .= "\nWe will review your requirements and get back to you with a detailed estimate shortly.\n\nBest regards,\nThe EmizenTech Team";

        if (wp_mail($to, $subject, $message) == true) {
            // echo "Email sent successfully";
            wp_redirect('https://emizentech.com/thank-you.html');
            exit();
        } else {
            // Email sending failed
            echo "Something went wrong while sending the email. Please try again.";
        }
    }
    ?>
    <div class="container text-center pt-5 mt-5">
        <h1 class="text-center mb-3 pt-3">Web Development Cost Calculator</h1>
    </div>
    <form method="post" action="/website-cost-estimator.html" id="costCalculatorForm" class="calculater_form">
        <!-- ════════════════════════════════════════════════
     CALCULATOR
════════════════════════════════════════════════ -->
        <div class="container mt-5 pb-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    <div class="calc-card">

                        <!-- PROGRESS BAR -->
                        <div class="progress calc-progress rounded-0">
                            <div class="progress-bar" id="progressBar" role="progressbar"
                                style="width:12.5%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="8"></div>
                        </div>

                        <!-- STEP HEADER -->
                        <div id="calcHeader" class="px-4 px-md-5 pt-4 pb-0 d-flex align-items-start justify-content-between flex-wrap gap-3">
                            <div>
                                <div class="step-label-text mb-1" id="stepLabel">Step 1 of 8</div>
                                <div class="step-title-text" id="stepTitle">What is your industry?</div>
                            </div>
                            <div class="d-flex align-items-center gap-1 pt-1" id="stepDots"></div>
                        </div>

                        <!-- STEP BODY -->
                        <div id="calcBody" class="px-4 px-md-5 py-4" style="min-height:320px;">

                            <!-- ══ STEP 1 – Industry ══ -->
                            <div class="step-pane active" data-step="1" data-type="single">
                                <div class="row g-3">
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="ecommerce_retail">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🛍️</span>
                                            <div class="option-label">Retail &amp; eCommerce</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="healthcare">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🏥</span>
                                            <div class="option-label">Healthcare</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="finance">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">💰</span>
                                            <div class="option-label">Finance &amp; Banking</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="education_ind">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📖</span>
                                            <div class="option-label">Education</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="real_estate">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🏠</span>
                                            <div class="option-label">Real Estate</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="manufacturing">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🏭</span>
                                            <div class="option-label">Manufacturing</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="logistics">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🚚</span>
                                            <div class="option-label">Logistics</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="tech">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">💻</span>
                                            <div class="option-label">Technology / IT</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="other_ind">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🌐</span>
                                            <div class="option-label">Other</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="err-msg mt-2" id="err1">
                                    <i class="bi bi-exclamation-circle me-1"></i>Please select your industry to continue.
                                </div>
                            </div>

                            <!-- ══ STEP 2 – Website Type ══ -->
                            <div class="step-pane" data-step="2" data-type="single">
                                <div class="row g-3">
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="corporate">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🏢</span>
                                            <div class="option-label">Corporate Website</div>
                                            <div class="option-sub">Brand presence &amp; services</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="ecommerce">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🛒</span>
                                            <div class="option-label">Online Store</div>
                                            <div class="option-sub">Sell products online</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="portfolio">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🎨</span>
                                            <div class="option-label">Portfolio Website</div>
                                            <div class="option-sub">Showcase your work</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="news">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📰</span>
                                            <div class="option-label">News / Media Portal</div>
                                            <div class="option-sub">Content publishing</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="education">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🎓</span>
                                            <div class="option-label">Educational Website</div>
                                            <div class="option-sub">Online learning platform</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="directory">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📋</span>
                                            <div class="option-label">Web Directory / Forum</div>
                                            <div class="option-sub">Community &amp; listings</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="other">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🌐</span>
                                            <div class="option-label">Other</div>
                                            <div class="option-sub">Something else entirely</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="err-msg mt-2" id="err2">
                                    <i class="bi bi-exclamation-circle me-1"></i>Please select an option to continue.
                                </div>
                            </div>

                            <!-- ══ STEP 3 – Page Count ══ -->
                            <div class="step-pane" data-step="3" data-type="single">
                                <div class="row g-3">
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="not_sure">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🤔</span>
                                            <div class="option-label">Not Sure Yet</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="up_to_50">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📄</span>
                                            <div class="option-label">Up to 50 Pages</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="50_100">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📑</span>
                                            <div class="option-label">50 – 100 Pages</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="100_500">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📚</span>
                                            <div class="option-label">100 – 500 Pages</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="500_1000">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🗄️</span>
                                            <div class="option-label">500 – 1,000 Pages</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="1000plus">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🏗️</span>
                                            <div class="option-label">1,000+ Pages</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="err-msg mt-2" id="err3">
                                    <i class="bi bi-exclamation-circle me-1"></i>Please select an option to continue.
                                </div>
                            </div>

                            <!-- ══ STEP 4 – Features (multi) ══ -->
                            <div class="step-pane" data-step="4" data-type="multi">
                                <div class="row g-2">
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="multilingual">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🌍 Multilingual Support</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="drag_drop">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🧩 Drag-and-Drop Editor</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="contact_forms">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">📬 Contact Forms</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="livechat">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">💬 Live Chat / Chatbot</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="user_content">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">✍️ User-Generated Content</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="shopping_cart">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🛒 Shopping Cart &amp; Checkout</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="mobile">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">📱 Mobile-First Design</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="social_sharing">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🔗 Social Media Integration</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="analytics">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">📊 Web Analytics Dashboard</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="seo">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🔍 Technical SEO</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="cms">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">📝 Custom CMS</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="api_integration">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🔌 Third-party API Integration</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="other_feature">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">➕ Other</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-2 mb-0" style="font-size:13px;color:var(--gray-400);">Select all that apply</p>
                            </div>

                            <!-- ══ STEP 5 – Traffic ══ -->
                            <div class="step-pane" data-step="5" data-type="single">
                                <div class="row g-3">
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="lt_1k">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">👥</span>
                                            <div class="option-label">Under 1,000 / mo</div>
                                            <div class="option-sub">Small, local audience</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="1k_10k">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">📈</span>
                                            <div class="option-label">1K – 10K / mo</div>
                                            <div class="option-sub">Growing business</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="10k_100k">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🚀</span>
                                            <div class="option-label">10K – 100K / mo</div>
                                            <div class="option-sub">Established brand</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="100k_1m">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">⚡</span>
                                            <div class="option-label">100K – 1M / mo</div>
                                            <div class="option-sub">High-traffic platform</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card" data-value="gt_1m">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🌐</span>
                                            <div class="option-label">Over 1M / mo</div>
                                            <div class="option-sub">Enterprise scale</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="err-msg mt-2" id="err5">
                                    <i class="bi bi-exclamation-circle me-1"></i>Please select an option to continue.
                                </div>
                            </div>

                            <!-- ══ STEP 6 – Design Mockups ══ -->
                            <div class="step-pane" data-step="6" data-type="single">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="option-card" data-value="have_design">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🎯</span>
                                            <div class="option-label">I have design mockups</div>
                                            <div class="option-sub">Ready to hand off</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="option-card" data-value="third_party">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🤝</span>
                                            <div class="option-label">Hiring a designer separately</div>
                                            <div class="option-sub">Will share when ready</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="option-card" data-value="need_design">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">✏️</span>
                                            <div class="option-label">Need design services too</div>
                                            <div class="option-sub">Full UI/UX from scratch</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="err-msg mt-2" id="err6">
                                    <i class="bi bi-exclamation-circle me-1"></i>Please select an option to continue.
                                </div>
                            </div>

                            <!-- ══ STEP 7 – Compliance & Integrations (mixed) ══ -->
                            <div class="step-pane" data-step="7" data-type="mixed">
                                <p class="mb-2 fw-semibold" style="font-size:14px;color:var(--gray-600);">Compliance requirements:</p>
                                <div class="row g-2 mb-4">
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="none_compliance">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label"><img src="https://emizentech.com/wp-content/uploads/2026/03/ci-5.svg" alt="None /  Not Sure" /> None / Not Sure</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="gdpr">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🇪🇺 GDPR</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="ccpa">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🇺🇸 CCPA</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="hipaa">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">🏥 HIPAA</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="pci">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label">💳 PCI DSS</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="soc2">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label"><img src="https://emizentech.com/wp-content/uploads/2026/03/ci-3.svg" alt="SOC 2" /> SOC 2</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="ada">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label"><img src="https://emizentech.com/wp-content/uploads/2026/03/ci-4.svg" alt="ADA" /> ADA</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="iso27001">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label"><img src="https://emizentech.com/wp-content/uploads/2026/03/ci-1.svg" alt="ISO/IEC 27001" /> ISO/IEC 27001</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                                        <div class="cb-item" data-value="external-system-integrations">
                                            <div class="cb-box"><i class="fa fa-check"></i></div>
                                            <span class="cb-label"><img src="https://emizentech.com/wp-content/uploads/2026/03/ci-2.svg" alt="External System Integrations" /> Do you need external system integrations?</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-2 fw-semibold" style="font-size:14px;color:var(--gray-600);">Do you need external system integrations?</p>
                                <div class="row g-3">
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card integration-card" data-value="no_integration">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">✅</span>
                                            <div class="option-label">No</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card integration-card" data-value="not_sure_integration">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🤔</span>
                                            <div class="option-label">Not Sure</div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 mb-3">
                                        <div class="option-card integration-card" data-value="yes_multiple">
                                            <div class="option-check"><i class="fa fa-check"></i></div>
                                            <span class="option-icon">🔌</span>
                                            <div class="option-label">Yes, Multiple</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ══ STEP 8 – Contact ══ -->
                            <div class="step-pane" data-step="8" data-type="contact">
                                <div class="row g-3 mb-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="fname">Full Name *</label>
                                        <input class="form-control" type="text" id="fname" name="fname" placeholder="John Smith" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="email">Work Email *</label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="john@company.com" />
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="phone">Phone Number *</label>
                                        <input class="form-control" type="tel" id="phone" name="phone" placeholder="+1 234 567 890" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="siteurl">
                                            Existing Website URL <span class="optional-tag">(optional)</span>
                                        </label>
                                        <input class="form-control" type="url" id="siteurl" name="siteurl" placeholder="https://www.yoursite.com" />
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label" for="notes">
                                        Anything else you'd like to share? <span class="optional-tag">(optional)</span>
                                    </label>
                                    <textarea class="form-control" id="notes" name="notes" rows="4"
                                        placeholder="Tell us about your project goals, timeline, or any specific requirements…"></textarea>
                                </div>
                                <div class="err-msg mt-2" id="err8">
                                    <i class="bi bi-exclamation-circle me-1"></i>Please fill all required fields.
                                </div>
                            </div>

                        </div><!-- /calcBody -->

                        <!-- NAVIGATION -->
                        <div id="calcNav" class="px-4 px-md-5 pb-4 d-flex align-items-center gap-2 flex-wrap">
                            <input type="hidden" name="websiteType" id="websiteType" />
                            <input type="hidden" name="pageCount" id="pageCount" />
                            <input type="hidden" name="industry" id="industry" />
                            <input type="hidden" name="features" id="features" />
                            <input type="hidden" name="traffic" id="traffic" />
                            <input type="hidden" name="design" id="design" />
                            <input type="hidden" name="compliance" id="compliance" />
                            <input type="hidden" name="integrations" id="integrations" />
                            <button type="button" class="btn-calc-back d-none" id="prevBtn">
                                <i class="fa fa-chevron-left mr-1"></i> Back
                            </button>
                            <div class="ml-auto">
                                <button type="button" class="btn-calc-next" id="nextBtn" name="submit">
                                    Continue <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div><!-- /calc-card -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </form>
</section>
<?php get_footer(); ?>