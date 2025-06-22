<?php
session_start();

require_once("config.php");

$aadharno = $_GET['id'];
$qry = mysql_query("SELECT * FROM voter.voter_reg WHERE v_aadhaar_no = '$aadharno'");

echo "<html>";
echo "<head>";
echo "<style>";
echo "body {";
echo "margin: 0;";
echo "padding: 0;";
echo "padding-top: 70px;";
echo "font-family: Arial, sans-serif;";
echo "}";
echo ".nav {";
echo "width: 100%;";
echo "height: 70px;";
echo "background-color: #24C2B7;";
echo "position: fixed;";
echo "top: 0;";
echo "left: 0;";
echo "z-index: 999;";
echo "}";
echo ".nav img {";
echo "width: 150px;";
echo "height: auto;";
echo "padding: 10px 30px;";
echo "}";
echo "form {";
echo "margin-top: 100px;";
echo "}";
echo "form center {";
echo "margin-top: 20px;";
echo "}";
echo "table {";
echo "border-style: solid;";
echo "border-width: 5px;";
echo "border-color: pink;";
echo "margin-top: 20px;";
echo "margin-bottom: 20px;";
echo "border-collapse: collapse;";
echo "}";
echo "th, td {";
echo "border: 1px solid pink;";
echo "padding: 8px;";
echo "text-align: center;";
echo "}";
echo ".content-container {";
echo "width: 80%;";
echo "margin-left: 400px;";
echo "}";
echo ".radio-container {";
echo "display: flex;";
echo "align-items: center;";
echo "margin-bottom: 10px;";
echo "}";
echo ".radio-label {";
echo "margin-left: 10px;";
echo "font-size: 30px;";
echo "cursor: pointer;";
echo "display: flex;";
echo "align-items: center;";
echo "}";
echo ".radio-img {";
echo "max-width: 80px;";
echo "max-height: 80px;";
echo "margin-right: 20px;";
echo "}";
echo ".id {";
echo "margin-right: 20px;";
echo "}";
echo ".text-container {";
echo "margin-left: 20px;";
echo "}";
echo "input[type='radio'] {";
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<div class='nav'>";
echo "<nav>";
echo "<img src='mylogo1.png' alt='Logo'>";
echo "</nav>";
echo "</div>";

echo "<form action='' method='POST'>";
echo "</form>";

echo "</body>";
echo "</html>";

echo "<center>";

if ($qry === FALSE) {
    trigger_error(mysql_error(), E_USER_ERROR);
}

