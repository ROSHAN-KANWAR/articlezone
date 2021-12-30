
<?php
// $server="sql110.epizy.com";
// $username="epiz_30694683";
// $passw="9USoFBWjaK7jS";
// $dbname="epiz_30694683_blogdata";
$server="localhost";
$username='root';
$passw="";
$dbname="blogdata";
 $conn=mysqli_connect($server,$username,$passw,$dbname);
 if(!$conn){
     die("Connections failed".mysqli_connect_errno());
 }
?>