<?php
$array = array(1, 2, 3, 4, 5);
$indexToRemove = 2; // Phần tử thứ 3 (số 3) có index là 2

array_splice($array, $indexToRemove, 1);

print_r($array);