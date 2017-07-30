<?php

//rates.php
//twh 8-21-2014

/*
Rates on site:

Global
------
Extra hours hourly charge
Tuition late fee
After 6pm late fee
Change of schedule fee
Registration fee
Security deposit
Discount (percentage)

Programs (5/4/3/2)
--------
Wee People
Wandering Minstrels (FT/PT)
Lil' Dragons (FT/PT)
Pages (FT/PT)
Wize Wizards (FT/PT)
Squires (FT/PT)
Kings & Queens (FT/PT)

*/

//Set Initial Values (in dollars unless otherwise noted)
$extra_hours = 9;
$late_tuition = 20;
$late_pickup = array(15,1); //format: first 10min, additional minutes after 10
$schedule_change = 25;
$registration = array(50,100); //all, infants
$security_deposit = 0.5; //half-month, or 50%
$percent_discount = 0.1; //percentage

//Array format is FT-5, FT-4, FT-3, FT-2, PT-5, PT-4, PT-3, PT-2
$rate_wee_people =  array(1803,1566,1205,896);
$rate_wandering_minstrels = array(1674,1489,1154,855,1195,979,737,495);
$rate_lil_dragons = array(1545,1447,1118,752,1164,948,721,490);

$rate_pages = array(1406,1298,1077,721,1097,907,701,469); // These 3 are often the same
$rate_wise_wizards = array(1406,1298,1077,721,1097,907,701,469); // These 3 are often the same
$rate_squires = array(1406,1298,1077,721,1097,907,701,469); // These 3 are often the same

$rate_kings_queens = array(1334,1231,963,665,1170,1092,829,572); //FT, Wrap Around
$rate_kings_queens_pt = array(1072,876,660,443,557,459,356,242); //PT 6hr, PT 3hr
?>
