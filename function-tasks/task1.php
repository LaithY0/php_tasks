<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>

<?php


function prim($num){
    
    $g = 0;
    for($i = 2 ; $i < 10 ; $i++){

        for($j = 2 ; $j < 10 ; $j++){

            $s = $j * $i ;
            if($s == $num){
                $g++;
                echo $j .'*'. $i .'='.$s. '<br>' ;
               
            }
        }

    }
   
    if($g > 0){
        echo 'this number repet ' . $g . ' so its not a prim number';
    }
    else{
        echo 'this number in repet ' . $g . ' so its a prim number';
    }

   




}


prim(10);


?>
    
</body>
</html>