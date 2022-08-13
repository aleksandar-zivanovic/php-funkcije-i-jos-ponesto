<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_keys()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća niz sa ključevima elemenata iz niza, ako nije zadat parametar, a ako jeste onda samo ključ/eve koji imaju vrednost istu kao parametar. Ako se kao treći parametar prosledi TRUE, onda je pretraga striktna, tj. '===' u suprotnom je '==', jer je dafault vrednost FALSE.</p>";

echo "<h3>Bez serach parametra</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$arrayInd1 = ['Marko', 'Petar', 'Janko', 'Sima'];
\$arrayAsoc1= ['Marko' => 'Markovic', 'Petar' => 'Petrovic', 'Janko' => 'Jankovic', 'Sima' => 'Simaic'];
\$arrayMix1 = ['Marko', 'Petar' => 'Petrovic', 'Janko' => 'Jankovic', 'Sima'];
\$arrayMulti1 = [
    'prodavci' => ['Dejan', 'Djoka', 'Milan' => 'Milanovic'],
    'menadzeri' => ['Stefan' => 'Stefanovic', 'Laza' => 'Lazic'],
    'direktor' => 'Sindja',
];
<br>
    print_r(array_keys(\$arrayInd1));
    print_r(array_keys(\$arrayAsoc1));
    print_r(array_keys(\$arrayMix1));
    print_r(array_keys(\$arrayMulti1));
    print_r(array_keys(\$arrayMulti1['menadzeri']));"
 . "</pre>";

$arrayInd1 = ['Marko', 'Petar', 'Janko', 'Sima'];
$arrayAsoc1= ['Marko' => 'Markovic', 'Petar' => 'Petrovic', 'Janko' => 'Jankovic', 'Sima' => 'Simaic'];
$arrayMix1 = ['Marko', 'Petar' => 'Petrovic', 'Janko' => 'Jankovic', 'Sima'];
$arrayMulti1 = [
    'prodavci' => ['Dejan', 'Djoka', 'Milan' => 'Milanovic'],
    'menadzeri' => ['Stefan' => 'Stefanovic', 'Laza' => 'Lazic'],
    'direktor' => 'Sindja',
];

echo "<pre><span style='background-color:lightpink'>\$arrayInd1 <br></span>";
print_r(array_keys($arrayInd1));
echo "</pre>";

echo "<pre><span style='background-color:lightpink'>\$arrayAsoc1 <br></span>";
print_r(array_keys($arrayAsoc1));
echo "</pre>";

echo "<pre><span style='background-color:lightpink'>\$arrayMix1 <br></span>";
print_r(array_keys($arrayMix1));
echo "</pre>";

echo "<pre><span style='background-color:lightpink'>\$arrayMulti1 <br></span>";
print_r(array_keys($arrayMulti1));
echo "</pre>";

echo "<pre><span style='background-color:lightpink'>\$arrayMulti1 <br></span>";
print_r(array_keys($arrayMulti1['menadzeri']));
echo "</pre>";
echo "<hr>";

echo "<h3>Sa serach parametrom</h3>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$arrayInd2 = ['Marko', 'Petar', 'Marko', 'Marko', 'Janko', 'Sima'];
\$arrayAsoc2= ['Marko' => 'Markovic', 'Petar' => 'Petrovic', 'Janko' => 'Jankovic', 'Milan' => 'Markovic', 'Sima' => 'Simaic', 'Dejan' => 'Markovic',];
\$arrayMix2 = ['Marko', 'Petar' => 'Petrovic', 'Petrovic', 'Janko' => 'Petrovic', 'Sima', 'Petrovic' => 'Ilija'];
\$arrayMulti2 = [
    'prodavci' => ['Dejan', 'Djoka', 'Milan' => 'Milanovic'],
    'menadzeri' => ['Stefanovic', 'Lazic'],
    'direktor' => 'Sindja',
];
<br>
    print_r(array_keys(\$arrayInd2, 'Marko'));
    print_r(array_keys(\$arrayAsoc2, 'Markovic'));
    print_r(array_keys(\$arrayMix2, 'Petrovic'));
    print_r(array_keys(\$arrayMulti2, 'Stefanovic'));
    print_r(array_keys(\$arrayMulti2, ['Stefanovic', 'Lazic']));
    print_r(array_keys(\$arrayMulti2, 'Sindja'));"
     . "</pre>";

$arrayInd2 = ['Marko', 'Petar', 'Marko', 'Marko', 'Janko', 'Sima'];
$arrayAsoc2= ['Marko' => 'Markovic', 'Petar' => 'Petrovic', 'Janko' => 'Jankovic', 'Milan' => 'Markovic', 'Sima' => 'Simaic', 'Dejan' => 'Markovic',];
$arrayMix2 = ['Marko', 'Petar' => 'Petrovic', 'Petrovic', 'Janko' => 'Petrovic', 'Sima', 'Petrovic' => 'Ilija'];
$arrayMulti2 = [
    'prodavci' => ['Dejan', 'Djoka', 'Milan' => 'Milanovic'],
    'menadzeri' => ['Stefanovic', 'Lazic'],
    'direktor' => 'Sindja',
];

echo "<pre><span style='background-color:lightgreen'>\$arrayInd2 <br></span>";
print_r(array_keys($arrayInd2, 'Marko'));
echo "</pre>";

echo "<pre><span style='background-color:lightgreen'>\$arrayAsoc2 <br></span>";
print_r(array_keys($arrayAsoc2, 'Markovic'));
echo "</pre>";

echo "<pre><span style='background-color:lightgreen'>\$arrayMix2 <br></span>";
print_r(array_keys($arrayMix2, 'Petrovic'));
echo "</pre>";

echo "<pre><span style='background-color:lightgreen'>\$arrayMulti2 <br></span>";
echo "<br>print_r(array_keys(\$arrayMulti2, 'Stefanovic')); <br>";
print_r(array_keys($arrayMulti2, 'Stefanovic'));
echo "<br>print_r(array_keys(\$arrayMulti2, ['Stefanovic', 'Lazic'])); <br>";
print_r(array_keys($arrayMulti2, ['Stefanovic', 'Lazic']));
echo "<br>print_r(array_keys(\$arrayMulti2, 'Sindja')); <br>";
print_r(array_keys($arrayMulti2, 'Sindja'));
echo "</pre>";

echo "<hr>";

echo "<a href=\"array_values.php\" target=\"_blank\">array_values</a>";
