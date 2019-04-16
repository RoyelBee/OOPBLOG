<?php 
  include "includes/header.php";
  include "libs/DB.php";
  include 'functions/function.php';
?>

<?php 
  $cid = $_GET['id'];
  $db= new DB();
 

    $query = "SELECT * FROM categories WHERE id = '$cid'";
	$cat = $db->select($query);
	$single = $cat->fetch_array();
?>

<?php 
	if (isset($_POST['update'])) {
		$title = $_POST['title'];

		if ($title =='') {
			echo "Please fill title fields";
		}else{
			 $updatequery = "UPDATE categories SET title = '$title' where id = '$cid'";


    	$run =$db->update($updatequery);
    	
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="edit_category.php?id= <?php echo $cid;?>" method="post">
	  <div class="form-group">
	    <label>Title</label>
	    <input type="text" name="title" class="form-control" value="<?php echo $single['title'];?>">

	  </div>
	  <button type="submit" name="update" class="btn btn-primary">Update</button>
	  <a href="index.php" class="btn btn-danger">Cancel</a>
	  <a href="delete_category.php?id=<?php echo $cid;?>" class="btn btn-danger">Delete</a>
</form>

</body>
</html>