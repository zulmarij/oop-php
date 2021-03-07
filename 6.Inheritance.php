<?php
class User
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Costumer extends User
{
}

$c = new Costumer;
$c->firstName = 'Customer';
$c->lastName = 'Zul';

echo $c->fullName() . "<br />";

if (is_subclass_of($c, 'User')) {
    echo "Istance Costumer merupakan subclass Class User <br />";
}

$parents = class_parents($c);
echo implode(', ', $parents);
