<?php

class Animal {

    public function __construct(){
        echo "I'm alive <br>";
    }


    public function move(){
        echo "(...)";

    }

    public function __destruct(){
        echo "I'm dead";
    }
}

$a = new Animal();
$a->move();

?>