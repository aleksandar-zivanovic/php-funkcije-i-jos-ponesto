<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>eval()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Tretira string kako validan PHP kod i izvršava ga. String mora da bude validan PHP kod i da se završava tačkom i zarezom.<br>
Nije funkcija, već jezička konstrukcija. Može da bude korisna za čuvanje PHP koda u bazi.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$gold = \"zlato\";
\$silver = \"srebro\";
\$string = '\$gold i \$silver su plmeniti metali';

echo \$string . \"<\br>\";
eval(\"\\\$string = \\\"\$string\\\";\");
echo \$string;
</pre>";

$gold = "zlato";
$silver = "srebro";
$string = '$gold i $silver su plmeniti metali';
echo $string . "<br>";
eval("\$string = \"$string\";");
echo $string;

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$var = 5;
echo \$var . '<\br>';
echo ' someString ' . eval( 'echo \$var = 15;' ) . ' otherString ' . \$var * 3 . ' je rezultat mnozenja<\br>';
echo \$var;
</pre>";

$var = 5;
echo $var . '<br>';
echo ' someString ' . eval( 'echo $var = 15;' ) . ' otherString ' . $var * 3 . ' je rezultat mnozenja<br>';
echo $var;
