<?php
class Namaste {
  const GREETING_MSG= "Namaskaram Dosto!!";
}

echo Namaste::GREETING_MSG;
?>
//We can also use the self keyword to access the constant inside the class. 
<?php
class HelloWorld {
  const New_Message = "Did I leave the Stove on?";
  public function ByeWorld() {
    echo self::New_Message;
  }
}

$helloworld= new HelloWorld();
$helloworld->ByeWorld();
?>
