<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3 </title>
</head>
<body>



<?php


class factorial {

    function set($num){
        $this->num = $num ;

        $n = 1;

        for($i = $num; $i > 0 ; $i--){

            $n = $n * $i;
        }

        return $n;
    }

    // function get(){  
    //     return $n;
    // }
}

$a = new factorial();

echo $a-> set(5);



?>


    
</body>
</html>