<?php

class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;

  protected $weightKg = 0;
  protected $conditionId = 3;

  public const CATEGORIES = ['road', 'mountain', 'hybrid', 'cruiser', 'city', 'BMX'];

  public const GENDERS = ['men', 'women', 'unisex'];

  protected const CONDITION_OPTIONS = [
    1 => 'Beat Up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];

  public function __construct($args = [])
  {
    $this->brand = $args['brand'] ?? NULL;
    $this->model = $args['model'] ?? NULL;
    $this->year = $args['year'] ?? NULL;
    $this->category = $args['category'] ?? NULL;
    $this->color = $args['color'] ?? NULL;
    $this->description = $args['description'] ?? NULL;
    $this->gender = $args['gender'] ?? NULL;
    $this->price = $args['price'] ?? 0;
    $this->weightKg = $args['weightKg'] ?? 0.0;
    $this->conditionId = $args['conditionId'] ?? NULL;
  }

  public function weightKg()
  {
    $weightWithUnits = $this->weightKg;
    if ($weightWithUnits == 1) {
      return $weightWithUnits . " kg";
    } else {
      return $weightWithUnits . " kgs";
    }
  }

  public function weightLbs()
  {
    $newWeight = number_format($this->weightKg * 2.2046226218, 2);
    if ($newWeight == 1) {
      return $newWeight . " lb";
    } else {
      return $newWeight . " lbs";
    }
  }

  public function setWeightKg($value)
  {
    $this->weightKg = $value;
  }

  public function setWeightLbs($value)
  {
    $this->weightKg = number_format($value / 2.2046226218, 2);
  }

  public function condition()
  {
    if ($this->conditionId > 0) {
      return self::CONDITION_OPTIONS[$this->conditionId];
    } else {
      return "Unknown";
    }
  }
}
