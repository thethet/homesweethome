<script type="text/javascript" src="<?php echo base_url();?>/javascript/services.js"/></script>
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
                <h2>Add Service<small></small></h2>
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
                
				<?php echo form_open_multipart('/admin/save_service', 'id="frmservice" data-parsley-validate class="form-horizontal form-label-left"') ?>
				    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<p>
							<input type="button" onClick="i_Bold()" value="Bold">
							<input type="button" onClick="i_Underline()" value="Underline">
							<input type="button" onClick="i_Italic()" value="Italic">
							<input type="button" onClick="i_UnorderedList()" value="OL">
							<input type="button" onClick="i_OrderedList()" value="UL">
						</p>
        					<textarea style="display:none;" id="title" class="form-control col-md-7 col-xs-12" name="title"></textarea>
							<iframe name="ititle" id="ititle" style="border:solid 1px #CCD0D7;"  width="100%" height="auto"></iframe>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<p>
							<input type="button" onClick="d_Bold()" value="Bold">
							<input type="button" onClick="d_Underline()" value="Underline">
							<input type="button" onClick="d_Italic()" value="Italic">
							<input type="button" onClick="d_UnorderedList()" value="OL">
							<input type="button" onClick="d_OrderedList()" value="UL">
						</p>
    						<textarea style="display:none;" id="description" class="form-control col-md-7 col-xs-12" name="description"></textarea>
							<iframe name="idescription" id="idescription" style="border:solid 1px #CCD0D7;"  width="100%" height="auto"></iframe>
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="serviceimg" class="form-control col-md-7 col-xs-12">
                        </div>                       
                    </div>

                    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="<?php echo base_url()."admin/services/"?>" class="btn btn-primary">Cancel</a>
                        <button type="button" onclick="submit_form();" class="btn btn-success">Save</button>
                        </div>
                    </div>

              
			<?php echo form_close(); ?>
            </div><!-- .x_content -->
        </div><!-- .x_panel -->
    </div><!-- .col/span -->
</div><!-- .row -->