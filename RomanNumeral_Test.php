<?php

/

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
 
 