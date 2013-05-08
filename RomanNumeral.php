<?php

//statement to ensure we call the production code
echo "It's the Roman Numeral Converter, ya'll!" . "\n";

class Calculator
{
    public $register = 0;
    public function number_limit ($a)
    {
        if ($a >= 20.01)
        {
            $this->register = "Error: Number too large to calculate";
            
            return $this->register;
        }
    }
    public function divide_x ($a)
    {
        if (($a % 10) == 0)
        {
            $this->register = ($a / 10);
            
            return $this->register;
        }
    }
    public function convert_i ($a)
    {
        if ($a == 1)
        {
            $this->register = "I";
            
            return $this->register; 
        }
        if ($a == 2)
        {
            $this->register = "II";
            
            return $this->register;
        }
       if ($a ==3)
       {
           $this->register = "III";
           
           return $this->register;
       }
    }
  
}
