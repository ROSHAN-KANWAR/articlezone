
      <?php
  include "./config.php";
  $sql3="SELECT * FROM blogpost ORDER BY id DESC";
  $result3=mysqli_query($conn,$sql3) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
?>

<div class="table-responsive">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sno.</th>
            <th scope="col">Title</th>
            
            <th scope="col">Auther</th>
            <th scope="col">Date</th>
            <?php 
            if($_SESSION["Utype"]=="admin"){
  echo '
  <th scope="col">Edit</th>
  <th scope="col">Trash</th>
 ';
} 
else{
  echo ' <th scope="col">Edit</th>';   
}
?>
          </tr>
        </thead>
        <tbody>
        <?php 
         while($row=mysqli_fetch_assoc($result3)){
?>
         <tr>
            <td scope='row'><?php   echo $row["id"]; ?></td>
            <td scope='row'><?php   echo $row["Btitle"]; ?></td>
            <td scope='row'><?php   echo $row["B_auth"]; ?></td>
            <td scope='row'><?php   echo $row["add_on"]; ?></td>
            <?php 
            if($_SESSION["Utype"]=="admin"){
  echo '<td scope="row">
  <a href="updatepost.php?pid='.$row['id'].'"><i class="fas fa-edit fa-3 text-primary"></i></a>
</td>
<td scope="row">
<a href="delpost.php?pid='.$row['id'].'"><i class=" fas fa-trash fa-3 text-danger"></i></a>
</td>
 ';
} 
else{
  echo  '<td scope="row">
  <a href="updatepost.php?pid='.$row['id'].'"><i class="fas fa-edit fa-3 text-primary"></i></a>
</td>
 ';
}
?>
          </tr>
          <?php }?>
        </tbody>
      </table>
      </div>
<?php 
}
?>
   
   <ul class="pagination pagination-sm justify-content-center" id="nav">
  <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>  
  <li class="page-item active" aria-current="page" id="li">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>  