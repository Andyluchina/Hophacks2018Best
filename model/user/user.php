<?php
class User {
    public $id;
    public $gmail;
    public $name;
    public $password;
    public $point;

    private $conn;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn = $db;
    }   
    
    public function readOne($u, $pwd) {
        $query = "select * from ".$this->table_name." where password=".$pwd." and gmail=".$u;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->name = $row['name'];
        $this->id = $row['id'];
        $this->gmail = $row['gmail'];
        $this->password = $row['password'];
        $this->point = $row['point'];
        return $this;
    }
}
?>