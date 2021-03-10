<?php

class IsPossitiveInt
{
    public function __invoke($value)
    {
        return ((int) $value == $value && $value > 0);
    }
}

$invoke = new IsPossitiveInt();
var_dump($invoke(1));
echo "<br />";
var_dump($invoke('5'));
echo "<br />";
var_dump($invoke(4.0));
echo "<br />";
var_dump($invoke(-2));
echo "<br />";
var_dump($invoke(3.1));
