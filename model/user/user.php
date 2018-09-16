<?php
    class Account {
        public $gmail;
        public $name;
        public $point;
        
        private $conn;
        private $table_name = "users";
        
        public function __construct($db) {
            $this->conn = $db;
        }        
        
    }
?>