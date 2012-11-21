<?php

/**
 * Imagine a hallway with 100 doors, 50 per side
 * 
 * Verify all of the doors are closed.
 * 
 * pass through the hall and open every door
 * 
 * pass through again and close every other door
 * 
 * pass through a third time and switch the state of every third door
 * 
 * continue this for 100 times
 * 
 * tell me the state of every door at the end of this process
*/

require_once "Robs_Matrix.php";

//verify there is an array that is 100 values long and filled with 'closed'
if (assert (is_array($hallway))) echo "there is an hallway";
if (assert(count($hallway) == 100)) echo "the hallway has 100 doors";

foreach ($hallway() as $value)
{
    echo "the door is closed";
}

//verify that all doors are open

//verify that every other door is open

//verify that every third door changed states

//continue for 100 times