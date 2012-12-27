<?php

//call the production code
require_once 'ObjectCalc_prod.php';

function test ($assertion, $message = null)
{
    echo (@assert($assertion) ? 'pass ' : 'fail ') . $message . "\n";
}

test (class_exists('Calculator'), "A calculator class exists");
