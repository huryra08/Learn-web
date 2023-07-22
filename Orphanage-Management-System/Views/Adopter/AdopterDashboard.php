<?php 
    error_reporting(0);
    session_start();
    if(!isset($_SESSION["loginUser_Name"])){
        header('Location:Login.php');
    }


    header('Location:Profile.php');


?>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php include '../../Layout/Adopter/AdopterHeader.php';?>


    <div class="container">
        <div class="left">
            <p>
            <h3>Dashboard</h3>
            <hr>
            <ul>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="../../Controller/Adopter/DeleteAccount_Handler.php">Delete Account</a></li>
            </ul>

            </p>


        </div>
        <div class="right">
            <p>This is the right division.</p>
        </div>
    </div>



    <?php include '../../Layout/Adopter/AdopterFooter.php';?>
</body>

</html>