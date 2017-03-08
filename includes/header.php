<?php require_once 'includes/ini.php';?>

<?php

if(!isset($_SESSION['user_id'])){ //if login in session is not set
   header("Location: index.php");
}

if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE user_id = $user_id ";
    $userProfile = $db->query($sql);
    if($userProfile){
        $row = mysqli_fetch_array($userProfile); 
        $user_id = $row['user_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        
        }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>resumhey</title>
	<meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="assets/template/css/style.css">
	
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <div class="navbar-header"><a href="home.php" class="navbar-brand">Resumhey</a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"> 
               <form class="navbar-form navbar-left " role="search">
                      <div class="form-group">
                            <input type="text" class="form-control" placeholder="Job title">
                      </div>
                      <div class="form-group">
                            <input type="text" class="form-control" placeholder="Location">
                      </div>
  <button type="submit" class="btn btn-default">Find people</button>
               </form>
                <ul class="nav navbar-nav navbar-right">
                 <li><a href="home.php" class="navbar-menu">Home</a></li>
                 <li><a href="messages.php" class="navbar-menu">Messages</a></li>
                 
                 <!-- Dropdown in menu --> 
                 <li class="dropdown"><a href="profile.php" class="dropdown-toggle navbar-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["first_name"];?><span class="caret"></span></a>
                   <ul class="dropdown-menu pull-right">
                       <li><a href="profile.php?id=<?php echo $_SESSION["user_id"];?>">View profile</a></li>
                       <li role="separator" class="divider"></li>
                       <li><a href="setting.php?">Settings</a></li>
                       <li role="separator" class="divider"></li>
                       <li><a href="logout.php">Log out</a></li>
                   </ul>
                 </li> 
                 <!-- Dropdown ends here -->  
                 
                </ul>
           </div>
          
     </div>
   </nav>