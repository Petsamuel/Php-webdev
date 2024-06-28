<!DOCTYPE html>
<html lang="en">
<body style="font-size: x-large;  margin-top: 15%;">

<center>
<!-- inbult php functions-->    
 <p>

    <?php

    // ### STRING
    
    $string = "this is a simple built in function";
    // 1. the echo is a simple function that  prints value to the screen 
        // echo ("$string");

    // 2. strlen() this function is used to get the lenght of a string
        // echo("the length of the string is ". strlen($string));

    // 3. strpos to get a certain position from a given string;
        // echo("the position is = ". strpos("$string", "s"));

    // 4. strtoupper() return  the string to uppercase
        // echo(strtoupper($string));
        // echo(strtoupper(substr($string,0,1))); 

    // 5.strtolower() return  the string to lowercase
        // echo(strtolower($string));


    // ### MATHS
    $number = 5.5;
    // 1. abs()- return the absolute value of a number
        // echo(abs($number));

    // 2. roundoff - return a rounded value
        // echo(round($number));

    // 3. pow() - returns the the power of a certain number
        // echo(pow(2, 3));

    // 4. sqrt() - return the square the root of a number
        // echo(sqrt(4));

    // 5. rand() - return random numbers 
        // echo("random number generated = ". rand(1, 5));
    

    // ### ARRAY
    // 1. print_r is used to print array in a readable format in php
    $array = ["bread", "tea", "suya"];    
    // print_r($array);

    // 2. count is used to count the index of a string or an array
    // $result = count($array);
    // echo("number of items in the array is = $result");

    // 3. is_array() return 1 being true /0 being false
        // echo((is_array($array)));

    // 4. array_push is used to add new value to an array
        // $newArray = ["mango"];
        // print_r("new array= ". (array_push($array, $newArray)));
        // print_r($array);

    // 5. array_pop is used to remove/return  the last value of an array
        // print_r(array_pop($array));
        // print_r($array);

    // 6. array_reverse return the reverse version of an array
        // print_r(array_reverse($array));

    // 7. array_merge is used to merge to distint array
        // $newArray = ["cway"];
        // $result = array_merge($newArray, $array);
        // print_r($result)

    ?>
 </p>


<!-- userDefined Functions -->
 <p>
    <?php
//    1. simple function with one parameter
//    function greetings($name){
//     return ("Welcome $name.");
//    };
//    echo(greetings("samuel"));

//    2. function with two parameter
        // function sum($a, $b){
        //     $result = (" the sum of $a and $b = ". $a + $b);
        //     return $result;
        // };
        // echo(sum(3, 4));

//  3. anonymous/closure function 
    // $sum = function($a, $b){
    //     return $a + $b;
    // };

    // echo $sum(2,4);

// 4. function without parameter
    // function name(){
    //     return "bieefilled";
    // };

    // echo("my name is ". name())

// recursive function
    // function val($a){
    //     if ($a < 3){
    //         echo "small \n";
    //         return val($a+1);
    //     };
    //     return "big";
    // };
    
    // echo(val(7))
    


      
  ?>
   
</p>
</center>
</body>
</html>



