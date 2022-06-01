<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     *  PHP Variables
     *  
     */
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $var1 = 10;
    echo $var1;

    $varBreak = '<br/> <hr/>';
    echo $varBreak;

    $var1 = 50; // $var1 value will change to 50
    echo $var1 . $varBreak;

    $first = "Hello, world";
    $second = "Go Go Racer Anime";


    ?>

    <?php
    /**
     *  PHP DATA Types
     * 
     *  String = text
     *  Integer = numbers
     *  Float = doubles(numers with decimal numbers 3.3)
     *  Array = []
     *  Boolean = true/false
     *  TYPE Jugling/Casting https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting
     *  Object = {}
     */

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // chaining concatenation with (.=)
    //
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    echo "<h1> \" {$first} </h1> PHP Math " . $var1 + 10  . " \r\n" . 10 . " suma"; // concatenation(smash together strings, numbers etc in to one line) by useing (.)

    $third = $first;
    // $third .= $varBreak;
    $third .= $second;
    $third .= $varBreak;

    echo $third . $varBreak;

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // PHP default STRING functions
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    echo "<h1> String functions </h1> ";

    echo "String Length: " . strlen($third) . $varBreak; // counts letters and whitespaces in $third
    echo "String Trim whitespace: " . trim(" A B C ") . "D" . $varBreak; // removes whitespace before and after A B C
    echo "String Find: word Racer: " . strstr($third, "Racer") . $varBreak; // returns word Racer and words after Racer
    echo "String Replace: word Racer with Gadget: " . str_replace("Racer", "Gadget", $third) . $varBreak;
    echo "String Repeat: " . str_repeat($third, 3) . $varBreak;
    echo "Make Substring: " . substr($third, 3, 18) . $varBreak; // cut out everything before char at position "3" and after char at position "18"
    echo "Find position: " . strpos($third, "Anime") . $varBreak;
    echo "Find character: " . strchr($third, "c") . $varBreak; // finds "c" and return everything after "c"
    echo  $varBreak;
    echo  $varBreak;
    echo  $varBreak;

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

    $int3 = 1;

    echo ++$int3;// 1+1
    echo  $varBreak;
    $int3++; echo $int3;// 2+1
    echo  $varBreak;
    $int3++; echo $int3;// 3+1
    echo  $varBreak;
    $int3--; echo $int3;// 4-1
    echo  $varBreak;
    $int3--; echo $int3;// 3-1
    echo  $varBreak;
    $int3--; echo $int3;// 2-1
    echo  $varBreak;

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



    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP Associative Arrays
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Associative Arrays </h1> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    $assocMix = [
        ["first_name"=> "Bebras", "last_name"=> "Grinius"],
        ["first_job"=> "Traktoristas", "last_job"=> "Kosmonautas"]
    ];
    $assocMix[0]["first_name"] = "Valerijonas"; // set new Name
    
    echo $assocMix[0]["first_name"] . $varBreak; // print value of first_name (Bebras)
    $getNames = $assocMix[0];
    $getJobs = $assocMix[1];
    
    $combine = $getNames["first_name"];
    $combine .= " ";
    $combine .= $getNames["last_name"];
    $combine .= " / ";
    $combine .= $getJobs["first_job"];
    $combine .= $varBreak;
    
    echo $combine;


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  for debuging
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    echo "<pre>";
    echo  print_r($assocMix);
    echo "</pre>" . $varBreak . "END";

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
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP TYPE Jugling
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Set Type of variable </h1> ";
    echo "<h4> Jugling is When PHP converts a variable. Casting is settype of variable manualy</h4> ";
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

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP Constants
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> PHP defined Constants</h1> ";
    // echo "<h4> Jugling is When PHP converts a variable. Casting is settype of variable manualy</h4> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    define("MAX_WIDTH", 980);
    echo "Constand value and type: " . MAX_WIDTH . " ". gettype(MAX_WIDTH) . $varBreak;






    ?>

</html>

</body>