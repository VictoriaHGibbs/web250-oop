<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>asgn02 Inheritance</title>
</head>

<body>
  <h1>Inheritance Examples</h1>

  <?php
  include 'Bird.php';

  $bird = new Bird;
  echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

  $flyCatcher = new YellowBelliedFlyCatcher;
  echo '<p>The song of the ' . $flyCatcher->name . ' on breeding grounds is "' . $flyCatcher->song . '".</p>';

  $kiwi = new Kiwi;
  $kiwi->flying = "no";
  echo "<p>The " . $flyCatcher->name . " " . $flyCatcher->canFly() . ".</p>";
  echo "<p>The " . $kiwi->name . " " . $kiwi->canFly() . ".</p>";

  echo "<hr>";

  echo "<h2>Before using the create method: </h2>";

  echo '<p>Bird count: ' . Bird::$instanceCount . '</p>';
  echo '<p>Flycatcher count: ' . YellowBelliedFlyCatcher::$instanceCount . '</p>';
  echo '<p>Kiwi count: ' . Kiwi::$instanceCount . '</p>';

  $larry = Bird::create();
  $jerry = YellowBelliedFlyCatcher::create();
  $jimothy = Kiwi::create();

  echo "<h2>After using the create method: </h2>";

  echo '<p>Bird count: ' . Bird::$instanceCount . '</p>';
  echo '<p>Flycatcher count: ' . YellowBelliedFlyCatcher::$instanceCount . '</p>';
  echo '<p>Kiwi count: ' . Kiwi::$instanceCount . '</p>';

  ?>
</body>

</html>
