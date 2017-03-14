<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer = new Customer();
    $all = $customer->getAll();
    echo json_encode($all);
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}