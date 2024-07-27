# functions in PHP by Bieefilled

## Inbuilt function

#### String

```php
      $string = "this is a simple built in function";
        echo ("$string");

        // strlen() this function is used to get the lenght of a string
        echo("the length of the string is ". strlen($string));

        // strpos to get a certain position from a given string;
        echo("the position is = ". strpos("$string", "s"));

```


#### Numbers
```php
$number = 5.5;
    // 1. abs()- return the absolute value of a number
        echo(abs($number));

    // 2. roundoff - return a rounded value
        echo(round($number));

    // 3. pow() - returns the the power of a certain number
        echo(pow(2, 3));

```

#### Array
```php
$array = ["bread", "tea", "suya"];    
    print_r($array);

    // 2. count is used to count the index of a string or an array
    $result = count($array);
    echo("number of items in the array is = $result");

    // 3. is_array() return 1 being true /0 being false
        echo((is_array($array)));

    // 4. array_push is used to add new value to an array
        $newArray = ["mango"];
        print_r("new array= ". (array_push($array, $newArray)));
        print_r($array);

    // 5. array_pop is used to remove/return  the last value of an array
        print_r(array_pop($array));
        print_r($array);

    // 6. array_reverse return the reverse version of an array
        print_r(array_reverse($array));

```

#### Date
```php


```


## User-defined function

#### function with name 
```php
// 1. simple function with one parameter
   function greetings($name){
    return ("Welcome $name.");
   };
   echo(greetings("samuel"));

```

#### function without parameter
```php
    function name(){
        return "bieefilled";
    };

    echo("my name is ". name())
```
#### anonymous/closure function
```php
//   Anonymous/closure function 
    $sum = function($a, $b){
        return $a + $b;
    };

    echo $sum(2,4);
```
#### recursive function
```php

 function val($a){
        if ($a < 3){
            echo "small \n";
            return val($a+1);
        };
        return "big";
    };
    
    echo(val(7))

```
#### function with single and double parameter
```php
function sum($a, $b){
            $result = (" the sum of $a and $b = ". $a + $b);
            return $result;
        };
        echo(sum(3, 4));
```
