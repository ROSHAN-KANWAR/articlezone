<?php
session_start();
?>
    <?php include 'includes/header.php'; ?>
    <!-- navbar coding -->
    <div class="container mt-5">
        <!-- search -->
        <div class="row">
            <div class=" col-md-10 col-12 d-block m-auto">
        
                <form action="<?php $_SERVER['PHP_SELF'] ; ?>" method="GET" autocomplete="off">
                    <div class="input-group rounded">
                        <input type="search" name="search" class="form-control rounded "
                            placeholder="Search your blog...." aria-label="Search" aria-describedby="search-addon" />
                            <button id="search-button" type="submit" name="btnsh" class="btn login">
                                <i class="fas fa-search"></i>
                            </button>

                            </div>
             

                </form>

            </div>
        </div>
            <!-- search -->
    </div>
    <!-- blogsections -->

    <!-- blog card -->
    <div class="container mb-4 mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                    <!-- carditems -->
                    <?php
  include "./config.php";
if(isset($_REQUEST['btnsh'])){
    $bsr=$_REQUEST['search'];
  $sql="SELECT * FROM blogpost WHERE Btitle LIKE '%$bsr%'";
  
}
else{
    $sql="SELECT * FROM blogpost ORDER BY id DESC";
}

  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
 
      while($row=mysqli_fetch_assoc($result3)){
?>
         <div class="col">
    <div class="card h-100 blogcolor">
            
                            <a href="blogdetail/<?php echo $row["B_cate"];?>/<?php echo $row["slug_url"];?>" target="_parent">
                                <img src="<?php echo "Blogphoto/". $row["B_photo"];?>" class="card-img-top img-fluid " alt="blog image" style="height: 200px;">
                            </a>
                            <div class="card-body ">
                                <a href="blogdetail/<?php echo $row["B_cate"];?>/<?php echo $row["slug_url"];?>" target="_parent" style="text-decoration: none;color:black">
                                    <h5 class="card-title "><?php   echo $row["Btitle"]; ?></h5>
                                </a>
                            </div>
                        </div>
        </div>

        <?php } ?>
   <?php }
   else{
      echo '<h3 class=" text-center text-danger"> No record forund ???</h3>';
      
   }

   ?>

        <!-- carditems -->
    </div>
      <div class="row mt-5">
        <div class="col-md-10 col-10 d-block m-auto pagi">
      
  <ul class="pagination pagination-sm justify-content-center" id="nav">
  <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>  
  <li class="page-item active" aria-current="page" id="li">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>  
</div>
      </div>
    </div>
      
    <!-- blog card -->
    <!-- footer -->

    <?php include 'includes/footer.php'; ?>
    <!-- footers details -->
</body>

</html>