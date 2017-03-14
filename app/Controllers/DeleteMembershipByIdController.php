<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["id"])) {
        http_response_code(200);
        $membershipId = $_POST["id"];
        $membership = new Membership();
        $membership->id = $membershipId;
        if ($membership->exists($membershipId)) {
            $membership->delete();
            echo json_encode("Successfully deleted Membership with id " . $membershipId);
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