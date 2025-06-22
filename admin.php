<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Page</title>
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
        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin: 10px;
        }
        #loginBtn {
            background-color: #4CAF50;
            color: white;
        }
        #registerBtn {
            background-color: #008CBA;
            color: white;
        }
        .box
        {
            width:300px;
            margin-top:30px;
            
           
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
    <div class="box">
    <h1>Welcome!</h1>
        <button id="loginBtn" class="button" onclick="window.location.href='login.php'">Login</button>
    <button id="registerBtn" class="button" onclick="window.location.href='register.php'">Register</button>
    </div>
    </div>

</body>
</html>
