<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add your styling here */
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
        }

        .content-container {
            width: 80%; /* Adjust the width as needed */
            margin-top: 20px; /* Adjust the top margin as needed */
			margin-left:600px;
        }

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
            margin-right: 20px; /* Add space between the image and text */
        }

        .id {
            margin-right: 20px; /* Add space between the ID and image */
        }

        .text-container {
            margin-left: 20px; /* Add space between the image and text */
        }

        input[type="radio"] {
            /* Keep the radio button circle visible */
        }
    </style>
    <title>Radio Buttons with Images and Text</title>
</head>
<body>
<div class="content-container">
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
            echo '<div class="radio-container" onclick="selectRadio(\'' . $row['c_id'] . '\')">';
            echo '<input type="radio" id="' . $row['c_id'] . '" name="options" value="' . $row['c_name'] . '">';
            echo '<label class="radio-label" for="' . $row['c_id'] . '">';
            echo '<span class="id">' . $row['c_id'] . '</span>'; // Enclose c_id in a span for styling
            echo '<img class="radio-img" src="' . $row['c_party_photo'] . '" alt="' . $row['c_name'] . '">';
            echo '<div class="text-container">';
            echo $row['c_name'] . ' ' . $row['c_middle_name'] . ' ' . $row['c_last_name'];
            echo '</div>';
            echo '</label>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
</div>
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
