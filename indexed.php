<?php
echo '<h1>Indexed Arrays</h1>';

$days = [
    'Mon',
    'Tues',
    'Wed',
    'Thu',
    'Fri',
    'Sat',
    'Sun'
];

$days2 = [
    'Mon',
    'Tues',
    'Wed',
    'Thu',
    'Fri',
    'Sat',
    3 => 'Fred'
];
echo '<pre>';
print_r($days2);
echo '</pre>';


echo '<pre>';
print_r($days);
echo '</pre>';