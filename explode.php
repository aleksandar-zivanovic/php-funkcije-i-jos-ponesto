<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>explode()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Od stringa pravi niz</p>";

$string = "Ovo je jedan string!";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "\$string = \"Ovo je jedan string!\";"
 . "</pre>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>explode bez limita</h3>"
 . "var_dump(explode(\" \", \$string));"
 . "</pre>";

echo "<pre>";
var_export(explode(" ", $string));
echo "</pre>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>explode sa limitom</h3>"
 . "var_dump(explode(\" \", \$string, 2));<br>"
 . "var_dump(explode(\" \", \$string, -2));"
 . "</pre>";
echo "<pre>";
var_export(explode(" ", $string, 2));
echo "</pre>";
echo "<pre>";
var_export(explode(" ", $string, -2));
echo "</pre>";

echo "<hr>";

echo "<a href=\"implode.php\" target=\"_blank\">implode</a>";
