<?php
class Event {
    public $id;
    public $name;
    public $time;
    public $description;
    public $type;
    public $status;
    public $location;
    
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
}
?>