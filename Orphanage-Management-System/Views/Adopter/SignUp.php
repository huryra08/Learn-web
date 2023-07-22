<?php
session_start();




$nameError = "";
$emailError = "";
$passwordError = "";
$genderError = "";
$phoneError = "";
$addressError = "";
$professionError = "";



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



?>



<!DOCTYPE html>
<html lang="en">
<body>

    <div class="login-container">
        <p>
        <h1>Create New Account</h1>
        </p>

        <form action="../../Controller/Adopter/Signup_Handler.php" method="POST">
            <div class="box icon-holder">
                <p class="label-margin">Name </p>
                <input type="text" name="name" id="name" placeholder="Enter Your name">
                <span class="required">&nbsp; * &nbsp;<?php echo $nameError; ?></span>
            </div>

            <div class="box icon-holder">
                <p class="label-margin">E-mail </p>
                <input type="text" name="email" id="email" placeholder="Enter Your Email">
                <span class="required">&nbsp; * &nbsp;<?php echo $emailError; ?></span>
            </div>
            <div class="box icon-holder">
                <p class="label-margin">Password </p>
                <input type="text" name="password" id="password" placeholder="Enter Your Password">
                <span class="required">&nbsp; * &nbsp;<?php echo $passwordError; ?></span>
            </div>

            <div class="box icon-holder">
                <!-- Gender -->
                <p class="label-margin">Gender </p>
                <input type="radio" name="gender" value="Male" /> Male
                <input type="radio" name="gender" value="Female" /> Female
                <input type="radio" name="gender" value="Other" /> Other
                <span class="required"> &nbsp; * &nbsp;<?php echo $genderError; ?></span>
            </div>

            <div class="box icon-holder">
                <p class="label-margin">Phone </p>
                <input type="text" name="phone" id="phone" placeholder="Enter Your Phone">
                <span class="required">&nbsp; * &nbsp;<?php echo $phoneError; ?></span>
            </div>


            <div class="box icon-holder">
                <p class="label-margin">Address </p>
                <input type="text" name="address" id="address" placeholder="Enter Your Address">
                <span class="required">&nbsp; * &nbsp;<?php echo $addressError; ?></span>
            </div>

            <div class="box icon-holder">
                <p class="label-margin">Profession </p>
                <input type="text" name="profession" id="profession" placeholder="Enter Your Profession">
                <span class="required">&nbsp; * &nbsp;<?php echo $professionError; ?></span>
            </div>



            <div class="button-container">
                <button type="submit" class="signin-button">Signup</button>
                </span></p>
            </div>
        </form>

    </div>



</body>

</html>