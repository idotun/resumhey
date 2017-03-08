<?php 

require_once 'dbconnect.php'; 
class Dbfunction{
    
    function __construct() {
        
        session_start(); 
        $this->loginUser();
        $this->registerUser(); 
       
    }
    
    function __destruct() {
        
    }
    
   
    
    public function loginUser(){
        
        if (isset($_POST['login'])){
            $db = new Dbconnect;
            $db->connection;
            
$user_email =trim($_POST['user_email']);
$user_email = mysqli_real_escape_string($db->connection, $user_email);
$user_pass =trim($_POST['user_pass']);
$user_pass = mysqli_real_escape_string($db->connection, $user_pass);


$sql = "SELECT * from users WHERE user_email = '{$user_email}' AND user_pass = '{$user_pass}' ";    $user = $db->query($sql);
$session = new Session();
$session->login($user);
            
            }
            
            
         }
    

    
    public function registerUser(){
    
        
        if (isset($_POST['signup'])){
        $db = new Dbconnect;
        $db->connection;
        $first_name = mysqli_real_escape_string($db->connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($db->connection,$_POST['last_name']);
        $email = mysqli_real_escape_string($db->connection,$_POST['email']);
        $password = mysqli_real_escape_string($db->connection,$_POST['password']);
        $password = md5($password);
                                    
        // Check if user has been registered with the email
        $sql = "SELECT * FROM users WHERE user_email = '$email'";
        $check_email = $db->query($sql);
        $check_email_row = mysqli_num_rows($check_email);
                                    
        // If the email has been used, redirect to registration page and alert user
        if ($check_email_row == 1){
        
        header("Location: http://localhost:8080/social/signup.php?first_name=$first_name&last_name=$last_name");
         }
        else  
            // If the email has not been used before, register with the email
        {
        
        
        $sql = "INSERT INTO users (first_name, last_name, user_email, user_pass) ";
        $sql .= "VALUES ('$first_name', '$last_name', '$email', '$password')";
        $signup = $db->query($sql);
                                if($signup){
                                $_SESSION['first_name'] = $first_name;
                                $_SESSION['last_name'] = $last_name; 
                                $_SESSION['user_email'] = $email; 
                        header("Location: http://localhost:8080/social/createprofile.php?email=$email"); 
                                } else
                                {
                                echo "Registration failed";
                                }
                                return $signup;
                                } 
            }
        
        
    
    }
    
    
    public function redirect($location){
        
        header("Location: {$location}");
    }
    
}
$dbfunction = new Dbfunction(); 

?>