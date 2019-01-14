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





                                      <form action="<?php echo base_url(); ?>Billing/InvoiceGenerate/" method="post" novalidate="novalidate">

                                      <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Invoice Id.</label>
                                                  <input id="Invoice" name="Invoice" type="text" class="form-control cc-exp" value="ANGR/H-0<?php echo count($bill)+1; ?>" readonly>

                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Date</label>
                                              <div class="input-group">
                                                  <input id="date" name="date" type="text" class="form-control cc-cvc" value="<?php echo date('y-m-d'); ?>" readonly>

                                              </div>
                                          </div>

										  <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Mobile</label>
                                              <div class="input-group">
                                                  <input id="Mobile" name="Mobile" type="text" class="form-control cc-cvc" value="" required>

                                              </div>
                                          </div>
                                       </div>
									   <div class="row">
                                          <div class="col-6">
                                              <div class="form-group">
                                                  <label for="cc-exp" class="control-label mb-1">Name</label>
                                                  <input id="Name" name="Name" type="text" class="form-control cc-exp" value="" required>

                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <label for="x_card_code" class="control-label mb-1">Address</label>
                                              <div class="input-group">
                                                  <input id="Address" name="Address" type="text" class="form-control cc-cvc" value="" required>

                                              </div>
                                          </div>


                                       </div>
									   <div class="row">
                                          <div class="col-6">
										  <input type="submit" class="btn btn-info" name="bill" id="bill" value="Generate Bill"/>
										 </div>
                                       </div>
									   </form>


									   <br>
									   <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
									  <br>







                    <!-- .card -->

                  </div>
				  <?php } else { ?>

				  <?php redirect(base_url('AdminPanel')); ?>

				  <?php } ?>
