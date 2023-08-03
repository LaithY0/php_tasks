<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2 </title>
</head>
<body>
    

<?php

$colors = array('white', 'green', 'red');

for ($row = 0 ; $row < 1 ; $row++){

    echo "<p><b> Color is :  </b></p>";

    echo "<ul>";
    for($color = 0 ; $color < 3 ; $color++){
        
        echo "<li>".$colors[$color] ."</li>";
    }
}




?>



</body>
</html>