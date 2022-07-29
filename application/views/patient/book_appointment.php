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

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Datepicker -->
    <link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

    <!-- javascript for bootstrap-datepicker -->
    <script type="text/javascript">
        // Data Picker Initialization
        $('.datepicker').datepicker({
            inline: true
        });

        // $(document).ready(function() {
        //     $('#datepicker').datepicker({
        //         "format": "mm-dd-yy",
        //         "startDate": "+1d",
        //         "endDate": "+14d",
        //         "keyboardNavigation": false
        //     });
        // });
    </script>
    <!-- javascript for bootstrap-datepicker -->

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

                    <a href="<?php echo base_url() . 'index.php/Doc_cont/display_patient_dashboard'; ?>">
                        <button class="btn btn-lg btn-danger">VIEW PROFILE</button>
                    </a>

                    <a href="<?php echo base_url() . 'index.php/Doc_cont/edit_patient'; ?>">
                        <button class="btn btn-lg btn-danger">EDIT PROFILE</button>
                    </a>

                    <a href="javascript:void(0)">
                        <button class="btn btn-lg btn-danger"><strong>BOOK APPOINTMENT &#9662;</strong></button>
                    </a>

                    <a href="javascript:void(0);">
                        <button class="btn btn-lg btn-danger">VIEW APPOINTMENTS</button>
                    </a>

                    <a href="<?php echo base_url() . 'index.php/Doc_cont/logout' ?>">
                        <button class="btn btn-lg btn-danger">LOGOUT</button>
                    </a>
                </div><br>

                <div>
                    <header class="modal-header">
                        <h3><code>Book Appointment &#9662;</code></h3>
                    </header>

                    <div>
                        <table class="table table-bordered table-striped table-primary table-responsive">
                            <colgroup>
                                <col width=1%>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>

                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>Doctor's Name</th>
                                <th>Doctor's Email</th>
                                <th>Mobile No.1</th>
                                <th>Mobile No.2</th>
                                <th>Address</th>
                                <th>Specialization</th>
                                <th>Gender</th>
                                <th>Image</th>
                                <th>Choose Date</th>
                                <th>Appointment</th>
                            </thead>

                            <tbody>
                                <?php

                                foreach ($data as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row['d_id'] . "</td>";
                                    echo "<td>" . $row['d_name'] . "</td>";
                                    echo "<td>" . $row['d_email'] . "</td>";
                                    echo "<td>" . $row['d_mobile'] . "</td>";
                                    echo "<td>" . $row['d_alt_mobile'] . "</td>";
                                    echo "<td>" . $row['d_address'] . "</td>";
                                    echo "<td>" . $row['d_special'] . "</td>";
                                    echo "<td>" . $row['d_sex'] . "</td>";
                                ?>
                                    <td>
                                        <img src="<?php echo base_url() . $row['d_image'] ?>" height=100 width=100>
                                    </td>

                                    <td>
                                        <div class="md-form md-outline input-with-post-icon datepicker" id="customDays">
                                            <label for="Customization">Try me...</label>
                                            <input placeholder="Select date" type="text" id="Customization" class="form-control">

                                            <i class="fas fa-calendar input-prefix" tabindex=0></i>
                                        </div>
                                    </td>

                                    <td>
                                        <button class="btn btn-sm btn-warning">Request</button>
                                    </td>

                                <?php
                                    echo "</tr>";
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> <!-- inner div ENDS HERE................................ -->

        </main> <!-- main body content ends here. All the body contents should be inside this section. -->
    </div>

    <!-- Footer starts Here  -->

    <?php include 'footer_patient.php'; ?>

    <!-- Footer ends Here  -->


</body>

</html>