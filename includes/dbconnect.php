<?php

define('DB_HOST', '160.153.162.20');
define('DB_USER', 'ludot');
define('DB_PASS', 'Chem!stry157');
define('DB_NAME', 'resumhey');

//require_once 'config.php';
class Dbconnect{
    public $connection; 
    
    function __construct(){
    
       $this->dbconnect();
   }
    
    
    
    public function dbconnect(){
   
    $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$this->connection){
        
        die("Connection failed" . mysqli_error);
    } 
        return $this->connection;
   }
    
  
    
  public function query($sql){
      
      
      $result = mysqli_query($this->connection, $sql);
      if(!$result){
          die ("Connection Failed" . mysqli_error($this->connection));
      }
      
      return $result;
  }
    
}
$db = new Dbconnect();


?>