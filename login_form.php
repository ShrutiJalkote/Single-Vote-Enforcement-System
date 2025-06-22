<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"],
    input[type="password"],
    input[type="tel"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .captcha-container {
        display: flex;
        align-items: center;
    }
    input[type="text"].captcha {
        flex: 1;
        margin-right: 10px;
    }
    img.captcha-image {
        height: 40px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<?php
session_start();
$rand = rand(1000, 9999);
$_SESSION['captcha'] = $rand;
?>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <form action="login_process.php" method="post">
            <label for="mobile">Mobile Number *</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <div class="captcha-container">
                <input type="text" id="captcha" name="captcha" class="captcha" placeholder="Enter the captcha" required>
                <div class="captcha"><?php echo $rand; ?></div>
            </div>
            <input type="submit" value="Continue" src="home.php">
        </form>
    </div>
</body>
</html>
