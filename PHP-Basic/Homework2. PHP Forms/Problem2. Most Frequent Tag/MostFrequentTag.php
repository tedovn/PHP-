
<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
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
        $result = array_count_values($takeInputText);
        arsort($result);
        foreach($result as $key=>$value){
            echo("$key : $value times<br>");
        }
        $mostFrequentTag = array_search(max($result), $result);
        echo("Most Frequent Tag is : $mostFrequentTag");
    }
?>
</body>
</html>