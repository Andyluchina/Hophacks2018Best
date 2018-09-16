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
        values (default, :n, :times, :des, :ty, :statu, :loc)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }

    public function getEvents() {
        $query = "select * from ".$this->table_name.";";
        $stmt = $this->conn->prepare($query);
        $stmt -> execute();
        $assoc = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($assoc, $row);
        }
        return $assoc;
    }
    
    public function insertAttend($id, $event_id) {
        
    }
}
?>