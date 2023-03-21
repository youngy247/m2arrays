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

//$days2 = [
//    'Mon',
//    'Tues',
//    'Wed',
//    'Thu',
//    'Fri',
//    'Sat',
//    3 => 'Fred'
//];
//echo '<pre>';
//print_r($days2);
//echo '</pre>';


echo '<pre>';
print_r($days);
echo '</pre>';

echo $days[1];


$rando = [1 => 'One', 4 => 'Four', 7 => 'Seven'];
echo '<pre>';
print_r($rando);
echo '</pre>';

$rando[] = 'Nine';
$rando[3] = 'Three';
echo '<pre>';
print_r($rando);
echo '</pre>';