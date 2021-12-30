<?php
session_start();
if(isset($_SESSION['Uname'])){
?>

<?php
 include 'config.php';
 session_start();
 session_unset();
 session_destroy();
 header("Location: login");
 

?>  <?php
}
else{


header("Location: login");
}
?>