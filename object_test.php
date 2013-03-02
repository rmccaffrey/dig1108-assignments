<?php

require_once 'object.php';

$calculator = new Calculator;

$calc2 = new Calculator;
//new instance of the calculator with its own values

/**good practice is to capitalize objects, you don't need to use parenthesis if 
 * you are not passing arguments
 */

//if (assert($calculator->add(1,1) == 2)) echo "pass add";

function test ($assertion, $message = null)
{
    echo (@assert($assertion) ? 'pass: ' : 'fail: ') . $message . "\n";
}

test($calculator->add(1,1) == 2, '1 + 1 == 2');

test($calculator->register == 2, '$calculator remembers 2!');

test($calc2->register == 0, '$calc2 still set to 0');