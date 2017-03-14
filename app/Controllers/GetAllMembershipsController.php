<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $membership = new Membership();
    $all = $membership->getAll();
    echo json_encode($all);
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}