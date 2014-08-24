<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>GetFormData</title>
</head>
<body>
<form action="" method="GET">
    <input type="text" name="name" placeholder="Name..."> <br>
    <input type="text" name="age" placeholder="Age..."> <br>
    <input type="radio" name="sex" value="male" id="male">
    <label for="male">Male</label> <br>
    <input type="radio" name="sex" value="female" id="female">
    <label for="female">Female</label> <br>
    <input type="submit" value="submit">
</form>
<?php
$check = false;
if (isset($_GET['name'])) {
    $name = htmlentities($_GET['name']);
    $check = true;
} else {
    $check = false;
}
if (isset($_GET['age'])) {
    if(!is_numeric($_GET['age'])){
        $check = false;
        echo "Годините трябва да са в цифри";
    }
    $age = htmlentities((int)$_GET ['age']);
    $check = true;
} else {
    $check = false;
}
if (isset($_GET['sex'])) {
    $sex = htmlentities($_GET['sex']);
    $check = true;
}
else {
    $check = false;
}
if ($check) {
    echo "My name is $name. A im $age years old. I am $sex.";
}


?>

</body>
</html>
