

<!DOCTYPE html>
<html>
<head>
    <title>Text Filter</title>
    <style>

    </style>
</head>
<body>
<form method="post" action="">
<textarea rows="6" cols="50" name="text"></textarea><br>
<input type="text" name="words" size="50"/><br>
<input type="submit" value="Submit"/>
</form>
<?php
function replaceWordWithStar($input , $ban_word){
    $replaceLetter = '';
    for($i = 0 ; $i < strlen($ban_word);$i++){
        $replaceLetter .= "*";
    }
    return str_replace($ban_word , $replaceLetter , $input);

}
if(isset($_POST['text']) && isset($_POST['words'])){
    $text = $_POST['text'];
    $ban_list = preg_split('/[, ]+/' ,$_POST['words'] , -1 , PREG_SPLIT_NO_EMPTY );
    foreach ($ban_list as $value){
        $text = replaceWordWithStar($text,$value);
    }
    echo $text;


}
?>
</body>
</html>