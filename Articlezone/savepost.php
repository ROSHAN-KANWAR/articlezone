<?php
session_start();
if(isset($_SESSION['Uname'])){
?>

<?php
if(isset($_POST['post'])){
  include "./config.php";
$btitle=mysqli_escape_string($conn,$_REQUEST["B_title"]);
$filetemp=$_FILES['B_photo']['tmp_name'];
$filename=$_FILES['B_photo']['name'];
$bcate=mysqli_escape_string($conn,$_REQUEST["B_cate"]);
$bauth=mysqli_escape_string($conn,$_REQUEST["B_auth"]);
$bdate=date('Y-m-d h:i:s');
$bdesc=mysqli_escape_string($conn,$_REQUEST["B_desc"]);
$surl=strtolower($btitle);
$surl=str_replace(" ","-",$surl);
if(move_uploaded_file($filetemp,"Blogphoto/".$filename)){
$sql="INSERT INTO blogpost (B_photo,Bdesc,Btitle,add_on,B_auth,B_cate,slug_url) VALUES ('$filename','$bdesc','$btitle','$bdate','$bauth','$bcate','$surl')";
if(mysqli_query($conn,$sql)){

  header("Location:dashboard");
}
else{
  echo "Error occured".mysqli_error($conn);
}
}
else{
  echo "Could not  upload file ";
}

}



?>

<?php
}
else{


header("Location: login");
}
?>