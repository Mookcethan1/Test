<?php

class Animal {
    public function move(){
        echo "(....)";
    }
}

class Lion extends Animal {

    public function lionMove(){
        echo "(,,,)";
    }

}

class Tiger extends Animal {

    public function tigermovw(){
        echo"([[[)";
    }

}

$lion = new Lion();
$lion->move();
$lion->lionMove();

$tiger = new Tiger();
$tiger->move();
$tiger->tigermovw();
?>