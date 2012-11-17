<?php

$doors= array ( ); 
$doors = array_fill (1,10,'closed');

//print_r(array_values($doors));


function change ($doors, $i)
{
    for ($i = 1; $i <= 10; $i++ )
    {
        if ($doors [ $i ] == 'closed')
            $doors [ $i ] = 'open';
        else 
            ($doors [ $i ] = 'closed');
            
        return $doors [ $i ];
    }
}

// All 100 doors are incrementing. If the doors are closed we're opening it.
for ($i = 1; $i <= 10; $i++ )
{
    if ( ($i % 1) == 0)
        change ($doors, $i); 

}

print_r(array_values($doors));

