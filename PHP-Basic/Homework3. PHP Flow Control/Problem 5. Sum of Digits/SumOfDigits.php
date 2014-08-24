<?php
function checkInteger($input){
    if (is_numeric($input)) {
        if ($input == (int)$input) {
            return true;
        }

    }
    return false;
}

function SumOfDigits($input){
    $result = 0;
    while ($input % 10 != 0) {
        $result += $input % 10;
        $input /= 10;
    }
    return $result;

}
function printResult($input){
    if (checkInteger($input)) {
        echo(htmlentities(SumOfDigits($input)));
    } else {
        echo("I cannot sum that");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum Of Digits</title>
    <style>
        table{
            border: 1px solid;
        }
        td {
            border : 1px solid;

        }
    </style>
</head>
<body>
<form method="get" action="">
    <label>Input string:</label>
    <input type="text" name="input"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if (isset($_GET['input'])) :
$string = $_GET['input'];
$array = explode(", ", $string);
?>
<table>
    <?php foreach ($array as $value)  : ?>
        <?php if (!empty ($value)): ?>
            <tr>
                <td><?= htmlentities($value) ?></td>
                <td><?php htmlentities(printResult($value)) ?></td>
            </tr>
        <?php endif; endforeach;
    endif;
    ?>
</body>
</html>

