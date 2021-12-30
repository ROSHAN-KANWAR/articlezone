<?php
session_start();
if(isset($_SESSION['Uname'])){
?>
 <?php include 'includes/header.php';?>
  <div class="container">
  <a href="logout.php"  class=" bg-danger p-1 rounded-2 "><i class=" fas fa-sign-out-alt fa-3 text-white mt-3"></i></a>     
<?php if($_SESSION["Utype"]=="admin"){
  ?>
    <h3 class='text-center fw-bolder mt-2'>Admin Dashboard</h3>
<div class="row  mt-3 p-3">
    <div class="col-md-12 d-block m-auto ">
  <ul class="nav nav-pills mb-3 bg-light" id="pills-tab" role="tablist">

  <li class="nav-item" role="presentation" >
      <button class="nav-link active  fw-bolder" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Post</button>
    </li>

    <li class="nav-item" role="presentation">
   <button class="nav-link fw-bolder" id="pills-add-tab" data-bs-toggle="pill" data-bs-target="#pills-add" type="button" role="tab" aria-controls="pills-add" aria-selected="false">Add</button> 
  </li>
  </ul>
 
  <div class="tab-content" id="pills-tabContent">
 
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <?php include 'dash/allpost.php'; ?>
   </div> 
   <div class="tab-pane fade" id="pills-add" role="tabpanel" aria-labelledby="pills-add-tab">
    <!-- addpost -->
    <div class="container">
      <div class="row  mb-4">
        <h2 class=" text-center p-1">Add Blog post</h2>
          <div class="col-md-10 d-block m-auto p-2">  
<form class=" mt-3" method="post" action="savepost.php" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="form-outline mb-3">
              <label class="form-label" for="formtitle">Blog Tilte</label>
              <input type="text" name="B_title" id="formtitle" class="form-control" required/>
            </div>
          </div>
        <!-- titit; -->
        <div class="col-md-12">
        <div class="input-group mb-3">
          <label class="input-group-text" for="fileup">Upload</label>
          <input type="file" class="form-control"  accept="image/*"  name="B_photo" required 
               />
        </div>
        
        </div>
      <!-- file -->
      <div class="col-md-6 mb-3">
        <label class="form-label" for="form6Example1">Choose Category</label>
        <select class="form-select" name="B_cate" aria-label="Default select example" required>
          <option selected disabled>Choose category</option>
          <?php
  include "config.php"; 
  $sqlc="SELECT * FROM category";
  $resultc=mysqli_query($conn,$sqlc) or die("failed");
  $numc= mysqli_num_rows($resultc);
  if($numc>0){
    while($rowc=mysqli_fetch_assoc($resultc)){
        echo '<option value="'.$rowc["c_name"].'">'.$rowc["c_name"].'</option>';
    }
  }
    ?>
        </select>
      </div>
        <!-- cate or date-->
        <div class="col-md-6">
          <div class="form-outline  mb-3">
            <label class=" form-label" for="wr">Witer Name </label>
            <input type="text" class="form-control" id="wr" name="B_auth" required>
          </div>
          </div>
      <!-- writer -->
      <div class="col-md-12">
   
      <textarea class=" form-control" name="B_desc" id="editor" cols="30" rows="10"></textarea>
        </div>
   
        </div>
        <!-- Submit button -->
        <button type="submit" name="post" class="btn btn-primary mt-4 btn-block d-block col-4 m-auto mb-4">Post</button>
      </form>
    
          </div>
      </div>
  </div>


    <!-- addpost -->
   </div> 
  </div>
    </div>
   </div>
  </div>
<?php
} 
  ?>



 <?php include 'includes/footer.php'; ?>

<?php
}
else{


header("Location: login");
}
?>