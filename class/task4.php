<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>

<?php


class sort {

    public $arr;

    function set($arr){
        sort($arr);
        $this->arr = $arr;
        
    }

    function get(){
        return $this->arr;
    }
}

$s = array(11, -2, 4, 35, 0, 8, -9);

$a = new sort();

$a->set($s);
echo "<pre>";
print_r($a->get());


?>
    
</body>
</html>