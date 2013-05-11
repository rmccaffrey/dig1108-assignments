<?php

//statement to ensure we call the production code
echo "It's the Roman Numeral Converter, ya'll!" . "\n";

class Calculator
{
    public $register = 0;
    public $quotient = 0;
    public $remainder = 0;
    public function roman_calculator ($a)
{
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
            
            for ($i = 1; $i <= $this->register; $i++)
            {
                echo "X";
                
            }
            else $this->quotient = ()
            {
                
            }
        }
    }
    public function divide_v ($a)
    {
        if (($a % 5) == 0)
        {
            $this->register = ($a / 5);
            
            return $this->register;
            
        }
    }
    public function less_one ($a)
    {
        if ($a == (5 - 1))
        {
            $this->register = "IV";
            
            return $this->register;
        }
        
        if ($a == (10 - 1))
        {
            $this->register = "IX";
            
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
}
