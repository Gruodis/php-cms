<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            background-color: #1d2a35;
            color: #fff;
            /* font-family: "Helvetica Neue", sans-serif; */
            font-family: "Segoe UI",Arial,sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            max-width: 800px;
        }
        h1, h2, h3, h4, h5, h6 {
            color: olivedrab;
            font-weight: 400;

        }
        hr {
            border: none;
            border-top: 1px solid #38444d;
        }
    </style>
</head>

<body>
    <?php
    

    ?>

    <?php
    /**
     *  PHP DATA Types
     * =================================================================================================
     * =================================================================================================
     *  Variables = $var
     *  Concatenation = $var . $var2
     *  String = text
     *  Integer = numbers
     *  Float = doubles(numers with decimal = 3.3)
     *  Array = []
     *  Associative Arrays = ["my_key_name" => "my_value"]
     *  Boolean = true/false
     *  NUll and EMPTY
     *  TYPE Jugling/Casting https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting
     *  Object = {}
     */
    require './1_variables.php';
    require './2_concatenation.php';
    require './3_string_functions.php';
    require './4_integer_functions.php';
    require './5_floating_point.php';
    require './6_arrays.php';
    require './7_array_functions.php';
    require './8_associative_arrays.php';
    require './9_bool_null_empty.php';
    require './10_jugling_casting.php';
    require './11_constant.php';

    ?>

</html>

</body>