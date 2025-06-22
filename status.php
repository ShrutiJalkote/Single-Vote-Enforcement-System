<?php
require_once("config.php");

// Check if the Aadhaar number is provided in the URL
if(isset($_GET['id'])) 
{
    $aadhaar_no = $_GET['id'];
    // Query the database to update the verification status based on Aadhaar number
    $qry = mysql_query("UPDATE voter.voter_reg SET v_verify = 'verified' WHERE v_aadhaar_no='$aadhaar_no'");
    if($qry)
    {
        header("Location: admin_home.php");
        exit();
    }
    else
    {
        echo '<script>alert("Verification Successfully");</script>';
        
    }
}
else
{
    echo "<p>No Aadhaar Number provided in the URL</p>";
}
?>
