<?php
class Employee {
    public $name;
  
    function __construct($name) {
      $this->name = $name;
    }
    function __destruct() {
      echo "Employee name is {$this->name}.";
    }
  }
  
  $emp1= new Employee("Izhaan");
>?

