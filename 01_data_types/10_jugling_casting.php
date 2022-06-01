<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP TYPE Jugling and Casting
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Jugling and Casting </h1> ";
    echo "<h4> Jugling is When PHP converts a variable TYPE on its own prediction. Casting is settype() of variable manualy</h4> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $jug1 = "5"; // string
    $jug2 = 3; // integer
    $jug3 = true; // bool

    echo "Get type of string 5: " . gettype($jug1) . $varBreak;
    settype($jug1, "integer"); // CAsting with function, $foo is now 5   (integer)
    echo "Get type of string 5: " . gettype($jug1) . $varBreak;

    echo "Get type of jug2: " . gettype($jug2) . $varBreak;
    echo "Set type of jug2 to string: " . settype($jug2, "string") . $varBreak; // sets type of variable permanently
    echo "Get type of jug2: " . gettype($jug2) . $varBreak;
    echo "Get type of bool TRUE: " . gettype($jug3) . $varBreak;
    settype($jug3, "string"); // CAsting with function, $jug3 is now string
    echo "Get type of bool TRUE: " . gettype($jug3) . $jug3 . $varBreak;

    echo "Get type of jug2: " . gettype((integer)$jug2) . $varBreak;// changes type of variable only on this instance, on next line of code(instance) it will be STRING again
    echo "Get type of jug2: " . gettype($jug2) . $varBreak;
    // echo "Get type of jug22: " . gettype($jug2) . $varBreak;

    