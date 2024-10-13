<?php
$number_of_elements = rand(5, 10);
$step = rand(2, 5);
$start = rand(0, 100 - ($number_of_elements * $step));
$elements = [$start];
for ($i = 1; $i <= $number_of_elements; $i++) {
    $elements[] = $elements[array_key_last($elements)] + $step;
}