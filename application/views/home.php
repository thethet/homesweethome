<link rel="stylesheet" href="<?php echo base_url(); ?>css/home.css" />
<div class="container-fluid homepagebanner">
<?php 
	$path = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent',	'homepage_banner')
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
<div class="home-section">
	<div class="container home-section-content">
		<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home-content.png" />
		<h4>WELCOME TO <span class="homesweethome">HOME SWEET HOME</span></h4>
		<h3>
		<?php 
			$title = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent',	'homepage');
			echo nl2br($title);
		?>
		</h3>
		<div class="homesectiontext">
			<?php 
			$content = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent',	'homepage');
			echo nl2br($content);
		?>
		</div>
	</div>
</div>
<div class="home-featured-section">
	<div class="container featuremaid">
	<img class="img-responsive featurelogo" src="<?php echo base_url(); ?>assets/images/featuremaid.png" />
	<h3>FEATURED MAIDS</h3>
	<?php foreach((array)$maids as $maid): ?>
	<div class="col-md-4 col-sm-4 col-xs-12 homemaiditem">
		<div class="col-md-6 col-sm-4 col-xs-12">
		 <?php if($maid['image']){ ?>
		  <img src="<?php echo $maid['image'];?>"/>
		 <?php }else{ ?>
		  <img src="<?php echo base_url(). 'assets/images/default_maid.png'; ?>" />
		 <?php } ?>
		
		</div>
		<div class="col-md-6 col-sm-8 col-xs-12 homemaiddescription">
		<h5><?php echo $maid['name']; ?></h5>
		<p>
		AGE : <?php echo $maid['age']; ?>
		</p>
		<p>
		FROM : <?php echo $maid['country']['data']['name']; ?>
		</p>
		<p>
		TYPE : <?php echo $maid['type']; ?>
		</p>
		<p>
		SALARY : <span class="salary"><?php echo $maid['expected_salary']; ?></span>
		</p>
		<p>
		DAY OFF : <?php //echo $maid['maid_day_off']; ?>days
		</p>
		<a href="<?php echo base_url(); ?>maid/maid_detail/<?php echo $maid['id'];?>" class="viewdetails">view detials</a>
		</div>
	</div>
	<?php endforeach; ?>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<a href="<?php echo base_url(); ?>searchmaids" class="viewall">view all</a>
	</div>
	</div>
</div>
<script>
$(window).load(function(){
	adjust_homemaid();
});
$(window).on('resize', function() {
	$('.homemaiditem').height('auto');
	adjust_homemaid();
});
function adjust_homemaid(){
	var totalHeight = 0;
	$('.homemaiditem').each(function(){
		if(totalHeight < $(this).height())
		{
			totalHeight = $(this).height();
		}
	});
	if(totalHeight > 0 ){
		$('.homemaiditem').height(totalHeight);
	}
}
</script>
