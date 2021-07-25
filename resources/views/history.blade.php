  
@extends('layouts.master')

@section('content')

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Our History</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/hope/loder-velogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>Language</li>
                                        <li>FRANCAIS</li>
                                        <li>ENGLISH</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="https://twitter.com/vivoenergy?lang=en"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/vivoenergy/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/vivoenergy"><i class="fab fa-linkedin-in"></i></a></li>
                                       <li> <a href="https://www.instagram.com/vivoenergygroup/?hl=en"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                    <a href="home.blade.php" class="big-logo"><img src="assets/img/hope/velogo.png" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="home.blade.php" class="small-logo"><img src="assets/img/hope/velogo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="home.blade.php">Home</a></li>
                                            <li><a href="about.blade.php">About</a>
                                            
                                            
                                                <ul class="submenu">
                                                    <li><a href="history.blade.php">Our History</a></li>
                                                    <li><a href="glance.blade.php">At a Glance</a></li>
                                                    <li><a href="principles.blade.php">Our Principles</a></li>
                                                    <li><a href="vision.blade.php">Our Vision</a></li>
                                                </ul></li>
                                            <li><a href="services.html">Products/Services</a></li>
                                            <li><a href="hsse.html">HSSE</a>
                                            <ul class="submenu">
                                                <li><a href="">HSSE Performance</a></li>
                                                <li><a href="">Our HSSE Commitment</a></li>
                                                <li><a href="">Our policy</a></li>
                                            </ul></li>
                                            <li><a href="careers.html">Careers</a>
                                                <ul class="submenu">
                                                    <li><a href="">Why Vivo Energy?</a></li>
                                                    <li><a href="">What to Expect?</a></li>
                                                    <li><a href="">Who Succeeds?</a></li>
                                                    <li><a href="">Our People</a></li>
                                                    <li><a href="">Roles</a></li>
                                                    <li><a href="">Who Succeeds</a></li>
                                                </ul>
                            
                                            <li><a href="community.html">Community</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="project_details.html">Projects Details</a></li>
                                                <li><a href="services_details.html">Services Details</a></li>
                                            </ul></li>
                                            <li><a href="media.html">Media Centre</a>
                                                <ul class="submenu">
                                                    <li><a href="">Press Releases</a></li>
                                                    <li><a href="">Social Media</a></li>
                                                    <li><a href="">Image Gallery</a></li>
                                                    <li><a href="">Media Contacts</a></li>
                                                </ul></li>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="contact.html" class="btn">Contact Us</a>
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
       </div>
        <!-- Header End -->
    </header>
    <main>

        <section class="support-company-area fix pt-10 section-padding30">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text"> <br><br>
                            <h2 class="">Who we are</h2>
                        </div>
                        <span class="back-text">About us</span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">We’ve achieved a lot since 2011, and now have a presence in 23 countries across Africa. Our vision is to become the most respected energy business in Africa.

                            Here are some highlights of our journey so far.
                            
                            <h2 class"">1st December 2011</h2>
                            
                            Vivo Energy was established with Cape Verde, Senegal, Madagascar, Mali, 
                            Mauritius, Morocco, and Tunisia the first countries to join.
                            
                            <h3>2012</h3>
                            
                            We expanded the group with Burkina, Cote D’Ivoire and Guinea (March), 
                            Botswana and Namibia (October) and Kenya (November) joining.
                            
                            <h3>2013</h3>
                            
                            We completed the current group with Uganda (February) and Ghana (August) 
                            taking us up to 15 markets across Africa.
                            We began our Retail network expansion programme, adding over 100 service stations in the year.
                            
                            <h3>2014</h3>
                            
                            We launched our initiative to re-design and expand our convenience 
                            retail and food offer across our network to ensure our sites meet our 
                            customer needs and offer much more than just fuel.
                            
                           <h3>2015</h3> 
                            
                            We invested further in our retail network, signing partnerships with
                             international partners such as Burger King and KFC and add innovative
                              new offers for our customers such as our first loyalty programme in
                               Mauritius.
                            
                            <h3>2016</h3>
                            
                            We completed our 15th differentiated fuel launch in 3 years 
                            (bringing V-Power to Morocco and Tunisia) and signed a new agreement 
                            with Shell to secure the brand for a further 15 years.
                            
                            <h3>2017</h3>
                            
                            We acquired a stake in Shell & Vivo Lubricants (SVL), so that it is
                             jointly owned by Vivo Energy (50%) and Shell (50%). SVL is the company 
                             that sources, blends and manufactures Shell Lubricants in Africa.
                        
                            We entered into a transaction with Engen Holdings to add a number of 
                            new markets to Vivo Energy’s network subject to regulatory approvals.
                            
                            <h3>2018</h3>
                            
                            We completed an initial public offering (IPO) on the London Stock Exchange 
                            with a secondary listing on the Johannesburg Stock Exchange. This was the 
                            largest African IPO on the London Stock Exchange in over a decade.
                            
                            
                            We restructured the transaction with Engen Holdings in order to add
                             operations in eight new countries and over 225 Engen-branded service
                              stations to Vivo Energy's network from 1st March 2019.
                            
                            <h3>2019</h3>
                            
                            Vivo Energy completed the Engen transaction on 1st March, 
                            expanding its footprint to 23 countries over 2,000 retail 
                            sites.</p></p>
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- About Area End -->
         <!-- Footer Start-->
       <div class="footer-main">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row  justify-content-between">
                    <div class="col-lg-4 col-md-4 col-sm-8">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/hope/loder-velogo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Loation</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">HSSE</a></li>
                                    <li><a href="#">Community</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                
                                <ul>
                                    <ul>
                                        <li><a href="#">Investors</a></li>
                                        <li><a href="#">Media Centre</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Legal Disclaimer</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="phone" name="EMAIL" id="newsletter-form-email" placeholder=" Phone Number " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Phone Number '">
                                       <br> <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                       <br>  <input type="text" name="EMAIL" id="newsletter-form-email" placeholder=" Write a Message " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Message '">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                SUBMIT
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                            <!-- Map -->
                            <div class="map-footer">
                                <img src="assets/img/gallery/map-footer.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copy-Right -->
                <div class="row align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
   <!-- Footer End-->
</footer>

<!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
           
    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>
@endsection
