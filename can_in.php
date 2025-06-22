<?php
if(isset($_POST['submit'])) {
    $a = $_POST['fname'];
    $b = $_POST['mname'];
    $c = $_POST['lname'];
    $d = $_POST['dob'];
    $e = $_POST['gen'];
    $f = $_POST['adh'];
    $g = $_POST['city'];
    $h = $_POST['tal'];
    $i = $_POST['dis'];
    $j = $_POST['state'];
    $k = $_POST['pin'];
    $l = $_POST['edu'];
    $m = $_POST['job'];
    $n = $_POST['work'];
    $o = $_POST['email'];
    $p = $_POST['mob'];
    $q = $_POST['part'];
    $r = $_POST['party'];
    $s = $_FILES["cphoto"]["name"];
    $filename = $_FILES["symbol"]["name"];
    $tempname = $_FILES["symbol"]["tmp_name"];
    $folder = "photo/" . $filename;

    // Move uploaded file
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>Image uploaded successfully!</h3>";

        // Database connection
        $db = mysqli_connect("localhost", "root", "", "voter");

        // SQL query
        $qry = "INSERT INTO voter.candidate (c_name, c_middle_name, c_last_name, c_dob, c_gender, c_aaddhar_no, c_city,
        c_taluka, c_district, c_state, c_pincode, c_edu_degree, c_current_job, c_working_at, c_email, c_mobile_no, c_participate_in, c_party_name, c_photo, c_party_photo) 
        VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$folder')";

        // Execute query
        if (mysqli_query($db, $qry)) {
            echo "<h3>Candidate information inserted successfully!</h3>";
        } else {
            echo "<h3>Failed to insert candidate information!</h3>";
        }

        // Close database connection
        mysqli_close($db);
    } else {
        echo "<h3>Failed to upload image!</h3>";
    }
}
?>
