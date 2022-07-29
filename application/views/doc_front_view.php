<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Index</title>

	<!-- CDN for Bootstrap starts here -->

	<!-- CSS CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- JS CDN -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- CDN for Bootstrap ends here -->

	<!-- css file for footer -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mystyle.css">
	<!-- css file for footer ends here -->


	<style type="text/css">
		body {
			/* website background */
			background: url("https://img.freepik.com/premium-photo/healthcare-medicine-covid19-doctor-touch-diagnose-virus-human-lungs-with-coronavirus_34200-499.jpg?w=2000");

			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}
	</style>

</head>

<body>

	<div class="container-fluid">

		<!-- Nav bar starts here -->

		<?php include 'header.php'; ?>

		<!-- Nav bar ends he

	<br><br>

	<!-- main body content starts here -->
		<div>

			<div class="jumbotron" align="center">
				<header>
					<h1>Welcome to <code>Doc_Web</code> Portal</h1>
				</header>
			</div>

			<main>

				<div class="transbox">
					<header>
						<h2>About Us</h2>
					</header>
					<article>
						<section style="font-size: 20px; font-weight: bold">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</section>
					</article><br>
					<article>
						<details>
							<summary>Read More..</summary>
							<section>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</section>
						</details>
					</article>
				</div><br><br>

				<hr>

				<div class="">
					<div class="row">

						<div class="col-lg-6 border-right">
							<div>
								<header>
									<h3>Patient SignIN &#9662;</h3>
								</header>

								<a href='<?php echo base_url() . 'index.php/Doc_cont/login_patient' ?>'><button class="btn btn-lg btn-success">Login</button></a>
							</div>

							<div class="transbox">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>

						<div class="col-lg-6 border-right">
							<div class="transbox" align="center">
								<div>
									<header>
										<h2></h2>
									</header>
									<article>
										<section style="font-size: 20px; font-weight: bold">
											Please click here to view available doctor's list.
										</section>
										<a href="<?php echo base_url() . 'index.php/Doc_cont/display_doctor_patient_pov' ?>"><button class="btn btn-lg btn-danger">View Doctors list</button></a>

										<hr>
										<section style="font-size: 20px; font-weight: bold">
											Please click here to Sign Up in the portal and continue with booking your appointment.
										</section>
										<a href="<?php echo base_url() . 'index.php/Doc_cont/savedata_patient' ?>"><button class="btn btn-lg btn-primary">Patient Sign Up</button></a>

									</article><br>
								</div>


							</div>
						</div>

					</div>

					<hr>

					<div>
						<div class="row">

							<div class="col-lg-6 border-right">
								<div class="transbox">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>

							<div class="transbox" class="col-lg-6 border-right">
								<div>
									<section style="font-size: 20px; font-weight: bold">
										Please click here to sign up as a new doctor in our portal.
									</section>
									<a href="<?php echo base_url() . 'index.php/Doc_cont/savedata_doctor' ?>"><button class="btn btn-lg btn-primary">Doctor Sign Up</button></a>

									<hr>
									<section style="font-size: 20px; font-weight: bold">
										Please click here to view your appointments today.
									</section>
									<a href="<?php echo base_url() . 'index.php/Doc_cont/login_doctor' ?>"><button class="btn btn-lg btn-warning">View Appointments</button></a>
								</div><br>
							</div>

						</div>
					</div>


			</main>


		</div>
		<!-- main body content ends here -->

	</div>


	<!-- Footer starts Here  -->

	<?php include 'footer.php'; ?>

	<!-- Footer ends Here  -->



</body>

</html>