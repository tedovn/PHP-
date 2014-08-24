<?php
function printNumeric($input) {
    if(is_numeric($input)){
        echo(var_dump($input));
    } else {
        echo(gettype($input));
        echo("\n");
    }
}
printNumeric('hello');
printNumeric(15);
printNumeric(1.234);
printNumeric(array(1,2,3));
printNumeric((object)[2,34]);
?>