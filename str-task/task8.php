<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 17</title>
</head>


<body>

<?php

function diff($str1 , $str2){

    $lenth1 = strlen($str1);
    $lenth2 = strlen($str2);
    $maxlenth = max($lenth1 , $lenth2);

    for ($i = 0 ; $i < $maxlenth ; $i++){

        if($i >= $lenth1 || $i >= $lenth2){
            echo 'string have a differnt length';
        };

        if ($str1[$i] !== $str2[$i]){

            echo "First different character found: " . $str1[$i];
        };
    };


};

diff("aaaa" , "aaa");

?>
    
</body>
</html>