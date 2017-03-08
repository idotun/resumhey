<?php 
require_once 'includes/ini.php';    
 
if(isset($_GET['email'])){
    
  $email = $_GET['email'];
  $sql = "SELECT user_id FROM users WHERE user_email = '$email' ";
  $getProfileId = $db->query($sql);
  if($getProfileId){
      $row = mysqli_fetch_array($getProfileId);
      $_SESSION['user_id'] = $row['user_id'];
      $user_id = $row['user_id'];
      if(isset($_SESSION["user_id"])) {
 header("Location: http://localhost:8080/social/profile.php?id=$user_id");
}
      
    
}
}


?>