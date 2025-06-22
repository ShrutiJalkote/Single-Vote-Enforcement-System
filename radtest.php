<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add your styling here */
        .radio-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .radio-label {
            margin-left: 10px;
            font-size: 30px;
            cursor: pointer;
			display: flex; /* Use flex container for alignment */
            align-items: center; 
        }

        .radio-img {
            max-width: 80px; /* Set a maximum width for the images */
            max-height: 80px; /* Set a maximum height for the images */
        }

        input[type="radio"] {
            /* Keep the radio button circle visible */
        }
    </style>
    <title>Radio Buttons with Images and Text</title>
</head>
<body>

<?php
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

// Query to retrieve options from the database
$sql = "SELECT c_id,c_name,c_middle_name,c_last_name,c_party_photo FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="radio-container" onclick="selectRadio(\'' . $row['c_name'] . '\')">';
        echo '<input type="radio" id="' . $row['c_name'] . '" name="options" value="' . $row['c_name'] . '">';
        echo '<label class="radio-label" for="' . $row['c_name'] . '">';
        echo $row['c_id'];
        echo '<img class="radio-img" src="' . $row['c_party_photo'] . '" alt="' . $row['c_name'] . '">';
        echo $row['c_name'] . ' ' . $row['c_middle_name'] . ' ' . $row['c_last_name'];
        echo '</label>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

<script>
    function selectRadio(id) {
        var radio = document.getElementById(id);
        if (radio) {
            radio.checked = true;
        }
    }
</script>

</body>
</html>
