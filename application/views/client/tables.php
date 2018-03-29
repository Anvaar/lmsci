<!DOCTYPE html>
<head>
<title>Table</title>

<?php include 'header.php' ?>
 


	<script>
$(document).ready(function(){
    $("#txtFromDate").datepicker({
        numberOfMonths: 2,
        onSelect: function(selected) {
          $("#txtToDate").datepicker("option","minDate", selected)
        }
    });
    $("#txtToDate").datepicker({ 
        numberOfMonths: 2,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
        }
    });  
});

</script>
 
 
</head>
<div id="load"></div>
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
				<!-- tables -->
				
				<!--filters-->			
				
				
				<div class="mail-toolbar clearfix">
				
				<!--toggle-->
				<div class="adv-filter">
				<div class="col-md-12">
				 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Advance Filter</button>
  <div id="demo" class="collapse">
   <div class="col-md-4 col-sm-6 col-xs-12 well">
   <select class="form-control" required>
        <option value="country">Country</option>
        <option value="subscribe">Subscribe</option>
        <option value="phonenum">Phone #</option>
        <option value="campaign">Campaign</option>
        <option value="status">Status</option>
      
			</select>
   
   
  </div>
  </div>
  </div>
  </div>

				<!--toggle-->
				
				<div class="col-md-4 col-sm-6 col-xs-12">
				
			
				<div class="lead_search">
				
					<input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				
			</div>
		
				</div>

			    
			    <div class="right-side">
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="input-daterange input-group" id="datepicker">
  From: <input type="text" id="txtFromDate" />
To: <input type="text" id="txtToDate" />
		</div>
		</div>
				
				
				
			        <div class="col-md-2 col-sm-6 col-xs-12">
			              <div class="sortfilter pull-right">
                            <span class="text-muted m-r-sm">Sort By </span>
                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Date</a></li>
										<li class="divider"></li>
                                        <li><a href="#">Country</a></li>
                                       
                                    </ul>
                                </div>
                                <!--<div class="btn-group">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">Family</a></li>
                                        <li><a href="#">Social</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <!--<div class="btn-group">
                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                            </div>-->
							
							
							
							
                            </div>                     
                            </div>                     
			        
			    </div>
               </div>
				
				<!--filters-->
				
				
				<div class="table-heading">
					<h2>Leads Record</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					
					    <table id="table">
						<thead>
						  <tr>
						  <th>S#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Country</th>
							<th>Province / State</th>
							<th>City</th>
							<th>Zip Code</th>
							<th>Address</th>
							<th>Phone #</th>
							<th>Round</th>
							<th>Type</th>
							<th>Campaign</th>
							<th>Date</th>
							<th>Status</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>1</td>
							<td>Waleed</td>
							<td>Khan</td>
							<td>waleed_khan@yahoo.com</td>
							<td>Pakistan</td>
							<td>Sindh</td>
							<td>Karachi</td>
							<td>74900</td>
							<td>Badar Commercial Defence Phase V Karachi</td>
							<td>03232672131</td>
							<td>1</td>
							<td>Subscribe</td>
							<td>MLZ</td>
							<td>20-Mar-2018</td>
							<td><span class="badge badge-primary font-weight-normal">Active</span></td>
							<td>							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"><i class="fa fa-pencil"></i></button>						
							
							<button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger"><i class="fa fa-trash-o"></i> </button>							
							</td>
						  </tr>
						  
						   <tr>
							<td>2</td>
							<td>Junaid</td>
							<td>Alam</td>
							<td>junaid_125@gmail.com</td>
							<td>Pakistan</td>
							<td>KPK</td>
							<td>Peshawar</td>
							<td>25000</td>
							<td>Badar Commercial Defence Phase V Karachi</td>
							<td>03332718062</td>
							<td>1</td>
							<td>Subscribe</td>
							<td>MLZ</td>
							<td>11-Apr-2018</td>
							<td><span class="badge badge-primary font-weight-normal">Active</span></td>
							<td>							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"><i class="fa fa-pencil"></i></button>						
							
							<button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>							
							</td>
						  </tr>
						  
						   <tr>
							<td>3</td>
							<td>Yasir</td>
							<td>Jelek</td>
							<td>yasirjelek@gmail.com</td>
							<td>Pakistan</td>
							<td>Sindh</td>
							<td>Hyderabad</td>
							<td>75500</td>
							<td>Badar Commercial Defence Phase V Karachi</td>
							<td>03342714064</td>
							<td>1</td>
							<td>Subscribe</td>
							<td>MLZ</td>
							<td>16-May-2018</td>
							<td><span class="badge badge-danger">Suspend</span></td>
							<td>							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"><i class="fa fa-pencil"></i></button>						
							
							<button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>							
							</td>
						  </tr>
						  
						    <tr>
							<td>4</td>
							<td>Fahad</td>
							<td>Ali</td>
							<td>fahadali@gmail.com</td>
							<td>Pakistan</td>
							<td>Sindh</td>
							<td>Karachi</td>
							<td>75280</td>
							<td>Badar Commercial Defence Phase V Karachi</td>
							<td>03002528285</td>
							<td>1</td>
							<td>Subscribe</td>
							<td>MLZ</td>
							<td>22-May-2018</td>
							<td><span class="badge badge-primary font-weight-normal">Active</span></td>
							<td>							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"><i class="fa fa-pencil"></i></button>						
							
							<button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>							
							</td>
						  </tr>
						  
						 <tr>
							<td>5</td>
							<td>Rizwan</td>
							<td>Ansari</td>
							<td>rizwan987@gmail.com</td>
							<td>Pakistan</td>
							<td>Sindh</td>
							<td>Karachi</td>
							<td>74900</td>
							<td>Badar Commercial Defence Phase V Karachi</td>
							<td>03452527685</td>
							<td>1</td>
							<td>Subscribe</td>
							<td>MLZ</td>
							<td>5-June-2018</td>
							<td><span class="badge badge-danger">Suspend</span></td>
							<td>							
							<button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary"><i class="fa fa-pencil"></i></button>						
							
							<button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>							
							</td>
						  </tr>
						</tbody>
					  </table>
					</div>
			

				</div>
				<!-- //tables -->
			</div>
			
			<!--Pagination-->
			
			<div class="container">
			<div class="col-md-12">
			<div class="pagination-center">
			
			<ul class="pagination">
              <li class="disabled"><a href="#">«</a></li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
