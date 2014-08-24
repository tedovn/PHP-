<!DOCTYPE html>

<?php
$result = '<table><tbody><tr><th>Number</th><th>Square</th></tr></tbody></table>';
$sum = 0;
for ( $i = 0 ; $i <=100 ; $i++){
    if( $i == 0 ){

    }
    else if ( $i % 2 == 0){
        $sqrDigit = sqrt($i);
        $sqrDigit = round($sqrDigit , 2 , PHP_ROUND_HALF_UP);
        $sum += $sqrDigit;
        $result .= "<table><tbody><tr><td>{$i}</td> <td>{$sqrDigit}</td></tr></tbody></table>";
    }


}
$result .= "<table></tbody><tfoot><tr><td>Total: </td><td>$sum</td></tr></tbody></table></table>";

?>
<html>
<head>
    <title>Square Root Sum</title>
    <style>
        table{
            border: 1px solid;
        }
        tr th{
            border: 1px solid;
        }
        tr td{
            width: 50px;
            border: 1px solid;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if(isset($result)) {
    echo $result;
}
?>
</body>
</html>