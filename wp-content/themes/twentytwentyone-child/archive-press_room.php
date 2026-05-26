<?php get_header(); ?>

<style type="text/css">
:root{--fs-xs:12px;--fs-14:clamp(0.7rem,0.7rem + 0.146vw,0.875rem);--fs-16:clamp(0.8rem,0.8rem + 0.167vw,1rem);--fs-18:clamp(1rem,1rem + 0.104vw,1.125rem);--fs-20:clamp(1rem,1rem + 0.3125vw,1.25rem);--fs-22:clamp(1.125rem,1rem + 0.4vw,1.375rem);--fs-24:clamp(1.125rem,1rem + 0.625vw,1.5rem);--fs-28:clamp(1.25rem,1.05rem + 0.75vw,1.75rem);--fs-32:clamp(1.5rem,1.25rem + 0.833vw,2rem);--fs-36:clamp(1.25rem,1rem + 1.0417vw,2.25rem);--fs-42:clamp(2rem,1.4rem + 1.5vw,2.625rem);--fs-52:clamp(2.3rem,1.25rem + 1.6667vw,3.5rem);--fs-h1:clamp(2.75rem,2rem + 1.75vw,4.875rem);}
@media (max-width:1550px){
    :root{--fs-xs:8px;--fs-14:clamp(0.875rem,0.875rem + 0vw,0.875rem);--fs-16:clamp(0.875rem,0.875rem + 0vw,0.875rem);--fs-18:clamp(0.875rem,0.875rem + 0vw,0.875rem);--fs-20:clamp(1rem,1rem + 0vw,1rem);--fs-24:clamp(1.1rem,1rem + 0.625vw,1.1rem);--fs-32:clamp(1.3rem,1.25rem + 0.833vw,2rem);--fs-36:clamp(1.5rem,1rem + 0.65vw,1.75rem);--fs-52:clamp(2rem,1rem + 1.25vw,2.25rem);--fs-h1:clamp(3rem,1.5rem + 1.2vw,3rem);}
}
article{background:#F8FAFC;}
html,body,p,h1,h2,h3,h4,h5,h6{font-family:Poppins;}
section.hero-sec{background:#050E1F;color:#fff;margin-top:80px;position:relative;z-index:1;}
section.hero-sec .hero-container{   /* position: absolute;
            top: 50%;
            transform: translate(-50%,-50%);
            left: 50%;*/
z-index:1;width:100%;margin:0 auto;max-width:50%;}
section.hero-sec video{ /*   object-fit: fill;
        height: auto;*/
display:block;width:100%;position:absolute;z-index:-2;height:100%;top:0;object-fit:cover;object-position:bottom center;}
section.hero-sec:after{content:'';position:absolute;background:linear-gradient(45deg,#060d1b,#05111e,#061a2f);width:100%;height:140px;z-index:0;bottom:0;left:0;}
section.hero-sec:before{content:'';position:absolute;background:linear-gradient(45deg,#0000008a,#08172de0);width:100%;height:100%;z-index:-1;top:0;left:0}
h1 + p{font-size:20px;line-height:36px;max-width:1200px;margin:auto;}
.hero-container .btn.emizen-btn{background:linear-gradient(45deg,#015ad1,#01a0fa);border:0;}
.text-header span::selection{background:#3a5897;color:#fff;-webkit-background-clip:unset;-webkit-text-fill-color:#fff;}
.hero-couter{display:flex;align-items:center;justify-content:space-between;height:calc(100vh - 80px);flex-wrap:wrap;padding:50px 0 30px;}
h1{font-weight:700;font-size:var(--fs-h1);max-width:80%;padding-bottom:20px;margin:auto;line-height:1.3;}

/* marque slider */
:root{--size:clamp(20rem,1rem + 300vmin,20rem);--gap:calc(var(--size) / 5);--duration:70s;--scroll-start:0;--scroll-end:calc(-100% - var(--gap));}
.marquee{display:flex;user-select:none;gap:20px;padding-top:12px;width:100%;z-index:1;margin-top:auto;}
.marquee__group{gap:20px;min-width:100%;flex-shrink:0;display:flex;align-items:center;justify-content:space-around;gap:20px;animation:scroll-x var(--duration) linear infinite;}
.marquee-full-sect{padding:80px 0;overflow-x:hidden;}
.marquee div.marquee_group_item{padding:10px;height:auto;}
.marquee--vertical div.marquee_group_item{aspect-ratio:1;width:calc(var(--size) / 1.5);padding:calc(var(--size) / 6);}
.marquee img{max-width:110px;}
@keyframes fade{
    to{opacity:0;visibility:hidden;}
}
@keyframes scroll-x{
    from{transform:translateX(var(--scroll-start));}
    to{transform:translateX(var(--scroll-end));}
}
@media (prefers-reduced-motion:reduce){
    .marquee__group{animation-play-state:paused;}
}
.marquee--vertical{--mask-direction:to bottom;}
.marquee--vertical,.marquee--vertical .marquee__group{flex-direction:column;}
.marquee--vertical .marquee__group{animation-name:scroll-y;}
.marquee--reverse .marquee__group{animation-direction:reverse;animation-delay:-3s;}
@keyframes scroll-y{
    from{transform:translateY(var(--scroll-start));}
    to{transform:translateY(var(--scroll-end));}
}
/* end */

.text-header span{display:block;background:linear-gradient(90deg,#1da1f2 0%,     /* blue */
    #3ec6ff 40%,    /* cyan */
    #cfd8dc 75%,    /* light gray */
#ffffff 100%    /* white */);-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-style:italic;padding:0 20px;}
section.new-releases{padding:80px 0;}
.blog-header-title{font-weight:600;font-size:var(--fs-28);line-height:1.5;color:#0F172A;padding-left:15px;position:relative;margin-bottom:20px;}
.blog-header-title:before{content:'';position:absolute;background:#007CB0;width:5px;height:30px;border-radius:4px;top:50%;left:0;transform:translateY(-50%);}
.card-shadow-box{box-shadow:0px 4px 24px 0px #1A6DD41A;border:1px solid #E2E8F0;padding:40px;}
.card-head{display:flex;align-items:center;gap:15px;margin-bottom:15px;}
span.badge-custom{background:#007DB217;border:1px solid #007DB2;border-radius:100px;font-size:var(--fs-16);line-height:1.3;color:#007CB0;font-weight:600;padding:6px 12px;display:inline-block;margin-top:20px;}
span.release-date{font-size:var(--fs-14);line-height:1.4;opacity:35%;color:#0F1528;font-weight:400;}
h2.sec-title{font-weight:600;font-size:var(--fs-32);line-height:1.5;color:#0F172A;padding-bottom:15px}
.read-time{font-weight:500;font-size:16px;line-height:30px;color:#475569;}
p.hero-desc{color:#848990;font-size:var(--fs-20);line-height:1.85;}
.blogs-info{flex:0 0 45%;padding-right:40px;}
.card-shadow-box p{padding-bottom:30px;color:#475569;padding-bottom:30px;font-size:var(--fs-18);line-height:1.8;}
.press-room-img{flex:0 0 55%;}
.press-room-img img{margin-left:auto;display:block;}
.btn.emizen-btn{border-radius:40px;transition:all .4s;position:relative;z-index:1;overflow:hidden;background:#017DB2;border:1px solid #017DB2;padding:0.9em 1.5em;color:#fff;font-size:var(--fs-16);line-height:1.6;letter-spacing:0.16px;font-weight:600;}
.btn.emizen-btn:hover{color:#017DB2;background:transparent;}

button.btn.btn-primary.all-btn.emizen-btn.btn{background:#017DB2;border:1px solid #017DB2;padding:0.9em 1.5em;color:#fff;}
button.btn.btn-primary.all-btn.emizen-btn.btn:hover{color:#017DB2;background:transparent;}
button.btn.btn-primary.all-btn.emizen-btn.btn img{filter:brightness(0) invert(1);transform:rotate(45deg);width:20px;transition:all .4s;}
button.btn.btn-primary.all-btn.emizen-btn.btn:hover img{filter:none;transform:rotate(45deg) translatex(5px);width:20px;}

.press-search-wrap{position:relative;flex:0 0 30%;padding-bottom:25px}
.press-search-box input#press-search-input:focus{outline:none;}
.press-search-box:focus-within{border:1px solid #E2E8F0;}

.press-tab-box{display:flex;align-items:center;justify-content:space-between;}
.press-tab-box ul.nav{gap:8px;margin-bottom:0;padding-bottom:25px;max-width:70%;width:100%}
.press-tab-box ul.nav li a.nav-link{border:1px solid #E2E8F0;border-radius:100px;padding:0.76em 1.29em;background:#fff;font-weight:600;font-size:var(--fs-14);line-height:1.3;text-align:center;color:#007DB2;min-width:70px;}
.press-tab-box ul.nav li a.nav-link.active,.press-tab-box ul.nav li a.nav-link:hover{background:#007DB2;color:#fff;border-color:#007DB2;}
.press-title a,.press-title{color:#0F1528;font-weight:600;font-size:var(--fs-18);margin-top:15px;line-height:1.5;display:inline-block;width:100%;padding-bottom:10px;}
.press-title a{margin:0;padding-bottom:0;}
.press-thumb-img {
    position: relative;
    overflow: hidden;
}

.press-thumb-img img {
    transition: transform .8s ease;
}
.press-card:hover
.press-thumb-img  img {
    transform: scale(1.15);
}

.press-card:hover a {
    color: #007db2;
}
.press-card:hover .press-title{color:#007db2;}
.press-desc{font-size:var(--fs-16);line-height:1.4;font-weight:400;padding-bottom:14px;color:#007DB2;}
.press-footer > span{font-size:var(--fs-16);color:rgb(15 21 40 / 58%);float:left;}
.img-anim img{transition:all .4s;width:100%;}
.img-anim:hover img{transform:scale(1.1);}
.counter-title{font-size:var(--fs-32);line-height:1.9;font-weight:600;color:#01abff;}
.counter-title .emizentech-counter{color:#fff;line-height:44px;}
.counter-info.mx-auto{color:#898e95;font-size:var(--fs-16);line-height:1.4;font-weight:600;}
.bg-light-clr{background:#F8FAFC;padding-bottom:70px;}
.sec-cta{max-width:1600px;background:url(https://emizentech.com/wp-content/uploads/2026/04/CTA.png) no-repeat center center / 100% 100%;border-radius:20px;margin:80px auto 0;padding:60px 0;}
.sec-cta h2{color:#fff;}
.sec-cta p{max-width:732px;margin:0 auto 20px;font-size:var(--fs-16);line-height:1.6}
.sec-cta h2.sec-title{font-size:var(--fs-36);line-height:1.4;padding-bottom:15px;}
.sec-cta .btn.emizen-btn{color:#0F1528;background:#fff}
.sec-cta .btn.emizen-btn:hover{color:#fff;background:transparent;}
a.btn.emizen-btn img{filter:brightness(0) invert(1);transform:rotate(45deg);width:20px;transition:all .4s;}
a.btn.emizen-btn:hover img{filter:none;transform:rotate(45deg) translatex(5px);width:20px;}
a.emizen-btn:after,button.btn.btn-primary.all-btn.emizen-btn.btn:after{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#fff;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out;transform:translate3d(0px,110px,0px) scale3d(1,1,1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg,0deg);transform-style:preserve-3d;}
a.btn.emizen-btn:hover:after,button.btn.btn-primary.all-btn.emizen-btn.btn:hover:after{-webkit-transform:scaleY(1);transform:scaleY(1)}
.sec-cta .btn.emizen-btn:after{background:#007db2;}
.sec-cta .btn.emizen-btn:hover{color:#fff;}
.sec-cta a.btn.emizen-btn img{filter:none;transform:none;width:auto;}
.sec-cta a.btn.emizen-btn:hover img{filter:brightness(0) invert(1);}
.all-release-posts .card-container .tab-pane .row{gap:20px  0;}
.our-sucess-sec{margin-top:30px;}
.press-footer{display:flex;align-items:center;justify-content:space-between;}
.press-footer > span.read-time{color:#007DB2;font-size:var(--fs-16);font-weight:600;line-height:1.5;}
.row.g-4{gap:30px 0;}
.card-shadow-box span.read-time{font-weight:400;}
.rounded-pill.hero-badge{background:#09405d9c;display:inline-block;padding:10px 20px;color:#02a9fc;border:1px solid #0a4b78;text-transform:uppercase;font-weight:600;margin-bottom:20px;}
.rounded-pill.hero-badge:before{content:'';position:relative;background:#017db2;width:10px;height:10px;border-radius:100%;display:inline-block;margin-right:7px;}
span.card-badge{border-radius:100px;background:#007DB21A;font-size:var(--fs-14);line-height:1.4;color:#007CB0;font-weight:600;padding:6px 12px;border:1px solid #E2E8F0;}
a.more-link{display:none;}
button#press-search-clear{background:transparent;color:#000;opacity:1;font-weight:600;}
.press-search-no-results{padding:0;}

@media(min-width:1481px) and (max-width:1750px){
    .our-sucess-sec{margin-top:20px;}
    .press-search-wrap,.press-tab-box ul.nav{padding-bottom:15px;}
}
@media(max-width:1480px){
    .hero-couter{padding-bottom:20px}
    .sec-cta h2.sec-title{/*font-size:30px;line-height:44px;*/}
    h2.sec-title{/*font-size:26px;line-height:36px;*/}
    .sec-cta{margin:60px 0 0;padding:40px 0;}
    .blog-header-title{font-size:23px;line-height:34px;}
    section.new-releases{padding:55px 0;}
    .card-shadow-box{padding:27px;}
    .press-search-wrap,.press-tab-box ul.nav{padding-bottom:15px;}
    .press-search-box input#press-search-input{padding:9px 0;}
    .our-sucess-sec{margin-top:20px;}
}
@media(min-width:1281px) and (max-width:1380px){
    .our-sucess-sec{margin-top:10px;}
    .press-tab-box ul.nav li a.nav-link{padding:0.76em 1.10em;}
    section.hero-sec video{height:100%}
}
@media(min-width:1200px) and (max-width:1280px){
    section.hero-sec video{object-position:center center;height:auto;}
    section.hero-sec:after{height:270px;}
}
@media(max-width:1199px){
    section.hero-sec .hero-container{max-width:70%}
    section.hero-sec:after{height:110px}
    .card-shadow-box{padding:20px;}
    section.new-releases{padding:40px 0}
    section.hero-sec video{display:none;}
    .hero-couter{height:auto;gap:50px 0;padding:80px 0;}
}
@media(min-width:992px) and (max-width:1025px){
    h1{font-size:48px;line-height:63px;}
}
@media(max-width:991px){
    section.hero-sec .hero-container{max-width:100%}
    span.badge-custom{padding:5px 9px;margin-top:10px;}
    a.btn.emizen-btn{padding:8px 13px;font-size:15px;}
    span.read-time{display:inline-block;font-size:14px;padding:0;}
    .more-blogs-btn{padding:20px 0 0;}
    .sec-cta p{max-width:100%;margin:0 auto 10px;}
    .bg-light-clr{background:#F8FAFC;padding-bottom:40px;}
    .sec-cta{background:linear-gradient(45deg,#000000,#0a5d92);max-width:1600px;border-radius:20px;margin:40px auto 0;padding:30px 0;}
    section.hero-sec{min-height:auto;display:block;margin-top:90px;padding:60px 0;}
    .blogs-info{flex:0 0 100%;padding:0;}
    .press-title a{font-size:var(--fs-20);}
    .press-room-img{flex:0 0 100%;order:-1;margin-bottom:20px;}
    .hero-couter{padding:50px 0;}
    .card-shadow-box .row{flex-direction:column-reverse;gap:20px 0;}
}
@media(max-width:767px){
    h1{font-size:var(--fs-52);max-width:100%;line-height:1.3;}
    .hero-couter{height:auto;gap:20px 0;padding:10px 0;}
    .rounded-pill.hero-badge{padding:6px 10px;font-size:13px;margin-bottom:10px;}
    .rounded-pill.hero-badge:before{width:7px;height:7px;margin-right:0;}
    p.hero-desc{font-size:15px;line-height:26px;}
    .card-shadow-box p{padding-bottom:15px;font-size:15px;line-height:24px;}
    .blog-header-title{padding-left:10px;}
    .press-tab-box ul.nav{gap:5px;margin-bottom:20px;flex-wrap:wrap;}
    h1 + p{font-size:17px;line-height:26px}
    .our-sucess-sec{margin-top:0;}
    section.hero-sec{padding:30px 0;}
    section.hero-sec .hero-container{max-width:100%;position:static;transform:none;}
    .blog-header-title{font-size:21px;line-height:30px;margin-bottom:15px;}
    section.hero-sec:before{z-index:-1;}
    section.hero-sec:after{display:none;}
    .press-footer > span.read-time,.press-footer > span{font-size:14px;line-height:22px;}
    button.btn.btn-primary.all-btn.emizen-btn.btn,.btn.emizen-btn{padding:11px 10px;font-size:14px;}
    .counter-title{font-size:22px;}
    .counter-info.mx-auto{font-size:14px;}
    .skill-dsc{flex:0 0 50%;padding:5px;}
    .marquee__group{justify-content:center;align-items:center;}
    .press-tab-box{flex-wrap:wrap;}
    .press-tab-box ul.nav{flex:0 0 100%;padding-bottom:0;max-width:100%;}
    .press-tab-box ul.nav li a.nav-link{padding:8px 10px;font-weight:500;font-size:14px;}
    .press-search-wrap{flex:0 0 100%;padding-left:0;padding-bottom:10px;}
    .press-search-box input#press-search-input{border:0;font-size:var(--fs-16);padding:7px 0;margin:0;font-size:15px;}
}


</style>    
<!-- ===================== SEARCH CSS ===================== -->
<style>

.press-search-box {
    display: flex;
    align-items: center;
    border: 1px solid #E2E8F0;
    border-radius: 8px;
    padding: 0 14px;
    background: #fff;
    transition: border-color 0.2s;
    max-width: 480px;
    border-radius: 8px;
}
.press-search-box input#press-search-input {
    border: 0;
    padding: 14px 0;
    margin: 0;
}
.press-search-box:focus-within { border-color: #0d6efd; }
.search-icon { font-size: 16px; margin-right: 8px; color: #888; }
.press-search-input {
    border: none;
    outline: none;
    width: 100%;
    font-size: 15px;
    background: transparent;
}
.press-search-clear {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 14px;
    color: #999;
    padding: 0;
}
.press-search-clear:hover { color: #333; }
.press-search-status {
    margin-top: 6px;
    font-size: 13px;
    color: #666;
    position: absolute;
    min-height: 20px;
    bottom: 0;
    left: 0;
}
.press-search-no-results {
    text-align: center;
    padding: 40px 0;
    font-size: 16px;
    color: #888;
    width: 100%;
}
</style>
<section class="hero-sec position-relative overflow-hidden">
   <div class="hero-couter">
    <div class="hero-container text-center">
        <div class="container">

            <h1 class="text-header mb-0">Where The World Writes About <span> Emizentech </span></h1>
            <p class="hero-desc pb-2 mb-lg-2 mx-lg-0 mx-auto">The latest news, product announcements, partnerships, and company milestones from Emizentech - one of the world's leading technology solutions providers.</p>
             
             <div class="our-sucess-sec mb-4">
        <div class="d-flex flex-wrap justify-content-lg-between justify-content-center">
            <div class="skill-dsc position-relative text-center emiz-pr-counter pb-md-0 pb-2">
                <div class="counter-title"><span class="emizentech-counter">100</span>+</div>
                <div class="counter-info mx-auto">Media Coverage</div>
            </div>
            <div class="skill-dsc position-relative text-center emiz-pr-counter pb-md-0 pb-2">
                <div class="counter-title">Offices in </div>
                <div class="counter-info mx-auto">5 Countries</div>
            </div>
            <div class="skill-dsc position-relative text-center emiz-pr-counter pb-md-0 pb-2">
                <div class="counter-title"><span class="emizentech-counter">500</span>+ </div>
                <div class="counter-info mx-auto">Global Clients</div>
            </div>
            <div class="skill-dsc position-relative text-center emiz-pr-counter pb-md-0 pb-2">
                <div class="counter-title"><span class="emizentech-counter"> 12</span>+ </div>
                <div class="counter-info mx-auto">Years in Tech</div>
            </div>
        </div>
    </div>
            <a href="https://emizentech.com/enquiry.html" class="btn emizen-btn"> Let’s Connect<img class="ml-1" src="https://emizentech.com/wp-content/uploads/2026/02/btn-arrow.svg" width="15" height="12" alt="arrow"> </a> 
        </div>
    </div>
<div class="marquee">
    <div class="marquee__group">
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/appfutura.png" class="insdrstry-imgg" alt="rebs" width="276" height="52">
            </div>
        </div>
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/app-insight-1.png" class="insdrstry-imgg" alt="rebs" width="170" height="48">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/Crunchbase_world.png" class="insdrstry-imgg" alt="rebs" width="300" height="43">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/DesignRush1.png" class="insdrstry-imgg" alt="rebs" width="300" height="71">
            </div>
        </div>
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/forbes-2.png" class="insdrstry-imgg" alt="rebs" width="202" height="52">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/g2.png" class="insdrstry-imgg" alt="rebs" width="72" height="70">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/goodfirmscos.png" class="insdrstry-imgg" alt="rebs" width="300" height="45">
            </div>
        </div>
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/techreviews.png" class="insdrstry-imgg" alt="rebs" width="900" height="38">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/top_developers-1.png" class="insdrstry-imgg" alt="rebs" width="300" height="50">
            </div>
        </div>
         
        
        
    </div>
    <div aria-hidden="true" class="marquee__group">
      <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/appfutura.png" class="insdrstry-imgg" alt="rebs" width="276" height="52">
            </div>
        </div>
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/app-insight-1.png" class="insdrstry-imgg" alt="rebs" width="170" height="48">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/Crunchbase_world.png" class="insdrstry-imgg" alt="rebs" width="300" height="43">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/DesignRush1.png" class="insdrstry-imgg" alt="rebs" width="300" height="71">
            </div>
        </div>
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/forbes-2.png" class="insdrstry-imgg" alt="rebs" width="202" height="52">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/g2.png" class="insdrstry-imgg" alt="rebs" width="72" height="70">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/goodfirmscos.png" class="insdrstry-imgg" alt="rebs" width="300" height="45">
            </div>
        </div>
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/techreviews.png" class="insdrstry-imgg" alt="rebs" width="900" height="38">
            </div>
        </div>
        
        <div class="marquee_group_item">
            <div class="instry-iconbox">
                <img src="https://emizentech.com/wp-content/uploads/2026/04/top_developers-1.png" class="insdrstry-imgg" alt="rebs" width="300" height="50">
            </div>
        </div>
        
    </div>
    </div>
</div>
   <video src="https://emizentech.com/wp-content/uploads/2026/04/blog-video.mp4" autoplay="autoplay" loop="loop" muted="" controls="controls" width="1920" height="1080"></video>
</section>
<div class="bg-light-clr">
<section class="new-releases">
    <div class="container">
        <div class="blog-header-title">Featured Release</div>
        <div class="card-shadow-box">
            <div class="d-flex flex-wrap justify-content-lg-between">

                <?php
                // STEP 1: Try to get featured post
                $featured = new WP_Query(array(
                    'post_type' => 'press_room',
                    'posts_per_page' => 1,
                    'meta_query' => array(
                        array(
                            'key' => 'is_featured',
                            'value' => '1',
                            'compare' => '=',
                        ),
                    ),
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));

                // STEP 2: If no featured post, get latest post
                if (!$featured->have_posts()) {
                    $featured = new WP_Query(array(
                        'post_type' => 'press_room',
                        'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ));
                }

                // STEP 3: Display post
                if ($featured->have_posts()) :
                    while ($featured->have_posts()) : $featured->the_post();
                ?>

                <!-- LEFT CONTENT -->
                <div class="blogs-info">
                    <div class="card-head">
                        <span class="card-badge">
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'press_category');
                            if ($categories && !is_wp_error($categories)) {
                                echo esc_html($categories[0]->name);
                            }
                            ?>
                        </span>

                        <span class="release-date">
                            <?php echo get_the_date(); ?>
                        </span>
                    </div>

                    <h2 class="sec-title"><?php the_title(); ?></h2>

                    <p class="ps-disc"><?php the_excerpt(); ?></p>

                    <a href="<?php echo get_permalink(); ?>" class="btn emizen-btn">
                        Read Full Release
                        <img class="ml-1" src="https://emizentech.com/wp-content/uploads/2026/02/btn-arrow.svg" width="15" height="12" alt="arrow">
                    </a>

                    <span class="read-time ml-md-3">
                        <?php echo get_post_read_time(get_the_ID()); ?> min read
                    </span>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="press-room-img">
                    <img 
                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" 
                        alt="<?php the_title_attribute(); ?>" 
                        class="img-fluid" 
                        width="807" 
                        height="538"
                    >
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                ?>

                <!-- NO POSTS FOUND -->
                <p>No posts found.</p>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>



<div class="container">

    <!-- Header -->
    <div class="mb-3">
        <div class="text-left blog-header-title pb-0">All Press Releases</div>
    </div>

   

    <!-- Filters -->
    <div class="press-tab-box">
        <ul class="nav nav-pills " id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all"
                    role="tab" aria-controls="pills-all" aria-selected="true" data-category="all">All</a>
            </li>
            <?php
            $categories = get_terms(array(
                'taxonomy' => 'press_category',
                'hide_empty' => false,
            ));
            foreach ($categories as $category) { ?>
                <li class="nav-item">
                    <a class="nav-link" 
                        id="pills-<?php echo esc_attr($category->slug); ?>-tab"
                        data-toggle="pill"
                        href="#pills-<?php echo esc_attr($category->slug); ?>"
                        role="tab"
                        aria-controls="pills-<?php echo esc_attr($category->slug); ?>"
                        data-category="<?php echo esc_attr($category->slug); ?>">
                        <?php echo esc_html($category->name); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
         <!-- Search Bar -->
    <div class="press-search-wrap ">
        <div class="press-search-box">
            <span class="search-icon"><img src="https://emizentech.com/wp-content/uploads/2026/04/search-icon.png" width="24" alt="srach" height="24"></span>
            <input 
                type="text" 
                id="press-search-input" 
                class="press-search-input" 
                placeholder="Search press releases..." 
                autocomplete="off"
            >
            <button class="press-search-clear" id="press-search-clear" style="display:none;">&#10005;</button>
        </div>
        <div id="press-search-status" class="press-search-status"></div>
    </div>
    </div>

    <?php $posts_per_page = 6; ?>

    <div class="tab-content mt-3" id="pills-tabContent">

        <!-- ALL TAB -->
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
            <div class="row g-4" id="press-grid-all">
                <?php
                $total_posts = wp_count_posts('press_room')->publish;
                $cat_press = new WP_Query(array(
                    'post_type'      => 'press_room',
                    'posts_per_page' => $posts_per_page,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ));
                while ($cat_press->have_posts()) {
                    $cat_press->the_post();
                    get_template_part('template-parts/press-card'); // use partial or inline below
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="press-card">
                            <div class="press-thumb-img"> <?php the_post_thumbnail('medium_large', ['class' => 'press-img img-fluid']); ?></div>
                            <div class="press-body">
                                <span class="badge-custom">
                                    <?php echo esc_html(get_the_terms(get_the_ID(), 'press_category')[0]->name); ?>
                                </span>
                                <div class="press-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="press-desc">
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                </div>
                                <div class="press-footer">
                                    <span><?php echo get_the_date(); ?></span>
                                    <span class="read-time"><?php echo get_post_read_time(get_the_ID()); ?> min read →</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); ?>
            </div>

            <div id="load-more-wrap-all">
                <?php if ($total_posts > $posts_per_page): ?>
                    <div class="text-center mt-5">
                        <button onclick="loadMore('all')"
                            class="btn btn-primary load-btn all-btn emizen-btn"
                            data-offset="<?php echo $posts_per_page; ?>">
                            Load More Releases
                            (<span class="post-left"><?php echo $total_posts - $posts_per_page; ?></span> remaining) <img class="ml-1" src="https://emizentech.com/wp-content/uploads/2026/02/btn-arrow.svg" width="15" height="12" alt="arrow">
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- CATEGORY TABS -->
        <?php foreach ($categories as $category):
            $cat_press = new WP_Query(array(
                'post_type'      => 'press_room',
                'posts_per_page' => $posts_per_page,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'tax_query'      => array(array(
                    'taxonomy' => 'press_category',
                    'field'    => 'slug',
                    'terms'    => $category->slug,
                )),
            ));
            if (!$cat_press->have_posts()) continue;
            $cat_total_posts = $cat_press->found_posts;
        ?>
            <div class="tab-pane fade" id="pills-<?php echo esc_attr($category->slug); ?>" role="tabpanel">
                <div class="row g-4" id="press-grid-<?php echo esc_attr($category->slug); ?>">
                    <?php while ($cat_press->have_posts()) { $cat_press->the_post(); ?>
                        <div class="col-md-4">
                            <div class="press-card">
                                <?php the_post_thumbnail('medium_large', ['class' => 'press-img img-fluid']); ?>
                                <div class="press-body">
                                    <span class="badge-custom">
                                        <?php echo esc_html(get_the_terms(get_the_ID(), 'press_category')[0]->name); ?>
                                    </span>
                                    <div class="press-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="press-desc">
                                        <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                    </div>
                                    <div class="press-footer">
                                        <span><?php echo get_the_date(); ?></span>
                                        <span class="read-time"><?php echo get_post_read_time(get_the_ID()); ?> min read →</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } wp_reset_postdata(); ?>
                </div>

                <div id="load-more-wrap-<?php echo esc_attr($category->slug); ?>">
                    <?php if ($cat_total_posts > $posts_per_page): ?>
                        <div class="text-center mt-5">
                            <button onclick="loadMore('<?php echo esc_attr($category->slug); ?>')"
                                class="btn btn-primary load-btn <?php echo esc_attr($category->slug); ?>-btn"
                                data-offset="<?php echo $posts_per_page; ?>">
                                Load More Releases
                                (<span class="post-left"><?php echo $cat_total_posts - $posts_per_page; ?></span> remaining)
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- ===================== SEARCH JS ===================== -->
<script>
(function () {
    const ajaxUrl = '<?php echo admin_url("admin-ajax.php"); ?>';
    const nonce   = '<?php echo wp_create_nonce("press_search_nonce"); ?>';

    let searchTimeout = null;
    let activeCategory = 'all';
    let searchQuery    = '';

    // Track active tab
    document.querySelectorAll('#pills-tab .nav-link').forEach(function (tab) {
        tab.addEventListener('click', function () {
            activeCategory = this.getAttribute('data-category') || 'all';
            if (searchQuery.length >= 3) {
                doSearch(searchQuery, activeCategory);
            }
        });
    });

    const input     = document.getElementById('press-search-input');
    const clearBtn  = document.getElementById('press-search-clear');
    const statusEl  = document.getElementById('press-search-status');

    input.addEventListener('input', function () {
        searchQuery = this.value.trim();
        clearBtn.style.display = searchQuery ? 'inline-block' : 'none';

        clearTimeout(searchTimeout);

        if (searchQuery.length === 0) {
            resetSearch();
            return;
        }

        if (searchQuery.length < 3) {
            statusEl.textContent = 'Type at least 3 characters to search...';
            return;
        }

        statusEl.textContent = 'Searching...';
        searchTimeout = setTimeout(function () {
            doSearch(searchQuery, activeCategory);
        }, 400);
    });

    clearBtn.addEventListener('click', function () {
        input.value = '';
        searchQuery = '';
        clearBtn.style.display = 'none';
        resetSearch();
    });

    function doSearch(query, category) {
        const gridId = 'press-grid-' + category;
        const grid   = document.getElementById(gridId);
        if (!grid) return;

        statusEl.textContent = 'Searching...';

        fetch(ajaxUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
                action:   'press_search',
                nonce:    nonce,
                query:    query,
                category: category,
            }),
        })
        .then(r => r.json())
        .then(function (res) {
            if (!res.success) {
                statusEl.textContent = 'Something went wrong.';
                return;
            }

            // Hide load-more while searching
            const loadWrap = document.getElementById('load-more-wrap-' + category);
            if (loadWrap) loadWrap.style.display = 'none';

            if (res.data.html) {
                grid.innerHTML = res.data.html;
                statusEl.textContent = res.data.count + ' result' + (res.data.count !== 1 ? 's' : '') + ' found for "' + query + '"';
            } else {
                grid.innerHTML = '<div class="press-search-no-results">No results found for "<strong>' + query + '</strong>"</div>';
                statusEl.textContent = '';
            }
        })
        .catch(function () {
            statusEl.textContent = 'Search failed. Please try again.';
        });
    }

    function resetSearch() {
        statusEl.textContent = '';
        // Restore load-more buttons
        document.querySelectorAll('[id^="load-more-wrap-"]').forEach(function (el) {
            el.style.display = '';
        });
        // Reload page to restore original grids (simple approach)
        location.reload();
    }

    // Make loadMore search-aware
    window.loadMore = function (category) {
        const btn    = document.querySelector('.load-btn.' + (category === 'all' ? 'all' : category) + '-btn');
        const grid   = document.getElementById('press-grid-' + category);
        const offset = parseInt(btn.getAttribute('data-offset'));

        fetch(ajaxUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
                action:   'press_load_more',
                nonce:    nonce,
                category: category,
                offset:   offset,
                query:    searchQuery,
            }),
        })
        .then(r => r.json())
        .then(function (res) {
            if (!res.success) return;
            grid.insertAdjacentHTML('beforeend', res.data.html);
            const newOffset = offset + res.data.count;
            btn.setAttribute('data-offset', newOffset);
            const remaining = parseInt(btn.querySelector('.post-left').textContent) - res.data.count;
            btn.querySelector('.post-left').textContent = remaining;
            if (remaining <= 0) btn.closest('.text-center').remove();
        });
    };
})();
</script>


<div class="container">
    <div class="sec-cta text-center px-4">
        <h2 class="sec-title">Stay Ahead with Emizentech News</h2>
        <p class="text-white">Get the latest press releases, product launches, and company milestones delivered straight to your inbox — no spam, just signal.</p>
        <a href="https://emizentech.com/enquiry.html" class="btn emizen-btn">Contact PR Team <img class="ml-1" src="https://emizentech.com/wp-content/uploads/2026/03/btn-arrow.svg" width="15" height="12" alt="arrow"></a>
    </div>
</div>

</div>

<script>
    function loadMore(category) {
        // AJAX call to load more posts

        let offset = jQuery('.' + category + '-btn').attr('offset') ? parseInt(jQuery('.' + category + '-btn').attr('offset')) : <?php echo $posts_per_page; ?>;
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'load_more_press',
                category: category,
                offset: offset,
                posts_per_page: <?php echo $posts_per_page; ?>
            },
            success: function (response) {
                offset += <?php echo $posts_per_page; ?>;
                jQuery('.' + category + '-btn').attr('offset', offset);
                // Append new posts to the grid
                $('#pills-' + category + ' .row.g-4').append(response);
                // Update offset for next load
                // Update Load More button state
                if (offset >= parseInt($('.post-left').text())) {
                    $('.load-btn').hide();
                } else {
                    $('.post-left').text(parseInt($('.post-left').text()) - <?php echo $posts_per_page; ?>);
                }
            }
        });
    }
</script>
<?php get_footer(); ?>