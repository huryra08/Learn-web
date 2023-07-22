<?php
session_start();


$mailError = "";
$passwordError = "";
$showErrorMail = "none";
$showErrorPass = "none";

$cookie_mail = "";
$cookie_pass = "";

if (isset($_SESSION['emailError'])) {
    $mailError = $_SESSION['emailError'];
    $showErrorMail = "inline";
    unset($_SESSION['emailError']);
} else {
    $showErrorMail = "none";
}
if (isset($_SESSION['passwordError'])) {
    $passwordError = $_SESSION['passwordError'];
    $showErrorPass = "inline";
    unset($_SESSION['passwordError']);
} else {
    $showErrorPass = "none";
}



if (isset($_COOKIE['email'])) {
    if (isset($_COOKIE['email'])) {
        // Use the cookie value
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
        <h1>Forget Password</h1>
        </p>

        <form action="../../../Controller/Adopter/ForgetPassword_Handler.php" method="POST">
            <div class="box icon-holder">
                <i class="load-mail"></i>
                <input type="text" name="mail" id="mail" placeholder="Enter Your Email" value="<?php if ($cookie_mail != "") {
                                                                                                    echo $cookie_mail;
                                                                                                } ?>">
                <span class="required-mail">&nbsp; * &nbsp;<?php echo $mailError; ?></span>
            </div>
            <div class="button-container">
                <button type="submit" class="signin-button">Submit</button>
                </span></p>
            </div>
        </form>

    </div>


</body>

</html>