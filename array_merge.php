<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_merge()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Spaja dva ili više niza, tako što na kraj prvog niza dodaje drugi niz. Kod nizova sa istim ključevima, za vrednost ključa uzima vrednost iz poslednjeg niza (poslednjeg navedenog u parametrima funkcije). Po ovome se razlikuje od array_merge_recursive() funkcije, koja u ovakvoj situaciji ključu dodaje obe vrednosti.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array1 = ['a' => 'green', 'b' => 'brown', 'd' => 'yellow', 2, 'jabuka'];
\$array2 = ['c' => 'blue', 'd' => 'red', 'kruska'];

\$rezultat1 = array_merge(\$array1, \$array2);
print_r(\$rezultat1);

\$rezultat2 = array_merge(\$array2, \$array1);
print_r(\$rezultat2);"
     . "</pre>";

$array1 = ['a' => 'green', 'b' => 'brown', 'd' => 'yellow', 2, 'jabuka'];
$array2 = ['c' => 'blue', 'd' => 'red', 'kruska'];

$rezultat1 = array_merge($array1, $array2);
echo "<pre>";
print_r($rezultat1);
echo "</pre>";

echo "<br>";
$rezultat2 = array_merge($array2, $array1);
echo "<pre>";
print_r($rezultat2);
echo "</pre>";
echo "<hr>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array3 = [1, -3, 'bandera', 'sijalica'];
\$array4 = [1, 4, 'auto', 'motor'];

\$rezultat3 = array_merge(\$array3, \$array4);
var_export(\$rezultat3);

\$rezultat4 = array_merge(\$array4, \$array3);
var_export(\$rezultat4);"
     . "</pre>";

$array3 = [1, -3, 'bandera', 'sijalica'];
$array4 = [1, 4, 'auto', 'motor'];

$rezultat3 = array_merge($array3, $array4);
echo "<pre>";
print_r($rezultat3);
echo "</pre>";

echo "<br>";

$rezultat4 = array_merge($array4, $array3);
echo "<pre>";
print_r($rezultat4);
echo "</pre>";
echo "<hr>";

echo "<h3 id='array_merge'>array_merge() sa multidimenzionalnim nizovima</h3>";
echo "<a href=\"array_merge_recursive.php#array_merge\" target=\"_blank\">array_merge sa multidimenzionalnim nizovima</a>";
echo "<hr>";
echo "<br><br>";

echo "<a href=\"array_merge_recursive.php\" target=\"_blank\">array_merge_recursive()</a><br>";
