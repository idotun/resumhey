<?php include("includes/header.php"); ?>

<!-- start:main -->

<?php 
if ($user_id == $_SESSION['user_id']){
    
    include "profilea.php";
} else {
    
    include "profileb.php";
}

?>
	
<!-- end:main content -->
				</div>
			</div>
		</div>
	</div>
	<!-- end:main -->

	<!-- start:footer -->
	<footer>
		<div class="container">
			<div class="text-center">
				<p>Copyright &copy; 2014. All Right Severed</p>
			</div>
		</div>
	</footer>
	<!-- end:footer -->

	<!-- start:javascript -->
	<script src="assets/template/js/jquery-1.11.1.min.js"></script>
	<script src="assets/template/js/bootstrap.min.js"></script>
	<script src="assets/template/js/marinka.js"></script>
	<script src="assets/template/js/portfolio.jquery.js"></script>
	<script src="assets/template/js/jquery.easing.min.js"></script>
	<script src="assets/template/js/scrolling-nav.js"></script>
	<script src="assets/template/js/jquery.scrollUp.js"></script>
	<!-- end:javascript -->

</body>
</html>