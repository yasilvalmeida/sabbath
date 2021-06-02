<?php
    // PHP Settings
    header('Content-type: text/html; charset=utf-8');
    header("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");

    set_time_limit(0);

    ob_implicit_flush(1);
    // Import the needed classes
    require_once("mysql_pdo.php");
    require_once("classes/department.php");
    // API for Department CRUD Class
    class DepartmentAPI {
        /* Department Actions Begin */
        /* Retrieve all departments */
        public function fetchAll() {
            try {
                $query = "
                        select d.id, d.name, d.details 
                        from t_department d  
                        order by d.name asc
                        ";
                // Create object to connect to MySQL using PDO
                $mysqlPDO = new MySQLPDO();
                // Prepare the query
                $statement = $mysqlPDO->getConnection()->prepare($query);
                // Execute the query with passed parameter token
                $statement->execute();
                // Get affect rows in associative array
                $rows = $statement->fetchAll();
                // Foreach row in array
                foreach ($rows as $row) {
                    // Create a Department Select object
                    $department = new Department($row);
                    //Create datatable row
                    $tmp_data[] = $department;
                }
                // Export into DataTable json format if there's any record in $tmp_data
                if (isset($tmp_data) && count($tmp_data) > 0) {
                    $data = $tmp_data;
                } else {
                    $data = array();
                }
                return $data;
            } catch (PDOException $e) {
                die("Error message: " . $e->getMessage());
            }
        }
        /* Department Actions End */
    }
?>