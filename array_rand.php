<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_rand)</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća random ključeve niza. Ako je parametar samo niz, onda vraća samo jedan ključ, koji je tada string, a ako je drugi parametar broj, vraća niz sa ključevima.</p>";

$array = [
    2,
    'zelena'         => 'green',
    'braon'          => 'brown',
    'tamna i svetla' => [
        'light' => [
            'bela' => 'white',
            'zuta' => 'yellow'
        ],
        'dark'  => [
            'grey',
            'black'
        ]
    ],
    'jabuka',
    32423,
    -4
];

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>";
print_r($array);
echo "</pre>";


echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'> print_r(array_rand(\$array)) </pre>";
echo "<pre>";
print_r(array_rand($array));
echo "</pre>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'> print_r(array_rand(\$array, 2)) </pre>";

echo "<pre>";
print_r(array_rand($array, 2));
echo "</pre>";
