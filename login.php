<?php require_once "includes/header_a.php";?>


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 text">
                           <div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login</h3>
	                            		<p>Enter email and password to log in:</p>
	                           <span id="errormessage">
	                               <?php
                                   if(isset($_GET['error'])){
                                       
                    echo '**The email and password combination that you have entered is incorrect.';  
                                   }
                                   ?>
	                           </span>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="text" name="user_email" placeholder="Email..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="user_pass" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button name="login" type="submit" class="btn">Log In</button>
				                    </form>
				                    <div class="margin-top text-center white">
				    <p><a href="rpassword.php">Forgotten password?</a> - <a href="signup.php">Sign up for Resumhey</a></p>
				                    </div>
			                    </div>
		                    </div>
		                
<!--
		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-2" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
	                        	</div>
	                        </div>
-->
                            
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <?php require_once "includes/footer.php"; ?>
  