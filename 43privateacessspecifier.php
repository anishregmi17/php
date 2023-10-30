<?php
class Employee {
  public $salary;

  private function set_salary($n) { // a private function
    $this->salary= $n;
  }
}

$emp1= new Employee();
$emp1->set_salary('300'); //It will throw error as It can not Access the Private Function
?>
