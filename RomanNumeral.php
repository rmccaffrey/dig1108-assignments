<?php

//make the production code call out its name
echo "It's the Roman Numeral Calculator, yo!". "\n";

class Calculator
{
    public $register = 0;
    
    public $slate = array();
    
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
    
    public function count_tens ($a)
    {
        $number_tens = 0;
        
        while ($a >= 10)
        {
           $number_tens = ($number_tens +1);
            
            $a = ($a - 10);
        }
        
        $this->register = str_repeat("X" , $number_tens);
        
        return $this->register;
    }
}