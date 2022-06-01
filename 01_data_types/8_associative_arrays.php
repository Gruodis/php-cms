<?php

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //  PHP Associative Arrays
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    echo "<h1> Associative Arrays </h1> ";
    echo "<h4> WE use key[] instead of object index[] to iterate associative arrays <br/>
          exp.: [\"my_key_name\" => \"my_value\"]</h4> ";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $assocArray = ["my_key_name" => "my_value"];
    echo "Echo value of my_key_name: " . $assocArray["my_key_name"] . $varBreak; // print value of first_name (Bebras)

    
    $assocMix = [
       "names" => ["first_name"=> "Bebras", "last_name"=> "Grinius"],
        "jobs" => ["first_job"=> "Traktoristas", "last_job"=> "Kosmonautas"]
    ];
    $assocMix["names"]["first_name"] = "Valerijonas"; // set new Name
    
    echo $assocMix["names"]["first_name"] . $varBreak; // print value from of first_name (Bebras)
    $getNames = $assocMix["names"];
    $getJobs = $assocMix["jobs"];
    
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

    ?>