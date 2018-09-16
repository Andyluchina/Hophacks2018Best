<?php
class User {
    public $id;
    public $gmail;
    public $username;
    public $firstname;
    public $lastname;
    public $password;
    public $point;

    private $conn;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn = $db;
    }   
    
    public function getAllUsers() {
        $query = "select * from ".$this->table_name." order by point desc;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $assoc = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($assoc, $row);
        }
        return $assoc;
    }
    
    public function readOne($u, $pwd) {
        $query = "select * from ".$this->table_name." where password=".$pwd." and gmail=".$u;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->username = $row['username'];
        $this->id = $row['id'];
        $this->gmail = $row['gmail'];
        $this->password = $row['password'];
        $this->point = $row['point'];
        $this->firstname = $row['firstname'];
        $this->lastname = $row['lastname'];
        return $this;
    }
    
    public function insertUser($un, $gm, $pwd, $fn, $ln, $pt) {
        $query = "insert into ".$this->table_name." (id, gmail, password, username, point, firstname, lastname)
        values (default, :gm, :pwd, :un, :pt, :fn, :ln)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(array("un"=>$un, "gm" => $gm, "pwd" => $pwd, "fn" => $fn, "ln" => $ln, "pt" => $pt));
    }
}
?>