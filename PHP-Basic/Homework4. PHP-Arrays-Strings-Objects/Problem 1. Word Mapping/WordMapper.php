<?php
if(isset($_GET['input'])){
    $takeInput = $_GET['input'];
    $makeLetterSmall = strtolower($takeInput);
    $arr = str_word_count($makeLetterSmall, 1 , '0..3');
    $result = array_count_values($arr);

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Word Mapper</title>
    <style>
        table{
            border: 1px solid;
            background: #c0c0c0;
        }
        td{
            border: 1px solid;
            background: #c0c0c0;

        }
    </style>
</head>
<body>
<form method="get" action="">
        <textarea rows="4" cols="50" name="input"></textarea><br>
    <input type="submit" name="submit" value="Count words"/>
</form>
<table>
    <?php foreach($result as $key=>$value):?>
    <tr><td><?= htmlentities($key)?></td><td><?=htmlentities($value)?></td></tr>
    <?php endforeach?>

</table>
</body>
</html>