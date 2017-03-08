<?php
class Session{
    private $signed_in = false;
    public $user_id;
    function __contruct(){
        
        $this->check_log_in(); 
    }
    
    
public function is_signed_in(){
    
    return $this->signed_in;
}

    
public function login($user){
    if($user){
            $check_user_exists = mysqli_num_rows($user);
            if($check_user_exists == 1) {
            $row = mysqli_fetch_array($user);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            if(isset($_SESSION["user_id"])) {
             $this->signed_in = true;
             header("Location: http://localhost:8080/social/home.php");
              
}
            } else {
             header("Location: http://localhost:8080/social/login.php?error=1");
            }

    } 
} 
    

public function logout(){
    unset($_SESSION['user_id']);
    unset($this->user_id);
    $this->signed_in = false;
}
    
    
private function check_log_in(){
    if (isset($_SESSION['user_id'])){
        $this->user_id = $_SESSION['user_id'];
        $this->signed_in = true;
    } else {
        unset($this->user_id);
        $this->signed_in = false;
    }
}
}
$session = new Session();
?>