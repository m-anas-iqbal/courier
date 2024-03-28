<?php 
include 'databaseConnection/config.php';
?>

<!DOCTYPE html>
<html>
    
<head>
<title>CourierIn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/font-elegant/elegant.css">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/owl.carousel.2/assets/owl.carousel.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>

        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
        <style>
            .form-control, .input-group-addon, .bootstrap-select .btn {
    text-transform: none !important;
    background-color: #f5ab3545 !important;
    color: #333;

}
    /* width */
    ::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: rgb(225, 223, 223);
  }
  
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: orange;
    border-radius: 1px;
  }
        </style>


        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body id="home">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Preloader -->
        <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

            <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>	
        <!-- /.Preloader -->	


        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main header-style2">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <ul class="list-items fs-10">
                                    <!-- <li class="active"><a href="#"><?php 
                                    // if(isset($_SESSION['msg'])){echo $_SESSION['name'];}else{echo "name";}
                                    ?></a></li>
                                     <li><a href="#">Pricing</a></li> -->
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-7 fs-12">
                                <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> +880-1756-390-370 </span> </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    // session_start();
                    if(isset($_SESSION['msgs'])){

                        echo '<a href="databaseConnection/logout.php" class="sign-in fs-12 theme-clr-bg"> Log out </a>';
                    }else{
                        echo '<a data-toggle="modal" href="#login-popup" id="btn_login" class="sign-in fs-12 theme-clr-bg"> Log in </a>';
                    }
                    // ?>
                    <!-- <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a> -->
                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-logo" href="index.php"> <img style="width:100px; margin-left:70px;" src="assets/img/logo/logo.png" alt="logo" /> </a>    
                                                        </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu" style="vertical-align: middle;">
                                        <li class="dropdown">
                                            <a href="index.php">Home </a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" > About Courier </a>
                                            <ul class="dropdown-menu">
                                            <li> <a href="tracking.php"> tracking </a> </li>
                                                <li><a href="courier.php"> Courier </a></li>
                                            </ul>
                                        </li> 
                                        <li> <a href="about-us.php">about us</a> </li>
                                        <li> <a href="contact-us.php" style=" margin-top: 4px;">   contact us</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                        <li class="dropdown active">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.php">Home Page1</a></li>
                                                <li><a href="index-2.php">Home Page2</a></li>
                                                <li><a href="index-3.php">Home Page3</a></li>

                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Submenu Level 1 </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Submenu</a></li>
                                                        <li><a href="#">Submenu</a></li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Submenu Level 2</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Submenu</a></li>
                                                                <li><a href="#">Submenu</a></li>
                                                                <li><a href="#">Submenu</a></li>                                    
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li> <a href="index.php">home</a> </li>
                                        <li> <a href="about-us.php">about</a> </li>
                                        <li> <a href="contact-us.php"> contact </a> </li>
                                        <li><a href="blog.php">Blog</a></li>  
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Courier</a>
                                            <ul class="dropdown-menu">
                                            <li><a href="courier.php">Courier</a></li>    
                                            <li> <a href="tracking.php"> tracking </a> </li>                           
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >pages </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="get-quote.php"> Quote Page </a></li> 
                                                <li><a href="contact-us-2.php"> Contact-2 Page </a></li>
                                                <li><a href="404.php"> Error Page </a></li> 
                                                <li><a href="coming-soon.php"> Coming Soon Page </a></li>
                                            </ul>
                                        </li>  
                                        <li><span class="search fa fa-search theme-clr transition"> </span></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->
