<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $title ?></title>
	<link rel="icon" href="<?= base_url('assets/') ?>img/logo3.png" type="image/icon">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?= base_url('assets/') ?>/img/news.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="<?=base_url('Home/')?>">
							<img class="logo" src="<?= base_url('assets/') ?>img/logo2.png" alt="logo2">
							<img class="logo-alt" src="<?= base_url('assets/') ?>img/logo2.png" alt="logo2">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="<?=base_url('Home/')?>">Home</a></li>
					<li><a href="<?=base_url('Home/')?>#about">About</a></li>
					<li class="has-dropdown"><a href="<?=base_url('Home/')?>#blog">News</a>
						<ul class="dropdown">
							<li><a href="<?=base_url('User/News/')?>">News Post</a></li>
						</ul>
					</li>
					<li><a href="<?=base_url('Home/')?>#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">News</h1>
							<p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl.
								Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc
								posuere.
							</p>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->


	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">News Update</h2>
				</div>
				<!-- /Section header -->
				<!-- blog -->
				<?php foreach($data as $d) { ?>
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?= base_url('assets1/img-produk/') ?><?=$d['gambar']?>"
								alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-circle"></i><?=$d['kategori']?></li>
								<li><i class="fa fa-clock-o"></i><?= date("d M Y", $d['tanggal'])?></li>
							</ul>
							<div class="limit-cr">
								<h5><?=$d['judul']?></h5>
								<p>
									<?=$d['berita']?>
								</p>
							</div>
							<br>
							<a href="<?=base_url('User/News/newsdetail/')?><?= $d['slug'];?>">Read</a>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- /blog -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Blog -->



	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="<?=base_url('Home/')?>"><img src="<?= base_url('assets/') ?>img/logo2.png"
								alt="logo2"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2021. All Rights Reserved. Designed by <a href="https://spectrumcn.com/"
								target="_blank">Spectrum Cahaya Nusantara</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>
