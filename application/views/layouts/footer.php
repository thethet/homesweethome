<script src='http://demo.saiapple.com/lib/filter/number_only.js'></script>
<?php date_default_timezone_set('Asia/Bangkok'); ?>
<div class="footer">
	<div class="container footersection">
	<div class="col-md-4 col-sm-4 col-xs-12 social">
	<h4>Social Media</h4>
	<div class=socials">
	<?php 
		$twitter = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','contact_social')
	?>
	<a href="<?php echo $twitter;?>" target="_blank">
	<img src="<?php echo base_url(). 'assets/images/twitter.png' ; ?>" />
	</a>
	<?php 
		$facebook = $this->Pages_Model->returnbycondistring('page_name','maid_pages','page_parent','contact_social')
	?>
	<a href="<?php echo $facebook;?>" target="_blank">
	<img src="<?php echo base_url(). 'assets/images/facebook.png' ; ?>" />
	</a>
	<?php 
		$linkedin = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','contact_social');
	?>
	<a href="<?php echo $linkedin; ?>" target="_blank">
	<img src="<?php echo base_url(). 'assets/images/linked.png' ; ?>" />
	</a>
	</div>
	<div class="ftofficehours">
	<?php 
		$officehours = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','main_branch');
	?>
	<?php echo 'Office Hours : '.nl2br($officehours); ?>
	</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12 contact">
	<h4>Contact Us</h4>
	<div class="ftofficeaddress">
	<div>
	<?php 
		$officeAddress = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','main_branch');
		echo nl2br($officeAddress);
	?>
	</div>
	<div>
	<?php 
		$officeTel = $this->Pages_Model->returnbycondistring('page_updated_by','maid_pages','page_parent','main_branch');
		echo 'Tel : '.nl2br($officeTel);
	?>
	</div>
	<div>
	<?php 
		$officeFax = $this->Pages_Model->returnbycondistring('page_name','maid_pages','page_parent','main_branch');
		echo 'Fax : '.nl2br($officeFax);
	?>
	</div>
	<div>
	<?php 
		$officeEmail = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent','main_branch');
		echo 'email : '.nl2br($officeEmail);
	?>
	</div>
	</div>
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12 frmcontact">
	<h4>Contact Form</h4>
	<?php if(isset($returnname)){ ?>
	<?php if($returnname) : ?>
	<div class="divider">
	<span class="notice">
	<?php echo $returnname; ?>
	</span>
	</div>
	<?php endif; ?>
	<?php } ?>
	<form action="<?php echo base_url() ?>Pages/mailsend" method="post" enctype="multipart/form-data">
	<div class="divider">
	<input type="text" required name="txtname" class="frmtxt" placeholder="Name"></input>
	</div>
	<div class="divider">
	<input type="email" required name="txtemail" class="frmtxt" placeholder="Email Address"></input>
	</div>
	<div class="divider">
	<input type="phone" required id="tele" name="txtphone" class="frmtxt" placeholder="Phone"></input>
	</div>
	<div class="divider">
	<textarea name="txtmessage" required class="frmarea" placeholder="Message"></textarea>
	</div>
	<div class="divider">
	<input type="submit" class="btnsubmit" name="submit" value="submit"></input>
	</div>
	</form>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12 reserved">
	<span>@Copyright <?php echo date('Y'); ?> www.hsh.netmaid.com.sg, All Rights Reserved</span>
	</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tele").on("input", function(){
		 number_only(this);
		});
	
		var url = window.location.href.split('#')[0];
		$('.dsmenu a[href="'+url+'"]').addClass('menuactive');
		
		var pathArray = window.location.pathname.split('/');
		var newPathname = "";
		for( i =0 ; i< pathArray.length;i++){
			newPathname += pathArray[i];
			newPathname += "/";
		}
		var u = newPathname.match(/^[^\d#\?]+/)[0];
		if(u == '/searchmaids/'){
			$('.dsmenu a[href="'+'<?php echo base_url(); ?>searchmaids'+'"]').addClass('menuactive');
		}
		if(u == '/maid/maid_detail/'){
			$('.dsmenu a[href="'+'<?php echo base_url(); ?>searchmaids'+'"]').addClass('menuactive');
		}
		if(u == '/maid/search_result/'){
			$('.dsmenu a[href="'+'<?php echo base_url(); ?>searchmaids'+'"]').addClass('menuactive');
		}
		if(u == '/aboutus/mailsend/'){
			$('.dsmenu a[href="'+'<?php echo base_url(); ?>aboutus'+'"]').addClass('menuactive');
		}
		if(u == '/index.php/maid/search_result/'){
			$('.dsmenu a[href="'+'<?php echo base_url(); ?>searchmaids'+'"]').addClass('menuactive');
		}
		if(u == '/Pages/mailsend/'){
			$('.dsmenu a[href="'+'<?php echo base_url(); ?>'+'"').addClass('menuactive');
		}
	});
</script>



