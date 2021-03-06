<?php

$borrows = new VideoBorrow();
$all = $borrows->getAll();
$array = array();
foreach ($all as $item) {
    $video = (new Video())->getById($item->videoId);
    $customer = (new Customer())->getById($item->customerId);
    $borrowDate = $item->borrowDate;
    $membership = (new Membership())->getById($customer->memberShipStateId);
    $date = strtotime($borrowDate);
    $daysahead = (int)$membership->borrowDays;
    $final_date = $date + (86400 * $daysahead);
    $start = date('d.m.Y', $date);
    $end = date('d.m.Y', $final_date);
    $smiley = '😁';
    if ($video->isBorrowed === 1 && time() > $final_date) {
        $smiley = '😠';
    }
    $borrowDate = date('d-m-Y', strtotime($item->borrowDate));
    $toAdd = array(
        'video' => $video,
        'customer' => $customer,
        'startDate' => $start,
        'endDate' => $end,
        'smiley' => $smiley,
        'customerId' => ($item->customerId),
        'borrowDate' => $borrowDate
    );
    array_push($array, $toAdd);
}
usort($array, function($a, $b) {
    $t1 = strtotime($a['startDate']);
    $t2 = strtotime($b['startDate']);
    return $t1 - $t2;
});

require 'app/Views/borrowlist.view.php';