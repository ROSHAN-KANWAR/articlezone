
<?php 
 $page= basename($_SERVER['PHP_SELF']);
 switch($page){
     case 'dashboard.php':
        $title= "Admin Dashboard page";
    case "searchpage.php":
        $title= "Blog search page";
        break;
     case "index.php":
      $title= "Welcome to articlezone";
     break;
     case "blog.php":
         $title= "Blogpage page";
     break;
     case "blogdetail.php":
        if(isset($_REQUEST['slugs'])){
            include "./config.php";  
           $slug= $_REQUEST['slugs'];
            $sql="SELECT * FROM blogpost WHERE slug_url='{$slug}'";
            $result_title=mysqli_query($conn,$sql) or die("failed");
            $row_title= mysqli_fetch_assoc($result_title);
            $title=$row_title["Btitle"];
        }
        else
        {
            $title="No post here"; 
        }
       
     break;
     case "about.php":
         $title="About page";
     break;
     case "contact.php":
         $title="Contact page";
     break;
     default: 
      $title="Articlezone";
      break;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/articlezone/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title> Artilezone || <?php echo $title ?> </title>
</head>
<style>
    .urlpath{
        display: none;
    }
  .login,.get{
  background-color: #1281c2;
  color: #fff;
}
    .imgset{
        text-align: justify;
   } 
   .imgset h2{
       text-align: center;
   }
#preloader {
width: 100%;
height: 100vh;
background: #fff url('logo/loading.gif');
position: fixed;
z-index: 99999;
background-repeat: no-repeat;
background-position: center center;
}

.detail{
  width: 80%;
  }
  .full img{
  width: 100%;
  position: relative;
  height: 350px;
  }

/* media query  460px */
@media (max-width:460px){
  .teamimg img{
  width: 100%;
  height: 200px;
}
.team_ser{
      max-width: 100%;
      text-align: center;
      cursor: pointer;
      margin: 10px 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  .servicebox{
      max-width: 100%;
      padding: 10px;
      text-align: center;
      cursor: pointer;
  }
  .deve h2{
     color: #fff;
     font-size: 25px;
 }
 .deve p{
     color: #fff;
     font-size: 18px;
     text-align: center;
 }
 
.overlay{
      width: 100%;
      height: 65vh;
      min-width: 350px;
}
.vblog{
  text-align: center;
}
.vlog:hover{
  background-color: #555;
}
  
.detail{
  width: 100%;
  }
  .full img{
  width: 100%;
  position: relative;
  height: 250px;
  }
  .urlpath>span{
        color: grey;
        margin: 0 6px;
        font-size: 10px;
    }
    .urlpath>a{
        font-size: 10px; 
    }
  .urlpath>p{
  display: inline;
  font-size: 10px;
}
.urlpath{
        display: block;
    }
}

@media  (min-width:460px) and (max-width:768px){
    .urlpath>span{
        color: grey;
        margin: 0 6px;
    }
  .urlpath>p{
  display: inline;
}
.urlpath{
        display: block;
    }
    .teamimg img{
  width: 100%;
  height: 200px;
}
.team_ser{
      max-width: 100%;
      text-align: center;
      cursor: pointer;
      margin: 10px 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  .servicebox{
      max-width: 100%;
      padding: 10px;
      text-align: center;
      cursor: pointer;
  }
 
}
@media  (min-width:54px) and (max-width:768px){
    .teamimg img{
    width: 100%;
    height: 200px;
}
    .servicebox{
        max-width: 100%;
        padding: 10px;
        text-align: center;
        cursor: pointer;
    }
    .team_ser{
        max-width: 80%;
        text-align: center;
        cursor: pointer;
        margin: 10px 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .detail{
width: 90%;
}
.full img{
width: 100%;
position: relative;
height: 300px;
}
.para{
    font-size: 10px;
}
}

</style>
<body onload="preload()">
<div id="preloader"></div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index" class="fw-bolder">
                        <img src="logo/lg.jpg" alt="" width="100" height="42" class="">
                        <!-- <span class="logo">Startzone</span> -->
                        </a>
                    <div class="navbar-toggler"  data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""><i class="fas fa-sliders-h fa-3 text-dark"></i></span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class=" <?php echo (basename($_SERVER['PHP_SELF'])=="index.php")?"active":"" ?>" aria-current="page" href="index">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?php echo (basename($_SERVER['PHP_SELF'])=="blog.php")?"active":"" ?>" href="blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?php echo (basename($_SERVER['PHP_SELF'])=="about.php")?"active":"" ?>" href="about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="<?php echo (basename($_SERVER['PHP_SELF'])=="contact.php")?"active":"" ?>" href="contact">Contact</a>
                            </li>
                        </ul>      
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>