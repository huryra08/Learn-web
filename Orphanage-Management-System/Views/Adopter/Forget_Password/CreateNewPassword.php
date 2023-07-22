<?php

session_start();
$newPassError = "";
$ConfirmPassError = "";
$showErrorPass = "none";
$showErrorConfirmPass = "none";

$cookie_mail = "";
$cookie_pass = "";

if (isset($_SESSION['newPassError'])) {
    $newPassError = $_SESSION['newPassError'];
    $showErrorPass = "inline";
    unset($_SESSION['newPassError']);
} else {
    $showErrorPass = "none";
}
if (isset($_SESSION['ConfirmPassError'])) {
    $ConfirmPassError = $_SESSION['ConfirmPassError'];
    $showErrorConfirmPass = "inline";
    unset($_SESSION['ConfirmPassError']);
} else {
    $showErrorConfirmPass = "none";
}

if (isset($_COOKIE['email'])) {
    if (isset($_COOKIE['email'])) {
        $cookie_mail  = $_COOKIE['email'];
        $cookie_pass  = $_COOKIE['password'];
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<body>

    <div class="login-container">
        <p>
        <h1>Create New Password</h1>
        </p>

        <form action="../../../Controller/Adopter/NewPassword_Handler.php" method="POST">
            <div class="box icon-holder">
                <i class="load-key"></i>
                <input type="text" name="newPass" id="newPass" placeholder="Enter Your New Password">
                <span class="required-newPass">&nbsp; * &nbsp;<?php echo $newPassError; ?></span>
            </div>

            <div class="box icon-holder">
                <!-- Confirm New Pass -->
                <i class="load-key"></i>
                <input type="text" name="ConfirmNewPass" id="ConfirmNewPass" placeholder="Confirm Your New Password">
                <span class="required-confirmPass">&nbsp; * &nbsp;<?php echo $ConfirmPassError; ?></span>
            </div>



            <div class="button-container">
                <button type="submit" class="signin-button">Confirm</button>
                </span></p>
            </div>
        </form>

    </div>


</body>

</html>