<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/modals.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:40:24 GMT -->
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
							<h3 class="block-title">Modals</h3>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.php">
										<span class="ti-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">UI Kit</li>
								<li class="breadcrumb-item active">Modals</li>
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
		
							<!-- Modal Item-->
							<h3 class="widget-title">Simple modal</h3>
							<p class="margin-l20">This is Simple modal. just you need to add one button with <code>data-target</code> attribute. give same value to modal element as <code>id</code></p>
							<div class="proclinic-widget">
								<!-- Modal Button-->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									Launch modal
								</button>	
								<!-- /Modal Button-->
								<!-- Modal Popup-->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Woohoo, you're reading this text in a modal!
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal Popup-->
							</div>
							<!-- Modal Item-->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- /Modal Item-->
							<h3 class="widget-title">Scrolling long content</h3>
							<p class="margin-l20">This is Scrolling long content modal. just you need to add one button with <code>data-target</code> attribute. give same value to modal element as <code>id</code>. if <code>.modal-body</code> increases content automatically it will also increase.</p>
							<div class="proclinic-widget">
								<!-- Modal Button-->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
									Launch modal
								</button>
								<!-- /Modal Button-->		
								<!-- Modal Popup-->
								<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
													faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
													et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
													faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
													et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
													faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
													et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
													faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
													et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
													faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
													et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
													faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur
													et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal Popup-->		
							</div>
							<!-- Modal Item-->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- /Modal Item-->		
							<h3 class="widget-title">Vertically centered</h3>
							<p class="margin-l20">This is Vertically centered modal. add <code>class="modal-dialog-centered"</code> to modal element.</p>
							<div class="proclinic-widget">
								<!-- Modal Button-->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
									Launch demo modal
								</button>
								<!-- /Modal Button-->
								<!-- Modal Popup-->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
									<!-- /.col-sm-9 -->
								</div>
								<!-- /Modal Popup-->
							</div>
							<!-- Modal Item-->
							</div>
							<div class="widget-area-2 proclinic-box-shadow">
							<!-- /Modal Item-->		
							<h3 class="widget-title">Optional sizes</h3>
							<p class="margin-l20">Here are multi sized modals. add <code>class="modal-dialog modal-lg"</code> or <code>class="modal-dialog modal-sm"</code> to modal element.</p>
							<div class="proclinic-widget mb-3">
								<!-- Modal Button-->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
								<!-- /Modal Button-->
								<!-- Modal Popup-->
								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="myLargeModalLabel">Large modal
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											</div>
		
										</div>
									</div>
								</div>
								<!-- /Modal Popup-->
								<!-- Modal Button-->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
								<!-- Modal Button-->
								<!-- Modal Popup-->
								<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="mySmallModalLabel">Small modal
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
		
											</div>
											<div class="modal-body">
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
													Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal Popup-->
							</div>
							<!-- Modal Item-->		
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/modals.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:40:24 GMT -->
</html>