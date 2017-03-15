<?php
header('Content-Type: application/json');
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['id'])) {
        $errors["INVALID_ID"] = 'Please provide an id.';
    } else {
        if (!(new Customer())->exists($_POST['id'])) {
            $errors["INVALID_OPERATION"] = 'For an udpate the item has to exist.';
        }
    }
    if (!isset($_POST['firstName']) || $_POST['firstName'] === null || $_POST['firstName'] === '') {
        $errors['INVALID_FIRSTNAME'] = 'Please provide a valid first name.';
    }
    if (!isset($_POST['lastName']) || $_POST['lastName'] === null || $_POST['lastName'] === '') {
        $errors['INVALID_LASTNAME'] = 'Please provide a valid last name.';
    }
    if (!isset($_POST['mail'])) {
        $errors['INVALID_MAIL'] = 'Please provide a mail address.';
    } else {
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['INVALID_MAIL'] = 'The mail address has no valid format.';
        }
    }
    if (isset($_POST['phone'])) {
        if ($_POST['phone'] !== '' && !preg_match("/^[0123456789+()\/ -]*$/", $_POST['phone'])) {
            $errors["INVALID_PHONE"] = 'The phone number is invalid and should not be empty or contain no letters.';
        }
    }
    if (!isset($_POST['membership'])) {
        $errors["INVALID_MEMBERSHIP"] = 'Please provide a valid membership.';
    } else {
        $membership = new Membership();
        if (!$membership->exists($_POST['membership'])) {
            $errors["INVALID_MEMBERSHIP"] = 'The given membership does not exist.';
        }
    }
    if (count($errors) === 0) {
        $customer = (new Customer())->getById($_POST['id']);
        $customer->firstName = $_POST['firstName'];
        $customer->lastName = $_POST['lastName'];
        $customer->mail = $_POST['mail'];
        $customer->phone = $_POST['phone'];
        $customer->memberShipStateId = $_POST['membership'];        
        $customer->save();
        $errors["SUCCESS"] = 'The video was successfully updated.';
    }
} else {
    $errors['REQUEST_METHOD'] = 'Please use HTTP POST';
    http_response_code(400);
}

echo json_encode($errors);