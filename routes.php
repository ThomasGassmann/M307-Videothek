<?php

$router = new Router();
$router->define([
    '' => 'app/Controllers/HomeController.php',
    'CreateUser' => 'app/Controllers/CreateUserController.php',
    'CreateVideo' => 'app/Controllers/CreateVideoController.php',
    'api/Membership/GetById' => 'app/Controllers/GetMembershipByIdController.php',
    'api/Membership/GetById' => 'app/Controllers/GetMembershipByIdController.php',
    'api/Membership/DeleteById' => 'app/Controllers/DeleteMembershipByIdController.php',
    'api/Membership/Add' => 'app/Controllers/AddMembershipController.php',
    'api/Membership/GetAll' => 'app/Controllers/GetAllMembershipsController.php',
    'api/Video/GetAll' => 'app/Controllers/GetAllVideosController.php',
    'api/Video/GetById' => 'app/Controllers/GetVideoByIdController.php',
    'api/Video/DeleteById' => 'app/Controllers/DeleteVideoByIdController.php',
    'api/Video/Add' => 'app/Controllers/AddVideoController.php',
    'api/Customer/Add' => 'app/Controllers/AddCustomerController.php',
    'api/Customer/DeleteById' => 'app/Controllers/DeleteCustomerByIdController.php',
    'api/Customer/GetAll' => 'app/Controllers/GetAllCustomersController.php',
    'api/Customer/GetById' => 'app/Controllers/GetCustomerByIdController.php',
    'api/Borrow/Add' => 'app/Controllers/AddBorrowController.php',
    'api/Borrow/GetAll' => 'app/Controllers/GetAllBorrowsController.php',
    'api/Borrow/GetById' => 'app/Controllers/GetBorrowByIdController.php',
    'api/Borrow/DeleteById' => 'app/Controllers/DeleteBorrowByIdController.php'
]);