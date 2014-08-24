<?php
    if(isset($_GET['Amount']) && isset($_GET['currency']) && isset($_GET['interest']) && isset($_GET['period'])){
        $getAmount = $_GET['Amount'];
        $currency = $_GET['currency'];
        $interest = $_GET['interest'];
        $period = $_GET['period'];
        if($period == "six-months"){
            $period = 6;
        }
        elseif ($period == "one-year"){
            $period = 1;
        }
        elseif ($period == "two-years"){
            $period = 2;
        }
        elseif ($period == "five-years"){
            $period = 5;
        }
        $result = round($getAmount * pow(1 + (($interest / 100) / 12), $period / 12 * 12), 2);

        if($currency == 'USD') {
            $result = '$ ' . $result;
        }
        else if($currency == 'EUR') {
            $result = '&#8364; ' . $result;
        }
        else {
            $result .= " Lv.";
        }
        echo(pow(1 + (($interest / 100) / 12), $period / 12 * 12));
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Most Frequent Tag</title>
</head>
<body>
<form method="get">

    Enter Amount<input type="text" name="Amount" /><br>
    <input type="radio" name="currency" value="USD"/>USD
    <input type="radio" name="currency" value="EUR"/>EUR
    <input type="radio" name="currency" value="BGN"/>BGN<br>
    Compound Interest Amount<input type="text" name="interest"><br>
    <select name="period">
        <option value="six-months" >6 Months</option>
        <option value="one-year" >1 Year</option>
        <option value="two-years" >2 Years</option>
        <option value="five-years" >5 Years</option>
    </select>
    <input type="submit" name="submit" value="Calculate"/>
</form>

<?php
if(isset($_GET['submit'])){
    echo($result);

}
?>
</body>
</html>