<div class="container-fluid mt-5">
    <div class="row bg-light p-3 mt-4">
        <!-- site logo and info -->
        <div class="col-md-3">
            <img src="logo/logo.svg" class="w-25 h-25 img-fluid rounded" alt="">
            <br> <br>
            <p>Startzone Developer Team that delivers Website & Mobile Apps service to
                the Businesses, Start-ups, Institution etc.</p>
        </div>
        <!-- site logo and info end-->
        <!-- site contact -->
        <div class="col-md-3 mt-1">
            <h2 class="">Contact us</h2>
            <p>Email: support@startzone.com</p>
            <p>Call : <a href="tel:+918120481377">(+91)-9876547899</a></p>
            <p>Address: Korba,Chhattisgarh State, India, Postal Code 543212</p>
        </div>
        <!-- site contact end-->
        <div class="col-md-3">
            <h3>Important links</h3>
            <a href="">Course</a><br>
            <a href="">SEO Management</a><br>
            <a href="">Customer Care</a><br>
            <a href="">Consultancy</a>
        </div>
        <!-- sites Follow page -->
        <div class="col-md-3 col-sm-3 mt-1 ">
            <h3>Follow Us</h3>
                                         <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-github"></i>
                                        </button>
                                   
            <div class="row text-center foot">
                <div class="col-md-3 col-sm-6 col-6 tb">
                <?php 
                        if(isset($_SESSION['Uname'])){
                            echo ' <a href="dashboard" class="btn pro fw-bolder">Profile</a>';
                        }
                        else{
                          echo ' <a href="login" class="btn  login fw-bolder">Log</a>';
                        }
                        ?> 
                </div>
          
            </div>
        </div>
        <!-- sites Follow page end -->
    </div>
    <!-- sites contact details and info  end-->
    <!-- footers details -->
    <div class="row">
        <div class="col-md-12 bg-dark text-white p-1">
            <p class="pt-2 ml-2 text-center"> @2021 startzone || All Rights Reserved</p>
        </div>
    </div>
</div>
<script>
   CKEDITOR.replace("editor" );
      
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function preload(){
            let loader=document.querySelector("#preloader")
            loader.style.display="none";
        }

    </script>