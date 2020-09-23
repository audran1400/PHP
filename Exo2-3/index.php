<?php
function loadMyClass($className)
{
    include_once $className . ".php";
}
spl_autoload_register('loadMyClass');

$batman = new Superhero("batman", "bruce wayne", ["black"]);
$humain = new human("brice");

$list =
array(
    array("name" => "Batman",
"identity" => "Bruce Wayne",
"colors" => array("black") ),
    array("name" => "Superman",
"identity" => "clark Kent",
"colors" => array("red","blue") ),
    array("name" => "Flash",
"identity" => "Barry Allen",
"colors" => array("Red","Yellow") )
);
foreach(Superhero::affichage($list) as $hero){
    echo $hero;
}


var_dump($humain);
echo ($humain);