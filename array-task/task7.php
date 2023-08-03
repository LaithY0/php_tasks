<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>

<?php


function avrg($arr){

    for($i = 0 ; $i < count($arr) ; $i++){
      $allnum = $allnum + $arr[$i];
    }
     
sort($arr);

echo " <br>first seven lowest temperatures : <br>";

   for ($c = 0 ; $c < 7 ; $c++){
    print_r($arr[$c]);
    echo'<br>';
   }
 
   echo "<br>last seven highest  temperatures : <br>";
   $lenth = count($arr) - 7;

   for ($lenth ; $lenth <= count($arr) ; $lenth++){

    print_r($arr[$lenth]);
    echo'<br>';

   }


     $avreg = $allnum / count($arr);
     echo 'the average is : <br>';
    print_r($avreg);
}

$v = array(15,10,80,25,55,4,88,58,98,77,10,2,42,82,49);
avrg($v);


?>
    
</body>
</html>