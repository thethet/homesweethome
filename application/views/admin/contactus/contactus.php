<div class="page-title">
    <div class="title_left">
        <h3>Contact Us</h3>
    </div>                  
</div><!-- .page-title -->

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
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
                <?php echo form_open_multipart('admin/contactus','id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"'); ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">License 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="license" value="<?php echo $contents['page_name']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="email" value="<?php echo $contents['page_image']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Website 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="website" value="<?php echo $contents['page_updated_by']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">EA Personal 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="personal" class="form-control col-md-7 col-xs-12"><?php echo $contents['page_title']; ?></textarea>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contents 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="contents" class="form-control col-md-7 col-xs-12"><?php echo $contents['page_content']; ?></textarea>
                        </div>
                    </div>
					
					
					
                    <div class="ln_solid"></div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                <?php echo form_close(); ?>

            </div><!-- .x_content -->
        </div><!-- .x_panel -->
    </div><!-- .col/span -->
</div><!-- .row -->