<link rel="stylesheet" href="<?php echo base_url(); ?>css/services.css" />
<div class="container-fluid homepagebanner">
<?php 
	$path = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent',	'service_banner')
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
<div class="container services">
	<img class="img-responsive servicewelcome" src="<?php echo base_url(); ?>assets/images/home-content.png" />
<h3>OUR SERVICES</h3>
<div class="col-md-6 col-sm-6 col-xs-12 serviceimg">
	<?php
			$img = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent',	'serviceoverview');
		?>
		<img class="img-responsive" src="<?php echo base_url(); ?>uploads/services/<?php echo $img; ?>" />
</div>
<div class="col-md-6 col-sm-6 col-xs-12 serviceitems">
<?php
			$excerpt = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent',	'serviceoverview');
		?>
<p class="excerpt"><?php echo nl2br($excerpt); ?></p>	
<?php foreach($services as $data): ?>
	<div class="serviceitem">
		<div class="lserviceitem">
			<img class="img-responsive" src="<?php echo base_url(); ?>uploads/services/<?php echo $data['page_image']; ?>" />
		</div>
		<div class="rserviceitem">
			<?php echo $data['page_title']; ?>
			<?php if($data['page_content']){ ?>
				<p class="servicelistiemt">
					<?php echo nl2br($data['page_content']);?>
				</p>
			<?php } ?>
		</div>
	</div>
<?php endforeach; ?>	
</div>
</div>

