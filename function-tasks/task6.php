<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6 </title>
</head>
<body>


<?php


function palindrome($str){

    $a = strval($str);

    if($a == strrev($a)){

        echo ' thats a palindrome string ' ;
    }else{
        echo 'thats not a palindrome string ';
    }
}

palindrome('nan');

?>
    
</body>
</html>