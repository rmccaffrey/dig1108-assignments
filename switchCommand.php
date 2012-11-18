<?php

/**
    *this is the production code for the Matrix dojo
    
*/

echo "Enter the Matrix Production Code";

// Create an array and fill it.
$doors= array ( ); 
$doors = array_fill (1,10,'closed');

print_r(array_values($doors));

// All 100 doors are incrementing. If the doors are closed we're opening it.
for ($i = 1; $i <= 10; $i++ )
{
    if ( $doors [ $i ] == 'closed')
         $doors [ $i ] = 'open';
    else
        $doors [ $i ] = 'closed';
}
print_r(array_values($doors));

// switch state from open to close on EVEN doors
for ($i = 1; $i <= 10; $i++ )
{  
   if (( $i % 2 ) == 0 )
    {
        if ( $doors [ $i ] == 'closed')
         $doors [ $i ] = 'open'; 
        else
        $doors [ $i ] = 'closed';
    }  
}

print_r(array_values($doors));

// switch state from open to close every THIRD doors
for ($i = 1; $i <= 10; $i++ )
{  
   if (( $i % 3 ) == 0 )
    {
        if ( $doors [ $i ] == 'closed')
         $doors [ $i ] = 'open'; 
        else
        $doors [ $i ] = 'closed';
    }  
}

print_r(array_values($doors));
























/* my raw attempt
//$doorState = "Closed";
$hallway= array ( ); 
$hallway = array_fill (1,10,"Closed");

print_r(array_values($hallway));

function switchDoor ($hallway, $slot)
{
  
        if ($hallway [$slot] == "Closed")
            $hallway [$slot] = "Open";
        else 
            ($hallway [$slot] = "Closed");
 
}

for ($slot = 1, $slot <= 10, $slot++)
{
    if (($slot % 2) == 0)
    switchDoor ($hallway [$slot]);
}

print_r(array_values($hallway));
*/