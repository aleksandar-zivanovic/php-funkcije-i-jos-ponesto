<?php

$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel'
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP'
    ]
];

echo "<h3>foreach (\$posts as \$value) </h3>";
foreach ($posts as $value) {
    print_r($value);
    echo "<br>";
}
echo "<hr>";

echo "<h3>print_r(\$posts[1])</h3>";
print_r($posts[1]);
echo "<hr>";

echo "<h3>foreach (\$value as \$key => \$value) </h3>";
echo "<ol> <strong>Izlistavanje kroz foreach petlju:</strong>";
foreach ($value as $key => $value) {
    echo "<li>kljuc = $key | vrednost = $value<br></li>";
}
echo "</ol><hr>";
