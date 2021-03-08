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