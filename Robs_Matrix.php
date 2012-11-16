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


$hallway [57] = "Open";

/**
$doorOpen = "Open";


function $opendoor
{
    if (array_key_exists($doorClosed, $hallway)) $doorClosed = $doorOpen;
}