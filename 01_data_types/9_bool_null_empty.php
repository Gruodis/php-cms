<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP Boolean
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Boolean </h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $boolTrue = true;
    $boolFalse = false;

    echo "is it bool: " . is_bool($boolTrue) . $varBreak;

    $testBool = 3;
    echo "Does it Float? ";

    if (is_float($testBool)) {
        echo "YES it floats!";
    } else { 
        echo "NO it sinks.";
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP NULL and empty
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> NULL and empty </h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $nullVar = null;
    $emptyVar = ""; // empty = "", null, false, 0, 0.0, "0", [], even NOT existing variable
    $emptyVar2 = [];

    echo "is it null: " . is_null($nullVar) . $varBreak;
    // echo "is it null: " . is_null($nullVar565) . $varBreak; // not existing variable will give warning!
    echo "is it null: " . is_null($emptyVar) . $varBreak;
    echo "is it empty: " . empty($emptyVar2) . $varBreak;
    echo "is NOT existing variable is considered empty: " . empty($oho78) . $varBreak; // YES and will give no warrning

    // HOW to check if the inputField (input =  numb of children) is empty
    $inputField = null;
    echo "Is it empty? ";

    if (empty(is_numeric($inputField))) { // we must check if its numeric and then if its empty
        echo "YES";
    } else { 
        echo "NO.";
    }
    ?>