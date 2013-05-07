<?php

//statement to ensure we call the production code
echo "It's the Roman Numeral Converter, ya'll!" . "\n";

class Calculator
{
    public $register = 0;
    public function convert_i ($a, $b = null)
    {
        
    }
     public function add ($a, $b)
    {
        $this->register = $a + $b;
        
        return $this->register;
    }
}