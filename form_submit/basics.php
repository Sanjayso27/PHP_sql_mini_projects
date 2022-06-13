<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        <?php
            echo "Hello world , and this is printed using php";
            // 
            /* */
            $var1 = 34;
            $var2 = 45;
            // php is dynamically typed language type needn't be specified
            // is case insensitive
            echo $var1;
            echo $var2;
            echo "<br>";
            echo $var1 + $var2;
            // Operators in PHP
            // arithmetic/assignment/comparison/inc/dec/logical operators
            // +,-,/,*,++,--,!= >=,<=,!= ,==
            // and,or,xor
            echo "<br>";
            echo var_dump(1==4);

            //primary data types in php-string,integer,float,boolean,array,object
            // Arrays in php
            $languages = array("Python", "C++", "php", "NodeJs"); 
            // echo count($languages);   
            // echo $languages[0];   

                $age = 6;
                if($age>18){
                    echo "You can go to the party";
                }
                else if($age==7){
                    echo "You are 7 years old";
                }
                else if($age==6){
                    echo "You are 6 years old";
                }
                else{
            echo "You can not go to the party";
            }
            // Loops in PHP
                $a = 0;
                while ($a <= 10) {
                    echo "<br>The value of a is: ";
            echo $a;
            $a++;
            }

            // Iterating arrays in PHP using while loop
            $a = 0;
            while ($a < count($languages)) {
            echo "<br>The value of language is: ";
            echo $languages[$a];
            $a++;
            }

            // Do while loop
            $a = 200;
            do {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
            } while ($a < 10);

            // For loop
            for ($a=60; $a < 10; $a++) { 
            echo "<br>The value of a from the for loop is: ";
            echo $a;
            }

            foreach ($languages as $value) {
            echo "<br>The value from foreach loop is ";
            echo $value;
            }
            function print_number($number){
                echo "<br>Your number is ";
                echo $number;
            }
            print_number(1);
        ?>
        <?php
    $str = "This this this";
    // . for concatenation
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";// first position
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";// replaces all occurences
    // echo $lenn;
?>
    </div>
</body>
</html>