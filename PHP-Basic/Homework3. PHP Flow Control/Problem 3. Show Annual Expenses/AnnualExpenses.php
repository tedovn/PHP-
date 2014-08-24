<?php
$month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
function randomNumber()
{
    return rand(0, 999);

}

function totalSumMonth($array)
{
    $result = 0;
    foreach ($array as $value) {
        $cost = randomNumber();
        $result += $cost;
        echo("<td>$cost</td>");

    }
    echo("<td>$result</td></tr>");

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

    <form method="get">
        <label>Enter number of year</label>
        <input type="text" name="number"/>
        <input type="submit" name="submit" value="Show costs"/>
    </form>
    </body>
    </html>


<?php

if (isset($_GET['number'])) {
    $numberYears = $_GET['number'];
    $year = 2014;
    echo('<table>');
    echo("<tr><th>Year</th>");
    foreach ($month as $takeMonths) {
        echo("<th>$takeMonths</th>");
    }
    echo("<th>Total:</th></tr>");
    for ($i = 0; $i < $numberYears; $i++) {
        echo("<tr><td>$year</td>");
        echo(totalSumMonth($month));
        $year--;
    }


    echo('</table>');
}
?>