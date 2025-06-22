<?php
include('config.php');
$rand = rand(9999,1000);
if(isset($_REQUEST['login']))
{
  $captcha = $_REQUEST['captcha'];
  $captcharandom = $_REQUEST['captcha-rand'];

  if($captcha!=$captcharandom)
  {?>
    <script type="text/javascript">
      alert("Invalid captcha value");
    </script>
<?php
  }
  else
  {
     $select_query = mysqli_query($connection, "select * from voter_reg  where email='$email' and password='$pwd'");
     $result = mysqli_num_rows($select_query);
     if($result>0)
     {?>
      <script type="text/javascript">
        alert("Login success");
      </script>
     <?php }
     else
     {?>
      <script type="text/javascript">
        alert("Invalid email or password");
      </script>
    <?php }
  }
}
?>