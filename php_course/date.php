<?php
// echo date('d');  // Day
// echo date('m');  //Month
// echo date ('Y');   //Year
// echo date ('l');  //Day of the week

// echo date('h'); //Hour
// echo date('i');  //Min
// echo date('s');  //Seconds
// echo date('a');  //AM or PM

//Set Time Zone
date_default_timezone_set('America/Los_Angeles');

// echo date('h:i:sa');


$timeStamp = mktime(10,14,54,9,10,1990);
// echo $timeStamp;

// echo date('m/d/y h:i:sa', $timeStamp);

$timestamp2 = strtotime('7:00pm March 22 2016');

// echo $timestamp2;

echo date('m/d/Y h:i:sa ', $timestamp2);
