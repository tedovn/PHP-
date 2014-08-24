


<!DOCTYPE html>
<html>
<head>
    <title>Text Color</title>
    <style>
        .red {
            color: red;
        }

        .blue {
            color: blue;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <textarea rows="5" cols="50" name="input"></textarea><br>
    <input type="submit" value="Color text"/><br>
    <?php
    if (isset($_POST['input'])) {
        $text = $_POST['input'];
        $text = str_replace(" ", "", $text);
        for ($i = 0; $i < strlen($text); $i++): ?>
            <?php $num = ord($text[$i]) ?>
            <?php if ($num % 2 == 0) : ?>
                <span class="red"><?=chr($num)?></span>
            <?php else: ?>
                <span class="blue"><?=chr($num)?></span>
            <?php endif; endfor;} ?>
</form>
</body>
</html>