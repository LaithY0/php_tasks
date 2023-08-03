<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>


<body>

<form action = "task9.php"  method = "post">

<label>String  </label>
            <input type="text" name="name" >
            <button type="submit" >Submit</button>

</form>

<?php

$string = $_POST["name"];

echo "<br><br>";

echo "the upper case : " , strtoupper($string);

echo "<br><br>";

echo "the lower case : " , strtolower($string);

echo "<br><br>";

$firstL = $string[0];

echo strtoupper($firstL) , substr($string,1);

echo "<br><br>";


?>


<?php
echo "<br>--------------------------<br> ";

$string2 = $_POST["name"];



echo "<br><br>";

echo ucwords($string2);




?>
    
</body>
</html>