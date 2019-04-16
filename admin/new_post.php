<?php 
	include 'includes/header.php';
	include "libs/DB.php";
	include 'functions/function.php';

	$db= new DB();

	$sql = "SELECT * FROM categories";
	$cat = $db->select($sql);	
?>
<?php 
    if (!isset($_SESSION['email'])) {
      header('location: login.php');
    }else{
?>

	<?php 
		if (isset($_POST['submit'])) {
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
			
				$sql = "INSERT INTO posts (category_id, title,content, author,image,tags)values ('$cat', '$title', '$content', '$author', '$image', '$tag')";

	    	$run =$db->insert($sql);
			}
		}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="new_post.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label>Title</label>
		    <input type="text" name="title" class="form-control" placeholder="">
		  </div>

		  <div class="form-group">
		    <label>Content</label>
		    <textarea class="form-control" name="content" rows="7"></textarea>
		  </div>

		  <div class="form-group">
		    <label>Category</label>
		  		<select class="form-control" name="category">
		  				<option value="0">Select Category</option>
		  				<?php while ($row = $cat-> fetch_array()) :?>
		  				<option <?php echo $row['id'];?>> <?php echo $row['title']; ?></option>
		  			<?php endwhile;?>
		  		</select>  
		  </div>

		  <div class="form-group">
		    <label>Author</label>
		    <input type="text" name="author" class="form-control" placeholder="">
		  </div>

		  <div class="form-group">
		    <label>Tag</label>
		    <input type="text" name="tag" class="form-control" placeholder="">
		  </div>

		  <div class="form-group">
		    <label>Image</label>
		    <input type="file" name="image"><br>
		  </div>
		  
		  
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>

	</body>
	</html>

	<?php 
		}
	?>