<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/font-awesome.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:41:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ProClinic-Bootstrap4 Hospital Admin</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font-Awesome icons CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
            <div class="double-bounce1">
            </div>
            <div class="double-bounce2">
            </div>
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
                            <h3 class="block-title">Font Awesome Icons</h3>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <span class="ti-home"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Icons</li>
                                <li class="breadcrumb-item active">Font Awesome Icons</li>
                            </ol>
                        </div>
                    </div>
                </div>
            <!-- /Breadcrumb -->
            <!-- Main Content -->
            <div class="container">
                <div class="row font-awesome-row">
                    <div class="col-md-12">
                        <div class="widget-area-2 proclinic-box-shadow">
                            <!-- New Icons -->
                            <section id="new-icons">
                                    <h3 class="widget-title">41 New Icons </h3>
                                    <p class="margin-l20">Font Awesome icons are simple to implement. Just add <code>class="fa"</code> to <code>&lt;i&gt;</code></p>
                            <div class="icon-section">

                                <div class="icon-container">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <span class="icon-name">address-book</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                    <span class="icon-name">address-book-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                    <span class="icon-name">address-card</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                    <span class="icon-name">address-card-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-bandcamp" aria-hidden="true"></i>
                                    <span class="icon-name">bandcamp</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span class="icon-name">bath</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-bathtub" aria-hidden="true"></i>
                                    <span class="icon-name">bathtub
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-drivers-license" aria-hidden="true"></i>
                                    <span class="icon-name">drivers-license
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                                    <span class="icon-name">drivers-license-o
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-eercast" aria-hidden="true"></i>
                                    <span class="icon-name">eercast</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                    <span class="icon-name">envelope-open</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                    <span class="icon-name">envelope-open-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-etsy" aria-hidden="true"></i>
                                    <span class="icon-name">etsy</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                                    <span class="icon-name">free-code-camp</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-grav" aria-hidden="true"></i>
                                    <span class="icon-name">grav</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                    <span class="icon-name">handshake-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                                    <span class="icon-name">id-badge</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                    <span class="icon-name">id-card</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                    <span class="icon-name">id-card-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-imdb" aria-hidden="true"></i>
                                    <span class="icon-name">imdb</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-linode" aria-hidden="true"></i>
                                    <span class="icon-name">linode</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-meetup" aria-hidden="true"></i>
                                    <span class="icon-name">meetup</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-microchip" aria-hidden="true"></i>
                                    <span class="icon-name">microchip</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-podcast" aria-hidden="true"></i>
                                    <span class="icon-name">podcast</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-quora" aria-hidden="true"></i>
                                    <span class="icon-name">quora</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-ravelry" aria-hidden="true"></i>
                                    <span class="icon-name">ravelry</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-s15" aria-hidden="true"></i>
                                    <span class="icon-name">s15
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-shower" aria-hidden="true"></i>
                                    <span class="icon-name">shower</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                    <span class="icon-name">snowflake-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-superpowers" aria-hidden="true"></i>
                                    <span class="icon-name">superpowers</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-telegram" aria-hidden="true"></i>
                                    <span class="icon-name">telegram</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-0" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-0
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-1" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-1
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-2" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-2
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-3" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-3
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-4" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-4
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-empty" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-empty</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-full" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-full</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-half</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-quarter</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
                                    <span class="icon-name">thermometer-three-quarters</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-times-rectangle" aria-hidden="true"></i>
                                    <span class="icon-name">times-rectangle
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-times-rectangle-o" aria-hidden="true"></i>
                                    <span class="icon-name">times-rectangle-o
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <span class="icon-name">user-circle</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    <span class="icon-name">user-circle-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    <span class="icon-name">user-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-vcard" aria-hidden="true"></i>
                                    <span class="icon-name">vcard
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-vcard-o" aria-hidden="true"></i>
                                    <span class="icon-name">vcard-o
                                        <span class="text-muted">(alias)</span>
                                    </span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                    <span class="icon-name">window-close</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-window-close-o" aria-hidden="true"></i>
                                    <span class="icon-name">window-close-o</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                    <span class="icon-name">window-maximize</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-window-minimize" aria-hidden="true"></i>
                                    <span class="icon-name">window-minimize</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-window-restore" aria-hidden="true"></i>
                                    <span class="icon-name">window-restore</span>
                                </div>

                                <div class="icon-container">
                                    <i class="fa fa-wpexplorer" aria-hidden="true"></i>
                                    <span class="icon-name">wpexplorer</span>
                                </div>

                            </div>
                            </section>
                            <!-- /New Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- web application Icons -->
                            <section id="web-application">
                                <h3 class="widget-title">Web Application Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-address-book" aria-hidden="true"></i>
                                        <span class="icon-name">address-book</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                                        <span class="icon-name">address-book-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-address-card" aria-hidden="true"></i>
                                        <span class="icon-name">address-card</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                        <span class="icon-name">address-card-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-adjust" aria-hidden="true"></i>
                                        <span class="icon-name">adjust</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                                        <span class="icon-name">american-sign-language-interpreting</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-anchor" aria-hidden="true"></i>
                                        <span class="icon-name">anchor</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                        <span class="icon-name">archive</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                                        <span class="icon-name">area-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows" aria-hidden="true"></i>
                                        <span class="icon-name">arrows</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows-h" aria-hidden="true"></i>
                                        <span class="icon-name">arrows-h</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows-v" aria-hidden="true"></i>
                                        <span class="icon-name">arrows-v</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-asl-interpreting" aria-hidden="true"></i>
                                        <span class="icon-name">asl-interpreting
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
                                        <span class="icon-name">assistive-listening-systems</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-asterisk" aria-hidden="true"></i>
                                        <span class="icon-name">asterisk</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-at" aria-hidden="true"></i>
                                        <span class="icon-name">at</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-audio-description" aria-hidden="true"></i>
                                        <span class="icon-name">audio-description</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-automobile" aria-hidden="true"></i>
                                        <span class="icon-name">automobile
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                                        <span class="icon-name">balance-scale</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                        <span class="icon-name">ban</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bank" aria-hidden="true"></i>
                                        <span class="icon-name">bank
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span class="icon-name">bar-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                        <span class="icon-name">bar-chart-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-barcode" aria-hidden="true"></i>
                                        <span class="icon-name">barcode</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                        <span class="icon-name">bars</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span class="icon-name">bath</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bathtub" aria-hidden="true"></i>
                                        <span class="icon-name">bathtub
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery" aria-hidden="true"></i>
                                        <span class="icon-name">battery
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-0" aria-hidden="true"></i>
                                        <span class="icon-name">battery-0
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-1" aria-hidden="true"></i>
                                        <span class="icon-name">battery-1
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-2" aria-hidden="true"></i>
                                        <span class="icon-name">battery-2
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-3" aria-hidden="true"></i>
                                        <span class="icon-name">battery-3
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-4" aria-hidden="true"></i>
                                        <span class="icon-name">battery-4
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-empty" aria-hidden="true"></i>
                                        <span class="icon-name">battery-empty</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-full" aria-hidden="true"></i>
                                        <span class="icon-name">battery-full</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-half" aria-hidden="true"></i>
                                        <span class="icon-name">battery-half</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-quarter" aria-hidden="true"></i>
                                        <span class="icon-name">battery-quarter</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-battery-three-quarters" aria-hidden="true"></i>
                                        <span class="icon-name">battery-three-quarters</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span class="icon-name">bed</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-beer" aria-hidden="true"></i>
                                        <span class="icon-name">beer</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span class="icon-name">bell</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                        <span class="icon-name">bell-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bell-slash" aria-hidden="true"></i>
                                        <span class="icon-name">bell-slash</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bell-slash-o" aria-hidden="true"></i>
                                        <span class="icon-name">bell-slash-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bicycle" aria-hidden="true"></i>
                                        <span class="icon-name">bicycle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-binoculars" aria-hidden="true"></i>
                                        <span class="icon-name">binoculars</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                        <span class="icon-name">birthday-cake</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-blind" aria-hidden="true"></i>
                                        <span class="icon-name">blind</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bluetooth" aria-hidden="true"></i>
                                        <span class="icon-name">bluetooth</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bluetooth-b" aria-hidden="true"></i>
                                        <span class="icon-name">bluetooth-b</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bolt" aria-hidden="true"></i>
                                        <span class="icon-name">bolt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bomb" aria-hidden="true"></i>
                                        <span class="icon-name">bomb</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-book" aria-hidden="true"></i>
                                        <span class="icon-name">book</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                                        <span class="icon-name">bookmark</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                        <span class="icon-name">bookmark-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-braille" aria-hidden="true"></i>
                                        <span class="icon-name">braille</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                                        <span class="icon-name">briefcase</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bug" aria-hidden="true"></i>
                                        <span class="icon-name">bug</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        <span class="icon-name">building</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-building-o" aria-hidden="true"></i>
                                        <span class="icon-name">building-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                        <span class="icon-name">bullhorn</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                                        <span class="icon-name">bullseye</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bus" aria-hidden="true"></i>
                                        <span class="icon-name">bus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cab" aria-hidden="true"></i>
                                        <span class="icon-name">cab
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calculator" aria-hidden="true"></i>
                                        <span class="icon-name">calculator</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <span class="icon-name">calendar</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        <span class="icon-name">calendar-check-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                        <span class="icon-name">calendar-minus-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                        <span class="icon-name">calendar-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                                        <span class="icon-name">calendar-plus-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                                        <span class="icon-name">calendar-times-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-camera" aria-hidden="true"></i>
                                        <span class="icon-name">camera</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-camera-retro" aria-hidden="true"></i>
                                        <span class="icon-name">camera-retro</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <span class="icon-name">car</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                        <span class="icon-name">cart-arrow-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <span class="icon-name">cart-plus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc" aria-hidden="true"></i>
                                        <span class="icon-name">cc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-certificate" aria-hidden="true"></i>
                                        <span class="icon-name">certificate</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span class="icon-name">check</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                        <span class="icon-name">check-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">check-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span class="icon-name">check-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">check-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-child" aria-hidden="true"></i>
                                        <span class="icon-name">child</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <span class="icon-name">circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                                        <span class="icon-name">circle-o-notch</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-circle-thin" aria-hidden="true"></i>
                                        <span class="icon-name">circle-thin</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span class="icon-name">clock-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                        <span class="icon-name">clone</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                        <span class="icon-name">close
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cloud" aria-hidden="true"></i>
                                        <span class="icon-name">cloud</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                        <span class="icon-name">cloud-download</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                        <span class="icon-name">cloud-upload</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-code" aria-hidden="true"></i>
                                        <span class="icon-name">code</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-code-fork" aria-hidden="true"></i>
                                        <span class="icon-name">code-fork</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-coffee" aria-hidden="true"></i>
                                        <span class="icon-name">coffee</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="icon-name">cog</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        <span class="icon-name">cogs</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <span class="icon-name">comment</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        <span class="icon-name">comment-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-commenting" aria-hidden="true"></i>
                                        <span class="icon-name">commenting</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                        <span class="icon-name">commenting-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                        <span class="icon-name">comments</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                        <span class="icon-name">comments-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-compass" aria-hidden="true"></i>
                                        <span class="icon-name">compass</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-copyright" aria-hidden="true"></i>
                                        <span class="icon-name">copyright</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-creative-commons" aria-hidden="true"></i>
                                        <span class="icon-name">creative-commons</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <span class="icon-name">credit-card</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        <span class="icon-name">credit-card-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-crop" aria-hidden="true"></i>
                                        <span class="icon-name">crop</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-crosshairs" aria-hidden="true"></i>
                                        <span class="icon-name">crosshairs</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cube" aria-hidden="true"></i>
                                        <span class="icon-name">cube</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cubes" aria-hidden="true"></i>
                                        <span class="icon-name">cubes</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                        <span class="icon-name">cutlery</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dashboard" aria-hidden="true"></i>
                                        <span class="icon-name">dashboard
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-database" aria-hidden="true"></i>
                                        <span class="icon-name">database</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-deaf" aria-hidden="true"></i>
                                        <span class="icon-name">deaf</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-deafness" aria-hidden="true"></i>
                                        <span class="icon-name">deafness
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>
                                        <span class="icon-name">desktop</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-diamond" aria-hidden="true"></i>
                                        <span class="icon-name">diamond</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">dot-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <span class="icon-name">download</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-drivers-license" aria-hidden="true"></i>
                                        <span class="icon-name">drivers-license
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-drivers-license-o" aria-hidden="true"></i>
                                        <span class="icon-name">drivers-license-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                        <span class="icon-name">edit
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        <span class="icon-name">ellipsis-h</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        <span class="icon-name">ellipsis-v</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span class="icon-name">envelope</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <span class="icon-name">envelope-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>
                                        <span class="icon-name">envelope-open</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                        <span class="icon-name">envelope-open-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-envelope-square" aria-hidden="true"></i>
                                        <span class="icon-name">envelope-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eraser" aria-hidden="true"></i>
                                        <span class="icon-name">eraser</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                        <span class="icon-name">exchange</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-exclamation" aria-hidden="true"></i>
                                        <span class="icon-name">exclamation</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        <span class="icon-name">exclamation-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        <span class="icon-name">exclamation-triangle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                        <span class="icon-name">external-link</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                        <span class="icon-name">external-link-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <span class="icon-name">eye</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        <span class="icon-name">eye-slash</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eyedropper" aria-hidden="true"></i>
                                        <span class="icon-name">eyedropper</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fax" aria-hidden="true"></i>
                                        <span class="icon-name">fax</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-feed" aria-hidden="true"></i>
                                        <span class="icon-name">feed
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-female" aria-hidden="true"></i>
                                        <span class="icon-name">female</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fighter-jet" aria-hidden="true"></i>
                                        <span class="icon-name">fighter-jet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-archive-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-archive-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-audio-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-code-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-code-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-excel-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-image-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-movie-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-movie-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-pdf-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-photo-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-photo-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-picture-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-picture-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-powerpoint-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-sound-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-sound-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-video-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-word-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-word-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-zip-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-zip-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-film" aria-hidden="true"></i>
                                        <span class="icon-name">film</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-filter" aria-hidden="true"></i>
                                        <span class="icon-name">filter</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fire" aria-hidden="true"></i>
                                        <span class="icon-name">fire</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fire-extinguisher" aria-hidden="true"></i>
                                        <span class="icon-name">fire-extinguisher</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-flag" aria-hidden="true"></i>
                                        <span class="icon-name">flag</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                                        <span class="icon-name">flag-checkered</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                                        <span class="icon-name">flag-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-flash" aria-hidden="true"></i>
                                        <span class="icon-name">flash
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-flask" aria-hidden="true"></i>
                                        <span class="icon-name">flask</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-folder" aria-hidden="true"></i>
                                        <span class="icon-name">folder</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-folder-o" aria-hidden="true"></i>
                                        <span class="icon-name">folder-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                                        <span class="icon-name">folder-open</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                        <span class="icon-name">folder-open-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-frown-o" aria-hidden="true"></i>
                                        <span class="icon-name">frown-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                        <span class="icon-name">futbol-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gamepad" aria-hidden="true"></i>
                                        <span class="icon-name">gamepad</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gavel" aria-hidden="true"></i>
                                        <span class="icon-name">gavel</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gear" aria-hidden="true"></i>
                                        <span class="icon-name">gear
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gears" aria-hidden="true"></i>
                                        <span class="icon-name">gears
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gift" aria-hidden="true"></i>
                                        <span class="icon-name">gift</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-glass" aria-hidden="true"></i>
                                        <span class="icon-name">glass</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                        <span class="icon-name">globe</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <span class="icon-name">graduation-cap</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-group" aria-hidden="true"></i>
                                        <span class="icon-name">group
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-grab-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-grab-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-lizard-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-lizard-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-paper-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-peace-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-pointer-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-rock-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-rock-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-scissors-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-scissors-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-spock-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-stop-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-stop-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                        <span class="icon-name">handshake-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hard-of-hearing" aria-hidden="true"></i>
                                        <span class="icon-name">hard-of-hearing
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hashtag" aria-hidden="true"></i>
                                        <span class="icon-name">hashtag</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hdd-o" aria-hidden="true"></i>
                                        <span class="icon-name">hdd-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-headphones" aria-hidden="true"></i>
                                        <span class="icon-name">headphones</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <span class="icon-name">heart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <span class="icon-name">heart-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        <span class="icon-name">heartbeat</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-history" aria-hidden="true"></i>
                                        <span class="icon-name">history</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span class="icon-name">home</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hotel" aria-hidden="true"></i>
                                        <span class="icon-name">hotel
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-1" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-1
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-2" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-2
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-3" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-3
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-end" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-end</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-half</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                                        <span class="icon-name">hourglass-start</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-i-cursor" aria-hidden="true"></i>
                                        <span class="icon-name">i-cursor</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-id-badge" aria-hidden="true"></i>
                                        <span class="icon-name">id-badge</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-id-card" aria-hidden="true"></i>
                                        <span class="icon-name">id-card</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                        <span class="icon-name">id-card-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-image" aria-hidden="true"></i>
                                        <span class="icon-name">image
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-inbox" aria-hidden="true"></i>
                                        <span class="icon-name">inbox</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-industry" aria-hidden="true"></i>
                                        <span class="icon-name">industry</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                        <span class="icon-name">info</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span class="icon-name">info-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-institution" aria-hidden="true"></i>
                                        <span class="icon-name">institution
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                        <span class="icon-name">key</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                                        <span class="icon-name">keyboard-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-language" aria-hidden="true"></i>
                                        <span class="icon-name">language</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                        <span class="icon-name">laptop</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-leaf" aria-hidden="true"></i>
                                        <span class="icon-name">leaf</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-legal" aria-hidden="true"></i>
                                        <span class="icon-name">legal
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-lemon-o" aria-hidden="true"></i>
                                        <span class="icon-name">lemon-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-level-down" aria-hidden="true"></i>
                                        <span class="icon-name">level-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span class="icon-name">level-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-life-bouy" aria-hidden="true"></i>
                                        <span class="icon-name">life-bouy
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-life-buoy" aria-hidden="true"></i>
                                        <span class="icon-name">life-buoy
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                                        <span class="icon-name">life-ring</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-life-saver" aria-hidden="true"></i>
                                        <span class="icon-name">life-saver
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                                        <span class="icon-name">lightbulb-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                                        <span class="icon-name">line-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        <span class="icon-name">location-arrow</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <span class="icon-name">lock</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-low-vision" aria-hidden="true"></i>
                                        <span class="icon-name">low-vision</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-magic" aria-hidden="true"></i>
                                        <span class="icon-name">magic</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-magnet" aria-hidden="true"></i>
                                        <span class="icon-name">magnet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mail-forward" aria-hidden="true"></i>
                                        <span class="icon-name">mail-forward
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mail-reply" aria-hidden="true"></i>
                                        <span class="icon-name">mail-reply
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mail-reply-all" aria-hidden="true"></i>
                                        <span class="icon-name">mail-reply-all
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-male" aria-hidden="true"></i>
                                        <span class="icon-name">male</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-map" aria-hidden="true"></i>
                                        <span class="icon-name">map</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span class="icon-name">map-marker</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-map-o" aria-hidden="true"></i>
                                        <span class="icon-name">map-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-map-pin" aria-hidden="true"></i>
                                        <span class="icon-name">map-pin</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-map-signs" aria-hidden="true"></i>
                                        <span class="icon-name">map-signs</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-meh-o" aria-hidden="true"></i>
                                        <span class="icon-name">meh-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-microchip" aria-hidden="true"></i>
                                        <span class="icon-name">microchip</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-microphone" aria-hidden="true"></i>
                                        <span class="icon-name">microphone</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-microphone-slash" aria-hidden="true"></i>
                                        <span class="icon-name">microphone-slash</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <span class="icon-name">minus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                        <span class="icon-name">minus-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                                        <span class="icon-name">minus-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">minus-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <span class="icon-name">mobile</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                                        <span class="icon-name">mobile-phone
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                        <span class="icon-name">money</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-moon-o" aria-hidden="true"></i>
                                        <span class="icon-name">moon-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mortar-board" aria-hidden="true"></i>
                                        <span class="icon-name">mortar-board
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                        <span class="icon-name">motorcycle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                                        <span class="icon-name">mouse-pointer</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-music" aria-hidden="true"></i>
                                        <span class="icon-name">music</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-navicon" aria-hidden="true"></i>
                                        <span class="icon-name">navicon
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                        <span class="icon-name">newspaper-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span class="icon-name">object-group</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-object-ungroup" aria-hidden="true"></i>
                                        <span class="icon-name">object-ungroup</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                        <span class="icon-name">paint-brush</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        <span class="icon-name">paper-plane</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                        <span class="icon-name">paper-plane-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paw" aria-hidden="true"></i>
                                        <span class="icon-name">paw</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        <span class="icon-name">pencil</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                        <span class="icon-name">pencil-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">pencil-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-percent" aria-hidden="true"></i>
                                        <span class="icon-name">percent</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span class="icon-name">phone</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                        <span class="icon-name">phone-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-photo" aria-hidden="true"></i>
                                        <span class="icon-name">photo
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        <span class="icon-name">picture-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                        <span class="icon-name">pie-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                        <span class="icon-name">plane</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plug" aria-hidden="true"></i>
                                        <span class="icon-name">plug</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span class="icon-name">plus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        <span class="icon-name">plus-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        <span class="icon-name">plus-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">plus-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-podcast" aria-hidden="true"></i>
                                        <span class="icon-name">podcast</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                        <span class="icon-name">power-off</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-print" aria-hidden="true"></i>
                                        <span class="icon-name">print</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                                        <span class="icon-name">puzzle-piece</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-qrcode" aria-hidden="true"></i>
                                        <span class="icon-name">qrcode</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-question" aria-hidden="true"></i>
                                        <span class="icon-name">question</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                                        <span class="icon-name">question-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">question-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <span class="icon-name">quote-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                        <span class="icon-name">quote-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-random" aria-hidden="true"></i>
                                        <span class="icon-name">random</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-recycle" aria-hidden="true"></i>
                                        <span class="icon-name">recycle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                        <span class="icon-name">refresh</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-registered" aria-hidden="true"></i>
                                        <span class="icon-name">registered</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                        <span class="icon-name">remove
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-reorder" aria-hidden="true"></i>
                                        <span class="icon-name">reorder
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        <span class="icon-name">reply</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-reply-all" aria-hidden="true"></i>
                                        <span class="icon-name">reply-all</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-retweet" aria-hidden="true"></i>
                                        <span class="icon-name">retweet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-road" aria-hidden="true"></i>
                                        <span class="icon-name">road</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rocket" aria-hidden="true"></i>
                                        <span class="icon-name">rocket</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rss" aria-hidden="true"></i>
                                        <span class="icon-name">rss</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rss-square" aria-hidden="true"></i>
                                        <span class="icon-name">rss-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-s15" aria-hidden="true"></i>
                                        <span class="icon-name">s15
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <span class="icon-name">search</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-search-minus" aria-hidden="true"></i>
                                        <span class="icon-name">search-minus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <span class="icon-name">search-plus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-send" aria-hidden="true"></i>
                                        <span class="icon-name">send
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-send-o" aria-hidden="true"></i>
                                        <span class="icon-name">send-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-server" aria-hidden="true"></i>
                                        <span class="icon-name">server</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share" aria-hidden="true"></i>
                                        <span class="icon-name">share</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <span class="icon-name">share-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                        <span class="icon-name">share-alt-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share-square" aria-hidden="true"></i>
                                        <span class="icon-name">share-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">share-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shield" aria-hidden="true"></i>
                                        <span class="icon-name">shield</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ship" aria-hidden="true"></i>
                                        <span class="icon-name">ship</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <span class="icon-name">shopping-bag</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        <span class="icon-name">shopping-basket</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="icon-name">shopping-cart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shower" aria-hidden="true"></i>
                                        <span class="icon-name">shower</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                        <span class="icon-name">sign-in</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sign-language" aria-hidden="true"></i>
                                        <span class="icon-name">sign-language</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <span class="icon-name">sign-out</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-signal" aria-hidden="true"></i>
                                        <span class="icon-name">signal</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-signing" aria-hidden="true"></i>
                                        <span class="icon-name">signing
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                                        <span class="icon-name">sitemap</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sliders" aria-hidden="true"></i>
                                        <span class="icon-name">sliders</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                                        <span class="icon-name">smile-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                                        <span class="icon-name">snowflake-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-soccer-ball-o" aria-hidden="true"></i>
                                        <span class="icon-name">soccer-ball-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort" aria-hidden="true"></i>
                                        <span class="icon-name">sort</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-alpha-asc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-alpha-desc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-amount-asc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-amount-desc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-asc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-asc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-desc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-down" aria-hidden="true"></i>
                                        <span class="icon-name">sort-down
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-numeric-asc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
                                        <span class="icon-name">sort-numeric-desc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sort-up" aria-hidden="true"></i>
                                        <span class="icon-name">sort-up
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-space-shuttle" aria-hidden="true"></i>
                                        <span class="icon-name">space-shuttle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-spinner" aria-hidden="true"></i>
                                        <span class="icon-name">spinner</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-spoon" aria-hidden="true"></i>
                                        <span class="icon-name">spoon</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-square" aria-hidden="true"></i>
                                        <span class="icon-name">square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="icon-name">star</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                        <span class="icon-name">star-half</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-star-half-empty" aria-hidden="true"></i>
                                        <span class="icon-name">star-half-empty
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                        <span class="icon-name">star-half-full
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <span class="icon-name">star-half-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span class="icon-name">star-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                        <span class="icon-name">sticky-note</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                        <span class="icon-name">sticky-note-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-street-view" aria-hidden="true"></i>
                                        <span class="icon-name">street-view</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                                        <span class="icon-name">suitcase</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sun-o" aria-hidden="true"></i>
                                        <span class="icon-name">sun-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-support" aria-hidden="true"></i>
                                        <span class="icon-name">support
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tablet" aria-hidden="true"></i>
                                        <span class="icon-name">tablet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                                        <span class="icon-name">tachometer</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tag" aria-hidden="true"></i>
                                        <span class="icon-name">tag</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <span class="icon-name">tags</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        <span class="icon-name">tasks</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-taxi" aria-hidden="true"></i>
                                        <span class="icon-name">taxi</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-television" aria-hidden="true"></i>
                                        <span class="icon-name">television</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-terminal" aria-hidden="true"></i>
                                        <span class="icon-name">terminal</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-0" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-0
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-1" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-1
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-2" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-2
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-3" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-3
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-4" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-4
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-empty" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-empty</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-full" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-full</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-half" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-half</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-quarter</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
                                        <span class="icon-name">thermometer-three-quarters</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                                        <span class="icon-name">thumb-tack</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ticket" aria-hidden="true"></i>
                                        <span class="icon-name">ticket</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span class="icon-name">times</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        <span class="icon-name">times-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">times-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-times-rectangle" aria-hidden="true"></i>
                                        <span class="icon-name">times-rectangle
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-times-rectangle-o" aria-hidden="true"></i>
                                        <span class="icon-name">times-rectangle-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tint" aria-hidden="true"></i>
                                        <span class="icon-name">tint</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-down" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-down
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-left" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-left
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-off" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-off</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-on" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-on</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-right" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-right
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-up" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-up
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-trademark" aria-hidden="true"></i>
                                        <span class="icon-name">trademark</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        <span class="icon-name">trash</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        <span class="icon-name">trash-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tree" aria-hidden="true"></i>
                                        <span class="icon-name">tree</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                        <span class="icon-name">trophy</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <span class="icon-name">truck</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tty" aria-hidden="true"></i>
                                        <span class="icon-name">tty</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tv" aria-hidden="true"></i>
                                        <span class="icon-name">tv
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-umbrella" aria-hidden="true"></i>
                                        <span class="icon-name">umbrella</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-universal-access" aria-hidden="true"></i>
                                        <span class="icon-name">universal-access</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        <span class="icon-name">university</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-unlock" aria-hidden="true"></i>
                                        <span class="icon-name">unlock</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                        <span class="icon-name">unlock-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-unsorted" aria-hidden="true"></i>
                                        <span class="icon-name">unsorted
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-upload" aria-hidden="true"></i>
                                        <span class="icon-name">upload</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="icon-name">user</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        <span class="icon-name">user-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">user-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span class="icon-name">user-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        <span class="icon-name">user-plus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                                        <span class="icon-name">user-secret</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-times" aria-hidden="true"></i>
                                        <span class="icon-name">user-times</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        <span class="icon-name">users</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-vcard" aria-hidden="true"></i>
                                        <span class="icon-name">vcard
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-vcard-o" aria-hidden="true"></i>
                                        <span class="icon-name">vcard-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                                        <span class="icon-name">video-camera</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-volume-proclinic-phone" aria-hidden="true"></i>
                                        <span class="icon-name">volume-proclinic-phone</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-volume-down" aria-hidden="true"></i>
                                        <span class="icon-name">volume-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-volume-off" aria-hidden="true"></i>
                                        <span class="icon-name">volume-off</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-volume-up" aria-hidden="true"></i>
                                        <span class="icon-name">volume-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-warning" aria-hidden="true"></i>
                                        <span class="icon-name">warning
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wifi" aria-hidden="true"></i>
                                        <span class="icon-name">wifi</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                        <span class="icon-name">window-close</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-window-close-o" aria-hidden="true"></i>
                                        <span class="icon-name">window-close-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-window-maximize" aria-hidden="true"></i>
                                        <span class="icon-name">window-maximize</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-window-minimize" aria-hidden="true"></i>
                                        <span class="icon-name">window-minimize</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-window-restore" aria-hidden="true"></i>
                                        <span class="icon-name">window-restore</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wrench" aria-hidden="true"></i>
                                        <span class="icon-name">wrench</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /web application Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- accessibility Icons -->    
                            <section id="accessibility">
                                <h3 class="widget-title">Accessibility Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
                                        <span class="icon-name">american-sign-language-interpreting</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-asl-interpreting" aria-hidden="true"></i>
                                        <span class="icon-name">asl-interpreting
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
                                        <span class="icon-name">assistive-listening-systems</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-audio-description" aria-hidden="true"></i>
                                        <span class="icon-name">audio-description</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-blind" aria-hidden="true"></i>
                                        <span class="icon-name">blind</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-braille" aria-hidden="true"></i>
                                        <span class="icon-name">braille</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc" aria-hidden="true"></i>
                                        <span class="icon-name">cc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-deaf" aria-hidden="true"></i>
                                        <span class="icon-name">deaf</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-deafness" aria-hidden="true"></i>
                                        <span class="icon-name">deafness
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hard-of-hearing" aria-hidden="true"></i>
                                        <span class="icon-name">hard-of-hearing
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-low-vision" aria-hidden="true"></i>
                                        <span class="icon-name">low-vision</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">question-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sign-language" aria-hidden="true"></i>
                                        <span class="icon-name">sign-language</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-signing" aria-hidden="true"></i>
                                        <span class="icon-name">signing
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tty" aria-hidden="true"></i>
                                        <span class="icon-name">tty</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-universal-access" aria-hidden="true"></i>
                                        <span class="icon-name">universal-access</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-volume-proclinic-phone" aria-hidden="true"></i>
                                        <span class="icon-name">volume-proclinic-phone</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /accessibility Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Hand Icons -->
                            <section id="hand">
                                <h3 class="widget-title">Hand Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-hand-grab-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-grab-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-lizard-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-lizard-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-paper-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-peace-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-pointer-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-rock-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-rock-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-scissors-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-scissors-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-spock-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-stop-o" aria-hidden="true"></i>
                                        <span class="icon-name">hand-stop-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                        <span class="icon-name">thumbs-up</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Hand Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Transportation Icons -->
                            <section id="transportation">
                                <h3 class="widget-title">Transportation Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                                        <span class="icon-name">ambulance</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-automobile" aria-hidden="true"></i>
                                        <span class="icon-name">automobile
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bicycle" aria-hidden="true"></i>
                                        <span class="icon-name">bicycle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bus" aria-hidden="true"></i>
                                        <span class="icon-name">bus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cab" aria-hidden="true"></i>
                                        <span class="icon-name">cab
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <span class="icon-name">car</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fighter-jet" aria-hidden="true"></i>
                                        <span class="icon-name">fighter-jet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                                        <span class="icon-name">motorcycle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plane" aria-hidden="true"></i>
                                        <span class="icon-name">plane</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rocket" aria-hidden="true"></i>
                                        <span class="icon-name">rocket</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ship" aria-hidden="true"></i>
                                        <span class="icon-name">ship</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-space-shuttle" aria-hidden="true"></i>
                                        <span class="icon-name">space-shuttle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-subway" aria-hidden="true"></i>
                                        <span class="icon-name">subway</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-taxi" aria-hidden="true"></i>
                                        <span class="icon-name">taxi</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-train" aria-hidden="true"></i>
                                        <span class="icon-name">train</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                        <span class="icon-name">truck</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Transportation Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Gender Icons -->
                            <section id="gender">
                                <h3 class="widget-title">Gender Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-genderless" aria-hidden="true"></i>
                                        <span class="icon-name">genderless</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-intersex" aria-hidden="true"></i>
                                        <span class="icon-name">intersex
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mars" aria-hidden="true"></i>
                                        <span class="icon-name">mars</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mars-double" aria-hidden="true"></i>
                                        <span class="icon-name">mars-double</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                                        <span class="icon-name">mars-stroke</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mars-stroke-h" aria-hidden="true"></i>
                                        <span class="icon-name">mars-stroke-h</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mars-stroke-v" aria-hidden="true"></i>
                                        <span class="icon-name">mars-stroke-v</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mercury" aria-hidden="true"></i>
                                        <span class="icon-name">mercury</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-neuter" aria-hidden="true"></i>
                                        <span class="icon-name">neuter</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-transgender" aria-hidden="true"></i>
                                        <span class="icon-name">transgender</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-transgender-alt" aria-hidden="true"></i>
                                        <span class="icon-name">transgender-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-venus" aria-hidden="true"></i>
                                        <span class="icon-name">venus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-venus-double" aria-hidden="true"></i>
                                        <span class="icon-name">venus-double</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                        <span class="icon-name">venus-mars</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Gender Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- File Type Icons -->
                            <section id="file-type">
                                <h3 class="widget-title">File Type Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-file" aria-hidden="true"></i>
                                        <span class="icon-name">file</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-archive-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-archive-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-audio-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-code-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-code-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-excel-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-image-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-movie-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-movie-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-pdf-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-photo-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-photo-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-picture-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-picture-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-powerpoint-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-sound-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-sound-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                        <span class="icon-name">file-text</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-text-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-video-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-word-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-word-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-zip-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-zip-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                </div>

                            </section>
                            <!-- /File Type Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Spinner Icons -->
                            <section id="spinner">
                                <h3 class="widget-title">Spinner Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                                        <span class="icon-name">circle-o-notch</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span class="icon-name">cog</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gear" aria-hidden="true"></i>
                                        <span class="icon-name">gear
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                        <span class="icon-name">refresh</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-spinner" aria-hidden="true"></i>
                                        <span class="icon-name">spinner</span>
                                    </div>

                                </div>
                            </section>
                            <!-- /Spinner Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Form Lorvens Icons -->
                            <section id="form-control">
                                <h3 class="widget-title">Form Lorvens Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span class="icon-name">check-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">check-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <span class="icon-name">circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">dot-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                                        <span class="icon-name">minus-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">minus-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        <span class="icon-name">plus-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">plus-square-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-square" aria-hidden="true"></i>
                                        <span class="icon-name">square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                        <span class="icon-name">square-o</span>
                                    </div>

                                </div>
                            </section>
                            <!-- /Form Lorvens Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Payment Icons -->
                            <section id="payment">
                                <h3 class="widget-title">Payment Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-cc-amex" aria-hidden="true"></i>
                                        <span class="icon-name">cc-amex</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-diners-club" aria-hidden="true"></i>
                                        <span class="icon-name">cc-diners-club</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-discover" aria-hidden="true"></i>
                                        <span class="icon-name">cc-discover</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-jcb" aria-hidden="true"></i>
                                        <span class="icon-name">cc-jcb</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                        <span class="icon-name">cc-mastercard</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                                        <span class="icon-name">cc-paypal</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-stripe" aria-hidden="true"></i>
                                        <span class="icon-name">cc-stripe</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                        <span class="icon-name">cc-visa</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        <span class="icon-name">credit-card</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                        <span class="icon-name">credit-card-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                        <span class="icon-name">google-wallet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paypal" aria-hidden="true"></i>
                                        <span class="icon-name">paypal</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Payment Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">    
                            <!-- Chart Icons -->
                            <section id="chart">
                                <h3 class="widget-title">Chart Icons</h3>

                                <div class="icon-section">\

                                    <div class="icon-container">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                                        <span class="icon-name">area-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span class="icon-name">bar-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                        <span class="icon-name">bar-chart-o
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                                        <span class="icon-name">line-chart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                        <span class="icon-name">pie-chart</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Chart Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Currency Icons -->
                            <section id="currency">
                                <h3 class="widget-title">Currency Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-bitcoin" aria-hidden="true"></i>
                                        <span class="icon-name">bitcoin
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-btc" aria-hidden="true"></i>
                                        <span class="icon-name">btc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cny" aria-hidden="true"></i>
                                        <span class="icon-name">cny
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dollar" aria-hidden="true"></i>
                                        <span class="icon-name">dollar
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eur" aria-hidden="true"></i>
                                        <span class="icon-name">eur</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-euro" aria-hidden="true"></i>
                                        <span class="icon-name">euro
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gbp" aria-hidden="true"></i>
                                        <span class="icon-name">gbp</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gg" aria-hidden="true"></i>
                                        <span class="icon-name">gg</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                        <span class="icon-name">gg-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ils" aria-hidden="true"></i>
                                        <span class="icon-name">ils</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-inr" aria-hidden="true"></i>
                                        <span class="icon-name">inr</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-jpy" aria-hidden="true"></i>
                                        <span class="icon-name">jpy</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-krw" aria-hidden="true"></i>
                                        <span class="icon-name">krw</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                        <span class="icon-name">money</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rmb" aria-hidden="true"></i>
                                        <span class="icon-name">rmb
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rouble" aria-hidden="true"></i>
                                        <span class="icon-name">rouble
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rub" aria-hidden="true"></i>
                                        <span class="icon-name">rub</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ruble" aria-hidden="true"></i>
                                        <span class="icon-name">ruble
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rupee" aria-hidden="true"></i>
                                        <span class="icon-name">rupee
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shekel" aria-hidden="true"></i>
                                        <span class="icon-name">shekel
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sheqel" aria-hidden="true"></i>
                                        <span class="icon-name">sheqel
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-try" aria-hidden="true"></i>
                                        <span class="icon-name">try</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-turkish-lira" aria-hidden="true"></i>
                                        <span class="icon-name">turkish-lira
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                        <span class="icon-name">usd</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-won" aria-hidden="true"></i>
                                        <span class="icon-name">won
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-yen" aria-hidden="true"></i>
                                        <span class="icon-name">yen
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Currency Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Text Editor Icons -->
                            <section id="text-editor">
                                <h3 class="widget-title">Text Editor Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-align-center" aria-hidden="true"></i>
                                        <span class="icon-name">align-center</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-align-justify" aria-hidden="true"></i>
                                        <span class="icon-name">align-justify</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-align-left" aria-hidden="true"></i>
                                        <span class="icon-name">align-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-align-right" aria-hidden="true"></i>
                                        <span class="icon-name">align-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bold" aria-hidden="true"></i>
                                        <span class="icon-name">bold</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chain" aria-hidden="true"></i>
                                        <span class="icon-name">chain
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chain-broken" aria-hidden="true"></i>
                                        <span class="icon-name">chain-broken</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                                        <span class="icon-name">clipboard</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                        <span class="icon-name">columns</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span class="icon-name">copy
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cut" aria-hidden="true"></i>
                                        <span class="icon-name">cut
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dedent" aria-hidden="true"></i>
                                        <span class="icon-name">dedent
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eraser" aria-hidden="true"></i>
                                        <span class="icon-name">eraser</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file" aria-hidden="true"></i>
                                        <span class="icon-name">file</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                        <span class="icon-name">file-text</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                        <span class="icon-name">file-text-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-files-o" aria-hidden="true"></i>
                                        <span class="icon-name">files-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                        <span class="icon-name">floppy-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-font" aria-hidden="true"></i>
                                        <span class="icon-name">font</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-header" aria-hidden="true"></i>
                                        <span class="icon-name">header</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-indent" aria-hidden="true"></i>
                                        <span class="icon-name">indent</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-italic" aria-hidden="true"></i>
                                        <span class="icon-name">italic</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                        <span class="icon-name">link</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                        <span class="icon-name">list</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        <span class="icon-name">list-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-list-ol" aria-hidden="true"></i>
                                        <span class="icon-name">list-ol</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                                        <span class="icon-name">list-ul</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-outdent" aria-hidden="true"></i>
                                        <span class="icon-name">outdent</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                                        <span class="icon-name">paperclip</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paragraph" aria-hidden="true"></i>
                                        <span class="icon-name">paragraph</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paste" aria-hidden="true"></i>
                                        <span class="icon-name">paste
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-repeat" aria-hidden="true"></i>
                                        <span class="icon-name">repeat</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rotate-left" aria-hidden="true"></i>
                                        <span class="icon-name">rotate-left
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rotate-right" aria-hidden="true"></i>
                                        <span class="icon-name">rotate-right
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-save" aria-hidden="true"></i>
                                        <span class="icon-name">save
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-scissors" aria-hidden="true"></i>
                                        <span class="icon-name">scissors</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-strikethrough" aria-hidden="true"></i>
                                        <span class="icon-name">strikethrough</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-subscript" aria-hidden="true"></i>
                                        <span class="icon-name">subscript</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-superscript" aria-hidden="true"></i>
                                        <span class="icon-name">superscript</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-table" aria-hidden="true"></i>
                                        <span class="icon-name">table</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-text-height" aria-hidden="true"></i>
                                        <span class="icon-name">text-height</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-text-width" aria-hidden="true"></i>
                                        <span class="icon-name">text-width</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-th" aria-hidden="true"></i>
                                        <span class="icon-name">th</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-th-large" aria-hidden="true"></i>
                                        <span class="icon-name">th-large</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-th-list" aria-hidden="true"></i>
                                        <span class="icon-name">th-list</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-underline" aria-hidden="true"></i>
                                        <span class="icon-name">underline</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                        <span class="icon-name">undo</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-unlink" aria-hidden="true"></i>
                                        <span class="icon-name">unlink
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Text Editor Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Directionalr Icons -->
                            <section id="directional">
                                <h3 class="widget-title">Directional Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                        <span class="icon-name">angle-double-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                        <span class="icon-name">angle-double-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        <span class="icon-name">angle-double-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
                                        <span class="icon-name">angle-double-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <span class="icon-name">angle-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="icon-name">angle-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="icon-name">angle-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        <span class="icon-name">angle-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-o-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-o-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-circle-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                        <span class="icon-name">arrow-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows" aria-hidden="true"></i>
                                        <span class="icon-name">arrows</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        <span class="icon-name">arrows-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows-h" aria-hidden="true"></i>
                                        <span class="icon-name">arrows-h</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-arrows-v" aria-hidden="true"></i>
                                        <span class="icon-name">arrows-v</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        <span class="icon-name">caret-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-left" aria-hidden="true"></i>
                                        <span class="icon-name">caret-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                                        <span class="icon-name">caret-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-left" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-square-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">caret-square-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-caret-up" aria-hidden="true"></i>
                                        <span class="icon-name">caret-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-circle-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-circle-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-circle-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-circle-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                        <span class="icon-name">chevron-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-exchange" aria-hidden="true"></i>
                                        <span class="icon-name">exchange</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hand-o-up" aria-hidden="true"></i>
                                        <span class="icon-name">hand-o-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                        <span class="icon-name">long-arrow-down</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                        <span class="icon-name">long-arrow-left</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        <span class="icon-name">long-arrow-right</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                                        <span class="icon-name">long-arrow-up</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-down" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-down
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-left" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-left
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-right" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-right
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-toggle-up" aria-hidden="true"></i>
                                        <span class="icon-name">toggle-up
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Directionalr Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Video Player Icons -->
                            <section id="video-player">
                                <h3 class="widget-title">Video Player Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        <span class="icon-name">arrows-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-backward" aria-hidden="true"></i>
                                        <span class="icon-name">backward</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-compress" aria-hidden="true"></i>
                                        <span class="icon-name">compress</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eject" aria-hidden="true"></i>
                                        <span class="icon-name">eject</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-expand" aria-hidden="true"></i>
                                        <span class="icon-name">expand</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fast-backward" aria-hidden="true"></i>
                                        <span class="icon-name">fast-backward</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fast-forward" aria-hidden="true"></i>
                                        <span class="icon-name">fast-forward</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-forward" aria-hidden="true"></i>
                                        <span class="icon-name">forward</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pause" aria-hidden="true"></i>
                                        <span class="icon-name">pause</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pause-circle" aria-hidden="true"></i>
                                        <span class="icon-name">pause-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pause-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">pause-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                        <span class="icon-name">play</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                        <span class="icon-name">play-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">play-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-random" aria-hidden="true"></i>
                                        <span class="icon-name">random</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-step-backward" aria-hidden="true"></i>
                                        <span class="icon-name">step-backward</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-step-forward" aria-hidden="true"></i>
                                        <span class="icon-name">step-forward</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stop" aria-hidden="true"></i>
                                        <span class="icon-name">stop</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stop-circle" aria-hidden="true"></i>
                                        <span class="icon-name">stop-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stop-circle-o" aria-hidden="true"></i>
                                        <span class="icon-name">stop-circle-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        <span class="icon-name">youtube-play</span>
                                    </div>

                                </div>

                            </section>
                            <!-- /Video Player Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Brand Icons -->
                            <section id="brand">
                                <h3 class="widget-title">Brand Icons</h3>

                                <div class="icon-section margin-bottom-lg">

                                    <div class="icon-container">
                                        <i class="fa fa-500px" aria-hidden="true"></i>
                                        <span class="icon-name">500px</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-adn" aria-hidden="true"></i>
                                        <span class="icon-name">adn</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-amazon" aria-hidden="true"></i>
                                        <span class="icon-name">amazon</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-android" aria-hidden="true"></i>
                                        <span class="icon-name">android</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-angellist" aria-hidden="true"></i>
                                        <span class="icon-name">angellist</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-apple" aria-hidden="true"></i>
                                        <span class="icon-name">apple</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bandcamp" aria-hidden="true"></i>
                                        <span class="icon-name">bandcamp</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-behance" aria-hidden="true"></i>
                                        <span class="icon-name">behance</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-behance-square" aria-hidden="true"></i>
                                        <span class="icon-name">behance-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bitbucket" aria-hidden="true"></i>
                                        <span class="icon-name">bitbucket</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bitbucket-square" aria-hidden="true"></i>
                                        <span class="icon-name">bitbucket-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bitcoin" aria-hidden="true"></i>
                                        <span class="icon-name">bitcoin
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-black-tie" aria-hidden="true"></i>
                                        <span class="icon-name">black-tie</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bluetooth" aria-hidden="true"></i>
                                        <span class="icon-name">bluetooth</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-bluetooth-b" aria-hidden="true"></i>
                                        <span class="icon-name">bluetooth-b</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-btc" aria-hidden="true"></i>
                                        <span class="icon-name">btc</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-buysellads" aria-hidden="true"></i>
                                        <span class="icon-name">buysellads</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-amex" aria-hidden="true"></i>
                                        <span class="icon-name">cc-amex</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-diners-club" aria-hidden="true"></i>
                                        <span class="icon-name">cc-diners-club</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-discover" aria-hidden="true"></i>
                                        <span class="icon-name">cc-discover</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-jcb" aria-hidden="true"></i>
                                        <span class="icon-name">cc-jcb</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                        <span class="icon-name">cc-mastercard</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                                        <span class="icon-name">cc-paypal</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-stripe" aria-hidden="true"></i>
                                        <span class="icon-name">cc-stripe</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" aria-hidden="true"></i>
                                        <span class="icon-name">cc-visa</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-chrome" aria-hidden="true"></i>
                                        <span class="icon-name">chrome</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-codepen" aria-hidden="true"></i>
                                        <span class="icon-name">codepen</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-codiepie" aria-hidden="true"></i>
                                        <span class="icon-name">codiepie</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                                        <span class="icon-name">connectdevelop</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-contao" aria-hidden="true"></i>
                                        <span class="icon-name">contao</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-css3" aria-hidden="true"></i>
                                        <span class="icon-name">css3</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dashcube" aria-hidden="true"></i>
                                        <span class="icon-name">dashcube</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-delicious" aria-hidden="true"></i>
                                        <span class="icon-name">delicious</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-deviantart" aria-hidden="true"></i>
                                        <span class="icon-name">deviantart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-digg" aria-hidden="true"></i>
                                        <span class="icon-name">digg</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        <span class="icon-name">dribbble</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-dropbox" aria-hidden="true"></i>
                                        <span class="icon-name">dropbox</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-drupal" aria-hidden="true"></i>
                                        <span class="icon-name">drupal</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-edge" aria-hidden="true"></i>
                                        <span class="icon-name">edge</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-eercast" aria-hidden="true"></i>
                                        <span class="icon-name">eercast</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-empire" aria-hidden="true"></i>
                                        <span class="icon-name">empire</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-envira" aria-hidden="true"></i>
                                        <span class="icon-name">envira</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-etsy" aria-hidden="true"></i>
                                        <span class="icon-name">etsy</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-expeditedssl" aria-hidden="true"></i>
                                        <span class="icon-name">expeditedssl</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fa" aria-hidden="true"></i>
                                        <span class="icon-name">fa
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <span class="icon-name">facebook</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                                        <span class="icon-name">facebook-f
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                        <span class="icon-name">facebook-official</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        <span class="icon-name">facebook-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-firefox" aria-hidden="true"></i>
                                        <span class="icon-name">firefox</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-first-order" aria-hidden="true"></i>
                                        <span class="icon-name">first-order</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-flickr" aria-hidden="true"></i>
                                        <span class="icon-name">flickr</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-font-awesome" aria-hidden="true"></i>
                                        <span class="icon-name">font-awesome</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fonticons" aria-hidden="true"></i>
                                        <span class="icon-name">fonticons</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                                        <span class="icon-name">fort-awesome</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-forumbee" aria-hidden="true"></i>
                                        <span class="icon-name">forumbee</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-foursquare" aria-hidden="true"></i>
                                        <span class="icon-name">foursquare</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                                        <span class="icon-name">free-code-camp</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ge" aria-hidden="true"></i>
                                        <span class="icon-name">ge
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-get-pocket" aria-hidden="true"></i>
                                        <span class="icon-name">get-pocket</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gg" aria-hidden="true"></i>
                                        <span class="icon-name">gg</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gg-circle" aria-hidden="true"></i>
                                        <span class="icon-name">gg-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-git" aria-hidden="true"></i>
                                        <span class="icon-name">git</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-git-square" aria-hidden="true"></i>
                                        <span class="icon-name">git-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-github" aria-hidden="true"></i>
                                        <span class="icon-name">github</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-github-alt" aria-hidden="true"></i>
                                        <span class="icon-name">github-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-github-square" aria-hidden="true"></i>
                                        <span class="icon-name">github-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gitlab" aria-hidden="true"></i>
                                        <span class="icon-name">gitlab</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gittip" aria-hidden="true"></i>
                                        <span class="icon-name">gittip
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-glide" aria-hidden="true"></i>
                                        <span class="icon-name">glide</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-glide-g" aria-hidden="true"></i>
                                        <span class="icon-name">glide-g</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                        <span class="icon-name">google</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <span class="icon-name">google-plus</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google-plus-circle" aria-hidden="true"></i>
                                        <span class="icon-name">google-plus-circle
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google-plus-official" aria-hidden="true"></i>
                                        <span class="icon-name">google-plus-official</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                        <span class="icon-name">google-plus-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                        <span class="icon-name">google-wallet</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-gratipay" aria-hidden="true"></i>
                                        <span class="icon-name">gratipay</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-grav" aria-hidden="true"></i>
                                        <span class="icon-name">grav</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hacker-news" aria-hidden="true"></i>
                                        <span class="icon-name">hacker-news</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-houzz" aria-hidden="true"></i>
                                        <span class="icon-name">houzz</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-html5" aria-hidden="true"></i>
                                        <span class="icon-name">html5</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-imdb" aria-hidden="true"></i>
                                        <span class="icon-name">imdb</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                        <span class="icon-name">instagram</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                                        <span class="icon-name">internet-explorer</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ioxhost" aria-hidden="true"></i>
                                        <span class="icon-name">ioxhost</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-joomla" aria-hidden="true"></i>
                                        <span class="icon-name">joomla</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-jsfiddle" aria-hidden="true"></i>
                                        <span class="icon-name">jsfiddle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-lastfm" aria-hidden="true"></i>
                                        <span class="icon-name">lastfm</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-lastfm-square" aria-hidden="true"></i>
                                        <span class="icon-name">lastfm-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-leanpub" aria-hidden="true"></i>
                                        <span class="icon-name">leanpub</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        <span class="icon-name">linkedin</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                        <span class="icon-name">linkedin-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-linode" aria-hidden="true"></i>
                                        <span class="icon-name">linode</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-linux" aria-hidden="true"></i>
                                        <span class="icon-name">linux</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-maxcdn" aria-hidden="true"></i>
                                        <span class="icon-name">maxcdn</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-meanpath" aria-hidden="true"></i>
                                        <span class="icon-name">meanpath</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-medium" aria-hidden="true"></i>
                                        <span class="icon-name">medium</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-meetup" aria-hidden="true"></i>
                                        <span class="icon-name">meetup</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-mixcloud" aria-hidden="true"></i>
                                        <span class="icon-name">mixcloud</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-modx" aria-hidden="true"></i>
                                        <span class="icon-name">modx</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-odnoklassniki" aria-hidden="true"></i>
                                        <span class="icon-name">odnoklassniki</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-odnoklassniki-square" aria-hidden="true"></i>
                                        <span class="icon-name">odnoklassniki-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-opencart" aria-hidden="true"></i>
                                        <span class="icon-name">opencart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-openid" aria-hidden="true"></i>
                                        <span class="icon-name">openid</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-opera" aria-hidden="true"></i>
                                        <span class="icon-name">opera</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-optin-monster" aria-hidden="true"></i>
                                        <span class="icon-name">optin-monster</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pagelines" aria-hidden="true"></i>
                                        <span class="icon-name">pagelines</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-paypal" aria-hidden="true"></i>
                                        <span class="icon-name">paypal</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pied-piper" aria-hidden="true"></i>
                                        <span class="icon-name">pied-piper</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pied-piper-alt" aria-hidden="true"></i>
                                        <span class="icon-name">pied-piper-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pied-piper-pp" aria-hidden="true"></i>
                                        <span class="icon-name">pied-piper-pp</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                        <span class="icon-name">pinterest</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="icon-name">pinterest-p</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                        <span class="icon-name">pinterest-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                                        <span class="icon-name">product-hunt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-qq" aria-hidden="true"></i>
                                        <span class="icon-name">qq</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-quora" aria-hidden="true"></i>
                                        <span class="icon-name">quora</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ra" aria-hidden="true"></i>
                                        <span class="icon-name">ra
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-ravelry" aria-hidden="true"></i>
                                        <span class="icon-name">ravelry</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-rebel" aria-hidden="true"></i>
                                        <span class="icon-name">rebel</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-reddit" aria-hidden="true"></i>
                                        <span class="icon-name">reddit</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                                        <span class="icon-name">reddit-alien</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-reddit-square" aria-hidden="true"></i>
                                        <span class="icon-name">reddit-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-renren" aria-hidden="true"></i>
                                        <span class="icon-name">renren</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-resistance" aria-hidden="true"></i>
                                        <span class="icon-name">resistance
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-safari" aria-hidden="true"></i>
                                        <span class="icon-name">safari</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-scribd" aria-hidden="true"></i>
                                        <span class="icon-name">scribd</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-sellsy" aria-hidden="true"></i>
                                        <span class="icon-name">sellsy</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <span class="icon-name">share-alt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                        <span class="icon-name">share-alt-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-shirtsinbulk" aria-hidden="true"></i>
                                        <span class="icon-name">shirtsinbulk</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-simplybuilt" aria-hidden="true"></i>
                                        <span class="icon-name">simplybuilt</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-skyatlas" aria-hidden="true"></i>
                                        <span class="icon-name">skyatlas</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                        <span class="icon-name">skype</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-slack" aria-hidden="true"></i>
                                        <span class="icon-name">slack</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-slideshare" aria-hidden="true"></i>
                                        <span class="icon-name">slideshare</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-snapchat" aria-hidden="true"></i>
                                        <span class="icon-name">snapchat</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
                                        <span class="icon-name">snapchat-ghost</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-snapchat-square" aria-hidden="true"></i>
                                        <span class="icon-name">snapchat-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-soundcloud" aria-hidden="true"></i>
                                        <span class="icon-name">soundcloud</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-spotify" aria-hidden="true"></i>
                                        <span class="icon-name">spotify</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stack-exchange" aria-hidden="true"></i>
                                        <span class="icon-name">stack-exchange</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                                        <span class="icon-name">stack-overflow</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-steam" aria-hidden="true"></i>
                                        <span class="icon-name">steam</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-steam-square" aria-hidden="true"></i>
                                        <span class="icon-name">steam-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stumbleupon" aria-hidden="true"></i>
                                        <span class="icon-name">stumbleupon</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stumbleupon-circle" aria-hidden="true"></i>
                                        <span class="icon-name">stumbleupon-circle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-superpowers" aria-hidden="true"></i>
                                        <span class="icon-name">superpowers</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                        <span class="icon-name">telegram</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tencent-weibo" aria-hidden="true"></i>
                                        <span class="icon-name">tencent-weibo</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-themeisle" aria-hidden="true"></i>
                                        <span class="icon-name">themeisle</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-trello" aria-hidden="true"></i>
                                        <span class="icon-name">trello</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tripadvisor" aria-hidden="true"></i>
                                        <span class="icon-name">tripadvisor</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tumblr" aria-hidden="true"></i>
                                        <span class="icon-name">tumblr</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-tumblr-square" aria-hidden="true"></i>
                                        <span class="icon-name">tumblr-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-twitch" aria-hidden="true"></i>
                                        <span class="icon-name">twitch</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <span class="icon-name">twitter</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                        <span class="icon-name">twitter-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-usb" aria-hidden="true"></i>
                                        <span class="icon-name">usb</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-viacoin" aria-hidden="true"></i>
                                        <span class="icon-name">viacoin</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-viadeo" aria-hidden="true"></i>
                                        <span class="icon-name">viadeo</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-viadeo-square" aria-hidden="true"></i>
                                        <span class="icon-name">viadeo-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-vimeo" aria-hidden="true"></i>
                                        <span class="icon-name">vimeo</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-vimeo-square" aria-hidden="true"></i>
                                        <span class="icon-name">vimeo-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-vine" aria-hidden="true"></i>
                                        <span class="icon-name">vine</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-vk" aria-hidden="true"></i>
                                        <span class="icon-name">vk</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wechat" aria-hidden="true"></i>
                                        <span class="icon-name">wechat
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-weibo" aria-hidden="true"></i>
                                        <span class="icon-name">weibo</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-weixin" aria-hidden="true"></i>
                                        <span class="icon-name">weixin</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <span class="icon-name">whatsapp</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wikipedia-w" aria-hidden="true"></i>
                                        <span class="icon-name">wikipedia-w</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-windows" aria-hidden="true"></i>
                                        <span class="icon-name">windows</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wordpress" aria-hidden="true"></i>
                                        <span class="icon-name">wordpress</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wpbeginner" aria-hidden="true"></i>
                                        <span class="icon-name">wpbeginner</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wpexplorer" aria-hidden="true"></i>
                                        <span class="icon-name">wpexplorer</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wpforms" aria-hidden="true"></i>
                                        <span class="icon-name">wpforms</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-xing" aria-hidden="true"></i>
                                        <span class="icon-name">xing</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-xing-square" aria-hidden="true"></i>
                                        <span class="icon-name">xing-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-y-combinator" aria-hidden="true"></i>
                                        <span class="icon-name">y-combinator</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-y-combinator-square" aria-hidden="true"></i>
                                        <span class="icon-name">y-combinator-square
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-yahoo" aria-hidden="true"></i>
                                        <span class="icon-name">yahoo</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-yc" aria-hidden="true"></i>
                                        <span class="icon-name">yc
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-yc-square" aria-hidden="true"></i>
                                        <span class="icon-name">yc-square
                                            <span class="text-muted">(alias)</span>
                                        </span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-yelp" aria-hidden="true"></i>
                                        <span class="icon-name">yelp</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-yoast" aria-hidden="true"></i>
                                        <span class="icon-name">yoast</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                        <span class="icon-name">youtube</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        <span class="icon-name">youtube-play</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-youtube-square" aria-hidden="true"></i>
                                        <span class="icon-name">youtube-square</span>
                                    </div>

                                </div>


                            </section>
                            <!-- /Brand Icons -->
                            </div>
                            <div class="widget-area-2 proclinic-box-shadow">
                            <!-- Medical Icons -->
                            <section id="medical">
                                <h3 class="widget-title">Medical Icons</h3>

                                <div class="icon-section">

                                    <div class="icon-container">
                                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                                        <span class="icon-name">ambulance</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-h-square" aria-hidden="true"></i>
                                        <span class="icon-name">h-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <span class="icon-name">heart</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <span class="icon-name">heart-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        <span class="icon-name">heartbeat</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                        <span class="icon-name">hospital-o</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-medkit" aria-hidden="true"></i>
                                        <span class="icon-name">medkit</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        <span class="icon-name">plus-square</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                        <span class="icon-name">stethoscope</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-user-md" aria-hidden="true"></i>
                                        <span class="icon-name">user-md</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair</span>
                                    </div>

                                    <div class="icon-container">
                                        <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                                        <span class="icon-name">wheelchair-alt</span>
                                    </div>

                                </div>
                            </section>
                            <!-- /Medical Icons -->
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


<!-- Mirrored from www.konnectplugins.com/proclinic/Horizontal/font-awesome.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 19:41:47 GMT -->
</html>