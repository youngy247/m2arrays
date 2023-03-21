<?php
echo '<h1>Iterating Through Arrays</h1>';

$days = [
    'Mon',
    'Tues',
    'Wed',
    'Thu',
    'Fri',
    'Sat',
    'Sun'
];

echo '<h2>While Loop</h2>';

$daysArrayLength = count($days);

$i = 0;
while ($i < $daysArrayLength) {
    echo '<p>' .$days[$i] . '</p>';
    $i++;
}