<?php

//call the production code
require_once 'RomanNumeral.php';


/**
 * Roman numeral calculator should convert arabic numbers to
 * 
 * Roman numerals. Consider whether this means an array with 
 * 
 * places for Is, Vs, Xs, etc. Try to do up to 20 to simply
 * 
 * problem for now. Consider how every 5 numbers there is a 
 * 
 * 'less one' function (for 4, 9, 14, & 19). Consider that 
 * 
 * you only need three Roman numerals (I, V, & X) to count to
 * 
 * 20. However, you need up to 5 'places' to write numbers
 * 
 * through 20 (XVIII being the specific example). The repeating 
 * 
 * pattern through 20 is (I through III, before 5, 5, before 10, 10)
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
 test ($calculator->register == 0, "Somehow, this Roman Numeral calculator has a zero");

