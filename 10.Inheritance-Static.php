<?php

class Student
{
    public static $grade = ['SD', 'SMP', 'SMA'];
    private static $totalStudents = 0;

    public static function motto()
    {
        return 'Learn PHP OOP';
    }

    public static function count()
    {
        return self::$totalStudents;
    }

    public static function addStudent()
    {
        return self::$totalStudents++;
    }
}

echo Student::$grade[2] . "<br />";
echo Student::motto() . "<br />";

echo Student::count() . "<br />";
Student::addStudent();
echo Student::count() . "<br />";

class PartTimeStudent extends Student
{
}

echo PartTimeStudent::$grade[1] . "<br />";
echo PartTimeStudent::motto() . "<br />";

PartTimeStudent::$grade[] = 'alumni';
echo implode(', ', Student::$grade) . "<br />";

Student::addStudent();
Student::addStudent();
PartTimeStudent::addStudent();

echo Student::count() . "<br />";
echo PartTimeStudent::count() . "<br />";
