<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>array_unique()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Uklanja duple vrednosti iz niza. Vraća novi niz. Ne radi sa multidimenzionalnim nizovima. Može se dodati drugi parametar, da bi se prilagodilo sortiranje vrednosti. Po default-u zadržava ključ za koji se vrednost prvi put pojavi.</p>";

$input = ['crvena', 'siva' => 'crna', 'a' => 'bela', 'zuta', 1, 'b' => 'zuta', 'bela', 'plava', 'crvena', 'tamna' => 'crna', 'jedan' => 1];

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>\$input = ['crvena', 'siva' => 'crna', 'a' => 'bela', 'zuta', 1, 'b' => 'zuta', 'bela', 'plava', 'crvena', 'tamna' => 'crna', 'jedan' => 1];
\$result = array_unique(\$input);";
print_r($input);
echo "print_r(\$result);
</pre>";

$result = array_unique($input);

echo "<pre>";
print_r($result);
echo "</pre>";

