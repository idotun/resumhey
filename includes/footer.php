     <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
    About Terms Privacy © 2016 Resumhey
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <?php if (isset($fname, $lname)){
        echo "<script> document.getElementById('errormessage').innerHTML = '**Email is already registered, please use another one.';</script>";}
        ?> 
        <?php if (isset($_GET['error'])){
        echo "<script> document.getElementById('errormessage').innerHTML = '**The email and password combination that you've entered is incorrect.';</script>";}
        ?> 
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>