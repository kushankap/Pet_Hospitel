<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include_once 'header_main.php'; ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	
	  <?php include_once 'header_side.php'; ?>
	  
        <!-- top navigation -->
		<?php include_once 'header.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Company Register</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      
                  
                  <!-- ==== Reg form === -->

                  <div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Catogary <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                      <select class="form-control" id="company-catgory" name="company-catgory" >
													<option>Select Catogary</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
												</select>
											</div>
                    </div>

                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">District <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                      <select class="form-control" id="company-catgory" name="company-catgory" >
													<option>Select District</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
												</select>
											</div>
                    </div>

                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Company Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="company-name" name="company-name" required="required" class="form-control ">
											</div>
                    </div>
                    
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="company-address">company Address<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                      <textarea class="form-control" rows="3" placeholder="" id="company-address" name="company-address" ></textarea>
											</div>
                    </div>

                    <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">E-mail</label>
											<div class="col-md-6 col-sm-6 ">
												<input class="form-control" type="text" id="company-email" name="company-email">
											</div>
                    </div>
                    
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Phone Number 1</label>
											<div class="col-md-6 col-sm-6 ">
												<input class="form-control" type="text" id="company-phno1" name="company-phno1">
											</div>
                    </div>

                    <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Phone Number 2</label>
											<div class="col-md-6 col-sm-6 ">
												<input class="form-control" type="text" id="company-phno2" name="company-phno2">
											</div>
                    </div>

                    <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">FAX Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input class="form-control" type="text" id="company-fax" name="company-fax">
											</div>
                    </div>
                    

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Cancel</button>
                        
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>

								

                  <!-- === End reg form === -->
                  
                
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include_once 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

   
  </body>
</html>
