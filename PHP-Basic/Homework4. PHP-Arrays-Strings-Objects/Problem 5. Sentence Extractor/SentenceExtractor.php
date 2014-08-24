<!DOCTYPE html>
<html>
<head>
    <title>Sentence Extractor</title>
    <style>

    </style>
</head>
<body>
<form method="post" action="">
    <p>This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it
        great? Well it is :)</p>
    <textarea rows="6" cols="50" name="text"></textarea><br>
    <input type="text" name="word" size="50"/><br>
    <input type="submit" value="Submit"/><br>
    <?php
    if (isset($_POST['text']) && isset($_POST['word'])) {

        $text = preg_split("/(?<=[.?!])\s*/", $_POST['text'], -1, PREG_SPLIT_NO_EMPTY);
        $word = $_POST['word'];
        foreach ($text as $sentence) {
            if (preg_match("/\s($word)\s+.*[.?!]+$/", $sentence)) {
                echo "<p>$sentence</p>";
            }

        }
    }
    ?>
</form>
</body>
</html>