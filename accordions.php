<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/accordions.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:40:23 GMT -->
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
							<h3 class="block-title">Accordions</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">UI Kit</li>
								<li class="breadcrumb-item active">Accordions</li>
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
							<!-- Item -->
							<h3 class="widget-title">Collapse</h3>
							<p class="margin-l20">Just add
								<code>class="collapse"</code> to any
								<code>&lt;div&gt;</code>.</p>
							<div class="proclinic-widget">
								<p>
									<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
									 aria-controls="collapseExample">
										Link with href
									</a>
									<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
									 aria-expanded="false" aria-controls="collapseExample">
										Button with data-target
									</button>
								</p>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim
										keffiyeh helvetica,
										craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
							<!-- /Item -->
						</div>
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Item -->
							<h3 class="widget-title">Accordion Dark</h3>
							<p class="margin-l20">Just add
								<code>class="collapse"</code> to any
								<code>&lt;div&gt;</code> and add
								<code>btn</code> with data-target</p>
							<div class="proclinic-widget mb-3">
								<div id="accordion">
									<div class="card">
										<div class="accordion-header" id="headingOne">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Collapsible Group Item #1
											</h5>
										</div>

										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
												<small>pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
													moon officia aute,
													non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
													tempor, sunt
													aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="headingTwo">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Collapsible Group Item #2
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="headingThree">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item #3
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Item -->

						</div>
						<div class="widget-area-2 proclinic-box-shadow">
							<!-- Item -->
							<h3 class="widget-title">Accordion Light</h3>
							<p class="margin-l20">Just add
								<code>class="collapse"</code> to any
								<code>&lt;div&gt;</code> and add
								<code>btn</code> with data-target</p>
							<div class="proclinic-widget mb-3">
								<div id="accordion_light">
									<div class="card">
										<div class="accordion-header" id="heading1">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
												Collapsible Group Item #1
											</h5>
										</div>

										<div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion_light">
											<div class="card-body">
												<small>pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
													moon officia aute,
													non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
													tempor, sunt
													aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="heading2">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
												Collapsible Group Item #2
											</h5>
										</div>
										<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion_light">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="accordion-header" id="heading3">
											<h5 class="mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
												Collapsible Group Item #3
											</h5>
										</div>
										<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion_light">
											<div class="card-body">
												<small>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
													wolf moon officia
													aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
													moon tempor,
													sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
													helvetica,
													craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
													Leggings
													occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
													accusamus
													labore sustainable VHS.</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Item -->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/accordions.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:40:23 GMT -->
</html>