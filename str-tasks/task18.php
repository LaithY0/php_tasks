<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 18</title>
</head>
<body>

 <?php
function remove($a){

for ($i = 0 ; $i < strlen($a) ; $i++){

    if ($a[$i] == ","){

        $a[$i] = ' ';
    };
}
echo $a;
};

$string = '2,543.12';

remove($string);
?>
    
</body>
</html>