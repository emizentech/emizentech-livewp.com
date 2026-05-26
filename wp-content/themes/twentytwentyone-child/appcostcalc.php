<?php
         /**
         * Template Name: App Cost Calc Template
         */ 
    get_header();
         ?>

<style type="text/css">
   .hero-bg {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); /* violet-blue gradient */
}
.btn-light:hover {
    background-color: #f8f9fa;
    transform: scale(1.05);
} 
section input[type=checkbox], section input[type=radio] {
    width: 20px;
    height: 20px;
    position: relative;
    background: #fff;
    border: #28303d38 1px solid;
    top: -3px;
    vertical-align: middle;

}
section input[type=radio] {
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    margin: auto;
    height: 100%;
    z-index: -1;
}
section input[type=checkbox]:checked:focus,
section input[type=radio]:checked:focus {
    outline: none;
    outline-offset: 0;
}
 
section input[type=radio]:after {
    top: 2px;
    left: 2px;
    margin: 0;
    width: 9px;
    height: 9px;
    background: #000;
}

section input[type=checkbox]:after {
    content: "";
    opacity: 0;
    display: block;
    left: 5px;
    top: 1px;
    position: absolute;
    width: 7px;
    height: 12px;
    border: 2px solid #4f5258;
    border-top: 0;
    border-left: 0;
    transform: rotate(45deg);
}
section input[type=checkbox]:focus, section input[type=radio]:focus {
    outline: none;
}
h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
    letter-spacing: normal;
    font-weight: 600;
}
.container {
    max-width: 1600px;
    padding: 0 15px;
}
h2 {
    font-size: 36px;
}
.rounded {
    border-radius: 14px !important;
}
.bg-light {
    background-color: rgb(243 244 246) !important;
}
.btn-warning:hover {
    color: #212529;
    background-color: #0066cc;
    border-color: #0066cc;
}
.bg-primary {
    background-color: #0066cc !important;
}
.btn-light {
    transition: all .3s;
}
input[type=radio] {
    opacity: 0;
    width: 100%;
    position: absolute;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
    cursor: pointer;
}
@media(max-width: 1199px){
    .display-4 {
    font-size: 2.5rem;
    font-weight: 300;
    line-height: 1.2;
}
}
@media(max-width: 767px){
    .display-4 {
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.4;
}
p {
    font-size: 15px;
    line-height: 24px;
}
.h2, h2 {
    font-size: 1.3rem;
}
.h5, h5 {
    font-size: 1rem;
}
}
</style>

<!-- Hero Section -->
<div class="mt-4 d-inline-block w-100">

<section class="hero-bg py-5 mt-5 text-white text-center rounded-bottom shadow-lg">
    <div class="container py-md-4">
        <h1 class="display-4 font-weight-bold">
            App Cost Calculator – Estimate Your App Development Budget Instantly
        </h1>
        <p class="mt-3 text-white lead mx-auto font-weight-bold" style="max-width: 720px;">
            Get a detailed breakdown of development costs for mobile and web apps based on features, complexity, and platform.
        </p>
        <a href="#calculator" 
           class="btn btn-light btn-lg font-weight-semibold mt-4 px-4 py-2 shadow-lg scroll-to-calc"
           style="border-radius: 50px; transition: all 0.3s ease;">
            Start Estimating Now
        </a>
    </div>
