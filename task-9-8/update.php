

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>u</title>
</head>
<body>
    
<form action="" method="post">
        <label for="username">Id:</label>
        <input type="text" name="name">
        <label for="username">New Name:</label>
        <input type="text" name="newName">
        <label for="useremail">New Adress:</label>
        <input type="text" name="newAddress">
        <label for="useremail">New Salary:</label>
        <input type="text" name="newSalary">
        <input type="submit"> 
    </form>

    
</body>
</html>


<?php

include("conn.php");
 
 $id = $_POST['name'];
 $newName = $_POST['newName'];
 $newAddress = $_POST['newAddress'];
 $newSalary = $_POST['newSalary'];


$stmt = $conn->prepare("UPDATE users SET namee = '$newName' , addresss = '$newAddress' ,
 salary = '$newSalary' WHERE id = '$id' ");

 $stmt->execute();

 $count = $stmt->rowCount();

 if($count > 0 ){
    echo 'updated ';
 }
 
echo '<br><br>';

echo '<a href = "http://localhost/php_tasks/task-9-8/userData.php" > Back to users data .</a>';



?>