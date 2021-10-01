<!doctype html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='<?= base_url('assets1/plugins/') ?>toastr/toastr.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="<?= base_url('vendor/') ?>css/style.css">

</head>

<body>
	<div class="flash-login" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
	<section class="ftco-section">
		<div id="toaster"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
						<div class="app-brand">
							<a href="<?=base_url('AdmM/')?>" title="Sleek Dashboard"> <img
									src="<?= base_url('assets/') ?>img/logo4.png" class="img-fluid" alt="">
								<span class="brand-name text-truncate"></span>
							</a>
						</div>
						<form action="" method="POST" class="login-form">
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-user"></span></div>
								<input type="email" class="form-control" name="email" placeholder="Enter your email"
									required>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="fa fa-lock"></span></div>
								<input type="password" class="form-control" name="password" placeholder="Password"
									required>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-100 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn form-control btn-primary rounded submit px-3">Log
									in</button>
							</div>
						</form>
						<div class="w-100 text-center mt-4 text">
							<p class="mb-0">Don't have an account?</p>
							<a href="#">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('vendor/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('vendor/') ?>js/popper.js"></script>
	<script src="<?= base_url('vendor/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('vendor/') ?>js/main.js"></script>
	<script src="<?=base_url('assets1/')?>plugins/toastr/toastr.min.js"></script>
	<script src="<?=base_url("assets1/")?>js/custom.js"></script>

</body>

</html>
