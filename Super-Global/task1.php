<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>



<form action="task1.php" method="post">
            <label>Email : </label>
            <input type="text" name="name" >
            <label>Password </label>
            <input type="password" name="pass" >
            <button type="submit" >Submit</button>
        </form>



<?php

echo 'Your Email is :  ' . $_POST["name"] . "<br><br>";

echo 'Your Password is :  ' . $_POST["pass"] . "<br><br>";





?>
    
</body>
</html>