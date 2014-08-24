<?php

$daysInMonth = date('t');
$month = date('F');
$year = date('Y');
    for ($i = 1; $i <= $daysInMonth;$i++) {
        $checkDate = strtotime("$i $month $year");
        if(date('l',$checkDate) == 'Sunday') {
         echo date('jS F,Y', $checkDate) . "\n";
        }
    }
?>