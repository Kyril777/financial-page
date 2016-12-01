<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	
	<!-- Styling. -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/basic-template.css" rel="stylesheet" />
	
	<script type="text/javascript">
	function checkForm(form){
		if(form.firstName.value == "" || form.lastName.value == "" || form.address1.value == "" || form.city.value == "" || form.city.value == "" || form.state.value == "" || form.zip.value == "") {
			alert("Please complete the form.");
			return false;
		}
	}

	</script>
</head>
  
	<body>
		<!-- Navigation. -->
		<?php include('contact_header.php'); ?>
	
		<!-- Container. -->
		<div class="container">
			<!-- Contact Form -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>We Would Love to Hear from You!</h4>
				</div><!-- End of panel-heading. -->
				<div class="panel-body">
					<form action="confirm.html" method="POST" onsubmit="return checkForm(this);">
						<label for="firstName" class="control-label">Name:</label>
						<div class="row padding-top-10">
							<div class="col-md-6">
								<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" />
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="lastName" placeholder="Last Name" />
							</div>
						</div><!-- End of row. -->
						<label for="address1" class="control-label padding-top-10">Address:</label>
						<div class="row padding-top-10">
							<div class="col-md-12">
								<input type="text" class="form-control" id="address1" placeholder="Address line 1" />								
							</div>
						</div><!-- End of row. -->
						<div class="row padding-top-10">
							<div class="col-md-12">
								<input type="text" class="form-control" id="address2" placeholder="Address line 2" />								
							</div>
						</div><!-- End of row. -->
						<div class="row">
							<div class="col-md-6 padding-top-10">
								<label for="city" class="control-label">City:</label>
								<input type="text" class="form-control" id="city" placeholder="Your city" />
							</div>
							<div class="col-md-2 padding-top-10">
								<label for="state" class="control-label">State</label>	
								<input type="text" class="form-control" id="state" placeholder="Your home state" />	
							</div>
							<div class="col-md-4 padding-top-10">
								<label for="zip" class="control-label">Zip:</label>
								<input type="text" class="form-control" id="zip" placeholder="Your zipcode number" />	
							</div>
						</div><!-- End of row. -->
						<div class="row">
							<div class="col-md-6 padding-top-10">
								<label for="email" class="control-label">Email Address:</label>
								<input type="text" class="form-control" id="email" placeholder="Your email" />	
							</div>
							<div class="col-md-6 padding-top-10">
								<div class="checkbox padding-top-10">
									<label>
										<input type="checkbox" /> Click here to subscribe to our newsletter.
									</label>
								</div>
							</div>
						</div><!-- End of row. -->
						<div class="row">
							<div class="col-md-2 padding-top-10">
								<button type="submit" class="btn btn-success">Sign Up</button>
							</div>
						</div><!-- End of row. -->
					</form>
				</div><!-- End of panel-body. -->
			</div><!-- End of panel. -->
		</div><!-- End of container class. -->
		<!-- End of container. -->
		
		<!-- Footer. -->
		<?php include('contact_footer.php'); ?>
		
		
	
	<!-- JQuery. -->
	<script src="../js/jquery.js"></script>
	
	<!-- Bootstrap. -->
	<script src="../js/bootstrap.min.js"></script>
	
	<!-- JavaScript -->
	<script src="../js/script.js"></script>
	
	</body>

</html> 
