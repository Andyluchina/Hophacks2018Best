<?php
class Event {
    public $id;
    public $name;
    public $time;
    public $description;
    public $type;
    public $status;
    public $location;
    
    private $conn;
    private $table_name = "events";
    
    public function __construct($db) {
        $this->conn = $db;
    }
}
?>