</section>
<!-- Calculator Section -->
<section id="calculator" class="bg-white p-xl-5 p-lg-4 pt-4 pt-md-5 px-0">
    <div class="container">
      <div class="p-xl-5 p-md-4 p-3 shadow border border-light w-100 d-inline-block" style="    border-radius: 1.5rem;">
        <h2 class="h2 font-weight-bold text-center mb-lg-5 mb-md-4 mb-3 text-dark">
            How Our App Cost Calculator Works
        </h2>
        
        <!-- How It Works -->
        <div class="row text-center mb-lg-5 mb-md-4 mb-2">
            <div class="col-sm-6 col-lg-3 mb-4 d-flex">
                <div class="p-md-4 p-3 bg-light rounded w-100">
                    <div class="d-flex align-items-center justify-content-center rounded-circle bg-primary text-white mx-auto mb-3" style="width:50px; height:50px; font-weight:bold; font-size:1.2rem;">1</div>
                    <h3 class="h6 font-weight-bold text-dark letter-spacing-normal" style="letter-spacing: normal;">Choose Your Platform</h3>
                    <p class="m-0 display-5">iOS, Android, Web, or Hybrid</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 d-flex">
                <div class="p-md-4 p-3 bg-light rounded w-100">
                    <div class="d-flex align-items-center justify-content-center rounded-circle bg-primary text-white mx-auto mb-3" style="width:50px; height:50px; font-weight:bold; font-size:1.2rem;">2</div>
                    <h3 class="h6 font-weight-bold text-dark letter-spacing-normal" style="letter-spacing: normal;">Select App Type & Complexity</h3>
                    <p class="m-0 display-5">Simple, Medium, Complex</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 d-flex">
                <div class="p-md-4 p-3 bg-light rounded w-100">
                    <div class="d-flex align-items-center justify-content-center rounded-circle bg-primary text-white mx-auto mb-3" style="width:50px; height:50px; font-weight:bold; font-size:1.2rem;">3</div>
                    <h3 class="h6 font-weight-bold text-dark letter-spacing-normal" style="letter-spacing: normal;">Pick App Features</h3>
                    <p class="m-0 display-5">Login, Chat, Payments, Push Notifications</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 d-flex">
                <div class="p-md-4 p-3 bg-light rounded w-100">
                    <div class="d-flex align-items-center justify-content-center rounded-circle bg-primary text-white mx-auto mb-3" style="width:50px; height:50px; font-weight:bold; font-size:1.2rem;">4</div>
                    <h3 class="h6 font-weight-bold text-dark letter-spacing-normal" style="letter-spacing: normal;">Get Instant Cost & Timeline</h3>
                    <p class="m-0 display-5">See detailed estimates per team member</p>
                </div>
            </div>
        </div>

        <!-- Interactive Calculator Form -->
        <form id="cost-calculator-form">
            
            <!-- Step 1: Platform Selection -->
            <div class="mb-md-4">
                <h3 class="h5 font-weight-semibold text-dark mb-md-3">1. Choose Your Platform</h3>
                <div class="form-row">
                    <div class="col-6 col-md-3 mb-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="platform" value="iOS" required> iOS
                        </label>
                    </div>
                    <div class="col-6 col-md-3 mb-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="platform" value="Android"> Android
                        </label>
                    </div>
                    <div class="col-6 col-md-3 mb-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="platform" value="Web"> Web
                        </label>
                    </div>
                    <div class="col-6 col-md-3 mb-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="platform" value="Hybrid"> Hybrid
                        </label>
                    </div>
                </div>
            </div>

            <!-- Step 2: Complexity Selection -->
            <div class="mb-4">
                <h3 class="h5 font-weight-semibold text-dark mb-md-3">2. Select App Complexity</h3>
                <div class="form-row">
                    <div class="col-md-4 col-12 mb-md-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="complexity" value="Simple" required> Simple
                        </label>
                    </div>
                    <div class="col-md-4 col-12 mb-md-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="complexity" value="Medium"> Medium
                        </label>
                    </div>
                    <div class="col-md-4 col-12 mb-md-3 text-center">
                        <label class="w-100 px-3 py-md-3 py-2 bg-light rounded text-center border border-light">
                            <input type="radio" class="border border-dark" name="complexity" value="Complex"> Complex
                        </label>
                    </div>
                </div>
            </div>

            <!-- Step 3: Feature Selection -->
            <div class="mb-4">
                <h3 class="h5 font-weight-semibold text-dark mb-md-3">3. Pick App Features</h3>
                <div class="form-row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="Authentication"> Authentication
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="Payments"> Payments
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="Chat"> Chat
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="Push Notifications"> Push Notifications
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="AI Integration"> AI Integration 
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="Admin Panel"> Admin Panel
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="Maps/GPS"> Maps/GPS
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mb-3">
                        <label class="w-100 px-md-3 px-2 py-3 bg-light rounded h5">
                            <input type="checkbox" name="features" class="mr-1" value="User Profiles"> User Profiles
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-md-4 mt-3">
                <button type="submit" class="btn btn-warning  btn-lg px-5 text-white rounded-pill">Calculate Estimate
                </button>
            </div>
        </form>

        <!-- Estimated Cost Output Section -->
        <div id="estimate-output" class="d-none mt-5 p-md-4 p-3 bg-white rounded border shadow-sm">
            <h2 class="h3 font-weight-bold text-center mb-4 text-primary">Your App Development Cost Estimate</h2>
            
            <div class="text-center mb-4">
                <h3 class="h5 font-weight-bold text-dark">Total Estimated Cost</h3>
                <p class="display-5 font-weight-bold text-primary mt-2" id="total-cost">$X,XXX</p>
            </div>
            <div class="row">
            <div class="mb-3 col-sm-6 d-flex">
                <div class="border w-100 rounded p-3 text-center">
                <h3 class="h6 font-weight-bold text-dark letter-spacing-normal" style="letter-spacing: normal;">Cost Breakdown</h3>
                <ul class="pl-0 text-muted" id="cost-breakdown">
                    <!-- Breakdown injected via JS -->
                </ul>
            </div>
            </div>

            <div class="mb-3 col-sm-6 d-flex">
                <div class="w-100 border rounded p-3 text-center">
                <h3 class="h6 font-weight-bold text-dark letter-spacing-normal" style="letter-spacing: normal;">Estimated Timeline</h3>
                <p class="text-muted" id="timeline">X – Y weeks</p>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
