
<?php
                                      if(isset($_REQUEST["logbtn"])){
                                        include "config.php";
                                        $usrname=mysqli_real_escape_string($conn,$_REQUEST["usernames"]);
                                        $logpass= md5($_REQUEST["lopass"]);
                                        $sql2="SELECT * FROM reguser WHERE Uname='{$usrname}' AND rpass='{$logpass}'";
                                        $result2=mysqli_query($conn,$sql2) or die("failed");
                                        if(mysqli_affected_rows($conn)>0){
                                         while($row1=mysqli_fetch_assoc($result2)){
                                            session_start();  
                                            $_SESSION['Utype']=$row1['Utype'];
                                               $_SESSION['fname']=$row1['fname'];
                                               $_SESSION['regemail']=$row1['regemail'];
                                               $_SESSION['Uname']=$row1['Uname'];
                                               header("Location: dashboard");
                                         }
                                           }
                                           else{
                                             header("Location: login");
                                           }
                                        }
                                    ?>
                                  
