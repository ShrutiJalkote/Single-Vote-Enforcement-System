<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if there are any records in the columns
$sql_check = "SELECT COUNT(*) AS count FROM voter_reg WHERE v_verify IS NOT NULL OR voting_status IS NOT NULL";
$result_check = $conn->query($sql_check);
$row_check = $result_check->fetch_assoc();
$count = $row_check['count'];

if ($count == 0) {
    echo "New Voting is already scheduled";
} else {
    // Delete all records from the columns
    $sql = "UPDATE voter_reg SET v_verify = NULL, voting_status = NULL";
    if ($conn->query($sql) === TRUE) {
        echo "Columns truncated successfully";
    } else {
        echo "Error truncating columns: " . $conn->error;
    }
}

$conn->close();
?>
