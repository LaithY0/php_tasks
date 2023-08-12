<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>
<body>

<?php


class show {

    public $str;


    function set($str){
       $this-> str = $str ;
    }

    function get(){

        return $this->str;
    }

}

$s = new show();
$s -> set('My Class has initialized!');

echo $s->get();

?>
    
</body>
</html>