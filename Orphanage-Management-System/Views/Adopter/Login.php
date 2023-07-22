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
        <h1>Login</h1>
        </p>

        <form action="../../Controller/Adopter/Login_Handler.php" method="POST">
            <div class="box icon-holder">
                <i class="load-mail"></i>
                <input type="text" name="mail" id="mail" placeholder="Enter Your Email" value="<?php if ($cookie_mail != "") {
                                                                                                    echo $cookie_mail;
                                                                                                } ?>">
                <span class="required-mail">&nbsp; * &nbsp;<?php echo $mailError; ?></span>
            </div>
            <div class="box icon-holder">
                <i class="load-key"></i>
                <input type="password" name="password" id="password" placeholder="Enter Your Password" value="<?php if ($cookie_pass != "") {
                                                                                                                    echo $cookie_pass;
                                                                                                                } ?>">
                <i class="load-showPass"></i>
                <span class="required-pass">&nbsp; * &nbsp;<?php echo $passwordError; ?></span>
            </div>
            <div class="button-container">
                <p><input type="checkbox" name="rememberMe" id="rememberMe"> Remember Me</p>
                <p> <a href="../Adopter/Forget_Password/ForgetPassword.php">Forgot Password?</a> </p>
                <button type="submit" class="signin-button">Sign in</button>
                <p> <span> Didn't have an account? <a href="Signup.php">Signup</a>
                    </span></p>
            </div>
        </form>

    </div>


</body>

</html>