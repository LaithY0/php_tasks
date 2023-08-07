<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>

<?php


function remov($arr){

    print_r(array_unique($arr));
}

$a = array("red" , "green" , 1 , 5 , 1 , "red");

remov($a);

?>
    
</body>
</html>