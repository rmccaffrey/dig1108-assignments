<?php

/**
    *this is the production code for the Matrix dojo
    
*/

echo "Enter the Matrix Production Code";

// Create an array and fill it.
$doors= array ( ); 
$doors = array_fill (1,100,'closed');

print_r(array_values($doors));

// All 100 doors are incrementing. If the doors are closed we're opening it.
for ($i = 1; $i <= 100; $i++ )
{
    if ( $doors [ $i ] == 'closed')
         $doors [ $i ] = 'open'; 
}
print_r(array_values($doors));

// switch state from open to close on EVEN doors
for ($i = 1; $i <= 100; $i++ )
{  
   if (( $i % 2 ) == 0 )
    {
        if ( $doors [ $i ] == 'open')
         $doors [ $i ] = 'closed'; 
    } /* end if */    
}/* end for loop */  

print_r(array_values($doors));