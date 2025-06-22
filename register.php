<?php
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

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $incharge = $_POST["incharge"];
    $contact_number = $_POST["contact_number"];
    $booths = $_POST["booths"];
    $registered_voters = $_POST["registered_voters"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $accessibility = $_POST["accessibility"];
    $facilities = $_POST["facilities"];
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $device_name = $_SERVER['HTTP_USER_AGENT'];
    $device_ip_address = $_SERVER['REMOTE_ADDR'];

    // Insert data into database
    $sql = "INSERT INTO `polling_stations` (`name`, `address`, `number`, `incharge`, `contact_number`, `booths`, `registered_voters`, `latitude`, `longitude`, `accessibility`, `facilities`, `username`, `pass`, `device_name`, `device_ip_address`)
            VALUES ('$name', '$address', '$number', '$incharge', '$contact_number', '$booths', '$registered_voters', '$latitude', '$longitude', '$accessibility', '$facilities', '$username', '$password', '$device_name', '$device_ip_address')";
   if ($conn->query($sql) === TRUE) {
    // Registration successful, show pop-up message
    echo '<script>alert("Registration successful!");</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Polling Station Registration</title>
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
        <h2>Polling Station Registration</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>
            <label for="number">Number:</label>
            <input type="text" id="number" name="number" required><br>
            <label for="incharge">Incharge:</label>
            <input type="text" id="incharge" name="incharge" required><br>
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" required><br>
            <label for="booths">Number of Booths:</label>
            <input type="text" id="booths" name="booths" required><br>
            <label for="registered_voters">Number of Registered Voters:</label>
            <input type="text" id="registered_voters" name="registered_voters" required><br>
            <label for="latitude">Latitude:</label>
            <input type="text" id="latitude" name="latitude" required><br>
            <label for="longitude">Longitude:</label>
            <input type="text" id="longitude" name="longitude" required><br>
            <label for="accessibility">Accessibility:</label>
            <input type="text" id="accessibility" name="accessibility" required><br>
            <label for="facilities">Facilities:</label>
            <textarea id="facilities" name="facilities"></textarea><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="pass" name="pass" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
