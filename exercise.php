<?php
//$trainees = ['adam', 'brent', 'michael', 'anna', 'dom', 'henry', 'james', 'phil'];
//sort($trainees);
//foreach($trainees as $trainee) {
//    echo '<p>' . $trainee . '</p>';
//}

$nums = [1, 2, 3, 4, 5, 6, 7, 8];
$nums[] = 9;

array_push($nums, 10);

shuffle($nums);

foreach($nums as $num) {
    if ($num % 2 === 0) {
        echo '<p>' . $num . '</p>';
    }
}

foreach($nums as $num) {
    if ($num % 2 === 1) {
        echo '<p>' . $num . '</p>';
    }
}