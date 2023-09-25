<?php
function convertToLowerCase($arr) {
    return array_map('strtolower', $arr);
}

$arrs = ['1', 'B', 'C', 'E'];
$result = convertToLowerCase($arrs);
print_r($result);
?>