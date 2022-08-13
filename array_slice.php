<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>array_slice()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća novi niz sastavljen od dela zadatog niza. Nije klasično sečenje niza, pošto prvobitni niz ostaje netaknut. Ako se kao teći parametar doda TRUE, onda novi niz zadržava ključeve prvobitnog niza.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$input = [\"a\", \"b\", \"c\", \"d\", \"e\", \"f\", \"g\", \"h\"];

print_r(array_slice(\$input, 2));
print_r(array_slice(\$input, -2, 1));
print_r(array_slice(\$input, 0, 3));
print_r(\$input);
</pre>";

$input = ["a", "b", "c", "d", "e", "f", "g", "h"];

print_r(array_slice($input, 2));
echo "<br>";
print_r(array_slice($input, -2, 1));
echo "<br>";
print_r(array_slice($input, 0, 3));
echo "<br>";
print_r($input);
echo " <span style='background-color:lightcyan; padding: 0.3rem'>  Niz je ostao netaknut! </span>";
echo "<hr>";

// note the differences in the array keys
echo "<h3>TRUE kao treći parametar</h3>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
print_r(array_slice(\$input, 2, -1));
print_r(array_slice(\$input, 2, -1, true));
</pre>";
echo "Obratiti pažnju na ključeve<br>";
print_r(array_slice($input, 2, -1));
echo "<br>";
print_r(array_slice($input, 2, -1, true));
?>
