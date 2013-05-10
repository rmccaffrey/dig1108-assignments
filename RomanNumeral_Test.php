<?php

//call the production code
require_once 'RomanNumeral.php';

/**
 * When asserting an Arabic number, the calculator should convert it to a
 *
 * Roman numeral. Given a Roman numeral, it should return an Arabic number.
 *
 * 1 = I, 2 = II, 3 = III, 4 = IV, 5 = V, 6 = VI, 7 = VII, 8 = VIII, 9 = IX,
 *
 * X = 10
 *
 * Logic is based on 5s. If x <= 5, do (I conversions), if x = 5 do (V 
 *
 * conversions). Try to deal up to 20 for now
 */
 
 /**
  * logic map through 20
  * 
  * is the number = to or less than 20? (if no, error)
  * 
  * is the number divisible by 10? (if yes, quoitient and remainder)
  * 
  * is the remainder divisible by 5? (if yes, quoitient and remainder)
  * 
  * then do convert_i loop
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

/*
//test that the number 1 is returned as I
if (function_exists('$calculator->add'))
{
    echo "There is a way to convert to I";
}
    else
    {
        echo "There is not a way to convert to I";
    }
*/

 // test that the number is less than or equal to 20
test ($calculator->number_limit (21) == "Error: Number too large to calculate", "The error test works");
 
 
 // test that a number is divisible by 10
test ($calculator->divide_x (10) == 1, "The number is equally divisible by 10");

 // test that a remainder is divisible by 5
 
 test ($calcualtor->divide_v (5) == 1, "The number is equally divisible by 5");
 
  //test that the number 1 is returned as I
test ($calculator->convert_i(1) == "I", "1 is equal to I");

 //test that the number 2 is returned as II
 
test ($calculator->convert_i (2) == "II", "2 is equal to II");
 
 //test that the number 3 is returned as III
 
test ($calculator->convert_i (3) == "III", "3 is equal to III");


 
 //test that the number 4 is returned as IV
 
 
 //test that the number 5 is returned as V