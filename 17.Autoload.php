<?php

function myAutoload($class)
{
    if (preg_match('/\A\w+\Z/', $class)) {
        include '/autoload/' . $class . ".php";
    }
}

spl_autoload_register('myAutoload');

$santri = new Santri();
echo $santri->name . "<br />";

$cat = new Cat();
echo $cat->name;
