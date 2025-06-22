<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By User EPIC No</title>
    <style>
        /* Button styles */
        body
{
    margin: 0%;
    padding: 0%;
    padding-top: 70px;
}
nav
{
    
    margin: 0%;
    padding: 0%;
    width: 100%;
    height: 12%;
    background-color: #24C2B7;
    position: fixed !important;
    top: 0; 
    left:0;
    right: 0;
}
img
{
   width: 150px;
   height: 70px ;
   padding-left: 30px;
  
}
       
        .btn {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #45a049; /* Darker green */
        }

        /* Form styles */
        form {
            margin-bottom: 20px;
        }

        /* Table styles */
        table {
            border-style: solid;
            border-width: 5px;
            border-color: pink;
            margin-top: 20px;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid pink;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<body>
<div class="nav">
      <nav>
     <img src="mylogo1.png">
      </nav>
</div>

    <form action="" method="POST">
        <center>
            <h2><b>Search By User EPIC No</b></h2><br>
            EPIC No: <input type="text" name="epicno"><br><br>
            <button class="btn" type="submit" name="search">Submit</button>
            <button class="btn" type="submit" name="back"><a href="home4.php" style="text-decoration: none; color: white;">Back</a></button><br><br>
        </center>
    </form>
 <!--<center>
        <br><br><button class="btn" onclick="window.print()">Print</button>
    </center>-->
</body>
</html>



<?php

require_once("config.php");
error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$search1=$_POST['epicno'];


$query=mysql_query("SELECT * FROM voter.voter_reg WHERE v_epic_no LIKE '%$search1%'");

echo "<center>";
echo "<table border='1'>
<tr>
<th>EPIC No</th>
<th>State</th>
<th>District</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Mobile No</th>
<th>Email ID</th>
<th>Aadhaar No</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>City</th>
<th>Pincode</th>
</tr>";
while($row = mysql_fetch_array($query))
{
	?>
<tr>

<td><?php echo $row['v_epic_no'];?></td>

<td><?php echo $row['v_state'];?></td>

<td><?php echo $row['v_district'];?></td>

<td><?php echo $row['v_first_name'];?></td>

<td><?php echo $row['v_middle_name'];?></td>

<td><?php echo $row['v_surname'];?></td>

<td><?php echo $row['v_mobile_no'];?></td>

<td><?php echo $row['v_email_id'];?></td>

<td><?php echo $row['v_aadhaar_no'];?></td>

<td><?php echo $row['v_gender'];?></td>

<td><?php echo $row['v_dob'];?></td>

<td><?php echo $row['v_address_village'];?></td>

<td><?php echo $row['v_address_pin_code'];?></td>

</tr>
<?php
}
echo "</table>";

echo "</center>";
}
?>


