<?php
/*
PHP data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL

 */


// STRINGS --> characters or words
$name = "nitin";
$friend = "anil";

echo "$name in friends with $friend";
echo "<br>";
echo "<br>";

// INTEGER
$income = 50000000;
$debts = -1000;

echo $income;
echo "<br>";
echo $debts;
echo "<br>";
echo "<br>";

//FLOAT --> Decimal numbers
$income = 5000000.0;
$debts = -10.00;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";
echo "<br>";

//BOOLEAN --> true or false
$x = true;
$is_friend = false;

echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";
echo "<br>";

//OBJECT --> instances of classes
// Employee is a class ---> and rohit can be one object


// ARRAY --> kind of list of objects
$friends = array('anil', 'nitin', 'rohit');
echo var_dump($friends);
echo "<br>";
echo var_dump($friends[0]);
echo "<br>";
echo var_dump($friends[1]);
echo "<br>";
echo var_dump($friends[2]);
echo "<br>";
echo "<br>";


//NULL
$name = NULL;
echo var_dump($name);
echo "<br>";
echo "<br>";
?>