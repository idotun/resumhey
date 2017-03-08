<?php include "includes/header_a.php"; ?>  


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 text">
                           <div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to sign up:</p>
                                     <span id="errormessage"></span>
                                	
                                                         		
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">                             <?php if (isset($_GET['first_name'], $_GET['last_name'])){
                                                  $fname = $_GET['first_name'];
                                                   $lname = $_GET['last_name'];
                                                     
                                                     include 'r.php';
                                            } 
                                           else 
                                                {
                                                  include 's.php';  
                                                }
                                        
                                        ?>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        
				                        <button name="signup" type="submit" class="btn">Sign up</button>
				                    </form>
				                     <div class="margin-top text-center white">
				    <p>Already have an account? <a href="login.php">Log in</a></p>
				                    </div>
			                    </div>
                        	</div> 
                            
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <?php require_once "includes/footer.php"; ?>