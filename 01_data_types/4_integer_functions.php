<?php


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PHP default INTEGER functions
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $int1 = 1.4;
    echo "<h1> Integer functions </h1> ";

    echo "Absolute value: " . abs($int1)  . $varBreak;
    echo "Exponential : " . pow(6, 3)  . $varBreak; // 6 * 6 * 6 = 216
    echo "Exponential: " . pow(2, 5)  . $varBreak; // 2 * 2 * 2 * 2 * 2 = 32
    echo "Square Root: " . sqrt(25)  . $varBreak; //
    echo "Modulo: " . fmod(27, 3)  . $varBreak; // skaicius 27 dalinasi is 3 be liekanos, todel gauname 0
    echo "Modulo: " . fmod(5, 2)  . $varBreak; // skaicius 5 dalinasi is 2 du kartus ir lieka 1
    echo "Modulo: " . fmod(10, 4)  . $varBreak; // skaicius 5 dalinasi is 2 du kartus ir lieka 1
    echo "Random number generator: " . rand()  . $varBreak; // skaicius 27 dalinasi is 2 su liekana, todel gauname 1
    echo "Random number(min/max) generator: " . rand(10, 20)  . $varBreak; // skaicius 27 dalinasi is 2 su liekana, todel gauname 1

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Integer Math </h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $int2 = 8;

    echo $int2 += $int2; // 8+8=16
    echo  $varBreak;
    echo $int2 *= $int2;//16*16=256
    echo  $varBreak;

    echo $int2 /= $int2;//256 / 256=1
    echo  $varBreak;

    echo $int2 -= $int2;//1-1=0
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Integer Increment/Decrement</h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h4> Integer Increment \$int3++</h4> ";
    echo "<h4> Integer Decrement \$int3--</h4> ";

    $int3 = 1;

    echo ++$int3  . $varBreak;// 1+1

    $int3++; echo $int3 . $varBreak;// 2+1

    $int3++; 
    echo $int3 . $varBreak;// 3+1

    $int3--; 
    echo $int3 . $varBreak;// 4-1

    $int3--; 
    echo $int3 . $varBreak;// 3-1

    $int3--; 
    echo $int3 . $varBreak;// 2-1
?>