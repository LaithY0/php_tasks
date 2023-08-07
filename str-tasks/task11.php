<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 20</title>
</head>
<body>
    

<?php

function insert($stat , $word , $poss){

    if($poss < 0 || $poss > strlen($stat)){

        echo 'wrong position . ';
    }

    $newstat = substr_replace($stat , $word , $poss , 0);

    echo 'the new sentence is :' . $newstat;
}

$sta = "our car  is red.";

$newone = "color ";

insert($sta , $newone , 9);

?>



</body>
</html>