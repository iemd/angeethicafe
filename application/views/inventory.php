<?php $id = $this->session->userdata('invoiceData'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>



<?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
<div class="card-title">
                                      <h3 class="text-center">Inventory</h3>
                                  </div>
								  
								  <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
									   <br>
<div class="col-lg-12">
                                     
                       
                
									   
									  <form action="<?php echo base_url(); ?>Inventory/saveInventory" method="post" novalidate="novalidate">
                                      
                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Product Name</label>
                                                  <input id="pname" name="pname" type="text" class="form-control cc-exp" value="" >
                                                  
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Quantity</label>
                                              <div class="input-group">
                                                  <input id="text" name="qty" type="qty" class="form-control cc-cvc" value="" >
                                                  
                                              </div>
                                          </div>
										  
										  <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Unit</label>
                                              <div class="input-group">
                                                  <input id="unit" name="unit" type="text" class="form-control cc-cvc" value="" required>
                                                  
                                              </div>
                                          </div>
										  
										   <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Price</label>
                                                  <input id="price" name="price" type="text" class="form-control cc-exp" value="" required>
                                                  
                                              </div>
                                          </div>
                                       </div>
									   
									   <div class="row">
                                          <div class="col-6">
										  <input type="submit" class="btn btn-info" name="bill" id="bill" value="Add Stock"/>
										 </div>
                                       </div>
									   </form>
										
										
									   <br>
								   
									   <div class="box box-primary">
  
            <div class="box-header">
              <h3 class="box-title"> <i class="fa fa-sitemap"></i>&nbsp; Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>Inventory/export_csv"><button style="font-size:24px;color:green">Download Inventory <i class="fa fa-download"></i></button></a></h3>
			   
            </div>
			
                                          
										 
										
                                      
									   <br>
            <!-- /.box-header -->
            <div  class="table-responsive">
          
     <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  
                  <th>Product Name</th>                  
                  <th>Quantity</th> 
				  <th>Unit</th>				  
                  <th>Price</th>				   
                  <th>Stock In</th>
				  <th>Stock Out</th>
				  <th>Date</th>
				  <th>Quantity Out</th>
				  <th>Date Out</th>
				  <th>Total Price</th>
                  <th>Delete</th>  				  
                </tr>
                </thead>
                <tbody>
                

             <?php foreach($getData as $row) { ?> 

	<?php  
	$total = 0;
$items = 0;
   
   $quantity = $row['qty'];
   $base_price = $row['price'];
   $price = $base_price * $quantity;
   
   
   
   
   // echo $items += $quantity;

?>	
                <tr class="success">
                <td><?php echo $row['pname']; ?></td>
                  <td><?php echo $row['qty']; ?></b></td>
                  <td><?php echo $row['unit']; ?></td>
                   <td><?php echo $row['price']; ?></td>
				   <td><a href="<?php echo base_url(); ?>Inventory/stockIn/<?php echo $row['inv_id']; ?>"><center><i class="fa fa-plus-circle" style="font-size:24px;"></i></center></a></td>
				   
				   <td><a href="<?php echo base_url(); ?>Inventory/stockOut/<?php echo $row['inv_id']; ?>"><center><i class="fa fa-minus-circle"  style="font-size:24px;" ></i></center></a></td>
                   <td><?php echo $row['date']; ?></td>
				   <td><?php if(!empty($row['qtyOut'])){ echo $row['qtyOut']; } ?></td>
				   <td><?php if(!empty($row['dateOut'])){ echo $row['dateOut']; } ?></td>
				   <td><?php echo $price; ?></td>
				   
                 <td><a class="badge bg-red" onClick="return confirm('Are you sure want to delete this ?')" href="<?php echo base_url(); ?>Inventory/deleteProduct/<?php echo $row['inv_id']; ?>"><i class="fa fa-trash"></i> &nbsp; Delete</a></td>
                </tr>
              
			  
			  
			  
			 <?php } ?>
              
                </tfoot>
              </table>
         
            </div>
            <!-- /.box-body -->
			
			
			  
           
     
    </div>


<?php } else { ?>
				  
				  <?php redirect(base_url('AdminPanel')); ?>
				  
				  <?php } ?>
				  
				  
				  <script src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
