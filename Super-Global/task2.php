<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>



<form action="task2.php" method="post">
            <label>Your URL : </label>
            <input type="text" name="url" >
            <button type="submit" >Go</button>
        </form>



<?php

function open_window($url){


    echo '<script>window.open ("'.$url.'", "mywindow","status=0,toolbar=0")</script>';
}

$url = $_POST['url'];

open_window($url);



?>
    
</body>
</html>