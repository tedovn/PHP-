<?php
$langgroup = array(1=>'beginner',2=>'intermediate',3=>'advanced');
$gender = array(1 => 'Female', 2 => 'Male');
$nationality = array(1 => 'Austrian', 2 => 'Belgian', 3 => 'Bulgarian', 4 => 'Danish', 5 => 'English', 6 => 'German', 7 => 'Greek',
    'Indian', 'Norwegian', 'Rumanian', 'Scottish', 'American', 'Turkish');
asort($nationality);
$computerSkills = array(1 => 'Beginner', 2 => 'Programmer', 3 => 'Ninja');
$drivingL = array(1=>'B',2=>'A',3=>'C');
function convertDate ($date) {
    $temp = explode('/',$date);
    $result = '';
    for($i = sizeof($temp) - 1;$i >=0;$i--) {
        if($i ==sizeof($temp) - 1) {
            $result = $result . $temp[$i];
        } else {
            $result = $result . '-' . $temp[$i];
        }
    }
    return $result;
}
?>