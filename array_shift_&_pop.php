<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php

echo "<i><strong>array_pop</strong></i> - Odseca poslednji element niza i njegovu vrednost daje promenljivoj";
echo '<p>$stack = ["narandzasta"=>"orange", "zuta"=>"banana", "zelena"=>"apple", "plava"=>"raspberry"];</p>';

$stack = ["narandzasta" => "orange", "zuta" => "banana", "zelena" => "apple", "plava" => "raspberry"];

echo "<p style='background:lightblue; padding:10px;'> posle: \$fruit = array_pop(\$stack); funkcije</p>";
$fruit = array_pop($stack);

echo "\$stack = ";
print_r($stack);
echo "<br>";
echo "\$fruit = $fruit <br>";

echo "<br><hr><br>";

echo "<i><strong>array_shift</strong></i> - Odseca prvi element niza i njegovu vrednost daje promenljivoj";
echo '<p>$vocni_niz = ["narandzasta" => "orange", "zuta" => "banana", "zelena" => "apple", "plava" => "raspberry"];</p>';

$vocni_niz = ["narandzasta" => "orange", "zuta" => "banana", "zelena" => "apple", "plava" => "raspberry"];
$voce = array_shift($vocni_niz);
echo "<p style='background:orange; padding:10px;'> posle: \$voce = array_shift(\$vocni_niz); funkcije</p>";

echo "\$vocni_niz = ";
print_r($vocni_niz);
echo "<br>";
echo "\$voce = $voce";

echo "<hr>";
echo "<a href=\"array_unshift_&_push.php\" target=\"_blank\">array_unshift() & array_push()</a><br>";
?>
