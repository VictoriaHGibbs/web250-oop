<?php

class Bird
{
  var $commonName;
  var $food;
  var $nestPlacement;
  var $conservationLevel;

  function song($song)
  {
    echo "Song: " . $song . "<br>";
  }

  function canFly(bool $fly)
  {
    if ($fly == 'true') {
      echo $this->commonName . " can fly! <br>";
    } else {
      echo $this->commonName . " can not fly and is easy to catch! Go get you one boo! <br>";
    }
  }

  function birdInfo()
  {
    echo "Common Name: " . $this->commonName . "<br>";
    echo "Food: " . $this->food . "<br>";
    echo "Nest Location: " . $this->nestPlacement . "<br>";
    echo "Conservation Level: " . $this->conservationLevel . "<br>";
  }
}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->conservationLevel = 'Low';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'roadsides, railroad rights-of-ways, fields and on the edges';
$bird2->conservationLevel = 'Low';


$bird1->birdInfo();
$bird1->song("Drink your tea");
$bird1->canFly(1);

$bird2->birdInfo();
$bird2->song("What What");
$bird2->canFly(0);
