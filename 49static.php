<?php
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}
?>
//to access a static method we need to use the class name followed by a double colon (::), and the method name.
<?php
class greeting {
  public static function welcome() {
    echo "Hello Bhai!";
  }
}

// Call static method
greeting::welcome();
?>
//A static method can be accessed from a method in the same class using the self keyword followed by a double colon (::), and the method name.
<?php
class greeting {
  public static function welcome() {
    echo "Hello Bro!";
  }
  public function __construct() {
    self::welcome();
  }
}
new greeting();
?>

