<?php
session_start();
if(isset($_SESSION['Uname'])){
?>

<?php
  include "config.php";
  if(empty($_FILES['B_photo']['name'])){
    $filename=$_POST['oldphoto'];
  }
  else{
$errors=array();
$filename=$_FILES['B_photo']['name'];
$filesize=$_FILES['B_photo']['size'];
$filetemp=$_FILES['B_photo']['tmp_name'];
$filetype=$_FILES['B_photo']['type'];
$fileext=end(explode('.',$filename));
$exten=array("jpeg","jpg","png","JPG");
if(in_array($fileext,$exten)==false){
    $errors[]="this extentions not allowed";
    echo $errors;
}
if($filesize>2097152){
    $errors[]="file size 2md";
}
if(empty($errors)==true){
    move_uploaded_file($filetemp,"Blogphoto/".$filename);
}
else{
    print_r($errors);
    die();
}
  }

  $id=$_REQUEST['id'];
$btitle=mysqli_escape_string($conn,$_REQUEST["B_title"]);
$bcate=mysqli_escape_string($conn,$_REQUEST["B_cate"]);
$bdesc=mysqli_escape_string($conn,$_REQUEST["B_desc"]);
$sql="UPDATE  blogpost SET B_photo='$filename',Bdesc='$bdesc',Btitle='$btitle',B_cate='$bcate' WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: dashboard.php");

}
  else{
      echo "Error";
  }





?>

<?php
}
else{


header("Location: login");
}
?>