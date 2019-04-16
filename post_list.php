<?php 
  include "includes/header.php";
  include "libs/DB.php";
  include 'functions/function.php';
?>

<?php 
  $db= new DB();
  $cid = $_GET['id'];

  $sql = "SELECT * FROM posts WHERE category_id = '$cid'";
  $posts = $db->select($sql);

  
?>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
     <?php 
      if (empty($posts)) {
        echo "This category is empty !!";
      }else
          while ($row = $posts-> fetch_array()) :?>
            <ol class="list-unstyled mb-0">
               <li><a href="single_post.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></li>
            </ol>
          <?php endwhile;
    ?>
    

  


    </div><!-- /.blog-main -->

    <?php 
      include 'includes/sidebar.php';
    ?>

  </div><!-- /.row -->

</main><!-- /.container -->

<?php 
      include 'includes/footer.php';
?>