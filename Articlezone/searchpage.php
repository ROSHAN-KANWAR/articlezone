<?php
session_start();
?>
    <?php include 'includes/header.php'; ?>
    <!-- navbar coding -->

<div class="container">
    <div class="row mt-3">
    <div class="urlpath">
    <a href="index">Home</a><span>>></span><a href="blog">Blog</a><span>>></span>
    </div>
    <h2>Search blog....</h2>
    
        <div class="col-md-8 d-block m-auto mt-4">
        <?php
  include "./config.php";
  $sarch=  $_REQUEST['search'] ;
  $sql="SELECT * FROM blogpost WHERE Btitle LIKE '%$sarch%'";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
   while($row=mysqli_fetch_assoc($result3)){
?>
        <div class="card mb-3" style="max-width: 640px;">
  <div class="row g-0">
    <div class="col-md-4">
   
      <img src="<?php echo "Blogphoto/". $row["B_photo"];?>"  class="img-fluid rounded-start" alt="...">
  
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a href="blogdetail/<?php echo $row["B_cate"];?>/<?php echo $row["slug_url"];?>" target="_parent" style="text-decoration: none;">
        <h5 class="card-title"><?php   echo $row["Btitle"]; ?></h5>
      </a>

        <p class="card-text"><small class="text-muted">Publish date <?php   echo $row["add_on"]; ?></small></p>
      </div>
    </div>
  </div>
</div>
<?php }
  }
  else{
    echo '<h3 class=" text-center text-danger"> No record forund ???</h3>';
    
  }

?>
        </div>
    </div>
</div>
</div>
    
    <?php include_once('includes/footer.php'); ?>
    <!-- footers details -->

</body>

</html>