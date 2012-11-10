<?php

/**
    *test code for calclator, basic calculations via functions, specs are:
    
    * 0 0, 0 1, 0 -1, 1 0, 1 1, 1 -1, -1 0, -1 1, -1 -1
    
*/

require_once "production-calculator.php";

/**
    *trying to kill the copy paste
*/

function test ($assertion)
{
    if ($assertion == true) echo $assertion;
}

/**
    *test code for add
*/

if (assert("add(0,0) == 0")) echo "pass add 0 0";
if (assert("add(0,1) == 1")) echo "pass add 0 1";
test $assertion "(2,2) == 4";

/** lost the thread of the thought
*/


