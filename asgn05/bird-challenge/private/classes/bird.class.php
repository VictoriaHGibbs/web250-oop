<?php

class Bird
{

  /*
Use the wnc-birds.csv file to create the properties
Make all of the properties public.
*/
  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $conservation_id;
  public $backyard_tips;


  /*
  Create a protected constant array called CONSERVATION_OPTIONS using the following scale.
  Use the CONDITION_OPTIONS from the bicycle.class.php file
  */

  protected const CONSERVATION_OPTIONS = [
    1 => 'Low concern',
    2 => 'Moderate concern',
    3 => 'Extreme concern',
    4 => 'Extinct'
  ];


  /*
   - Create a public __contruct that accepts a list of $args[]
   - Use the Null coalescing operator
   - Create a default value of 1 for conservation_id
 */
  public function __construct($args = [])
  {
    $this->common_name = $args['common_name'] ?? NULL;
    $this->habitat = $args['habitat'] ?? NULL;
    $this->food = $args['food'] ?? NULL;
    $this->nest_placement = $args['nest_placement'] ?? NULL;
    $this->behavior = $args['behavior'] ?? NULL;
    $this->conservation_id = $args['conservation_id'] ?? 1;
    $this->backyard_tips = $args['backyard_tips'] ?? NULL;
  }

  /*
  Create a public method called conservation(). This method should mimic the
    public function condition() from the bicycle.class.php file
  */

  public function conservation()
  {
    if ($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }
}
