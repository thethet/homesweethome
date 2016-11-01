<link rel="stylesheet" href="<?php echo base_url(); ?>css/search_maids.css" />
<script type="text/javascript">
	$(document).ready(function(){
		m_resizes();
		maid_resizes();
		maid_div_resizes();
	});

	$(window).resize(function(){
		m_resizes();
		maid_resizes();
		maid_div_resizes();
	});

	function m_resizes(){
		$(".searchmaid-img").css("height", $(".searchmaid-img").outerWidth());
	}
	function maid_div_resizes(){
	 var totalHeight = 0;
		$('.border').each(function(){
			if(totalHeight < $(this).height())
			{
				totalHeight = $(this).height();
			}
		});
		if(totalHeight > 0 ){
			$('.border').height(totalHeight);
		}
	}
	function maid_resizes(){
		var totalHeight = 0;
		$('.searchmaid-info').each(function(){
			if(totalHeight < $(this).height())
			{
				totalHeight = $(this).height();
			}
		});
		if(totalHeight > 0 ){
			$('.searchmaid-info').height(totalHeight);
		}
	}
</script>
<div class="container-fluid homepagebanner">
<?php 
	$path = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent',	'maid_banner')
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
<div class="container searchmaid">
		<img class="img-responsive aboutuswelcome" src="<?php echo base_url(); ?>assets/images/home-content.png" />
		<h3>SEARCH MAIDS</h3>
</div>		
<div class="container content">
	<!--<h3>SEARCH MAIDS</h3> -->
	<div class="col-xs-12 col-sm-3 col-md-3 sidebar">
		<div class="quick-search">
			<h4>SEARCH DETAILS</h4>
		</div><!-- .quick-search -->
	<form method="get" action="<?php echo base_url();?>index.php/maid/search_result" enctype="multipart/form-data">	
		<div class="filter-wrap">
			<div class="filter-hd">
				<h5 class="filter-tit">Nationality</h5>
				<img src="<?php echo base_url();?>assets/images/show-hide.png" class="search-drop"/>
			</div>
			<div class="filter filter1">
			<?php if(isset($countriesList)){ ?>
			<?php foreach ($countriesList as $country) { ?>
			<div class="divider">
				<input type="checkbox" id="filter_nat" name="nationality[]" value="<?php echo $country['id']; ?>"> 
					<label><?php echo $country['name']; ?></label>
			</div>
			<?php } ?> 
			<?php } ?> 	
			</div>
		</div>
		<div class="filter-wrap">
			<div class="filter-hd">
				<h5 class="filter-tit">Age</h5>
				<img src="<?php echo base_url();?>assets/images/show-hide.png" class="search-drop"/>
			</div>
			<div class="filter filter1">
			    <?php $ageList = array(
					array('age_start'=>'21','age_end'=>'25'),
					array('age_start'=>'26','age_end'=>'30'),
					array('age_start'=>'31','age_end'=>'35'),
					array('age_start'=>'36','age_end'=>'40'),
					array('age_start'=>'41','age_end'=>'45'),
					array('age_start'=>'46','age_end'=>'50')
					);?>
				
				<div class="divider">
				<input type="radio" name="age[]" id="filter_age" value=""> <label><?php echo 'none'; ?></label>
				</div>
				<?php foreach($ageList as $key=>$age) { ?>
				
				<?php $age = $age['age_start'] . '-' . $age['age_end']; ?>
				<div class="divider">
				<input type="radio" name="age[]" id="filter_age" value="<?php echo $age; ?>"> <label><?php echo $age; ?></label>
				</div>
				<?php } ?>
				
			</div>
		</div>
		<div class="filter-wrap">
			<div class="filter-hd">
				<h5 class="filter-tit">Type</h5>
				<img src="<?php echo base_url();?>assets/images/show-hide.png" class="search-drop"/>
			</div>
			<div class="filter filter1">
                <?php 
				$maidtypelist = array("New"=>"New","Transfer"=>"Transfer","Replacement"=>"Replacement","Ex-Singapore"=>"Ex-Singapore","Taken"=>"Taken");
				foreach($maidtypelist as $key=>$value):
				?>
				<div class="divider">
				<input type="checkbox" name="type[]" id="filter_type_maid" value="<?php echo $key; ?>"> <label><?php echo $value; ?></label>
				</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
		<div class="btndivider"><button type="submit" class="searchbtn">Filter</button></div>
	</form>	
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 right-content">
		
		<div class="col-md-12 searchmaid">
		
		<?php if(isset($searchmaidsList)) { ?>
		<?php foreach($searchmaidsList as $data) { ?>
		
			<div class="col-md-4 col-sm-6 col-xs-12 maidimg">
				<div class="border">
					<div class="col-md-5 col-sm-6 col-xs-6 searchmaid-img">
					<a href="<?php echo base_url(); ?>maid/maid_detail/<?php echo $data->id; ?>">
					<?php
					 if($data->image){
					?>
					 <img src="<?php echo $data->image; ?>" />
					<?php
					 }else{
					 ?>
					  <img style="width:100%;height:auto;" src="<?php echo base_url(). 'assets/images/default_maid.png'; ?>" />
					<?php
					 }
					?>
					</a>
					</div>
					<div class="col-md-7 col-sm-6 col-xs-6 searchmaidtxt">
					  <h3><?php echo $data->name;?></h3>
					  <div class="searchmaid-info">
					   <p><span class="tit">AGE : <?php echo $data->age;?> yrs</p> </span>
					   <p><span class="tit">COUNTRY : <?php echo $data->country->data->name; ?></p> </span>
					   <p><span class="tit">TYPE : <?php echo $data->type; ?></p> </span>
					   	<p><span class="tit">SALARY : <span class="salary"><?php echo $data->expected_salary;?></span></p> </span>
						<p><span class="tit">AVAILABLE: <?php echo $data->availability;?></p></span>
					  </div>
					</div>
					<div class="viewbtn-wrap"><a href="<?php echo base_url(); ?>maid/maid_detail/<?php echo $data->id ?>" class="view-detail">view Details</a></div>
			</div>
				
		
		</div>
		<?php } ?>	
		<?php } ?>
		<div class="col-md-12 col-xs-12 col-sm-12 pagination">
		
				<?php echo $links; ?>
		</div>

	
	</div>
	
	
 </div>
 
 </div>
 <script>
 
	$(document).ready(function(){
		$(".filter1").slideUp();
		$($(".filter1")[0]).slideDown();
		$($(".filter1")[0]).addClass("list-down");
		$($(".filter1")[1]).slideDown();
		$($(".filter1")[1]).addClass("list-down");
		$($(".filter1")[2]).slideDown();
		$($(".filter1")[2]).addClass("list-down");
		$(".search-drop").on("click", function(){
			var check = $($(this).parent().siblings(".filter1")).hasClass("list-down");
			if(check==true){
				$($(this).parent().siblings(".filter1")).removeClass("list-down");
				$($(this).parent().siblings(".filter1")).slideUp("list-down");
			}else{
				$($(this).parent().siblings(".filter1")).addClass("list-down");
				$($(this).parent().siblings(".filter1")).slideDown("list-down");
			}
		});
	});
 
 </script>
 
 
