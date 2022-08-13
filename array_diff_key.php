<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_diff_key()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Uporedjuje <strong>ključeve</strong> dva ili više niza i vraća novi niz, koji sadrži kljućeve prvog niza, koje se ne nalaze u ostailm nizovima. Poredjenje je <strong>case-sensitive</strong>. Kod multidimenzionalnih nizova proverava samo ključeva prve dimenzije niza.</p>";

echo "<h3>Nizovi sa indeksnim ključevima:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array1 = ['plava', 'bela', 'zuta', 'narandzasta', 'zuta', 'ljubicasta', 'zuta'];
\$array2 = ['PLAVa', 'oker', 'zuta', 'ljubicasta', 'crvena'];

\$rezultat1 = array_diff_key(\$array1, \$array2);
print_r(\$rezultat1);

\$rezultatReverse1 = array_diff_key(\$array2, \$array1);
print_r(\$rezultatReverse1);"
     . "</pre>";


$array1 = ['plava', 'bela', 'zuta', 'narandzasta', 'zuta', 'ljubicasta', 'zuta'];
$array2 = ['PLAVa', 'oker', 'zuta', 'ljubicasta', 'crvena'];
$rezultat1 = array_diff_key($array1, $array2);
print_r($rezultat1);
echo "<br>";
$rezultatReverse1 = array_diff_key($array2, $array1);
print_r($rezultatReverse1);
echo "<hr>";

echo "<h3>Asocijativni nizovi:</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$arrayAssoc1 = array(\"a\" => \"green\", \"b\" => \"brown\", \"c\" => \"blue\", \"red\", \"orange\", \"dark\" => \"black\");
\$arrayAssoc2 = array(\"a\" => \"green\", \"yellow\", \"color\" => \"red\", \"pink\" => [\"lightpink\", \"darkpink\"], \"dark\" =>[\"darkgrey\", \"lightgray\"]);

\$rezultatAssoc1 = array_diff_key(\$arrayAssoc1, \$arrayAssoc2);
print_r(\$rezultatAssoc1);

\$rezultatAssocReverse1 = array_diff_key(\$arrayAssoc2, \$arrayAssoc1);
print_r(\$rezultatAssocReverse1);"
     . "</pre>";

$arrayAssoc1 = array("a" => "green", "b" => "brown", "c" => "blue", "red", "orange", "dark" => "black");
$arrayAssoc2 = array("a" => "green", "yellow", "color" => "red", "pink" => ["lightpink", "darkpink"], "dark" =>["darkgrey", "lightgray"]);
$rezultatAssoc1 = array_diff_key($arrayAssoc1, $arrayAssoc2);
print_r($rezultatAssoc1);
echo "<br>";
$rezultatAssocReverse1 = array_diff_key($arrayAssoc2, $arrayAssoc1);
print_r($rezultatAssocReverse1);
echo "<hr>";

echo "<a href=\"array_diff.php\" target=\"_blank\">array_diff()</a><br>";
echo "<a href=\"array_diff_assoc.php\" target=\"_blank\">array_diff_assoc()</a>";