</div>
<!-- Features That Affect App Cost -->
<section class="mt-lg-5 mt-4">
  <div class="container">
    <h2 class="text-center font-weight-bold mb-4">Key Features That Affect App Development Costs</h2>
    <p class="text-center mb-lg-5 mb-md-4 mb-2 mx-auto" style="max-width: 720px;">
      The cost of your app depends on the features, platform, and team required. Selecting the right features ensures accurate cost and timeline estimates.
    </p>
    <div class="row">
      <div class="d-flex col-md-4 mb-4">
        <div class=" w-100 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h5 font-weight-bold">Platform & Device</h3>
          <p class="text-muted mt-md-2 p-0">iOS, Android, Web</p>
        </div>
      </div>
      <div class="d-flex col-md-4 mb-4">
        <div class=" w-100 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h5 font-weight-bold">App Features</h3>
          <p class="text-muted mt-md-2 p-0">Authentication, Payments, Chat, Push Notifications, Social Login</p>
        </div>
      </div>
      <div class="d-flex col-md-4 mb-4">
        <div class=" w-100 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h5 font-weight-bold">Design Complexity</h3>
          <p class="text-muted mt-md-2 p-0">UI/UX design, custom animations</p>
        </div>
      </div>
      <div class="d-flex col-md-4 mb-4">
        <div class=" w-100 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h5 font-weight-bold">Team Roles</h3>
          <p class="text-muted mt-md-2 p-0">Developers, Designers, Project Managers</p>
        </div>
      </div>
      <div class="d-flex col-md-4 mb-4">
        <div class=" w-100 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h5 font-weight-bold">Additional Costs</h3>
          <p class="text-muted mt-md-2 p-0">Third-party integrations, APIs, cloud hosting</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Use Our Calculator -->
