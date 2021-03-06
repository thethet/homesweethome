<div class="page-title">
    <div class="title_left">
        <h3>About Us</h3>
    </div>                  
</div><!-- .page-title -->


<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
       <?php echo form_open_multipart('admin/aboutus','id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"'); ?>

        <div class="x_panel">
            <div class="x_title">
                <h2>Home Page<small></small></h2>
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
						<input type="text" name="title" value="<?php echo $aboutus['page_name']; ?>" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
							Description
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="description" class="form-control col-md-7 col-xs-12"><?php echo $aboutus['page_content']; ?></textarea>
							
                        </div>
                    </div>
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
							Excerpt
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="excerpt" class="form-control col-md-7 col-xs-12"><?php echo $aboutus['page_title']; ?></textarea>
							
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


