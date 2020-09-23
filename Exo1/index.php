<?php
function loadMyClass($className)
{
    include_once $className . ".php";
}
spl_autoload_register('loadMyClass');

$batman = new Superhero("batman", "bruce wayne", "black");


var_dump($batman);
echo ($batman);
