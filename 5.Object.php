<?php
class Student
{
    var $firstName;
    var $lastName;

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$student1 = new Student;

$student1->firstName = 'Zul';
$student1->lastName = 'Marij';

echo $student1->firstName . "<br />";
echo $student1->lastName . "<br />";
echo $student1->fullName();
