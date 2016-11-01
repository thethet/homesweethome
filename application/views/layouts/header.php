<!DOCTYPE html>
<html>
<head>
	<title>
		<?php if(isset($sitename['page_name'])) echo $sitename['page_name']; ?>
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<?php 
	if ($favicon['page_image']) { ?>
		<link rel="icon" type="image/icon" href="<?php echo base_url(). 'uploads/' . $favicon['page_image']; ?>" />
	<?php }else{ ?>
		<link rel="icon" type="image/icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
	<?php } ?>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" />
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/scroll_bar.js"></script>
</head>
<body>
<div class="container-fluid mbmenu">
	<div class="sitelogo">
		<?php 
		if ($sitelogo['page_image']) { ?>
			<a href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url(). 'uploads/' . $sitelogo['page_image']; ?>" /></a>
		<?php }else{ ?>
			<a href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo.png" /></a>
		<?php } ?>
	</div>
	<div class="sitemenu">
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Menu</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_url();?>">HOME</a></li>
						<li><a href="<?php echo base_url(); ?>aboutus">ABOUT US</a></li>
						<li><a href="<?php echo base_url(); ?>services">OUR SERVICES</a></li>
						<li><a href="<?php echo base_url();?>searchmaids">SEARCH MAIDS</a></li>
						<li><a href="<?php echo base_url();?>contactus">CONTACT US</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>





		

