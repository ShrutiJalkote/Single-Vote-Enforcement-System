<?php
// Start session
session_start();

require_once("config.php");

// Check if the ID parameter is set in the GET request
if(isset($_GET['id'])) {
    $aadharNo = $_GET['id'];

    // Update the voting status in the database
    $updateQuery = "UPDATE voter_reg SET voting_status = 'voted' WHERE v_aadhaar_no = '$aadharNo'";
    
    // Execute the query
    $result = mysql_query($updateQuery);
    
    // Check if the query was successful
    if($result) {
        header("Location: camera_scanner.php");
        exit();
    } else {
        echo "Error updating voting status: " . mysql_error();
    }
} else {
    echo "Error: Aadhaar ID parameter is missing";
}
?>
