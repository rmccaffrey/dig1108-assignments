<?php

//call the production code
require_once 'RomanNumeral.php';


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
 
 //write a general test
 function test ($assertion, $message = null)
 {
     echo (@assert($assertion) ? 'pass ' : 'fail ') . $message . "\n";
 }
 
 //test for calculator class
 
 test (class_exists('Calculator'), "A calculator class exists");
 
 //add a new instance of the calculator
 $calculator = new Calculator;
 
 //test if the instance exists
 test ($calculator != null, "The calculator exists");
 
 //test if the calculator is set to zero
 test ($calculator->register == 0, "somehow this Roman Numeral calculator has a zero");

// test that number is less than 39
test ($calculator->find_tens (40) == "Error: too large to calculate" , "The calculator can reject large numbers");

//test that the calculator can convert 10s to Xs
test ($calculator->find_tens (30) == "XXX", "30 equals XXX");
test ($calculator->find_tens (39) == "XXX", "39 equals XXXIX");
test ($calculator->find_tens (20) == "XXX", "20 equals XX");
test ($calculator->find_tens (11) == "XXX", "11 equals XI");

//test that 1 is equal to I
test ($calculator->convert_i (1) == "I", "1 equals I");

//test that 2 is equal to II
test ($calculator->convert_i (2) == "II", "2 equals II");

// test that 3 is equal to III
test ($calculator->convert_i (3) == "III", "3 equals III");

// test that 4 is equal to IV
test ($calculator->i_before (4) == "IV", "4 equals IV");

