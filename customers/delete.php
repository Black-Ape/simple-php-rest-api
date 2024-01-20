<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include ('function.php');

$requestMethod = $_SERVER['REQUEST_METHOD'];

    if ($requestMethod == "DELETE") {

        $deleteCustome = deleteCustomer($_GET);
        echo $deleteCustome;

    }
    else{
        $data = [
            "status" => 405,
            "message" => $requestMethod. " Method Not Allowed",
        ];
        header("HTTP/1.0 400 Bad Request");
        echo json_encode($data);
    }

?>