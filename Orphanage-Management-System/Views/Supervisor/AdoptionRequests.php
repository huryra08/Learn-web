<?php


require_once '../../Model/Supervisor.php';
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:Login.php');
}





?>


<!DOCTYPE html>
<html lang="en">

<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Adoption Requests</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li>
                <li><a href="AdoptionRequests.php">View Adoption Requests</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form id="reqID_form" action="../../Controller/Supervisor/AdoptionRequest_Handler_Accept.php" method="POST"
                onsubmit="return checkDate();">

                <?php
                $data = show_adoption_requests();

                $_SESSION["selectedRequestID"] = -1;

                echo '<table border="1">';
                echo '<tr>
                <th>Orphan Image</th>
                <th>Orphan Name</th>
                <th>Orphan Gender</th>
                <th>Orphan Age</th>
                <th>Adopter Image</th>
                <th>Adopter Name</th>
                <th>Adopter Mail</th>
                <th>Adopter Phone</th>
                <th>Request Date</th>
                <th>Adoption Status</th>
                <th>Action</th>
                </tr>';

                foreach ($data as $row) {
                    $file_exists_data = "../../images/Orphan_Images/" . $row['orphan_image'] . "";

                    if (!file_exists($file_exists_data)) {
                        $row['orphan_image'] = "temp.png";
                    }


                    echo '<tr>';
                    echo '<td><img src="../../images/Orphan_Images/' . $row['orphan_image'] . '" height="70px" width="70px"></td>';
                    echo '<td>' . $row['orphan_name'] . '</td>';
                    echo '<td>' . $row['orphan_gender'] . '</td>';
                    echo '<td>' . $row['orphan_age'] . '</td>';
                    echo '<td><img src="../../images/Adopter_Images/' . $row['adopter_image'] . '" height="70px" width="70px"></td>';
                    echo '<td>' . $row['adopter_name'] . '</td>';
                    echo '<td>' . $row['adopter_mail'] . '</td>';
                    echo '<td>' . $row['adopter_phone'] . '</td>';
                    echo '<td>' . $row['request_date'] . '</td>';
                    echo '<td>' . $row['adoption_status'] . '</td>';
                    echo '<td><span class="appoint">  <a class="button-appoint" name="acceptBtn" id="acceptBtn" onclick="openOverlay()" value="' . $row["request_id"] . '"> Appoint</a>
                    <input type="text" name="accept" id="accept"  value="' . $row['request_id'] . '" style="display: none">
                    </span>
                    <span class="reject"><a href="../../Controller/Supervisor/AdoptionRequest_Handler_Reject.php" class="button-reject" > Reject</a></span></td>';
                    echo '</tr>';
                }

                echo '</table>';
                ?>




                <div id="overlay">
                    <div class="content">
                        <h2>Select Date</h2>
                        <input type="date" id="datepicker" name="datepicker" placeholder="Choose a date">
                        <button onclick="closeOverlay(); submitForms();">Appoint</button>
                    </div>
                </div>

            </form>

        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>