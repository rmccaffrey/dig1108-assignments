<?php

//make sure we call the production code
require_once "RomanNumeral.php";

/**
 * Roman numeral calculator should convert arabic numbers to
 * 
 * Roman numerals. Consider whether this means an array with 
 * 
 * places for Is, Vs, Xs, etc. Try to do up to 39 to simply
 * 
 * problem for now. Consider how every 5 numbers there is a 
 * 
 * 'less one' function (for 4, 9, 14, 19, etc). Consider that 
 * 
 * you only need three Roman numerals (I, V, & X) to count to
 * 
 * 39. However, you need up to 7 'places' to write numbers
 * 
 * through 39 (XXXVIII being the specific example). The repeating 
 * 
 * pattern through 39 is (I through III, before 5, 5, before 10, 10)
 */
 
/**
 * Try this pattern
 * 
 * While x > 40 --> ERROR
 * 
 * While x = 40 echo XL
 * 
 * While x >= 10 echo X and subtract 10
 * 
 * While x = 9 echo IX
 * 
 * While x >= 5 echo V and subtract 5
 * 
 * While x = 4 echo IV
 * 
 * While x >= 1 echo I and subtract 1
 */
 
 //write a generic test function
 function test ($assertion, $message=null)
 {
  echo (@assert($assertion) ? "pass " : "fail ") . $message . "\n";
 }
 
 test (1 + 1 == 2, "one and one are two");
 
 //test to see if there is a calculator class
 test (class_exists('Calculator'), "There is a calculator class");
 
  //create an instance of the calculator
 $calculator = new Calculator;
 
 //test to find an instance of the calculator
 test ($calculator != null, "An instance of the calculator exists");
 
 //test to see if the calculator is set to zero
 test ($calculator->register == 0, "The calculator is set to zero");
 
 //test to see if the calculator can reject too large a number
 test ($calculator->too_high (41) == "Error: number too large to calculate", "The calculator can reject numbers too high to calculate");
 test ($calculator->too_high (40) == "Error: number too large to calculate", "The calculator can reject numbers too high to calculate");
 
 //test to see if the calculator can return 40
 test ($calculator->equals_fourty (40) == "LX", "The calculator can return the Roman number 40");
