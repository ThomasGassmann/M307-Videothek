<?php
header('Content-Type: application/json');
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['customerId']) || $_POST['customerId'] === null) {
        $errors['INVALID_CUSTOMER'] = 'Please provide a valid customer.';
    } else {
        if (!(new Customer())->exists($_POST['customerId'])) {
            $errors['INVALID_CUSTOMER'] = 'The given id does not exist.';
        }
    }
    if (count($errors) === 0) {
        $customer = (new Customer())->getById($_POST['customerId']);
        $membership = (new Membership())->getById($customer->memberShipStateId);
        $days = (int)$membership->borrowDays;
        $date = strtotime(date('d.m.Y'));
        $finalDate = $date + (86400 * $days);
        $formatted = date('d.m.Y', $finalDate);
        $errors["DATE_RESULT"] = $formatted;
    }
} else {
    $errors['REQUEST_METHOD'] = 'Please use HTTP POST';
    http_response_code(400);
}

echo json_encode($errors);