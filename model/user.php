<?php
    class Account {
        public $gmail;
        public $name;
        public $point;
        
        private $db;
        private $table_name = "users";
        
        public function __construct($db) {
            $this->db = $db;
        }
        
        
    }
?>