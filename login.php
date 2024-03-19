<?php
  
include('header.php');
?>



    <div class="container login-container">
        <div class="row">
            <div class="col">
                <div class="login-form">
                    <h2 class="login-title">Login to CARGO LTD</h2>
                    <form>
                        <div class="mb-3">
                            <label for="names" class="form-label">Name</label>
                            <input type="text" class="form-control" id="names" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <p>If You Don't have an Account <a href="signup.php">SignUp Here!</a></p>
                    </form>
                </div>
            </div>
        </div>
  <?php
  
  include('footer.php');
  ?>
