<?php

//while loop

$i = 0;

while($i<15){
    echo "the value of i is ";
    echo $i;
    echo "<br>";
    $i++;
    // or we can use $i+=2; to increase 2 units
}

echo "<br>";
echo "<br>";

// for loop
for ($index=0; $index < 10; $index++) { 
    echo "the number is $index <br>";
}

echo "<br>";
echo "<br>";

//do-while loop
//it is same as while loop but it will run once definitely in all situations

$k = 89;
do {
    echo "$k <br>";
} while ($k <= 10);

/*k is less than 10 but it will definitely print once,
it runs first and then check the condition
*/

echo "<br>";
echo "<br>";

//foreach loop

$arr = array ("Bananas", "Mango", "Bread", "Apple", "Pine-Apple");

//we can use for loop here but we will see foreach loop here
/*
for ($m=0; $m < count($arr); $m++) { 
    echo $arr[$m];
    echo "<br>";
}
*/

foreach ($arr as $value) {
    echo "$value <br>";
}







?>