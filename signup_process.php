<?php
session_start();
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mobile = $_POST['mobile'];
    $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
    $captcha = $_POST['captcha'];

    if ($captcha == $_SESSION['captcha']) {
        $query = "INSERT INTO voter.users (mobile, password) VALUES ('$mobile', '$pass')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Signup successful!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Captcha verification failed!";
    }
}
?>
