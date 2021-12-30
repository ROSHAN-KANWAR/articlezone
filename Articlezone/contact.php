<?php
session_start();
?>

    <?php include 'includes/header.php'; ?>

    <!-- navbar coding -->
    <!-- contactus -->
    <div class="container">
 
        <div class="row ">
        <div class="urlpath">
    <a href="index">Home</a><span>>></span><a href="blog">Blog</a><span>>></span>
    </div>
            <?php
            $msg = "";
            if(isset($_GET['error']))
            {
      $msg="Please fill the contact detail";
      echo "<div class='alert alert-danger text-center'>$msg
      
      </div>";
            } 
            if(isset($_GET['success']))
            {
      $msg1="Record Saved Successfully!!!!";
      echo "<div class='alert alert-success text-center'>$msg1</div>";
            } 
            
            ?>
            
<?php
                if(isset($_POST["btnsend"]))
                {
                  $usrname=$_POST["txtname"];
                  $usremail=$_POST["txtemail"];
                  $usrmsg=$_POST["txtmsg"];
                  if(empty($usrname) || empty($usremail) || empty($usrmsg))
                  {
                      header("Location:contact.php?error");
                  }
                  else{
                    include 'config.php';
                    $qry="INSERT INTO contdb (uname, uemail, umsg) VALUES ('$usrname', '$usremail', '$usrmsg')";
                    if(mysqli_query($con, $qry)){
                        header("Location:contact.php?success");
                    }
                    else
                    {
                      echo"Error Occurred ".mysqli_error($con);
                    } 
                  }
                }
                ?>
        
            <h2 class="  text-center mt-2">Contact</h2>
            <p class="  text-center para">When it comes to marketing, products are only half the story. The other half
                is how you present your product in a way that engages your audience. Blog content is what drives traffic
                to your website - without it, you're not going to be able to sell anything.
                Topic: How to Sell Your Products Online With Ecommerce Website Templates
                tone: professional</p>
            <div class="col-md-6 col-10 d-block m-auto mt-3">
                <form name="userinfo " action="savecontact.php" method="POST" >
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">Name</label>
                        <input type="text" id="form4Example1" class="form-control" name="txtname"
                            placeholder="Enter your name"  />
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example2">Email address</label>
                        <input type="email" id="form4Example2" name="txtemail" class="form-control"
                            placeholder="Enter valid email"  />

                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">Message</label>
                        <textarea class="form-control" id="form4Example3"  name="txtmsg" rows="4"></textarea>
                    </div>
                    <!-- Submit button -->
                    <button  class=" login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"
                        name="btnsend">Send</button>
                </form>
            </div>
            <div class="col-md-6 bg-light mt-3 text-center p-2">
                <h2 style=" color:rgb(33, 125, 231)">Startzone : Web Developers Team</h2>
                <p>StarZone is a premier Digital Agency that provides businesses in and around Columbus, OH and beyond
                    with services like YouTube Management, Instagram Management, Content Creation, Social Media
                    Management.</p>
                <p>Address : Korba</p>
                <p>Contact : +91.1234567890</p>
                <p>Open : 24/7</p>
            </div>
        </div>
        <!-- 
other links -->
        <div class="row mt-5">

        </div>
        <!-- 
other links -->
    </div>
    <!-- contactus -->
    <!-- footer -->


    <?php include 'includes/footer.php'; ?>
    <!-- footers details -->
  
</body>

</html>
