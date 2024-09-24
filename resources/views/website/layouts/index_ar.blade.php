<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> أكاديمية ترتيل </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.jpg')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">
 <style>
     @media screen and (max-width: 768px) {
         .single-slider .hero__caption {
             text-align: center;
         }
         .single-slider .hero-man {
             display: none;
         }
         .single-slider .extra_logo {
             display: flex;
             align-items: center;
             justify-content: center;
         }
         .about-caption{
             text-align: center;
         }
         #left_logo{
             display: block;
         }
         #icons{
             display: none;
         }
     }

     .pricing-content{position:relative;}
     .pricing_design{
         position: relative;
         margin: 0px 15px;
     }
     .pricing_design .single-pricing{
         background:#554c86;
         padding: 60px 40px;
         border-radius:30px;
         box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
         position: relative;
         z-index: 1;
     }
     .pricing_design .single-pricing:before{
         content: "";
         background-color: #fff;
         width: 100%;
         height: 100%;
         border-radius: 18px 18px 190px 18px;
         border: 1px solid #eee;
         position: absolute;
         bottom: 0;
         right: 0;
         z-index: -1;
     }
     .price-head{}
     .price-head h2 {
         margin-bottom: 20px;
         font-size: 26px;
         font-weight: 600;
     }
     .price-head h1 {
         font-weight: 600;
         margin-top: 30px;
         margin-bottom: 5px;
     }
     .price-head span{}

     .single-pricing ul{list-style:none;margin-top: 30px;}
     .single-pricing ul li {
         line-height: 36px;
     }
     .single-pricing ul li i {
         background: #554c86;
         color: #fff;
         width: 20px;
         height: 20px;
         border-radius: 30px;
         font-size: 11px;
         text-align: center;
         line-height: 20px;
         margin-right: 6px;
     }
     .pricing-price{}

     .price_btn {
         background: #554c86;
         padding: 10px 30px;
         color: #fff;
         display: inline-block;
         margin-top: 20px;
         border-radius: 2px;
         -webkit-transition: 0.3s;
         transition: 0.3s;
     }
     .price_btn:hover{background:#0aa1d6;}
     a{
         text-decoration:none;
     }

     .section-title {
         margin-bottom: 60px;
     }
     .text-center {
         text-align: center!important;
     }
     @media screen and (max-width: 768px) {
         ul li a i {
             font-size: 10px;
         }
     }


 </style>

</head>
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('logo.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area" dir="rtl">
        <div class="main-header">
            <div class="header-bottom header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2" id="left_logo">
                            <div>
                                <a href="{{route('arabic')}}"><img src="{{asset('logo.png')}}" style="width: 30%" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}">الرئيسية</a></li>
                                            <li><a href="#ABOUT">عنا</a></li>
                                            <li><a href="#COURSES">دوراتنا</a></li>
                                            <li><a href="#PRICES">الأسعار</a></li>
                                            <li><a href="#ENROLL">التسجيل</a></li>
                                            <li><a href="{{route('arabic')}}">عربي</a></li>
                                            <li><a href="{{url('/')}}">انجليزي</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="main-menu d-block">
                                    <ul id="icons">
                                        <li><a href="#"><i class="fab fa-twitter" style="font-size: 15px"></i></a></li>
                                        <li><a href="https://www.facebook.com/tarteelacademy0?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f" style="font-size: 20px"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in" style="font-size: 15px"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g" style="font-size: 15px"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area" dir="rtl">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                            <div class="extra_logo d-flex justify-content-center">
                                <img src="{{asset('logo.png')}}" style="width: 50%">
                            </div>
                            <div class="hero__caption text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" style="font-weight: bold ">إبدأ  تعلم القرآن مع أكاديمية ترتيل</h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn d-flex justify-content-center">
                                    <a href="#ENROLL" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">التسجيل الآن </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Count Down Start -->
    <div class="count-down-area pt-90 pb-60 section-bg" data-background="assets/img/gallery/section_bg01.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="69px">
                                        <image  x="0px" y="0px" width="72px" height="69px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABFCAMAAADerVCrAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB11BMVEUXmnP///8XmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnMXmnP///8qvp8aAAAAm3RSTlMAAFDr4uMPOMDMwtJjMzzHMMguXAUTrvgdzuXda/4UIr+7NTa2pVX1F7iKibnzFUFEvYcv8j7xn9+ewYPkQvARLeoCLMOAc3KBRdaFhoRW+u5XA/wIOWTaeA4rk69LHJyLKdH2qeyiqgwYs6Cn3Foktw1MbwlYaZk0lNmCEkftSRDUGVsHJaiyuhoKd+jnrfQb4Uislgt118pnASfW+mcAAAABYktHRAH/Ai3eAAAAB3RJTUUH5AUFDBg2+oR40gAAAoxJREFUWMPtmOlfEkEYxycxAQVCFJUVSMpVCBBRFMmENMxCUFO7Lc3yyg47zG677/uu3z/bLtfu+pl9sQu86BO/F+wzv332y87D7MwOhGRUoYEqaSqIVJXqOMD2LSCgiqhQFVBKkFanVySdVgZUrbQ+1TKgGhiMCmRAjSzIpKQ+pjKoDCopaAfMSkBm1MqALHVKOITUWUo9jRQNVG9VRrHWy4AaGpuUcJoaG/6ZcVQGlUHFANnANCsQA5sMyO5QtvQ77HLTiHOnIjlLPB+1uFSoZStol9pXSGC3BNQKtk2VWLSKOVq0u9WUiBB3O7Sipgd71HEI8cInNEzwd9CSnIFOkQJOWk6HX/Q8BNFFy+kOScsaMtOyuhDMhT3opS5EYfSJ34b7EKFlWXvRkw33op/afQZGcdOIfdS0fugywQCiMVrCfgwOidtDgzhAy4tFMZAO4himftNBsFKDxQg18RDi/OEwkKDuEDRgpAYDDTUxAXRyoFH1T4egZPrnCyvZONAUTg+fFLykQHmR4j7HMD5RoMZxhANNRqYKrdBUZDJ9Z9OxAjVdaG0k2lYklUH/NwiIHJUMrGO13KA/fuKk2Dt1OsqZM2ckiW0+zqtMns2MRTIbB+aEs+fmcX4mfIHBQkAwRwAbu+gClpbz3ooHuLh66TJwhWS7dnUNvmvZ09eBGzf5YN2BW7lrNjB/mz+67+BubrfSPYF79/ngwQKS+RqN4uEmbz4aRii3cKw8xsYTPjDrhWXIADzlj8/sQO6vrOU1eJ5nQWQdaH6x+hJ49Tp/729YILjI6oG3QidN7/B+KfzhIxKiBWUOiM9mQORT6jNXOdeYpJpfvnKe/5tF7H3/8ZMzf/3+Iza1EeAvtr05pHWuTqcAAAAASUVORK5CYII=" />
                                    </svg>
                                    <p class="color-green">دولة</p>

                                    <span class="counter color-green">أكثر من 25</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="79px">
                                        <image  x="0px" y="0px" width="72px" height="79px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABPCAMAAAB/NnPNAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACo1BMVEX///8tMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJItMJL///9r5VNNAAAA33RSTlMAACpgeYRyURmH3McEAnb16q6Shb3VOg23sT8DDGLb+2kKSQmYD6PjJGv+72dOLlDAfNdwXvxI4QaRsJ5/GzXxFwdcbfAeFflCdPIvuHum/ZUcZovQWLwllhYrq/qAFFaGmWX09zaX5KETzczuLZt6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" />
                                    </svg>
                                    <p class="color-blue">طالب</p>
                                    <span class="counter color-blue">أكثر من 200 </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="71px">
                                        <image  x="0px" y="0px" width="72px" height="71px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABHCAMAAACTZfGgAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACvlBMVEX///8tmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhctmhf////Z9I0RAAAA6HRSTlMAALv77U7Cw9xSvDlMUGXKT1MeBO5aEf3YVB/vqSMCAxI4Lof3EMfXuqcKVoNFLGjIUQ8NXXBsZMyWGqYVKi2EDkFtAS86NjNA8x3njJoUQ18IoGvkzWmkcmNg36uvwLRKF/6bJbnGfRvpsPWtZ4shdOwMNPQJxDH5Sc6Bar+jwSLL1tOyJpN30fwLtzwyWBiXgHqClTtX8jVEQhzUeFwpE52KtVvqlHF2IBaz8cXwKDfgYX7biIXJpTDdBtIH2Yn45q5I3nt8Sz2xeXPjz5j64Z7aK1Xihpz2n+Wiqrgkb5lHGai96Kx1fW7M+gAAAAFiS0dEAIgFHUgAAAAHdElNRQfkBQUMHhhwCNKbAAAEtklEQVRYw+2Y+1dUVRTHOYSAolgwiAQCQgiITigakAQiMChkIK8B8hEkSAQU6PhCI95vzCwVhDQFo0yzDALzUWlKb+mhmVr2/v4ZnXPnDjOXmXPvlKxWq+X3h9l7zrrnc89j7zP7jI2NKNt7ICe7ScSibMwE2DtwZe8ITLYWNIXIyIkOaqqVIHs50DQ4T8e91oEc5ED3wcVVZWl2fx/kRma4W5idBdBMeZAHIfd7ms/OHDTTSxFEZpnPzhxk1tfbx1sv1zEQ8TWbnTlotp/0CX9jMD4QQDzgpG+eM252FtYoUApyC7IVFRQ8l4Rg3nwm9YOgyy4PCpVbowWm6bLwDrY/bNHih/QKj4DLHYBMFImHJwa05L8KinrEGlB0zFIFUKw7VMvi+KD4BI1Gk7h8BZIUQMl4lB6pKx/jgFIMoZIq7PkqqcKMoHikEe/0DGRyQFnQZufkPo7V1PczP7jXjIEiEMX8teCAcuGx7om8fDxJ/fUFhfZSFW7Qg4qILyKF0ame4oBSMbkYcH+6RHbXkkgpyp6h7rNw44IS6KjV5Q6yoAqSQedZsJG4byLcqS0nREewmfpbtkoXaNEYiCRgw7YSYDsqeaAdcNxZ/FyV4D9fXRNoVE1tihFUB2rrG4B6HmhLhvByz0aZqQWjHk2C11zND0ifChovuha5FNHmt6KNOWVoV0yRjsxdXNALEAfkCX6u6RbPq9xd+eIegA96CdjB7Mto4IP2iju0j6X2/s5Yibo6XUTQAWa7MYMPckbPKwcP1eJV6mvMU6SaAQ5Dy4waRwgflIvevqO5oBlJyKHSxtckyu6fz7q24nVm3qjSyIBS0RUOZHoek9k1vGn6jQtqIzHHyYlCFglvnWxvT2yvGMdxQzYzvW/7yoHeQYcPe2kV/TipX5dT40AqxDHzrrDUXFC4uKoMtLRnYHDQ3z9aymnDoLBCQjryQUVex0PnhL63zoMf18hjZgjDsiBF6XCamffF4P7noAF2zhAyCTnyoKTizNozZ7qn7OVwziJZsOcQIA9yFhebVbgBp84flup8ShiaI2jlvl8IffntF0o70+03lRf5QAV8uOAj/YrLBuSFMVDcrEQ/qdoX6vJXtgz0AReVI1s/orXcTasTbgEpSqBcfakoRFvUso/7TXQpnZYD3mglXX1bLxMlkDMutY2MjGAnsXCMsF8yaGmzhiiCQsQ+n7BnhjtHTNSpZm0X7YBmV2XQqqxPG/v7Gz+LJhx9js1HJqTQqvqCBvdEgOgRsvpfqyGDrAR9qQT6SjtkjbQqhYI9sxlW6kqALOiu7ur/JWDUyeQrLSRCaRp83SO5sH3TcILdaS5LsvfbAtr23dUDYs9rDkCZEXSwCd+vue71A8pjjV2yaZU/dMMWuGmslnbdAo6lBTvCeB/5sRUFYaI/FfhJx57ryEeWoc9tNG1kNu8ozhkuhPEq7GGlls3P5bg6NoxB2G1jNmA39iUa3tiN278wZzgCowZkDtDL7Nl0YJqY/RWtuLXeQOoATv+aVgcEGQ+tuUPAbzeGIgCTC0Xb70i+eb1kE2rUxmOkDHC4JpKKYq7QlbMNkfxpc+EP2rYiUvLvS8ufgbRxemmc6Xk0exT4C5sHAOBlXXP3AAAAAElFTkSuQmCC" />
                                    </svg>
                                    <p class="color-green">درس يوميا </p>

                                    <span class="counter color-green">أكثر من 100 </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72px" height="69px">
                                        <image  x="0px" y="0px" width="72px" height="69px"  xlink:href="data:img/png;base64,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" />
                                    </svg>
                                    <p class="color-red">معلم</p>
                                    <span class="counter color-red">أكثر من 50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    <!--? Categories Area Start -->
    <div class="categories-area mt-2" id="COURSES">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2>دوراتنا</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center">
                        <div class="cat-icon">
                            <img src="{{asset('1.png')}}" alt="دورة القرآن" style="width: 70px">
                        </div><br>
                        <div class="cat-cap">
                            <h5><a href="#">القرآن</a></h5>
                            <p>يمكنك تعلم كيفية حفظ القرآن الكريم وتصبح حافظاً للقرآن.</p>
                            <a href="#" class="read-more1">اقرأ المزيد ></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center">
                        <div class="cat-icon">
                            <img src="{{asset('4.png')}}" alt="دورة القرآن" style="width: 70px">
                        </div><br>
                        <div class="cat-cap">
                            <h5><a href="#">الفقه</a></h5>
                            <p>يقدم الفقه إرشادات واضحة حول كيفية عيش حياة ذات معنى وفقاً لتعاليم الإسلام.</p>
                            <a href="#ENROLL" class="read-more1">سجل الآن ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center">
                        <div class="cat-icon">
                            <img src="{{asset('3.png')}}" alt="دورة القرآن" style="width: 70px">
                        </div><br>
                        <div class="cat-cap">
                            <h5><a href="#">اللغة العربية</a></h5>
                            <p>معرفة اللغة العربية تفتح الباب أمام موارد ضخمة من المعرفة الإسلامية.</p>
                            <a href="#ENROLL" class="read-more1">سجل الآن ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center">
                        <div class="cat-icon">
                            <img src="{{asset('2.png')}}" alt="دورة القرآن" style="width: 70px">
                        </div><br>
                        <div class="cat-cap">
                            <h5><a href="#">الحديث</a></h5>
                            <p>الأحاديث تساعد في فهم ممارسات محمد صلى الله عليه وسلم وأمته.</p>
                            <a href="#ENROLL" class="read-more1">سجل الآن ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center">
                        <div class="cat-icon">
                            <img src="{{asset('reading.png')}}" alt="دورة القرآن" style="width: 130px">
                        </div><br>
                        <div class="cat-cap">
                            <h5><a href="#">التجويد</a></h5>
                            <p>دراسة قراءة القرآن بالتجويد لها أهمية كبيرة وهي مجال كامل في ديننا.</p>
                            <a href="#ENROLL" class="read-more1">سجل الآن ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat mb-50 text-center">
                        <div class="cat-icon">
                            <img src="{{asset('aqq.jpg')}}" alt="دورة القرآن" style="width: 100px">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">العقيدة</a></h5>
                            <p>تعلم العقيدة الإسلامية الصحيحة أمر ضروري لحياتنا ولمصيرنا في الآخرة.</p>
                            <a href="#ENROLL" class="read-more1">سجل الآن ></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Categories Area End -->

    <!--? Popular Course Start -->
    <div class="popular-course section mt-5" style="margin-bottom: 100px">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <h2>لماذا تختارنا</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="text-center">
                            <img src="{{asset('qt.png')}}" alt="" style="width: 100px">
                        </div>
                        <div class="course-caption text-center">
                            <div class="course-cap-top">
                                <h4>معلمون مؤهلون ومعتمدون!</h4>
                                <p>معلمونا من الذكور والإناث يحملون درجات علمية متقدمة من جامعات رائدة مثل الأزهر ولديهم خبرة مع الطلاب غير الناطقين بالعربية.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="text-center">
                            <img src="{{asset('qt2.png')}}" alt="" style="width: 100px">
                        </div>
                        <div class="course-caption text-center">
                            <div class="course-cap-top">
                                <h4>جلسات مباشرة فردية!</h4>
                                <p>دوراتنا عبر الإنترنت مخصصة، حيث يخصص المعلمون وقتًا لكل طالب. نحن نستخدم التكنولوجيا والأساليب لتوفير تعلم سلس.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="text-center">
                            <img src="{{asset('qt3.png')}}" alt="" style="width: 100px">
                        </div>
                        <div class="course-caption text-center">
                            <div class="course-cap-top">
                                <h4>شهادات ومكافآت!</h4>
                                <p>يتم مكافأة الطلاب الذين يكملون الدورات أو يفوزون في المسابقات بشهادات، شارات افتراضية، واعتراف خاص.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="text-center">
                            <img src="{{asset('qt4.png')}}" alt="" style="width: 100px">
                        </div>
                        <div class="course-caption text-center">
                            <div class="course-cap-top">
                                <h4>طرق دفع آمنة!</h4>
                                <p>نضمن الدفعات الآمنة عبر PayPal، Wise Transfer، والحسابات البنكية، دون تخزين معلومات الدفع الحساسة أو هويتك.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="text-center">
                            <img src="{{asset('qt5.png')}}" alt="" style="width: 100px">
                        </div>
                        <div class="course-caption text-center">
                            <div class="course-cap-top">
                                <h4>تقارير وملاحظات منتظمة!</h4>
                                <p>نقدم كل شهر تقرير تقدم مفصل لك ولأطفالك، ونوفر أيضًا سجلات الحضور لجميع أطفالنا.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single course -->
                    <div class="single-course mb-40">
                        <div class="text-center">
                            <img src="{{asset('qt6.png')}}" alt="" style="width: 100px">
                        </div>
                        <div class="course-caption text-center">
                            <div class="course-cap-top">
                                <h4>الراحة والملاءمة!</h4>
                                <p>إلى جانب التعلم من المنزل، يمكن للطلاب اختيار الموضوع الذي يرغبون في تعلمه وفقًا لجداولهم اليومية، ونحن نوفر المعلمين المناسبين لهم.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Course End -->


    <!--? About Law Start-->
    <div class="about-area section" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="{{asset('abb2.jfif')}}" alt="" style="width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" style="direction: rtl;">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <p style="text-align: start">المزيد عن شركتنا</p>
                            <h2 style="text-align: start">هل تريد معرفة المزيد؟</h2>
                        </div>
                        <p style="text-align: start">تَرتيل هي أكاديمية قرآن عبر الإنترنت تقدم دروس القرآن عبر الإنترنت للناس في جميع أنحاء العالم. نسعى إلى تقديم أفضل فهم دقيق وشامل لأساسيات قراءة القرآن، القرآن بالتجويد، حفظ القرآن، تفسير القرآن، واللغة العربية القرآنية على منصة واحدة مع معلمين معتمدين وذوي مؤهلات في إجازة القرآن. في هذا العصر الرقمي، تعلم القرآن ليس صعبًا. المعلمون الأفضل متاحون لك حتى لو اخترت التعلم من المنزل.</p>
                        <ul style="text-align: start">
                            <li><span class="flaticon-business"></span> معلمون مؤهلون ومعتمدون!</li>
                            <li><span class="flaticon-communications-1"></span> الراحة والسهولة</li>
                            <li><span class="flaticon-graduated"></span> شهادات ومكافآت</li>
                            <li><span class="flaticon-tools-and-utensils"></span> تقارير وملاحظات منتظمة</li>
                        </ul>
                        <a href="about.html" class="btn">انضم إلينا</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- About Law End-->
    <!--? Testimonial Start -->

    <div class="testimonial-area fix section-bg" data-background="assets/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-9">
                    <div class="section-tittle text-center">
                        <h2>أراء طلابنا</h2>
                    </div>
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45" style="border: 2px solid #c7c7c7;border-radius: 50px;background-color: rgba(232,232,232,0.59)">
                                <img src="{{asset('download1.jfif')}}" class="ani-btn " alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p style="color: black;font-family: Andalus">"لقد جربت العديد من المنصات الإلكترونية لتعلم القرآن واللغة العربية، لكن لم يضاهي أي منها التجربة التي خضتها في هذه الأكاديمية. المنهج منظم بشكل جيد والمعلمون مؤهلون بدرجة عالية."
                                </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45" style="border: 2px solid #c7c7c7;border-radius: 50px;background-color: rgba(232,232,232,0.59)">
                                <img src="{{asset('download2.jfif')}}" class="ani-btn " alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p style="color: black;font-family: Andalus"> "ابنتي تحضر الدروس في هذه الأكاديمية، ومستوى التعليم دائمًا يبهرني. المعلمون ليسوا فقط على دراية كبيرة، بل يهتمون فعلاً بالتقدم. ثقتها في تلاوة القرآن وفهمها للإسلام قد ارتفعت بشكل كبير."</p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <section id="PRICES" class="pricing-content section-padding" style="background-color: #f1f1f1">
        <div class="container">
            <div class="section-tittle text-center">
                <h2>الأسعار</h2>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="pricing_design">
                        <div class="single-pricing mb-2">
                            <div class="price-head">
                                <h2>الباقة الأولي</h2>
                                <h1>$30</h1>
                                <span>/شهريا</span>
                            </div>
                            <ul>
                                <li>حصة تجريبية مجانية</li>
                                <li>مدة الحصة ساعة</li>
                                <li> 4 حصص شهريا</li>
                            </ul>
                            <div class="pricing-price">

                            </div>
                            <a href="#ENROLL" class="price_btn">احجز الأن</a>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="pricing_design">
                        <div class="single-pricing mb-2">
                            <div class="price-head">
                                <h2>الباقة الثانية</h2>
                                <h1>$40</h1>
                                <span>/شهريا</span>
                            </div>
                            <ul>
                                <li>حصة مجانية</li>
                                <li>مدة الحصة 30 دقيقة</li>
                                <li> 8 حصص شهريا</li>
                            </ul>
                            <div class="pricing-price">

                            </div>
                            <a href="#ENROLL" class="price_btn">احجز الان</a>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="pricing_design">
                        <div class="single-pricing mb-2">
                            <div class="price-head">
                                <h2>الباقة الثالثة</h2>
                                <h1>$60</h1>
                                <span>/شهريا</span>
                            </div>
                            <ul>
                                <li>حصة تجريبية مجانية</li>
                                <li> مدة الحصة 30 دقيقة</li>
                                <li> 12 حصة شهريا</li>
                            </ul>
                            <div class="pricing-price">

                            </div>
                            <a href="#ENROLL" class="price_btn">احجز الان </a>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
    <section class="h-100" id="ENROLL">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <form id="enroll-form">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="{{asset('register.jpg')}}"
                                         alt="Sample photo" class="img-fluid"
                                         style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-center" style="font-family: Cambria">"احصل على تجربة مجانية لتعلم القرآن من خلال التسجيل معنا اليوم!"
                                        </h3>

                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="الاسم الكامل" id="form3Example1m" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <input type="email" placeholder="الايميل" name="email" id="form3Example1m1" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <input type="number" placeholder="رقم الواتساب" name="phone" id="form3Example1n1" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-group">
                                                    <input type="number" placeholder="عمر الطالب" name="student_age" id="form3Example1n1" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" aria-label="Default select example" required name="student_gender">
                                                    <option selected disabled>نوع الطالب</option>
                                                    <option value="male">ذكر</option>
                                                    <option value="female">انثي</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" name="teacher_gender" aria-label="Default select example">
                                                    <option selected>نوع المعلم </option>
                                                    <option value="male">ذكر</option>
                                                    <option value="female">انثي</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" aria-label="Default select example" name="course">
                                                    <option selected>اسم الدورة</option>
                                                    <option value="Quran">قرأن</option>
                                                    <option value="Fiqh">فقه</option>
                                                    <option value="Aqeedah">عقيدة</option>
                                                    <option value="Hadith">حديث</option>
                                                    <option value="Arabic">لغة عربية</option>
                                                    <option value="Tajweed">تجويد</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <select class="form-select" aria-label="Default select example" required name="package">
                                                    <option selected disabled>نوع الباقة</option>
                                                    <option value="4 حصص شهريا">4 حصص شهريا</option>
                                                    <option value="8 حصص شهريا">8 حصص شهريا</option>
                                                    <option value="12 حصة شهريا">12 حصة شهريا</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-group">
                                                    <input type="text" placeholder="الأيام المفضلة (الأحد,الأثنين,...)" name="days" id="form3Example1n1" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form fields here -->
                                        <div class="d-flex justify-content-start pt-3">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2">سجل</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    <script>
                        $(document).ready(function() {
                            $('#enroll-form').on('submit', function(event) {
                                event.preventDefault(); // prevent form submission

                                var formData = $(this).serialize(); // collect form data

                                $.ajax({
                                    url: '/student-enroll', // replace with your server script URL
                                    type: 'POST',
                                    data: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response) {
                                       if (response.status === 'success') {
                                           Swal.fire(
                                               'Success!',
                                               'Your Enroll has been submitted! We will contact you soon!',
                                               'success'
                                           );
                                       } else {
                                           Swal.fire(
                                               'Error!',
                                               'There was an error submitting the form!',
                                               'error'
                                           );
                                       }
                                    },
                                    error: function(jqXHR, textStatus, errorThrown) {
                                        Swal.fire(
                                            'Error!',
                                            'There was an error submitting the form!',
                                            'error'
                                        );
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top pt-5">
                <!-- footer Heading -->
                <div class="footer-heading">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-5">
                            <!-- Footer Social -->
                            <div class="footer-social">
                                <a href="https://www.facebook.com/tarteelacademy0?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a  href="#"><i class="fab fa-google"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://web.facebook.com/profile.php?id=100022821616742" target="_blank">AhmedOmar</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{asset('website/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('website/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('website/assets/js/popper.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('website/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('website/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('website/assets/css/owl.carousel.min.css')}}./assets/js/wow.min.js"></script>
<script src="{{asset('website/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('website/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('website/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint -->
<script src="{{asset('website/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('website/assets/js/waypoints.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('website/assets/js/contact.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.form.js')}}."></script>
<script src="{{asset('website/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('website/assets/js/mail-script.js')}}"></script>
<script src="{{asset('website/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('website/assets/js/plugins.js')}}"></script>
<script src="{{asset('website/assets/js/main.js')}}"></script>

</body>
</html>
