<?php
    // Department class
    class Department implements JsonSerializable {
        private $id;
        private $name;
        private $details;
        /* 
        This constructor create a new department object
        */
        function __construct(array $data) {
            $this->id      = $data['id'];
            $this->name    = $data['name'];
            $this->details = $data['details'];
        }
        // Get Id
        function getId() {
            return $this->id;
        }
        // Get Name
        function getName() {
            return $this->name;
        }
        // Get Details
        function getDetails() {
            return $this->details;
        }
        // Convert object to JSON
        public function jsonSerialize() {
            return get_object_vars($this);
        }
    }
?>
