<?php
     class Database {
         private $host = "localhost";
         private $db_name = "hophacksfall2018";
         private $user_name = "root";
         private $password = "";
         public $conn;
         
         public function getConnection() {
             $this->conn = null;
             
             try{
                 $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->user_name, $this->password);
                 //echo "Success<br>";
             }
             catch(Exception $exception) {
                 echo "Connection error: ".$exception->getMessage();
             }
             
             return $this->conn;
         }
     }
?>