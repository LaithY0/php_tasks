<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 8</title>
</head>
<body>

<?php
function calculate($units) {
    $total = 0;

   
    if ($units <= 50) {
        $total = $units * 2.50;
    } else {
     
        $total = $total + (50 * 2.50);
        $units = $units - 50;

       
        if ($units <= 100) {
            $tota = $total + ($units * 5.00);
        } else {
           
            $total = $total + (100 * 5.00);
            $units = $units - 100;

           
            if ($units <= 100) {
                $total = $total + ($units * 6.20);
            } else {
                
                $total = $total + (100 * 6.20);
                $units = $units - 100;

                $total = $total + ($units * 7.50);
            }
        }
    }

    return $total;
}

$unitsConsumed = 100;
$billAmount = calculate($unitsConsumed);
?>



?>
    
</body>
</html>

