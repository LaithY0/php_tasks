<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 14</title>
</head>
<body>

<?php


$email = 'info@gmail.com';

$firstp = explode('.' , $email);

$name = $firstp[1];

echo 'the first part  : '.$name ;


?>
    
</body>
</html>