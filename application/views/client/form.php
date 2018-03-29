<!DOCTYPE html>
<head>
<title>Form</title>

<?php include 'header.php' ?>

</head>
<body class="dashboard-page">

	<!--navigation-->	
	<?php include 'navigation.php' ?>	
	<!--navigation-->

	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		
		<section class="title-bar">
		<?php include 'header-right.php' ?>
		</section>
		
			<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>General Info</h2>
					</div>
	
		 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
	
					
 <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
					
					<div class="panel panel-widget forms-panel">
						
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
								
				<form class="form-horizontal" action="#" method="post">
				
				<div class="form-group">
				<label for="fname" class="col-sm-2 control-label col-md-offset-3">First Name</label>
				<div class="col-sm-4">
			<input type="text" class="form-control" name="fname" placeholder="First Name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
			<span class="error-validation"> * Please enter your first name</span><br>
			<span class="example"> * e.g: Waleed Khan</span>
				</div>
		
			</div>
			
			<div class="form-group">
			<label for="lname" class="col-sm-2 control-label col-md-offset-3">Last Name</label>
			<div class="col-sm-4">
			<input type="text" name="lname" class="form-control"  placeholder="Last Name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
				</div>
			</div>
			
			
			<div class="form-group">
			<label for="email" class="col-sm-2 control-label col-md-offset-3">Email</label>
			<div class="col-sm-4">
			<input type="text" name="email" class="form-control"  placeholder="Email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" required>
				</div>
			</div>
			
			
			<div class="form-group">
			<label for="country" class="col-sm-2 control-label col-md-offset-3">Country</label>
			
			<div class="col-sm-4">
			<select name="country" class="form-control countries" id="countryId" required="required">
			<option value=""> Select Country </option>
			</select>
				</div>
			</div>
			
			
			<div class="form-group">
			<label for="proState" class="col-sm-2 control-label col-md-offset-3">Province / State</label>
			<div class="col-sm-4">
			 <select name="state" class="form-control states" id="stateId" required="required">
			<option value="">Select State</option>
			</select>
				</div>
			</div>
			
			
			
			<div class="form-group">
			<label for="city" class="col-sm-2 control-label col-md-offset-3">City</label>
			<div class="col-sm-4">
			        <select name="city" class="form-control cities" id="cityId" required="required">
				<option value="">Select City</option>
				</select>
				</div>
			</div>
			
			
			
			<div class="form-group">
			<label for="zipcode" class="col-sm-2 control-label col-md-offset-3">Zip Code</label>
			<div class="col-sm-4">
			<input type="text" name="zipcode" class="form-control"  placeholder="Zip Code" pattern="[0-9]{5}" required>
				</div>
			</div>
			
			<div class="form-group">
			<label for="address" class="col-sm-2 control-label col-md-offset-3">Address </label>
			<div class="col-sm-4">
			<input type="text" name="address" class="form-control"  placeholder="Address" required>
				</div>
			</div>
			
			
			<div class="form-group">
			<label for="phone" class="col-sm-2 control-label col-md-offset-3">Phone #</label>
			<div class="col-sm-4">
			<input type="text" name="phone" class="form-control"  placeholder="Phone Number" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$
" required>
				</div>
			</div>
			
			<div class="form-group">
			<label for="round" class="col-sm-2 control-label col-md-offset-3">Round</label>
			<div class="col-sm-4">
			<input type="text" name="round" class="form-control" pattern="[0-9]{1,2}" required>
				</div>
			</div>
			
			<div class="form-group">
			<label for="type" class="col-sm-2 control-label col-md-offset-3">Type</label>
			<div class="col-sm-4">
			<select class="form-control" required>
        <option value="subscribe">Subscribe</option>
        <option value="unsubscribe">Unsubscribe</option>
      
			</select>
				</div>
			</div>
			
			
			<div class="form-group">
			<label for="campaign" class="col-sm-2 control-label col-md-offset-3">Campaign Name</label>
			<div class="col-sm-4">
			<select class="form-control" required>
        <option value="1">Campaign 1</option>
        <option value="2">Campaign 2</option>
      
			</select>
				</div>
			</div>
			
			
			
			<div class="form-group">
			<label for="phone" class="col-sm-2 control-label col-md-offset-3">Status </label>
			<div class="col-sm-4">
			<input type="checkbox" data-toggle="toggle">
		
			</div>
			</div>
			
			<div class="form-group">
			<div class="col-md-12 col-md-offset-5"> 	
			<button type="submit" class="btn btn-default w3ls-button">Submit</button> 					
			</div>				
			</div>				
									</form>
								</div>
						</div>
					</div>
						</div>
				<!-- //input-forms -->
			</div>
		</div>
		
		<?php include 'footer.php' ?>
