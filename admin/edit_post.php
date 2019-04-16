<?php 
  include "includes/header.php";
  include "libs/DB.php";
  include 'functions/function.php';
?>

<?php 
  $id = $_GET['id'];
  $db= new DB();
  
  $sql = "SELECT * FROM posts WHERE id = '$id' ";
  $posts = $db->select($sql);
  $single = $posts->fetch_array();

  $query = "SELECT * FROM categories ";
	$cat = $db->select($query);	
?>

<?php 
	if (isset($_POST['update'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$cat = $_POST['category'];
		$author = $_POST['author'];
		$tag = $_POST['tag'];

		// Creating variable for image 
		$image= $_FILES['image']['name'];


		if ($title =='' || $content =='' || $cat =='' || $author =='' || $tag =='') {
			echo "Please fill all fields";
		}else{
			 move_uploaded_file($_FILES['image']['tmp_name'], "images/$image");
		
			$updatequery = "UPDATE posts SET category_id= '$cat', title = '$title', content = '$content', author = '$author', image = '$image',tags = '$tag' where id = '$id'";


    	$run =$db->update($updatequery);
    	unlink("images/".$single['image']);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="edit_post.php?id= <?php echo $id;?>" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  	<input type="hidden" name="id">
	    <label>Title</label>
	    <input type="text" name="title" class="form-control" value="<?php echo $single['title'];?>">
	  </div>

	  <div class="form-group">
	    <label>Content</label>
	    <textarea class="form-control" name="content" rows="7"> <?php echo $single['content'];?></textarea>
	  </div>

	<div class="form-group">
	    <label>Category</label>
	  		<select class="form-control" name="category">
	  				<option value="0">Select Category</option>
	  				<?php while ($row = $cat-> fetch_array()) :?>
	  				<option value=" <?php echo $row['id'];?>"> <?php echo $row['title']; ?> </option>
	  			<?php endwhile;?>
	  		</select>  
	  </div> 

	  <div class="form-group">
	    <label>Author</label>
	    <input type="text" name="author" class="form-control" value="<?php echo $single['author']; ?> ">
	  </div>

	  <div class="form-group">
	    <label>Tag</label>
	    <input type="text" name="tag" class="form-control" value="<?php echo $single['tags']; ?>">
	  </div>

	  <div class="form-group">
	    <label>Image</label>
	    <input type="file" name="image"><br>
	     <img src="images/<?php echo $single['image']?>" height= "100" width = "100">
	  </div>
	  
	  
	  <button type="submit" name="update" class="btn btn-primary">Update</button>
	  <a href="index.php" class="btn btn-success">Cancel</a>
	  <a href="Delete_post.php?id=<?php echo $id;?>" class="btn btn-danger">Delete</a>

</form>

</body>
</html>