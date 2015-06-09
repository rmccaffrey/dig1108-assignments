<?php

//make sure we call the production code
require_once "2015RomanNum_Code.php";

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
 
 //test to see if you can use the public functions in tandem
 test ($calculator->roman_numerals (41) == "Error: number too large to calculate", "The calculator can reject numbers too high to calculate");
 
 //test to see if the calculator can return 40
 test ($calculator->roman_numerals (40) == "XL", "The calculator can return 40.");

 
 //test for returning number of correct Xs
 test ($calculator->roman_numerals (30) == "XXX", "The calculator can return X for tens.");
echo ($calculator->roman_numerals (30)) . "\n";

 test ($calculator->roman_numerals (30) == "XXXhaha", "The calculator can return X for tens with extra string.");
 test ($calculator->roman_numerals (30) == "XXXhahaha", "The calculator can return 2 versions of str_repeat.");
 
 //test to return 39
 test ($calculator->roman_numerals (39) == "XXIX", "The calculator can return XXIX for 39.");
 test ($calculator->roman_numerals (39) == "hahaXXIX", "The calculator can return 39 for tens with extra string.");
 
 //test to return 35
 test ($calculator->roman_numerals (35) == "XXXV", "The calculator can return for 35.");
 
 //test to return 34
 test ($calculator->roman_numerals (34) == "XXXIV", "The calculator can return for 34.");
 
 
 /*
 
 //test to see if the calculator can reject too large a number
 test ($calculator->too_high (41) == "Error: number too large to calculate", "The calculator can reject numbers too high to calculate");
 test ($calculator->too_high (40) == "Error: number too large to calculate", "The calculator can reject numbers too high to calculate");
 
 //test to see if the calculator can return 40
 test ($calculator->equals_fourty (40) == "XL", "The calculator can return the Roman number 40");
 
 //test to see if the calculator can calculate the correct number of Xs
 test ($calculator->count_tens (30) == "XXX", "The calculator counts the correct number of tens 30");
 test ($calculator->count_tens (20) == "XX", "The calculator counts the correct number of tens 20");
 test ($calculator->count_tens (10) == "X", "The calculator counts the correct number of tens 10");
 test ($calculator->count_tens (39) == "XXX", "The calculator counts the correct number of tens 39");
 
 //test to see if calculator can return 9
 test ($calculator->equals_nine (9) == "IX", "The calculator can return the Roman number 9");
 
 //test to see if the calculator can return the correct number of Vs
 test ($calculator->count_fives (5) == "V", "The calculator counts the correct number of fives 5");
 test ($calculator->count_fives (15) == "VVV", "The calculator counts the correct number of fives 15");
 
 //test to see if calculator can return 4
 test ($calculator->equals_four (4) == "IV", "The calculator can return the Roman number 4");
 
 //test to see if the calculator can return the correct number of Is
 test ($calculator->count_ones (3) == "III", "The calculator counts the correct number of ones 3");
 test ($calculator->count_ones (2) == "II", "The calculator counts the correct number of ones 2");
 test ($calculator->count_ones (1) == "I", "The calculator counts the correct number of ones 1");
 
 //test to reject 0
 test ($calculator->reject_zero (0) == "The Romans never learned of zero", "The calculator can reject zero as input");
 */
 
 ?>