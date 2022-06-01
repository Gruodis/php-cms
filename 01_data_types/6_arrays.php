<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PHP Array
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Arrray </h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $mixed = [6, 7, ["dog", "Gadget", "cat", "tiger"]];
    
    $mixed[1] = "Lion"; // set new value at index 1 in array
    $mixed[] = "Baboon"; // set new value at the end of array
    
    // echo $mixed[2][0] . $varBreak;
    echo "NOT NESTED Array" . '<br> <ul>';
    foreach ($mixed as $key => $array) {
        
        if (is_array($array) != 1) { // if array is NOT within array then
            echo "<li>" . "index [" . $key . "] " . $array . " (" . is_array($array) . ")</li>";
        } else {
            echo "<h3>NESTED Array" . '</h3>';
            
            foreach ($array as $keyNest => $value) {
                echo "<li>" . "index [" . $key . "] " . " [" . $keyNest . "] " . $value . " (" . is_array($value) . ") </li>";
            }
        }
    }
    echo '</ul>';
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  for debuging
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    echo "<pre>";
    echo  print_r($mixed);
    echo "</pre>" . $varBreak;
    ?>