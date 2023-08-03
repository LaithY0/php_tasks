<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>

<?php

function rows(){

    $row = 5 ;
    $leter = "A";

    for($i = 0 ; $i < $row ; $i++){

        for($j = 0 ; $j < $row ; $j++){

            if($j < $row - $i ){

                echo $leter." "; 
            }
            else{
                echo chr(ord($leter) + $i);
            }
            echo " ";
        }
        echo "<br>";
    }
}

rows();
?>
    
</body>
</html>