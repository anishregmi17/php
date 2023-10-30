<?php
class pi {
  public static $value = 3.14;
}
// Getting static property
echo pi::$value;
?>
//A static method can be accessed from a method in the same class using the self keyword followed by a double colon (::), and the method name.
<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();
?>
//If we need to call a static property from a child class, we can use the parent keyword inside the child class. 
<?php
class pi {
  public static $value=3.14;
}
class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}
// Get value of static property directly via child class
echo x::$value;
