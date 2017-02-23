<!DOCTYPE html>
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

		<section id="slider">
			<?php $this->load->view('site/slider'); ?>
		</section>
		<div id=""></div>
		




    <script src="<?php echo public_url('user')?>/js/jquery.js"></script>
	<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
    <script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo public_url('user') ?>/js/main.js"></script>

</body>
</html>