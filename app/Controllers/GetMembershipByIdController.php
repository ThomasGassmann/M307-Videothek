<?php

require 'app/Models/membership.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["id"]) {
        http_response_code(200);
        $membershipId = $_POST["id"];
        $membership = new Membership();
        $membership->getById($membershipId);
        if ($membership === null) {
            echo json_encode("The given id was not valid.");
        } else {
            echo json_encode($membership);
        }
    }
    http_response_code(400);
}

http_response_code(400);