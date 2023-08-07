<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tas 10</title>
</head>


<body>

<?php

function find ($text , $word){

    $lower = strtolower($text);
    $lower1 = strtolower($word);

    if (strpos($lower,$lower1) !== false){

        echo 'word found !';
    }
    else{
        echo 'not found !';
    };
};

$text1 = "I am a full stack developer at orange coding academy";
$woed1 = "orange";
find($text1,$woed1);

?>
    
</body>
</html>