<?php

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["videoId"]) && isset($_POST['customerId']) && isset($_POST['borrowDate'])) {
        http_response_code(200);
        $borrow = new VideoBorrow();
        $video = new Video();
        $customer = new Customer();
        $timestamp = date('Y-m-d H:i:s', strtotime($_POST['borrowDate']));
        if ($borrow->getByParams($_POST['videoId'], $_POST['customerId'], $timestamp) !== null) {
            $dbV = (new Video())->getById($_POST['videoId']);
            $borrow = (new VideoBorrow())->getByParams($_POST['videoId'], $_POST['customerId'], $timestamp);
            if ($dbV->isBorrowed === 1) {
                $borrow->delete();
                $dbV->isBorrowed = 0;
            } else {
                $dbV->isBorrowed = $video->isBorrowed === 1 ? 0 : 1;
            }

            $dbV->save();
            echo json_encode("Successfully toggled borrowed state.");
        } else {
            echo json_encode("Please provide a set of valid ids.");
        }
    } else {
        echo json_encode("Please provide a set of ids.");
        http_response_code(400);
    }
} else {
    echo json_encode("Please use HTTP POST");
    http_response_code(400);
}