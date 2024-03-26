<?php

class Person {
    public $age = 35;

    public function greet(){
        echo "Hello";
    }

}

$p = new Person();
$p->greet();

?>