<?php

$name = "Nitin is a lazy person";
echo $name;
echo "<br>";        //it will ad a line break

echo strlen($name);     //it will tell us length of the variable
echo "<br>";

echo "the lenght of my string is " . strlen($name);     // the dot(.) between two strings are used to concatenate two strings
echo "<br>";

echo str_word_count($name);     // it counts the words in string
echo "<br>";

echo strrev($name);     //prints reverse
echo "<br>";

echo strpos($name, "is");       // shows the position of starting of "is"
echo "<br>";

echo str_replace("Nitin", "Rohan", $name);      // it will replace nitin with rohan in name variable, but just for this line not in actual variable
echo "<br>";
echo "<br>";

echo str_repeat($name, 100);    // it will repeat the name variable 100 times
echo "<br>";
echo "<pre>";
echo rtrim("   this is a string    ");  //it will trim extra spaces from right side
echo "<br>";
echo ltrim("   this is a string    ");  //it will trim extra spaces from left side
echo "<br>";
echo "</pre>";




?>