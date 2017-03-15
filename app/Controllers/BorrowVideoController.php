<?php

$customers = (new Customer())->getAll();
$customerArray = array(); 
foreach($customers as $customer){
    array_push($customerArray, array(
        'name' => $customer->firstName . ' ' . $customer->lastName,
        'id' => $customer->id)); 
};
$videos = (new Video())->getAll();
$videoArray = array();
foreach($videos as $video){
    array_push($videoArray, array(
        'title' => $video->title,
        'id' => $video->id
    ));
};


require 'app/Views/borrowVideo.view.php';