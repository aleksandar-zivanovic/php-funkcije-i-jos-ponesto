<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_diff_assoc()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Uporedjuje <strong>ključeve</strong> dva ili više niza i <strong>vrednosti</strong> dva ili više niza (ključeve sa ključevima, vrednosti sa vrednostima) i vraća novi niz, koji sadrži parove \$key=\$value prvog niza, koje se ne nalaze u ostailm nizovima. Poredjenje je <strong>case-sensitive</strong>. Predstavlja kombinaciju array_diff() i array_diff_key() funkcija. Kod multidimenzionalnih nizova proverava samo prve dimenzije niza.<br><br>

Ne uporedjuje medjusobno ključ i vrednost, već vrednost sa vrednošću, ključ sa ključem. Ako uporedjeni par prvog niza nije identičan (===) paru iz ostalih nizova sa kojima se uporedjuje, pakuje ga u novi niz.</p>";

$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red", "brown", 1, "broj" => 6, "name" => "John", "yellow"];
$array2 = ["a" => "green", "b" => "gray", "yellow", "brown", "red", "num" => 1, 1, "Broj" => 6, "name" => "john"];

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array1 = [\"a\" => \"green\", \"b\" => \"brown\", \"c\" => \"blue\", \"red\", \"brown\", 1, \"broj\" => 6, \"name\" => \"John\", \"yellow\"];<br>";
print_r($array1);
echo "\$array2 = [\"a\" => \"green\", \"b\" => \"gray\", \"yellow\", \"brown\", \"red\", \"num\" => 1, 1, \"Broj\" => 6, \"name\" => \"john\"]<br>";
print_r($array2);
echo " <br>\$rezultat1 = array_diff_assoc(\$array1, \$array2);
print_r(\$rezultat1);

\$rezultatReverse1 = array_diff_assoc(\$array2, \$array1);
print_r(\$rezultatReverse1);"
     . "</pre>";


$rezultat1 = array_diff_assoc($array1, $array2);
echo "<pre>";
print_r($rezultat1);
echo "</pre>";
echo "<br>";

$rezultatReverse1 = array_diff_assoc($array2, $array1);
echo "<pre>";
print_r($rezultatReverse1);
echo "</pre>";


echo "<hr>";

echo "<a href=\"array_diff.php\" target=\"_blank\">array_diff()</a><br>";
echo "<a href=\"array_diff_key.php\" target=\"_blank\">array_diff_key()</a><br>";
