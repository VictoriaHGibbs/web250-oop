<?php
function my_autoload($class)
{
  $class = strtolower($class);
  if (preg_match('/\A\w+\Z/', $class)) {
    include 'classes/' . $class . '.class.php';
  }
}

spl_autoload_register('my_autoload');


$flycatcher = new Bird();
$flycatcher->commonName = 'Acadian Flycatcher';
$flycatcher->latinName = 'Empidonax virescens';

echo $flycatcher->commonName;
