<?php
session_start();
if(isset($_SESSION['Uname'])){
?>

    <?php include 'includes/header.php';
    ?>
  <div class="container">
      
<?php if($_SESSION["Utype"]=="admin"){
    echo " 
    <h3 class='text-center fw-bolder mt-4'>Admin Dashboard</h3>";
} 
else{
    echo " 
    <h3 class='text-center fw-bolder mt-4'>User Dashboard</h3>";   
}
?>

  </div>

<!-- update data -->
<div class="container">
<a href="dashboard" class=" btn btn-warning mb-3">Dashboard</a>
    <div class="row bg-light mb-5"> 
    <h2 class=" text-center p-1">Update Blog post</h2>
        <div class="col-md-8 d-block m-auto">
        <?php
     $bid=  $_REQUEST['pid'] ;
  include "./config.php";
  $sql="SELECT * FROM blogpost WHERE id='{$bid}'";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
        $row=mysqli_fetch_assoc($result3); 
        ?>
<form class=" mt-3" method="post" action="saveuppost.php" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="form-outline mb-3">
              <label class="form-label" for="formtitle">Blog Tilte</label>
              <input type="text" value="<?php   echo $row["Btitle"]; ?>" name="B_title" id="formtitle" class="form-control" />
            </div>
          </div>
          <input type="hidden" id="form3Example11" name="id" value="<?php   echo $row["id"]; ?>"
                                                    class="form-control" />
                                     
        <!-- titit; -->
        <div class="col-md-12">
        <div class="input-group mb-3">
          <label class="input-group-text" for="fileup">Upload</label>
          <input type="file" class="form-control" name="B_photo">
    
        </div>
        <label for="" class="form-label">Old image..</label>
        <img src="Blogphoto/<?php   echo $row["B_photo"]; ?>" height="80px"  alt="">
        <input  name="oldphoto" type="hidden" value="<?php   echo $row["B_photo"]; ?>">
        </div>
      <!-- file -->
      <div class="col-md-6 mb-3">
        <label class="form-label" for="form6Example1">Choose Category</label>
        <select class="form-select" name="B_cate" aria-label="Default select example">
        <option selected>Choose category</option>
        <?php
  include "config.php"; 
  $sqlc="SELECT * FROM category ";
  $resultc=mysqli_query($conn,$sqlc) or die("failed");
  $numc= mysqli_num_rows($resultc);
  if($numc>0){
  echo '<option value="'.$row["B_cate"].'" selected>'.$row["B_cate"].'</option>';
    while($rowc=mysqli_fetch_assoc($resultc)){
        echo '<option value="'.$rowc["c_name"].'">'.$rowc["c_name"].'</option>';
    }
  }
    ?>
       

        </select>
      </div>
   

        <!-- cate or date-->
       
      <!-- writer -->
      <div class="col-md-12">
        <div class="form-outline  mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
      <textarea class="form-control" name="B_desc" id="editor"  rows="5">
      <?php   echo $row["Bdesc"]; ?>
      </textarea>
        </div>
        </div>
        </div>
        <!-- Submit button -->
        <button type="submit" name="uppost" class="btn btn-primary mt-4 btn-block d-block col-4 m-auto mb-4">Post</button>
      </form>
      <?php
    }
    else{
        echo "<h1 class=' text-danger'>No record</h1>";
    }
    ?>
      </div>
    </div>
</div>

<!-- update data -->
<?php include 'includes/footer.php'; ?>
</body>

</html>
<?php
}
else{


header("Location: login");
}
?>