<html>  
<head>  
    <title>Login Form</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
</head>
<style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 .captcha
{
  width: 50%;
  background: yellow;
  text-align: center;
  font-size: 24px;
  font-weight: 700;
} 
</style>
<?php
$rand = rand(9999,1000);
?>
<body>  
    <div class="container">  
    <div class="table-responsive">  
    <h3 align="center">Login Form</h3><br/>
     <div class="box">
     <form id="validate_form" method="post" >
     <div class="col-md-6 form-group">
       <label for="captcha">Captcha</label>
       <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha" required class="form-control"/>
       <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">
     </div>
     <div class="col-md-6 form-group">
       <label for="captcha-code">Captcha Code</label>
       <div class="captcha"><?php echo $rand; ?></div>
     </div>
      <div class="form-group">
       <input type="submit" id="login" name="login" value="LogIn" class="btn btn-success"/>
      </div>
     </form>
     </div>
   </div>  
  </div>
 </body>  
</html>

<label for="captcha">Captcha</label>
       <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha"/>
       <input type="hidden" name="captcha-rand" value="<?php echo $rand() ?>">

       <label for="captcha-code">Captcha Code</label>
       <div class="captcha"><?php echo $rand() ?></div>