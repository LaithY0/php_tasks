<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>

<?php

function sum($int1 , $int2){

    if($int1 == $int2){
        print_r( ($int1 + $int2) * 3 );
    }
    else{
        print_r($int1 + $int2);
    }
}

sum(5,5);

?>

    
</body>
</html>