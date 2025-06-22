<?php
// Check if the candidate ID is provided
if (isset($_GET['id'])) {
    // Get the candidate ID
    $candidateId = $_GET['id'];

    // Database connection parameters
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

    // Begin transaction
    $conn->begin_transaction();

    // Check if the candidate already exists in the can_select table
    $checkCandidateSQL = "SELECT * FROM can_select WHERE c_id = '$candidateId'";
    $checkResult = $conn->query($checkCandidateSQL);
    
    if ($checkResult->num_rows > 0) {
        // If the candidate exists, update the vote count
        $updateCandidateSQL = "UPDATE can_select SET c_vote = c_vote + 1 WHERE c_id = '$candidateId'";
        if ($conn->query($updateCandidateSQL) === TRUE) {
            // Commit transaction if updating the vote count succeeds
            $conn->commit();
            header("Location: admin_home.php");
            exit();
            echo "Vote stored successfully!";
        } else {
            // Rollback transaction if updating the vote count fails
            $conn->rollback();
            echo "Error updating vote count: " . $conn->error;
        }
    } else {
        // If the candidate does not exist, insert a new record
        $insertCandidateSQL = "INSERT INTO can_select (c_id, c_name, c_vote) SELECT c_id, c_name, 1 FROM candidate WHERE c_id = '$candidateId'";
        if ($conn->query($insertCandidateSQL) === TRUE) {
            // Commit transaction if inserting the new candidate succeeds
            $conn->commit();
            echo "New candidate and vote stored successfully!";
        } else {
            // Rollback transaction if inserting the new candidate fails
            $conn->rollback();
            echo "Error inserting new candidate: " . $conn->error;
        }
    }

    // Close connection
    $conn->close();
} else {
    echo "Candidate ID not provided!";
}
?>
