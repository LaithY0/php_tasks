<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 8</title>
</head>
<body>


<?php

function Ccount($str){

    $x = 0;

    for($i = 0 ; $i < strlen($str) ; $i++){

        if($str[$i] == "c" || $str[$i] == "C"){

            $x = $x + 1 ;
        }
    }

    echo 'the number of letter c is : ' . $x ;
}

Ccount("Orange Coding Academy");

?>

    
</body>
</html>