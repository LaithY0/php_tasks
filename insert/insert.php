<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>



<form action="insert.php" method="post">
            <label>Inter your first name : </label>
            <input type="text" name="fname" >
            <label>Inter your last name : </label>
            <input type="text" name="lname" >
            <br><br>
            <label>Inter your email : </label>
            <input type="text" name="email" >
            <label>Inter your password : </label>
            <input type="password" name="pass" >
            <br><br>
            <button type="submit" >Submit</button>
        </form>



<?php
include("conn.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$sql = "INSERT INTO users (Fname , Lname , Email , passwordd)
 VALUES   ('$fname' , '$lname' , '$email' , '$pass') ";

$conn->exec($sql);


?>

    
</body>
</html>