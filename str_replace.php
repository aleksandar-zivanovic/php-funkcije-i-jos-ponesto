<?php
echo "<h2>str_replace</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Menja string drugim stringom ili nizom stringova. Ako su i needle i search niz, onda svaki element stringa menja tako sto za rednu poziciju reci u search nizu menja rec iz needle niza na istoj poziciji u stringu koji je predmet izmene</p> <hr>";


// Zamena stringa stringom
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>Zamena stringa stringom</h3>"
 . "\$string1 = \"Riba ribi grize rep\";
\$search1 = \"ib\";
\$replace1 = \"od\";
\$newString1 = str_replace(\$search1, \$replace1, \$string1);"
 . "</pre>";

$string1 = "Riba ribi grize rep";
$search1 = "ib";
$replace1 = "od";
$newString1 = str_replace($search1, $replace1, $string1);
echo "<p>" . $newString1 . "</p>";
echo "<hr>";


// Zamena stringa nizom stringova
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>Zamena stringa nizom stringova</h3>"
 . "\$string2 = \"Ko rano rani, dve srece grabi\";
\$search2 = [\"rani\", \"ve srece\", \"grabi\"];
\$replace2 = [\"ustaje\", \"anju\", \"spava\"];
\$newString2 = str_replace(\$search2, \$replace2, \$string2);
echo \$newString2;"
 . "</pre>";

$string2 = "Ko rano rani, dve srece grabi";
$search2 = ["rani", "ve srece", "grabi"];
$replace2 = ["ustaje", "anju", "spava"];
$newString2 = str_replace($search2, $replace2, $string2);
echo "<p>" . $newString2 . "</p>";
echo "<hr>";


// Zamena stringa nizom stringova, kada je search niz
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "<h3>Zamena stringa nizom stringova, kada je search niz</h3>"
 . "\$string3 = \"Danas smo jeli banane, narandze, jabuke, a bilo je i visanja\";
\$search3 = [\"anan\", \"narandz\", \"jabuke\", \"visanja\"];
\$replace3 = [\"aklav\", \"tort\", \"cokolade\", \"kolaca\"];
\$newString3 = str_replace(\$search3, \$replace3, \$string3);"
 . "</pre>";

$string3 = "Danas smo jeli banane, narandze, jabuke, a bilo je i visanja";
$search3 = ["anan", "narandz", "jabuke", "visanja"];
$replace3 = ["aklav", "tort", "cokolade", "kolaca"];
$newString3 = str_replace($search3, $replace3, $string3);

echo "<p>" . $newString3 . "</p>";
echo "<hr>";
