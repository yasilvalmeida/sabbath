<?php
    // Import the needed classes
    require_once("mysql_pdo.php");
    require_once("classes/transaction.php");
    // API for Transaction CRUD Class
    class TransactionAPI {
        /* Transaction Actions Begin */
        /* Retrieve all Transaction on the database */
        public function fetchAll() {
            try {
                // Select all users
                $query = "
                        select t.id, t.date, t.name as client, t.reference, t.amount, t.money_denomination, d.id, d.name, d.details
                        from t_transaction t
                        join t_department d on d.id = t.t_department_fk
                        order by t.date desc";
                // Create object to connect to MySQL using PDO
                $mysqlPDO = new MySQLPDO();
                // Prepare the query
                $statement = $mysqlPDO->getConnection()->prepare($query);
                // Execute the query without paramters
                $statement->execute();
                // Get affect rows in associative array
                $rows = $statement->fetchAll();
                // Foreach row in array
                foreach ($rows as $row) {
                    // Create a Transaction object
                    $transaction = new Transaction($row);
                    //Create datatable row
                    $tmp_data[] = $transaction;
                }
                // Export into DataTable json format if there's any record in $tmp_data
                if (isset($tmp_data) && count($tmp_data) > 0) {
                    $data = array(
                        "data" => $tmp_data
                    );
                } else {
                    $data = array(
                        "data" => array()
                    );
                }
                return $data;
            } catch (PDOException $e) {
                die("Error message" . $e->getMessage());
            }
        }
        /* Retrieve single Transaction by id */
        public function fetch() {
            try {
                /* Check if for the empty or null parameters */
                if (isset($_POST["id"])) {
                    // Get the id from POST request to remove
                    $form_data = array(
                        ':id' => $_POST["id"]
                    );
                    // Select all users
                    $query = "
                            select t.id, t.date, t.name, t.reference, t.amount, t.money_denomination, d.id as t_department_id, d.name as t_department_name, d.details as t_department_details
                            from t_transaction t
                            join t_department d on d.id = t.t_department_fk
                            where t.id = :id";
                    // Create object to connect to MySQL using PDO
                    $mysqlPDO = new MySQLPDO();
                    // Prepare the query
                    $statement = $mysqlPDO->getConnection()->prepare($query);
                    // Execute the query with passed parameter id
                    $statement->execute($form_data);
                    // Get affect rows in associative array
                    $rows = $statement->fetchAll();
                    // Foreach row in array
                    foreach ($rows as $row) {
                        // Create a Transaction object
                        $transaction = new Transaction($row);
                        //Create datatable row
                        $tmp_data[] = $transaction;
                    }
                    // Export into DataTable json format if there's any record in $tmp_data
                    if (isset($tmp_data) && count($tmp_data) > 0) {
                        $data = array(
                            "data" => $tmp_data
                        );
                    } else {
                        $data = array(
                            "data" => array()
                        );
                    }
                } else {
                    // Check for missing parameters
                    $data[] = array('result' => 'Missing id parameter !!');
                }
                return $data;
            } catch (PDOException $e) {
                die("Error message" . $e->getMessage());
            }
        }
        /* Insert new Transaction */
        public function insert() {
            try {
                /* Check if for the empty or null parameters */
                if (isset($_POST["date"]) && isset($_POST["departmentId"]) && isset($_POST["name"]) && isset($_POST["reference"]) && isset($_POST["amount"]) && isset($_POST["money_denomination"])) {
                    // Get the instance, token and user id from POST request to insert
                    $form_data = array(
                                    ':date'               => $_POST["date"],
                                    ':name'               => $_POST["name"],
                                    ':reference'          => $_POST["reference"],
                                    ':amount'             => $_POST["amount"],
                                    ':money_denomination' => $_POST["money_denomination"],
                                    ':departmentId'       => $_POST["departmentId"],
                                    );
                    // Create object to connect to MySQL using PDO
                    $mysqlPDO = new MySQLPDO();
                    // Create a SQL query to insert an new instance with all parameters
                    $query = "
                            insert t_transaction(date, name, reference, amount, money_denomination, t_department_fk) 
                            values(:date, :name, :reference, :amount, :money_denomination, :departmentId);
                            ";
                    // Prepare the query
                    $statement = $mysqlPDO->getConnection()->prepare($query);
                    // Execute the query with passed parameters
                    $statement->execute($form_data);
                    $lastInsertedId = $mysqlPDO->getConnection()->lastInsertId();
                    // Check if any affected row
                    if ($statement->rowCount()) {
                        $data[] = array('result' => $lastInsertedId);
                    } else {
                        $data[] = array('result' => 'No operations performed on the database!');
                    }
                } else {
                    // Check for missing parameters
                    if (!isset($_POST["instance"]) && !isset($_POST["token"]) && !isset($_POST["user_id"])) {
                        $data[] = array('result' => 'Missing all parameters');
                    } elseif (!isset($_POST["instance"])) {
                        $data[] = array('result' => 'Missing instance parameter!');
                    } elseif (!isset($_POST["token"])) {
                        $data[] = array('result' => 'Missing username parameter!');
                    } else {
                        $data[] = array('result' => 'Missing user_id parameter!');
                    }
                }
                return $data;
            } catch (PDOException $e) {
                die("Error message" . $e->getMessage());
            }
        }
        /* Remove Transaction */
        public function remove() {
            try {
                /* Check if for the empty or null parameters */
                if (isset($_POST["id"])) {
                    // Get the id from POST request to remove
                    $form_data = array(
                        ':id' => $_POST["id"]
                    );
                    // Create a SQL query to remove an existent transaction with passed id
                    $query = "
                            delete from t_transaction
                            where id = :id;
                            ";
                    // Create object to connect to MySQL using PDO
                    $mysqlPDO = new MySQLPDO();
                    // Prepare the query
                    $statement = $mysqlPDO->getConnection()->prepare($query);
                    // Execute the query with passed parameter id
                    $statement->execute($form_data);
                    // Check if any affected row
                    if ($statement->rowCount()) {
                        $data[] = array('result' => '1');
                    } else {
                        $data[] = array('result' => 'No operations performed on the database!');
                    }
                } else {
                    // Check for missing parameters
                    $data[] = array('result' => 'Missing id parameter !!');
                }
                return $data;
            } catch (PDOException $e) {
                die("Error message" . $e->getMessage());
            }
        }
        /* Transaction Actions End */
    }
?>