<section class="mt-1">
  <div class="container">
  <div class="mt-xl-5 mt-md-4 mt-0 py-lg-5 py-md-4 py-3 px-md-4 px-3" style="background: rgb(245 243 255 / 1);border-radius: 20px;">
    <h2 class="text-center font-weight-bold mb-md-4">Why Choose Our App Cost Calculator</h2>
    <p class="text-center mb-lg-5 mb-md-4 mb-2 mx-auto" style="max-width: 720px;">
      Our calculator is designed to help startups and businesses plan budgets efficiently. You’ll get a clear, feature-based estimate without the guesswork.
    </p>
    <div class="row text-center">
      <div class="col-md-6 col-lg-4 d-flex mb-3 mb-lg-0">
        <div class="p-lg-4 p-md-3 p-2 bg-white w-100 shadow-sm" style="border-radius: 20px">
          <h3 class="h5 font-weight-bold">Accurate & Transparent Estimates</h3>
          <p class="text-muted">Based on real industry rates</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex mb-3 mb-lg-0">
        <div class="p-lg-4 p-md-3 p-2 bg-white w-100 shadow-sm" style="border-radius: 20px">
          <h3 class="h5 font-weight-bold">Save Time & Effort</h3>
          <p class="text-muted">No manual calculations needed</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex mb-3 mb-lg-0">
        <div class="p-lg-4 p-md-3 p-2 bg-white w-100 shadow-sm" style="border-radius: 20px">
          <h3 class="h5 font-weight-bold">Tailored for Startups & Enterprises</h3>
          <p class="text-muted">Flexible and customizable</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="mt-lg-5 mt-md-4 mt-3">
  <div class="container">
    <h2 class="text-center font-weight-bold mb-lg-5 mb-md-4 mb-3">Frequently Asked Questions About App Development Costs</h2>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="mb-md-4 mb-3 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h6 font-weight-bold">What factors affect app development cost?</h3>
          <p class="text-muted">The primary factors are platform (iOS, Android, Web), complexity, features (e.g., authentication, payments), design, and team roles (developers, designers, project managers).</p>
        </div>
        <div class="mb-md-4 mb-3 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h6 font-weight-bold">How long does it take to build an app?</h3>
          <p class="text-muted">The timeline varies significantly based on complexity. A simple app can take 4-8 weeks, a medium-complexity app can take 8-16 weeks, and a complex app can take 16 weeks or more.</p>
        </div>
        <div class="mb-md-4 mb-3 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h6 font-weight-bold">Can I adjust the cost based on team rates?</h3>
          <p class="text-muted">Our calculator provides a standard estimate, but final costs depend on the specific rates of your development team, which can vary by location and experience.</p>
        </div>
        <div class="mb-md-4 mb-3 p-md-4 p-3 bg-white shadow-sm border" style="border-radius:20px">
          <h3 class="h6 font-weight-bold">Is this calculator suitable for web apps as well?</h3>
          <p class="text-muted">Yes, our calculator is designed to provide estimates for mobile apps (iOS, Android) as well as web applications.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA / Contact Section -->
<section class="mt-lg-5 mt-0">
  <div class="container">
    <div class="text-center p-lg-5 p-md-4 p-4 bg-dark text-white shadow" style="    border-radius: 25px !important;">
      <h2 class="font-weight-bold mb-lg-3">Need a Custom Quote?</h2>
      <p class="mb-4 mx-auto" style="max-width: 720px;">
        If your project has unique requirements, our team can provide a personalized quote based on your specifications.
      </p>
      <a href="https://emizentech.com/enquiry.html" class="btn btn-light btn-lg mb-3 mb-md-0 rounded-pill font-weight-bold">
        Start Estimating Now
      </a>
    </div>
  </div>
</section>

<!-- Blog / Educational Links Section -->
<section class="py-lg-5 py-4">
  <div class="container">
    <h2 class="text-center font-weight-bold mb-4">Learn More About App Development Costs</h2>
    <div class="row justify-content-center mt-4">
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <a href="https://emizentech.com/blog/mobile-app-development-cost.html" class="d-block p-lg-4 p-3 bg-white shadow-sm text-dark text-decoration-none hover-shadow" style="border-radius:25px">
          <h3 class="h5 pb-0 font-weight-bold">How to Budget Your Mobile App Development</h3>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <a href="https://emizentech.com/blog/how-to-reduce-app-development-cost.html" class="d-block p-lg-4 p-3 bg-white shadow-sm text-dark text-decoration-none hover-shadow" style="border-radius:25px">
          <h3 class="h5 pb-0 font-weight-bold">How to Reduce Mobile App Development Cost?</h3>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mb-4">
        <a href="#" class="d-block p-lg-4 p-3 bg-white shadow-sm text-dark text-decoration-none hover-shadow" style="border-radius:25px">
          <h3 class="h5 pb-0 font-weight-bold">Average Costs for iOS vs Android Apps</h3>
        </a>
      </div>
    </div>
  </div>
