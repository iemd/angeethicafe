
<?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   
        <!-- Header-->

      <?php foreach($editData as $row) { ?>
<?php //print_r($row); ?>
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  

                 <form action="<?php echo base_url(); ?>Product/updateAction/<?php echo $row['prod_id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal"><form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit Products</strong>
						<h4 style="color:green;"><?php echo $this->session->flashdata('message'); ?></h4>
                      </div>
                      <div class="card-body card-block">
                        
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pname" name="pname" value="<?php echo $row['prod_name']; ?>" class="form-control"></div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select"  class=" form-control-label">Product Category</label></div>
                            <div class="col-12 col-md-9">
                              <select name="pcategory" id="pcategory" class="form-control">
                                <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                                <option value="1">shorba</option>
                                <option value="2">starter</option>
                                <option value="3">salads</option>
								<option value="4">Main course</option>
                                <option value="5">Rice & Roti</option>
                                <option value="6">Chinese Starter</option>
								<option value="7">Chinese</option>
								<option value="8">Chinese & Soups</option>
                                <option value="9">Thalis</option>
								<option value="10">Dessert</option>
                                
                              </select>
                            </div>
                          </div>
                          
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Price</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="pprice" name="pprice" value="<?php echo $row['base_price']; ?>" class="form-control"></div>
                          </div> 
						  
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Discount</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="discount" name="discount" value="<?php echo $row['discount']; ?>" class="form-control"></div>
                          </div> 
                         
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Type</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="type" name="type" value="<?php echo $row['type']; ?>" class="form-control-file"></div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Delivery Time</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="time" name="time" value="<?php echo $row['delivery_time']; ?>" class="form-control-file"></div>
                          </div>
						  

                        
                      </div>
                      
                    </div>
                    
                  </div>
				  
				  
				  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        &nbsp;&nbsp;
							  <div class="card-body card-block">
														   
								  <div class="row form-group">
									<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Short Description</label></div>
									<div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" value="<?php echo $row['short_des']; ?>" class="form-control"><?php echo $row['short_des']; ?></textarea></div>
								  </div>
												  
							  </div>
							  
							  <div class="card-body card-block">
														   
								  <div class="row form-group">
									<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Long Description</label></div>
									<div class="col-12 col-md-9"><textarea name="long_des" id="long_des" rows="9" value="<?php echo $row['long_des']; ?>"  class="form-control"><?php echo $row['long_des']; ?></textarea></div>
								  </div>
												  
							  </div>
							  
							  
							  
							  <div class="card-footer">
							
								<button type="submit" class="btn btn-primary btn-sm">
								  <i class="fa fa-dot-circle-o"></i> Update
								</button>
								
							  </div>
					   </div>
                    </div>
                    
                  </div>

                 

                 </form>
                  
                  
              	<?php } ?>     

                  
<?php } else { ?>
				  
				  <?php redirect(base_url('AdminPanel')); ?>
				  
				  <?php } ?>
                  

                


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
