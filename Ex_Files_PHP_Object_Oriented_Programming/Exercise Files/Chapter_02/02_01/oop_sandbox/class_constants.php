<?php

class Clock
{

  public const DAY_IN_SECONDS = 60 * 60 * 24;

  public function tomorrow()
  {
    return time() + self::DAY_IN_SECONDS; //'self" must be here for this to work
  }
}

echo Clock::DAY_IN_SECONDS . "<br>";

$clock = new CLock;
echo $clock->tomorrow() . "<br>";
