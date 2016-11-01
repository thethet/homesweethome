<link rel="stylesheet" href="<?php echo base_url(); ?>css/maid_details.css" />
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
	
	<?php 	if ($maidDetailData['id']) { ?>
	
		<div class="maiddetail-header">	
			<h2>
				<?php 
					if($maidDetailData['name'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['name']; 
					}
				?>
			</h2>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 detail-img"  style="float:right;">
			<?php 
				if ($maidDetailData['profile_picture']) { ?>
				<img class="img-responsive" src="<?php echo $maidDetailData['profile_picture'];?>" />
			<?php } else {?>
			  <img src="<?php echo base_url(). 'assets/images/default_maid.png'; ?>" />
			<?php } ?>
		</div><!-- .detail-img -->
		<div class="col-xs-12 col-sm-8 col-md-8 maid-detail" style="float:left;">
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Maid Name</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<span class="mtit">
				<?php 
					if($maidDetailData['name'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['name']; 
					}
				?>
				</span></div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Ref. Code</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['reference_code'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['reference_code']; 
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Type</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
					<?php 
						if($maidDetailData['type'] ==''){
							echo 'N/A';
						}else{
							echo $maidDetailData['type'];
						}
					?>
				</div>
			</div>

			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Maid Agency</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata"><span class="aglb">
				<?php 
				if(isset($maidDetailData['agency']['data']['name'])){
					if( $maidDetailData['agency']['data']['name'] ==''){
						echo 'N/A';
					}else{
						echo  $maidDetailData['agency']['data']['name'];
					}
				}	
				?>
				</span></div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Available</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
					<?php 
						if($maidDetailData['availability'] ==''){
							echo 'N/A';
						}else{
							echo $maidDetailData['availability']; 
						}
					?>
				</div>
			</div>

			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Salary</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata"><span class="salary">
				<?php 
								if($maidDetailData['expected_salary'] ==''){
									echo 'N/A';
								}else{
									echo $maidDetailData['expected_salary']; 
								}
							?>
				</span></div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Preferred Days Off</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['rest_days_preference'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['rest_days_preference']; 
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Nationality</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['nationality'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['nationality'];
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Date Of Birth</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php echo $maidDetailData['date_of_birth']; ?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Place Of Birth</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['place_of_birth'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['place_of_birth'];
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Siblings</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['no_of_siblings'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['no_of_siblings']; 
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Height/Weight</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata"><?php echo $maidDetailData['height'] . ' cm / ' . $maidDetailData['weight'] . ' kg'; ?></div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Religion</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['religion'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['religion'];
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Marital Status</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['marital_status'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['marital_status'];
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Children</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['no_of_children'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['no_of_children'];
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Education</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
				if(isset($maidDetailData['education']['data']['title'])){
					if($maidDetailData['education']['data']['title'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['education']['data']['title'];
					}
				}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Language Skill</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
				if(isset($maidDetailData['languages']['data']['title'])){
					if($maidDetailData['languages']['data']['title'] ==''){
						echo 'N/A';
					}else{
						echo $maidDetailData['languages']['data']['title'];
					}
				}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-12 col-sm-12 col-md-12 mlabel mlabel-mb mworklbl">Preference / Aptitude & Experience</label>
				<div class="col-xs-12 col-sm-1 col-md-1"></div>
				<div class="col-xs-12 col-sm-11 col-md-11">
				
					<?php foreach($maidDetailData['skill_set']['data'] as $experience) { ?>
						
						<div class="row" style="padding-left:15px;margin-bottom:10px;">
							<div class="col-xs-12 col-sm-12 col-md-12 mdata-exp" style="float:left;"><?php echo $experience['workarea_title'].'('.$experience['interview_type'].')'; ?>
							</div>
					
					<?php if ( $experience['rating'] == 0) { ?>
								<div class="star">
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<span class="dat"></span>
								</div>
							<?php } ?>
							<?php if ($experience['rating'] == 1) { ?>
								<div class="star">
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<span class="dat"></span>
								</div>
							<?php } ?>
							<?php if ($experience['rating']  == 2) { ?>
								<div class="star">
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<span class="dat"></span>
								</div>
							<?php } ?>
							<?php if ($experience['rating'] == 3) { ?>
								<div class="star">
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<span class="dat"></span>
								</div>
							<?php } ?>
							<?php if ($experience['rating']  == 4) { ?>
								<div class="star">
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/b-star.png" />
									<span class="dat"></span>
								</div>
							<?php } ?>
							<?php if ($experience['rating']  == 5) { ?>
								<div class="star">
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<img src="<?php echo base_url(); ?>assets/images/star.png" />
									<span class="dat"></span>
								</div>
							<?php } ?>	
							</div>		
					<?php } ?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-6 col-sm-6 col-md-6 mlabel">Working Experience</label>
				<div class="col-xs-6 col-sm-6 col-md-6 mdata">
				<?php 
					if($maidDetailData['total_experience'] <= 0){
					 echo 'N/A';
					}else{
					 echo nl2br($maidDetailData['total_experience']).' yrs';
					}
				?>
				</div>
			</div>
			<div class="divider">
				<label class="col-xs-12 col-sm-12 col-md-12 mlabel mlabel-mb mworklbl">Other Information</label>
				<div class="">
				  <table id="tbl" class="table table-bordered">
				  <thead>
				  <tr>
					<th>Work Title</th>
					<th>Yes</th>
					<th>No</th>
				  </tr>
				  </thead>
				  <tbody>
				  <?php foreach($maidDetailData['other_skill_set']['data'] as $otherinfo) { ?>
				  <tr>
					<td><?php echo $otherinfo['workarea_title'].'('.$otherinfo['interview_type'].')'; ?></td>
					<td>
						<?php if($otherinfo['experience'] == "1"){ ?>
												<img src="<?php echo base_url();?>assets/images/yes.png" />
											<?php } ?>
					</td>
					<td>
						<?php if($otherinfo['experience'] == "0"){ ?>
												<img src="<?php echo base_url();?>assets/images/no.png" />
											<?php } ?>
					</td>
				  </tr>
				<?php } ?>
				</tbody>
				</table>
				</div>
	        </div>
			<div class="divider maidintroentire">
				<div class="introhd">Maid Introduction</div>
				<div class="introhr">
					<img src="<?php echo base_url(); ?>assets/images/introhr.png" />
				</div>
				<div class="introcontent">
					<div class="lintrocontent">
						<img src="<?php echo base_url(); ?>assets/images/introhuman.png" />
					</div>
					<div class="rintrocontent">
						<?php 
								if($maidDetailData['intro'] ==''){
									echo 'N/A';
								}else{
									echo nl2br($maidDetailData['intro']);
								}
							?>
					</div>
				</div>
			</div>
		
		<?php } ?>
	
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
