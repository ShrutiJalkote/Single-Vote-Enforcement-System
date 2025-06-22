<?php
// Start session at the beginning
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voter";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Redirect if admin is already logged in
if(isset($_SESSION['login_admin'])) {
    header("location:admin_home.php");
    exit;
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $device_name = $_SERVER['HTTP_USER_AGENT'];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Check if the combination of username, password, device name, and IP address exists in the database
    $sql = "SELECT * FROM `polling_stations` WHERE `username` = '$username' AND `pass` = '$password' AND `verified` = '1' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['device_name'] != $device_name || $row['device_ip_address'] != $ip_address) {
            // Device name or IP address is invalid, show pop-up message
            echo '<script>alert("Invalid Device. Please try logging in from the correct device.");</script>';
        } else {
            // Login successful, set session variable and redirect to admin home page
            $_SESSION['login_admin'] = $username;
            header("location:admin_home.php");
            exit;
        }
    } else {
        // User is not verified or credentials are invalid, show pop-up message
        echo '<script>alert("Invalid User. Please check your credentials and try again.");</script>';
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 80%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #192654;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #24C2B7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="pass" name="pass" required><br><br>
            <input type="submit"  value="Login">
        </form>
    </div>
    
</body>
</html>
