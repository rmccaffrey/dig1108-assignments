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

//test for the existance of a new calcualtor
test ($calculator != 0, "There is a new calculator");

$calculator = new Calculator;

//test for the existance of a new calcualtor
test ($calculator != 0, "There is a new calculator");
