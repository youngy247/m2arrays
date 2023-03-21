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

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => 21,
    'town' => 'Bath'
];

echo '<h2>While Loop</h2>';

$daysArrayLength = count($days);

$i = 0;
while ($i < $daysArrayLength) {
    echo '<p>' . $days[$i] . '</p>';
    $i++;
}

echo '<h2>For Loop</h2>';

for ($i = 0; $i < $daysArrayLength; $i++) {
    echo '<p>' . $days[$i] . '</p>';
}

echo '<h2>Foreach Loop</h2>';

foreach ($days as $day) {
    echo '<p>' . $day . '</p>';
}

foreach ($days as $day) {
    if ($day === 'Sat') {
        continue;
    }
    echo '<p>' . $day . '</p>';
}

foreach ($personalDetails as $key => $detail) {
    echo '<p>' . $key . 'is ' . $detail . '</p>';
    }

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($nums as $num) {
    if ($num % 2 === 0) {
        echo '<p>' . $num . '</p>';
    }
}

for ($i = 1; $i < count($nums); $i += 2) {
    echo '<p>' . $nums[$i] . '</p>';
}
