<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h2>List</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Varijablama dodeljuje vrednost elemenata iz niza. Svaka varijabla dobija vrednost elementa niza, koji se nalazi na istoj poziciji u nizu kao ona u funkciji list().<br> <span style=\"background-color: mistyrose;\">Ne radi sa multidimenzionalnim nizovima.</span></p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
. "\$arrayInd = ['Ivan', 'Marko', 'Milena'];
list(\$a, \$b, \$c) = \$arrayInd;
echo \"\$a | \$b | \$c\";"
. "</pre>";

$arrayInd = ['Ivan', 'Marko', 'Milena'];
list($a, $b, $c) = $arrayInd;
echo "$a | $b | $c";
echo "<hr>";

$arrayInd2 = ['Slavko', 'Mirko', 'Stanka', 'Bojana'];
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$arrayInd2 = ['Slavko', 'Mirko', 'Stanka', 'Bojana'];
list(\$prvi,,, \$cetvrti) = \$arrayInd2;
echo \"\$prvi | \$cetvrti\";"
     . "</pre>";

list($prvi,,, $cetvrti) = $arrayInd2;
echo "$prvi | $cetvrti";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "list(\$jedan, \$tri) = \$arrayInd2;
echo \"\$jedan | \$tri\";"
     . "</pre>";

list($jedan, $tri) = $arrayInd2;
echo "$jedan | $tri";
echo "<hr>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
. "\$arrayAssoc = ['marka' => ['VW', 'Opel', 'Peugeot'], 'model' => ['Golf', 'Astra', 206], 'boja' => ['plava', 'siva', 'metalik plava'],];
foreach(\$arrayAssoc as list(\$value1, \$value2, \$value3)) {
    echo \"\$value1 : \$value2 : \$value3 <\br>\";
}"
. "</pre>";
$arrayAssoc = ['marka' => ['VW', 'Opel', 'Peugeot'], 'model' => ['Golf', 'Astra', 206], 'boja' => ['plava', 'siva', 'metalik plava'],];
foreach($arrayAssoc as list($value1, $value2, $value3)) {
    echo "$value1 : $value2 : $value3 <br>";
}
echo "<hr>";

echo "<a href=\"compact.php\" target=\"_blank\">compact</a><br>";
echo "<a href=\"extract.php\" target=\"_blank\">extract</a><br>";
