<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:40:37 GMT -->
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
							<h3 class="block-title">Grid</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">UI Kit</li>
								<li class="breadcrumb-item active">Grid</li>
							</ol>
						</div>
					</div>
				</div>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Three Columns</h3>
							<p class="margin-l20">Bootstrap grid system is beatiful and very easy to implement. split <code>.col-sm</code> inside <code>.row</code>.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col-sm">
										One of three columns
									</div>
									<div class="col-sm">
										One of three columns
									</div>
									<div class="col-sm">
										One of three columns
									</div>
								</div>		
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Equal-width</h3>
							<p class="margin-l20">This grid system automatically split <code>.col</code> eqal width.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col">
										1 of 2
									</div>
									<div class="col">
										2 of 2
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col">
										2 of 3
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Setting one column width</h3>
							<p class="margin-l20">This grid system automatically adjust <code>.col</code> width.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-6">
										2 of 3 (wider)
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-5">
										2 of 3 (wider)
									</div>
									<div class="col">
										3 of 3
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Variable width content</h3>
							<p class="margin-l20">This grid system automatically justify <code>.col</code> width.</p>
							<div class="proclinic-widget">
								<div class="row justify-content-md-center">
									<div class="col col-lg-2">
										1 of 3
									</div>
									<div class="col-md-auto">
										Variable width content
									</div>
									<div class="col col-lg-2">
										3 of 3
									</div>
								</div>
								<div class="row">
									<div class="col">
										1 of 3
									</div>
									<div class="col-md-auto">
										Variable width content
									</div>
									<div class="col col-lg-2">
										3 of 3
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Equal-width multi-row</h3>
							<p class="margin-l20">This grid system give equal <code>.col</code> width.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col">col</div>
									<div class="col">col</div>
									<div class="w-100"></div>
									<div class="col">col</div>
									<div class="col">col</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Stacked to horizontal</h3>
							<p class="margin-l20">This grid system Stacked to horizontal</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col-sm-8">col-sm-8</div>
									<div class="col-sm-4">col-sm-4</div>
								</div>
								<div class="row">
									<div class="col-sm">col-sm</div>
									<div class="col-sm">col-sm</div>
									<div class="col-sm">col-sm</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">		
							<!-- Grid Item -->
							<h3 class="widget-title">Mix and match</h3>
							<p class="margin-l20">This grid system is mix and match</p>
							<div class="proclinic-widget">
								<!-- Stack the columns on mobile by making one full-width and the other half-width -->
								<div class="row">
									<div class="col-12 col-md-8">.col-12 .col-md-8</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
								</div>
		
								<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
								<div class="row">
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
									<div class="col-6 col-md-4">.col-6 .col-md-4</div>
								</div>
		
								<!-- Columns are always 50% wide, on mobile and desktop -->
								<div class="row">
									<div class="col-6">.col-6</div>
									<div class="col-6">.col-6</div>
								</div>
		
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->
							<h3 class="widget-title">Vertical alignment</h3>
							<p class="margin-l20">This grid system gives Vertical alignment</p>
							<div class="proclinic-widget">
								<div class="row align-items-start">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
								<div class="row align-items-end">
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
									<div class="col">
										One of three columns
									</div>
								</div>
		
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">		
							<!-- Grid Item -->		
							<h3 class="widget-title">Horizontal alignment</h3>
							<p class="margin-l20">This grid system gives horizontal alignment.</p>
							<div class="proclinic-widget">
								<div class="row justify-content-start">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-end">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-around">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
								<div class="row justify-content-between">
									<div class="col-4">
										One of two columns
									</div>
									<div class="col-4">
										One of two columns
									</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">		
							<!-- Grid Item -->		
							<h3 class="widget-title">Column wrapping</h3>
							<p class="margin-l20">This grid system give column wrapping.</p>
							<div class="proclinic-widget">
								<div class="row">
									<div class="col-9">.col-9</div>
									<div class="col-4">.col-4
										<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
									<div class="col-6">.col-6
										<br>Subsequent columns continue along the new line.</div>
								</div>
							</div>
							<!-- /Grid Item -->
							</div>
							<div class="widget-area-2 proclinic-grid proclinic-box-shadow">
							<!-- Grid Item -->		
							<h3 class="widget-title">Column breaks</h3>
							<p class="margin-l20">This grid system gives column breaks.</p>
							<div class="proclinic-widget mb-3">
								<div class="row">
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
		
									<!-- Force next columns to break to new line -->
									<div class="w-100"></div>
		
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
									<div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
								</div>
		
		
								<div class="row">
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
		
									<!-- Force next columns to break to new line at md breakpoint and up -->
									<div class="w-100 d-none d-md-block"></div>
		
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
									<div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
								</div>
							</div>
							<!-- /Grid Item -->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:40:37 GMT -->
</html>