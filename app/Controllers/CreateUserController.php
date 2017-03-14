<?php

$memberships = (new Membership())->getAll();
require 'app/Views/createUser.view.php';