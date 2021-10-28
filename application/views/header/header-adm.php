<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description"
		content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

	<title><?= $title ?></title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
		rel="stylesheet" />
	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
	<!-- <link href="<?= base_url('assets1/') ?>css/materialdesignicons.min.css" rel="stylesheet" /> -->

	<!-- PLUGINS CSS STYLE -->
	<link href="<?= base_url("assets1/plugins/") ?>simplebar/simplebar.css" rel="stylesheet">
	<link href="<?= base_url('assets1/plugins/') ?>nprogress/nprogress.css" rel="stylesheet">

	<!-- No Extra plugin used -->
	<link href="<?= base_url('assets1/plugins/') ?>jvectormap/jquery-jvectormap-2.0.3.css" rel='stylesheet'>
	<link href='<?= base_url('assets1/plugins/') ?>daterangepicker/daterangepicker.css' rel='stylesheet'>

	<link href='<?= base_url('assets1/plugins/') ?>toastr/toastr.min.css' rel='stylesheet'>

	<!-- SLEEK CSS -->
	<link id="sleek-css" rel="stylesheet" href="<?= base_url('assets1/') ?>css/sleek.css" />

	<!-- FAVICON -->
	<link href="<?= base_url('assets1/') ?>img/favicon.png" rel="shortcut icon" />

	<!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="<?= base_url('assets1/plugins/') ?>nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
	<script>
		NProgress.configure({
			showSpinner: false
		});
		NProgress.start();

	</script>

	<div id="toaster"></div>

	<!-- ====================================
    ——— WRAPPER
    ===================================== -->
	<div class="wrapper">

		<!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
		<div class="page-wrapper">

			<!-- Header -->
			<header class="main-header " id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle">
						<span class="sr-only">Toggle navigation</span>
					</button>
					<!-- search form -->
					<div class="search-form d-none d-lg-inline-block">
					</div>

					<div class="navbar-right ">
						<ul class="nav navbar-nav">
							<ul class="dropdown-menu dropdown-menu-right d-none">
								<li class="dropdown-header">You have 5 notifications</li>
								<li>
									<a href="#">
										<i class="mdi mdi-account-plus"></i> New user registered
										<span class=" font-size-12 d-inline-block float-right"><i
												class="mdi mdi-clock-outline"></i> 10 AM</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="mdi mdi-account-remove"></i> User deleted
										<span class=" font-size-12 d-inline-block float-right"><i
												class="mdi mdi-clock-outline"></i> 07 AM</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
										<span class=" font-size-12 d-inline-block float-right"><i
												class="mdi mdi-clock-outline"></i> 12 PM</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="mdi mdi-account-supervisor"></i> New client
										<span class=" font-size-12 d-inline-block float-right"><i
												class="mdi mdi-clock-outline"></i> 10 AM</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="mdi mdi-server-network-off"></i> Server overloaded
										<span class=" font-size-12 d-inline-block float-right"><i
												class="mdi mdi-clock-outline"></i> 05 AM</span>
									</a>
								</li>
								<li class="dropdown-footer">
									<a class="text-center" href="#"> View All </a>
								</li>
							</ul>
							</li>

							<!-- User Account -->
							<li class="dropdown user-menu">
								<button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
									<span class="d-none  d-lg-inline-block"><?= $akun['nama'] ?></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<!-- User image -->
									<li class="dropdown-header">
										<div class="d-inline-block">
											<?= $akun['nama'] ?> <small class="pt-1"><?= $akun['email'] ?></small>
										</div>
									</li>
									<li>
										<a href="<?= base_url('Account/') ?>">
											<i class="mdi mdi-account"></i> My Profile
										</a>
									</li>
									<li class="dropdown-footer">
										<a href="#" data-toggle="modal" data-target="#logout"> <i
												class="mdi mdi-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
