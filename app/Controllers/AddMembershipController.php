<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["name"]) && isset($_POST["borrowDays"])) {
        try {
            $membershipAccess = new Membership();
            $membershipAccess->id = -1;
            $membershipAccess->name = $_POST["name"];
            $membershipAccess->borrowDays = $_POST["borrowDays"];
            $membershipAccess->create();
            echo json_encode("The object was successfully created.");
        } catch (Exception $ex) {
            echo json_encode("The given data was invalid.");
        }
    } else {
        echo json_encode("Please provide a valid set of data.");
        http_response_code(400);
    }
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}