<?php  
    function mytest() 
    {  
        $capital = "Delhi";  
        echo "Capital of India is: " .$capital;  
    }  
    mytest(); //Calling the function
    //using $capital outside the function will generate an error  
    echo $capital;  
?>  
