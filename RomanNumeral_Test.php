<?php

//call the production code
require_once 'RomanNumeral.php';

/*
 *When asserting an Arabic number, the calculator should convert it to a
 *
 *Roman numeral. Given a Roman numeral, it should return an Arabic number.
 *
 *1 = I, 2 = II, 3 = III, 4 = IV, 5 = V, 6 = VI, 7 = VII, 8 = VIII, 9 = IX,
 *
 *X = 10
 *
 *Logic is based on 5s. If x <= 5, do (I conversions), if x = 5 do (V 
 *
 *conversions). Try to deal up to 20 for now
 */
 
 //write generic test message
 
 function test ($assertion, $message = null)
 {
  echo (@assert($assertion) ? 'pass ' : 'fail ') . $message . "\n";
 }
 
 //test that a calculator class exists
test (class_exists('Calculator'), "A calculator class exists");

 //create a new instance of the calculator
$calculator = new Calculator;
 
 //test for new instance of a calculator
test (($calculator != null), "There is a new calculator");
 
 //test that the new calculator is set to 0
test ($calculator->register == 0, "The calculator is set to 0");

 //test that the number 1 is returned as I
if (function_exists('$calculator->add'))
{
    echo "There is a way to convert to I";
}
    else
    {
        echo "There is not a way to convert to I";
    }
    
 if (function_exists('$calculator->add'))
{
    echo "There is an add function"; 
}
 //test that the number 2 is returned as II
 
 //test that the number 3 is returned as III
 
 //test that the number 4 is returned as IV
 
 //test that the number 5 is returned as V