<div class="page-title">
    <div class="title_left">
        <h3>Contact Us</h3>
    </div>                  
</div><!-- .page-title -->

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
	 <?php echo form_open_multipart('admin/contactus/contact_address','id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"'); ?>
		<div class="x_panel">
            <div class="x_title">
                <h2>Contact Us <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->

            <div class="x_content">
            	<br />
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">License 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="contact_license" value="<?php echo $contactus['page_name'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="contact_email" value="<?php echo $contactus['page_updated_by'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Website 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="contact_website" value="<?php echo $contactus['page_content'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="facebook" value="<?php echo $social['page_name'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="twitter" value="<?php echo $social['page_title'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="linkedin" value="<?php echo $social['page_content'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Excerpt 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
								<textarea class="form-control col-md-7 col-xs-12" name="contactexcerpt"><?php echo $contactus['page_title'];?></textarea>
                        </div>
                    </div>

            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		 <div class="ln_solid"></div>
        <div class="x_panel">
            <div class="x_title">
                <h2>Main Branch <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->

            <div class="x_content">
            	<br />
               
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           	<textarea class="form-control col-md-7 col-xs-12" name="main_address"><?php echo $main_branch['page_content'];?></textarea>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Available Hours 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="main_hours" class="form-control col-md-7 col-xs-12"><?php echo $main_branch['page_title'];?></textarea>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">phone 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="main_phone" value="<?php echo $main_branch['page_updated_by'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">fax 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="main_fax" value="<?php echo $main_branch['page_name'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="main_email" value="<?php echo $main_branch['page_image'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact Person Group 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="main_cpg" class="form-control col-md-7 col-xs-12"><?php echo $main_contact_person['page_title'];?></textarea>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact Person 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="main_cp" class="form-control col-md-7 col-xs-12"><?php echo $main_contact_person['page_content'];?></textarea>
                        </div>
                    </div>
						

            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		 <div class="ln_solid"></div>
		<div class="x_panel">
            <div class="x_title">
                <h2>Other Branch <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->

            <div class="x_content">
            	<br />
               
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           	<textarea class="form-control col-md-7 col-xs-12" name="other_address"><?php echo $other_branch['page_content'];?></textarea>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Available Hours 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="other_hours" class="form-control col-md-7 col-xs-12"><?php echo $other_branch['page_title'];?></textarea>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">phone 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="other_phone" value="<?php echo $other_branch['page_updated_by'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">fax 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="other_fax" value="<?php echo $other_branch['page_name'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="other_email" value="<?php echo $other_branch['page_image'];?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact Person Group 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="other_cpg" class="form-control col-md-7 col-xs-12"><?php echo $other_contact_person['page_title'];?></textarea>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact Person 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="other_cp" class="form-control col-md-7 col-xs-12"><?php echo $other_contact_person['page_content'];?></textarea>
                        </div>
                    </div>
						

            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		 <div class="ln_solid"></div>

			<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<button type="submit" class="btn btn-success">Update</button>
				</div>
			</div>

		<?php echo form_close(); ?>

    </div><!-- .col/span -->
</div><!-- .row -->