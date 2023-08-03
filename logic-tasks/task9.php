<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 9</title>
</head>
<body>

<?php

function calc($x, $s ,$y){

    if($s == "+"){
        print_r($x + $y);
    }
    if($s == "-"){
        print_r($x - $y);
    }

    if($s == "*"){
        print_r($x * $y);
    }

    if($s == "/"){
        print_r($x / $y);
    }

}

calc(10 , "*" , 15);

?>
    
</body>
</html>