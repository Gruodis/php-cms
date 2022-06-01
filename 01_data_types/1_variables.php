<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     *  PHP Variables
     *  
     */
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1>PHP declare variable</h1>";
    echo "<h4>PHP declare variable with $</h4>";
    echo "<h4>PHP echo — Output one or more strings</h4>";
    echo "<h4>PHP print_r() — Prints human-readable information about a variable</h4>";
    echo "<h4>PHP var_dump() — Dumps information about a variable</h4>";

    $var1 = 10;
    echo "Use echo to output a variable {\$var1}: " . $var1;

    $varBreak = '<br/> <hr/>';
    echo $varBreak;

    $var1 = 50; // $var1 value will change to 50
    echo "Echo {\$var1}: " . $var1 . $varBreak;

?>