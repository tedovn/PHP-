<?php
function print3Digits($input) {
    $arr = array();
    if ($input <=101) {
       echo "no\n";
       return;
    }
    for($i = 102;$i<= $input;$i++) {
        $number = $i;
        $firstDigit = $number % 10;
        $number /= 10;
        $secondDigit = $number % 10;
        $number /= 10;
        $thirdDigit = $number % 10;

        if ($firstDigit != $secondDigit && $secondDigit != $thirdDigit && $firstDigit != $thirdDigit && $i <=999) {
            array_push($arr,$i);
        }
    }
    //print results
    foreach ($arr as $key => $value) {
         if ($key < sizeof($arr)-1) {
             echo $value .", ";
         } else {
             echo $value;
         }
    }

    echo "\n";

}
print3Digits(1234);
print3Digits(145);
print3Digits(15);
print3Digits(247);
?>