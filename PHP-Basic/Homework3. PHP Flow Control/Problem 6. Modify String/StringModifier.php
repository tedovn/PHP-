<?php
function checkIsPalindrome($input){
    if ($input == strrev($input)) {
        return "$input: is a palindrome!";
    } else {
        return "$input : is not a palindrome!";
    }
}
function reverseString($input){
        $takeInput = strrev($input);
    return $takeInput;
}
function splitString($input){
    $array = str_split($input);
    $result ='';
    foreach ($array as $value){
        $tempStr = preg_replace("/[^a-zA-z]/","",$value);
        $result .= $tempStr . ' ';
    }
    return trim($result);
}
function hashString($input){
    return crypt($input);
}
function shuffleString($input){
    $array = str_split($input);
    shuffle($array);
    $result = '';
    foreach ($array as $value) {
        $result.= $value;
    }
    return $result;
}
$radio = ['checkIsPalindrome','reverseString', 'splitString','hashString','shuffleString'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Modifier</title>
    <style>

    </style>
</head>
<body>
<form method="post" action="">
<input type="text" name="input"/>
<input type="radio" name="radio" value="0" id="palindrome"/><label>Check Palindrome</label>
<input type="radio" name="radio" value="1" id="reverse-string"/><label>Reverse String</label>
<input type="radio" name="radio" value="2" id="split"/><label>Split</label>
<input type="radio" name="radio" value="3" id="hash-string"/><label>Hash String</label>
<input type="radio" name="radio" value="4" id="shuffle-string"/><label>Shuffle String</label>
<input type="submit" value="Submit"/>
</form>
<?php
if (isset($_POST['input'])&& isset($_POST['radio'])) {
    $radioValue = (int)$_POST['radio'];
    $inputString = $_POST['input'];
    foreach ($radio as $key => $value) {
        if($key == $radioValue){
            echo  htmlentities($value($inputString));
        }
    }
}

?>
</body>
</html>