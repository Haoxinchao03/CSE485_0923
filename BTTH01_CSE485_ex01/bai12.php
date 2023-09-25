<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "First element: " . $firstElement . "\n";
echo "Last element: " . $lastElement . "\n";

$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

$maxValue = max($numbers);
$minValue = min($numbers);
$sum = array_sum($numbers);

echo "Max value: " . $maxValue . "\n";
echo "Min value: " . $minValue . "\n";
echo "Sum: " . $sum . "\n";

$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

asort($numbers); // Sắp xếp theo chiều tăng các giá trị
print_r($numbers);

arsort($numbers); // Sắp xếp theo chiều giảm các giá trị
print_r($numbers);