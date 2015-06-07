<?php

echo str_repeat("Rob is so cool." . " " .(str_repeat("ha",2) . "\n"), 3);

echo "\n";

echo str_repeat("Rob is so cool." . "\n", 3) . (str_repeat("ha", 2));
?>