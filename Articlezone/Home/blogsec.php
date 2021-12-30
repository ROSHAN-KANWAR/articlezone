       <?php
  include "./config.php";
  $sql3="SELECT * FROM blogpost ORDER BY id DESC LIMIT 6";
  $result3=mysqli_query($conn,$sql3) or die("failed");
  $num= mysqli_num_rows($result3);
  if($num>0){
 while($row=mysqli_fetch_assoc($result3)){
     ?>
          <div class="col">
    <div class="card h-100  blogcolor ">
                
                <a href="blogdetail/<?php echo $row["B_cate"];?>/<?php echo $row["slug_url"];?>" target="_parent">
                        <img src="<?php echo "Blogphoto/". $row["B_photo"];?>"class="card-img-top" alt="blog images"  style="height: 200px;">
                            </a>
          <div class="card-body">
          <a href="blogdetail/<?php echo $row["B_cate"];?>/<?php echo $row["slug_url"];?>" target="_parent" style="text-decoration: none; color:black">
                                    <h4><?php   echo $row["Btitle"]; ?></h4>
                                </a>
          </div>
</div>

  </div>
                
              
               
                <?php } }?>
              
       