<?php
$trainees = ['adam', 'brent', 'michael', 'anna', 'dom', 'henry', 'james', 'phil'];
sort($trainees);
foreach($trainees as $trainee) {
    echo '<p>' . $trainee . '</p>';
}