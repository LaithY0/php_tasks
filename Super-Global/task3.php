<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 3</title>
</head>
<body>



<form action="task3.php" method="post">
            <label>Number 1 </label>
            <input type="text" name="number1" >
            <label>Number 2 </label>
            <input type="text" name="number2" >
            <br>

            <button type="submit" name="pls" >+</button>
            <button type="submit" name="mins" >-</button>
            <button type="submit" name="mult" >*</button>
            <button type="submit" name="sq" >/</button>
        </form>


        





<?php


if(array_key_exists('pls' , $_POST)){

    $a = $_POST['number1'] + $_POST['number2'];

echo ' the sum of  ' . " " . $_POST['number1'] . ' + ' . $_POST['number2'] . ' is : ' . $a;

}


if(array_key_exists('mins' , $_POST)){

    $s = $_POST['number1'] - $_POST['number2'];

echo ' the subtraction of  ' . " " . $_POST['number1'] . ' - ' . $_POST['number2'] . ' is : ' . $s;

}


if(array_key_exists('mult' , $_POST)){

    $y = $_POST['number1'] * $_POST['number2'];

echo ' the multiplication of  ' . " " . $_POST['number1'] . ' * ' . $_POST['number2'] . ' is : ' . $y;

}



if(array_key_exists('sq' , $_POST)){

    $l = $_POST['number1'] / $_POST['number2'];

echo ' the division of  ' . " " . $_POST['number1'] . ' / ' . $_POST['number2'] . ' is : ' . $l;

}


?>
    
</body>
</html>