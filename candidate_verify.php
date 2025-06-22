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
if (isset($_POST["c_verify"])) {
    $id = $_POST["c_id"];
    // Check if the record is already verified
    $check_sql = "SELECT `c_verified` FROM `candidate` WHERE `c_id` = '$id'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        $row = $check_result->fetch_assoc();
        if ($row["c_verified"] == '1') {
            // Record is already verified, show pop-up message
            echo '<script>alert("Record is already verified!");</script>';
        } else {
            // Update record in the database to mark it as verified
            $update_sql = "UPDATE `candidate` SET `c_verified` = '1' WHERE `c_id` = '$id'";
            if ($conn->query($update_sql) === TRUE) {
                // Insert into can_select table
                $insert_sql = "INSERT INTO `can_select` (`c_id`, `c_name`, `c_vote`) SELECT `c_id`, CONCAT(`c_name`, ' ', `c_middle_name`, ' ', `c_last_name`) AS `c_name`, 0 AS `c_vote` FROM `candidate` WHERE `c_id` = '$id'";
                if ($conn->query($insert_sql) === TRUE) {
                    echo '<script>alert("Record verified successfully and added to can_select!"); </script>';
                } else {
                    echo '<script>alert("Error updating record or adding to can_select: ' . $conn->error . '"); </script>';
                }
            } else {
                echo '<script>alert("Error updating record: ' . $conn->error . '"); </script>';
            }
        }
    } else {
        echo '<script>alert("Record not found!"); </script>';
    }
}

  // Redirect back to dash.php and refresh the page
  echo '<script>window.location.href = "dash.php"; </script>';

// Fetch all records from the candidate table
$sql = "SELECT * FROM `candidate`";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Candidate</title>
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
        <h2>Candidate</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Aadhar Number</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Party</th>
                <th>Verified</th>
                <th>Action</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row["c_id"]; ?></td>
                        <td><?php echo $row["c_name"] . " " . $row["c_middle_name"] . " " . $row["c_last_name"]; ?></td>
                        <td><?php echo $row["c_dob"]; ?></td>
                        <td><?php echo $row["c_gender"]; ?></td>
                        <td><?php echo $row["c_aaddhar_no"]; ?></td>
                        <td><?php echo $row["c_email"]; ?></td>
                        <td><?php echo $row["c_mobile_no"]; ?></td>
                        <td><?php echo $row["c_party_name"]; ?></td>
                        <td><?php echo $row["c_verified"] == 1 ? "Verify" : "Not Verify"; ?></td>
                        <td>
                            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                <input type="hidden" name="c_id" value="<?php echo $row["c_id"]; ?>">
                                <input type="submit" name="c_verify" value="Verify" class="verify-btn">
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='10'>No records found</td></tr>";
            }
            // Close the if statement for checking if there are rows in the result
            $conn->close(); // Close the database connection
            ?> <!-- Close the PHP section -->
        </table>
    </div>
</body>
</html>
