<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 21</title>
</head>
<body>
    

<?php

function remove($number){

    for($i = 0 ; $i < strlen($number) ; $i++){

        if($number[$i] == "0"){
            $number[$i] = " ";
        };
    };

    echo $number ;
};

remove("120140150");

?>


</body>
</html>