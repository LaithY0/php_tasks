<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 12</title>
</head>
<body>
    


<?php
function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
       
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }

       
        for ($k = 1; $k <= $i; $k++) {
            echo chr(64 + $k) . " ";
        }

        echo "<br>";
    }

   
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }

        for ($k = 1; $k <= $i; $k++) {
            echo chr(64 + $k) . " ";
        }

        echo "<br>";
    }
}


$size = 5;

printPattern($size);
?>

</body>
</html>