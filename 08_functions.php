<?php
echo "Functions tutorial <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$xyz = [33, 66, 77, 62, 72, 44];
$sumMarks = processMarks($xyz);
$avgMarks = avgMarks($xyz);

echo "the sum is $sumMarks <br>";
echo "the average is $avgMarks <br>";


?>