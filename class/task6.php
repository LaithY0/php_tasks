<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 6</title>
</head>
<body>

<?php

class convert {

    public $str;

    // function set($str){

    //     // $a = explode('-' , $str);
    //     $s = strtotime($str);
    //     $z = date('D-M-Y' , $s);
    //     $this->str = $str;

    // }

    function get($str){
        $s = strtotime($str);
        $z = date('d-m-Y' , $s);
        $this->str = $str;

       return $z;
    }
}

$a = new convert();

// $a-> set('20-10-1995');

print_r($a->get('20-10-1995'));

?>
    
</body>
</html>