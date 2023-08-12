<?php
include("conn.php");

$name = $_POST['name'];
$adress = $_POST['address'];
$salary = $_POST['salary'];



$sql = "INSERT INTO users (namee , addresss , salary)
 VALUES   ('$name' , '$adress' , '$salary') ";
if($sql){
    header("Location: userData.php");
}
$conn->exec($sql);


?>