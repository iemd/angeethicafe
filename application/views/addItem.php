<?php $id = $this->session->userdata('invoiceData'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<style>
    input[type="textbox"]{
        padding: .7rem .75rem;
    }
</style>
<?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
<div class="card-title">
                                      <h3 class="text-center">Billing</h3>
                                  </div>
								  
								  <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
									   <br>
<div class="col-lg-12">
                                     
                       
                
									   
									  <form action="<?php echo base_url(); ?>Billing/displayItem/" method="post" novalidate="novalidate">
									  <div class="row">
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label>Enter Product Name</label>
                                                  <select name="product" id="selectLgp" class="form-control-lg form-control">
													<option value="" selected="" >Select Product</option>
													<?php foreach($editData as $row) { ?>
													<option value="<?php echo $row['prod_name']; ?>"><?php echo $row['prod_name']; ?></option>
													<?php } ?> 
												  </select>
                                                  
                                              </div>
                                          </div>
                                          <div class="col-4">
                                              <div class="form-group">
                                                  <label>&nbsp;</label>
<input type="text" name="quantity" id="quantity" class="form-control-lg form-control" placeholder="Enter Quantity"/>
                                                  <!--<select name="quantity" id="selectLg" class="form-control-lg form-control">
													<option value="0">Select Quantity</option>
													
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													
												  </select>-->
												  
                                                  
                                              </div>
                                          </div>
										  
										  <div class="col-4">
                                             
                                            <input style="margin-top:40px;" type="submit" class="btn btn-info" name="bill" id="bill" value="bill"/>
                                               
                                    <?php $this->session->userdata('invoiceData'); ?>
                                               
                                          </div>
										  
										  
                                       </div>
									    </form>
										
										
									   <br>
	<form action="<?php echo base_url(); ?>Billing/update_billing/" method="post" novalidate="novalidate">								   
									   <div class="box box-primary">
  
            <div class="box-header">
              <h3 class="box-title"> <i class="fa fa-sitemap"></i> &nbsp; Details</h3>
            </div>
            <!-- /.box-header -->
            <div  class="table-responsive">
          
     <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>InvoiceId</th>
                  <th>Product Name</th>                  
                  <th>Quantity</th>  
                   <th>Price</th>				   
                  
				  <th>Sub Total</th>
                  <th>Delete</th>  				  
                </tr>
                </thead>
                <tbody>
                

             <?php foreach($getcart as $cart) { ?> 

	<?php  
	$total = 0;
$items = 0;
   $count = count($getcart);
   $quantity = $cart['quantity'];
   $base_price = $cart['base_price'];
   $data[]=$price = $base_price * $quantity;
   //$discount =  $cart['discount'];
   //$subtotal = $price * $discount / 100;
   //$data[]=$total = $price - $subtotal;
   
   
   
   // echo $items += $quantity;

?>	
                <tr class="success">
                <td><?php echo $cart['invoiceId']; ?></td>
                  <td><?php echo $cart['prod_name']; ?></b></td>
                  <td><?php echo $cart['quantity']; ?></td>
                   <td><?php echo $cart['base_price']; ?></td>
                   
				   <td><?php echo $price; ?></td>
                 <td><a class="badge bg-red" onClick="return confirm('Are you sure want to delete this ?')" href="<?php echo base_url('Billing/DeleteBill/'.$cart['cart_id']); ?>"><i class="fa fa-trash"></i> &nbsp; Delete</a></td>
                </tr>
              
			 <?php } ?>
              
                </tfoot>
              </table>
         
            </div>
            <!-- /.box-body -->
           
     
    </div>
    
    <script>
        
          (function ($) {

      $.fn.searchit = function (options) {

          return this.each(function () {

              $.fn.searchit.globals = $.fn.searchit.globals || {
                  counter: 0
              }
              $.fn.searchit.globals.counter++;
              var $counter = $.fn.searchit.globals.counter;

              var $t = $(this);
              var opts = $.extend({}, $.fn.searchit.defaults, options);

              // Setup default text field and class
              if (opts.textField == null) {
                  $t.before("<input type='textbox' autocomplete='off' class='form-control' id='__searchit" + $counter + "'><br>");
                  opts.textField = $('#__searchit' + $counter);
              }
              if (opts.textField.length > 1) opts.textField = $(opts.textField[0]);

              if (opts.textFieldClass) opts.textField.addClass(opts.textFieldClass);
              //MY CODE-------------------------------------------------------------------
              if (opts.selected) opts.textField.val($(this).find(":selected").val());
              //MY CODE ENDS HERE -------------------------------------------------------
              if (opts.dropDown) {
                  $t.css("padding", "5px")
                      .css("margin", "-5px -20px -5px -5px");

                  $t.wrap("<div id='__searchitWrapper" + $counter + "' />");
                  opts.wrp = $('#__searchitWrapper' + $counter);
                  opts.wrp.css("display", "inline-block")
                      .css("vertical-align", "top")
                      .css("overflow", "hidden")
                      .css("border", "solid grey 1px")
                      .css("position", "absolute")
                      .hide();
                  if (opts.dropDownClass) opts.wrp.addClass(opts.dropDownClass);
              }

              opts.optionsFiltered = [];
              opts.optionsCache = [];

              // Save listbox current content
              $t.find("option").each(function (index) {
                  opts.optionsCache.push(this);
              });

              // Save options 
              $t.data('opts', opts);

              // Hook listbox click
              $t.click(function (event) {
                  _opts($t).textField.val($(this).find(":selected").text());
                  _opts($t).wrp.hide();
                  event.stopPropagation();
              });

              // Hook html page click to close dropdown
              $("html").click(function () {
                  _opts($t).wrp.hide();
              });

              // Hook the keyboard and we're done
              _opts($t).textField.keyup(function (event) {
                  if (event.keyCode == 13) {
                      $(this).val($t.find(":selected").text());
                      _opts($t).wrp.hide();
                      return;
                  }
                  setTimeout(_findElementsInListBox($t, $(this)), 50);
              })

          })


          function _findElementsInListBox(lb, txt) {

              if (!lb.is(":visible")) {
                  _showlb(lb);
              }

              _opts(lb).optionsFiltered = [];
              var count = _opts(lb).optionsCache.length;
              var dropDown = _opts(lb).dropDown;
              var searchText = txt.val().toLowerCase();

              // find match (just the old classic loop, will make the regexp later)
              $.each(_opts(lb).optionsCache, function (index, value) {
                  if ($(value).text().toLowerCase().indexOf(searchText) > -1) {
                      // save matching items 
                      _opts(lb).optionsFiltered.push(value);
                  }

                  // Trigger a listbox reload at the end of cycle    
                  if (!--count) {
                      _filterListBox(lb);
                  }
              });
          }

          function _opts(lb) {
              return lb.data('opts');
          }

          function _showlb(lb) {
              if (_opts(lb).dropDown) {
                  var tf = _opts(lb).textField;
                  lb.attr("size", _opts(lb).size);
                  _opts(lb).wrp.show().offset({
                      top: tf.offset().top + tf.outerHeight(),
                      left: tf.offset().left
                  });
                  _opts(lb).wrp.css("width", tf.outerWidth() + "px");
                  lb.css("width", (tf.outerWidth() + 25) + "px");
              }
          }

          function _filterListBox(lb) {
              lb.empty();

              if (_opts(lb).optionsFiltered.length == 0) {
                  lb.append("<option>" + _opts(lb).noElementText + "</option>");
              } else {
                  $.each(_opts(lb).optionsFiltered, function (index, value) {
                      lb.append(value);
                  });
                  lb[0].selectedIndex = 0;
              }
          }
      }

      $.fn.searchit.defaults = {
          textField: null,
          textFieldClass: null,
          dropDown: true,
          dropDownClass: null,
          size: 5,
          filtered: true,
          noElementText: "No elements found",
          //MY CODE------------------------------------------
          selected: false
          //MY CODE ENDS ------------------------------------
      }

  }(jQuery))

   $("select#selectLgp").searchit({
      textFieldClass: 'searchbox',
      selected: true
  });
    </script>
    
<?php if(!empty($getcart)) { ?>	
 
	<div class="col-lg-12">
		<hr>
	</div>
	<div class="col-lg-12">
	<div class="col-lg-2">
	Discount    <input type="number" id="chDiscount" name="discount">
	</div>
		<div class="col-lg-2">

 <label>Payment Mode</label>
<select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                <option value="0">Please select</option>
                                <option value="Cash">Cash</option>
                                <option value="Paytm">Paytm</option>
                                <option value="Posh Machine">Posh Machine</option>
                                
                              </select>
 </div>
 
<?php 
$grandtotal = array_sum($data); 
   $cgst1 = $grandtotal * 5 / 100;
   $cgst = $grandtotal + $cgst1;
   
?>
<input type="hidden" name="grandtotal" id="grandtotal" value="<?php echo $grandtotal; ?>" />
<input type="hidden" name="gst" id="gst"  />

	<div class="col-lg-2">
		
 <label>Tax</label>
							
								<div class="form-check-inline form-check form-control-sm form-control" >
                                <label for="inline-checkbox1" class="form-check-label ">
                                  <input type="checkbox" onchange="calculateAmount(this.value)" id="inline-checkbox1" name="inline-checkbox1" value="<?php echo $cgst; ?>" class="form-check-input">GST
                                </label>
                               
 <script>
$(document).on("change keyup blur", "#inline-checkbox1", function() {
var main = $('#result').val();
var disc = 5;
var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
var mult = main*dec; // gives the value for subtract from main value

var discont = (+main)+(+mult);
//alert(discont);
$('#tot_amount').val(discont);
$('#gst').val(mult);

});
</script>                               
                              </div>
								
							
							  <!--<input class="w3-input w3-border" name="pages" id="pages" type="text">-->
 </div>
 
	<div class="col-lg-2">
 <label>Total</label>
<input type="text" name="payable_amount" id="tot_amount" class="form-control" readonly> 
 </div>
 
 <div class="col-lg-2">
 

 </div>
 
 <script>
function calculateAmount(val)
{ 
var price = val * 1;
//display the result
var tot_price=price;
var divobj = document.getElementById('tot_amount');
divobj.value = tot_price;
}
</script>

<div class="col-lg-2">
		 
 </div>
  		

 </div>
	
	
									   <?php //print_r($getcart); ?>
									   
                                    
                                 
                              
                    <!-- .card -->

                  </div>


 <div class="col-lg-6">
 &nbsp;
	    &nbsp;
	  &nbsp;
	    &nbsp;
                                          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span id="payment-button-amount">Pay Now</span>
                                              <span id="payment-button-sending" style="display:none;">Sending…</span>
                                          </button>
                                      </div>
</form>

<input type="hidden" id="result">
<script>
$(document).on("change keyup blur", "#chDiscount", function() {
var main = <?php echo $grandtotal; ?>;
var disc = $('#chDiscount').val();
var dec = (disc/100).toFixed(2); //its convert 10 into 0.10
var mult = main*dec; // gives the value for subtract from main value
var discont = main-mult;
$('#result').val(discont);

});
</script>

<?php } ?>

<?php } else { ?>
				  
				  <?php redirect(base_url('AdminPanel')); ?>
				  
				  <?php } ?>
