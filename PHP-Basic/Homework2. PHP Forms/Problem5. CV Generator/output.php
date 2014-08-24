<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <style>
        td, table, th {
            border: 1px solid black;
        }

        td, th {
            width: 100px;
        }
        table {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<?php
require "includes.php";
if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['phone']) &&
    isset($_POST['gender']) && is_numeric($_POST['gender']) && $_POST['gender'] <= sizeof($gender) && isset($_POST['bdate'])
    && isset($_POST['nationality']) && isset($_POST['company']) && isset($_POST['work-from']) && isset($_POST['work-to'])
    && isset($_POST['comp-lang']) && isset($_POST['comp-skill']) && isset($_POST['language']) && isset($_POST['lang-comp'])
    && isset($_POST['lang-read']) && isset($_POST['lang-writing'])
) {
    $firstName = htmlentities($_POST['firstName']);
    $lastName = htmlentities($_POST['lastName']);
    $email = htmlentities($_POST['email']);
    $phone = htmlentities($_POST['phone']);
    $num = (int)$_POST['gender'];
    $sex = $gender[$num];
    $birthDate = htmlentities($_POST['bdate']);
    $nationlity_output = $nationality[$_POST['nationality']];
    $company = trim(htmlentities($_POST['company']));
    $workfrom = htmlentities($_POST['work-from']);
    $workto = htmlentities($_POST['work-to']);
    $computer = array();
    for ($i = 0; $i < sizeof($_POST['comp-lang']); $i++) {

        $compLang = trim(htmlentities($_POST['comp-lang'][$i]));
        $compSkill = $computerSkills[htmlentities($_POST['comp-skill'][$i])];
        if ($compLang != "")
            $computer[$compLang] = $compSkill;
    }
    $language = array();
    for ($i = 0; $i < sizeof($_POST['language']); $i++) {
        if ($_POST['lang-comp'][$i] == 0 || $_POST['lang-read'][$i] == 0 || $_POST['lang-writing'][$i] == 0) {

        } else {
            $lang = trim(htmlentities($_POST['language'][$i]));
            $comprehension = $langgroup[(int)$_POST['lang-comp'][$i]];
            $read = $langgroup[(int)$_POST['lang-read'][$i]];
            $writing = $langgroup[(int)$_POST['lang-writing'][$i]];
            if ($lang != '') {
                $language[$lang] = array($comprehension, $read, $writing);
            }
        }
    }
    $drivingLicense = array();
    for ($i = 0; $i < sizeof($_POST['driver_license']); $i++) {
        $drive = $drivingL[(int)$_POST['driver_license'][$i]];
        array_push($drivingLicense, $drive);
    }
    $check = true;

    if ((preg_match('/[^A-Za-z]/', $firstName)) || strlen($firstName) < 2 || strlen($firstName) > 20) {
        echo "$firstName is invalid input for <strong>First Name</strong> - use only letters between 2 and 20 <symbol></symbol><br>";
        $check = false;
    }
    if ((preg_match('/[^A-Za-z]/', $lastName)) || strlen($firstName) < 2 || strlen($firstName) > 20) {
        echo "$lastName is invalid input for <strong>Company Name</strong> - use only letters between 2 and 20<br>";
        $check = false;
    }
    if ((preg_match('/[^A-Za-z0-9\s]/', $company)) || strlen($company) < 2 || strlen($company) > 20) {
        echo "$company is invalid input for <strong>Company Name</strong> - use only letters between 2 and 20<br>";
        $check = false;
    } else
    foreach ($language as $key => $value) {
        if ((preg_match('/[^A-Za-z]/', $key)) || strlen($key) < 2 || strlen($key) > 20) {
            echo "$key is invalid input for <strong>Language</strong> - use only letters between 2 and 20<br>";
            $check = false;
        }
    }
    if (preg_match('/[^0-9\s\-\+]/', $phone)) {
        echo "$phone is invalid input for <strong>Phone number</strong><br> ";
        $check = false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email is invalid <strong>Email address</strong> <br>";
        $check = false;
    }
    $date_regex = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    if (!preg_match($date_regex, $birthDate)) {
        echo "$birthDate is invalid input for <strong>Birth Date</strong><br>";
        $check = false;
    }
    if (!preg_match($date_regex, $workfrom)) {
        echo "$workfrom is invalid input for <strong>Work from Date</strong><br>";
        $check = false;
    }
    if (!preg_match($date_regex, $workto)) {
        echo "$workto is invalid input for <strong>Work to Date</strong><br>";
        $check = false;
    }

    if ($check) {
        echo '<h1>CV</h1>';
        echo '<table class="table">';
        echo '<tr><th colspan="2">Personal Information</th></tr>';
        echo '<tr><td>First Name</td><td>'.$firstName.'</td></tr>';
        echo '<tr><td>Last Name</td><td>'.$lastName.'</td></tr>';
        echo '<tr><td>Email</td><td>'.$email.'</td></tr>';
        echo '<tr><td>Phone Number</td><td>'.$phone.'</td></tr>';
        echo '<tr><td>Gender</td><td>'.$sex.'</td></tr>';
        echo '<tr><td>Birth Date</td><td>'.convertDate($birthDate).'</td></tr>';
        echo '<tr><td>Nationality</td><td>'.$nationlity_output.'</td></tr>';
        echo '</table>';
        echo '<table class="table">';
        echo '<tr><th colspan="2">Last Work Position</th>';
        echo '<tr><td>Company Name</td><td>'.$company.'</td></tr>';
        echo '<tr><td>From</td><td>'.convertDate($workfrom).'</td></tr>';
        echo '<tr><td>To</td><td>'.convertDate($workto).'</td></tr>';
        echo '</table>';
        echo '<table class="table">';
        echo '<tr><th colspan="3">Computer Skills</th>';
        echo '<tr><td rowspan="'.(sizeof($computer)+1).'">Programming Languages</td><th>Language</th><th>Skill</th>';
        foreach ($computer as $key=>$value) {
        echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
        }
        echo '</table>';
        echo '<table class="table">';
        echo '<tr><th colspan="5">Other Skills</th></tr>';
        echo '<tr><td rowspan="'.(sizeof($language) +1).'">Languages</td><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>';
        foreach ($language as $key=>$value) {
            echo '<tr><td>'.$key.'</td><td>'.$value[0].'</td><td>'.$value[1].'</td><td>'.$value[2].'</td></tr>';
        }
        echo '<tr><td>Driver`s license</td><td colspan="4">';
        for ($i = 0;$i < sizeof($drivingLicense);$i++) {
            if ($i ==0) {
                echo $drivingLicense[$i];
            }else {
                echo ",".$drivingLicense[$i];
            }
        }
        echo '</td> </tr>';
        echo '</table>';

    }

}

?>
</body>
</html>