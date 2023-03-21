<?php
echo '<h1>Adding to Arrays</h1>';

$programmingLanguages = ['PHP', 'C++', 'C#', 'Python', 'Java'];

$programmingLanguages[] = 'Ruby';

array_push($programmingLanguages, 'Perl', 'C');

echo '<pre>';
print_r($programmingLanguages);
'</pre';

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => 21,
    'town' => 'Bath'
];
//don't do this
array_push($personalDetails, 'Perl', 'C');

echo '<pre>';
print_r($personalDetails);
echo '</pre>';