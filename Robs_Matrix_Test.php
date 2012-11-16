<?php
/**
 * testing module for the Matrix dojo blah
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

/**
    * thoughts on what I need
    *
    * hallway array containing the doors
    *
    * variable door to set to open or closed?
    *
    * variable pass to determine how many passes we do?
      
*/
require_once "Robs_Matrix.php";

/**
    * tests for the hallway array
*/

if (assert(count($hallway) == 100)) echo "pass doors == 100";

/**
    * test for a door being closed
*/

if (assert($hallway[100] == "Open")) echo "door 100 open";

print_r(array_values($hallway));
print_r(array_keys($hallway));