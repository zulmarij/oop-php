<?php
class Student
{
    function sayHello()
    {
        return "Hello, World!";
    }
}

$student1 = new Student;
$student2 = new Student;

echo $student1->sayHello() . "<br />";
echo $student2->sayHello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists('Student', 'sayHello')) {
    echo "Method SayHello tersedia";
} else {
    echo "Method SayHello tidak tersedia";
}
