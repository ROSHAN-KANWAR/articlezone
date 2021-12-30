
    <?php include 'includes/header.php'; ?>
    <!-- navbar coding -->
<!-- blogdeatil -->
<div class="container detail">
   
        <?php
          include "./config.php";
     $slug= mysqli_real_escape_string($conn, $_REQUEST['slugs'] );
  $sql="SELECT * FROM blogpost WHERE slug_url='{$slug}'";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
        $row=mysqli_fetch_assoc($result3); 
        ?>
         <div class="urlpath mt-4">
    <a href="index">Home</a><span>>></span><a href="blog">Blog</a><span>>></span><p><?php   echo $row["Btitle"]; ?></p>
    </div>
    <div class="row mt-3">
            <div class=" col-lg-12 col-md-12 col-10  d-block m-auto mt-4 ">
                <div class="full">
                    <h4 class=""><?php   echo $row["Btitle"]; ?></h4>
                  
                    <img src="<?php echo "Blogphoto/". $row["B_photo"];?>" alt="blog photo"
                        class=" img-responsive img-fluid  rounded-start mt-5" >
                        <p class="mt-5" style="text-align: justify;"><?php echo $row["Bdesc"]; ?></p>
 
                    </div>

            </div>
            <div class="col-md-6 d-block m-auto bg-light text-center p-3">
                    <p style="">Post By : <em><?php   echo $row["B_auth"]; ?></em></p>
        
                    <p style=" margin-left: 20px; ">Date : <?php   echo $row["add_on"]; ?></p>
                </div>
            <?php
  } 
  else{
      echo "<h2 class='text-center text-danger>No record found</h2>";
  }
            ?>
        </div>
</div>
        <!-- blog deatail -->
    <!-- popukat coding -->
<div class="container">
    <div class="row">
        <div class="col-md-10 m d-block m-auto">
</div>
     <div class="row">
            <div class=" col-lg-12 col-md-10 col-10  d-block m-auto mt-4">
            <?php       
         $c1= $_REQUEST['cate'];
 echo "<h2>Related $c1 Blog </h2>"
            ?> 

                <!-- one sections -->
                <div class="row ">
                    <!-- blog -->
                    <?php
                   
  include "./config.php";
  $c= $_REQUEST['cate'];
  $sql="SELECT * FROM blogpost WHERE B_cate='{$c}'";
  $result3=mysqli_query($conn,$sql) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
      while($row=mysqli_fetch_assoc($result3)){
?>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">  <h5 class="card-title"><?php   echo $row["Btitle"]; ?></h5></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="blogdetail/<?php echo $row["B_cate"];?>/<?php echo $row["slug_url"];?>" target="_parent" class="login btn ">Read More</a>
      </a>
    </div>
    </div>
  </div>        
      
      <?php
    }
    }
    else{
    echo '<h2>No record are added ?</h2>';
    }?>
                    <!-- blog -->
                    
                </div>
            </div>
            <!--  popblog -->
        </div>
    </div>
    <!-- importNT LINKs -->
    <div class="row mt-5">
        <h2 class="text-center">Important Links</h2>
        <div class="col-10 imp d-block m-auto">
            1. <a href="#">Learn what digital marketing is and how it works</a>
            <br> <br>
            2. <a href="#">Want To Understand What Is SEO And How It Works?</a>
            <br> <br>
            4. <a href="#">The Top 7 Digital Marketing Mistakes To Avoid When Starting</a>
            <br> <br>
            5. <a href="#">How Digital Marketing Helps to Grow Your Business</a>
            <br> <br>
            6. <a href="#">20 Must-have digital marketing tools to help you grow</a>
            <br> <br>
            8. <a href="#">10 essential tools for digital marketing</a>
            <br> <br>

            3. <a href="#">Top 10 Digital Marketing Agencies in India.</a>
            <br> <br>
            4. <a href="#">Digital marketing strategy</a>
        </div>

    </div>
    </div>
    </div>
    <!-- importNT LINKs -->
    <!-- blog card -->

    
    <?php include 'includes/footer.php'; ?>
    <!-- footers details -->

</body>

</html>