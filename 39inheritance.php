<?php  
    class exm {  
        public function func1()  
        {  
            echo "example of inheritance  ";  
        }     
    }  
    class exm1 extends exm {  
        public function func2()  
        {  
            echo "in php";  
        }     
    }  
    $obj= new exm1();  
    $obj->func1();  
    $obj->func2();  
?>
//php supporrts only the sngle inheritance
//The final keyword can be used to prevent method overriding or to prevent class inheritance. 
<?php
final class Employee {
  // some code
}
// This will result in error as the final keyword is used
class human extends Employee {
  // some code
}
?>