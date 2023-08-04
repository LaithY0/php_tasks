<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 9</title>
</head>
<body>

<?php

echo '<table cellpadding="3px" cellspacing="0px" border="1">';

for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>


    
</body>
</html>