<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Display Patient</title>

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

</head>

<body>

	<div class="container-fluid">

		<!-- Nav bar starts here -->

		<?php include 'header_patient.php'; ?>

		<!-- Nav bar ends here -->


		<!-- main body content starts here -->
		<div>

			<br><br>

			<div class="jumbotron" align="center">
				<header>
					<h1>Display Patient - POV</h1>
				</header>
			</div>

			<!-- display table of PATIENT STARTS here........................... -->
			<table class="table table-bordered table-light table-striped">

				<thead class="table-dark">
					<label>
						<h2>Patient data</h2>
					</label><br>

					<span>
						<h5>To edit / delete data please <a href='<?php echo base_url() . 'index.php/Doc_cont/login_patient' ?>'><button class="btn btn-sm btn-primary">Login</button></a></h5>
					</span>

					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>

					<!-- <th scope="col">Mobile</th> -->
					<!-- <th scope="col">Problem</th> -->
					<!-- <th scope="col">Address</th> -->
					<!-- <th scope="col">Specialization</th> -->

					<th scope="col">Sex</th>
					<th scope="col">Age</th>

					<!-- <th scope="col" colspan="2">Action</th> -->
				</thead>

				<tbody>
					<?php

					foreach ($data as $row) {

						echo "<tr>";
						echo "<td>" . $row['p_id'] . "</td>";
						echo "<td>" . $row['p_name'] . "</td>";
						echo "<td>" . $row['p_email'] . "</td>";

						// echo "<td>".$row['p_mobile']."</td>";
						// echo "<td>".$row['p_problem']."</td>";
						// echo "<td>".$row['p_address']."</td>";
						// echo "<td>".$row['p_special']."</td>";

						echo "<td>" . $row['p_sex'] . "</td>";
						echo "<td>" . $row['p_age'] . "</td>";


					?>

						<!-- <td>
						Please <a href='#'><button class="btn btn-sm btn-primary">Login</button></a> to EDIT or DELETE data
					</td> -->

					<?php
						// echo "<td><a href='updatedata?id=".$row['d_id']."'>UPDATE</a></td>";
						// echo "<td><a href='deletedata?del=".$row['d_id']."'>DELETE</a></td>";

						echo "</tr>";
					}

					?>
				</tbody>

			</table>
			<!-- display table of DOCTOR ENDS here......................................................... -->
		</div>

	</div>

	<!-- Footer starts Here  -->

	<?php include 'footer_patient.php'; ?>

	<!-- Footer ends Here  -->

</body>

</html>