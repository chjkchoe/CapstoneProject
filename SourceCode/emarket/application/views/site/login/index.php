<html >
<head>
	<?php 
	$this->load->view('site/head');
	?>

</head>

<body >
	<div id="header">
		<?php $this->load->view('site/header'); ?>
	</div>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<div style="color: red;text-align: center;font-weight:bold"> <?php echo form_error('login') ;?> </div>
						<h2>Login to your account</h2>
						<form action="" method="post">
							<input placeholder="Email Address" type="text" name="email">
							<input placeholder="Password" type="password" name="password">
							<span>
								<input class="checkbox" type="checkbox"> 
								Keep me signed in
							</span>
							
							<button type="submit" class="btn btn-default">Login</button>

						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#" method="post">
							<input placeholder="Name" type="text" name="sname">
							<input placeholder="Email Address" type="email" name="semail">
							<input placeholder="Password" type="password" name="spassword">
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
	




	<script src="<?php echo public_url('user')?>/js/jquery.js"></script>
	<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo public_url('user') ?>/js/main.js"></script>

</body>
</html>