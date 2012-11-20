<?php

/**
    *this is the production code for the Matrix dojo
    
*/

echo "Enter the Matrix Production Code";

// Create an array and fill it.
$doors= array ( ); 
$doors = array_fill (1,100,'closed');

print_r(array_values($doors));

for ($pass = 1; $pass <= 100; $pass++ ) // number of passes
{
    for ($i = 1; $i <= 100; $i++ ) // number of doors
    {
        if (( $i % $pass ) == 0 )
            {
                if ( $doors [ $i ] == 'open')
                $doors [ $i ] = 'closed'; 
                else
                $doors [ $i ] = 'open';
            } 
    }
}
    print_r(array_values($doors));
