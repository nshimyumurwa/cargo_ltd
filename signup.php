<?php
  
include("header.php");

?>
    
   <div class="container signup-container">
     <div class="row">
        <div class="col">
            <div class="signup-form">
                <div class="signup-title"><h3>SignUp Into CARGO LTD!</h3></div>

                <div class="mb-3">
                    <label for="names" class="form-label">Names</label>
                    <input type="text" id="names" class="form-control" placeholder="Enter your names" name="names">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email" name="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password">
                </div>

                  <button type="submit" class="btn btn-primary btn-block">SignUp</button>  
                <p>Already have an Account <a href="login.php">Login Here!</a></p>
            </div>
        </div>
     </div>
  <?php
  
  include("footer.php");
  
  ?>