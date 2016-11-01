<link rel="stylesheet" href="<?php echo base_url(); ?>css/aboutus.css" />
<div class="container-fluid homepagebanner">
<?php 
	$path = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent',	'aboutus_banner')
?>
<img src="<?php echo base_url(). 'uploads/banner/' . $path; ?>" class="img-responsive">
</div>
<div class="container menu">
<div class="col-md-3 col-sm-3 col-xs-12">
	<div class="logoimage">
		<?php 
		if ($sitelogo['page_image']) { ?>
			<a href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url(). 'uploads/' . $sitelogo['page_image']; ?>" /></a>
		<?php }else{ ?>
			<a href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo.png" /></a>
		<?php } ?>
	</div>
</div>
<?php include('menu.php'); ?>
</div>
<div class="container aboutus">
		<img class="img-responsive aboutuswelcome" src="<?php echo base_url(); ?>assets/images/home-content.png" />
		<h4>WELCOME TO <span class="homesweethome">HOME SWEET HOME</span></h4>
		<h3>
		<?php 
			$title = $this->Pages_Model->returnbycondistring('page_name','maid_pages','page_parent',	'aboutus');
			echo nl2br($title);
		?>
		</h3>
		<div class="aboutsectiontext">
			<?php 
			$content = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent',	'aboutus');
			echo nl2br($content);
		?>
		</div>
		<div class="aboutline">
		<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/aboutline.png" />
		</div>
		<p class="excerpt">
		<?php
			$excerpt = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent',	'aboutus');
			echo nl2br($excerpt);
		?>
		</p>
		<?php if(isset($returnname)){ ?>
			<?php if($returnname) : ?>
			<div class="col-md-12 col-sm-12 col-xs-12 divider">
			<span class="notice">
			<?php echo $returnname; ?>
			</span>
			</div>
			<?php endif; ?>
			<?php } ?>
		<form action="<?php echo base_url() ?>aboutus/mailsend" method="post" enctype="multipart/form-data">
		<div class="col-md-12 co-sm-12 col-xs-12 abone">
		1.   Please provide as much detail as possible on your special requests or questions/issues
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12">
		<textarea required name="issues" class="areaaboutus"></textarea>
		</div>
		<div class="col-md-12 co-sm-12 col-xs-12 abone">
		2.   Contact Information
		</div>
		<div class="col-md-12 co-sm-12 col-xs-12 divider">
			<label class="col-md-1 col-sm-2 col-xs-12 lblaboutus">Name :</label>
			<input type="text" required name="name" class="col-md-9 col-sm-9 col-xs-12 txtaboutus"></input>
		</div>
		<div class="col-md-12 co-sm-12 col-xs-12 divider">
			<label class="col-md-1 col-sm-2 col-xs-12 lblaboutus">Email :</label>
			<input type="email" required name="email" class="col-md-9 col-sm-9 col-xs-12 txtaboutus"></input>
		</div>
		<div class="col-md-12 co-sm-12 col-xs-12 divider">
			<label class="col-md-1 col-sm-2 col-xs-12 lblaboutus">Phone :</label>
			<input type="phone" required id="tele" name="phone" class="col-md-9 col-sm-9 col-xs-12 txtaboutus"></input>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 divider">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<input type="submit" class="btnsave" name="submit" value="">
		</div>
		</div>
		</form>
</div>
<script src='http://demo.saiapple.com/lib/filter/number_only.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tele").on("input", function(){
		 number_only(this);
		});
	});	

