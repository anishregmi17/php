<?php
interface Human {
  public function makeSound();
}

class Programmer implements Human{
  public function makeSound() {
    echo "Hello World";
  }
}

$human = new Programmer();
$human->makeSound();
?>