<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 19</title>
</head>
<body>

<?php

function nextletter($letter){

    $letters = 'asdfghjklqwertyuiopzxcvbnm';
    $lenth = strlen($letters);

    for($i = 0 ; $i < $lenth ; $i++ ){

        if($letter == $letters[$i]){

            echo $letters[$i+1];
        }
    }

}

nextletter("p");




?>
    
</body>
</html>