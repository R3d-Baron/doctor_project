<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patient Dashboard</title>

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

	<style type="text/css">
		.btn:hover {
			background: darkorange;
			color: #fff;
			box-shadow: 5px 5px 5px #ccc;
			transition: 0.3s;
		}

		.innerdiv {
			border-style: solid;
			border: 2px;
			background-color: lightcyan;
		}

		.box {
			border-style: solid;
			border: 1;
			background-color: seagreen;
			box-shadow: 10px 10px 10px gray;
			align-content: center;
		}

		div.box button {
			margin: 1rem;
		}

		@media only screen and (max-width: 768px) {

			div.box button {
				display: block;
				margin-top: 1rem;
				min-width: 250px;
			}
		}
	</style>

</head>

<body>

	<div class="container-fluid">
		<!-- Nav bar starts here -->

		<?php include 'header_patient.php'; ?>

		<!-- Nav bar ends here -->


		<main>
			<div class="jumbotron" align="center">
				<header>
					<h1><code>{ PATIENT }</code> dashboard</h1>
				</header>
			</div>

			<div class="innerdiv" align="center">
				<div class="box">

					<a href="javascript:void(0);">
						<button class="btn btn-lg btn-danger"><strong>VIEW PROFILE &#9662;</strong></button>
					</a>

					<a href="<?php echo base_url() . 'index.php/Doc_cont/edit_patient'; ?>">
						<button class="btn btn-lg btn-danger">EDIT PROFILE</button>
					</a>

					<a href="<?php echo base_url() . 'index.php/Doc_cont/book_appointment'; ?>">
						<button class="btn btn-lg btn-danger">BOOK APPOINTMENT</button>
					</a>

					<a href="javascript:void(0);">
						<button class="btn btn-lg btn-danger">VIEW APPOINTMENTS</button>
					</a>

					<a href="<?php echo base_url() . 'index.php/Doc_cont/logout' ?>">
						<button class="btn btn-lg btn-danger">LOGOUT</button>
					</a>
				</div><br>

				<!-- display table of Patient STARTS here............................. -->
				<table class="table table-bordered table-light table-striped table-responsive">
					<colgroup>
						<col width=2%>
						<col>
						<col>
						<col>
						<col>
						<col>
						<col>
						<col>
						<col>
						<col>
						<col width=3%>
					</colgroup>

					<thead class="table-dark">
						<label>
							<h2>My Profile</h2>
						</label><br>

						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Password</th>
						<th scope="col">Mobile</th>
						<th scope="col">Problem</th>
						<th scope="col">Address</th>
						<th scope="col">Specialization</th>
						<th scope="col">Sex</th>
						<th scope="col">Age</th>

						<th scope="col" colspan="2">Action</th>
					</thead>

					<?php
					$user = $this->session->userdata('userdata');
					?>

					<tbody>
						<tr class="table-success">
							<?php
							echo "<tr>";

							echo "<td>" . $user['p_id'] . "</td>";
							echo "<td>" . $user['p_name'] . "</td>";
							echo "<td>" . $user['p_email'] . "</td>";
							echo "<td>" . $user['p_password'] . "</td>";
							echo "<td>" . $user['p_mobile'] . "</td>";
							echo "<td>" . $user['p_problem'] . "</td>";
							echo "<td>" . $user['p_address'] . "</td>";
							echo "<td>" . $user['p_special'] . "</td>";
							echo "<td>" . $user['p_sex'] . "</td>";
							echo "<td>" . $user['p_age'] . "</td>";
							?>

							<td>
								<a href="<?php echo base_url() . 'index.php/Doc_cont/delete_patient'; ?>">
									<button class="btn btn-sm btn-danger">DELETE RECORDS</button>
								</a>
							</td>

							<?php
							echo "</tr>";
							?>

					</tbody>

				</table>
				<!-- display table of PATIENT ENDS here.......................... -->

			</div> <!-- inner div ENDS HERE................................ -->

		</main> <!-- main body content ends here. All the body contents should be inside this section. -->
	</div>

	<!-- Footer starts Here  -->

	<?php include 'footer_patient.php'; ?>

	<!-- Footer ends Here  -->


</body>

</html>