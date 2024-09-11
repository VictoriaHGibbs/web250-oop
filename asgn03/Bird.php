<?php

class Bird
{
  public $habitat;
  public $food;
  public $nesting = "tree";
  public $conservation;
  public $song = "chirp";
  public $flying = "yes";

  public static $eggNum = 0;

  public $instanceCount;

  public static function create()
  {
    $class = get_called_class();
    $birdClass = new $class;
    return $birdClass;
  }

  public function canFly()
  {
    $flyingString = ($this->flying == "yes") ? "can fly" : "is stuck on the ground";
    return $flyingString;
  }
}

class YellowBelliedFlyCatcher extends Bird
{
  public $name = "yellow-bellied flycatcher";
  public $diet = "mostly insects.";
  public $song = "flat chilk";
  public static $eggNum = "3-4, sometimes 5.";
}

class Kiwi extends Bird
{
  public $name = "kiwi";
  public $diet = "omnivorous";
  public $flying = "no";
}
