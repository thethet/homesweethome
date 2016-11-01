<link rel="stylesheet" href="<?php echo base_url(); ?>css/contactus.css" />
<div class="container-fluid homepagebanner">
<?php 
	$path = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent',	'contactus_banner')
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

<div class="container contactus">
<img class="img-responsive contactuswelcome" src="<?php echo base_url(); ?>assets/images/home-content.png" />
<h3>CONTACT</h3>
<p><?php 
			$excerpt = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','contactus');
			echo nl2br($excerpt);?></p>
<P><span class="contactitemname">License# </span><span class="contactitem">
		<?php 
			$lienese = $this->Pages_Model->returnbycondistring('page_name','maid_pages','page_parent','contactus');
			echo nl2br($lienese);
		?></span>
</P>
<P><span class="contactitemname">Email</span> <span class="contactitem">
		<?php 
			$lienese = $this->Pages_Model->returnbycondistring('page_updated_by','maid_pages','page_parent','contactus');
			echo nl2br($lienese);
		?></span>
</P>
<P><span class="contactitemname">Website</span> <span class="contactitem">
		<?php 
			$lienese = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','contactus');
			echo nl2br($lienese);
		?></span>
</P>
<!---------------For Main  Branch --------------------------->

<div class="col-md-12 col-sm-12 col-xs-12 contactushr">
<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/contactushr.png" />
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/address.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$address = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','main_branch');
			echo nl2br($address);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/clock.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$open = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','main_branch');
			echo nl2br($open);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/phone.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$phone = $this->Pages_Model->returnbycondistring('page_updated_by','maid_pages','page_parent','main_branch');
			echo nl2br($phone);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/printer.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$fax = $this->Pages_Model->returnbycondistring('page_name','maid_pages','page_parent','main_branch');
			echo nl2br($fax);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/mail.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$mail = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent','main_branch');
			echo nl2br($mail);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/groupperson.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$groupperson = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','main_contact_person');
			echo nl2br($groupperson);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/person.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$person = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','main_contact_person');
			echo nl2br($person);
		?>
</div>
</div>

<!---------------For Other Branch --------------------------->
<div class="col-md-12 col-sm-12 col-xs-12 contactushr">
<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/contactushr.png" />
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/address.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$address = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','other_branch');
			echo nl2br($address);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/clock.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$open = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','other_branch');
			echo nl2br($open);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/phone.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$phone = $this->Pages_Model->returnbycondistring('page_updated_by','maid_pages','page_parent','other_branch');
			echo nl2br($phone);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/printer.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$fax = $this->Pages_Model->returnbycondistring('page_name','maid_pages','page_parent','other_branch');
			echo nl2br($fax);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/mail.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$mail = $this->Pages_Model->returnbycondistring('page_image','maid_pages','page_parent','other_branch');
			echo nl2br($mail);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/groupperson.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$groupperson = $this->Pages_Model->returnbycondistring('page_title','maid_pages','page_parent','other_contact_person');
			echo nl2br($groupperson);
		?>
</div>
</div>
<div class="mainbranch">
<div class="mainbranchimg"><img class="img-responsive" align="middle" src="<?php echo base_url(); ?>assets/images/person.png" />
</div>
<div class="mainbranchtxt">
		<?php 
			$person = $this->Pages_Model->returnbycondistring('page_content','maid_pages','page_parent','other_contact_person');
			echo nl2br($person);
		?>
</div>
</div>
</div>	





