
<?php 
  include"includes/header.php";
  include "libs/DB.php";
  include 'functions/function.php';

  $db= new DB();
?>
<!DOCTYPE html>
<html>
<head>

  <title>Login</title>
 <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
  
      <div align = "center">
         <div style = "width:23%; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
        
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Email :</label>
                  <input type = "text" name = "email" class = "box"/><br /><br />

                  <label>Password  :</label>
                  <input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" name="login" value = " Login"/><br />

               </form>
               
          
            </div>
        
         </div>
      
      </div>

   </body>
</html>

<?php 
error_reporting(0);
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email= '$email' AND password = '$pass'";

    $user = $db->select($sql);
    $check = $user->num_rows;


    if ($check >0) {
      $_SESSION['email']= $email;

      echo "Login success";
      header("location: index.php" );
      
    }else{
      echo "<script> alert('Email or password is incorrect')</script>";
    }
  }
?>


