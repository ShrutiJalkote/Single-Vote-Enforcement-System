<html>
<form action="" method="POST">

Search by user value:<br>
<input type="text" name="searchname"><br>

<input type="submit" name="search">

<button onclick="window.print()">Print</button>
</form>


<body>
<?php  
include("config.php"); 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$search=$_POST["searchname"];
$qry=mysql_query("SELECT * FROM voter.candidate WHERE c_aaddhar_no like '%$search%'");
echo "<center>"."<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Middlename</th>
<th>Last Name</th>
<th>DOB</th>
<th>Gender</th>
<th>Aaddhar No</th>
<th>City</th>
<th>Taluka</th>
<th>District</th>
<th>State</th>
<th>Pincode</th>
<th>Edu Degree</th>
<th>Current Job</th>
<th>Working At</th>
<th>Email</th>
<th>Mobile NO</th>
<th>Participate in</th>
<th>Party Name</th>
<th>Photo</th>
<th>Party Photo</th>
</tr>";

while($row=mysql_fetch_array($qry))
{
	echo"<tr>";
echo "<td>" . $row["c_id"] . "</td>";
echo "<td>" . $row["c_name"] . "</td>";
echo "<td>" . $row["c_middle_name"] . "</td>";
echo "<td>" . $row["c_last_name"] . "</td>";
echo "<td>" . $row["c_dob"] . "</td>";
echo "<td>" . $row["c_gender"] . "</td>";
echo "<td>" . $row["c_aaddhar_no"] . "</td>";
echo "<td>" . $row["c_city"] . "</td>";
echo "<td>" . $row["c_taluka"]  . "</td>";
echo "<td>" . $row["c_district"] . "</td>";
echo "<td>" . $row["c_state"] . "</td>";
echo "<td>" . $row["c_pincode"] . "</td>";
echo "<td>" . $row["c_edu_degree"] . "</td>";
echo "<td>" . $row["c_current_job"] . "</td>";
echo "<td>" . $row["c_working_at"] . "</td>";
echo "<td>" . $row["c_email"] . "</td>";
echo "<td>" . $row["c_mobile_no"] . "</td>";
echo "<td>" . $row["c_participate_in"] . "</td>";
echo "<td>" . $row["c_party_name"] . "</td>";
echo "<td>" . $row["c_photo"] . "</td>";
echo "<td>" . $row["c_party_photo"] . "</td>";

}
}
echo "</table>"."</center>";

?>
</body>
</html>