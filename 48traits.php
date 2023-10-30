<?php
trait message1 {
public function msg1() {
    echo "give me cheeseburgers ";
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
