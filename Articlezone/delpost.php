<?php
session_start();
if(isset($_SESSION['Uname'])){
?>

<?php
  include "config.php";
  $id=$_GET['pid'];
  $sql="DELETE FROM blogpost WHERE id={$id}";
  mysqli_query($conn,$sql);
  header("Location: dashboard.php");
?>   <?php
}
else{


header("Location: login");
}
?>