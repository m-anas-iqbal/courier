<?php
include "../databaseConnection/config.php";
if (isset($_SESSION['status'])) {
	
	if ($_SESSION['status'] == 'active') {
		

		if (isset($_SESSION['role'])) {
			if ($_SESSION['role']=="agent") {
			
			}elseif($_SESSION['role']!="agent" || $_SESSION['role'] == null){
				header("Location:../databaseConnection/logout.php");
				
			}
		}

}}

?>
<!do
<!doctype html>
<html class="fixed sidebar-light" data-style-switcher-options="{'sidebarColor': 'light'}">
	
<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>CourierIn Agent</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="icon" href="img/logo243.png">


	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header" style="height: 70px; margin-bottom:-10px;">
				<div class="logo-container">
					<a href="index.php" class="logo">
						<img style="filter: grayscale(1);" src="img/logo123.png" width="100" height="51" margin-left="30px"  margin-bottom="10px" alt="Porto Admin" />
					</a>

					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>

				</div>

				<!-- start: search & user box -->
				<div class="header-right">


					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-bs-toggle="dropdown">
						<div class="profile-info" >
								<span class="name"><?php if (isset($_SESSION['name'])){echo $_SESSION['name'];}else{header("Location:../databaseConnection/logout.php");}?></span>
								<span class="role"><?php if (isset($_SESSION['role'])){echo "Agent";}else{header("Location:../databaseConnection/logout.php");}?></span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="../databaseConnection/logout.php"><i class="bx bx-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>

				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="index.php">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Home</span>
				                        </a>                        
				                    </li>
									<li>
				                        <a class="nav-link" href="Courier.php">
				                            <i class="bi bi-box-seam" aria-hidden="true"></i>
				                            <span>Courier</span>
				                        </a>                        
				                    </li>
									<li>
				                        <a class="nav-link" href="Report.php">
				                            <i class="bi bi-card-text" aria-hidden="true"></i>
				                            <span>Reports</span>
				                        </a>                        
				                    </li>
				                
				                </ul>
				            </nav>

				        </div>

				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>

				    </div>

				</aside>
				<!-- end: sidebar -->
