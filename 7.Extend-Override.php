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

class Customer extends User
{
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName . '(customer)';
    }
}

$u = new User;
$u->firstName = 'User';
$u->lastName = 'Marij';
// $u->city = 'Bontang';
// $u->country = 'Indonesia';

echo $u->fullName() . "<br />";
// echo $c->location() . "<br />";

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Zul';
$c->city = 'Bontang';
$c->country = 'Indonesia';

echo $c->fullName() . "<br />";
echo $c->location() . "<br />";
