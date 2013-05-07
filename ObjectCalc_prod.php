<?php

//statement to ensure we call the production code
echo "It's the production calculator, ya'll!" . "\n";

class Calculator
{
    public $register = 0;
    
    public function add ($a, $b)
    {
        $this->register = $a + $b;
        
        return $this->register;
    }
}




