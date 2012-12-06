<?php

/**
    *test code for calclator, basic calculations via functions, specs are:
    
    * 0 0, 0 1, 0 -1, 1 0, 1 1, 1 -1, -1 0, -1 1, -1 -1
    
*/

require_once "production-calculator.php";

//fuction to test addition
function test ($operator, $a , $b)
{
    if (assert ($operator ($a , $b ) == ($a + $b)))  
    echo 'Pass: ' . $operator . ' ' . $a . ' ' . $b;
}

test ('add',00,00);
test ('add',00,01);
test ('add',00,-1);
test ('add',01,00);
test ('add',01,01);
test ('add',01,-1);
test ('add',-1,00);
test ('add',-1,01);
test ('add',-1,-1);

//fuction to test subtraction
function testSub ($operator, $a , $b)
{
    if (assert ($operator ($a , $b ) == ($a - $b)))  
    echo 'Pass: ' . $operator . ' ' . $a . ' ' . $b;
}

testSub ('sub',00,00);
testSub ('sub',00,01);
testSub ('sub',00,-1);
testSub ('sub',01,00);
testSub ('sub',01,01);
testSub ('sub',01,-1);
testSub ('sub',-1,00);
testSub ('sub',-1,01);
testSub ('sub',-1,-1);

//there is another pattern here I have to figure out.

/*
if (assert ("add(0,0) == 0")) echo "pass add 00 00";
if (assert ("add(0,1) == 1")) echo "pass add 00 01";
if (assert ("add(0,-1) == -1")) echo "pass add 00 -1";
if (assert ("add(1,0) == 1")) echo "pass add 01 00";
if (assert ("add(1,1) == 2")) echo "pass add 01 01";
if (assert ("add(1,-1) == 0")) echo "pass add 01 -1";
if (assert ("add(-1,0) == -1")) echo "pass add -1 00";
if (assert ("add(-1,1) == 0")) echo "pass add -1 01";
if (assert ("add(-1,-1) == -2")) echo "pass add -1 -1";
*/

