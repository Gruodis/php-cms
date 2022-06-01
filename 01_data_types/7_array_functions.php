<?php


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Arrray Functions </h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $simple= [1, 65, 4, 37, 2, -2, 75];
    echo "Type of : " . print_r($simple) . gettype($simple) . $varBreak;

    echo "Count how many values in array: " . count($simple) . $varBreak;
    echo "Max value in array: " . max($simple) . $varBreak;
    echo "Min value in array: " . min($simple) . $varBreak;
    echo "<pre>";
    echo "Sort: " . sort($simple) . print_r($simple)  . $varBreak;
    echo "</pre>";
    // echo "Sort: " . rsort($simple) . print_r($simple) . $varBreak;

    // Implode/Explode
    echo "<pre>";
    echo "Implode array in to string and add char \", \": " . $implode_array = implode(", ", $simple) . $varBreak;
    echo "Type after Imploded: " . gettype($implode_array) . $varBreak;
    echo "Explode string in to array: "  .  print_r($exploded_array = explode(", ", $implode_array))  . $varBreak;

    echo "</pre>";
    echo "Type after Exploded: " . gettype($exploded_array) . $varBreak;

    echo "Is nuber 37 in array \$simple: = " . in_array(37, $simple) . $varBreak;


?>