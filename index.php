<?php
/**
 * Created by PhpStorm.
 * User: taaas
 * Date: 06/29/2018
 * Time: 18:53
 */
$array = array(
    5,
    6,
    array(7, 8),
    array(
        array(7, 1),
        5
    ),
    2
);

$sum = 0;
foreach (new recursiveIteratorIterator(new recursiveArrayIterator($array)) as $element) {
    $sum += (int)$element;
}
print_r($sum);

