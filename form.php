<html>
<head>

<title>candidate form</title>

<link rel="stylesheet" type="text/css" href="form.css">


</head>
<body>
<form id="reg" action="insert.php" method="post">

<div class="nav">
      <nav>
     <img src="mylogo1.png">
      </nav>
</div>
  <center>


  <div class="space"></div>
  <h1>CANDIDATE REGISTRATION FORM</h1>
      <div class="box">
      <div class="space"></div>
      <div class="space"></div>
Name: <input type="text" name="name" id="name"> 
Father/Husband's Name:<input type="text" name="mname" id="mname">  
</br></br>
surname:<input type="text" name="sname" id="sname"> <br><br>

<label>Search Election Program</label>
Election Program  <select name="pgm" id="pgm">
  <option value="Please Select">Please Select</option>
  <option value="1165 Grampanchayat Member General Election Poll">1165 Grampanchayat Member General Election Poll</option>
  <option value="1165 Grampanchayat Sarpanch General Election Poll">1165 Grampanchayat Sarpanch General Election Poll</option>
  <option value="2361 Grampanchayat Member General Election Poll">2361 Grampanchayat Member General Election Poll</option>
  <option value="2361 Grampanchayat Sarpanch General Election Poll">2361 Grampanchayat Sarpanch General Election Poll</option>
  <option value="271 Grampanchayat General Election Poll">271 Grampanchayat General Election Poll</option>
  <option value="608 Grampanchayat Member General Election Poll">608 Grampanchayat Member General Election Poll</option>
  <option value="608 Grampanchayat Sarpanch General Election Poll">608 Grampanchayat Sarpanch General Election Poll</option>
  <option value="7751 Grampanchayat Member General Election Poll">7751 Grampanchayat Member General Election Poll</option>
  <option value="7751 Grampanchayat Sarpanch General Election Poll">7751 Grampanchayat Sarpanch General Election Poll</option>
  <option value="Dummy_Elecgp17102023">Dummy_Elecgp17102023</option>
  <option value="GP Waksai taluka Maval Dist Pune Member General Election Poll">GP Waksai taluka Maval Dist Pune Member General Election Poll</option>
  <option value="GP Waksai taluka Maval Dist Pune Sarpanch General Election Poll">GP Waksai taluka Maval Dist Pune Sarpanch General Election Poll</option>
</select><br><br>
Year:<input type="text" name="year" id="year">
Election Type:<input type="text" name="type" id="type"><br><br>
</div>


<div class="box_a">
  <div class="space"></div>
Local Body:<input type="text" name="body" id="body"><br><br>
Start Date:<input type="text" name="sdate" id="sdate">
End Date:<input type="text" name="edate" id="edate"><br><br>
Division:<input type="text" name="div" id="div">
District:<input type="text" name="dis" id="dis"><br><br>
Taluka:<input type="text" name="tal" id="tal"><br><br>
Ward No:<input type="text" name="ward" id="ward"><br><br>
</div>

<div class="box">
<div class="space"></div>
Reservation category:<input type="text" name="res" id="res"><br><br>
Choose Your User Name:<input type="text" name="user" id="user">
Mobile No:<input type="text" name="phno" id="phno"><br><br>
Password:<input type="password" name="pass" id="pass">
Confirm Password:<input type="password" name="pass" id="pass" ><br><br>
Enter Captcha:<input type="text" name="cap" id="cap"></br></br>
<input type="submit" value="submit">
</div>
</center>
</form>
</body>
</html>