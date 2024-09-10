<?php

class Student
{

  public static $grades = ['Freshman', 'Sophomore', 'Junior', 'Senior'];
  private static $total_students = 0;

  public static function motto()
  {
    return "To learn PHP OOP!";
  }

  public static function count()
  {
    return self::$total_students;
  }

  public static function add_student()
  {
    self::$total_students++;
  }
}

echo Student::$grades[0] . "<br>";
echo Student::motto() . "<br>";

// echo Student::$total_students . "<br>"; //error

echo Student::count() . "<br>"; //0 students 
Student::add_student(); // adds 1 student
echo Student::count() . "<br>";  // total now 1 student

// Static properties and methods are inherited 
class PartTimeStudent extends Student {}

echo PartTimeStudent::$grades[0] . "<br>";
echo PartTimeStudent::motto() . "<br>";

// changes are shared too!
PartTimeStudent::$grades[] = 'Alumni';
echo implode(', ', Student::$grades) . "<br>";

Student::add_student();
Student::add_student();
Student::add_student();
PartTimeStudent::add_student();

echo Student::count() . "<br>"; // shows 5 students
echo PartTimeStudent::count() . "<br>"; // shows 5 students
