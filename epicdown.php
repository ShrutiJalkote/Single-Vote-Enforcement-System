<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            padding-top: 70px;
            font-family: Arial, sans-serif; /* Added font-family for better readability */
        }
        .nav {
            width: 100%;
            height: 70px; /* Changed height to match the height of the image */
            background-color: #24C2B7;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999; /* Added z-index to ensure the nav is on top */
        }
        .nav img {
            width: 150px;
            height: auto; /* Changed height to auto to maintain aspect ratio */
            padding: 10px 30px; /* Adjusted padding */
        }
        form {
            margin-top: 100px; /* Adjusted margin-top to create space below the nav */
        }
        form center {
            margin-top: 20px; /* Adjusted margin-top for center alignment */
        }
        input[type="text"] {
            padding: 8px; /* Adjusted padding for text input */
            margin-bottom: 10px; /* Added margin-bottom for spacing */
        }
        button {
            padding: 10px 20px; /* Adjusted padding for button */
            background-color: #24C2B7; /* Matched button color with nav */
            color: #fff; /* Changed text color to white */
            border: none;
			border-radius:8px;
            cursor: pointer;
        }
        button:hover {
			background:#080830;
    cursor: pointer;
        }
    </style>
</head>
<body>

<div class="nav">
    <nav>
        <img src="mylogo1.png" alt="Logo">
    </nav>
</div>

<form action="" method="POST">
    <center>
        <h3>Download EPIC Card.</h3><br>
       Enter Aadhar no: <input type="text" name="aadharno"><br><br>
        <button type="submit" name="search">Submit</button>
        <button type="submit" name="back"><a href="home4.php" style="text-decoration: none; color: white;">Back</a></button><br><br>

    </center>
</form>

</body>
</html>




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
    body
    {
        margin: 0%;
        padding: 0%;
        padding-top: 70px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
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
    .space
    {
        height:20px;
        weight:4px;
    }
    .box_a
    {
        
        border-style: solid;
        border-width: 2px;
        height: 250px;
        width:450px;
        align-items: center;
    }
    .info
    {
      margin-right: 250px;
      height: 120px;
      width: 120px;
     align-content: center;
    
      
    }
    .info_size
    {
        margin-right: 300px;
        width:260px;
        height: 20px;
        text-align: left;
    }
    .sp
    {
        width:260px;
        height: 2px;
    
    }
    .lab_info
    {
        font-size: small;
    }
    .head
    {
        width: 400px;
        height: 40px;
        text-align: center;
    }
    .photo
    {
    width: 100px;
    height: 100px;
    margin-left: 200px;
    }
    .button
    {
        width: 120px;
        height: 40px;
        background-color: #24C2B7;
        border-style:inset;
        border-radius: 10px;
        color:black;
        
    }
   
    .btngroup
    {
         height: 50px;
         margin-bottom:50px;
    }
    .qrcode
    {
        margin-right:50px;
        height:130px;
        width:150px;
    }
    .qrimg
    {
        height:150px;
        width:150px;
        padding-right:30px;
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
            <img class='photo' src='" . $row['v_photo_file'] . "' height='100px' width='80px'>		</div>
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
     </div
</div>
</br>
		
<div class='box_a'>
               <div class='sp'></div>
               <h3>YOUR QR CODE</h3><div class='qrcode'><img img class='qrimg' src='".$qrcode."'></div>
 <div>
</center>
</div>
</br>

<div class='btngroup'>
<input type='button' class='button' onclick='downloadPDF()' value='Download PDF'/>
<input type='button' class='button' id='printButton' value='Print' />
</div>

</body>
</html>";
}
}

?>
