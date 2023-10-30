<?php
class Employee {
  // Properties
  public $name;
  public $surname;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$emp1 = new Employee();
$emp2= new Employee();
$emp1->set_name('Harry');
$emp2->set_name('Shayan');

echo $emp1->get_name();
echo "<br>";
echo $emp2->get_name();
?>
