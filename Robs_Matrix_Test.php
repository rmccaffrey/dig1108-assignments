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
 * Go back and close even numbered doors
 *
 * Go back and every third door, open if closed, close if open
 *
 * Repeat 100 times.
 *
 * Tell me the state of all doors   
 */

require_once "Robs_Matrix.php";

/**
    *failing test for existance of an array
*/

if (assert(count($doors) == 100))
    echo 'Passed: doors = 100';

if (assert($doors([100]))) == "Open") echo "pass 2";

//var_dump ($doors);