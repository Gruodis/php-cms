<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1>Floating Point Number Functions</h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $int4 = 3.645;

    echo "Round 3.645 to " . round($int4, 2)  . $varBreak;
    echo "Round ceil 3.645 to " . ceil($int4)  . $varBreak;
    echo "Round floor 3.645 to " . floor($int4)  . $varBreak . $varBreak;
    
    echo "Is this integer? " . is_int($int3)  . $varBreak;
    echo "Is this float? " . is_float($int4)  . $varBreak;
    echo "Is this numeric? " . is_numeric($int4) . $varBreak. $varBreak;
?>