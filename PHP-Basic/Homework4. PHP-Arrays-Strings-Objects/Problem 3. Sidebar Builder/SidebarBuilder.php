<?php
if (isset($_POST['firstInput']) && isset($_POST['secondInput']) && isset($_POST['thirdInput'])){
$firstText = $_POST['firstInput'];
$secondText = $_POST['secondInput'];
$thirdText = $_POST['thirdInput'];
$categories = explode(", ", $firstText);
$tags = explode(", ", $secondText);
$months = explode(", ", $thirdText);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Sidebar Builder</title>
    <style>
        div {

        }

        h1 {
            margin-bottom: 0;
        }

        hr {
            margin-top: 0;
            margin-bottom: 10%;
        }

        ul {
            margin: 0;

        }

        li {
            text-decoration: underline;
        }

        aside {
            border: 1px solid;
            width: 8%;
            vertical-align: middle;
            padding-left: 0.5%;
            padding-bottom: 1%;
            border-radius: 15px;
            background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.46, #CBD9EB), color-stop(0.61, #92AFD6), color-stop(0.76, #CBD9EB), color-stop(0.94, #92AFD6));
        }
    </style>
</head>
<body>
<form method="post" action="">
    <label for="firstInput">Categories:</label>
    <input type="text" name="firstInput" size="35"/><br>
    <label for="secondInput">Tags:</label>
    <input type="text" name="secondInput" size="35"/><br>
    <label for="thirdInput">Months:</label>
    <input type="text" name="thirdInput" size="35"/><br>
    <input type="submit" value="Generate"/>


    <div><br>
        <aside><h1>Categories</h1>
            <hr>

            <?php for ($i = 0; $i < sizeof($categories); $i++): ?>

                <ul>
                    <li><?= htmlentities($categories[$i]) ?></li>
                </ul>
            <?php endfor; ?>
        </aside>
        <br>
        <aside><h1>Tags</h1>
            <hr>
            <?php for ($i = 0; $i < sizeof($tags); $i++): ?>
                <ul>
                    <li><?= htmlentities($tags[$i]) ?></li>
                </ul>
            <?php endfor; ?>
        </aside>
        <br>
        <aside><h1>Months</h1>
            <hr>
            <?php
            for ($i = 0; $i < sizeof($months); $i++): ?>
                <ul>
                    <li><?= htmlentities($months[$i]) ?></li>
                </ul>
            <?php endfor;
            } ?>
        </aside>
    </div>

</form>
</body>
</html>