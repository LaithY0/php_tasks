<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 16</title>
</head>
<body>
    

<?php 

$sta = "my new car is so good ";

$exp = explode(' ' , $sta);

$newword = "our";

$exp[0] = $newword;

$newstat = implode(" " , $exp);

echo $newstat;





?>


</body>
</html>