<?php

//make the production code call out its name
echo "It's the Roman Numeral Calculator, yo!". "\n";

class Calculator
{
    
    public function roman_numerals ($a, $number_tens = 0, $number_fives = 0, $number_ones = 0, $remainder = null)
    {
        if ($a > 40)
        {
            $this->register = "Error: number too large to calculate";
            
            return $this->register;
        }
        
        if ($a == 40)
        {
            $this->register = "XL";
            
            return $this->register;
        }
        
        while ($a >= 10)
        {
           $number_tens = ($number_tens +1);
            
            $a = ($a - 10);
            
            {
                //if ($a == 9)
                //{
                    //$remainder = 
                //}
                
            }
            
            
        }
        
        return $this->register = str_repeat("X" , $number_tens);
        
        /*return $this->register;
        
        $this->remainder = $a;*/
    }
}



/*
class Calculator
{
    public $register = 0;
    
    public $remainder = 0;
    
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
        if ($a == 40)
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
        
        $remainder = $a;
    }
    
    public function equals_nine ($a)
    {
        if ($a == 9)
        {
            $this->register = "IX";
            
            return $this->register;
        }
    }
    
    public function count_fives ($a)
    {
        $number_fives = 0;
        
        while ($a >=5)
        {
            $number_fives = ($number_fives + 1);
            
            $a = ($a - 5);
        }
        
        $this->register = str_repeat("V" , $number_fives);
        
        return $this->register;
        
        $remainder = $a;
    }
    
    public function equals_four ($a)
    {
        if ($a == 4)
        {
            $this->register = "IV";
            
            return $this->register;
        }
    }
    
    public function count_ones ($a)
    {
        $number_ones = 0;
        
        while ($a >= 1)
        {
            $number_ones = ($number_ones + 1);
            
            $a = ($a - 1);
        }
        
        $this->register = str_repeat("I" , $number_ones);
        
        return $this->register;
    }
    
    public function reject_zero ($a)
    {
        if ($a == 0)
        {
            $this->register = "The Romans never learned of zero";
            
            return $this->register;
        }
    }
    
    public function roman_numerals ($a)
    {
        while ($a > 0)
        {
            $this->too_high ($a);
            
            $this->equals_fourty ($a);
            
            $this->count_tens ($a);
            
            $this->equals_nine ($remainder);
            
            $this->count_fives ($remainder);
            
            $this->equals_four ($remainder);
            
            $this->count_ones ($remainder);
        
            return $this->register;
        }
    }
}
*/