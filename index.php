<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Elmer I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

	<link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />

</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
	<div class="wrapper  theme-1-active pimary-color-blue">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.php">
							<img class="brand-img" src="dist/img/logo.png" alt="brand" />
							<span class="brand-text">Elmer</span>
						</a>
					</div>
				</div>
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>

			</div>

		</nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr">
						<div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Topic</span></div>
						<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
						<div class="clearfix"></div>
					</a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a class="active-page" href="index3.php">เนื้อหา</a>
						</li>
						<li>
							<a href="index2.php">Simulator</a>
						</li>
						<li>
							<a href="index.html">แบบทดสอบ</a>
						</li>
						<li>
							<a href="index.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
						</li>
						<li>
							<a href="index.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
						</li>
						<li>
							<a href="index.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
						</li>
						<li>
							<a href="profile.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</a>
						</li>
					</ul>
				</li>

				<li>
					<hr class="light-grey-hr mb-10" />
				</li>

			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

		<!-- Main Content -->
		<div class="container-fluid dashboard-ddos" style="margin-left: 2.5rem;">
			<div class="row">
				<div class="col" >
					<iframe width="1200" height="480" scrolling="no" frameborder="0" src="https://livethreatmap.radware.com/"></iframe>
				</div>
			</div>
		</div>





		<!-- JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css"></script>
		<script>
			AOS.init();
		</script>

		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- Data table JavaScript -->
		<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>

		<!-- Progressbar Animation JavaScript -->
		<script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>

		<!-- Sparkline JavaScript -->
		<script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

		<!-- EChartJS JavaScript -->
		<script src="vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
		<script src="vendors/echarts-liquidfill.min.js"></script>

		<!-- Toast JavaScript -->
		<!-- <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script> -->

		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
		<script src="dist/js/dashboard-data.js"></script>
</body>

</html>