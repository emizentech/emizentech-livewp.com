<?php
/**
* Template Name: Portfolio Template
*/
 get_header(); ?>
        <section class="portfolio-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
        </section>

    
        <!-- Portfolio Tabs -->
        <section class="portfolio-tabs">
            <div class="container">
                <ul class="nav nav-tabs row" id="myTab" role="tablist">
                    <li class="nav-item col-lg-4">
                        <a class="nav-link active" id="mobile-app-tab" onclick="scrollmobileapp()" data-toggle="tab" href="#mobile-app"  role="tab" aria-controls="mobile-app" aria-selected="true">
                            <span class="tab-image"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/mobile-tab-icon.png" alt="Mobile" /></span>
                            <span class="tab-image-info">
                                <span class="tab-title">Mobile Application</span>
                                <span class="tab-subtitle">Mobile app</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item col-lg-4">
                        <a class="nav-link" id="web-tab" onclick="scrollweb()" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">
                            <span class="tab-image"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/web-tab-icon.png" alt="Mobile" /></span>
                            <span class="tab-image-info">
                                <span class="tab-title">Ecommerce</span>
                                <span class="tab-subtitle">Web </span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item col-lg-4">
                        <a class="nav-link" id="other-tab" onclick="scrollother()" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">
                            <span class="tab-image"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/cart-new.png" alt="Mobile" /></span>
                            <span class="tab-image-info">
                                <span class="tab-title">Other</span>
                                <span class="tab-subtitle">eCommerce Web</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Emizentech App -->
        <div class="tab-content" id="myTabContent">
          <!-- mobile-app -->
            <div class="tab-pane fade show active" id="mobile-app" role="tabpanel" aria-labelledby="mobile-app-tab">
                <div class="emizentech-app-portfolio" id="mobile-apps">
                    <div class="container">
                        <button type="button" class="btn btn-info collapsed toggle-btn" data-toggle="collapse" data-target="#demo" aria-expanded="false">
                            Industries Automotive
                            <span class="icon float-right">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>
                        <div id="demo" class="collapse" style="">
                            <ul class="nav nav-tabs nav-pills nav-fill" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="OnDemand-tab" data-toggle="tab" href="#OnDemand" role="tab" aria-controls="OnDemand" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/ondemad.png" alt="ondemad.png" />
                                        <span>On Demand Services</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Dating-tab" data-toggle="tab" href="#dating" role="tab" aria-controls="Dating" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/dating.png" alt="Dating" />
                                        <span>Dating App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Food-Grocery-tab" data-toggle="tab" href="#food_grocery" role="tab" aria-controls="Food-Grocery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/delivery.png" alt="Delivery" />
                                        <span>Food &amp; Grocery</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="RealEstate-tab" data-toggle="tab" href="#RealEstate" role="tab" aria-controls="RealEstate" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/real-estate.png" alt="Real Estate" />
                                        <span>Real Estate</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Automotive-tab" data-toggle="tab" href="#automotive" role="tab" aria-controls="Automotive" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/automotive.png" alt="Automotive" />
                                        <span>Automotive</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="healthcare-tab" data-toggle="tab" href="#healthcare" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/healthcare.png" alt="Health" />
                                        <span>Health &amp; Fitness</span>
                                    </a>
                                </li>

                                <!-- Added new  -->

                                <li class="nav-item">
                                    <a class="nav-link" id="Travel-tab" data-toggle="tab" href="#Travel" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/travel.png" alt="Travel &amp; Hospitality" />
                                        <span>Travel &amp; Hospitality</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Banking-tab" data-toggle="tab" href="#Banking" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/finance.png" alt="Banking &amp; Finance" />
                                        <span>Banking &amp; Finance</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="eLearning-tab" data-toggle="tab" href="#eLearning" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/eLearning-Educating.png" alt="eLearning Educating" />
                                        <span>eLearning Educating</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Logistic-tab" data-toggle="tab" href="#Logistic" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/Logistic-Transport.png" alt="Logistic" />
                                        <span>Logistic &amp; Transport</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Media-tab" data-toggle="tab" href="#Media" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/Media.png" alt="Health" />
                                        <span>Media &amp; Entertainment</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Ecommerce-tab" data-toggle="tab" href="#Ecommerce" role="tab" aria-controls="delivery" aria-selected="false">
                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/ecommerce.png" alt="Ecommerce" />
                                        <span>Ecommerce &amp; Retails</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Colour Pops Beauty & Cosmetics -->
                        <div class="tab-pane fade show active" id="OnDemand" role="tabpanel" aria-labelledby="OnDemand-tab">
                            <!-- Caripa:  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 ">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Caripa-main.png);background-size: auto;background-position: left;">
                                            <div style="right: 0;" class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Caripa-app.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Caripa: Sell Your Car Today! Completely Anonymous </h2>
                                                <h3>A Car Selling App</h3>
                                                <p>You can sell your car with this app quickly, where the local dealers compete to buy the vehicle. The sellers need to follow a few easy steps and sell their car at the best price. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/caripa-sell-your-car-today/id1476273908">
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.caripa.seller" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Laundry Near Me -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Laundry_main.png); background-position: right;">
                                            <div class="app-device"style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Laundry_overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Laundry Near Me</h2>
                                                <!-- <h3>A Plumbing Service App</h3> -->
                                                <p>This app connects the app users with various laundry service providers for getting their laundry done at their ease. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                   <a target="_blank" rel="noreferrer noopener nofollow noindex" href="https://apps.apple.com/ph/app/laundry-near-me/id1556673260"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.LaundryNearMe.Customer" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Buy Now Cars -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/cp-main.png);background-size:auto;background-position: left;">
                                            <div class="app-device" style=""><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/cp-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Colour Pops Beauty & Cosmetics</h2>
                                                <h3>An Online Cosmetic Shopping App</h3>
                                                <p>This app allows users to shop various cosmetic items at amazing discounts and the best quality. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/th/app/colourpop-cosmetics/id1585524033" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.colourpop.cosmetics.app" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Smart Parking -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg18.jpg); background-position: right;" >
                                            <div class="app-device" style="left: -105px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/smart-parking-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Smart Parking</h2>
                                                <p>The Smart Parking app helps you find a place to park using live information from the Smart Parking sensor system that has been installed into parking spaces around the city.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                   
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/smart-parking-s3/id1297829489" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=io.smartsys.master" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tower Cabs Plymouth -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/tcp-main.png);background-size: auto;background-position: left;">
                                            <div class="app-device" style=""><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/tcp-app.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Tower Cabs Plymouth</h2>
                                                <h3>A Cabs Booking App</h3>
                                                <p>This app allows you to order a taxi, cancel your booking, track your booked vehicle, get real-time notifications, and quickly pay by card or cash. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/bg/app/tower-cabs-plymouth/id1576667738" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.towercabsplymouth.plymouth" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- TC Cars:  -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/tc-cars-main.png); background-position: right;">
                                            <div class="app-device" style="bottom: 0;transform: translate(0);top: auto;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/tc-cars-app.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>TC Cars</h2>
                                                <h3>A Car Booking App</h3>
                                                <p>You just need to follow a few simple steps and get a car at your doorstep. After reaching the destination, you can pay quickly via Cash, Card or even try contactless payment.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                 <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/gb/app/t-c-cars/id635258357" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.autocab.taxibooker.tccars.birmingham" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- MyCuts -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/groomin-main.png);background-position: left;">
                                            <div class="app-device" style=""><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/my-cuts-app.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>MyCuts - Salon Booking App</h2>
                                                <h3>MyCuts - Salon Booking App</h3>
                                                <p>MyCuts is an online service platform to find the nearest best Salon, Spa or Beauty Parlor and book it from anywhere-anytime. MyCuts connects the Shops and the Customers for an excellent grooming experience.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                     <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/mycuts-salon-booking-app/id1071175991" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.mycutsapp&hl=en_US&gl=US" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- IPlumber -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/IPlumber.png); background-size:contain;background-position: right;">
                                            <div class="app-device" style="left: 0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/ipmobile.jpg" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>IPlumber</h2>
                                                <h3>A Plumbing Service App</h3>
                                                <p> This app is crafted to allow DIYers and consumers to connect with certified and licensed professionals to get advice and guidance for every type of plumbing project and repair. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/iplumber-app/id1460799480" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.iplumber.app" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SPA -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/SPA-main.png);background-size:auto;background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/SPA-overlay.png" alt="SPA-overlay" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Secret Spa</h2>
                                                <h3>Secret Spa at home</h3>
                                                <p>It connects the app users with the best professionals of beauty and wellness and allows them to book various services like massage, manicure, pedicure, etc.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/secret-spa/id1000723800" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.secretspa.secretspaproapp&hl=en_US&gl=US" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ghaseel -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg16.jpg); background-position: right;">
                                            <div class="app-device" style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device16.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Ghaseel</h2>
                                                <h3>Ghaseel Car Wash</h3>
                                                <p>Get your car washed anytime and anywhere with Ghaseel. We are the first app for car wash services in Kuwait.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/app/ghaseel-ghsyl/id1052534178" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /> </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.ghaseel.ghaseel2" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Buy Now Cars -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/buycar-mian.png);background-size: auto;background-position: left;">
                                            <div class="app-device" style=""><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/buycar-app.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Buy Now Cars</h2>
                                                <h3>A Car Auctions App</h3>
                                                <p>This app facilitates the sales of cars between the sellers and buyers. You just need to list your car, and this app will submit bids as buyers and sellers for your car.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                     <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/buy-now-cars-%D8%A7%D9%84%D8%A8%D9%8A%D8%B9-%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D8%B4%D8%B1/id1516036181" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.buynowcarauctions.android " ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <!-- dating app Tab-->
                        <div class="tab-pane fade" id="dating" role="tabpanel" aria-labelledby="dating-tab">
                            <!-- Single Mingle -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right;">
                                            <div class="app-device" style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device1.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Single Mingle</h2>
                                                <h3>Singles Mingle Online dating app is a chat app similar to any other chat dating app</h3>
                                                <p>Singles Mingle Online dating app is a chat app, similar to any other chat dating app where you can meet girls &amp; guys and unlimited chatting with them</p>
                                                <div class="store-btn">
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/single-to-mingle-dating-app/id883927096"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.ucc.SingleToMingle&hl=en_US&gl=US" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EZMatch -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg2.jpg);background-position:left;">
                                            <div class="app-device" style="right:0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device2.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>EZMatch</h2>
                                                <h3>EZMatch - Dating, Make Friends and Meet New People</h3>
                                                <p>Are you lonely? Whether you want to date, make new friends or just to chat - lots of the right people for you are waiting on EZMatch.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/ezmatch-18-dating-chat-app/id1471508186" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.mobidev.vietnamdatingappandroid" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hook -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg3.jpg); background-position:right;">
                                            <div class="app-device" style="left: -70px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device3.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Hook</h2>
                                                <h3>Hook: Hookup Dating App for Seeking Mature Singles</h3>
                                                <p>Hook is a new hook up dating app for mature singles and couples looking for match, flirt chat and quick meetup.</p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=app.hook.dating" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hookup Dating App -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg4.jpg);background-position: left;">
                                            <div class="app-device" style="right: -70px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device4.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>FWB Hookup Dating App</h2>
                                                <h3>Age Gap Dating App</h3>
                                                <p>It is a safe app to find an FWB hookup or NSA dating.</p>
                                                <div class="store-btn">
                                                  <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/fwb-adult-friend-hookup-xfun/id1472984800"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.dating.sugara" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sugar Daddy Meetup -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/mingle-app.jpg);background-size:contain;background-position: right;">
                                            <div class="app-device" style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device5.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Flur - Online Dating App</h2>
                                                <h3>A Dating App</h3>
                                                <p>It allows its users to find a perfect mate for dating, matching their profiles and other information.</p>
                                                <div class="store-btn">
                                                  <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/flur-dating-hookup-apps/id1503663143"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.flur&hl=en_US&gl=US" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delivery Tab-->
                        <div class="tab-pane fade" id="food_grocery" role="tabpanel" aria-labelledby="food_grocery-tab">
                            <!-- FreshGoGo -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg6.jpg);">
                                            <div class="app-device" style="left: -120px"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device6.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>FreshGoGo</h2>
                                                <h3>FreshGoGo Asian Grocery &amp; Food - Fresh Delivery</h3>
                                                <p>FreshGoGo is the first ever Asian online grocery and authentic Asian food shopping and delivery service in North America supported by advanced technical platform.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/freshgogo-asian-grocery-food/id1171042940" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=net.freshgogo.android" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ChowNow -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg7.jpg);">
                                            <div class="app-device" style="right: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device7.png" alt="App Device" /></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>ChowNow</h2>
                                                <h3>Takeout Shouldn't Take Down The Restaurant</h3>
                                                <p>
                                                    Order takeout from the best local, independent restaurants without hidden commissions or fees. Other online ordering services gouge restaurants on every order with commissions as high as
                                                    40%. ChowNow is different – we make sure the restaurant doesn't get burned
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/chownow/id1210943577" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.chownow.discover" rel=", " target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-size:contain;background-position:right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg8.jpg);">
                                            <div class="app-device" style="left: -100px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device8.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Lezzoo</h2>
                                                <h3>Lezzoo: Food &amp; Grocery Delivery</h3>
                                                <p>Looking for something to order? Food? Pharmacy? Groceries? Yes! We deliver anything you want. We have food delivery, pharmacy delivery, grocery delivery simply download the app choose your
                                                    favorite store through Lezzoo, and let the rest be taken care of.
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/lezzoo-food-grocery-delivery/id1313894378" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.fastwares.lezzoo.eats" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg9.jpg);">
                                            <div class="app-device" style="right: -100px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device9.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Delivery Dudes</h2>
                                                <h3>A Food Delivery App</h3>
                                                <p>This app helps users browse their favourite food menu, order it, and get it at their doorstep. </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/delivery-dudes-food-delivery/id1263612209" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="app-store" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=biz.deliverydudes.customerapp" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-size:contain;background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg10.jpg);">
                                            <div class="app-device" style="left: -105px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device10.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Fyxx</h2>
                                                <h3>Fyxx: Alcohol Delivery</h3>
                                                <p>Sign up, browse our menu, select your desired products, checkout for review and payment, enjoy your fyxx! All with five easy steps.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/jo/app/fyxx-alcohol-delivery/id1489325138" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=co.shopney.fyxx" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--RealEstate Tab -->
                        <div class="tab-pane fade" id="RealEstate" role="tabpanel" aria-labelledby="real-tab">
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg11.jpg);">
                                            <div class="app-device" style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device11.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>NextHome</h2>
                                                <h3>NextHome Mobile Connect</h3>
                                                <p>Find your next home with NextHome’s Mobile Connect! Displaying high-resolution photos of nearby homes for sale.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/nexthome-mobile-connect/id1208543590" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.homespotter.nexthome" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style=" background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg12.jpg);background-position: left;">
                                            <div class="app-device" style="right: -80px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device12.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <div class="emizentech-icon"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-logo1.png" alt="Mzadi" /></div>
                                                <h3>Mzadi Aqari - Property Search &amp; Real Estate App</h3>
                                                <p>Find your suitable home, or property on Aqari.App - the real estate app you need for buy, sell and rent your property.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/aqari-%D8%B9%D9%82%D8%A7%D8%B1%D9%8A/id1495534206" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.app.aqari" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style=" background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg13.jpg);background-position: right;">
                                            <div class="app-device" style="left: -80px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device13.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>PropertyRadar</h2>
                                                <h3>This Android app is for subscribers of PropertyRadar.</h3>
                                                <p>
                                                    PropertyRadar makes it fast and easy for residential and commercial real estate business professionals to discover and connect with their best potential customers and deals using our
                                                    enhanced public records data and pro marketing and analysis tools
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/propertyradar/id730602196" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.propertyradar.app" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style=" background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg14.jpg);background-position: left;">
                                            <div class="app-device" style="right: -120px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device14.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Homele</h2>
                                                <h3>Homele | Real Estate App for Iraq</h3>
                                                <p>
                                                    Homele is a leading property app in the Iraq and Kurdistan region where buyers,real estate agents and professionals can find and share vetal information about homes plots, projects , and
                                                    other real estate deals.
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/in/app/homeie/id1538269393"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.homeiq" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- automative Tab-->
                        <div class="tab-pane fade" id="automotive" role="tabpanel" aria-labelledby="automotive-tab">
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style=" background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg15.jpg);">
                                            <div class="app-device" style="right: -100px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device15.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>BacklotCars</h2>
                                                <h3>BacklotCars Buyer</h3>
                                                <p>BacklotCars gives independent car dealers direct access to wholesale inventory from thousands of sellers nationwide.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/backlotcars-buyer/id1175036411" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.backlotcars.backlotcars" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ghaseel -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg16.jpg);">
                                            <div class="app-device" style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device16.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Ghaseel</h2>
                                                <h3>Ghaseel Car Wash</h3>
                                                <p>Get your car washed anytime and anywhere with Ghaseel. We are the first app for car wash services in Kuwait.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/app/ghaseel-ghsyl/id1052534178" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /> </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.ghaseel.ghaseel2" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                      <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg17.jpg);">
                                            <div class="app-device" style="right: -30px ;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/keno-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Keno</h2>
                                                <h3>Keno Car Wash</h3>
                                                <p>We are proud to introduce our all new and revolutionary Super App. All your automotive services and needs.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/keno-car-wash/id1127345897" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.naushad.kenocustomer" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg18.jpg);">
                                            <div class="app-device" style="left: -95px"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/smart-parking-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Smart Parking</h2>
                                                <p>The Smart Parking app helps you find a place to park using live information from the Smart Parking sensor system that has been installed into parking spaces around the city.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                     <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/smart-parking-s3/id1297829489" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=io.smartsys.master" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- healthcare Tab-->
                        <div class="tab-pane fade" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg19.jpg);">
                                            <div class="app-device" style="right: -70px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device19.png" alt="Bright-Money" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Daily Workouts</h2>
                                                <p>
                                                    Daily Workouts provides great 5 to 30 minute daily workout routines for men and women that step you through some of the best exercises you can do in the comfort of your own home. These
                                                    proven workouts, demonstrated by a certified personal trainer, target all major muscles. Spending just minutes a day can strengthen and tone your body.
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/daily-workouts-fitness-trainer/id469068059" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.tinymission.dailyworkoutspaid" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg20.jpg);">
                                            <div class="app-device" style="left: -95px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device20.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Skill Yoga</h2>
                                                <h3>Skill Yoga – Improve Mobility &amp; Get Strong</h3>
                                                <p>
                                                    Learn and benefit from the life-changing skills of yoga in just a few minutes a day with Skill Yoga. Find hundreds of workouts on functional strength, mobility, flexibility and
                                                    mindfulness.
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/skill-yoga-train-mind-body/id1462051533" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.skillyoga.app" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg21.jpg);">
                                            <div class="app-device" style="right: -140px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device21.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Essentrics</h2>
                                                <h3>Essentrics Workout</h3>
                                                <p>
                                                    The creators of the award-winning TV programs Aging Backwards®, Forever Painless®, Classical Stretch®, and Essentrics® bring you a unique workout that combines scientifically-designed
                                                    strengthening and stretching exercises to create a flexible, balanced and pain-free body.
                                                </p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/essentrics-workout/id1478161321" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.essentricstv" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Travel Tab-->
                        <div class="tab-pane fade" id="Travel" role="tabpanel" aria-labelledby="dating-tab">
                           <!-- ManAboutWorld Gay Travel Mag -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position:left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/ManAboutWorld.jpg);">
                                            <div class="app-device" style="right: -70px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/manworld-app.png" alt="manworld-app" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>ManAboutWorld Gay Travel Mag</h2>
                                                <h3>Gay Travel Mag</h3>
                                                <p>Now, you can make your travel planning better as you have dreamt of using this app. This travel magazine app will include slideshows, videos, and live updates. This app goes beyond the printed pages with information and inspiration for best trips eveṛ</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/manaboutworld-gay-travel-magazine-guides/id544119603" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=man.about.world&hl=en_US&gl=US" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Promenade Hotels & Resort -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Resort-Booking.png);">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Resort-Booking-mobile.png" alt="FeelSafe" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Promenade Hotels & Resort</h2>
                                                <h3>4-start Business Class City Hotel</h3>
                                                <p>Holding over 188 suites and rooms, this hotel is located in the heart of a bustling Bintulu Township. This app will give you details about the facilities it offers, with book now and promotional offers. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/promenade-hotels-resort/id980918053"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Promenade"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.juiceapac.Promenade" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- =============================== zetoBus =============================== -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style=" background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/zetoBus.png);">
                                            <div class="app-device" style="right: -40px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/trippers-app.png" alt="Trippers" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Trippers | Group Trip Planner   </h2>
                                                <h3>Group Trip Planner</h3>
                                                <p>Now, you can plan your upcoming weekend gateway using Trippers. It's an all-in-one travel planner as it contains everything you need to plan your next weekend. Whether you want to travel with your friends and family or all alone, you can use Trippers and use its features as you want to make your trip the best.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noindex noreferrer noopener nofollow" href="https://apps.apple.com/us/app/trippers-group-trip-planner/id1554314429" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=app.trippers" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Trippers | Group Trip Planner" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Banking  Tab-->
                        <div class="tab-pane fade" id="Banking" role="tabpanel" aria-labelledby="delivery-tab">
                            <!-- KliQr -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style=" background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/KliQr.png);">
                                            <div class="app-device" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/kliqr-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>KliQr</h2>
                                                <h3>Money Manager, Budgeting, Finance Tracking</h3>
                                                <p>
                                                    Kliqr is your Personal Finance Manager, helping you keep track of your Credits, Debits and Bills. In one or two clicks you can track EVERYTHING across all your accounts in ONE PLACE both
                                                    online and offline.
                                                </p>
                                                <!-- app store button -->
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/freshgogo-asian-grocery-food/id1171042940" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.kliqr" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Loan Calculator -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style=" background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/loan-calc.png);">
                                            <div class="app-device" style="right: -80px"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/loan-calc-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Loan Calculator</h2>
                                                <h3>A Loan Calculator App</h3>
                                                <p>It helps the users in EMI calculation, compares loans, refines loans, calculates loan amount at monthly payments and interest rates, etc. 
                                                </p>

                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.alexander.loanCalculator" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.alexander.loanCalculator" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Vehicle Loan Calculator -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Vehicle-Loan-Calculator.png);">
                                            <div class="app-device" style="left: -205px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Vehicle-Loan-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Vehicle Loan Calculator</h2>
                                                <h3>A Vehicle Loan Calculator App</h3>
                                                <p>A car payment calculator quickly calculates monthly loan payments and shows the loan amortization in detail. Also, it calculates the interest, total payment, payoff date, and all the required information. 
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=net.freeonlineapps.vehloancalc" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=net.freeonlineapps.vehloancalc" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bright Money -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Bright-Money.png);">
                                            <div class="app-device" style="right: -190px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Bright-Money-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Bright Money</h2>
                                                <h3>A Credit/Debit Card Pay Off App</h3>
                                                <p>It is a faster and intelligent way to pay off credit card debt. It uses advanced technology and pays off the card debt automatically.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>

                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/bright-pay-off-debt-smarter/id1511043796" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.brightcapital.app" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- payse.wallet -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-position: right; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/payse.png);">
                                            <div class="app-device" style="left: -105px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/payse-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Payse</h2>
                                                <h3>Split Payment, Mobile &amp; DTH Recharge,Bill Payments</h3>
                                                <p>
                                                    PaySe application can be used to send &amp; receive money securely, recharge mobile/DTH/Data card, pay utility bills (Electricity, Postpaid Mobile, Broadband, Landline ,Water &amp; Gas
                                                    bills), split bills with friends and keep track of who owes how much.
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.payse.wallet" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- gbcash.app  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/GBCash.png);">
                                            <div class="app-device" style="right: -120px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/GBCash-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>GBCash</h2>
                                                <h3>GBCash Credit card to bank</h3>
                                                <p>
                                                    GBCash is a utility app which allows you to pay utility payments from your credit card to any bank account. GBCash ensures a seamless procedure for online payment service thus making.
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>

                                                <div class="store-btn">
                                                  
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=in.gbcash.app " ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- eLearning Tab-->
                        <div class="tab-pane fade" id="eLearning" role="tabpanel" aria-labelledby="real-tab">
                            <!-- SmartSchool -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="app-bg" style="background-position: left; background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/SmartSchool.png);">
                                            <div class="app-device" style="top: auto;bottom: 0;transform: translate(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/SmartSchool-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>SmartSchool</h2>
                                                <h3>SmartSchool e-Learning</h3>
                                                <p>SmartSchool enables parents and schools to manage their e-learning information as well as other school information.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.brilliantte.smartschool.app" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SchoolTime -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style=" background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/SchoolTime.png); background-position:right; background-size;auto;">
                                            <div class="app-device" style="left: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-SchoolTime-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <!-- <div class="emizentech-icon"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-logo1.png" alt="Mzadi"></div> -->
                                                <h2>SchoolTime</h2>
                                                <h3>SchoolTime Management System</h3>
                                                <p>SchoolTime school management software is a complete cloud based school management app. It enables the school to focus on core education and automates the administration function.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.school.mobile" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EDUCBA Learning App -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="app-bg" style="background-position: left;  background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/EDUCBA.png);">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/EDUCBA-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>EDUCBA Learning App</h2>
                                                <!-- <h3>This Android app is for subscribers of PropertyRadar.</h3> -->
                                                <p>
                                                    EDUCBA provides skill based education addressing the needs of 500,000+ members across 40+ Countries. Our unique step-by-step, online learning model along with amazing 5300+ courses
                                                    prepared by top notch professionals from the industry, help participants achieve.
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/educba-learning-app/id1341654580" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.educba.www" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Acadium -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Acadium.png);background-position: right;">
                                            <div class="app-device" style=""><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Acadium-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <!-- <div class="emizentech-icon"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-logo1.png" alt="Mzadi"></div> -->
                                                <h2>Acadium</h2>
                                                <h3>Courses, internship with industry experts</h3>
                                                <p>Acadium is a free e-learning app which provides online digital marketing courses and enables you to seek three-month online apprenticeship and job opportunities with industry experts and expand your work experience with free digital.
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/genm-learn-marketing/id1239912206" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.genm.genm" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tolle -->
                        <div class="tab-pane fade" id="Logistic" role="tabpanel" aria-labelledby="automotive-tab">
                            <!-- Tolle -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Tolle.png); background-position: left;">
                                            <div class="app-device" style="right: -60px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Tolle-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2 mt-4 mt-md-0">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Tolle</h2>
                                                <h3>Moving Services</h3>
                                                <p>The app allows you to book or assist with quick local moves or pickups. Tolle offers professional movers or same day pickup and delivery services at a lower rate than moving or delivery companies.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/id1299431134" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Tolle-app"></a>


                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.tolle.app" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ghaseel   -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Truck-Driver.png);background-position: right;">
                                            <div class="app-device" style="left: -20px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/truckdriver-mobile.png" alt="App Device" /></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Truck Driver</h2>
                                                <h3>Truck Driver Training Sims</h3>
                                                <p>Truck Driver Training Sims is a collection of 3 real-world simulators to help new truck drivers learn three important skills: parking, scaling, and hours of service.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570" stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/id1352589658" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.truckingstudy.truckdrivertrainingsims" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Senpex-Courier.png);background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Senpex-Courier-app-devices.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Senpex Courier</h2>
                                                <h3>Courier Services</h3>
                                                <p>The app allows you to book or assist with quick local moves or pickups. Tolle offers professional movers or same day pickup and delivery services at a lower rate than moving or delivery companies</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/senpex-courier/id1470128624" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="play store"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.snpx.courier"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CoDriver-Courier Management -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/CoDriver-Courier.png);background-position: right;">
                                            <div class="app-device"style="left: -20px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/CoDriver-Courier-app-devices.png" alt="App Device" /></div>
                                            <!--   -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>CoDriver-Courier<br />Management</h2>
                                                <h3>A Courier Delivery App</h3>
                                                <p>It is a professional courier management software for the delivery and transportation industry. It makes the delivery process transparent, simple, and more effective for the app users and their clients. </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/codriver-courier-management/id1114495151" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" />
                                                    </a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=online.codriver.android_courierapp" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- OrderLord Driver (Courier, Food delivery -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/OrderLord.png);background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/OrderLord-app-devices.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>OrderLord Driver<br />(Courier, Food delivery</h2>
                                                <h3>Food Delivery</h3>
                                                <p>The app allows you to book or assist with quick local moves or pickups. Tolle offers professional movers or same day pickup and delivery services at a lower rate than moving or delivery companies</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/orderlord-driver/id937845438" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.av.ol" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- media Tab -->
                        <div class="tab-pane fade" id="Media" role="tabpanel" aria-labelledby="media-tab">
                            <!-- Funny American Home made -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/american-img.png);background-position: right;">
                                            <div class="app-device" style="left: -105px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/american-img-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Funny American Home made</h2>
                                                <h3>Funny American Home made Videos For WhatsApp 2020</h3>
                                                <p>
                                                    Here you’ll find funny videos, viral videos, prank videos, funny animal videos, funny baby videos, classic videos and the best compilations and music montages of some of the funniest
                                                    videos you've ever seen.
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/nz/app/americas-funniest-home-videos/id443072664" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=app.funny.american.videos.fun" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Photo Editor -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Senpex-Courier-main.png); background-position: left;">
                                            <div class="app-device" style="right: -120px; top: 100%; transform: translatey(-100%);">
                                                <img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Senpex-courier-app-device.png" alt="App Device" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Radio FM Latvia</h2>
                                                <h3>Online Radio FM AM Stations</h3>
                                                <p>The app brings to you for free, the opportunity to enjoy listening to online radio broadcasts and music on your android, no matter where you are.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z" stroke="#0C4570" stroke-linecap="roun" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/lv/app/latvia-radio-player-listen-fm-live-radio-internet-podcasts/id1139655496" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="app-store"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.radiosonline.radiofmlatvia"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Photo Editor -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/GoCast.png);background-position: right;">
                                            <div class="app-device" style="left: -130px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/GoCast-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>GoCast</h2>
                                                <h3>Go Cast phone to Tv, screen mirroring app</h3>
                                                <p>Screen Mirroring with TV (GoCast)will assist you to cast and mirror your android phone or tab's screen on smart TV/Display or Wireless adaptors.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <!-- ios link  -->
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/hot-country-live/id1548316512"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a>
                                                    <!-- android link -->
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.screenstreamingmirroring.casttotv.screenmirroring" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Photo Editor -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Photo-editor.png); background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Photo-editor-app-device.png" alt="Photo-editor-app-device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Photo Editor</h2>
                                                <h3>Photo Editor &amp; Photo Collage Free</h3>
                                                <p>
                                                    Photo Editor &amp; Photo Collage Free is an amazing all-in-one photo editor! Just select a picture and upload, you can pick effects you like best with a tap, and effect will automatically
                                                    applied to your photos.
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=lisa.studio.photoeditor" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- Ecommerce Tab -->
                        <div class="tab-pane fade" id="Ecommerce" role="tabpanel" aria-labelledby="Ecommerce-tab">
                             <!-- Podbean Pro -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Podbean-Pro.png);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Podbean-Pro-app-device.png" alt="App Device" /></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Podbean Pro</h2>
                                                <h3>Podbean - Podcast &amp; Radio &amp; Audiobook</h3>
                                                <p>Podbean Pro is the convenient, secure app for companies/organizations using Podbean’s private podcasting solution for training and education podcasts.</p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/podbean-pro/id1484287462" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="App-store"></a>
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.podbean.app.generic"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Pawmaniti.png);background-position: right;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Pawmaniti-overlay.png" alt="iCart" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Pawmaniti</h2>
                                                 <h3>Come together,& join the community of paws.</h3>
                                                <p>We believe in providing our pets, the best home and parents they can get. We strongly encourage <br />
                                                    adopting instead of shopping for pets <br />
                                                    (#Adoptdontshop).
                                                </p>
                                                <a href="#" class="d-inline-block w-100 case-study-link">
                                                    View Case Study
                                                    <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.5452 5.30474L17.7383 1.32129M22.5452 5.30474L0.91441 5.30474L22.5452 5.30474ZM22.5452 5.30474L17.7383 9.28819L22.5452 5.30474Z"
                                                            stroke="#0C4570"
                                                            stroke-linecap="roun"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </a>
                                                <div class="store-btn">
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/pawmaniti/id1571905143" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.pawmaniti" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Buitanda -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-main.png);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-mobile.png" alt="Buitanda-mobile" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Buitanda</h2>
                                                <h3>COMERCIO GERAL, IMPORTACAO E EXPORTACAO, LDA</h3>
                                                <p>Buitanda is the first digital B2B market in Angola. Buitanda increases the level of business between companies facilitating the purchase of wholesale products at the best price.</p>
                                                <div class="store-btn">
                                                     <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/ai/app/buitanda/id1500280115" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.buitanda.android" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shop It To Me -->
                            <div class="app-item ">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Shop-It-To-Me-main.jpg);background-position: right;">
                                            <div class="app-device" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Shop-It-To-Me-mobile.png" alt="Bright-Money" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Shop It To Me  - Your Brands. Your Sizes. On Sale</h2>
                                                <h3>A Personal Clothing Shopping App</h3>
                                                <p>Using this app, the users can pick their favorite clothing designs in their sizes. The app will display the result of various online stores when the user's chosen item goes on sale. </p>
                                                <div class="store-btn">
                                                     <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/shop-it-to-me/id739426106" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.shopittome.mobile" >
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Paragon Jewelry -->
                            <!-- <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-main.png);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-mobile.png" alt="Buitanda-mobile" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Paragon Jewelry</h2>
                                                <h3>COMERCIO GERAL, IMPORTACAO E EXPORTACAO, LDA</h3>
                                                <p>It helps the app users to shop the jewelry easily and get them delivered to their doorstep.</p>
                                                <div class="store-btn">
                                                   <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=jewelry.paragon&hl=en_US&gl=US" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/google-play.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- web -->
            <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web-tab">
                <div class="emizentech-app-portfolio" id="web-apps">
                    <div class="container">
                        <ul class="nav nav-tabs nav-pills nav-fill" id="mobile-tab" role="tablist">
                            <!-- Ecommerce Retails-->
                            <li class="nav-item">
                                <a class="nav-link active" id="Shopware-tab" data-toggle="tab" href="#Shopware" role="tab" aria-controls="Shopware" aria-selected="false">
                                    <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-logo.png" alt="Ecommerce" />
                                    <span>Shopware</span>
                                </a>
                            </li>
                            <!-- Delivery App -->
                            <li class="nav-item">
                                <a class="nav-link" id="Magento" data-toggle="tab" href="#Magento-tab" role="tab" aria-controls="Magento" aria-selected="false">
                                    <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/magento-new.png" alt="Delivery" />
                                    <span>Magento</span>
                                </a>
                            </li>
                            <!-- Dating App -->
                            <li class="nav-item">
                                <a class="nav-link" id="Shopify-tab" data-toggle="tab" href="#Shopify" role="tab" aria-controls="dating" aria-selected="true">
                                    <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopfy-new.png" alt="Dating" />
                                    <span>Shopify</span>
                                </a>
                            </li>

                            <!-- Health & Fitness -->
                            <li class="nav-item">
                                <a class="nav-link" id="Laravel-tab" data-toggle="tab" href="#Laravel" role="tab" aria-controls="Laravel" aria-selected="false">
                                    <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/laravel-new.png" alt="Health" />
                                    <span>Laravel</span>
                                </a>
                            </li>
                            <!-- Real Estate -->
                            <li class="nav-item">
                                <a class="nav-link" id="Woocommerce-tab" data-toggle="tab" href="#Woocommerce" role="tab" aria-controls="real" aria-selected="false">
                                    <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wcmrc.png" alt="Real Estate" />
                                    <span>Woocommerce</span>
                                </a>
                            </li>
                            <!-- Automotive -->
                            <!--   <li class="nav-item">
                          <a class="nav-link" id="automotive-tab2" data-toggle="tab" href="#automotive2" role="tab" aria-controls="automotive" aria-selected="false">
                            <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/automotive.png" alt="Automotive">
                            <span>Automotive</span>
                          </a>  
                        </li> -->
                        </ul>
                    </div>
                    <!-- tab-content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Shopware" role="tabpanel" aria-labelledby="dating-tab">
                            <!-- Shisha-King.De -->
                            <div class="app-item order-md-1">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/shisha-king.png); background-position: right;">
                                           <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/shisha-king-mobile.png" alt="shisha-king"></div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Shisha-King.De</h2>
                                                <h3>An Online Store to Shop Hookah & Accessories</h3>
                                                <p>It is an online shop for hookah and accessories. Here you can buy the best quality products at the best price</p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="https://shisha-king.de/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Leibundrebe.de -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Leibundrebe.png); background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Leibundrebe-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Leibundrebe.de</h2>
                                                <h3>An Online Shop for Shopping Wine & Spirits</h3>
                                                <p>It is an online store from where you can get a vast collection of international wines and spirits. </p>
                                                <div class="store-btn">
                                                  <a href="https://leibundrebe.de/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wiesnshop -->
                            <div class="app-item order-md-1">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Wiesnshop.png); background-position: right;">
                                            <!-- <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Wiesnshop.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Wiesnshop</h2>
                                                <h3>A Shop to Buy Costume Collection</h3>
                                                <p> It is an online store where you can buy new costumes for men, women, children, fashion accessories, and more. </p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="https://www.wiesnshop.ch/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- patona -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/patona.png); background-position: left;">
                                            <!-- <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device2.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Patona</h2>
                                                <h3> An Online Store to Shop For Camera & Accessories</h3>
                                                <p>The store holds a vast collection of power packs, digital cameras, smartphones, tools, and more</p>
                                                <div class="store-btn">
                                                    <!--   <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/ezmatch-18-dating-chat-app/id1471508186" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="https://patona.de/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Derlieferexperte -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Derlieferexperte.png); background-position: right;">
                                            <div class="app-device" style="top: 68%;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Derlieferexperte-overlay.png" alt="Derlieferexperte-overlay" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Derlieferexperte</h2>
                                                <h3>An Online Store for Buying Fresh Food</h3>
                                                <p>You can buy fresh food online at this store, where you will find a wide range of organic products and vegan foods. .</p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="http://derlieferexperte.de/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Zentralstaubsauger  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Zentralstaubsauger.png); background-position: left;">
                                            <!-- <div class="app-device" style="right: -170px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device4.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Zentralstaubsauger</h2>
                                                 <h3>A Specialist Supplier for Central Suction System</h3>
                                                <p>Here you can buy central vacuum cleaner systems and solve various cleaning issues at your home. </p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="https://www.zentralstaubsauger-direkt.de" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Magento-tab -->
                        <div class="tab-pane fade" id="Magento-tab" role="tabpanel" aria-labelledby="delivery-tab">
                            <!-- Buitanda -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-new.png); background-position: right;">
                                            <div class="app-device" style="left: -155px; top: auto; bottom: 0; transform: translate(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-new-main.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Buitanda</h2>
                                                <h3>A B2B Market App</h3>
                                                <p>It permits the users to sell their products in bulk and at the best price. </p>
                                                <div class="store-btn">
                                                    <a href="https://buitanda.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="megento" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Emarinehub -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Emarinehub.png);background-position: left;">
                                            <!-- <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Nothingbutstyle-overlay.png" alt="Nothingbutstyle" /></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Emarinehub</h2>
                                                <h3>A Store to Shop for Fishing Gear</h3>
                                                <p>It's a place from where you can get the items for fishing, marine, campaign, and water sports. </p>
                                                <div class="store-btn">
                                                    <a href="https://www.emarinehub.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="megento"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Ecosattvastore  -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Ecosattvastore.png);background-position: right;">
                                            <!-- <div class="app-device" style="left: -245px;top: auto;bottom: 0;transform: translate(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Buitanda-new-main.png" alt="App Device" /></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Ecosattvastore</h2>
                                                <h3>A Place to Buy Eco-Friendly Products</h3>
                                                <p>Here you can shop for eco-friendly home and living items, gifting items, accessories, beauty and wellness products, etc. </p>
                                                <div class="store-btn">
                                                    <a href="https://www.ecosattvastore.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="megento" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Game7sportswear -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Game7sportswear.png);">
                                            <!-- <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Nothingbutstyle-overlay.png" alt="Nothingbutstyle" /></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Game7sportswear</h2>
                                                <h3>An Online Shop to Buy Sport Items</h3>
                                                <p>Here you can shop for baseball, hockey, sportswear items, etc., of various brands</p>
                                                <div class="store-btn">
                                                    <a href="https://www.game7sportswear.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EgoShoes -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Egoshoes.png);background-position: right;">
                                            <div class="app-device" style="left: -245px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Egoshoes-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>EgoShoes</h2>
                                             <h3>A Global eCommerce Store for Clothing</h3> 
                                                <p>EGO showcases stylish shoes to make shoeholics go mad with an online, bold, spirited footwear brand.  </p>
                                                <div class="store-btn">
                                                    <a href="https://ego.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="megento" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Nothingbutstyle -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Nothingbutstyle.png);background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Nothingbutstyle-overlay.png" alt="Nothingbutstyle" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Nothingbutstyle</h2>
                                                <p>Nothingbutstyle is famous for getting the hottest and latest fashion items. </p>
                                                <div class="store-btn">
                                                    <a href="https://www.nothingbutstyle.com/eu/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Anycostume.co.uk -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Anycostume.co.uk.png);background-position: right;">
                                            <!-- <div class="app-device" style="left: -205px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device8.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>AnyCostume </h2>
                                                <h3>A Store to Buy Fun Fancy Dress</h3>
                                                <p>It is a store from where you can get fancy costumes of all types along with their accessories.</p>
                                                <div class="store-btn">
                                                    <a href="https://anycostume.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dolls Kill -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Dolls-kill.png);background-position: left;">
                                            <div class="app-device" style="right: -190px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Dolls-Kill-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Dollskill</h2>
                                                <h3>An Online Shop for Women’s Hottest Collection</h3>
                                                <p>Here you can get the hottest collection of women's clothing, shoes, accessories, beauty, etc.</p>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/delivery-dudes-food-delivery/id1263612209" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> -->
                                                    <a href="https://www.dollskill.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- My Homemade -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Homemade.png);background-position: right">
                                            <!-- <div class="app-device" style="left: -205px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device8.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Myhomemade</h2>
                                                <h3>Online Store for Homemade Items</h3>
                                                <p>Here you can buy homemade gifts, art, clothing, and home decor items.</p>
                                                <div class="store-btn">
                                                    <a href="https://myhomemade.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Redding medical -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Redding-medical.png);background-position: left">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Redding-medical-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Reddingmedical</h2>
                                                <h3>Tagline- An Online Shop for Medical Products</h3>
                                                <p>At this spot, you can buy BP units, stethoscopes, scales, and all medical products.</p>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/chownow/id1210943577" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> -->
                                                    <a href="https://reddingmedical.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- S_Mart Electronics -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/S_Mart_Electronics.png);background-position: right;">
                                            <div class="app-device" style="top: auto; bottom: 0; transform: translatey(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/S_Mart Electronics-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>S__mart Electronics</h2>
                                                 <h3>A Store of Electronic Products</h3>
                                                <p>Here you can buy a wide range of electronic products like LED, refrigerators, home theater, speakers, water purifiers, etc at the best price.</p>
                                                <div class="store-btn">
                                                   <a href="https://smartranchi.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Hair 2 Heart  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Hair-Heart.png);background-position: left;">
                                            <!--  <div class="app-device" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Hair-Heart.png-overlay.png" alt="App Device"></div>  -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Hair 2 Heart</h2>
                                                <h3>A Place to Buy Hair Extensions</h3>
                                                <p>Here you can get a wide range of human hair extensions at an affordable range and best quality.</p>
                                                <div class="store-btn">
                                                    <a href="https://hair2heart.de/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Complete Pumpsupplies -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Pumpsupplies.png);background-position: right;">
                                            <div class="app-device" style="top: auto; bottom: 0; transform: translatey(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Pumpsupplies-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Complete Pumpsupplies</h2>
                                                <h3>A Supplier of Pumps & Pipelines</h3> 
                                                <p>It is the best place to buy pumps and equipment, like connectors, booster sets, in-line circulators, etc. </p>
                                                <div class="store-btn">
                                                    <a href="https://www.completepumpsupplies.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Printzessin.ch  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Printzessin.png);background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Printzessin-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Printzessin.ch</h2>
                                                <h3>A Printing Company</h3>
                                                <p>You can pick any print product you want, like folded flyers, business cards, postcards, brochures, etc. aperiam.</p>
                                                <div class="store-btn">
                                                    <a href="https://www.printzessin.ch/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- flagshopen -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/flagshopen.png);background-position: right;">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Flagshoppen.dk</h2>
                                                <h3>A World of Flags</h3>
                                                <p>Here you can shop various flags from all over the world, for any occasion. </p>
                                                <div class="store-btn">
                                             <a href="https://www.flagshoppen.dk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Master Spa Parts -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/master-spa-parts.png);background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/spaparts-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Master Spa Parts</h2>
                                                <h3>Online Store to Buy Spa Parts</h3>
                                                <p>The brand provides a complete range of hot tub replacement parts for Master Spas.</p>
                                                <div class="store-btn">
                                                    <a href="https://www.masterspaparts.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Brick Salvage -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Jafar-Armaturen.png);background-position: right;">
                                            <div class="app-device" style="top: auto; bottom: 0; transform: translatey(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Jafar-Armaturen-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Jafar-Armaturen</h2>
                                                 <h3>Store to Buy Quality Fittings</h3>
                                                <p>This store can buy gate valves and quality fitting for supply, disposal, and fire protection. </p>
                                                <div class="store-btn">
                                                <a href="https://www.jafar-armaturen.de/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CTV Armaturen  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/ctv-main.png);background-position: left;">
                                            <div class="app-device" style="top: auto;transform: translate(0);bottom: 0;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/ctv-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>CTV Armaturen</h2>
                                                <h3>A Store to Shop for Fittings & Solutions</h3>
                                                <p>You can buy valves for the energy, water, industrial sectors, and various fittings and solutions here.</p>
                                                <div class="store-btn">
                                                    <a href="https://ctv-valves.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Brick Salvage -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Brick-Salvage.png);background-position: right;">
                                            <div class="app-device" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Brick Salvage-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Brick Salvage</h2>
                                                <h3>An Online Store to Buy Brick Tiles</h3>
                                                <p>You can buy the best quality antique brick for walls, floors, and more from this online store.</p>
                                                <div class="store-btn">
                                                    <a href="https://www.bricksalvage.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 50ml  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/50ml.png);background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/50ml-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>50ml</h2>
                                                <h3>A Store to Buy Skin-Nourishing Products</h3>
                                                <p>A specially crafted place for all beauty enthusiasts, 50 ml; just consider the best quality products to pamper yourself. You can buy such products to relax your body innovatively, at any time and anywhere you are.</p>
                                                <div class="store-btn">
                                                    <a href="https://50-ml.it/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- usakoi  -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/usakoi-main.png);background-position: right;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/usakoi-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>UsaKoi</h2>
                                                <h3>The Best Place to Get Koi & Pond Supplies</h3>
                                                <p>Here you can get high-quality koi and pond supplies, equipment, koi pond installation services, and more.</p>
                                                <div class="store-btn">
                                                  
                                                    <a href="https://usakoi.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- sherpagroupav -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/sherpagroupav.png);background-position: left;">
                                            <!-- <div class="app-device" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/sherpagroupav-overlay.png" alt="App Device"></div>  -->
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>sherpagroupav</h2>
                                                <h3>Top Supplier of AV Solutions</h3> 
                                                <p>Here you can get the best quality home entertainment solutions.</p>
                                                <div class="store-btn">
                                                    <a href="https://sherpagroupav.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- lastpunchinc  -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/lastpunchinc.png);background-position: right;">
                                            <div class="app-device" style="top: auto; bottom: 0; transform: translatey(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/lastpunchinc-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Lastpunchinc</h2>
                                                <h3>Online Store to Buy Pocket Knives & More</h3>
                                                <p>Desc-Here you can buy knives at who pocket knives, daggers, swords, crossbows, etc.</p>
                                                <div class="store-btn">
                                                 <a href="https://lastpunchinc.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Eindiawholesale -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/eindiawholesale.png);background-position: left">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/eindiawholesale-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Eindiawholesale</h2>
                                              <h3>Online Shop for Imitation Jewelry</h3> 
                                                <p>Here you can buy imitation jewelry in bulk at wholesale price for your stores. </p>
                                                <div class="store-btn">
                                                    <a href="https://www.eindiawholesale.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EGO  -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/EGO.png);background-position: right;background-size: auto;">
                                            <div class="app-device" style="top: auto; bottom: 0; transform: translatey(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/EGO-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>EGO</h2>
                                                <h3>A Stylish Shoe Store</h3>
                                                <p>Here you can shop for top styles of shoes for females of different types along with bags and accessories.</p>
                                                <div class="store-btn">
                                        
                                                    <a href="https://ego.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Darscrubs  -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/darscrubs.png);background-position: left;background-size: auto;">
                                            <!--  <div class="app-device" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/eindiawholesale-overlay.png" alt="App Device"></div>  -->
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Darscrubs</h2>
                                                <h3>An Online Store for Medical Scrubs</h3> 
                                                <p> Here you can buy medical scrubs for nurses, doctors, and other professionals.</p>
                                                <div class="store-btn">
                                                <a href="https://www.darscrubs.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shop Controltekusa  -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Mickeysgirl.png);background-size: auto;background-position: right;">
                                            <!-- <div class="app-device" style="top: auto;bottom: 0;transform: translatey(0);" ><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/lastpunchinc-overlay.png" alt="App Device"></div>  -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Shop Controltekusa</h2>
                                                <h3>An Online Store for Financial Processing Supplies</h3>
                                                <p>You can get customized solutions for retail, finance, and cash-in-transit industries.</p>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/lezzoo-food-grocery-delivery/id1313894378" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="http://shop.controltekusa.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- Aqua Meds -->
                            <div class="app-item  item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 ">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Jafar-Armaturen.png);background-position: left;">
                                            <div class="app-device" style="top: auto; bottom: 0; transform: translatey(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Jafar-Armaturen-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Aqua Meds</h2>
                                                 <h3>Pond Care Products & Treatments</h3>
                                                <p>Here you can get koi health care treatment and garden pond treatment of the best quality and efficacy.</p>
                                                <div class="store-btn">
                                                    <a href="https://aquameds.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/megento-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shopify -->
                        <div class="tab-pane fade" id="Shopify" role="tabpanel" aria-labelledby="healthcare-tab">
                            <!-- Rebellious Fashion -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Rebellious-fashion.png);background-position: right;">
                                            <!-- <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device19.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Rebellious Fashion</h2>
                                                <h3>One Stop for Hottest Looks</h3>
                                                <p>Here you can buy trendy and stylish dresses, tops, shoes, and accessories for women at the best price.</p>
                                                <div class="store-btn">
                                                    <!-- <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/daily-workouts-fitness-trainer/id469068059" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play" /></a> -->
                                                    <a href="https://rebelliousfashion.com/" data-toggle="tooltip" data-placement="top" title="Rebellious Fashion" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopify-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shape me -->
                            <div class="app-item app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/bg-shaping.png);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/bg-shaping-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Shape me</h2>
                                                <h3>An Online Shop for Comfortable Shapewear </h3>
                                                <p>You can buy the best-quality and comfortable shapewear from this store and at the best price.    </p>
                                                <div class="store-btn">
                                                    <a href="https://shapeme.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopify-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bang Bang Balloons -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Bang-Bang-main.png);background-position: right;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Bang_Bang_ovrlay.png" alt="Bang_Bang_ovrlay" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Bang Bang Balloons</h2>
                                                <h3>An Online Store for Balloon Decoration</h3>
                                                <p>Bang Bang Balloons is an online store for bespoke balloons decorated with a modern approach to balloon styling for parties, corporate events, weddings, functions, birthdays, or baby showers. </p>
                                                <div class="store-btn">
                                                    <a href="https://www.bangbangballoons.com.au/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopify-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mickeysgirl -->
                            <div class="app-item app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Shape-me.png);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Shape-me-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Mickeysgirl</h2>
                                                <h3>An Online Fashion Store</h3>
                                                <p>An online fashion store dedicated to the best fashion products and accessories for women.
                                                </p>
                                                <div class="store-btn">
                                                   <a data-toggle="tooltip" data-placement="top" title="mickeysgirl"  href="https://mickeysgirl.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopify-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Laravel -->
                        <div class="tab-pane fade" id="Laravel" role="tabpanel" aria-labelledby="real-tab">
                            <!-- Elahia -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Elahia.png);background-position: right;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Elahia-overrlay.png" alt="Elahia" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Elahia</h2>
                                                <h3>An Online Marketplace</h3>
                                                <p> Here provides individuals and businesses a great opportunity to access a marketplace globally of used and new products for action or sale.</p>
                                                <div class="store-btn">
                                                    <a href="https://elahia.ezxdemo.com/" data-toggle="tooltip" data-placement="top" title="Elahia"  target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/laravel-mini.png" alt="Google Play" /></a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shop on Bike -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <!-- Shop on bike -->
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Shop-bike.png);background-position: left;">
                                            <!-- <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device12.png" alt="App Device"></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Shop on Bike</h2>
                                                <h3>Shop On Bike</h3>
                                                <p>An ecommerce store offering a wide range of items that can be bought on the move.</p>
                                                <div class="store-btn">
                                                    <a target="_blank" rel="noreferrer noopener nofollow" href="https://play.google.com/store/apps/details?id=com.app.aqari" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/laravel-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ministry of Rooms -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Ministry-Rooms.png);background-position: right;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Ministry-Rooms-overlay.png" alt="Ministry-Rooms-overlay" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Ministry of Rooms</h2>
                                                <h3>An Online Place for Rental Properties</h3>
                                                <p>Here the housing providers connect with people looking for a rental place to live. </p>
                                                <div class="store-btn">
                                                    <a href="https://ministryofrooms.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/laravel-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mzadi -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg14.jpg);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device14.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Mzadi</h2>
                                                 <h3>One Source for All Thing's Product</h3>
                                                <p>Here you get the top services for almost all the industries, like electronics, real estate, vehicles, etc</p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="JavaScript:void(0)" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/laravel-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Woocommerce -->
                        <div class="tab-pane fade" id="Woocommerce" role="tabpanel" aria-labelledby="automotive-tab">
                            <!-- Motorsport -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg15.jpg);background-position: left;">
                                            <div class="app-device" style="right: -180px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device15.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                     <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Motorsport</h2>
                                                <h3>A Place to Shop Engine Management Systems</h3>
                                                <p>Here you can buy various engine management systems and accessories, like Ignition Only Management, Plug-In Engine Management, etc.</p>
                                                <div class="store-btn">
                                                    <a href="https://motorsport-electronics.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wooc-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Creative-it -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Creative-it-main.png);background-position: right;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Creative-it-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Creative-it</h2>
                                                <h3>A Place to Get Computer Sales & Repairs Services</h3>
                                                <p>It offers a complete range of computer sales and repair services to businesses, homes, and schools. </p>
                                                <div class="store-btn">
                                                    <a href="https://creative-it.ie/" target="_blank">
                                                        <img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wooc-mini.png" alt="Google Play" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sundayafternoons -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-bg17.jpg);background-position: left;">
                                            <div class="app-device" style="right:-40px"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device17.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Sundayafternoons</h2>
                                                <h3> An Online Shop to Get Varieties of Hats</h3>
                                                <p>Here you can buy hats of various types and accessories to meet your distinct hat needs.</p>
                                                <div class="store-btn">
                                                    <a href="https://www.sundayafternoons.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wooc-mini.png" alt="WooCommerce" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 365canvas -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                   
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/365canvas-main.png);background-position: right;">
                                            <div class="app-device" style="left: -215px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/365canvas-overlay.png" alt="App Device" /></div>
                                        </div>
                                    </div>
                                     <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>365canvas</h2>
                                                <h3>Get Personalized Photo Gifts</h3>
                                                <p>Here you can get your photos print on a mug, canvas, blanket, etc. to gift your loved ones. </p>
                                                <div class="store-btn">
                                                    <a href="https://365canvas.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wooc-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- crystalkayak -->
                            <div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Crystalkayak-main.png);background-position: left;">
                                            <!-- <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device17.png" alt="App Device" /></div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>crystalkayak</h2>
                                                <h3>An Online Store to Buy Commercial Grade Transparent Kayaks</h3>
                                                <p>It offers you an exceptional viewing experience by transforming the viewing area into a clear glass window to the underwater world below.</p>
                                                <div class="store-btn">
                                                    <a href="https://crystalkayak.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wooc-mini.png" alt="WooCommerce" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ATFA -->
                            <div class="app-item">
                                <div class="row align-items-center">
                                   
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Atfa.png);background-position: right;">
                                            <!-- <div class="app-device" style="left: -215px;"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/app-device18.png" alt="App Device" /></div> -->
                                        </div>
                                    </div>
                                     <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>ATFA</h2>
                                                <h3>A Timber Flooring Industry</h3>
                                                <p>Here you will get high-quality, industry-specific services, and technical information. It is led by its members </p>
                                                <div class="store-btn">
                                                    <a href="https://www.atfa.com.au/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/wooc-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- web -->
            <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="web-tab">
                <div class="emizentech-app-portfolio" id="other-apps">
                 <!-- tab-content -->
                    <div class="tab-content" id="myTabContent">
                       <!-- Sunday Afternoons -->
                        <div class="app-item order-md-1">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-2">
                                    <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/SundayAfternoons.png); background-position: right;">
                                        <div class="app-device" style="top:auto;bottom: 0;transform: translate(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Ezplumbingsupplies-overlay.png" alt="App Device"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 order-md-1">
                                    <div class="app-info">
                                        <div class="app-info-inner">
                                            <h2>Sunday Afternoons</h2>
                                            <h3>An Online Store to Buy Varieties of Hats</h3>
                                            <p>Here you can buy hats of various types to meet your distinct hat needs. Also, you can shop for other accessories also</p>
                                            <div class="store-btn">
                                                <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                <a data-toggle="tooltip" data-placement="top" title="Sunday Afternoons" href="https://www.sundayafternoons.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/web-icon.png" alt="Google Play" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- Slim Fast -->
                           <!--<div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Eatatflamingogrill.png); background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Leibundrebe-overlay.png" alt="App Device" /></div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Slim Fast</h2>
                                                <h3>Singles Mingle Online dating app is a chat app similar to any other chat dating app</h3>
                                                <p>Singles Mingle Online dating app is a chat app, similar to any other chat dating app where you can meet girls & guys and unlimited chatting with them</p>
                                                <div class="store-btn">
                                                  
                                                    <a href="http://www.eatatflamingogrill.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
                            <!-- Dagaanbod -->
                            <div class="app-item item-style-two order-md-1">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Dagaanbod.png); background-position: left;">
                                            <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Dagaanbod-overlya.png" alt="App Device"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Dagaanbod</h2>
                                                <h3>Know Best Offers Daily</h3>
                                                <p>This place lets you know about the best deals daily at competitive prices. </p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a data-toggle="tooltip" data-placement="top" title="Dagaanbod" href="https://www.dagaanbod.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/web-icon.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- Ezplumbingsupplies -->
                            <div class="app-item order-md-1">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-2">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Ezplumbingsupplies.png); background-position: right;">
                                            <div class="app-device" style="top:auto;bottom: 0;transform: translate(0);"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Ezplumbingsupplies-overlay.png" alt="App Device"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Ezplumbing supplies</h2>
                                                <h3>An Online Store for Shopping Plumbing Supplies</h3>
                                                <p>You can shop for various plumbing supplies from this store, like Faucets, Fittings, Heating, Tankless Products, etc. </p>
                                                <div class="store-btn">
                                                    <!-- <a href="#0"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> -->
                                                    <a href="https://www.ezplumbingsupplies.com/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/web-icon.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Eatatflamingogrill -->
                                <!--<div class="app-item item-style-two">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Eatatflamingogrill.png); background-position: left;">
                                          <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Leibundrebe-overlay.png" alt="App Device" /></div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-1">
                                        <div class="app-info">
                                            <div class="app-info-inner">
                                                <h2>Eatatflamingogrill</h2>
                                                <h3>Singles Mingle Online dating app is a chat app similar to any other chat dating app</h3>
                                                <p>Singles Mingle Online dating app is a chat app, similar to any other chat dating app where you can meet girls & guys and unlimited chatting with them</p>
                                                <div class="store-btn">
                                                   
                                                    <a href="http://www.eatatflamingogrill.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Mrpizzaria -->
                                <!--<div class="app-item order-md-1">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 order-md-2">
                                                <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Mrpizzaria.png); background-position: right;">
                                                    <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Mrpizzaria-overlay.png" alt="App Device"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 order-md-1">
                                                <div class="app-info">
                                                    <div class="app-info-inner">
                                                        <h2>Mrpizzaria</h2>
                                                        <h3>Singles Mingle Online dating app is a chat app similar to any other chat dating app</h3>
                                                        <p>Lorem ipsum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                        <div class="store-btn">
                                                           
                                                            <a href="http://www.mrpizzaria.co.uk/menu" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div> -->
                            <!-- Myfoodbasket -->
                            <!-- <div class="app-item item-style-two">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 order-md-1">
                                            <div class="app-bg" style="background-image: url(/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Myfoodbasket-main.png); background-position: left;">
                                                 <div class="app-device"><img src="/wp-content/themes/twentytwentyone-child/assets/images/app-portfolio/Myfoodbasket-overlay.png" alt="App Device"></div> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 order-md-1">
                                            <div class="app-info">
                                                <div class="app-info-inner">
                                                    <h2>Myfoodbasket</h2>
                                                     <h3>EZMatch - Dating, Make Friends and Meet New People</h3>
                                                    <p>Lorem ipsum sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                                    <div class="store-btn">
                                                          <a target="_blank" rel="noreferrer noopener nofollow" href="https://apps.apple.com/us/app/ezmatch-18-dating-chat-app/id1471508186" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/app-store.png" alt="Google Play"></a> 
                                                        <a href="https://www.myfoodbasket.co.uk/" target="_blank"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icons/shopware-mini.png" alt="Google Play" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>


        <!-- Emizentech Blog -->
        <section class="emizentech-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-title">
                            <h3>Recently</h3>
                            <h2>Blogs</h2>
                        </div>
                        <figure class="blog-item">
                            <img src="/wp-content/themes/twentytwentyone-child/assets/images/blog1.jpg" alt="Blog" width="640" height="474" />
                            <figcaption>
                                <h4>Personal</h4>
                                <h3><a href="<?php echo get_site_url(); ?>/blog/child-to-parent-communication-in-lwc.html">How To Use Child To Parent Communication In LWC In Salesforce</a></h3>
                                <a href="<?php echo get_site_url(); ?>/blog/child-to-parent-communication-in-lwc.html" class="blog-link">Read more</a>
                            </figcaption>
                        </figure>
                        <div class="call-block">
                            <div class="call-block-wrap">
                                <div class="emizentech-icon"><img src="/wp-content/themes/twentytwentyone-child/assets/images/icon3.png" alt="Call" width="42" height="42" /></div>
                                <div class="call-info">
                                    <h5>Have an idea?</h5>
                                    <p>Convert your app idea into profitable Business Mobile Application...<a href="enqiry.html">Talk to Expert</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <figure class="blog-item ml-lg-5">
                            <img src="/wp-content/themes/twentytwentyone-child/assets/images/blog2.jpg" alt="Blog" width="640" height="474" />
                            <figcaption>
                                <h4>Personal</h4>
                                <h3><a href="<?php echo get_site_url(); ?>/blog/how-to-fetch-records-using-lightning-data-service.html">How To Fetch Records By Lightning Data Service In Salesforce</a></h3>
                                <a href="<?php echo get_site_url(); ?>/blog/how-to-fetch-records-using-lightning-data-service.html" class="blog-link">Read more</a>
                            </figcaption>
                        </figure>
                        <figure class="blog-item ml-lg-5">
                            <img src="/wp-content/themes/twentytwentyone-child/assets/images/blog3.jpg" alt="Blog" width="640" height="474" />
                            <figcaption>
                                <h4>Personal</h4>
                                <h3><a href="<?php echo get_site_url(); ?>/blog/optimize-voice-search-for-ecommerce-store.html">How To Optimize Your eCommerce Store For Voice Search</a></h3>
                                <a href="<?php echo get_site_url(); ?>/blog/optimize-voice-search-for-ecommerce-store.html" class="blog-link">Read more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

      

  

        <!-- Emizentech Footer -->
      
           
 <?php  get_footer(); ?>
