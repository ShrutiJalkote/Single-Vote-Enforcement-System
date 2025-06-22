<?php
include("lock_admin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <style>
              
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
        .container {
            margin-top: 100px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .btn-open-camera {
            background-color: #4CAF50;
            color: white;
        }
        .btn-back {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>


<body>
<div class="nav">
      <nav>
     <img src="mylogo1.png">
      </nav>
</div>

<center>

    <div class="container">
        <h1>Welcome Admin</h1>
        <p>Choose an action:</p>
        <button class="btn btn-open-camera" onclick="openCamera()">Open Verification Camera</button>
        <button class="btn btn-open-camera" onclick="openCamera()()">Open Voting Scanner</button>
        <button class="btn btn-back" onclick="logOut()()">Logout</button>
    </div>

    </center>
    <script>
        function openCamera() {
            // Redirect to another page (e.g., camera page)
            window.location.href = "camera_scanner.php";
        }

        function logOut() {
            // Redirect to the previous page (if applicable)
            window.location.href = "admin_logout.php";
        }
    </script>
</body>
</html>
