<?php

$operations_list = [
    function ($a, $b) {
        return $a + $b;
    },
    function ($a, $b) {
        return $a - $b;
    },
    function ($a, $b) {
        return $a * $b;
    }];
$func = $operations_list[array_rand($operations_list)];
echo($func(2, 4));
