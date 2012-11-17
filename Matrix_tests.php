<?php
/**
 * testing module for the Matrix dojo
 *
 * Specs are:
 *
 * Imagine a hallway with 50 closed doors on each side
 *
 * Go to the end of the hall, back up and open every door
 *
 * Go back and close even-numbered doors
 *
 * Go back and every third door, open if closed, close if open
 *
 * Continue the iteration 100 times.
 *
 * Tell me the state of all doors   
 */

require_once "Matrix_production_code.php";

// This section is to determine if an array $doors exists.
if  ( is_array ($doors))
     echo 'doors array exists'; 

// This is to determine if $doors has 100 items in it.    
if (assert (count ($doors) ==100) )
    echo ' 100 items exist in this array';


/* 
* This is a function that looks at every door 
* using a loop to see if its opened or closed.
*/

function  test_doors ($doors)
{
    for ( $i = 1; $i <= 100; $i++)
    {
        assert ($doors [ $i ] == 'open');
        echo $i . ' door ' . $doors [$i];
    }/* end for loop */
} /* end function test_doors */

//This fuction test even doors and changes their state

function test_even_doors ( $doors )
{
    for ( $i = 1; $i <= 100; $i++)
{
    if (( $i % 2 ) == 0 )
       if ( assert ($doors [ $i ] == 'closed') )
            echo $i . ' is closed ';
        
} /* end for loop */       
} /* end function test_doors_2 */

test_even_doors ($doors);


//This fuction test every third door and change its state

function test_third_door ( $doors )
{
    for ( $i = 1; $i <= 100; $i++)
{
    if (( $i % 3 ) == 0 )
       if ( assert ($doors [ $i ] == 'closed') )
            echo $i . ' is closed ';
        
} /* end for loop */       
} /* end function test_doors_2 */

test_even_doors ($doors);