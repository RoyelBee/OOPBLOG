<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="styles/style.css">


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="new_post.php">New Post</a></li>
      <li><a href="new_category.php">New Category</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"> View Post </a></li>
      <?php if (isset($_SESSION['email'])) {
        echo '<li><a href="logout.php"> Logout</a></li>';
      }else{
       echo '<li><a href="login.php"> Login</a></li>';
      }
      ?>
      
    </ul>
  </div>
</nav>
  