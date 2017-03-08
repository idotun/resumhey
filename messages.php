<?php include("includes/header.php"); ?>
 


	<!-- start:main -->
	<div class="container" id="main">
	    <div class="row">
	        <div class="container marginTop"></div>
	    </div>
		<div class="row">
		<!-- Inlcude the sidebar --> 
			<?php include "includes/sidebar.php"?>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div id="content">
					
					<!-- start:main content -->
					<div class="main-content">
						<ul class="timeline">
							<!-- start:profile -->
							<li id="id-profile">
								<div class="timeline-badge default"><i class="fa fa-home"></i></div>
								<h1 class="timeline-head">MESSAGES</h1>
							</li>
                            <li id="profile">
					          	<div class="timeline-badge primary"></div>
					          	<div class="timeline-panel">
					          	
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Inbox</a></li>
    <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New message</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="recent"><?php include 'recent.php'; ?></div>
    <div role="tabpanel" class="tab-pane" id="new"><?php include 'new.php'; ?></div>
  </div>

</div>

					          	</div>
					        </li>
                        </ul>
                    </div>        

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