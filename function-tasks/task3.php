<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>

<?php

function lower($str){

    if(strtolower($str) === $str){
        echo 'your string is ok .';
    }
    else{
        echo 'your string is not a lower case .';
    }
}

lower("Jordan");


?>
    
</body>
</html>