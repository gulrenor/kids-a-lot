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
$rate_wee_people =  array(1750,1520,1170,870);
$rate_wandering_minstrels = array(1625,1445,1120,830,1160,950,715,480);
$rate_lil_dragons = array(1500,1405,1085,730,1130,920,700,475);
$rate_pages = array(1365,1260,1045,700,1065,880,680,455);
$rate_wise_wizards = array(1365,1260,1045,700,1065,880,680,455);
$rate_squires = array(1365,1260,1045,700,1065,880,680,455);
$rate_kings_queens = array(1295,1195,935,645,1135,1060,805,555); //FT, Wrap Around
$rate_kings_queens_pt = array(1040,850,640,430,540,445,345,235); //PT 6hr, PT 3hr
?>