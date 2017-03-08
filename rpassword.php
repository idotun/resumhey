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
	                        			<h3>Forgotten password?</h3>
	                            		<p>Enter your registered email:</p>
	                           <span id="errormessage"></span>
	                        		</div>

	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="text" name="user_email" placeholder="Email..." class="form-username form-control" id="form-username">
				                        </div>
				                        
				                        <button name="login" type="submit" class="btn">Recover Password</button>
				                    </form>
				                    
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
  