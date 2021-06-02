<?php
    // Import the neeeded class
    require_once('logic/api-department.php');
    require_once('logic/api-transaction.php');

    // Create a API for Department CRUD
    $departmentAPI = new DepartmentAPI();
    // Create a API for Transaction CRUD
    $transactionAPI = new TransactionAPI();

    /**********************/

    /* Department Action Begin */
    // Perform fetchAllDepartment action
    if ($_GET["action"] == 'fetchAllDepartment') {
        $data = $departmentAPI->fetchAll();
    }
/* Department Action End */

/*************************/

    /* Transaction Action Begin */
    // Perform insert transaction action
    else if ($_GET["action"] == 'fetchTransaction') {
        $data = $transactionAPI->fetch();
    }
    else if ($_GET["action"] == 'insertTransaction') {
        $data = $transactionAPI->insert();
        $data = $data[0];
    }
    // Perform delete transaction action
    else if ($_GET["action"] == 'deleteTransaction'
    ) {
        $data = $transactionAPI->remove();
        $data = $data[0];
    }
    /* Transaction Action End */

    /***********************/
    // No action to perform
    else {
        $data = array('result' => 'No action taken!');
    }
    // Convert data[] to json
    echo json_encode($data);
?>