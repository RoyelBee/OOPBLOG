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

  $sql = "SELECT * FROM categories";
  $cat = $db->select($sql); 
?>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
     
     <?php $row = $posts-> fetch_array(); ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']?></h2>
        <p class="blog-post-meta"><?php echo formatDateTime($row['time'])?> by <a href="#"><?php echo $row['author'];?></a></p>

         <p>
          <img src="admin/images/<?php echo $row['image'] ?> ">
          <p class="content">
            <?php echo $row['content']?>
            <!-- <a class="readmore" href="single_post.php?id<?php echo $row['id']; ?> ">Read More</a> -->
          </p>
      </p>
        
       
      </div><!-- /.blog-post -->

  

      

      <!-- <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav> -->

    </div><!-- /.blog-main -->

    <?php 
      include 'includes/sidebar.php';
    ?>

  </div><!-- /.row -->

</main><!-- /.container -->

<?php 
      include 'includes/footer.php';
?>