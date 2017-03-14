<?php

$router = new Router();
$router->define([
    '' => 'app/Controllers/HomeController.php',
    'CreateUser' => 'app/Controllers/CreateUserController.php',
    'CreateVideo' => 'app/Controllers/CreateVideoController.php',
    'api/Membership/GetById' => 'app/Controllers/GetMembershipByIdController.php'
]);