<?php 
  $db= new DB();

  $sql = "SELECT * FROM posts ORDER BY id";
  $posts = $db->select($sql);

  $cat = "SELECT * FROM categories ORDER BY id";
  $Category = $db->select($cat);

  
?>


<aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic">Category</h4>
         <?php while ($result = $Category-> fetch_array()) :?>
          <ol class="list-unstyled mb-0">
            <li><a href="post_list.php?id=<?php echo $result['id']?>"><?php echo $result['title']?></a></li>
          </ol>
        <?php endwhile;?>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Recent Posts</h4>
        <?php while ($row = $posts-> fetch_array()) :?>
        <ol class="list-unstyled mb-0">
          <li><a href="single_post.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></li>
        </ol>
      <?php endwhile;?>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->