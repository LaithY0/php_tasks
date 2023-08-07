<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>


<?php

function Armstrong($num){

    $s = strval($num);

    $a = ($s[0] * $s[0] * $s[0]);
    $x = ($s[1] * $s[1] * $s[1]);
    $y = ($s[2] * $s[2] * $s[2]);

    if($a + $x + $y == $num){

        echo  $num . ' -> ' . $a . ' + ' . $x . ' + ' . $y . ' = ' . $num . '<br><br>';
        echo 'thats a strongarm number .';
    }
    else{
        echo   $num . ' -> ' . $a . ' + ' . $x . ' + ' . $y . ' = ' . ($a+$x+$y) . '<br><br>';
        echo 'thats not a strongarm number .';
    }


}

Armstrong(152);


?>
    
</body>
</html>