<?php
$error = $_FILES['photo']['error'];
$type = $_FILES['photo']['type'];
$tmp = $_FILES['photo']['tmp_name'];

if($error) {
    header('location: ../profile.php?error=file');
    exit();
}

if($type === 'image/jpeg' || $type === 'image/png') {
    move_uploaded_file($tmp, "photos/profile.jpg");
    header('location: ../profile.php');
} else {
    header('location: ../profile.php?error=type');
}

?>