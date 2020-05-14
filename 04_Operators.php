<?php
/*
Types of Operators in php
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/



$a = 44;
$b = 6;


//Arithmetic operators
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ^ b, the result is ". ($a ** $b) . "<br>";

echo "<br>";
echo "<br>";


// Assignment Operators helps us to place values in variables and more
$x = $a;        //place the value of a in x
echo "For x, the result is ". $x . "<br>";

$a += 4;        // add 4 in existing value of a
echo "The result is ". $a . "<br>";

$a -= 4;        // subtract 4 from existing new value of a
echo "The result is ". $a . "<br>";

$a *= 4;        // multiply 4 with existing new value of a
echo "The result is ". $a . "<br>";

$a /= 4;        // divide with 4 to the existing new value of a
echo "The result is ". $a . "<br>";

$a %= 4;        // show remainder
echo "The result is ". $a . "<br>";


echo "<br>";
echo "<br>";




// COMPARISON OPERATOR
$x = 44;
$y = 32;

echo "For x == y, the result is ";
echo var_dump($x == $y);
echo "<br>";

echo "For x > y, the result is ";
echo var_dump($x > $y);
echo "<br>";

echo "For x < y, the result is ";
echo var_dump($x < $y);
echo "<br>";

echo "For x >= y, the result is ";
echo var_dump($x >= $y);
echo "<br>";

echo "For x <= y, the result is ";
echo var_dump($x <= $y);
echo "<br>";
echo "<br>"; 
echo "<br>"; 





//LOGICAL OPERATORS

$m = true;
$n = false;

//and (&&)
echo "For m and n, the result is ";
echo var_dump($m and $n);   //both must be true
echo "<br>";
echo var_dump($m && $n);   //both must be true
echo "<br>";
echo "<br>";


//or (||)
echo "For m or n, the result is ";
echo var_dump($m or $n);   //any one of two must be true
echo "<br>";
echo var_dump($m || $n);   //any one of two must be true
echo "<br>";

// not (!)
echo "For !m, the result is ";
echo var_dump(!$m);   //inverse of answer


?>