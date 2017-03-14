<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['videoId']) && isset($_POST['customerId']) && isset($_POST['borrowDate'])) {
        http_response_code(200);
        $videoId = $_POST['videoId'];
        $customerId = $_POST['customerId'];
        $customer = new VideoBorrow();
        $timestamp = date('Y-m-d H:i:s', strtotime($_POST['borrowDate']));  
        $obj = $customer->getByParams($videoId, $customerId, $timestamp);
        if ($obj === null) {
            echo json_encode('The given id was not valid.');
        } else {
            echo json_encode($obj);
        }
    } else {
        echo json_encode('Please provide an id.');
        http_response_code(400);
    }
} else {
    echo json_encode('Please use HTTP POST');
    http_response_code(400);
}