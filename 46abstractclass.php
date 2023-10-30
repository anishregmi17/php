<?php
// Parent class
abstract class Bike {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Yamaha extends Bike {
  public function intro() : string {
    return "I'm a $this->name!"; 
  }
}

class splendor extends Bike {
  public function intro() : string {
    return "I'm a $this->name!"; 
  }
}

class Vespa extends Bike {
  public function intro() : string {
    return "I'm a $this->name!"; 
  }
}

// Create objects from the child classes
$yamaha = new yamaha("Yamaha");
echo $yamaha->intro();
echo "<br>";

$splendor = new splendor("Splendor");
echo $splendor->intro();
echo "<br>";

$vespa = new vespa("Vespa");
echo $vespa->intro();
?>