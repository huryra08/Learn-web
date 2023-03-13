<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Index</title>
</head>

<body>
    <div align="center">
        <h3>
            <?php
            echo "Thank you for log in, " . $_SESSION["username"];
            ?>
            <br>
            <a href="login.php">Logout
                <?php session_unset();
                session_destroy(); ?>
            </a>

        </h3>
    </div>
</body>

</html>