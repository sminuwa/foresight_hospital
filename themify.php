<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/themify.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:41:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/green.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default theme-active" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div>
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Page Content -->
		<div id="content">
				<!-- Top Navigation -->
				<div class="container top-brand">
					<nav class="navbar navbar-default">			
						<div class="navbar-header">
							<div class="sidebar-header"> <a href="index.php"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
							</div>
						</div>
						<ul class="nav justify-content-end">
							<li class="nav-item">
								<a class="nav-link">
									<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
								</a>							
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="modal" data-target=".proclinic-modal-lg">
									<span class="ti-search"></span>
								</a>
								<div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lorvens">
										<div class="modal-content proclinic-box-shadow2">
											<div class="modal-header">
												<h5 class="modal-title">Search Patient/Doctor:</h5>
												<span class="ti-close" data-dismiss="modal" aria-label="Close">
												</span>
											</div>
											<div class="modal-body">
												<form>
													<div class="form-group">
														<input type="text" class="form-control" id="search-term" placeholder="Type text here">
														<button type="button" class="btn btn-lorvens proclinic-bg">
															<span class="ti-location-arrow"></span> Search</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false">
									<span class="ti-announcement"></span>
								</a>
								<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
									<h5>Notifications</h5>
									<a class="dropdown-item" href="#">
										<span class="ti-wheelchair"></span> New Patient Added</a>
									<a class="dropdown-item" href="#">
										<span class="ti-money"></span> Patient payment done</a>
									<a class="dropdown-item" href="#">
										<span class="ti-time"></span>Patient Appointment booked</a>
									<a class="dropdown-item" href="#">
										<span class="ti-wheelchair"></span> New Patient Added</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
								 aria-expanded="false">
									<span class="ti-user"></span>
								</a>
								<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
									<h5>John Willing</h5>
									<a class="dropdown-item" href="#">
										<span class="ti-settings"></span> Settings</a>
									<a class="dropdown-item" href="#">
										<span class="ti-help-alt"></span> Help</a>
									<a class="dropdown-item" href="#">
										<span class="ti-power-off"></span> Logout</a>
								</div>
							</li>
						</ul>
				
					</nav>
				</div>
				<!-- /Top Navigation -->
				<!-- Menu -->
				<div class="container menu-nav">
					<nav class="navbar navbar-expand-lg proclinic-bg text-white">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="ti-menu text-white"></span>
						</button>
				
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-home"></span> Dashboard</a>
									<div class="dropdown-menu">
									<a class="dropdown-item" href="http://www.konnectplugins.com/proclinic/Vertical/index.php">Vertical</a>
									<a class="dropdown-item" href="http://www.konnectplugins.com/proclinic/Vertical-RTL/index.php">Vertical RTL</a>
									<a class="dropdown-item" href="index.php">Horizantal</a>
								</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-wheelchair"></span> Patients</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="add-patient.php">Add Patient</a>
										<a class="dropdown-item" href="patients.php">All Patients</a>
										<a class="dropdown-item" href="about-patient.php">Patient Details</a>
										<a class="dropdown-item" href="edit-patient.php">Edit Patient</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-user"></span> Doctors</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="add-doctor.php">Add Doctor</a>
										<a class="dropdown-item" href="doctors.php">All Doctors</a>
										<a class="dropdown-item" href="about-doctor.php">Doctor Details</a>
										<a class="dropdown-item" href="edit-doctor.php">Edit Doctor</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-pencil-alt"></span> Appointments</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="add-appointment.php">Add Appointment</a>
										<a class="dropdown-item" href="appointments.php">All Appointments</a>
										<a class="dropdown-item" href="about-appointment.php">Appointment Details</a>
										<a class="dropdown-item" href="edit-appointment.php">Edit Appointment</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-money"></span> Payments</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="add-payment.php">Add Payment</a>
										<a class="dropdown-item" href="payments.php">All Payments</a>
										<a class="dropdown-item" href="about-payment.php">Payment Invoice</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-key"></span> Room Allotments</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="add-room.php">Add Room Allotment</a>
										<a class="dropdown-item" href="rooms.php">All Rooms</a>
										<a class="dropdown-item" href="edit-room.php">Edit Room Allotment</a>
									</div>
								</li>
								<li class="nav-item dropdown active">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-layout-tab"></span> UI Kit</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="typography.php">Typography</a>
										<a class="dropdown-item" href="buttons.php">Buttons</a>
										<a class="dropdown-item" href="cards.php">Cards</a>
										<a class="dropdown-item" href="tabs.php">Tabs</a>
										<a class="dropdown-item" href="accordions.php">Accordions</a>
										<a class="dropdown-item" href="modals.php">Modals</a>
										<a class="dropdown-item" href="lists.php">Lists &amp; Media Object</a>
										<a class="dropdown-item" href="grid.php">Grid</a>
										<a class="dropdown-item" href="progress-bars.php">Progress Bars</a>
										<a class="dropdown-item" href="notifications-alerts.php">Notifications &amp; Alerts</a>
										<a class="dropdown-item" href="pagination.php">Pagination</a>
										<a class="dropdown-item" href="carousel.php">Carousel</a>
										<a class="dropdown-item" href="tables.php"> Tables</a>
										<a class="dropdown-item" href="charts-1.php">Morris</a>
										<a class="dropdown-item" href="charts-2.php">Flot</a>
										<a class="dropdown-item" href="map-1.php">Google Maps</a>
										<a class="dropdown-item" href="map-2.php">Vector Maps</a>
										<a class="dropdown-item" href="forms.php">Forms</a>
										<a class="dropdown-item" href="font-awesome.php">Font Awesome </a>
										<a class="dropdown-item" href="themify.php">Themify</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									 aria-expanded="false"><span class="ti-file"></span> Other Pages</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="login.php">Login </a>
										<a class="dropdown-item" href="sign-up.php">Sign Up</a>
										<a class="dropdown-item" href="404.php">404</a>
										<a class="dropdown-item" href="blank-page.php">Blank Page</a>
										<a class="dropdown-item" href="pricing.php">Pricing</a>
										<a class="dropdown-item" href="faq.php">FAQ</a>
										<a class="dropdown-item" href="invoice.php">Invoice</a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- /Menu -->
				<!-- Breadcrumb -->
				<!-- Page Title -->
				<div class="container mt-0">
					<div class="row breadcrumb-bar">
				<div class="col-md-6">
					<h3 class="block-title">Themify Icons</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item">UI Kit</li>
						<li class="breadcrumb-item active">Themify Icons</li>
					</ol>
				</div>
			</div>
			</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">	
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Arrows & Direction Icons -->
							<h3 class="widget-title">Arrows & Direction Icons</h3>
							<p class="margin-l20">Themify icons are simple to implement. Just add <code>class="ti-*"</code> to <code>&lt;span&gt;</code></p>
							<div class="icon-section">
	
								<div class="icon-container">
									<span class="ti-arrow-up"></span>
									<span class="icon-name"> ti-arrow-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-right"></span>
									<span class="icon-name"> ti-arrow-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-left"></span>
									<span class="icon-name"> ti-arrow-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-down"></span>
									<span class="icon-name"> ti-arrow-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrows-vertical"></span>
									<span class="icon-name"> ti-arrows-vertical</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrows-horizontal"></span>
									<span class="icon-name"> ti-arrows-horizontal</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-up"></span>
									<span class="icon-name"> ti-angle-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-right"></span>
									<span class="icon-name"> ti-angle-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-left"></span>
									<span class="icon-name"> ti-angle-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-down"></span>
									<span class="icon-name"> ti-angle-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-double-up"></span>
									<span class="icon-name"> ti-angle-double-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-double-right"></span>
									<span class="icon-name"> ti-angle-double-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-double-left"></span>
									<span class="icon-name"> ti-angle-double-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-angle-double-down"></span>
									<span class="icon-name"> ti-angle-double-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-move"></span>
									<span class="icon-name"> ti-move</span>
								</div>
								<div class="icon-container">
									<span class="ti-fullscreen"></span>
									<span class="icon-name"> ti-fullscreen</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-top-right"></span>
									<span class="icon-name"> ti-arrow-top-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-top-left"></span>
									<span class="icon-name"> ti-arrow-top-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-circle-up"></span>
									<span class="icon-name"> ti-arrow-circle-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-circle-right"></span>
									<span class="icon-name"> ti-arrow-circle-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-circle-left"></span>
									<span class="icon-name"> ti-arrow-circle-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrow-circle-down"></span>
									<span class="icon-name"> ti-arrow-circle-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-arrows-corner"></span>
									<span class="icon-name"> ti-arrows-corner</span>
								</div>
								<div class="icon-container">
									<span class="ti-split-v"></span>
									<span class="icon-name"> ti-split-v</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-split-v-alt"></span>
									<span class="icon-name"> ti-split-v-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-split-h"></span>
									<span class="icon-name"> ti-split-h</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-point-up"></span>
									<span class="icon-name"> ti-hand-point-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-point-right"></span>
									<span class="icon-name"> ti-hand-point-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-point-left"></span>
									<span class="icon-name"> ti-hand-point-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-point-down"></span>
									<span class="icon-name"> ti-hand-point-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-back-right"></span>
									<span class="icon-name"> ti-back-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-back-left"></span>
									<span class="icon-name"> ti-back-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-exchange-vertical"></span>
									<span class="icon-name"> ti-exchange-vertical</span>
								</div>
	
							</div>
							<!-- /Arrows & Direction Icons -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Web App Icons -->
							<h3 class="widget-title">Web App Icons</h3>
							<div class="icon-section">
								<div class="icon-container">
									<span class="ti-wand"></span>
									<span class="icon-name"> ti-wand</span>
								</div>
								<div class="icon-container">
									<span class="ti-save"></span>
									<span class="icon-name"> ti-save</span>
								</div>
								<div class="icon-container">
									<span class="ti-save-alt"></span>
									<span class="icon-name"> ti-save-alt</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-direction"></span>
									<span class="icon-name"> ti-direction</span>
								</div>
								<div class="icon-container">
									<span class="ti-direction-alt"></span>
									<span class="icon-name"> ti-direction-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-user"></span>
									<span class="icon-name"> ti-user</span>
								</div>
								<div class="icon-container">
									<span class="ti-link"></span>
									<span class="icon-name"> ti-link</span>
								</div>
								<div class="icon-container">
									<span class="ti-unlink"></span>
									<span class="icon-name"> ti-unlink</span>
								</div>
								<div class="icon-container">
									<span class="ti-trash"></span>
									<span class="icon-name"> ti-trash</span>
								</div>
								<div class="icon-container">
									<span class="ti-target"></span>
									<span class="icon-name"> ti-target</span>
								</div>
								<div class="icon-container">
									<span class="ti-tag"></span>
									<span class="icon-name"> ti-tag</span>
								</div>
								<div class="icon-container">
									<span class="ti-desktop"></span>
									<span class="icon-name"> ti-desktop</span>
								</div>
								<div class="icon-container">
									<span class="ti-tablet"></span>
									<span class="icon-name"> ti-tablet</span>
								</div>
								<div class="icon-container">
									<span class="ti-mobile"></span>
									<span class="icon-name"> ti-mobile</span>
								</div>
								<div class="icon-container">
									<span class="ti-email"></span>
									<span class="icon-name"> ti-email</span>
								</div>
								<div class="icon-container">
									<span class="ti-star"></span>
									<span class="icon-name"> ti-star</span>
								</div>
								<div class="icon-container">
									<span class="ti-spray"></span>
									<span class="icon-name"> ti-spray</span>
								</div>
								<div class="icon-container">
									<span class="ti-signal"></span>
									<span class="icon-name"> ti-signal</span>
								</div>
								<div class="icon-container">
									<span class="ti-shopping-cart"></span>
									<span class="icon-name"> ti-shopping-cart</span>
								</div>
								<div class="icon-container">
									<span class="ti-shopping-cart-full"></span>
									<span class="icon-name"> ti-shopping-cart-full</span>
								</div>
								<div class="icon-container">
									<span class="ti-settings"></span>
									<span class="icon-name"> ti-settings</span>
								</div>
								<div class="icon-container">
									<span class="ti-search"></span>
									<span class="icon-name"> ti-search</span>
								</div>
								<div class="icon-container">
									<span class="ti-zoom-in"></span>
									<span class="icon-name"> ti-zoom-in</span>
								</div>
								<div class="icon-container">
									<span class="ti-zoom-out"></span>
									<span class="icon-name"> ti-zoom-out</span>
								</div>
								<div class="icon-container">
									<span class="ti-cut"></span>
									<span class="icon-name"> ti-cut</span>
								</div>
								<div class="icon-container">
									<span class="ti-ruler"></span>
									<span class="icon-name"> ti-ruler</span>
								</div>
								<div class="icon-container">
									<span class="ti-ruler-alt-2"></span>
									<span class="icon-name"> ti-ruler-alt-2</span>
								</div>
								<div class="icon-container">
									<span class="ti-ruler-pencil"></span>
									<span class="icon-name"> ti-ruler-pencil</span>
								</div>
								<div class="icon-container">
									<span class="ti-ruler-alt"></span>
									<span class="icon-name"> ti-ruler-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-bookmark"></span>
									<span class="icon-name"> ti-bookmark</span>
								</div>
								<div class="icon-container">
									<span class="ti-bookmark-alt"></span>
									<span class="icon-name"> ti-bookmark-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-reload"></span>
									<span class="icon-name"> ti-reload</span>
								</div>
								<div class="icon-container">
									<span class="ti-plus"></span>
									<span class="icon-name"> ti-plus</span>
								</div>
								<div class="icon-container">
									<span class="ti-minus"></span>
									<span class="icon-name"> ti-minus</span>
								</div>
								<div class="icon-container">
									<span class="ti-close"></span>
									<span class="icon-name"> ti-close</span>
								</div>
								<div class="icon-container">
									<span class="ti-pin"></span>
									<span class="icon-name"> ti-pin</span>
								</div>
								<div class="icon-container">
									<span class="ti-pencil"></span>
									<span class="icon-name"> ti-pencil</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-pencil-alt"></span>
									<span class="icon-name"> ti-pencil-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-paint-roller"></span>
									<span class="icon-name"> ti-paint-roller</span>
								</div>
								<div class="icon-container">
									<span class="ti-paint-bucket"></span>
									<span class="icon-name"> ti-paint-bucket</span>
								</div>
								<div class="icon-container">
									<span class="ti-na"></span>
									<span class="icon-name"> ti-na</span>
								</div>
								<div class="icon-container">
									<span class="ti-medall"></span>
									<span class="icon-name"> ti-medall</span>
								</div>
								<div class="icon-container">
									<span class="ti-medall-alt"></span>
									<span class="icon-name"> ti-medall-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-marker"></span>
									<span class="icon-name"> ti-marker</span>
								</div>
								<div class="icon-container">
									<span class="ti-marker-alt"></span>
									<span class="icon-name"> ti-marker-alt</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-lock"></span>
									<span class="icon-name"> ti-lock</span>
								</div>
								<div class="icon-container">
									<span class="ti-unlock"></span>
									<span class="icon-name"> ti-unlock</span>
								</div>
								<div class="icon-container">
									<span class="ti-location-arrow"></span>
									<span class="icon-name"> ti-location-arrow</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout"></span>
									<span class="icon-name"> ti-layout</span>
								</div>
								<div class="icon-container">
									<span class="ti-layers"></span>
									<span class="icon-name"> ti-layers</span>
								</div>
								<div class="icon-container">
									<span class="ti-layers-alt"></span>
									<span class="icon-name"> ti-layers-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-key"></span>
									<span class="icon-name"> ti-key</span>
								</div>
								<div class="icon-container">
									<span class="ti-image"></span>
									<span class="icon-name"> ti-image</span>
								</div>
								<div class="icon-container">
									<span class="ti-heart"></span>
									<span class="icon-name"> ti-heart</span>
								</div>
								<div class="icon-container">
									<span class="ti-heart-broken"></span>
									<span class="icon-name"> ti-heart-broken</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-stop"></span>
									<span class="icon-name"> ti-hand-stop</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-open"></span>
									<span class="icon-name"> ti-hand-open</span>
								</div>
								<div class="icon-container">
									<span class="ti-hand-drag"></span>
									<span class="icon-name"> ti-hand-drag</span>
								</div>
								<div class="icon-container">
									<span class="ti-flag"></span>
									<span class="icon-name"> ti-flag</span>
								</div>
								<div class="icon-container">
									<span class="ti-flag-alt"></span>
									<span class="icon-name"> ti-flag-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-flag-alt-2"></span>
									<span class="icon-name"> ti-flag-alt-2</span>
								</div>
								<div class="icon-container">
									<span class="ti-eye"></span>
									<span class="icon-name"> ti-eye</span>
								</div>
								<div class="icon-container">
									<span class="ti-import"></span>
									<span class="icon-name"> ti-import</span>
								</div>
								<div class="icon-container">
									<span class="ti-export"></span>
									<span class="icon-name"> ti-export</span>
								</div>
								<div class="icon-container">
									<span class="ti-cup"></span>
									<span class="icon-name"> ti-cup</span>
								</div>
								<div class="icon-container">
									<span class="ti-crown"></span>
									<span class="icon-name"> ti-crown</span>
								</div>
								<div class="icon-container">
									<span class="ti-comments"></span>
									<span class="icon-name"> ti-comments</span>
								</div>
								<div class="icon-container">
									<span class="ti-comment"></span>
									<span class="icon-name"> ti-comment</span>
								</div>
								<div class="icon-container">
									<span class="ti-comment-alt"></span>
									<span class="icon-name"> ti-comment-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-thought"></span>
									<span class="icon-name"> ti-thought</span>
								</div>
								<div class="icon-container">
									<span class="ti-clip"></span>
									<span class="icon-name"> ti-clip</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-check"></span>
									<span class="icon-name"> ti-check</span>
								</div>
								<div class="icon-container">
									<span class="ti-check-box"></span>
									<span class="icon-name"> ti-check-box</span>
								</div>
								<div class="icon-container">
									<span class="ti-camera"></span>
									<span class="icon-name"> ti-camera</span>
								</div>
								<div class="icon-container">
									<span class="ti-announcement"></span>
									<span class="icon-name"> ti-announcement</span>
								</div>
								<div class="icon-container">
									<span class="ti-brush"></span>
									<span class="icon-name"> ti-brush</span>
								</div>
								<div class="icon-container">
									<span class="ti-brush-alt"></span>
									<span class="icon-name"> ti-brush-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-palette"></span>
									<span class="icon-name"> ti-palette</span>
								</div>
								<div class="icon-container">
									<span class="ti-briefcase"></span>
									<span class="icon-name"> ti-briefcase</span>
								</div>
								<div class="icon-container">
									<span class="ti-bolt"></span>
									<span class="icon-name"> ti-bolt</span>
								</div>
								<div class="icon-container">
									<span class="ti-bolt-alt"></span>
									<span class="icon-name"> ti-bolt-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-blackboard"></span>
									<span class="icon-name"> ti-blackboard</span>
								</div>
								<div class="icon-container">
									<span class="ti-bag"></span>
									<span class="icon-name"> ti-bag</span>
								</div>
								<div class="icon-container">
									<span class="ti-world"></span>
									<span class="icon-name"> ti-world</span>
								</div>
								<div class="icon-container">
									<span class="ti-wheelchair"></span>
									<span class="icon-name"> ti-wheelchair</span>
								</div>
								<div class="icon-container">
									<span class="ti-car"></span>
									<span class="icon-name"> ti-car</span>
								</div>
								<div class="icon-container">
									<span class="ti-truck"></span>
									<span class="icon-name"> ti-truck</span>
								</div>
								<div class="icon-container">
									<span class="ti-timer"></span>
									<span class="icon-name"> ti-timer</span>
								</div>
								<div class="icon-container">
									<span class="ti-ticket"></span>
									<span class="icon-name"> ti-ticket</span>
								</div>
								<div class="icon-container">
									<span class="ti-thumb-up"></span>
									<span class="icon-name"> ti-thumb-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-thumb-down"></span>
									<span class="icon-name"> ti-thumb-down</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-stats-up"></span>
									<span class="icon-name"> ti-stats-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-stats-down"></span>
									<span class="icon-name"> ti-stats-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-shine"></span>
									<span class="icon-name"> ti-shine</span>
								</div>
								<div class="icon-container">
									<span class="ti-shift-right"></span>
									<span class="icon-name"> ti-shift-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-shift-left"></span>
									<span class="icon-name"> ti-shift-left</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-shift-right-alt"></span>
									<span class="icon-name"> ti-shift-right-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-shift-left-alt"></span>
									<span class="icon-name"> ti-shift-left-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-shield"></span>
									<span class="icon-name"> ti-shield</span>
								</div>
								<div class="icon-container">
									<span class="ti-notepad"></span>
									<span class="icon-name"> ti-notepad</span>
								</div>
								<div class="icon-container">
									<span class="ti-server"></span>
									<span class="icon-name"> ti-server</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-pulse"></span>
									<span class="icon-name"> ti-pulse</span>
								</div>
								<div class="icon-container">
									<span class="ti-printer"></span>
									<span class="icon-name"> ti-printer</span>
								</div>
								<div class="icon-container">
									<span class="ti-power-off"></span>
									<span class="icon-name"> ti-power-off</span>
								</div>
								<div class="icon-container">
									<span class="ti-plug"></span>
									<span class="icon-name"> ti-plug</span>
								</div>
								<div class="icon-container">
									<span class="ti-pie-chart"></span>
									<span class="icon-name"> ti-pie-chart</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-panel"></span>
									<span class="icon-name"> ti-panel</span>
								</div>
								<div class="icon-container">
									<span class="ti-package"></span>
									<span class="icon-name"> ti-package</span>
								</div>
								<div class="icon-container">
									<span class="ti-music"></span>
									<span class="icon-name"> ti-music</span>
								</div>
								<div class="icon-container">
									<span class="ti-music-alt"></span>
									<span class="icon-name"> ti-music-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-mouse"></span>
									<span class="icon-name"> ti-mouse</span>
								</div>
								<div class="icon-container">
									<span class="ti-mouse-alt"></span>
									<span class="icon-name"> ti-mouse-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-money"></span>
									<span class="icon-name"> ti-money</span>
								</div>
								<div class="icon-container">
									<span class="ti-microphone"></span>
									<span class="icon-name"> ti-microphone</span>
								</div>
								<div class="icon-container">
									<span class="ti-menu"></span>
									<span class="icon-name"> ti-menu</span>
								</div>
								<div class="icon-container">
									<span class="ti-menu-alt"></span>
									<span class="icon-name"> ti-menu-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-map"></span>
									<span class="icon-name"> ti-map</span>
								</div>
								<div class="icon-container">
									<span class="ti-map-alt"></span>
									<span class="icon-name"> ti-map-alt</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-location-pin"></span>
									<span class="icon-name"> ti-location-pin</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-light-bulb"></span>
									<span class="icon-name"> ti-light-bulb</span>
								</div>
								<div class="icon-container">
									<span class="ti-info"></span>
									<span class="icon-name"> ti-info</span>
								</div>
								<div class="icon-container">
									<span class="ti-infinite"></span>
									<span class="icon-name"> ti-infinite</span>
								</div>
								<div class="icon-container">
									<span class="ti-id-badge"></span>
									<span class="icon-name"> ti-id-badge</span>
								</div>
								<div class="icon-container">
									<span class="ti-hummer"></span>
									<span class="icon-name"> ti-hummer</span>
								</div>
								<div class="icon-container">
									<span class="ti-home"></span>
									<span class="icon-name"> ti-home</span>
								</div>
								<div class="icon-container">
									<span class="ti-help"></span>
									<span class="icon-name"> ti-help</span>
								</div>
								<div class="icon-container">
									<span class="ti-headphone"></span>
									<span class="icon-name"> ti-headphone</span>
								</div>
								<div class="icon-container">
									<span class="ti-harddrives"></span>
									<span class="icon-name"> ti-harddrives</span>
								</div>
								<div class="icon-container">
									<span class="ti-harddrive"></span>
									<span class="icon-name"> ti-harddrive</span>
								</div>
								<div class="icon-container">
									<span class="ti-gift"></span>
									<span class="icon-name"> ti-gift</span>
								</div>
								<div class="icon-container">
									<span class="ti-game"></span>
									<span class="icon-name"> ti-game</span>
								</div>
								<div class="icon-container">
									<span class="ti-filter"></span>
									<span class="icon-name"> ti-filter</span>
								</div>
								<div class="icon-container">
									<span class="ti-files"></span>
									<span class="icon-name"> ti-files</span>
								</div>
								<div class="icon-container">
									<span class="ti-file"></span>
									<span class="icon-name"> ti-file</span>
								</div>
								<div class="icon-container">
									<span class="ti-zip"></span>
									<span class="icon-name"> ti-zip</span>
								</div>
								<div class="icon-container">
									<span class="ti-folder"></span>
									<span class="icon-name"> ti-folder</span>
								</div>
								<div class="icon-container">
									<span class="ti-envelope"></span>
									<span class="icon-name"> ti-envelope</span>
								</div>
	
	
								<div class="icon-container">
									<span class="ti-dashboard"></span>
									<span class="icon-name"> ti-dashboard</span>
								</div>
								<div class="icon-container">
									<span class="ti-cloud"></span>
									<span class="icon-name"> ti-cloud</span>
								</div>
								<div class="icon-container">
									<span class="ti-cloud-up"></span>
									<span class="icon-name"> ti-cloud-up</span>
								</div>
								<div class="icon-container">
									<span class="ti-cloud-down"></span>
									<span class="icon-name"> ti-cloud-down</span>
								</div>
								<div class="icon-container">
									<span class="ti-clipboard"></span>
									<span class="icon-name"> ti-clipboard</span>
								</div>
								<div class="icon-container">
									<span class="ti-calendar"></span>
									<span class="icon-name"> ti-calendar</span>
								</div>
								<div class="icon-container">
									<span class="ti-book"></span>
									<span class="icon-name"> ti-book</span>
								</div>
								<div class="icon-container">
									<span class="ti-bell"></span>
									<span class="icon-name"> ti-bell</span>
								</div>
								<div class="icon-container">
									<span class="ti-basketball"></span>
									<span class="icon-name"> ti-basketball</span>
								</div>
								<div class="icon-container">
									<span class="ti-bar-chart"></span>
									<span class="icon-name"> ti-bar-chart</span>
								</div>
								<div class="icon-container">
									<span class="ti-bar-chart-alt"></span>
									<span class="icon-name"> ti-bar-chart-alt</span>
								</div>
	
	
								<div class="icon-container">
									<span class="ti-archive"></span>
									<span class="icon-name"> ti-archive</span>
								</div>
								<div class="icon-container">
									<span class="ti-anchor"></span>
									<span class="icon-name"> ti-anchor</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-alert"></span>
									<span class="icon-name"> ti-alert</span>
								</div>
								<div class="icon-container">
									<span class="ti-alarm-clock"></span>
									<span class="icon-name"> ti-alarm-clock</span>
								</div>
								<div class="icon-container">
									<span class="ti-agenda"></span>
									<span class="icon-name"> ti-agenda</span>
								</div>
								<div class="icon-container">
									<span class="ti-write"></span>
									<span class="icon-name"> ti-write</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-wallet"></span>
									<span class="icon-name"> ti-wallet</span>
								</div>
								<div class="icon-container">
									<span class="ti-video-clapper"></span>
									<span class="icon-name"> ti-video-clapper</span>
								</div>
								<div class="icon-container">
									<span class="ti-video-camera"></span>
									<span class="icon-name"> ti-video-camera</span>
								</div>
								<div class="icon-container">
									<span class="ti-vector"></span>
									<span class="icon-name"> ti-vector</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-support"></span>
									<span class="icon-name"> ti-support</span>
								</div>
								<div class="icon-container">
									<span class="ti-stamp"></span>
									<span class="icon-name"> ti-stamp</span>
								</div>
								<div class="icon-container">
									<span class="ti-slice"></span>
									<span class="icon-name"> ti-slice</span>
								</div>
								<div class="icon-container">
									<span class="ti-shortcode"></span>
									<span class="icon-name"> ti-shortcode</span>
								</div>
								<div class="icon-container">
									<span class="ti-receipt"></span>
									<span class="icon-name"> ti-receipt</span>
								</div>
								<div class="icon-container">
									<span class="ti-pin2"></span>
									<span class="icon-name"> ti-pin2</span>
								</div>
								<div class="icon-container">
									<span class="ti-pin-alt"></span>
									<span class="icon-name"> ti-pin-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-pencil-alt2"></span>
									<span class="icon-name"> ti-pencil-alt2</span>
								</div>
								<div class="icon-container">
									<span class="ti-eraser"></span>
									<span class="icon-name"> ti-eraser</span>
								</div>
								<div class="icon-container">
									<span class="ti-more"></span>
									<span class="icon-name"> ti-more</span>
								</div>
								<div class="icon-container">
									<span class="ti-more-alt"></span>
									<span class="icon-name"> ti-more-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-microphone-alt"></span>
									<span class="icon-name"> ti-microphone-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-magnet"></span>
									<span class="icon-name"> ti-magnet</span>
								</div>
								<div class="icon-container">
									<span class="ti-line-double"></span>
									<span class="icon-name"> ti-line-double</span>
								</div>
								<div class="icon-container">
									<span class="ti-line-dotted"></span>
									<span class="icon-name"> ti-line-dotted</span>
								</div>
								<div class="icon-container">
									<span class="ti-line-dashed"></span>
									<span class="icon-name"> ti-line-dashed</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-ink-pen"></span>
									<span class="icon-name"> ti-ink-pen</span>
								</div>
								<div class="icon-container">
									<span class="ti-info-alt"></span>
									<span class="icon-name"> ti-info-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-help-alt"></span>
									<span class="icon-name"> ti-help-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-headphone-alt"></span>
									<span class="icon-name"> ti-headphone-alt</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-gallery"></span>
									<span class="icon-name"> ti-gallery</span>
								</div>
								<div class="icon-container">
									<span class="ti-face-smile"></span>
									<span class="icon-name"> ti-face-smile</span>
								</div>
								<div class="icon-container">
									<span class="ti-face-sad"></span>
									<span class="icon-name"> ti-face-sad</span>
								</div>
								<div class="icon-container">
									<span class="ti-credit-card"></span>
									<span class="icon-name"> ti-credit-card</span>
								</div>
								<div class="icon-container">
									<span class="ti-comments-smiley"></span>
									<span class="icon-name"> ti-comments-smiley</span>
								</div>
								<div class="icon-container">
									<span class="ti-time"></span>
									<span class="icon-name"> ti-time</span>
								</div>
								<div class="icon-container">
									<span class="ti-share"></span>
									<span class="icon-name"> ti-share</span>
								</div>
								<div class="icon-container">
									<span class="ti-share-alt"></span>
									<span class="icon-name"> ti-share-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-rocket"></span>
									<span class="icon-name"> ti-rocket</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-new-window"></span>
									<span class="icon-name"> ti-new-window</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-rss"></span>
									<span class="icon-name"> ti-rss</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-rss-alt"></span>
									<span class="icon-name"> ti-rss-alt</span>
								</div>
							</div>
							<!-- /Web App Icons -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Control Icons -->
							<h3 class="widget-title">Control Icons</h3>
							<div class="icon-section">
								<div class="icon-container">
									<span class="ti-control-stop"></span>
									<span class="icon-name"> ti-control-stop</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-shuffle"></span>
									<span class="icon-name"> ti-control-shuffle</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-play"></span>
									<span class="icon-name"> ti-control-play</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-pause"></span>
									<span class="icon-name"> ti-control-pause</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-forward"></span>
									<span class="icon-name"> ti-control-forward</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-backward"></span>
									<span class="icon-name"> ti-control-backward</span>
								</div>
								<div class="icon-container">
									<span class="ti-volume"></span>
									<span class="icon-name"> ti-volume</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-skip-forward"></span>
									<span class="icon-name"> ti-control-skip-forward</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-skip-backward"></span>
									<span class="icon-name"> ti-control-skip-backward</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-record"></span>
									<span class="icon-name"> ti-control-record</span>
								</div>
								<div class="icon-container">
									<span class="ti-control-eject"></span>
									<span class="icon-name"> ti-control-eject</span>
								</div>
							</div>
							<!-- /Lorvens Icons -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Text Editor Icons -->
							<h3 class="widget-title">Text Editor</h3>
							<div class="icon-section">
								<div class="icon-container">
									<span class="ti-paragraph"></span>
									<span class="icon-name"> ti-paragraph</span>
								</div>
								<div class="icon-container">
									<span class="ti-uppercase"></span>
									<span class="icon-name"> ti-uppercase</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-underline"></span>
									<span class="icon-name"> ti-underline</span>
								</div>
								<div class="icon-container">
									<span class="ti-text"></span>
									<span class="icon-name"> ti-text</span>
								</div>
								<div class="icon-container">
									<span class="ti-Italic"></span>
									<span class="icon-name"> ti-Italic</span>
								</div>
								<div class="icon-container">
									<span class="ti-smallcap"></span>
									<span class="icon-name"> ti-smallcap</span>
								</div>
								<div class="icon-container">
									<span class="ti-list"></span>
									<span class="icon-name"> ti-list</span>
								</div>
								<div class="icon-container">
									<span class="ti-list-ol"></span>
									<span class="icon-name"> ti-list-ol</span>
								</div>
								<div class="icon-container">
									<span class="ti-align-right"></span>
									<span class="icon-name"> ti-align-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-align-left"></span>
									<span class="icon-name"> ti-align-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-align-justify"></span>
									<span class="icon-name"> ti-align-justify</span>
								</div>
								<div class="icon-container">
									<span class="ti-align-center"></span>
									<span class="icon-name"> ti-align-center</span>
								</div>
								<div class="icon-container">
									<span class="ti-quote-right"></span>
									<span class="icon-name"> ti-quote-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-quote-left"></span>
									<span class="icon-name"> ti-quote-left</span>
								</div>
							</div>
							<!-- /Text Editor Icons -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Layout Icons -->
							<h3 class="widget-title">Layout Icons</h3>
							<div class="icon-section">
								<div class="icon-container">
									<span class="ti-layout-width-full"></span>
									<span class="icon-name"> ti-layout-width-full</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-width-default"></span>
									<span class="icon-name"> ti-layout-width-default</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-width-default-alt"></span>
									<span class="icon-name"> ti-layout-width-default-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-tab"></span>
									<span class="icon-name"> ti-layout-tab</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-tab-window"></span>
									<span class="icon-name"> ti-layout-tab-window</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-tab-v"></span>
									<span class="icon-name"> ti-layout-tab-v</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-tab-min"></span>
									<span class="icon-name"> ti-layout-tab-min</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-slider"></span>
									<span class="icon-name"> ti-layout-slider</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-slider-alt"></span>
									<span class="icon-name"> ti-layout-slider-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-sidebar-right"></span>
									<span class="icon-name"> ti-layout-sidebar-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-sidebar-none"></span>
									<span class="icon-name"> ti-layout-sidebar-none</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-sidebar-left"></span>
									<span class="icon-name"> ti-layout-sidebar-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-placeholder"></span>
									<span class="icon-name"> ti-layout-placeholder</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-menu"></span>
									<span class="icon-name"> ti-layout-menu</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-menu-v"></span>
									<span class="icon-name"> ti-layout-menu-v</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-menu-separated"></span>
									<span class="icon-name"> ti-layout-menu-separated</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-menu-full"></span>
									<span class="icon-name"> ti-layout-menu-full</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-right"></span>
									<span class="icon-name"> ti-layout-media-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-right-alt"></span>
									<span class="icon-name"> ti-layout-media-right-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-overlay"></span>
									<span class="icon-name"> ti-layout-media-overlay</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-overlay-alt"></span>
									<span class="icon-name"> ti-layout-media-overlay-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-overlay-alt-2"></span>
									<span class="icon-name"> ti-layout-media-overlay-alt-2</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-left"></span>
									<span class="icon-name"> ti-layout-media-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-left-alt"></span>
									<span class="icon-name"> ti-layout-media-left-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-center"></span>
									<span class="icon-name"> ti-layout-media-center</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-media-center-alt"></span>
									<span class="icon-name"> ti-layout-media-center-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-list-thumb"></span>
									<span class="icon-name"> ti-layout-list-thumb</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-list-thumb-alt"></span>
									<span class="icon-name"> ti-layout-list-thumb-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-list-post"></span>
									<span class="icon-name"> ti-layout-list-post</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-list-large-image"></span>
									<span class="icon-name"> ti-layout-list-large-image</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-line-solid"></span>
									<span class="icon-name"> ti-layout-line-solid</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid4"></span>
									<span class="icon-name"> ti-layout-grid4</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid3"></span>
									<span class="icon-name"> ti-layout-grid3</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid2"></span>
									<span class="icon-name"> ti-layout-grid2</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid2-thumb"></span>
									<span class="icon-name"> ti-layout-grid2-thumb</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-cta-right"></span>
									<span class="icon-name"> ti-layout-cta-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-cta-left"></span>
									<span class="icon-name"> ti-layout-cta-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-cta-center"></span>
									<span class="icon-name"> ti-layout-cta-center</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-cta-btn-right"></span>
									<span class="icon-name"> ti-layout-cta-btn-right</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-cta-btn-left"></span>
									<span class="icon-name"> ti-layout-cta-btn-left</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-column4"></span>
									<span class="icon-name"> ti-layout-column4</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-column3"></span>
									<span class="icon-name"> ti-layout-column3</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-column2"></span>
									<span class="icon-name"> ti-layout-column2</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-accordion-separated"></span>
									<span class="icon-name"> ti-layout-accordion-separated</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-accordion-merged"></span>
									<span class="icon-name"> ti-layout-accordion-merged</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-accordion-list"></span>
									<span class="icon-name"> ti-layout-accordion-list</span>
								</div>
								<div class="icon-container">
									<span class="ti-widgetized"></span>
									<span class="icon-name"> ti-widgetized</span>
								</div>
								<div class="icon-container">
									<span class="ti-widget"></span>
									<span class="icon-name"> ti-widget</span>
								</div>
								<div class="icon-container">
									<span class="ti-widget-alt"></span>
									<span class="icon-name"> ti-widget-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-view-list"></span>
									<span class="icon-name"> ti-view-list</span>
								</div>
								<div class="icon-container">
									<span class="ti-view-list-alt"></span>
									<span class="icon-name"> ti-view-list-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-view-grid"></span>
									<span class="icon-name"> ti-view-grid</span>
								</div>
								<div class="icon-container">
									<span class="ti-upload"></span>
									<span class="icon-name"> ti-upload</span>
								</div>
								<div class="icon-container">
									<span class="ti-download"></span>
									<span class="icon-name"> ti-download</span>
								</div>
								<div class="icon-container">
									<span class="ti-loop"></span>
									<span class="icon-name"> ti-loop</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-sidebar-2"></span>
									<span class="icon-name"> ti-layout-sidebar-2</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid4-alt"></span>
									<span class="icon-name"> ti-layout-grid4-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid3-alt"></span>
									<span class="icon-name"> ti-layout-grid3-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-grid2-alt"></span>
									<span class="icon-name"> ti-layout-grid2-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-column4-alt"></span>
									<span class="icon-name"> ti-layout-column4-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-column3-alt"></span>
									<span class="icon-name"> ti-layout-column3-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-layout-column2-alt"></span>
									<span class="icon-name"> ti-layout-column2-alt</span>
								</div>
							</div>
							<!-- /Layout Icons -->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- Brand Icons -->
							<h3 class="widget-title">Brand Icons</h3>
							<div class="icon-section">
								<div class="icon-container">
									<span class="ti-flickr"></span>
									<span class="icon-name"> ti-flickr</span>
								</div>
								<div class="icon-container">
									<span class="ti-flickr-alt"></span>
									<span class="icon-name"> ti-flickr-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-instagram"></span>
									<span class="icon-name"> ti-instagram</span>
								</div>
								<div class="icon-container">
									<span class="ti-google"></span>
									<span class="icon-name"> ti-google</span>
								</div>
								<div class="icon-container">
									<span class="ti-github"></span>
									<span class="icon-name"> ti-github</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-facebook"></span>
									<span class="icon-name"> ti-facebook</span>
								</div>
								<div class="icon-container">
									<span class="ti-dropbox"></span>
									<span class="icon-name"> ti-dropbox</span>
								</div>
								<div class="icon-container">
									<span class="ti-dropbox-alt"></span>
									<span class="icon-name"> ti-dropbox-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-dribbble"></span>
									<span class="icon-name"> ti-dribbble</span>
								</div>
								<div class="icon-container">
									<span class="ti-apple"></span>
									<span class="icon-name"> ti-apple</span>
								</div>
								<div class="icon-container">
									<span class="ti-android"></span>
									<span class="icon-name"> ti-android</span>
								</div>
								<div class="icon-container">
									<span class="ti-yahoo"></span>
									<span class="icon-name"> ti-yahoo</span>
								</div>
								<div class="icon-container">
									<span class="ti-trello"></span>
									<span class="icon-name"> ti-trello</span>
								</div>
								<div class="icon-container">
									<span class="ti-stack-overflow"></span>
									<span class="icon-name"> ti-stack-overflow</span>
								</div>
								<div class="icon-container">
									<span class="ti-soundcloud"></span>
									<span class="icon-name"> ti-soundcloud</span>
								</div>
								<div class="icon-container">
									<span class="ti-sharethis"></span>
									<span class="icon-name"> ti-sharethis</span>
								</div>
								<div class="icon-container">
									<span class="ti-sharethis-alt"></span>
									<span class="icon-name"> ti-sharethis-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-reddit"></span>
									<span class="icon-name"> ti-reddit</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-microsoft"></span>
									<span class="icon-name"> ti-microsoft</span>
								</div>
								<div class="icon-container">
									<span class="ti-microsoft-alt"></span>
									<span class="icon-name"> ti-microsoft-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-linux"></span>
									<span class="icon-name"> ti-linux</span>
								</div>
								<div class="icon-container">
									<span class="ti-jsfiddle"></span>
									<span class="icon-name"> ti-jsfiddle</span>
								</div>
								<div class="icon-container">
									<span class="ti-joomla"></span>
									<span class="icon-name"> ti-joomla</span>
								</div>
								<div class="icon-container">
									<span class="ti-html5"></span>
									<span class="icon-name"> ti-html5</span>
								</div>
								<div class="icon-container">
									<span class="ti-css3"></span>
									<span class="icon-name"> ti-css3</span>
								</div>
								<div class="icon-container">
									<span class="ti-drupal"></span>
									<span class="icon-name"> ti-drupal</span>
								</div>
								<div class="icon-container">
									<span class="ti-wordpress"></span>
									<span class="icon-name"> ti-wordpress</span>
								</div>
								<div class="icon-container">
									<span class="ti-tumblr"></span>
									<span class="icon-name"> ti-tumblr</span>
								</div>
								<div class="icon-container">
									<span class="ti-tumblr-alt"></span>
									<span class="icon-name"> ti-tumblr-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-skype"></span>
									<span class="icon-name"> ti-skype</span>
								</div>
								<div class="icon-container">
									<span class="ti-youtube"></span>
									<span class="icon-name"> ti-youtube</span>
								</div>
								<div class="icon-container">
									<span class="ti-vimeo"></span>
									<span class="icon-name"> ti-vimeo</span>
								</div>
								<div class="icon-container">
									<span class="ti-vimeo-alt"></span>
									<span class="icon-name"> ti-vimeo-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-twitter"></span>
									<span class="icon-name"> ti-twitter</span>
								</div>
								<div class="icon-container">
									<span class="ti-twitter-alt"></span>
									<span class="icon-name"> ti-twitter-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-linkedin"></span>
									<span class="icon-name"> ti-linkedin</span>
								</div>
								<div class="icon-container">
									<span class="ti-pinterest"></span>
									<span class="icon-name"> ti-pinterest</span>
								</div>
	
								<div class="icon-container">
									<span class="ti-pinterest-alt"></span>
									<span class="icon-name"> ti-pinterest-alt</span>
								</div>
								<div class="icon-container">
									<span class="ti-themify-logo"></span>
									<span class="icon-name"> ti-themify-logo</span>
								</div>
								<div class="icon-container">
									<span class="ti-themify-favicon"></span>
									<span class="icon-name"> ti-themify-favicon</span>
								</div>
								<div class="icon-container">
									<span class="ti-themify-favicon-alt"></span>
									<span class="icon-name"> ti-themify-favicon-alt</span>
								</div>
							</div>
							<!-- /Brand Icons -->

						</div>
					</div>
				</div>
	
			</div>
			<!-- /Main Content -->
			<!--Copy Rights-->
			<div class="container">
				<div class="d-sm-flex justify-content-center">
				  <span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2018 <a href="http://www.konnectplugins.com/" target="_blank">konnectcode</a>. All rights reserved.</span>
				</div>
			</div>
			<!-- /Copy Rights-->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
			<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/themify.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:41:47 GMT -->
</html>