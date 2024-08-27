<?php

class Bird
{
  var $commonName;
  var $food;
  var $nestPlacement;
  var $conservationLevel;

  function song($song)
  {
    return "Song: " . $song . "<br>";
  }

  function canFly(bool $fly)
  {
    if ($fly == 'true') {
      echo $this->commonName . " can fly! <br>";
    } else {
      echo $this->commonName . " can not fly and is easy to catch! Go get you one boo! <br>";
    }
  }
}
