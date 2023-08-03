<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
    

<?php

function mult($num){

    if($num % 3 == 0 && $num !== 0 ){

        print_r($num);
        echo"<br>true";

    }
    else{
        print_r($num);
        echo"<br>false";
    }
}

mult(21);

?>
</body>
</html>