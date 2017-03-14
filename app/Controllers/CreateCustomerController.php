<?php


$memberships = (new Membership())->getAll();
require 'app/Views/createcustomer.view.php';