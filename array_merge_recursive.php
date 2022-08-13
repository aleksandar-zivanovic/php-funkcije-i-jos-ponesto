<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_merge_recursive()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Spaja dva ili više niza, tako što na kraj prvog niza dodaje drugi niz. Kod nizova sa istim ključevima istom ključu dodeljuje obe vrednosti. Po ovome se razlikuje od array_merge() funkcije, koja u ovakvoj situaciji ključu dodeljuje samo vrednost poslednjeg niza</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array1 = [
    2,
    'a' => 'green',
    'b' => 'brown',
    'd' => [
        'light' => [
            'bela' => 'white',
            'zuta' => 'yellow'
        ],
        'dark'  => [
            'grey',
            'black'
        ]
    ],
    'jabuka'
];
\$array2 = ['c' => 'blue',  'b' => ['orange', 'pineapple'], 'd' => 'red', 'kruska'];

\$rezultat1 = array_merge_recursive(\$array1, \$array2);
print_r(\$rezultat1);

\$rezultat2 = array_merge_recursive(\$array2, \$array1);
print_r(\$rezultat2);"
     . "</pre>";

$array1 = [
    2,
    'a' => 'green',
    'b' => 'brown',
    'd' => [
        'light' => [
            'bela' => 'white',
            'zuta' => 'yellow'
        ],
        'dark'  => [
            'grey',
            'black'
        ]
    ],
    'jabuka'
];

$array2 = ['c' => 'blue', 'b' => ['orange', 'pineapple'], 'd' => 'red', 'kruska'];

$rezultat1 = array_merge_recursive($array1, $array2);
echo "<pre>";
print_r($rezultat1);
echo "</pre>";

echo "<br>";
$rezultat2 = array_merge_recursive($array2, $array1);
echo "<pre>";
print_r($rezultat2);
echo "</pre>";
echo "<hr>";

echo "<h3 id='array_merge'>array_merge()</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$rezultat3 = array_merge(\$array1, \$array2);
print_r(\$rezultat3);"
     . "</pre>";
$rezultat3 = array_merge($array1, $array2);
echo "<pre>";
print_r($rezultat3);
echo "</pre>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$rezultat4 = array_merge(\$array2, \$array1);
print_r(\$rezultat4);"
     . "</pre>";
$rezultat4 = array_merge($array2, $array1);
echo "<pre>";
print_r($rezultat4);
echo "</pre>";
echo "<hr>";

echo "<a href=\"array_merge.php\" target=\"_blank\">array_merge()</a><br>";
