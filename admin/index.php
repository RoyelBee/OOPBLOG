<?php 
	include "libs/DB.php";
	include 'functions/function.php';
  include 'includes/header.php';

	$db= new DB();

	$sql = "SELECT * FROM posts";
	$posts = $db->select($sql);


?>

<?php 

    $user_email = $_SESSION['email'];
    $query = "SELECT * FROM users where email= '$user_email'";
   $user = $db->select($query);

?>

<?php 
if (isset($_POST['delete'])) {
  $cid = $_POST['id'];
   $query = "DELETE FROM categorie WHERE id = '$cid'";
   $db->delete($query);
}
?>

<?php 
    if (!isset($_SESSION['email'])) {
      header('location: login.php');
    }else{
?>

<div>
  <?php $row = $user->fetch_array();?>
  <p style="text-align: right"><?php echo "Hello ".$row['name'];?></p>
</div>

<div class="container">           
  <table class="table table-dark table-hover">
  	<h2>Manage your posts</h2>
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $posts-> fetch_array()):?>
      
      <?php
        error_reporting(0);
        
        $sid = $sid +1;
      ?>

       
		<tr>
			<td><?php echo $sid?> </td>
			<td><?php echo $row['title']?> </td>
			<td><?php echo $row['author']?> </td>
			<td><?php echo formatDateTime($row['time'])?> </td>
			<td><a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete_post.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
		</tr>
		<?php endwhile; ?>
    </tbody>
  </table>
</div>


	
<!-- This table is for category -->
<?php 
	$query = "SELECT * FROM categories";
	$cats = $db->select($query);
?>

<div class="container">  
<form action="index.php" method="post" >        
  <table class="table table-dark table-hover">
  	<h2>Manage your posts</h2>
    <thead>
      <tr>
        <th>Category No</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php while ($cat = $cats-> fetch_array()) :?>
		<tr>
      

			<td><?php echo $cat['id']?> </td>
			<td><?php echo $cat['title']?> </td>
			<td><a href="edit_category.php?id=<?php echo $cat['id']?>"> Edit </a> 
        <a href="delete_category.php?id=<?php echo $cat['id'];?>" class="btn btn-danger">Delete</a>
      </td>
		</tr>
		<?php endwhile; ?>
      
    </tbody>
  </table>
  </form> 
</div>

<?php 
  }
?>

