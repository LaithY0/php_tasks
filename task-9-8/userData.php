<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="post">
        <label for="username">Name:</label>
        <input type="text" name="name">
        <label for="useremail">Adress:</label>
        <input type="text" name="address">
        <label for="useremail">Salary:</label>
        <input type="text" name="salary">
        <button type="submit">Add</button> 
    </form>
<?php
echo "<br>";
echo "<hr>";

include_once("table.php");

echo '<a href = "http://localhost/php_tasks/task-9-8/update.php"> Update . <br><br></a>';

echo '<a href = "http://localhost/php_tasks/task-9-8/delet.php">  Delete .</a>';

?>

    


</body>
</html>