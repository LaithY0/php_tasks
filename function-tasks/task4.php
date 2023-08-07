<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>

<?php

function swap($var1 , $var2){

    echo ' var 1 : ' . $var1 . '<br> var 2 : ' . $var2 . '<br><br>';

    $s = $var1;

     $var1 = $var2 ;
     $var2 = $s ;
    

    echo ' var 1 : ' . $var1 . '<br> var 2 : ' . $var2;
}
swap(10,15);

?>
    
</body>
</html>