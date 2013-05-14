<?php

//statement to ensure we call the production code
echo "It's the Roman Numeral Converter, ya'll!" . "\n";

class Calculator
{
    public $register = 0;
    public function convert_i ($a)
    {
        if ($a == 1)
        {
            $this->register = "I";
            
            return $this->register;
        }
    }
}
