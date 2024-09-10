<!--
  - Reuse Bicycle and Unicycle classes from challenge 3
  - Add a static property $instanceCount (like the student counter)
  - Write a static method called create()  "add one to $instanceCount and will create and return a new instance of the class to us."
  - Set visibility modifiers on $instanceCount and create()
  part 2
  - define a constant for storing an array of categories ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX']
  - set the const to public
  - Add a $category property for instances to store their category
  part 3
  - make $wheels a static property
  - make wheelDetails() a static method
  - Ensure that Unicycle returns expected wheelDetails()
  extra credit
  - create a method in Unicycle that extends a method in Bicycle by executing code before and after it. (like Chef example)
  Create a method in Unicycle which overrides a method in Bicycle but then also falls back to the original method if a condition is not met. 
-->

<?php

class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $description;
  private $weightKg = 0;
  protected $wheels = 2;

  public function name()
  {
    return "Name: " . $this->brand . " " . $this->model . " " . $this->year . "<br>";
  }

  public function weightLbs()
  {
    $newWeight = number_format($this->weightKg * 2.2046226218, 2);
    if ($newWeight == 1) {
      echo $newWeight . " lb <br>";
    } else {
      echo $newWeight . " lbs <br>";
    }
  }

  public function weightKg()
  {
    $weightWithUnits = $this->weightKg;
    if ($weightWithUnits == 1) {
      echo $weightWithUnits . " kg <br>";
    } else {
      echo $weightWithUnits . " kgs <br>";
    }
  }

  public function setWeightLbs($value)
  {
    $this->weightKg = number_format($value / 2.2046226218, 2);
  }

  public function showDescription()
  {
    if (!empty($this->description)) {
      echo "Description: " . $this->description . "<br>";
    } else {
      echo "No description available. <br>";
    }
  }

  public function wheelDetails()
  {
    return "It has " . $this->wheels . " wheel(s)";
  }

  public function setWeightKg($value)
  {
    $this->weightKg = $value;
  }
}

class Unicycle extends Bicycle
{
  protected $wheels = 1;
}
