<html>
<head>
	<?php 
	$this->load->view('site/head');
	?>
</head>

<body >
	<div id="top">
		<div class="container">

			<?php  $this->load->view('site/container') ?>

		</div>



        <?php $this->load->view('site/menu') ?>
        <?php $this->load->view('site/register/content') ?>
		</div>









		<script src="<?php echo public_url('user') ?>/js/jquery-1.11.0.min.js"></script>
		<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo public_url('user') ?>/js/jquery.cookie.js"></script>
		<script src="<?php echo public_url('user') ?>/js/waypoints.min.js"></script>
		<script src="<?php echo public_url('user') ?>/js/modernizr.js"></script>
		<script src="<?php echo public_url('user') ?>/js/bootstrap-hover-dropdown.js"></script>
		<script src="<?php echo public_url('user') ?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo public_url('user') ?>/js/front.js"></script>
	</body>
	<footer>

	</footer>
	</html>