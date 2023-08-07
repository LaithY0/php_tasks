<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 25</title>
</head>
<body>

<?php

$string1 = 'The quick brown fox jumps over the lazy dog';

$ffive = explode(" " , $string1);

$newstr = array_slice($ffive , 0 , 5);

$newstat = implode( " " , $newstr);

print_r ($newstat);

?>
    
</body>
</html>