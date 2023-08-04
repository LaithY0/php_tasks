<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>


<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>
<body>
    
<?php

function num(){
    $row = 5 ;

    for($i = 0 ; $i < $row ; $i++ ){

        for($j = 0 ; $j < $row ; $j++){

            if($j === $i){
                echo $i + 1 . " ";
            }
            else{
                echo'0' . " ";
            }
        }

        echo " " . "<br>";

    }


}

num();

?>
</body>
</html>
    
</body>
</html>