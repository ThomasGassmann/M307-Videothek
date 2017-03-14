<?php

$customers = (new Customer())->getAll();
$array = array();
foreach ($customers as $item) {
    $membership = (new Membership())->getById($item->memberShipStateId);
    $addItem = array(
        'FirstName' => $item->firstName,
        'LastName' => $item->lastName,
        'Mail' => $item->mail,
        'Phone' => $item->phone,
        'Id' => $item->id,
        'Membership' => $membership
    );
    array_push($array, $addItem);
}
$memberships = (new Membership())->getAll();
require 'app/Views/customerlist.view.php';