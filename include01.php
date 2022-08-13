<?php

$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_new' => true,
        'has_comments' => true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => false
    ],
    3 => [
        'title' => 'Intro to HTML',
        'content' => 'This is a short intro to HTML',
        'is_new' => false
    ],
    4 => [
        'title' => 'Intro to CSS',
        'content' => 'This is a short intro to CSS',
        'is_new' => true
    ]
];

$title = [];
echo "<h3> include & require </h3>";
foreach ($posts as $key => $value) {
    include 'include02.php';
}

echo "<hr><pre>";
print_r($title);
echo "</pre><hr>";

echo "<p style='background-color:lightyellow; padding: 10px;'>Ako bi se umesto include ili require koristili include_once ili require_once, onda bi foreach petlja dala samo prvi \$key i prvi \$value['title'], a \$title niz bi preuzeo vrednost prvog (tj. nultog) \$value['title'] i zato bi bio string, a ne niz.</p>";