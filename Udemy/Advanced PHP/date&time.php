<?php

// Date Time Class
// Old way that defaults to UTC
date_default_timezone_set('Australia/Sydney');
$date = date('Y-m-d H:i:s');
var_dump($date);

// After Php 5.2
// Defaults to current date and time.

// $currentDateTime = new DateTime();
$currentDateTime = DateTime::createFromFormat('d, m, y', $myDate);
var_dump($currentDateTime);
// var_dump($currentDateTime->format('d-M-Y')); This gives a string


// To Deal With Time Zones
$date = new DateTime(null, new DateTimeZone('Australia/Sydney'));

// Start Date / End Date
$startDate = new DateTime('2000-01-01 13:00:00');
$endDate = new DateTime('2005-01-01 13:00:00');

if ($startDate < $endDate) {
    echo 'start date < end date'
}

// Date Interval
// Period = Years Months Days Weeks
// Time = Hours Minutes Seconds
// Format P_T_
// P2Y = Two Years
// PT2M = Two Minutes
// P4Y4M = Four Years Four Months
$startDate = new DateTime('2000-01-01 13:00:00');
$endDate = clone $startDate;
$endDate->add(new DateInterval('P1Y2M'));
var_dump($endDate)

// Generating reoccurring dates using Date Period Class
$startDate = new DateTime('2016-01-01');
$interval = new DateTime('P1M');
$recurrences = 5;
$period = new DateTime($startDate, $interval, $recurrences);

foreach($period as $date) {
    echo $date->format('Y-m-d');
}
