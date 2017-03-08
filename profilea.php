<div class="container" id="main">
	    <div class="row">
	        <div class="container marginTop"></div>
	    </div>
		<div class="row">
			<!-- Inlcude the sidebar --> 
			
			
           <?php include "includes/sidebar.php"; ?>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div id="content">
<!-- start:main content -->
<div class="main-content">
    <ul class="timeline">
<!-- start:profile -->
        <li id="id-profile">
            <div class="timeline-badge default"><i class="fa fa-user"></i></div>
                <h1 class="timeline-head">PROFILE</h1>
        </li>
        <li id="profile">  
            <div id="profile-nav">

  <!-- Nav tabs -->

  <ul class="nav nav-pills" role="tablist" >
    <li role="presentation"><a href="profile.php?id=<?php echo $user_id; ?>&view=timeline" aria-controls="timeline">Timeline</a></li>
    <li role="presentation"><a href="profile.php?id=<?php echo $user_id; ?>&view=resume" aria-controls="resume">Resume</a></li>
    <li role="presentation"><a href="profile.php?id=<?php echo $user_id; ?>&view=links" aria-controls="links">Links</a></li>
  </ul>

<!--
        <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="profile.php?view=timeline">Timeline |</a></li>
  <li role="presentation"><a href="profile.php?view=resume">Resume</a></li>
  <li role="presentation"><a href="profile.php?view=links">Links<span class="badge">3</span></a></li>
</ul> -->
            </div>
        </li>

<!-- Timeline, Resume or Links --> 
    <?php
        if (isset($_GET['view'])){
            
            $view = $_GET['view'];
            
        } else { $view = ""; }
            
        switch($view){
                
            case 'timeline':
                include 'timeline.php';
                break;
            case 'resume':
                include 'resume.php';
                break;
            case 'links':
                include 'links.php';
                break;
            default:
                include 'timeline.php';
                
        }
        
        
    ?>
    </ul>
</div>