<?php

/**
    *this is the production code for the Matrix dojo
    
*/

echo "Enter the Matrix";

/**
    *create an array called 'doors' and fill it with 100 'closed' doors
*/

$doorClosed = "Closed";
$hallway = array_fill(1,100, $doorClosed);

foreach($hallway as $key=>$value) 
{ 
    if ($key % 2 == 0)
    {
        unset($value = "open"); 
        echo $value . PHP_EOL;
    }    
}
?> 
//print_r(array_values($hallway));
//echo "initial state";

//$keyNumber = integer;

/**if (is_int($keyNumber))
{
    echo "true";
}

*/

//if ($hallway [$keyNumber] == integer) echo "Open";
//if ($hallway is_int([$keyNumber])) echo "Open";
/**
$doorOpen = "Open";


function $opendoor
{
    if (array_key_exists($doorClosed, $hallway)) $doorClosed = $doorOpen;
}