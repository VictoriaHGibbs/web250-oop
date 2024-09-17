<?php

class Bird
{
  public $commonName;
  public $latinName;

  public function __construct($commonName, $latinName)
  {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
    echo 'Common name: ' . $this->commonName . '<br>';
    echo 'Latin name: ' . $this->latinName . '<br><hr>';
  }
}

$robin = new Bird('Robin', 'Turdus migratorius');

$towhee = new Bird('Eastern Towhee', 'Pipilo erythrophthalmus');
