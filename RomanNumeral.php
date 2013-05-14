<?php

//statement to ensure we call the production code
echo "It's the Roman Numeral Converter, ya'll!" . "\n";

class Calculator
{
    public $register = 0;
    public function find_tens ($a)
    {
        if ($a >= 40)
        {
            $this->register = "Error: too large to calculate";
            
            return $this->register;
        }
        else
        {
            while ($a > 9)
            {
                $a = ($a - 10);
                
                echo "X";
            }
            
        }
    }
    public function find_nines ($a)
    {
        if ($a == 9)
        {
            $this->register = "IX";
            
            return $this->register;
        }
    }
       public function find_fives ($a)
    {
        if ($a == 5)
        {
            $this->register = "V";
            
            return $this->register;
        }
    }
        public function find_fours ($a)
    {
        if ($a == 4)
        {
            $this->register = "IV";
            
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
        
        if ($a == 3)
        {
            $this->register = "III";
            
            return $this->register;
        }
    }
}
