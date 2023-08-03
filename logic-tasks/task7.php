<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>

<?php


$arr = array(15,10,20);

if($arr[0] > $arr[1] && $arr[0] > $arr[2] ){
    print_r($arr[0]);
}

if($arr[1] > $arr[0] && $arr[1] > $arr[2] ){
    print_r($arr[1]);
}

if($arr[2] > $arr[1] && $arr[2] > $arr[0] ){
    print_r($arr[2]);
}

?>
    
</body>
</html>