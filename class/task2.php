<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
</head>
<body>


<?php


class hello {

    public $name ;

    function set($name){
        $this->name = $name;
    }

    function get(){
        return $this->name;
    }
}

$s = new hello();

$s->set('mahmoud');

echo 'Hello All, I am ' . $s->get();

?>
    
</body>
</html>