<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["id"])) {
        http_response_code(200);
        $customerId = $_POST["id"];
        $customer = new Customer();
        $obj = $customer->getById($customerId);
        if ($obj === null) {
            echo json_encode("The given id was not valid.");
        } else {
            echo json_encode($obj);
        }
    } else {
        echo json_encode("Please provide an id.");
        http_response_code(400);
    }
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}