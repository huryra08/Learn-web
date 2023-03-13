<?php session_start()
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Registration Page
    </title>
</head>

<body>
    <div id align="center">

        <form action="login_action.php" method="POST">
            <table>
                <h1>LOG IN</h1>
                
                          
                <tr>
                    <td>
                        <fieldset>
                            <legend><b>Login: </b></legend>
                            <table>
                                <tr>
                                    <th><label for="Username">Username: </label></th>
                                    <td><Input type="text" name="username" id="username"></Input></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['username'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['username'])) {
                                            echo "Logged in as: " . $_SESSION['username'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="password">Password: </label></th>
                                    <td><input type="text" name="password" id="password"></td>
                                    <td>
                                        <?php
                                        if (empty($_SESSION['password'])) {
                                            echo "Please enter your first name";
                                        } else if (!empty($_SESSION['password'])) {
                                            echo "Logged in as: " . $_SESSION['password'];
                                        }
                                        ?>
                                    </td>
                                </tr>

                            </table>
                        </fieldset>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td align="center">
                        <button name="submit" type="submit" value="Register">Register</button> <br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>