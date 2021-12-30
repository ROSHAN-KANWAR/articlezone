
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
                    $con=mysqli_connect("localhost","root","","blogdata");
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
        