<!--
-+Choose own category
-+Pick topic that interests you
-+Look for subcategories with similarities and shared attributes.
-+Map inheritance on paper, list properties and methods.
-+Once on paper, you can start to code and define your classes. 
-+Inherit, extend, and override properties and methods. 
-Create instances to test.
-->
<?php

class Animal
{

  var $name;
  var $type;
  var $legs = 4;
  var $outerCovering;
  var $environment;

  function aboutAnimal()
  {
    echo $this->name . " is a " . $this->type . ". They have " . $this->legs . " legs and are covered in " . $this->outerCovering . ". They live in " . $this->environment . ". ";
  }
}

class Mammal extends Animal
{
  var $outerCovering = 'hair';

  function aboutAnimal()
  {
    return parent::aboutAnimal() . " Most mammals give live birth. <br>";
  }
}

class AquaticMammal extends Mammal
{
  var $legs = 0;
}

class Bird extends Animal
{
  var $outerCovering = 'feathers';
  var $legs = 2;
  var $beakShape;
  var $food;

  function aboutAnimal()
  {
    return parent::aboutAnimal() . $this->name . " has a " . $this->beakShape . " shaped beak it uses to eat " . $this->food . "<br>";
  }
}

class Reptile extends Animal
{
  var $outerCovering = 'scales';

  function aboutAnimal()
  {
    return parent::aboutAnimal() . " Like most reptiles, " . $this->name . " prefers to shop at Costco over Sam's Club. <br>";
  }
}

class Snake extends Reptile
{
  var $legs = 0;
  var $food;

  function aboutAnimal()
  {
    return parent::aboutAnimal() . $this->name . " likes to eat " . $this->food . ". <br>";
  }
}

class Amphibian extends Animal
{
  var $outerCovering = 'scales';
  var $environment = 'water';

  function aboutAnimal()
  {
    return parent::aboutAnimal() . " Amphibians need to stay near or in water. <br>";
  }
}

class Fish extends Animal
{
  var $outerCovering = 'scales';
  var $legs = 0;

  function aboutAnimal()
  {
    return parent::aboutAnimal() . " Fish will try to scam you, do not fall for their drop-shipping schemes. <br>";
  }
}

// made some Animals

$animal1 = new AquaticMammal;
$animal1->name = 'Bobbert';
$animal1->type = 'dolphin';
$animal1->environment = 'water';

$animal2 = new Bird;
$animal2->name = 'Kaeightie';
$animal2->type = 'Black cap chickadee';
$animal2->environment = 'forest';
$animal2->beakShape = 'pointy';
$animal2->food = 'seeds';

$animal3 = new Snake;
$animal3->name = 'Jerry';
$animal3->type = 'black snake';
$animal3->environment = 'forests, old buildings, and closets';
$animal3->food = 'other snakes';

echo $animal1->aboutAnimal() . '<br>';
echo $animal2->aboutAnimal() . '<br>';
echo $animal3->aboutAnimal() . '<br>';
?>
