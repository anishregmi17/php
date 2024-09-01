<?php
function divide($x, $y)
{
    if ($y == 0) {
        throw new Exception("Division by zero");
    }
    return $x / $y;
}

echo divide(1, 0);
