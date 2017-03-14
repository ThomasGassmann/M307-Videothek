<?php

$router = new Router();
$router->define([
    '' => 'app/Controllers/HomeController.php',
    'api/Membership/GetById' => 'app/Controllers/GetMembershipByIdController.php'2
]);