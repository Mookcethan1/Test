<?php
function my_autoloader($classname) {
    include ucfirst($classname) . ".php";
}
spl_autoload_register('my_autoloader');


$rabbit = new Rabbit("Roger");
$tortoise = new Tortoise("David");

$game = new Game();
$game->takepart($rabbit);
$game->takepart($tortoise);

$game->warmup();
$game->start();
$game->report();
?>