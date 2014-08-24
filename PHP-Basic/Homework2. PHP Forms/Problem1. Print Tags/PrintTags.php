<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<form method="get">
    Enter Tags:<br>
    <input type="text" name="EnterText" /><br>
    <input type="submit" name="submit"/>
</form>

<?php
    if(isset($_GET['submit'])){

        $enterText = htmlentities($_GET['EnterText']);
        $takeInputText = explode(", " , $enterText );
        for ($i = 0 ; $i < sizeof($takeInputText) ; $i++){
            $result = $i .  " : "  . $takeInputText[$i];
            echo("$result<br>");

        }

    }
?>
</body>
</html>