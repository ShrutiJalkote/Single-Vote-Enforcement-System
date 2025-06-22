<html>
<head>
</head>
<body bgcolor="powderblue">
<center>
<h1>Card</h1></br></br>
</center>
</body>
</html>

<?php
include('phpqrcode/qrlib.php');
require_once('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['adharno'])) 
    {
      $pname = $_POST['adharno'];
    }
$query="insert into voter.voter_reg(v_aadhaar_no) values ('$pname')";
if($query==true)
{
$path = 'images/';
$file = $path.uniqid().".png";
$ecc = 'L';
$pixel_Size = 10;
$frame_Size = 10;
QRcode::png($pname,$file,$ecc,$pixel_Size,$frame_Size);
}
else{
    echo"not".mysql_error();
}
}
?>