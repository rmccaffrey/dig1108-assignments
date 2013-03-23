
<?php
/* A string that doesn't contain the delimiter will simply return a one-length array of the original string. */
$input1 = "hello";
$input2 = "hello,there";
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );

?>