<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:Login.php');
}

$nameError = "";
$emailError = "";
$passwordError = "";
$genderError = "";
$phoneError = "";
$addressError = "";
$professionError = "";

$fileName = $_SESSION['supervisor_image'];


if (isset($_SESSION['S_nameError'])) {
    $nameError = $_SESSION['S_nameError'];
    unset($_SESSION['S_nameError']);
}


if (isset($_SESSION['S_emailError'])) {
    $emailError = $_SESSION['S_emailError'];
    unset($_SESSION['S_emailError']);
}


if (isset($_SESSION['S_passwordError'])) {
    $passwordError = $_SESSION['S_passwordError'];
    unset($_SESSION['S_passwordError']);
}

if (isset($_SESSION['S_genderError'])) {
    $genderError = $_SESSION['S_genderError'];
    unset($_SESSION['S_genderError']);
}

if (isset($_SESSION['S_phoneError'])) {
    $phoneError = $_SESSION['S_phoneError'];
    unset($_SESSION['S_phoneError']);
}

if (isset($_SESSION['S_addressError'])) {
    $addressError = $_SESSION['S_addressError'];
    unset($_SESSION['S_addressError']);
}

if (isset($_SESSION['S_professionError'])) {
    $professionError = $_SESSION['S_professionError'];
    unset($_SESSION['S_professionError']);
}



$P_name = $_SESSION["P_name"];
$P_mail = $_SESSION["P_mail"];
$P_gender = $_SESSION["P_gender"];
$P_phone = $_SESSION["P_phone"];
$P_address = $_SESSION["P_address"];
$P_profession = $_SESSION["P_profession"];
$P_password = $_SESSION["P_password"];
$P_salary = $_SESSION["P_salary"];






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

<body>
    <?php include '../../Layout/Supervisor/SupervisorHeader.php'; ?>


    <div class="container">
        <div class="left">
            <p>
            <h3>My Profile</h3>
            <hr>
            <ul>
                <li><a href="Dashboard_Home.php">The Dashboard Home</a></li>
                <li><a href="Profile.php">My Profile</a></li>
                <li><a href="orphanProfiles.php">View Orphan Profiles</a></li>
                <li><a href="adoptionRequests.php">View Adoption Requests</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
            </ul>

            </p>


        </div>
        <div class="right">

            <form action="../../Controller/Supervisor/Profile_Handler.php" method="POST" enctype="multipart/form-data">



                <div class="box icon-holder">
                    <img src="<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                                    if (!file_exists("../../images/Supervisor_Images/$fileName")) {
                                        echo "../../images/Supervisor_Images/temp.png";
                                    } else if ($fileName == "N/A") {
                                        echo "../../images/Supervisor_Images/temp.png";
                                    } else {
                                        echo "../../images/Supervisor_Images/$fileName";
                                    }
                                } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    echo "../../images/Supervisor_Images/$fileName";
                                } else {
                                    echo "../../images/Supervisor_Images/temp.png";
                                } ?>" alt="Profile Picture" width="75px" height="75px" style="border-radius: 50%"> <br>
                    <input type="file" name="profilePic" id="profilePic" style="margin: 5px">
                </div>
                <div class="box icon-holder">
                    <p class="label-margin">Name </p>
                    <input type="text" name="name" id="name" placeholder="Enter Your name"
                        value="<?php echo $P_name; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $nameError; ?></span>
                </div>

                <div class="box icon-holder">
                    <p class="label-margin">E-mail </p>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email"
                        value="<?php echo $P_mail; ?>" disabled>
                    <span class="required">&nbsp; * &nbsp;<?php echo $emailError; ?></span>
                </div>


                <div class="box icon-holder">
                    <p class="label-margin">Phone </p>
                    <input type="text" name="phone" id="phone" placeholder="Enter Your Phone"
                        value="<?php echo $P_phone; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $phoneError; ?></span>
                </div>


                <div class="box icon-holder">
                    <p class="label-margin">Salary</p>
                    <input type="text" name="salary" id="salary" placeholder="" value="<?php echo $P_salary; ?>"
                        disabled>
                    <span class="required">&nbsp; * &nbsp;<?php ?></span>
                </div>



                <div class="button-container">
                    <input type="submit" class="request-button" value="Update"></input>
                    </span></p>
                </div>
            </form>


        </div>
    </div>



    <?php include '../../Layout/Supervisor/SupervisorFooter.php'; ?>
</body>

</html>