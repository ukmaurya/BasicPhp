<?php
echo "Associative arrays <br>";

$favCol = array('rohit' => 'red',
                'anil' => "blue",
                'nitin' => 'pink');
// we can print above statement in many ways.

echo "<br>";
echo "Rohit's favourite color is ".$favCol['rohit']."<br>";
echo "Anil's favourite color is ".$favCol['anil']."<br>";
echo "Nitin's favourite color is ".$favCol['nitin']."<br>";

echo "<br>";

// alternative method

foreach ($favCol as $key => $value) {
    echo "Favorite color of $key is $value <br>";
}
?>