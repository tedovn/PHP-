<?php
function sumNumbers($a,$b) {
    $sum =  $a + $b;
    $sum = number_format((float)$sum,2,'.','');
    echo('$firstNumber + $secondNumber = ' . "$a + $b = $sum\n");
}
sumNumbers(2,5);
sumNumbers(1.567808,0.356);
sumNumbers(1234.5678,333);
?>