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

// Verify button logic
if (isset($_POST["verify"])) {
    $id = $_POST["id"];
    // Check if the record is already verified
    $check_sql = "SELECT `verified` FROM `polling_stations` WHERE `id` = '$id'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        $row = $check_result->fetch_assoc();
        if ($row["verified"] == '1') {
            // Record is already verified, show pop-up message
            echo '<script>alert("Record is already verified!");</script>';
        } else {
            // Update record in the database to mark it as verified
            $update_sql = "UPDATE `polling_stations` SET `verified` = '1' WHERE `id` = '$id'";
            if ($conn->query($update_sql) === TRUE) {
                echo '<script>alert("Record verified successfully!"); </script>';
            } else {
                echo '<script>alert("Error updating record: ' . $conn->error . '");</script>';
            }
        }
    } else {
        echo '<script>alert("Record not found!");</script>';
    }

    // Redirect back to dash.php and refresh the page
    echo '<script>window.location.href = "dash.php";</script>';
}


// Fetch all records from the polling_stations table
$sql = "SELECT * FROM `polling_stations`";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Polling Stations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 200%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .verify-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .verify-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Polling Station</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Number</th>
                <th>Incharge</th>
                <th>Contact Number</th>
                <th>Booths</th>
                <th>Registered Voters</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Accessibility</th>
                <th>Facilities</th>
                <th>Username</th>
                <th>Password</th>
                <th>Device Name</th>
                <th>Device IP Address</th>
                <th>Verified</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["number"]; ?></td>
                        <td><?php echo $row["incharge"]; ?></td>
                        <td><?php echo $row["contact_number"]; ?></td>
                        <td><?php echo $row["booths"]; ?></td>
                        <td><?php echo $row["registered_voters"]; ?></td>
                        <td><?php echo $row["latitude"]; ?></td>
                        <td><?php echo $row["longitude"]; ?></td>
                        <td><?php echo $row["accessibility"]; ?></td>
                        <td><?php echo $row["facilities"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?php echo $row["pass"]; ?></td>
                        <td><?php echo $row["device_name"]; ?></td>
                        <td><?php echo $row["device_ip_address"]; ?></td>
                        <td><?php echo $row["verified"] == 1 ? "Verify" : "Not Verify"; ?></td>
                        <td>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                <input type="submit" name="verify" value="Verify" class="verify-btn">
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='18'>No records found</td></tr>";
            }
            ?> <!-- Close the PHP section -->
        </table>
    </div>
</body>
</html>
