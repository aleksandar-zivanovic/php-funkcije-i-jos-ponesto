<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>strrpos()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća poziciju poslednjeg pojavljivanja traženog stringa u stringu u kome se traži. Ako ne nadje traženi strng, onda vraća FALSE. S obzirom da intiger 0 ima boolean vrednost FALSE, treba obratiti pažnju kod korišćenja == i ===, jer možemo da dobijemo pogrešnu vrednost <small>(primer ispod)</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$haystack = 'Ovo je neki string u kome trazimo zeljeni substring';
\$needle   = 'rin';
\lastPos   = strrpos(\$haystack, \$needle);

echo \$position;"
     . "</pre>";

$haystack = 'Ovo je neki string u kome trazimo zeljeni substring';
$needle   = 'rin';
$lastPos  = strrpos($haystack, $needle);
echo $lastPos;

echo "<hr>";
echo "<a href=\"strpos.php\" target=\"_blank\">strpos()</a><br>";
