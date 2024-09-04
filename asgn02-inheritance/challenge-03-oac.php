<!--
-Pulled Bicycle class from challenge 1
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

$bicycle1 = new Bicycle;
$bicycle1->brand = 'Bikeybike';
$bicycle1->model = 'Wheeeeee';
$bicycle1->year = '2022';
$bicycle1->description = 'Bike go brrrrrrrrrrrr';
$bicycle1->setWeightKg(0.3);

$bicycle2 = new Unicycle;
$bicycle2->brand = 'Biker';
$bicycle2->model = 'McBikerton';
$bicycle2->year = '2018';
$bicycle2->setWeightKg(3.1);

echo $bicycle1->name();
echo $bicycle1->showDescription();
echo $bicycle1->weightKg();
// echo $bicycle1->weightKg . "kgs <br>";
echo $bicycle1->weightLbs() . "<hr>";

echo $bicycle2->name();
echo $bicycle2->showDescription();
// echo $bicycle2->weightKg . "kgs <br>";
echo $bicycle2->weightKg();
echo $bicycle2->weightLbs() . "<hr>";

$bicycle2->setWeightLbs(5);
echo $bicycle2->name();
echo $bicycle2->showDescription();
echo $bicycle2->weightKg();
echo $bicycle2->weightLbs();
