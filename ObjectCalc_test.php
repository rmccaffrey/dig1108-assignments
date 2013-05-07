<?php

//call the production code
require_once 'ObjectCalc_prod.php';

//write a generic pass/fail test
function test ($assertion, $message = null)
{
    echo (@assert($assertion) ? 'pass ' : 'fail ') . $message . "\n";
}

//test for the existance of a Calculator class
test (class_exists('Calculator'), "A calculator class exists");


//create a new instance of the calculator
$calculator = new Calculator;

//test for an instance of a calculator
test (($calculator != null), "There is an instance of the calculator");

//test if the new calcualtor is set to zero
test ($calculator->register == 0, "The calculator is set to 0");

//test that there is a new function
if (function_exists($calculator->add))
{
    echo "There is an add function"; 
}

//test for an add function
test ($calculator->add(1,1) == 2, "1 + 1 = 2");

//test for adding a single number