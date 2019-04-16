<?php 
  include "includes/header.php";
  include "libs/DB.php";
  include 'functions/function.php';
?>

<?php 
  $db= new DB();

  // deleting single posts 
  if (isset($_GET['id'])) {
  	$id = $_GET['id'];
  	$query = "DELETE FROM posts WHERE id = '$id'";

  	$db->delete($query);
  }

 
?>