<?php

echo str_repeat("Rob is so cool." . " " .(str_repeat("ha",2) . "\n"), 3);

echo "\n";

echo str_repeat("Rob is so cool." . "\n", 3) . (str_repeat("ha", 2)) . "\n";

function numTest ($a, $x = null, $v = null, $i = null, $r = null)
{
    while ($a >= 10)
    {
        $x = ($x + 1);
        
        $a = ($a - 10);
        
        if ($a == 9)
        {
            $r = "IX";
            
        }
    }
    
    while ($a >= 5)
    {
        $v = ($v + 1);
        
        $a = ($a - 5);
        
        
    }
    
    while ($a >= 1)
    {
        $i = ($i +1);
        
        $a = ($a - 1);
    }
    
    echo str_repeat("X", $x) . str_repeat("V", $v) . str_repeat("I", $i) . $r;
}

numTest (39);
?>