<?php
session_start();
?>
<?php include 'includes/header.php'; ?>
    <!-- navbar coding -->
    <!-- Home page -->
    <div class="container mb-5">
        <div class="row mt-4">
            <div class="col-md-6 mt-4 ">
                <div class="box m-4 ms-sm-0">
                    <h1>In Startzone</h1>
                    <h2 class="text-center fw-bolder">Make Business Worthy.</h2>
                    <p class="text-center para">Marketing techniques have evolved as the ways in which consumers get
                        information change. Radio advertising led to TV advertising, which then shifted to digital
                        marketing with the rise of the internet. Besides these natural market progressions, the COVID-19
                        pandemic is driving the scope of digital marketing even further online. Digital marketing
                        enthusiasts everywhere have started to search and look around for the latest trends observed.
                    </p>
                    <form action="searchpage.php" method="GET" autocomplete="off">
                    <div class="input-group rounded">
                        <input type="search" name="search" class="form-control rounded  "
                            placeholder="Search your blog...." required aria-label="Search" aria-describedby="search-addon" />
                            <button id="search-button" type="submit" class="btn login">
                                <i class="fas fa-search"></i>
                            </button>
                            </div>
                </form>
                <div class="vblog">
                    <a href="blog" class="btn btn-primary btn-lg mt-5 get">View Blog<span>
                            <i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
            </div>
            <div class="col-md-6 d-md-block d-none">
                <div class="box1">
                    <img src="logo/home.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="scroll text-center text-secondary">
        <p class="mt-2">Scroll down</p>
        <i class="fas fa-arrow-down"></i>
    </div>

    <!-- Landing page -->

    <section class=" container text-center mt-5 mb-5">
        <div class="row ">
            <h2 class=" text-center" style=" font-weight: bold;">LATEST BLOG</h2>
            <p class="para  text-center">Because most consumers use smartphones and research products online before
                buying, digital marketing strategies are crucial to businesses. But companies across the globe also
                employ digital marketing to more easily target their audiences online and via mobile devices — and many
                are seeing a significant return on investment (ROI) because of these efforts.</p>
              
        </div>  
     
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php include "Home/blogsec.php";?>

  <a href="blog" class=" mt-5 col-sm-2 d-block m-auto" style="font-size: 25px;">View More<span></span></a>
 
        </div>
     
    </section>
    </div>
        <!-- company -->
        <div class="overlay">
   
   <?php include "Home/devel.php";?>

   </div>


    <!-- company -->
    <!-- service sections -->

    <section class="container-fluid mb-5">
    <div class="row">
    <div class="col-md-10 d-block m-auto mt-3">
    <h2 class=" text-center" style=" font-weight: bold;">SERVICE</h2>
        <p class="para text-center mt-2">We Provide you best Quality content, which makes you successful in your life. It
            offers digital marketing services such as social media management, social listening, digital marketing
            strategy, technology, market automation, creative services, media buying, and analytics.</p>
            <?php include "Home/service.php";?>
    </div>
</div>
    
    </section>

    <!-- service sections -->

    <!-- Reviews  sections -->
    <section class="container-fluid mt-4 mb-5">
<div class="row mt-5">
<h2 class=" text-center" style=" font-weight: bold;">Meet Our Team</h2>
    <div class="col-md-10 d-block m-auto">
        <p class="para text-center mt-2">We Provide you best Quality content, which makes you successful in your life. It
            offers digital marketing services such as social media management, social listening, digital marketing
            strategy, technology, market automation, creative services, media buying, and analytics.</p>
    <?php include "Home/service_team.php";?>
    </div>
</div>
    </section>
    <!--Reviews   sections -->
    <!-- footer -->
    <?php include 'includes/footer.php'; ?>
     <!-- footer -->

</body>

</html>
