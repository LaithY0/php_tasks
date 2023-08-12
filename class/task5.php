<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>

<?php

class age {

    function set($age1 , $age2){

        $this->age1 = $age1;
        $this->age2 = $age2;

        if($age1 < 1920 || $age2 < 1920){

            echo 'enter a right age ! ';

        }else
        {
            $s = 2023 - $age1;
            $a = 2023 - $age2;
            $d = $s - $a ;
            if($d > 0){
                echo 'The difference : ' . $d .' years ';
            }
            else{
                $d = $d * -1;
                echo 'The difference : ' . $d .' years ';
            }
        }

    }

    function get(){

        return $d;
    }
}

$s = new age();

$s-> set(1990,1996);

echo $s->get();



?>
    
</body>
</html>