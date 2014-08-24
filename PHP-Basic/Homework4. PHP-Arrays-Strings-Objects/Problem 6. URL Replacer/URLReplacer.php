<!DOCTYPE html>
<html>
<head>
    <title>URLReplacer</title>
    <meta charset="UTF-8">
    <style type="text/css">
        textarea {
            width: 300px;
            height: 100px;
        }
    </style>
</head>
<body>
<form method="post">
    <div><textarea name="text"></textarea></div>
    <input type="submit" value="Generate Url">
</form>
<?php
if (isset($_POST['text'])):
    $text = $_POST['text'];
    $regex = "/<[a][\s]+href[\s]*[=][\s]*(\"|')([\w+\s\.\/\:#]*)\\1>([\w+\s\-.\:!?]*)<\/a>/";
    preg_match_all($regex,$text,$match);
//    var_dump($match);
    $replace = $match[2];
    $string = $match[0];
    $inf = $match[3];
    foreach ($replace as $key=>$value) {
        $replaceWord = '[URL='.$replace[$key].']'. $inf[$key] .'[/URL]';
        $text = str_replace($string[$key],$replaceWord,$text);
    }
    echo htmlentities($text); endif;   ?>

</body>
</html>