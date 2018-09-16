<?php
class Event {
    public $id;
    public $name;
    public $time;
    public $description;
    public $type;
    public $status;
    public $location;
    public $attendees;
    public $organizers;
    
    private $conn;
    private $table_name = "events";
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function createEvent($data) {
        $query = "insert into ".$this->table_name." (id, name, time, description, type, status, location)
        values (default, :n, :time, :des, :ty, :stat, :loc)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }
}
?>