</div>
</div>
</div>
			
			<!--Pagination-->
			
		

			
		</div>		
			


<!-- edit modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Edit</h3>
			
					 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form>
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" value="Waleed" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" value="Khan" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" required>
              </div>
			  
			  
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="waleed_khan@yahoo.com" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" required>                
              </div>
			  
			  <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" value="Pakistan">
              </div>
			  
			  <div class="form-group">
                <label for="proState">Province / State</label>
                <input type="text" class="form-control" name="proState" value="Sindh">
              </div>
			  
			  
			  <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" value="Karachi">
              </div>
			  
			  
			  <div class="form-group">
                <label for="zipcode">Zip Code</label>
                <input type="text" class="form-control" name="zipcode" value="74900" pattern="[0-9]{5}" required>
              </div>
			  
			   <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="Badar Commercial Karachi Pakistan" placeholder="Address" required>
              </div>
			  
			  
			  <div class="form-group">
                <label for="phone">Phone #</label>
                <input type="number" class="form-control" name="phone" value="03232672131" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$
	" required>
              </div>
			  
			  <div class="form-group">
                <label for="round">Round</label>
                <input type="number" class="form-control" name="round" pattern="[0-9]{5}" value="2" required>
              </div>
			  
			  <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" required>
        <option value="subscribe">Subscribe</option>
        <option value="unsubscribe">Unsubscribe</option>
      
			</select>
              </div>
			  
			  
			  
			  <div class="form-group">
                <label for="campaign">Campaign</label>
                <select class="form-control" required>
        <option value="1">Campaign 1</option>
        <option value="2">Campaign 2</option>
      
			</select>
              </div>
			  
			  <div class="form-group">
                <label for="status">Status</label>               
			<input type="checkbox" data-toggle="toggle">		
			
              </div>
			  
			 
            </form>

		</div>
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button id="close" type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
				</div>
				
				<div class="btn-group" role="group">
					<button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<!--edit modal-->

<!--delete modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Delete</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form>
              <div class="form-group">
                <label for="exampleInputEmail1">Do you want to really delete this record?</label>
               
              </div>
			  
		
            </form>

		</div>
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button id="nobtn" type="button" class="btn btn-default" data-dismiss="modal"  role="button">No</button>
				</div>
				<div class="btn-group btn-delete" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Yes</button>
				</div>
				
			</div>
		</div>
	</div>
  </div>
</div>

<!--delete modal-->
	
		<!-- footer -->
		<?php include 'footer.php' ?>