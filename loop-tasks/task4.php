<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>

<?php

function num(){
    $row = 5 ;
    $nm = 1;

    for($i = 0 ; $i < $row ; $i++ ){

        for($j = 0 ; $j < $row ; $j++){

            if($j < $row - $i ){
                echo $nm." ";
            }
            else{
                echo $nm + $i . " ";
            }
        }

        echo " " . "<br>";

    }


}

num();

?>
    
</body>
</html>