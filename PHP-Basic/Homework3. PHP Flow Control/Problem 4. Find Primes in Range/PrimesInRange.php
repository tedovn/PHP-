<?php
function isPrime($a)
{
    $temp = floor(sqrt($a));
    if ($a == 1 || $a == 2) {
        return true;
    }
    for ($i = 2; $i <= $temp; $i++) {
        if ($a % $i == 0) {
            return false;
        }

    }
    return true;
}

function printNumber($b)
{
    if (isPrime($b)) {
        echo("<b>$b</b>");
    } else {
        echo("$b");
    }

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>AnnualExpenses</title>
    <style>
        table {
            border: 1px solid;
        }

        th, td {
            border: 1px solid;
        }

    </style>
</head>
<body>

<form method="get" action="">
    <label>Starting Index</label>
    <input type="text" name="start"/>
    <label>End:</label>
    <input type="text" name="end"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>
<?php
if (isset($_GET['start']) && isset($_GET['end'])) {
    $startDigit = $_GET['start'];
    $endDigit = $_GET['end'];
    for ($i = $startDigit; $i <= $endDigit; $i++) {
        if ($i < $endDigit) {
            printNumber($i);
            echo(",\n");
        } else {
            printNumber($i);
        }

    }
}
?>

