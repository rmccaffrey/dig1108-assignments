<?php

class SomeObject
{
    private $somPrivateMember;
    
    protected $someProtectedMember;
    
    public $somePublicMember;
    
    public function someMethod ()
    {
        
    }
}

$SomeInstance = new SomeObject();

function add ($a, $b)
{
    return $a + $b;
}

class Calculator
{
    public $register = 0;
    
    public function add ($a, $b)
    {
        $this->register = $a + $b;
        
        return $this->register;
    }
}

/**
 * public function add ($a , $b = null) //to set $b as optional
 * if ($b != null)
 * $this->register = $a + $b;
 * return $this->register;
 * else
 * $b = $a;
 * $a = $this->register;
 * $this->register = $a + $b;
 * 
 * 
