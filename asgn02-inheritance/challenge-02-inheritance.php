
<?php

class Animal
{

  public $name;
  private $type;
  protected $legs = 4; // when private, everyone had 4 legs lol. 
  protected $outerCovering;
  public $environment;

  public function aboutAnimal()
  {
    echo $this->name . " is a " . $this->type . ". They have " . $this->legs . " legs and have " . $this->outerCovering . ". They live in " . $this->environment . ". ";
  }

  // set $type 
  public function setType($newType)
  {
    $this->type = $newType;
  }


  // get $type
  public function getType()
  {
    return $this->type;
  }
}

class Mammal extends Animal
{
  protected $outerCovering = 'hair';

  public function aboutAnimal()
  {
    return parent::aboutAnimal() . " Most mammals give live birth. <br>";
  }
}

class AquaticMammal extends Mammal
{
  public $legs = 0;
}

class Bird extends Animal
{
  protected $outerCovering = 'feathers';
  public $legs = 2;
  public $beakShape;
  public $food;

  public function aboutAnimal()
  {
    return parent::aboutAnimal() . $this->name . " has a " . $this->beakShape . " shaped beak it uses to eat " . $this->food . "<br>";
  }
}

class Reptile extends Animal
{
  protected $outerCovering = 'scales';

  public function aboutAnimal()
  {
    return parent::aboutAnimal() . " Like most reptiles, " . $this->name . " prefers to shop at Costco over Sam's Club. <br>";
  }
}

class Snake extends Reptile
{
  public $legs = 0;
  public $food;

  public function aboutAnimal()
  {
    return parent::aboutAnimal() . $this->name . " likes to eat " . $this->food . ". <br>";
  }
}

class Amphibian extends Animal
{
  protected $outerCovering = 'scales';
  public $environment = 'water';

  public function aboutAnimal()
  {
    return parent::aboutAnimal() . " Amphibians need to stay near or in water. <br>";
  }
}

class Fish extends Animal
{
  protected $outerCovering = 'scales';
  public $legs = 0;

  public function aboutAnimal()
  {
    return parent::aboutAnimal() . " Fish will try to scam you, do not fall for their drop-shipping schemes. <br>";
  }
}

// made some Animals

$animal1 = new AquaticMammal;
$animal1->name = 'Bobbert';
// $animal1->type = 'dolphin';
$animal1->setType('boat booper');
$animal1->environment = 'water';
echo $animal1->getType() . "<br>";

$animal2 = new Bird;
$animal2->name = 'Kaeightie';
// $animal2->type = 'Black cap chickadee';
$animal2->setType('demon flapper');
$animal2->environment = 'forest';
$animal2->beakShape = 'pointy';
$animal2->food = 'seeds';

$animal3 = new Snake;
$animal3->name = 'Jerry';
// $animal3->type = 'black snake';
$animal3->setType('nope-rope');
$animal3->environment = 'forests, old buildings, and closets';
$animal3->food = 'other nope-ropes';

echo $animal1->aboutAnimal() . '<br>';
echo $animal2->aboutAnimal() . '<br>';
echo $animal3->aboutAnimal() . '<br>';
?>
