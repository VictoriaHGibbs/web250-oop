<?php

class Bird
{
  public $commonName;
  public $latinName;

  public function __construct($args = [])
  {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
    echo 'Common name: ' . $this->commonName . '<br>';
    echo 'Latin name: ' . $this->latinName . '<br><hr>';
  }
}

$flycatcher = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Empidonax virescens']);

$towhee = new Bird(['commonName' => 'Carolina Wren', 'latinName' => 'Thryothorus ludovicianus']);