while ($row = mysql_fetch_array($qry)) {

    if ($row['v_verify'] == NULL) {
        // Display voter details and verification button
        echo "<center><h2><b>User Verification Status</b></h2></center>
        <table border='1'>
        <tr>
        <th>Photo</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>State</th>
        <th>District</th>
        <th>Mobile no</th>
        <th>Email</th>
        <th>Aadhaar no</th>
        <th>Gender</th>
        <th>Date of birth</th>
        <th>Address</th>
        <th>Verification</th>
        </tr>";

        echo "<tr>";
        echo "<td><img src='" . $row['v_photo_file'] . "' height='100px' width='80px'></td>"; // Fixed missing single quotes around array key
        echo "<td>" . $row["v_first_name"] . "<br>" . "</td>";
        echo "<td>" . $row["v_middle_name"] . "<br>" . "</td>";
        echo "<td>" . $row["v_surname"] . "<br>" . "</td>";
        echo "<td>" . $row["v_state"] . "<br>" . "</td>";
        echo "<td>" . $row["v_district"] . "<br>" . "</td>";
        echo "<td>" . $row["v_mobile_no"] . "<br>" . "</td>";
        echo "<td>" . $row["v_email_id"] . "<br>" . "</td>";
        echo "<td>" . $row["v_aadhaar_no"] . "<br>" . "</td>";
        echo "<td>" . $row["v_gender"] . "<br>" . "</td>";
        echo "<td>" . $row["v_dob"] . "<br>" . "</td>";
        echo "<td>" . $row["v_address_house_no"] . ", " . $row["v_address_street"] . "," . $row["v_address_village"] . ", " . $row["v_address_pin_code"] . "<br>" . "</td>";

        $verificationText = $row['v_verify'] == 'verified' ? 'verified' : 'no verify';

        echo "<td><center><button class='verify-button $verificationText'><a href='status.php?id=" . $row['v_aadhaar_no'] . "'>$verificationText</a></button></center></td>";

        echo "</tr>";
        echo "</table>";
    } else if ($row['v_verify'] == 'verified' && $row['voting_status'] == NULL) {
        // Check if the user has already voted
        if (isset($row['v_verify']) && $row['v_verify'] === 'verified' && isset($row['voting_status']) && $row['voting_status'] === 'voted') {
            header("Location: vote_successfully.php");
            exit();
        } else {
            echo "<center><h2>Your status is verified. You can now vote:</h2></center>";

            echo "<div class='content-container'>";
            // Database connection parameters
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'voter';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }

            // Query to retrieve options from the database
            $sql = 'SELECT c_id,c_name,c_middle_name,c_last_name,c_party_photo FROM candidate';
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='radio-container'>";
                    echo "<input type='radio' id='{$row['c_id']}' name='options' value='{$row['c_id']}'>";
                    echo "<label class='radio-label' for='{$row['c_id']}'>";
                    echo "<span class='id'>{$row['c_id']}</span>"; // Enclose c_id in a span for styling
                    echo "<img class='radio-img' src='{$row['c_party_photo']}' alt='{$row['c_name']}'>";
                    echo "<div class='text-container'>";
                    echo "{$row['c_name']} {$row['c_middle_name']} {$row['c_last_name']}";
                    echo "</div>";
                    echo "</label>";
                    echo "</div>";
                }
            } else {
                echo '0 results';
            }

            // Close connection
            $conn->close();
            echo "</div>"; // End of content-container
            ?>
            <script>
                function verifyStatus(aadhaarNo) {
                    // Perform AJAX request to update verification status
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            alert("Verification successful. You can now vote.");
                            // Reload the page to display voting options
                            location.reload();
                        }
                    };
                    xhttp.open("GET", "update_verification.php?id=" + aadhaarNo, true);
                    xhttp.send();
                }

                // Event delegation to handle click events
                document.querySelector('.content-container').addEventListener('click', function (event) {
                    // Check if the clicked element is a radio button
                    if (event.target.type === 'radio') {
                        selectRadio(event.target.id); // Call the function to select the radio button
                    }
                });

                function selectRadio(id) {
                    var radio = document.getElementById(id);
                    if (radio) {
                        radio.checked = true;
                        confirmVote(id); // Call the function to confirm vote with candidate ID
                    }
                };

                function confirmVote(candidateId) {
                    var confirmed = confirm("Are you sure you want to vote for this candidate?");
                    if (confirmed) {
                        alert("Voting completed!");

                        // Set the voted status to 'voted'
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                console.log("Voting status updated");
                                window.location.href = "camera_scanner.php";
                            }
                        };
                        xhttp.open("GET", "update_voting_status.php?id=<?php echo $aadharno; ?>", true);
                        xhttp.send();

                        // Send the selected candidate ID to the server for storage
                        storeVote(candidateId);
                    }
                };

                function storeVote(candidateId) {
                    // Create an XMLHttpRequest object
                    var xhttp = new XMLHttpRequest();

                    // Define the function to handle the response from the server
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            // Display any response from the server (optional)
                            console.log(this.responseText);
                        }
                    };

                    // Open a connection to the server
                    xhttp.open("GET", "store_vote.php?id=" + candidateId, true);

                    // Send the request
                    xhttp.send();
                }
            </script>
            <?php
        }
    } elseif ($row['v_verify'] == 'verified' && $row['voting_status'] == 'voted') {
        // Redirect if already voted
        header("Location: vote_sussefully.php");
        exit();
    }
}

echo "</center>";
?>
