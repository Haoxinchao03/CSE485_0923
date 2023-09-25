<?php
function convertToUpperCase($arr) {
    return array_map('strtoupper', $arr);
}

$arrs = ['1', 'b', 'c', 'd'];
$result = convertToUpperCase($arrs);
print_r($result);