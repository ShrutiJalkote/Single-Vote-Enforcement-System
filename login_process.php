<?php
session_start();
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mobile = $_POST['mobile'];
    $password = isset($_POST['password']) ? md5($_POST['password']) : '';
    $captcha = $_POST['captcha'];

    if ($captcha == $_SESSION['captcha']) {
        $query = "SELECT * FROM voter.users WHERE mobile='$mobile' AND password='$password'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid mobile number or password!";
        }
    } else {
        echo "Captcha verification failed!";
    }
}
?>
