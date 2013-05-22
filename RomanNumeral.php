<?php

//make the production code call out its name
echo "It's the Roman Numeral Calculator, yo!". "\n";

class Calculator
{
    public $register = 0;
    
    public function too_high ($a)
    {
        if ($a > 40)
        {
            $this->register = "Error: number too large to calculate";
            
            return $this->register;
        }
    }
    
    public function equals_fourty ($a)
    {
        if ($a = 40)
        {
            $this->register = "XL";
            
            return $this->register;
        }
    }
}