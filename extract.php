<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>extract()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Niz pretvara u varijable.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$osoba = ['ime' => 'Petar', 'prezime' => 'Petrovic', 'godine' => 50,];
extract(\$osoba);
echo \$ime . \"<\br>\" . \$prezime . \"<\br>\" . \$godine;"
     . "</pre>";

$osoba = ['ime' => 'Petar', 'prezime' => 'Petrovic', 'godine' => 50,];
extract($osoba);
echo $ime . "<br>" . $prezime . "<br>" . $godine;
echo "<hr>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$marka = 'Opel';
\$auto = ['marka' => 'VW', 'model' => 'Golf', 'boja' => 'siva',];
extract(\$auto, EXTR_PREFIX_SAME, 'pref');
echo \$marka . \"<\br>\";
echo \$pref_marka . \"<\br>\";
echo \$model . \"<\br>\";
echo \$boja . \"<\br>\";"
     . "</pre>";

$marka = 'Opel';
$auto = ['marka' => 'VW', 'model' => 'Golf', 'boja' => 'siva',];
extract($auto, EXTR_PREFIX_SAME, 'pref');
echo $marka . "<br>";
echo $pref_marka . "<br>";
echo $model . "<br>";
echo $boja . "<br>";
echo "<hr>";

echo "<a href=\"compact.php\" target=\"_blank\">compact</a><br>";
echo "<a href=\"list.php\" target=\"_blank\">list</a><br>";
