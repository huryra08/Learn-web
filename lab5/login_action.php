<?php
session_start();
function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// var_dump($_REQUEST);
// echo "<hr>";
// print_r(isset($_POST['gender']));
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  ;
    $_SESSION['username'] = isset($_POST["username"]) ? sanitize($_POST["username"]) : "";
    $_SESSION['password'] = isset($_POST["password"]) ? sanitize($_POST["password"]) : "";


    if (!empty($_SESSION['username'] && $_SESSION['password'])) {
        header('Location: Index.php');
    } else {
        session_unset();
        header('Location: Index.php');
    }

}