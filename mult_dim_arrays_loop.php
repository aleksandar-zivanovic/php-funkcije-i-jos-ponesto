<?php

$b = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

echo "<hr>";
echo "<h3>Associative array loop</h3>";

foreach ($b as $key => $value) {
    echo "\$b[$key] => $value <br>";
}
echo "<hr>";

// Multidimensional array

$superheroes = [
    "spider-man" => [
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ],
    "super-man" => [
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ],
    "iron-man" => [
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
        "godine" => "punoletan",
        "omiljeno_jelo" => "corba",
        "boja" => "crna",
        "broj" => 32,
    ]
];


// Printing all the keys and values one by one

$keys = array_keys($superheroes);

for ($i = 0; $i < count($superheroes); $i++) {
    echo "<b>" . $keys[$i] . "</b>" . "{<br>";
    foreach ($superheroes[$keys[$i]] as $key => $value) {
        echo "<i>" . $key . "</i>" . " : " . $value . "<br>";
    }
    echo "}<br>";
}
echo "<hr>";


$odeljenje = array(
    'petar' => array('matematika' => 3, 'web' => 1, 'prog' => 4, 'fizika' => 2, 'hemija' => 5, 'prosecna ocena' => ""),
    'milan' => array('matematika' => 4, 'web' => 4, 'prog' => 3, 'fizika' => 3, 'hemija' => 2, 'prosecna ocena' => ""),
    'jovan' => array('matematika' => 2, 'web' => 2, 'prog' => 2, 'fizika' => 4, 'hemija' => 5, 'prosecna ocena' => ""),
    'kaca' => array('matematika' => 4, 'web' => 3, 'prog' => 5, 'fizika' => 1, 'hemija' => 3, 'prosecna ocena' => ""),
    'djoka' => array('matematika' => 1, 'web' => 3, 'prog' => 5, 'fizika' => 1, 'hemija' => 1, 'prosecna ocena' => ""),
    'dejan' => array('matematika' => 2, 'web' => 3, 'prog' => 5, 'fizika' => 5, 'hemija' => 4, 'prosecna ocena' => NULL),
    'dusica' => array('matematika' => 5, 'web' => 5, 'prog' => 5, 'fizika' => 5, 'hemija' => 4, 'prosecna ocena' => NULL),
    'maja' => array('matematika' => 2, 'web' => 3, 'prog' => 1, 'fizika' => 1, 'hemija' => 2, 'prosecna ocena' => NULL),
    'mila' => array('matematika' => 1, 'web' => 2, 'prog' => 2, 'fizika' => 1, 'hemija' => 4, 'prosecna ocena' => NULL)
);

$imenaUcenikaNiz = array_keys($odeljenje);
for ($i = 0; $i < count($imenaUcenikaNiz); $i++) {
    echo "<b style='color:red;'><br> $imenaUcenikaNiz[$i] <br></b>";

    $predmetiNizKeys = array_values($odeljenje[$imenaUcenikaNiz[$i]]);
    $suma_ocena_po_uc = array_sum($predmetiNizKeys);
    $prosek = $suma_ocena_po_uc / (count($predmetiNizKeys) - 1);

    foreach ($odeljenje[$imenaUcenikaNiz[$i]] as $predm => $ocenPoPred) {

        if ($predm == "prosecna ocena") {
            $ocenPoPred = $prosek;
        }

        echo "<b style='color:blue;'> $predm </b> => " . $ocenPoPred . " ||| ";
    }
}
echo "<hr>";
?>
