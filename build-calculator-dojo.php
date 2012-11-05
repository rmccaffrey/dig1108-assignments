<?php

/**
    *Dotblcokin' it up yet again
    
    *kickin' it large with a set of functions design to perform the basic
    
    *operations of a calculator--test-driven, natch!
    
    *two parameters, yo! shouting out to all positive, negative and zeros
    
    *integers in the hizzy!
*/

function add ($a, $b)
{
    return $a + $b;
}

/**
    *what follows is a set of tests for the fuction 'add'. They include 

    *positive, negative and zero nubmers
    
*/

{
if (assert(add(1,1) == 2)) echo "pass add + +!";
if (assert(add(1,-1) == 0)) echo "pass add + -!";
if (assert(add(0,1) == 1)) echo "pass add 0 +!";
if (assert(add(-1,0) == -1)) echo "pass add - 0!";
}

function sub ($a, $b)
{
    return $a - $b;
}

/**
    *what follows is a set of tests for the fuction 'sub' (subtraction). They 

    *include positive, negative and zero nubmers
    
*/

{
if (assert(sub(1,1) == 0)) echo "pass sub + +!";
if (assert(sub(1,-1) == 2)) echo "pass sub + -!";
if (assert(sub(0,1) == -1)) echo "pass sub 0 +!";
if (assert(sub(-1,0) == -1)) echo "pass sub - 0!";
}

function multi ($a, $b)
{
    return $a * $b;
}

/**
    *what follows is a set of tests for the fuction 'multi' (multiplication). 

    *They include positive, negative and zero nubmers
    
*/

{
if (assert(multi(1,1) == 1)) echo "pass multi + +!";
if (assert(multi(1,-1) == -1)) echo "pass multi + -!";
if (assert(multi(0,1) == 0)) echo "pass multi 0 +!";
if (assert(multi(-1,0) == 0)) echo "pass multi - 0!";
}


function div ($a, $b)
{
    if ($b == 0) echo "Warning: division by zero!";
    
    return $a / $b;
}

/**
    *what follows is a set of tests for the fuction 'div' (division). 

    *They include positive, negative and zero nubmers
    
*/

{
if (assert(div(1,1) == 1)) echo "pass div + +!";
if (assert(div(1,-1) == -1)) echo "pass div + -!";
if (assert(div(0,1) == 0)) echo "pass div 0 +!";
if (assert(div(-1,0) == 0)) echo "pass div - 0!";
}

/** still not sure what to put for test divided by zero
*/
