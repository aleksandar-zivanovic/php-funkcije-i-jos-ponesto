<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>implode</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Od niza pravi string</p>";

$niz1 = ["ovo", "je", 1, "niz"];

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "\$niz1 = [\"ovo\", \"je\", 1, \"niz\"];"
 . "</pre>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>Implode sa separatorom</h3>"
 . "echo \$rezultat = implode(\" \", \$niz1);"
 . "</pre>";
echo $rezultat = implode(" ", $niz1);

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>Implode bez separatora</h3>"
 . "echo \$rezultat = implode(\$niz1);"
 . "</pre>";
echo implode($niz1);
echo "<hr>";

echo "<a href=\"explode.php\" target=\"_blank\">explode</a>";
