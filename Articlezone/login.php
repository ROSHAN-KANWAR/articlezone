<?php include 'includes/header.php'; ?>
    <!-- login -->
    <div class="container mb-3">
        <div class="row mt-5 bg-light p-2">
            <h4 class=" text-center fw-bolder">Login </h4>
                            <div class="col-md-10 col-10 d-block m-auto">
                                <!-- login php codde -->            
                                    
      <!-- login php codde -->
                                <form method="POST" action="savelogin.php">
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">

                                        <label class="form-label" for="form2Example1">Username </label>
                                        <input type="text" id="form2Example1" name="usernames" class="form-control" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">

                                        <label class="form-label" for="form2Example2">Password</label>
                                        <input type="password" name="lopass" id="form2Example2" class="form-control" />
                                    </div>

                                    <!-- 2 column grid layout for inline styling -->
                                    <div class="row mb-4 ">
                                        <div class="col d-flex justify-content-center">
                                            <!-- Checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="form2Example34" checked />
                                                <label class="form-check-label" for="form2Example34"> Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <!-- Simple link -->
                                            <a href="#!">Forgot password?</a>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit"
                                        class="login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"
                                        name="logbtn">Sign in</button>
                                </form>
                                    <!-- Register buttons -->             </div>
                        </div>
                    </div>
    <!-- footer -->
<?php include 'includes/footer.php' ; ?>
    <!-- footers details -->
  