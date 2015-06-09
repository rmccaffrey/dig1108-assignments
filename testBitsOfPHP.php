<?php

echo str_repeat("Rob is so cool." . " " .(str_repeat("ha",2) . "\n"), 3);

echo "\n";

echo str_repeat("Rob is so cool." . "\n", 3) . (str_repeat("ha", 2)) . "\n";

function numTest ($a, $ninty = null, $l = null, $forty = null, $x = null, $v = null, $i = null, $r = null)
{
    if ($a == 0) {
        $r = "The Romans never learned of zero.";
    }
    
    if ($a == 100){
        $r = "C";
        
        $a = 0;
    }
    
    if ($a >= 90) {
        
        $ninty = "CX";
        
        $a = ($a - 90);
        
    } 
    while ($a > 50) {
        $l = ($l + 1);
        
        $a = ($a - 50);
    }    
    
    if ($a == 50) {
        $r = "L";
        
        $a = 0;
    }
    
    if ($a >= 40) {
        
        $forty = "XL";
        
        $a = ($a - 40);
        
    }   
    
    while ($a >= 10) {
        $x = ($x + 1);
        
        $a = ($a - 10);
        
       
    }
    
     if ($a == 9) {
            
            $r = "IX";
            
            $a = 0;
            
    }
        
    while ($a >= 5) {
        $v = ($v + 1);
        
        $a = ($a - 5);
        
    }
    
    if ($a == 4) {
            
            $r = "IV";
            
            $a = 0;
            
    }
    
    while ($a >= 1) {
        $i = ($i +1);
        
        $a = ($a - 1);
    }
    
    echo $ninty . str_repeat("L", $l) . $forty . str_repeat("X", $x) . str_repeat("V", $v) . str_repeat("I", $i) . $r;
}

numTest (0);
?>