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
		<div class="bg-img" style="background-image: url('<?= base_url('assets/') ?>/img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="#home">
							<img class="logo" src="<?= base_url('assets/') ?>img/logo2.png" alt="logo2">
							<!-- <img class="logo-alt" src="<?= base_url('assets/') ?>img/logo2.png" alt="logo2"> -->
						</a>
						<a href="#about">
							<!-- <img class="logo" src="<?= base_url('assets/') ?>img/logo2.png" alt="logo2"> -->
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
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li class="has-dropdown"><a href="#blog">News</a>
						<ul class="dropdown">
							<li><a href="<?=base_url('User/News/')?>">News Post</a></li>
						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
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
							<h1 class="white-text">Bhaskara</h1>
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

	<!-- About Us -->
	<div id="about" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">About Us</h2>
					</div>
					<p>Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat.
						Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.
					</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Quis varius quam quisque id diam vel quam elementum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Mauris augue neque gravida in fermentum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Orci phasellus egestas tellus rutrum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="<?= base_url('assets/') ?>img/about1.jpg" alt="">
						<img class="img-responsive" src="<?= base_url('assets/') ?>img/about2.jpg" alt="">
						<img class="img-responsive" src="<?= base_url('assets/') ?>img/about1.jpg" alt="">
						<img class="img-responsive" src="<?= base_url('assets/') ?>img/about2.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About Us -->


	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Vision & Mission</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Fully Customizible</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Awesome Features</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Fully Responsive</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<a href="<?=base_url('User/news')?>">
						<h2 class="title">Recents news</h2>
					</a>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<?php foreach(array_slice($value, 0, 3) as $v) { ?>
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?= base_url('assets1/img-produk/') ?><?=$v['gambar']?>"
								alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-circle"></i><?=$v['kategori']?></li>
								<li><i class="fa fa-clock-o"></i><?= date("d M Y", $v['tanggal'])?></li>
							</ul>
							<div class="limit-cr">
							<h5><?=$v['judul']?></h5>
							<p>
								<?=$v['berita']?>
							</p>
							</div>
							<br>
							<a href="<?=base_url('User/News/newsdetail/')?><?= $v['slug'];?>">Read</a>
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

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>512-421-3940</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>email@support.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>1739 Bubby Drive</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<!-- <div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div> -->
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="#home"><img src="<?= base_url('assets/') ?>img/logo2.png" alt="logo2"></a>

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
