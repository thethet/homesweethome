<?php $currentuser = $this->session->userdata('id');?>
<div class="page-title">
    <div class="title_left">
        <a href="<?php echo base_url(); ?>admin/add_user/" class="btn btn-primary">Add User</a>
    </div>                  
</div><!-- .page-title -->

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>All Users <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div><!-- .x_title -->

            <div class="x_content">
            	<br />
                <div class="table-responsive">
                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                <thead>
                    <tr class="headings">                       
                        <th class="column-title">ID</th>
                        <th class="column-title">Username</th>
                        <th class="column-title">Display Name</th>
                        <th class="column-title">Role</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($usersList as $user) { ?>
                    <tr class="even pointer">
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['display_name']; ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <td>
						<?php if($currentuser == $user['id']){
						}else{?>
							<a href="<?php echo base_url() . "admin/edit_user/{$user['id']}" ?>" class="btn-border"><i class="fa fa-edit"></i> Edit </a>
                        <!-- <a href="<?php //echo base_url() . "admin/delete_user/{$user['id']}" ?>" class="btn-border"><i class="fa fa-delete"></i> Delete </a> -->
                        
						<a onclick="return confirm('Are you sure you want to remove this item?')" 
							href="<?php echo base_url() . "admin/delete_user/".$user['id']?>" class="btn-border">Delete</a>
						<?php 
						}
						?>
                        
                        </td>
                    </tr>
					<!-- modal -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Delete Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to delete this one?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a href="<?php echo base_url() . "admin/delete_user/".$user['id']?>" class="btn btn-primary"> Yes </a>
                            </div>

                        </div>
                    </div>
                </div>
            <!-- modal -->
                <?php } ?>
				
                </tbody>
                </table>            
            </div><!-- .table-responsive -->
   

            </div><!-- .x_content -->
        </div><!-- .x_panel -->
    </div><!-- .col/span -->
</div><!-- .row -->



<script type="text/javascript">
    
    $(document).ready(function(){
        //alert("Javascript");
    });
</script>