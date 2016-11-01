<div class="page-title">
    <div class="title_left">
        <h3>All Banner</h3>
    </div>                  
</div><!-- .page-title -->


<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php echo form_open_multipart('admin/banner','id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"'); ?>

        <div class="x_panel">
            <div class="x_title">
                <h2>Home Page Banner<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->


            <div class="x_content">
			
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="homepage_banner_title" value="<?php echo $homepage['page_title']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="homepage_banner_img" class="form-control col-md-7 col-xs-12">
                            <?php 
                                $path = $homepage['page_image']; 
                            ?>
							<?php if($path): ?>
                                <img style="width:100%;height:auto;" class="show-img" src="<?php echo base_url(). 'uploads/banner/' . $path; ?>" />
							<?php endif; ?>	
                        </div>                       
                    </div>


            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		
		<div class="x_panel">
            <div class="x_title">
                <h2>About Us Page Banner<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->


            <div class="x_content">
			
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="aboutus_banner_title" value="<?php echo $aboutus['page_title']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="aboutus_banner_img" class="form-control col-md-7 col-xs-12">
                            <?php 
                                $path = $aboutus['page_image']; 
                            ?>
							<?php if($path): ?>
                                <img style="width:100%;height:auto;" class="show-img" src="<?php echo base_url(). 'uploads/banner/' . $path; ?>" />
							<?php endif; ?>	
                        </div>                       
                    </div>


            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		
		<div class="x_panel">
            <div class="x_title">
                <h2>Contact Us Page Banner<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->


            <div class="x_content">
			
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="contactus_banner_title" value="<?php echo $contactus['page_title']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="contactus_banner_img" class="form-control col-md-7 col-xs-12">
                            <?php 
                                $path = $contactus['page_image']; 
                            ?>
							<?php if($path): ?>
                                <img style="width:100%;height:auto;" class="show-img" src="<?php echo base_url(). 'uploads/banner/' . $path; ?>" />
							<?php endif; ?>	
                        </div>                       
                    </div>


            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		
		<div class="x_panel">
            <div class="x_title">
                <h2>Service Page Banner<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->


            <div class="x_content">
			
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="service_banner_title" value="<?php echo $service['page_title']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="service_banner_img" class="form-control col-md-7 col-xs-12">
                            <?php 
                                $path = $service['page_image']; 
                            ?>
							<?php if($path): ?>
                                <img style="width:100%;height:auto;" class="show-img" src="<?php echo base_url(). 'uploads/banner/' . $path; ?>" />
							<?php endif; ?>	
                        </div>                       
                    </div>


            </div><!-- .x_content -->
        </div><!-- .x_panel -->
		
		<div class="x_panel">
            <div class="x_title">
                <h2>Maid Page Banner<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->


            <div class="x_content">
			
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="maid_banner_title" value="<?php echo $maid['page_title']; ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="maid_banner_img" class="form-control col-md-7 col-xs-12">
                            <?php 
                                $path = $maid['page_image']; 
                            ?>
							<?php if($path): ?>
                                <img style="width:100%;height:auto;" class="show-img" src="<?php echo base_url(). 'uploads/banner/' . $path; ?>" />
							<?php endif; ?>	
                        </div>                       
                    </div>


            </div><!-- .x_content -->
        </div><!-- .x_panel -->

<!-- /***************************************************/ -->

		 <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                       <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                <?php echo form_close(); ?>

    </div><!-- .col/span -->
</div><!-- .row -->


