<?php

class Sofa
{
  protected static $identity = 'Sofa class';

  public static function identityTest()
  {
    echo 'self: ' . self::$identity . "<br>";
    echo 'static: ' . static::$identity . "<br>";

    echo 'get_class: ' . get_class() . "<br>";
    echo 'get_called_class: ' . get_called_class() . "<br>";
  }
}

class Loveseat extends Sofa
{
  protected static $identity = 'Loveseat class';
}

Sofa::identityTest();
echo "<hr>";
Loveseat::identityTest();
