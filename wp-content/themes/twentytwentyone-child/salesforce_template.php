<?php
   /**
   * Template Name: salesforce page Template
   */
   ?>
<!DOCTYPE html>
<html>
   <head>
      <?php  wp_head(); ?>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="/wp-content/themes/twentytwentyone-child/assets/css/font-awesome.min.css?123456" rel="stylesheet" type="text/css" media="all" />
      <link href="/wp-content/themes/twentytwentyone-child/assets/css/bootstrap.min.css?123456" rel="stylesheet" type="text/css" media="all" />
      <link href="/wp-content/themes/twentytwentyone-child/assets/css/styles.css?123456" rel="stylesheet" type="text/css" media="all" />
      <link href="/wp-content/themes/twentytwentyone-child/assets/css/pages/salesforce_tem.css?123456" rel="stylesheet" type="text/css" media="all" />
      <link href="/wp-content/themes/twentytwentyone-child/assets/css/responsive.css?123456" rel="stylesheet" type="text/css" media="all" />
      <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/twentytwentyone-child/assets/images/favicon.ico" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Remember to include jQuery :) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <!-- jQuery Modal -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
      
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-WQB2Z8D');
      </script>
      <!-- End Google Tag Manager -->
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQB2Z8D"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <header class="py-0">
         <nav class="navbar navbar-expand-lg navbar-light bg-light py-lg-0">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="/wp-content/themes/twentytwentyone-child/assets/images/emizentech-210w.png" alt="" /> </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto d-flex align-items-start align-items-lg-center main-navigation">
                     <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#partners">Partners</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#fAQ">FAQ</a>
                     </li>
                  </ul>
                  <li class="nav-item">
                     <a href="#sopify_popup" rel="modal:open" class="header-btn"> <span class="sprites-image"></span><span>Enquire Now</span> </a>
                  </li>
               </div>
            </div>
         </nav>
      </header>
      <section class="emizen-saleforce mb-5" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h1>360° Salesforce Solutions By Salesforce Certified Consulting Partner!</h1>
                  <p>Top Salesforce Development Company, Emizentech, helps startups, organizations, and brands develop, customize, and integrate mobile applications with Salesforce-based applications and other CRM solutions.</p>
                  <ul>
                     <li class="pb-4">
                        <strong class="d-block">Competitive Pricing</strong>
                        We deliver the best quality as expected at a reasonable price to our clients, leaving them satisfied with our services.
                     </li>
                     <li class="pb-4">
                        <strong class="d-block">11+ Years of Experience </strong>
                        We started in 2013 and extended our roots in USA, India, and UK.
                     </li>
                     <li class="pb-4">
                        <strong class="d-block">75+ Salesforce Projects Completed</strong>
                        We love meeting our client's expectations and business needs; feedback from our clients will say it all.
                     </li>
                     <li class="pb-4">
                        <strong class="d-block">CMMI DEV/3 Development Centres</strong>
                        We adhere to CMMI documented processes to ensure top-quality and reliability.
                     </li>
                     <!-- <li>
                        <strong class="d-block">Fully Salesforce Certified Team</strong>
                        Our in-house Salesforce team is certified and highly experience.
                        </li> -->
                  </ul>
               </div>
               <div class="col-md-5">
                  <div class="form-inner">
                     <div class="form-header">
                        <h2 class="font-weight-bold">Team of Experienced Salesforce Developers</h2>
                        <p>We hold a team of certified Salesforce developers with 11+ years of experience accomplishing Salesforce projects.</p>
                     </div>
                     <?php echo do_shortcode('[lead_service_form_widget]'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="emizen-saleforce-services bg-light pt-4">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h2 class="font-weight-bold">Our Salesforce Certificates</h2>
               </div>
               <div class="col-6 col-md-3">
                  <img src="/wp-content/uploads/2022/12/ceritficate1.png" class="d-block mx-auto d-md-linline-block" alt="" class="img-fluid">
               </div>
               <div class="col-6 col-md-3">
                  <img src="/wp-content/uploads/2022/12/ceritficate2.png" class="d-block mx-auto d-md-linline-block" alt="" class="img-fluid">
               </div>
               <div class="col-6 col-md-3">
                  <img src="/wp-content/uploads/2022/12/ceritficate3.png" class="d-block mx-auto d-md-linline-block" alt="" class="img-fluid">
               </div>
               <div class="col-6 col-md-3">
                  <img src="/wp-content/uploads/2022/12/ceritficate4.png" class="d-block mx-auto d-md-linline-block" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </section>
      <section class="emizen-saleforce-services mt-5" id="services">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12">
                  <h2 class="font-weight-bold pb-5">Salesforce Services We Offer</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="services-col-top pb-3">
                     <h4>Salesforce Consulting</h4>
                     <p>Emizentech delivers guaranteed success. Our Certified Salesforce Consultants strengthen businesses to improve systems that save money and time and make smart technology investments.</p>
                  </div>
                  <div class="services-col-top pb-3">
                     <h4>Salesforce Customisation</h4>
                     <p>We offer Salesforce customization applications that help improve our clients' businesses' overall internal and external processes and cover the critical problems missed with standard CRM applications. </p>
                  </div>
                  <div class="services-col-top pb-3">
                     <h4>Salesforce Integration</h4>
                     <p>We offer reliable, secure, scalable, and seamless integration of Salesforce with your organization’s applications. Apart from that, we craft web services in Salesforce that assist the third-party app in exchanging details with Salesforce. </p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <img src="/wp-content/uploads/2022/12/salesforce-offer.png" alt="" class="img-fluid">
               </div>
               <div class="col-lg-4">
                  <div class="services-col-top pb-3">
                     <h4>Salesforce Migration</h4>
                     <p>In this Salesforce migration service, any module, any CRM platform, and the add-on will be migrated by our expert Salesforce developers to the ever-classic Salesforce CRM platform. Our Salesforce automated migration service is a good way to move data swiftly.</p>
                  </div>
                  <div class="services-col-top pb-3">
                     <h4>Salesforce Support</h4>
                     <p>A team of dedicated Salesforce developers, along with business analysts and administrators at Emizentech, are all set to make your Salesforce solution stable and assure its fast emergence. </p>
                  </div>
                  <div class="services-col-top pb-3">
                     <h4>Mobile App Development</h4>
                     <p>Leveraging Salesforce, we hold the caliber to craft mobile apps rapidly with a unique link of code-driven tools and metadata and allow our clients to employ the right tool for the apt task. </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="emizen-saleforce-Administrator pt-4 pb-4">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-12 col-lg-9 mx-auto  text-center">
                  <h2 class="font-weight-bold  border-0">Hire Salesforce Administrator Now!</h2>
                  <p class="">Our Certified Salesforce Team have +11 years of experience and also Multiple Certifications that validate their knowledge.
                     Get dream-team outcomes, without the hassles of hiring.
                  </p>
                  <div class="mt-4 d-block mb-3"><a href="#sopify_popup" rel="modal:open">Get in touch</a></div>
               </div>
            </div>
         </div>
      </section>
      <section class="emizen-saleforce-Value">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center">
                  <h2 class="font-weight-bold ">How Can Salesforce Benefit Your Organization?</h2>
                  <p>Salesforce has offered users a broad range of service-oriented apps and clouds. Let's know how Emizentech can bring value to your firm with proficiency in the below Salesforce products:</p>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Sales Cloud</h4>
                     <p class="font-18 text-left">We offer Salesforce Sales cloud services to our clients that lead to In-line intelligence with time-tested practices, monitor all sales processes at a single platform, and enhance efficiency successfully.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Service Cloud</h4>
                     <p class="font-18 text-left">Stand apart from your competition by developing long-lasting relationships with your customers using Salesforce service cloud products. You can deliver customized service experiences to customers and dwindle the gap between your organization and its potential customers.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Marketing Cloud</h4>
                     <p class="font-18 text-left">Salesforce Marketing Cloud lets you keep meticulous track of your customers’ journey management by personalizing (creating + managing) all marketing campaigns. It strengthens the predictive analysis to make accurate decisions, seamless marketing campaign automation and rapidly transfers marketing reports.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Community Cloud</h4>
                     <p class="font-18 text-left">Now, you can eliminate the communication gap between your customers, workers, and business partners by allowing them to interact with Salesforce community cloud services on one platform. Customers can have transparent and uninterrupted communication between hierarchies that will simplify and amplify your business processes.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Health Cloud</h4>
                     <p class="font-18 text-left">A CRM platform customized particularly for the healthcare industry, Salesforce Health Cloud offers a comprehensive view of the customers, intelligent care management, and collaborative experiences. You can use it for your upcoming Salesforce healthcare project. </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Commerce Cloud	</h4>
                     <p class="font-18 text-left">It’s highly scalable and is a cloud-based software-as-a-service (SaaS) eCommerce solution. Also, Salesforce Commerce Cloud provides best-in-class functionality and features crafted and refined for many years to proffer a highly optimized eCommerce experience. We pick the solution for our clients that meet their business goals perfectly.</p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4 d-flex mb-4">
                  <div class="bg-light-box">
                     <h4>Salesforce Interaction	</h4>
                     <p class="font-18 text-left">Salesforce Interaction Studio tracks data from multiple sources to gather information about every customer, prospect, and website visitor. By tracking customer behaviors, and through data from a wide variety of sources, you can start to get to know each individual customer's interests and affinities.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="emizen-partnerships" id="partners">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="border-btm">
                     <h2 class="font-weight-bold text-center">We Are Very Proud Of Our Partnerships And Awards</h2>
                  </div>
                  <div class="col-md-12">
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award1.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award2.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award3.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award4.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award5.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award6.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award7.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award8.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award9.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                     <div class="emizen-awards">
                        <img src="/wp-content/uploads/2022/12/award10.png" width="234" height="90" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="emizen-testimonial-client py-4" id="testimonials" >
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h2 class="font-weight-bold text-center">See What Our Happy Customers Are Saying...</h2>
               </div>
               <div class="col-md-4 mb-4">
                  <div class="bgfasfd">
                     <p>Working with Emizentech was a fabulous experience. One of the best things that I would appreciate in their process is the free consultation session in the beginning. The session helped me clear all my doubts regarding the project and know more about the industry I was keen to enter. </p>
                     <div class="testimonial-content">
                        <h4>Dr. Babak Moein</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-4">
                  <div class="bgfasfd">
                     <p>Choosing Emizentech for project delivery is like getting all the solutions under one roof. They have teams of experienced developers who carry the caliber to work with different techniques. The suggestions provided by the team during the project helped me enhance the functionality of my product.  </p>
                     <div class="testimonial-content">
                        <h4>Niklas W.</h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mb-4">
                  <div class="bgfasfd">
                     <p>The factor that I experienced during the project and which deserves the remark from my side is their strategy of balancing the budget and quality. They make sure to keep the budget in control, but at the same time, they also never compromise the quality of the project. </p>
                     <div class="testimonial-content">
                        <h4>Ryan H.</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sf_cta_seciton mt-5">
	    <div class="container">
	        <div class="sf_cta">
	            <p>Get A Certified, Experienced, And Cost-effective Salesforce Expert For Your Business!</p>
	            <a href="#sopify_popup" rel="modal:open">Request A Free Quote</a>
	        </div>
	    </div>
	</section>
      <section class="emizentech-faq mt-5" id="fAQ">
         <div class="container">
            <div class="section-title">
               <h2><span>FAQs</span></h2>
               <p>Check Our Additional Information About Salesforce Services.</p>
            </div>
            <div class="faq-wrap">
               <div id="accordion">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
                        Why shoud you work with Emizentech as your Salesforce Development Company?
                        </button>
                     </div>
                     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                           <p>The happiness of our clients is the most important thing to us at Emizentech. We are a highly competent team of Salesforce specialists and certified developers who offer cost-effective Salesforce development services with a 100% client satisfaction rate. For all of your Salesforce needs, Emizentech is the appropriate partner.</p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingTwo">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
                        Which is the best tool to develop Custom Salesforce Application?
                        </button>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                           <p> Heroku and pipeline are commonly used by companies that specialize in salesforce development. It provides a pre-built backdrop with GitHub and streamlines the application development process. <br />Additionally, the pipeline tool is used by Salesforce-certified developers all over the world for easy deployment to many production environments and easy staging.</p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">
                        How Pardot assists our marketing team in crafting marketing campaigns?
                        </button>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                           <p>Salesforce Pardot is the only stop for all marketing, aiding you to attract a mature pipeline and more leads. Craft and launch alluring digital campaigns in only a few clicks. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingFour">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">
                        Which programming languages are used to develop Salesforce applications?
                        </button>
                     </div>
                     <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                           <p>Salesforce development companies use a range of languages based on the business needs and allotted budget to build Salesforce platforms and interfaces. Some of the preferred Salesforce development languages include Apex, Visualforce, HTML, and JavaScript.</p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingFive">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">
                        What challenges do small companies encounter while implementing Salesforce?
                        </button>
                     </div>
                     <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                           <p> Leveraging the power of this incredibly strong platform – Salesforce, is not always easy. Many businesses face major challenges that prevent them from fully utilizing Salesforce's capabilities. Some of the most usual challenges faced by small companies while taking Salesforce consulting services are.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="pt-3">
         <div class="footer-copyright">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-8">
                     <p>
                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/star.png" alt="Star" width="21" height="22" />
                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/star.png" alt="Star" width="21" height="22" />
                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/star.png" alt="Star" width="21" height="22" />
                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/star.png" alt="Star" width="21" height="22" />
                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/star.png" alt="Star" width="21" height="22" /> Overall client rating is 4.9 out of 250 Clients for Emizentech
                     </p>
                     <h6>
                        Copyright © 2013 - 2025 - Emizentech . All Rights Reserved. <a href="JavaScript:void(0)">Refund Policy</a> | <a href="privacy-policy.html">Privacy Policy</a>
                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/protect.png" alt="Protect" width="96" height="16" />
                     </h6>
                  </div>
                  <div class="col-lg-4 text-lg-right">
                     <div class="emizentech-social">
                        <a class="d-flex align-items-center justify-content-center float-left" href="https://www.facebook.com/EmizenTech/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="d-flex align-items-center justify-content-center float-left" href="http://www.linkedin.com/company/emizen-tech" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a class="d-flex align-items-center justify-content-center float-left" href="https://www.instagram.com/emizentech/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="d-flex align-items-center justify-content-center float-left" href="https://twitter.com/EmizenTech" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
        <!-- Modal HTML embedded directly into document -->
        <div id="sopify_popup" class="modal h-auto sopify_popup">
            <div class="Shopify_form">
                <h3>Connect With Our Salesforce Experts</h3>
               <?php echo do_shortcode('[lead_service_form_widget]'); ?>
            </div>
        </div>
     <script type="text/javascript">
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
     
	
      <?php wp_footer(); ?>
   </body>
</html>
