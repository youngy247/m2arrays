<?php
echo '<h1>Adding to Arrays</h1>';

$programmingLanguages = ['PHP', 'C++', 'C#', 'Python', 'Java'];

$programmingLanguages[] = 'Ruby';

array_push($programmingLanguages, 'Perl', 'C');

echo '<pre>';
print_r($programmingLanguages);
'</pre';