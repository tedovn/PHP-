<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Information Table</title>
    <style>
        table td {
            border: 1px solid black;
            width: 100px;
            line-height: 25px;
        }
        table td:first-child {
            background: orange;
        }
        table td:last-child {
            text-align: right;
        }
        table {
           border-collapse: collapse;
        }
    </style>

</head>

<body>

<?php
function generateTable($input)
{
    echo " <table>";
    echo "<tr><td>Name</td><td>$input[0]</td><br>";
    echo "<tr><td>Phone number</td><td>$input[1]</td><br>";
    echo "<tr><td>Age</td><td>$input[2]</td><br>";
    echo "<tr><td>Address</td><td>$input[3]</td><br>";
    echo " </table>";
}
generateTable(['Gosho', '0882-321-423', '24', 'Hadji Dimitar']);
generateTable(['Pesho', '0884-888-888', '67', 'Suhata Reka']);
?>


</body>
</html>
