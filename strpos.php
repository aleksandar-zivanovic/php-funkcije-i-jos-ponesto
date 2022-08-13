<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php

echo "<h2>strpos()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća poziciju prvog pojavljivanja traženog stringa u stringu u kome se traži. Ako ne nadje traženi strng, onda vraća FALSE. S obzirom da intiger 0 ima boolean vrednost FALSE, treba obratiti pažnju kod korišćenja == i ===, jer možemo da dobijemo pogrešnu vrednost <small>(primer ispod)</small>.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$haystack = 'abcdef';
\$needle   = 'a';
\$pos      = strpos(\$haystack, \$needle);


if (\$pos == false) {
    echo \"String '\$needle' nije pronadjen u stringu '\$haystack' na poziciji \$pos (rezulata za ==) <\br>\";
} else {
    echo \"String '\$needle' je pronadjen u stringu '\$haystack' na poziciji \$pos (rezulata za ==) <\br>\";
}

if (\$pos === false) {
    echo \"String '\$needle' nije pronadjen u stringu '\$haystack' na poziciji \$pos (rezulata za ===) <\br>\";
} else {
    echo \"String '\$needle' je pronadjen u stringu '\$haystack' na poziciji \$pos (rezulata za ===) <\br>\";
}"
     . "</pre>";

$haystack = 'abcdef';
$needle   = 'a';
$pos      = strpos($haystack, $needle);

if ($pos == false) {
    echo "String '$needle' nije pronadjen u stringu '$haystack' na poziciji $pos (rezulata za ==) <br>";
} else {
    echo "String '$needle' je pronadjen u stringu '$haystack' na poziciji $pos (rezulata za ==) <br>";
}

echo "<br>";

if ($pos === false) {
    echo "String '$needle' nije pronadjen u stringu '$haystack' na poziciji $pos (rezulata za ===) <br>";
} else {
    echo "String '$needle' je pronadjen u stringu '$haystack' na poziciji $pos (rezulata za ===) <br>";
}

echo "<hr>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$haystack = 'Ovo je neki string u kome trazimo zeljeni substring';
\$needle   = 'rin';
\$pos      = strpos(\$haystack, \$needle);

echo \$position;"
     . "</pre>";

$haystack = 'Ovo je neki string u kome trazimo zeljeni substring';
$needle   = 'rin';
$position = strpos($haystack, $needle);
echo $position;

echo "<hr>";
echo "<a href=\"strrpos.php\" target=\"_blank\">strrpos()</a><br>";
