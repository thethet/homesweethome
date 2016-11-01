<div class="page-title">
    <div class="title_left">
        <h3></h3>
    </div>                  
</div><!-- .page-title -->


<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Services Overview<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->

            <div class="x_content">
                <div class="error"><?php echo validation_errors(); ?></div>
                <?php 
                        if ($this->session->flashdata('alert_text')) {
                            echo $this->session->flashdata('alert_text');
                        }
                ?>
            	<br />
                
				<?php echo form_open_multipart('/admin/services/services_overview', ' data-parsley-validate class="form-horizontal form-label-left"') ?>
				    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Excerpt<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
        					<textarea  class="form-control col-md-7 col-xs-12" name="title"><?php echo $overview['page_title']; ?></textarea>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="overviewimg" class="form-control col-md-7 col-xs-12">
							<?php if($overview['page_image']):?>
							<img src="<?php echo base_url();?>uploads/services/<?php echo $overview['page_image'];?>" class="img-responsive"/>
							<?php endif; ?>
                        </div>                       
                    </div>

                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
             
                    </div>

              
			<?php echo form_close(); ?>
            </div><!-- .x_content -->
        </div><!-- .x_panel -->
    </div><!-- .col/span -->
</div><!-- .row -->