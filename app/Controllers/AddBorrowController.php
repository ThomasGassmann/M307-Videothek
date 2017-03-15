<?php
header('Content-Type: application/json');
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer = new Customer();
    $video = new Video();
    if (!isset($_POST['videoId']) || $_POST['videoId'] === '') {
        $errors["INVALID_VIDEO"] = 'Please provide a video id.';
    } else {
        if (!$video->exists($_POST['videoId'])) {
            $errors["INVALID_VIDEO"] = 'The given video id does not exist.';
        }
    }
    if (!isset($_POST['customerId']) || $_POST['customerId'] === '') {
        $errors["INVALID_CUSTOMER"] = 'Please provide a customer id.';
    } else {
        if (!$video->exists($_POST['customerId'])) {
            $errors["INVALID_CUSTOMER"] = 'The given customer id does not exist.';
        }
    }
    if (!isset($_POST['borrowDate']) || $_POST['borrowDate'] === '') {
        $errors["INVALID_BORROWDATE"] = 'Please provide a borrow date.';
    } else {
        $format = 'd/m/Y';
        $d = DateTime::createFromFormat($format, $_POST['borrowDate']);
        if (!($d && $d->format($format) == $_POST['borrowDate'])) {
            $errors["INVALID_BORROWDATE"] = 'The given borrow date is not valid.';
        }   
    }
    $borrowed = new VideoBorrow();
    if (!$borrowed->getByParams($_POST['videoId'], $_POST['customerId'], $_POST['borrowDate'])) {
        $errors['INVALID_DOUBLED'] = 'The given dataset already exists.';
    }

    if (count($errors) === 0) {
        $borrow = new VideoBorrow();
        $borrow->videoId = $_POST['videoId'];
        $borrow->customerId = $_POST['customerId'];
        $timestamp = date('Y-m-d H:i:s', strtotime($_POST['borrowDate']));  
        $borrow->borrowDate = $timestamp;
        $borrow->create();
        $errors["SUCCESS"] = 'The video was successfully created.';
    }
} else {
    $errors['REQUEST_METHOD'] = 'Please use HTTP POST';
    http_response_code(400);
}

echo json_encode($errors);