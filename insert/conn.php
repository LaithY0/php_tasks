<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conn </title>
</head>
<body>
    
<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "test";



try{

  $conn = new PDO ("mysql:host=$server;dbname=test", $user, $password);

   echo  "Connected successfully";
}
catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}


?>



</body>
</html>