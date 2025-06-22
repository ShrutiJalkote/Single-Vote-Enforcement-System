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

// Fetch total votes
$sql = "SELECT SUM(c_vote) AS total_votes FROM can_select";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_votes = $row['total_votes'];

// Fetch and display percentage for each party
$sql = "SELECT * FROM can_select";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $party_name = $row['c_name'];
    $party_votes = $row['c_vote'];
    $percentage = ($party_votes / $total_votes) * 100;
    echo "$party_name: " . round($percentage, 2) . "%<br>";
}

// Close connection
$conn->close();
?>