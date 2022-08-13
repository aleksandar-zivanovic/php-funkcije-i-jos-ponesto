<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h2>Sort Functions For Arrays</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">
    sort() - sort elements in an array in ascending order<br>
    rsort() - sort elements in an array in descending order<br>
    asort() - sort elements in an associative array in ascending order, according to the value<br>
    ksort() - sort elements in an associative array in ascending order, according to the key<br>
    arsort() - sort elements in an associative array in descending order, according to the value<br>
    krsort() - sort elements in an associative array in descending order, according to the key
</p>";

echo "<h3>Sorting indexed arrays:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>\$arrayIndex = ['crvena', 'siva', 'bela', 1, 'zuta', 15, 'plava', '04', 3, 4, 'zelena',];

sort(\$arrayIndex);
print_r(\$arrayIndex);

rsort(\$arrayIndex);
print_r(\$arrayIndex);
</pre>";
$arrayIndex = ['crvena', 'siva', 'bela', 1, 'zuta', 15, 'plava', '04', 3, 4, 'zelena',];

sort($arrayIndex);
echo "<pre> <h3>sort:</h3>";
print_r($arrayIndex);
echo "</pre>";

rsort($arrayIndex);
echo "<pre> <h3>rsort:</h3>";
print_r($arrayIndex);
echo "</pre>";
echo "<hr>";




echo "<h3>Sorting multidimensional arrays:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$arrayAssoc = [
    'b' => 'brown',
    'n' => 'orange',
    'd' => 'white',
    'a' => 'green',
    'z' => 'yellow',
    's' => 'grey',
    'c' => 'black',
];

asort(\$arrayAssoc);
print_r(\$arrayAssoc);

ksort(\$arrayAssoc);
print_r(\$arrayAssoc);

arsort(\$arrayAssoc);
print_r(\$arrayAssoc);

krsort(\$arrayAssoc);
print_r(\$arrayAssoc);
</pre>";

$arrayAssoc = [
    'b' => 'brown',
    'n' => 'orange',
    'd' => 'white',
    'a' => 'green',
    'z' => 'yellow',
    's' => 'grey',
    'c' => 'black',
];


asort($arrayAssoc);
echo "<pre> <h3>asort:</h3>";
print_r($arrayAssoc);
echo "</pre>";

ksort($arrayAssoc);
echo "<pre> <h3>ksort:</h3>";
print_r($arrayAssoc);
echo "</pre>";

arsort($arrayAssoc);
echo "<pre> <h3>arsort:</h3>";
print_r($arrayAssoc);
echo "</pre>";

krsort($arrayAssoc);
echo "<pre> <h3>krsort:</h3>";
print_r($arrayAssoc);
echo "</pre>";
