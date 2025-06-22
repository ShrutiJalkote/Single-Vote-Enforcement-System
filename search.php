<html>
<?php
require_once 'config.php';
require_once 'phpqrcode/qrlib.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$m=$_POST['adharno'];
$path = 'images/';
$qrcode = $path.time().".png";
$qrimage = time().".png";
QRcode :: png($m, $qrcode, 'H', 4, 4);
echo "<img src='".$qrcode."'>";
}
?>
</html>