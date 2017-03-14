<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["id"])) {
        http_response_code(200);
        $customerId = $_POST["id"];
        $customer = new Customer();
        $customer->id = $customerId;
        if ($customer->exists($customerId)) {
            $customer->delete();
            echo json_encode("Successfully deleted Membership with id " . $customerId);
        } else {
            echo json_encode("Please provide a valid id.");
        }
    } else {
        echo json_encode("Please provide an id.");
        http_response_code(400);
    }
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}