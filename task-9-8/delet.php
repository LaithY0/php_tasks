<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete </title>
</head>
<body>


<form action="" method="post">
        <label for="username">Id:</label>
        <input type="text" name="id">
        <button type="submit">Delete </button> 
    </form>
    <br>
    <br>
    <a href="http://localhost/php_tasks/task-9-8/userData.php">Back to users page .</a>
    
</body>
</html>

<?php
include_once("conn.php");

$id = $_POST['id'];
$s = 1 ;

$stmt = $conn->prepare("UPDATE users SET statee = '$s' WHERE id = '$id'  ");

$stmt->execute();


$count = $stmt->rowCount();

if($count > 0 ){

   echo 'deleted ';
}
?>