<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
-->

<?php
    $number = array("3","24","9","7","15", "22","10");
    $num1 = count($number);
    $num2 = $num1/2;
    $mid = (int) $num2;
    $median = $number[$mid];
    echo $median;
?>