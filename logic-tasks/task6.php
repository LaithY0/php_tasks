<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>

<?php


function rang($num){

    if($num > 19 && $num < 51 ){

        print_r($num);
        echo"<br>in the range";

    }
    else{
        print_r($num);
        echo"<br>not in the range";
    }
}

rang(25);

?>
    
</body>
</html>