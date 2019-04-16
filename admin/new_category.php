<?php 
	include 'includes/header.php';
	include "libs/DB.php";
	include 'functions/function.php';

	$db= new DB();

?>
<?php 
    if (!isset($_SESSION['email'])) {
      header('location: login.php');
    }else{
?>

<?php 
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];

		if ($title == '') {
			echo "Title is empty ";
		}else{
		$sql ="INSERT INTO categories (title) VALUES ('$title')";
		$run = $db->insert($sql);
		}
	}
?>

<div class="container">
  <h2>Add New Category</h2> <hr>
  <form action="new_category.php" method="post">
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" placeholder="Enter Full title" name="title">
    </div>
     
     <button type="submit" name="submit" >Submit</button>

  </form>
</div>

<?php }?>