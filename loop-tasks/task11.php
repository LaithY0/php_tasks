<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 11</title>
</head>
<body>

<?php


function numb($num){

    $numm = 1;

    for($i = 1 ; $i <= $num ; $i++){

        for($j = 1 ; $j <= $i ; $j++){

            echo $numm . " " ;
            $numm++;
        }
        echo '<br>';
    }
}

numb(5);



?>

    
</body>
</html>