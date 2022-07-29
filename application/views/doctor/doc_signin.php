<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Sign-In</title>

	<!-- CDN for Bootstrap starts here -->

		<!-- CSS CDN -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- JS CDN -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- CDN for Bootstrap ends here -->

	<!-- css file for footer -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mystyle.css">
	<!-- css file for footer ends here -->
</head>

<body>

	<div class="container-fluid">
		
	<!-- Nav bar starts here -->

	<?php include 'header_doctor.php'; ?>	

	<!-- Nav bar ends here -->

		<div>
			
			<div class="jumbotron" align="center">
				<header><h1>Welcome to <code>Doc_Web</code> Portal</h1></header>
			</div>

			<main>
				
				<div>
			<header class="jumbotron"><h1 align="center">Sign in as a doctor</h1></header>
		</div>

		<div>
			
			<div class="row" >
				
				<div class="col-lg-6 border-right">

					<form method="post" action="" enctype="multipart/form-data" autocomplete="off">
						<header><h2>SignIN</h2></header>
						
						<div class="form-group">
							
							<label>Email : </label>
							<input type="text" name="doc_email" placeholder="Enter your email-id." class="form-control" required>

						</div>
						<div class="form-group">
							
							<label>Password : </label>
							<input type="text" name="doc_password" placeholder="password." class="form-control" required>

						</div>
						
						<div>
							<input type="submit" name="doc_login" value="LOGIN">
							<input type="reset" value="Reset">
						</div>
						<br><br>

					</form>
					
				</div>

			</main>

		</div>

	</div>

	<!-- Footer starts Here  -->
		
	<?php include 'footer_doctor.php'; ?>	

    <!-- Footer ends Here  -->

</body>
</html>