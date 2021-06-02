<?php
    // Transaction class
    class Transaction implements JsonSerializable {
        private $id;
        private $name;
        private $date;
        private $reference;
        private $amount;
        private $money_denomination;
        private $t_department_id;
        private $t_department_name;
        private $t_department_details;
        /* 
        This constructor create a new Transaction object
        */
        function __construct(array $data) {
            $this->id                   = $data['id'];
            $this->name                 = $data['name'];
            $this->date                 = $data['date'];
            $this->reference            = $data['reference'];
            $this->amount               = $data['amount'];
            $this->money_denomination   = $data['money_denomination'];
            $this->t_department_id      = $data['t_department_id'];
            $this->t_department_name    = $data['t_department_name'];
            $this->t_department_details = $data['t_department_details'];
        }
        // Get Id
        function getId() {
            return $this->id;
        }
        // Get Name
        function getName() {
            return $this->name;
        }
        //get Date
        function getDate() {
            return $this->date;
        }
        //get Reference
        function getReference() {
            return $this->reference;
        }
        //get Amount
        function getAmount() {
            return $this->amount;
        }
        //get Money Denomination
        function getMoneyDenomination() {
            return $this->money_denomination;
        }
        //get Department Id
        function getDepartmentId() {
            return $this->t_department_id;
        }
        //get Department Name
        function getDepartmentName() {
            return $this->t_department_name;
        }
        //get Department Details
        function getDepartmentDetails() {
            return $this->t_department_details;
        }
        // Convert object to JSON
        public function jsonSerialize() {
            return get_object_vars($this);
        }
    }
?>
