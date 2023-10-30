<?php  
function add(...$nums) {  
    $sum = 0;  
    foreach ($nums as $n) {  
        $sum += $n;  
    }  
    return $sum;  
} 
echo add(1, 2, 3, 4);  
?>  
