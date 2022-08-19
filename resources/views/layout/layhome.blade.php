<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SI Karang Taruna </title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="assets/front/css/bootstrap.css" rel="stylesheet">
    <link href="assets/front/css/style.css" rel="stylesheet">
    <link href="assets/front/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

    <!-- Skins Style-->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/blue.css" title="blue" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/pink.css" title="pink" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/purple.css" title="purple" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/green.css" title="green" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/red.css" title="red" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/yellow.css" title="yellow" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/orange.css" title="orange" media="all" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/front/css/skins/grey.css" title="grey" media="all" /> -->

</head>
<body>
<div class="page-wrapper">  

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->



    <!--Header Top-->
    <section class="header-top">
        <div class="container clearfix">
            <div class="left-side pull-left">
                <div class="logo">
                    <figure>
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </figure>
                </div>
            </div>
            <ul class="right-side pull-right clearfix">
                <li class="item">
                    <div class="icon-box">
                        <i class="flaticon-signs"></i>
                    </div>
                    <h4>Address</h4>
                    <p>DUSUN GROJOGAN KECAMATAN WATES</p>
                </li>
                <li class="item">
                    <div class="icon-box">
                        <i class="flaticon-technology"></i>
                    </div>
                    <h4>Call Us</h4>
                    <p>+628-585-017-1979</p>
                </li>
                <li class="item">
                    <div class="icon-box">
                        <i class="flaticon-message"></i>
                    </div>
                    <h4>Email</h4>
                    <p>grojogankartar@gmail.com</p>
                </li>
            </ul>
        </div>
    </section>
    <!--End Header Top-->

       
    <!--Main Header-->
    <header class="main-header sticky-header">
        <div class="container clearfix">
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->      
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>           
                <div class="navbar-collapse collapse clearfix">
                    
                    @yield('menu')

                </div>
            </nav>
            <div class="nav-icon-wrap">
                <a href="/login">
                <div class="search-wrap">
                    <i class="fa fa-sign-in-alt"></i>
                    <!-- <div class="search-form-wrap">
                        <form class="search-form">
                            <input type="search" name="search" value="" placeholder="Search...">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </div> -->
                </div>
                </a>
            </div>
        </div>
    </header>
    

    @yield('content')


    
    <!--Footer Section-->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="about-widget">
                                <div class="footer-title">
                                    <h6>Get in Touch</h6>
                                </div>
                                <p>The role of a mechanical engi- neer is to take marketplace.</p>
                                <ul class="contact-links">
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#">info@example.com</a></li>
                                    <li><i class="fa fa-mobile" aria-hidden="true"></i>+(012) 123 4567</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>+(012) 123 4567</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="feed-widget">
                                <div class="footer-title">
                                    <h6>Twitter Feed</h6>
                                </div>
                                <p><a href="#">@allied</a> The role of a mechanical engineer is to take marketplace. The role of a mechanical engineer.</p>
                                <p class="text"><a href="#">@allied</a> The role of a mechanical engineer is to take marketplace. The role of a mechanical engineer.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="service-widget">
                                <div class="footer-title">
                                    <h6>services</h6>
                                </div>
                                <ul class="menu-link">
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Outpatient Surgery</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Cardiac Clinicy</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Ophthalmology Clinic</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Laryngological Clinic</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="gallery-widget">
                            <div class="footer-title">
                                <h6>Instagram</h6>
                            </div>
                            <div class="clearfix">
                                <figure class="image">
                                    <img src="images/gallery/1.jpg" alt="">
                                    <a href="images/gallery/1.jpg" class="lightbox-image" title="Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </figure>
                                <figure class="image">
                                    <img src="images/gallery/2.jpg" alt="">
                                    <a href="images/gallery/2.jpg" class="lightbox-image" title="Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </figure>
                                <figure class="image">
                                    <img src="images/gallery/3.jpg" alt="">
                                    <a href="images/gallery/3.jpg" class="lightbox-image" title="Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </figure>
                                <figure class="image">
                                    <img src="images/gallery/4.jpg" alt="">
                                    <a href="images/gallery/4.jpg" class="lightbox-image" title="Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </figure>
                                <figure class="image">
                                    <img src="images/gallery/5.jpg" alt="">
                                    <a href="images/gallery/5.jpg" class="lightbox-image" title="Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </figure>
                                <figure class="image">
                                    <img src="images/gallery/6.jpg" alt="">
                                    <a href="images/gallery/6.jpg" class="lightbox-image" title="Caption Here"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <p>Copyrights &copy; 2018 <a href="index.html">Allied</a>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!--End Footer Section-->


</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>

<script src="assets/front/js/jquery.js"></script>
<script src="assets/front/js/bootstrap.min.js"></script>
<script src="assets/front/js/jquery.fancybox.pack.js"></script>
<script src="assets/front/js/jquery.fancybox-media.js"></script>
<script src="assets/front/js/isotope.js"></script>
<script src="assets/front/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/front/js/owl.carousel.min.js"></script>
<script src="assets/front/js/validate.js"></script>
<script src="assets/front/js/wow.js"></script>
<script src="assets/front/js/jquery.counterup.min.js"></script>
<script src="assets/front/js/waypoints.min.js"></script>
<script src="assets/front/js/script.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    
</script>
</body>

</html>
