<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"]) || $_SESSION["status"] === FALSE) {
    header('Location:Login.php');
}


$currPasswordError = $_SESSION["currPasswordError"];
$newPasswordError = $_SESSION["newPasswordError"];
$reTypePasswordError = $_SESSION["reTypePasswordError"];


?>


<!DOCTYPE html>
<html lang="en">


<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Change Password</h3>
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

            <form action="../../Controller/Adopter/ChangePassword_Handler.php" method="POST">

                <label for="currentPass">Current Password</label> <br>
                <input type="password" name="currentPass" id="currentPass" style="margin: 5px">
                <span class="required"> <br> &nbsp; &nbsp;
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                        echo $currPasswordError;
                    } ?></span>
                <br>

                <label for="newPass" style="color: green">New Password</label> <br>
                <input type="password" name="newPass" id="newPass" style="margin: 5px">
                <span class="required"> <br> &nbsp; &nbsp;
                    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                        echo $newPasswordError;
                    } ?> </span> <br>

                <label for="reTypeNewPass" style="color: red">Retype New Password</label> <br>
                <input type="password" name="reTypeNewPass" id="reTypeNewPass" style="margin: 5px">
                <span class="required"> <br> &nbsp;
                    &nbsp;<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') {
                                echo $reTypePasswordError;
                            } ?> </span>
                <br>
                <input type="submit" name="submit" value="Update" class="request-button" /> <br>

            </form>

        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>