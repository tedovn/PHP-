<!DOCTYPE html>
<html>
<head>
    <title>Rich People`s Problems</title>
    <style>
        table{
            border: 1px solid;
        }
        th , td {
            border: 1px solid;
        }

    </style>
</head>
<body>

<form method="get">
    <labe>Enter cars</labe>
    <input type="text" name="cars"/>
    <input type="submit" name="submit" value="Show result"/>
</form>
</body>
</html>




<?php

if (isset($_GET['cars'])){
echo('<table><tr><th>Car</th><th>Color</th><th>Count</th></tr>');
$takeCars = $_GET['cars'];
$takeCars = explode(", ", $takeCars);
$colors = ['yellow' , 'red' , 'green' , 'blue' , 'black' , 'white'];

    for($i = 0 ; $i < sizeof($takeCars) ; $i++){
        $randomColor = rand(0 , sizeof($colors) - 1);
        $n = rand(1 , 5 );
        echo ("<tr><td>$takeCars[$i]</td><td>$colors[$randomColor]</td><td>$n</td></tr>");
    }

echo('</table>');
}

?>
