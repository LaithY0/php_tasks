<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>


<body>

<?php
$url = 'https://www.w3schools.com/php/default.asp';

$url=parse_url($url);

echo 'Scheme :  ' .$url['scheme']."<br><br>";
echo 'Host :  ' .$url['host']."<br><br>";
echo 'Path :  ' .$url['path'];
?>
    
</body>
</html>