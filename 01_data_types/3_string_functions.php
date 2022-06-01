<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PHP default STRING functions
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo "<h1> String functions </h1> ";

    echo "String Length: " . strlen($third) . $varBreak; // counts letters and whitespaces in $third
    echo "String Trim whitespace: " . trim(" A B C ") . "D" . $varBreak; // removes whitespace before and after A B C
    echo "String Find and return word 'Racer': " . strstr($third, "Racer") . $varBreak; // returns word Racer and words after Racer
    echo "String Replace: word Racer with Gadget: " . str_replace("Racer", "Gadget", $third) . $varBreak;
    echo "String Repeat: " . str_repeat($third, 3) . $varBreak;
    echo "Make Substring: " . substr($third, 3, 18) . $varBreak; // cut out everything before char at position "3" and after char at position "18"
    echo "Find position: " . strpos($third, "Anime") . $varBreak;
    echo "Find character: " . strchr($third, "c") . $varBreak; // finds "c" and return everything after "c"
    echo  $varBreak;
    echo  $varBreak;
    echo  $varBreak;

    ?>