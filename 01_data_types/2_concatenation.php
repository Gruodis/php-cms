<?php 
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // chaining concatenation with (.=). 
    // Variables declared in variables.php
    //
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $first = "Hello, world.";
    $second = "Go Go Racer Anime.";

    echo "<h1>PHP Concatenation and Append </h1>"; // concatenation(smash together strings, numbers etc in to one line) by useing (.)
    echo "<h4>1 method. Concatenation operator ('.'), which returns the concatenation of its right and left arguments.</h4>";
    echo "<h4>2 method. Cncatenating assignment operator ('.='), which appends the argument on the right side to the argument on the left side.</h4>";

    // 1 - method concatenation
    echo "1 Method by useing ('.') : " . $first . " " . $second . $varBreak;

    // 2 - method appends the argument
    $third = $first;
    $third .= " ";
    $third .= $second;
    $third .= $varBreak;

    echo "2 Method by useing ('.=') : " . $third;

    ?>