</section>

</div>



<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('cost-calculator-form');
    const output = document.getElementById('estimate-output');
    const totalCostEl = document.getElementById('total-cost');
    const costBreakdownEl = document.getElementById('cost-breakdown');
    const timelineEl = document.getElementById('timeline');

    // Function to handle styling of selections
    const updateSelectionStyle = (inputs) => {
        inputs.forEach(input => {
            const parent = input.closest('label') || input.closest('.p-3'); // radio inside label / checkbox inside div
            if (parent) {
                if (input.checked) {
                    parent.classList.remove('bg-light');
                    parent.classList.add('bg-primary', 'text-white');
                } else {
                    parent.classList.remove('bg-primary', 'text-white');
                    parent.classList.add('bg-light');
                }
            }
        });
    };

    // Attach listeners for radios & checkboxes
    const platformInputs = form.querySelectorAll('input[name="platform"]');
    platformInputs.forEach(input => {
        input.addEventListener('change', () => updateSelectionStyle(platformInputs));
    });

    const complexityInputs = form.querySelectorAll('input[name="complexity"]');
    complexityInputs.forEach(input => {
        input.addEventListener('change', () => updateSelectionStyle(complexityInputs));
    });

    const featureInputs = form.querySelectorAll('input[name="features"]');
    featureInputs.forEach(input => {
        input.addEventListener('change', () => updateSelectionStyle(featureInputs));
    });

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        // Define cost and timeline data
        const baseCosts = {
            'Simple': { min: 10000, max: 25000, timelineMin: 4, timelineMax: 8 },
            'Medium': { min: 25000, max: 50000, timelineMin: 8, timelineMax: 16 },
            'Complex': { min: 50000, max: 100000, timelineMin: 16, timelineMax: 24 }
        };

        const platformMultipliers = {
            'iOS': 1.1,
            'Android': 1.1,
            'Web': 1.0,
            'Hybrid': 0.9
        };

        const featureCosts = {
            'Authentication': 2000,
            'Payments': 4000,
            'Chat': 5000,
            'Push Notifications': 1500,
            'AI Integration': 1000,
            'Admin Panel': 3000,
            'Maps/GPS': 2500,
            'User Profiles': 1500
        };

        // Get form values
        const platform = form.querySelector('input[name="platform"]:checked').value;
        const complexity = form.querySelector('input[name="complexity"]:checked').value;
        const selectedFeatures = Array.from(form.querySelectorAll('input[name="features"]:checked')).map(el => el.value);

        // Calculate total cost and timeline
        let totalMinCost = baseCosts[complexity].min;
        let totalMaxCost = baseCosts[complexity].max;
        let totalTimelineMin = baseCosts[complexity].timelineMin;
        let totalTimelineMax = baseCosts[complexity].timelineMax;

        selectedFeatures.forEach(feature => {
            totalMinCost += featureCosts[feature];
            totalMaxCost += featureCosts[feature];
            // Simple timeline increase per feature
            totalTimelineMin += 1;
            totalTimelineMax += 2;
        });

        // Apply platform multiplier
        totalMinCost *= platformMultipliers[platform];
        totalMaxCost *= platformMultipliers[platform];

        // Update output
        totalCostEl.textContent = `$${totalMinCost.toLocaleString()} – $${totalMaxCost.toLocaleString()}`;
        timelineEl.textContent = `${totalTimelineMin} – ${totalTimelineMax} weeks`;

        // Generate breakdown
        costBreakdownEl.innerHTML = '';
        const totalCost = (totalMinCost + totalMaxCost) / 2; // Use an average for breakdown
        costBreakdownEl.innerHTML += `<li>Developers: $${(totalCost * 0.60).toLocaleString()}</li>`;
        costBreakdownEl.innerHTML += `<li>Designers: $${(totalCost * 0.25).toLocaleString()}</li>`;
        costBreakdownEl.innerHTML += `<li>Project Managers: $${(totalCost * 0.15).toLocaleString()}</li>`;

        output.classList.remove('d-none'); // Bootstrap uses d-none
        output.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>


<?php get_footer(); ?>         
