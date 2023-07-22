<?php

require_once '../../Model/Supervisor.php';

error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:Login.php');
}


$P_id = $_SESSION["P_id"];



?>


<!DOCTYPE html>
<html lang="en">


<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Home</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li> <br>
                <li><a href="Profile.php">My Profile</a></li> <br>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li> <br>
                <li><a href="adoptionRequests.php">View Adoption Requests</a></li> <br>
                <li><a href="ChangePassword.php">Change Password</a></li> <br>
                <li><a href="../../Controller/Supervisor/DeleteAccount_Handler.php">Delete Account</a></li>
                
            </ul>

            </p>


        </div>
        <div class="right">

            <div class="matrix">
                <div class="row">
                    <div class="column" id="event-table">


                        <?php
                        $data = show_all_events();


                        echo '<table border="1">';
                        echo '<tr>
                            <th>Event Name</th>
                            <th>Event Date</th>
                            </tr>';

                        foreach ($data as $row) {

                            echo '<tr>';
                            echo '<td>' . $row['event_name'] . '</td>';
                            echo '<td>' . $row['event_date'] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                        ?>


                    </div>
                    <div class="column" id="appointment-time">


                        <?php

                        $data = show_all_appointments();


                        echo '<table border="1">';
                        echo '<tr>
                            <th>Orphan Name</th>
                            <th>adopter Name</th>
                            <th>Adopter Phone</th>
                            <th>Appointment Date</th>
                            </tr>';
                        foreach ($data as $row) {

                            echo '<tr>';
                            echo '<td>' . $row['orphan_name'] . '</td>';
                            echo '<td>' . $row['adopter_name'] . '</td>';
                            echo '<td>' . $row['adopter_phone'] . '</td>';
                            echo '<td>' . $row['date_time'] . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        ?>


                    </div>
                </div>
                <div class="row">
                    <div class="column" id="no-use">
                    </div>
                    <div class="column" id="salary">

                        <?php
                        $supervisorData = search_specific_data("supervisor_salary", "supervisor", "supervisor_id", $P_id);

                        echo '<div class="salary-container">
                        <label class="salary-label">Salary :</label>
                        <span class="salary-amount">' . $supervisorData["supervisor_salary"] . ' /-</span>
                        <span class="salary-currency">BDT</span>
                      </div>';


                        ?>



                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>

    <script>