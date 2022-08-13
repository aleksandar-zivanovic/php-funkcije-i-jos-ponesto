<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h2>array_diff()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Uporedjuje <strong>vrednosti</strong> dva ili više niza i vraća novi niz, koji sadrži vrednosti prvog niza, koje se ne nalaze u ostailm nizovima. Poredjenje je <strong>case-sensitive</strong>. Uporedjuju se vrednosti, tako što se pretvaraju u stringove i samo ako su stringovi tih vrednosti indentični (===), onda su i te vrednosti u nizovima jednake. Ne uporedjuje Assocdimenzionalne nizove.</p>";

echo "<h3>Nizovi sa tekstualnim vrednostima:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array1 = ['plava', 'bela', 'zuta', 'narandzasta', 'zuta', 'ljubicasta', 'zuta'];
\$array2 = ['PLAVa', 'oker', 'zuta', 'ljubicasta', 'crvena'];

\$rezultat1 = array_diff(\$array1, \$array2);
print_r(\$rezultat1);

\$rezultatReverse1 = array_diff(\$array2, \$array1);
print_r(\$rezultatReverse1);"
     . "</pre>";

$array1 = ['plava', 'bela', 'zuta', 'narandzasta', 'zuta', 'ljubicasta', 'zuta'];
$array2 = ['PLAVa', 'oker', 'zuta', 'ljubicasta', 'crvena'];
$rezultat1 = array_diff($array1, $array2);
print_r($rezultat1);
echo "<br>";
$rezultatReverse1 = array_diff($array2, $array1);
print_r($rezultatReverse1);
echo "<hr>";

echo "<h3>Nizovi sa brojevima:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array3 = [1, -3, '4', -5, 23, -12,];
\$array4 = ['1', 3, '-4', '-5', 23, -12];

\$rezultat1 = array_diff(\$array3, \$array4);
print_r(\$rezultat2);

\$rezultatReverse1 = array_diff(\$array4, \$array3);
print_r(\$rezultatReverse2);"
     . "</pre>";

$array3 = [1, -3, '4', -5, 23, -12,];
$array4 = ['1', 3, '-4', '-5', 23, -12];
$rezultat2 = array_diff($array3, $array4);
print_r($rezultat2);
echo "<br>";
$rezultatReverse2 = array_diff($array4, $array3);
print_r($rezultatReverse2);
echo "<hr>";

echo "<h3>Asocijativni nizovi:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$arrayAssoc1 = array(\"a\" => \"green\", \"b\" => \"brown\", \"c\" => \"blue\", \"red\", \"orange\");
\$arrayAssoc2 = array(\"a\" => \"green\", \"yellow\", \"color\" => \"red\", \"pink\" => \"lightpink\");

\$rezultatAssoc1 = array_diff(\$arrayAssoc1, \$arrayAssoc2);
print_r(\$rezultatAssoc1);

\$rezultatAssocReverse1 = array_diff(\$arrayAssoc2, \$arrayAssoc1);
print_r(\$rezultatAssocReverse1);"
     . "</pre>";

$arrayAssoc1 = array("a" => "green", "b" => "brown", "c" => "blue", "red", "orange");
$arrayAssoc2 = array("a" => "green", "yellow", "color" => "red", "pink" => "lightpink");
$rezultatAssoc1 = array_diff($arrayAssoc1, $arrayAssoc2);
print_r($rezultatAssoc1);
echo "<br>";
$rezultatAssocReverse1 = array_diff($arrayAssoc2, $arrayAssoc1);
print_r($rezultatAssocReverse1);
echo "<hr>";

echo "<a href=\"array_diff_key.php\" target=\"_blank\">array_diff_key()</a><br>";
echo "<a href=\"array_diff_assoc.php\" target=\"_blank\">array_diff_assoc()</a>";
