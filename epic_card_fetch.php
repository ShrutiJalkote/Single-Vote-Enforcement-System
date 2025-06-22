


<?php
include("phpqrcode/qrlib.php");
require_once("config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search1 = $_POST['aadharno'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="voter";
    // Establish database connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query (also, use prepared statements to prevent SQL injection)
    $query = "SELECT * FROM voter.voter_reg WHERE v_aadhaar_no LIKE ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $search1);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch data from the database
        $row = mysqli_fetch_assoc($result);
        $path = 'images/';
        $qrcode = $path.time().".png";
        $qrimage = time().".png";
        $dt="http://localhost/final/form6/verification.php?id=".$row['v_aadhaar_no'];
QRcode :: png($dt, $qrcode, 'H', 4, 4);
echo "<center>";
echo "<!DOCTYPE html>
<html>
<head>
	<title>card</title>
   <style>  
   body{    
	margin: 0%;    
	padding: 0%;    
	padding-top: 70px;    
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}
nav{    
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
img{   
	width: 300px;   
	height: 300px ;   
	padding-left: 30px;  
}
.space{    
	height:20px;    
	weight:4px;
}
.box_a{        
	border-style: solid;    
	border-width: 2px;   
	height: 200px;    
	width:400px;   
	align-items: center;
}
.info{  
	margin-right: 250px; 
	height: 120px;  
	width: 120px; 
	align-content: 
	center;  
}
.info_size{    
	margin-right: 300px;    
	width:260px;    
	height: 20px;    
	text-align: left;
}
.sp{    
	width:260px;    
	height: 2px;
}
.lab_info{    
	font-size: small;
}
.qr{    
	height:75%;    
	weight:50%;    
	padding: 10px;
}
.head{    
	width: 400px;    
	height: 40px;    
	text-align: center;
}
.photo{
	width: 100px;
	height: 100px;
	margin-left: 200px;
}
.button{    
	width: 120px;    
	height: 40px;    
	background-color: #24C2B7;    
	border-style:inset;    
	border-radius: 10px;    
}
.btngroup{
	width: 250px;
	height: 50px;
	margin-left:580px;
}
	</style>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js'></script>


	<script>


window.jsPDF = window.jspdf.jsPDF;
var docPDF = new jsPDF();

function downloadPDF(invoiceNo){

	var elementHTML = document.querySelector('#content');
	docPDF.html(elementHTML, {
		callback: function(docPDF) {
			docPDF.save(invoiceNo+'.pdf');
		},
		x: 10,
		y: 10,
		width: 170,
		windowWidth: 650
	});
}

document.addEventListener('DOMContentLoaded', function() {
	// Get the print button by its ID
	var printButton = document.getElementById('printButton');
	
	// Add an event listener to the print button
	printButton.addEventListener('click', function() {
		printDiv('content');
	});
});

function printDiv(divId) {
	var printContents = document.getElementById(divId).innerHTML;
	var originalContents = document.body.innerHTML;

	document.body.innerHTML = printContents;

	window.print();

	document.body.innerHTML = originalContents;
}
</script>
</head>
<body>
<body>
<form id='reg' action='insert.php' method='post'>
  
<div class='nav'>
	  <nav>
	 <img src='mylogo1.png'>
	  </nav>
</div>

 <div id='content'>
<center>
<div class='space'></div>
<div class='box_a'>
		<div class='head'>
			<h4>Single Vote Enforcement System</h4>
			<img class='photo' src='photo.jpeg'>
		</div>
        <div class='info'> 
        <div class='info_size'> <label class='lab_info'>EPIC NO:</label>     
        <label id='gender' class='lab_info'>".$row['v_epic_no']."</label></br></div>
        <div class='info_size'> <label class='lab_info'>Name:</label>    
        <label id='name' class='lab_info'> ".$row['v_first_name']." ".$row['v_middle_name']." ".$row['v_surname']."</label></br></div>
        <div class='info_size'> <label class='lab_info'>Address:</label>      
        <label id='address' class='lab_info'>".$row['v_address_house_no']." ".$row['v_address_street']." ".$row['v_address_village'].", ".$row['v_address_pin_code']."</label></div> 
        <div class='sp'></div></br>
        <div class='info_size'> <label class='lab_info'>Date of Birth:</label>  <label id='dob' class='lab_info'>".$row['v_dob']."</label></br></div>
        <div class='info_size'> <label class='lab_info'>Gender:</label>      <label id='gender' class='lab_info'>".$row['v_gender']."</label></br></div> 
     </div>
</div>
</br>
		
<div class='box_a'>
   <div class='sp'></div>
   YOUR QR CODE</br><img src='".$qrcode."'>

<div>
</center>
</div>
</br>

<div class='btngroup'>
<button type='button' class='button' onclick='downloadPDF()'>Download PDF</button>
<input type='button' class='button' id='printButton' value='Print' />
</div>

</body>
</html>";
}
}



?>