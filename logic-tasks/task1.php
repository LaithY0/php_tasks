<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>

<?php

function leap($year){

    if($year % 4 == 0 ){

        echo "this is a leap year .";

    }else{
        echo 'not a leap year.';
    }
}

leap(2000);
?>
    
</body>
</html>