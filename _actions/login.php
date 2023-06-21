<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email === "jon.doe@gmail.com" && $password === "jd123pwd") {
    $_SESSION['user'] = ['username' => 'Jon Doe'];
    header("location: ../profile.php");
} else {
    header("location: ../index.php?incorrect=1");
}
?>