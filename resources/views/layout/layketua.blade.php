<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>SI Karang Taruna - Ketua</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/back/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="assets/back/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="assets/back/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="assets/back/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="assets/back/plugins/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/back/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/back/css/style.css" rel="stylesheet">

</head>
    <style type="text/css">
        .nav-active{
            background-color: #F3F3F9;
        }
    </style>

<body>

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr" style="color:white;font-size: 20px;font-family: sans-serif; ">
                    <!-- <img src="assets/back/img/logo.svg" alt="navbar brand" class="navbar-brand"> -->
                     KT
                 </b>
                    <span class="logo-compact" style="color:white;font-size: 20px;font-family: sans-serif;padding-top: -30px; ">
                         <b>SI</b>KARANGTARUNA
                    </span>
                    <span class="brand-title" style="color:white;font-size: 20px;font-family: sans-serif;padding-top: -30px; ">
                         <b>SI</b>KARANGTARUNA
                    
                    </span>
                </a>
            </div>
        </div>
        <div class="header" style="background-color: #7571F9;">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon" style="color: white;"><i class="icon-menu"></i></span>
                    </div>
                </div>
               
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <!-- <a href="javascript:void(0)" data-toggle="dropdown" style="color: white;">
                                <i class="mdi mdi-email-outline" style="color: white;"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a> -->
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="assets/back/images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="assets/back/images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="assets/back/images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                       
                       
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"  data-toggle="dropdown" style="margin: 10px 0px 0px -10px;">
                                <!-- <span class="activity active"></span> --> <span style="color: white;margin-right: 10px;">{{Session::get('nama')}}</span>
                                <img src="assets/back/images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <!-- <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li> -->
                                        <hr class="my-2">
                                        <!-- <li>
                                            <a href="#"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li> -->
                                        <li><a href="/logout"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="nk-sidebar" style="background-color:white; ">           
            <div class="nk-nav-scroll">
                
                @yield('menu')

            </div>
        </div>

            @yield('content')


        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
       
    </div>
    
    <script src="assets/back/plugins/common/common.min.js"></script>
    <script src="assets/back/js/custom.min.js"></script>
    <script src="assets/back/js/settings.js"></script>
    <script src="assets/back/js/gleek.js"></script>
    <script src="assets/back/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="assets/back/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="assets/back/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="assets/back/plugins/d3v3/index.js"></script>
    <script src="assets/back/plugins/topojson/topojson.min.js"></script>
    <script src="assets/back/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="assets/back/plugins/raphael/raphael.min.js"></script>
    <script src="assets/back/plugins/morris/morris.min.js"></script>
    <!-- ChartistJS -->
    <script src="assets/back/plugins/chartist/js/chartist.min.js"></script>
    <script src="assets/back/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/back/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="assets/back/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/back/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <script src="assets/back/plugins/validation/jquery.validate.min.js"></script>
    <script src="assets/back/plugins/validation/jquery.validate-init.js"></script>

    <!-- <script src="assets/back/js/dashboard/dashboard-1.js"></script> -->

    <script type="text/javascript">
        function previewImage() {
        document.getElementById("image-preview").style.display = "inline";
        var oFReader = new FileReader();
         oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

        oFReader.onload = function(oFREvent) {
          document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>

</body>

</html>