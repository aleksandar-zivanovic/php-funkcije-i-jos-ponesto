<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
$style = "style='background-color:black; color:white; padding:10px;'";

echo "<p $style>array_unshift(\$originalniniz, \$dodatiniz) - dodaje niz na <strong>kraj</strong> originalnog niza</p>";


$stack = array("narandzasta" => "orange", "zuta" => "banana", "zelena" => "apple", "plava" => "raspberry");
$dodatak = array("tamno-plava" => "sljiva", "tamno-zuta" => "dunja");
echo '<p>$stack = array("narandzasta"=>"orange", "zuta"=>"banana", "zelena"=>"apple", "plava"=>"raspberry");</p>';
echo '<p>$dodatak = array("tamno-plava" => "sljiva", "tamno-zuta" => "dunja");</p>';

echo "<p style='background:lightblue; padding:10px;'>Posle izvrsenja: <strong>array_unshift(\$stack, \$dodatak);</strong> funkcije</p>";
array_unshift($stack, $dodatak);

echo "\$stack = ";
print_r($stack);
echo "<br>";

echo "<br><hr><br>";
echo "<p $style>array_push(\$originalniniz, \$dodatiniz) - dodaje niz na <strong>pocetak</strong> originalnog niza</p>";

$vocni_niz = array("narandzasta" => "orange", "zuta" => "banana", "zelena" => "apple", "plava" => "raspberry");
echo '<p>$vocni_niz = array("narandzasta" => "orange", "zuta" => "banana", "zelena" => "apple", "plava" => "raspberry");</p>';
echo '<p>$dodatak = array("tamno-plava" => "sljiva", "tamno-zuta" => "dunja");</p>';

array_push($vocni_niz, $dodatak);
echo "<p style='background:orange; padding:10px;'>Posle izvrsenja: <strong>array_push(\$vocni_niz, \$dodatak);</strong> funkcije</p>";
echo "\$vocni_niz = ";
print_r($vocni_niz);
echo "<hr>";

echo "<a href=\"array_shift_&_pop.php\" target=\"_blank\">array_shift() & array_pop()</a><br>";
