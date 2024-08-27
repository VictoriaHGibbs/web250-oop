<!-- 
 Define class for a bicycle
 properties: brand, model, year, description, weight_kg
 methods: 
 name (brand, model, year all together in a string) 
 weight_lbs (convert kg to lbs. 1kg = 2.2046226218) 
 set_weight_lbs (Pass in weight in lbs and have it converted to kgs and stored in weight_kg)

 Instantiate
 set and read properties
 call all methods created
  -->

<?php

class Bicycle
{
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0;

  function name()
  {
    return "Name: " . $this->brand . " " . $this->model . " " . $this->year . "<br>";
  }

  function weight_lbs()
  {
    $new_weight = number_format($this->weight_kg * 2.2046226218, 2);
    if ($new_weight == 1) {
      echo $new_weight . " lb <br>";
    } else {
      echo $new_weight . " lbs <br>";
    }
  }

  function set_weight_lbs($value)
  {
    $this->weight_kg = number_format($value / 2.2046226218, 2);
  }

  function show_description()
  {
    if (!empty($this->description)) {
      echo "Description: " . $this->description . "<br>";
    } else {
      echo "No description available. <br>";
    }
  }
}

$bicycle1 = new Bicycle;
$bicycle1->brand = 'Bikeybike';
$bicycle1->model = 'Wheeeeee';
$bicycle1->year = '2022';
$bicycle1->description = 'Bike go brrrrrrrrrrrr';
$bicycle1->weight_kg = 0.3;

$bicycle2 = new Bicycle;
$bicycle2->brand = 'Biker';
$bicycle2->model = 'McBikerton';
$bicycle2->year = '2018';
$bicycle2->weight_kg = 3.1;

echo $bicycle1->name();
echo $bicycle1->show_description();
echo $bicycle1->weight_kg . "kgs <br>";
echo $bicycle1->weight_lbs() . "<hr>";


echo $bicycle2->name();
echo $bicycle2->show_description();
echo $bicycle2->weight_kg . "kgs <br>";
echo $bicycle2->weight_lbs() . "<hr>";

$bicycle2->set_weight_lbs(5);
echo $bicycle2->name();
echo $bicycle2->show_description();
echo $bicycle2->weight_kg . "kgs <br>";
echo $bicycle2->weight_lbs();
