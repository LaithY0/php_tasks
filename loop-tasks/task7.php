<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 5</title>
</head>


<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 7</title>
</head>
<body>
    
<?php

function fibonacci($n) {
    $a = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $a[$i] = $a[$i - 1] + $a[$i - 2];
    }

    return $a;
}

$x = 10;

$y = fibonacci($x);

echo "Fibonacci Sequence of $x elements: ";
foreach ($y as $num) {
    echo "$num, ";
}
?>

</body>
</html>
    
</body>
</html>