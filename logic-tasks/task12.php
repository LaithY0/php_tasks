<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 11</title>
</head>
<body>
    

<?php

function average($arr){

    $avg = array_sum($arr);
    $lenth = count($arr);

    if(($avg / $lenth) >= 90 && ($avg / $lenth) < 101 ){
        echo ' Grade : A ';
    }
    if(($avg / $lenth) >= 80 && ($avg / $lenth) < 90 ){
        echo ' Grade : B ';
    }
    if(($avg / $lenth) >= 70 && ($avg / $lenth) < 80){
        echo ' Grade : C ';
    }
    if(($avg / $lenth) >= 60 && ($avg / $lenth) < 70){
        echo ' Grade : D ';
    }
    if(($avg / $lenth) >= 50 && ($avg / $lenth) < 60 ){
        echo ' Grade : F ';
    }
    
}

$s = array(60,89,83,75,69,90);
average($s);

?>


</body>
</html>