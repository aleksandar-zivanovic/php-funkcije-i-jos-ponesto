<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
$string = "OVO je StRing koji CEMO konverotvati FunKCIJAma STRtoLOWER i strTOUPPER šČćŽĐ";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$string = \"OVO je StRing koji CEMO konverotvati FunKCIJAma STRtoLOWER i strTOUPPER šČćŽĐ\";
</pre>";
echo "<hr>";

echo "<h1>strtolower()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Konvertuje sva slova u stringu u mala slova.<br></p>";

echo "<p style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'\">strtolower(\$string) => " . strtolower($string) . " <br></p>";
echo "<hr>";


echo "<h1>strtoupper()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Konvertuje sva slova u stringu u velika slova.<br></p>";

echo "<p style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'\">strtoupper(\$string) => " . strtoupper($string) . " <br></p>";
echo "<hr>";

echo "<h1>ucfirst()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Konvertuje prvo slovo stringa u veliko slovo.<br></p>";
echo "<p style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'\">ucfirst(strtolower(\$string)) => " . ucfirst(strtolower($string)) . " <br></p>";
echo "<hr>";

echo "<h1>lcfirst()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Konvertuje prvo slovo stringa u malo slovo<br></p>";
echo "<p style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'\">lcfirst(\$string) => " . lcfirst($string) . " <br></p>";
echo "<hr>";

echo "<h1>ucwords()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Konvertuje prvo slovo svake reči u stringu u veliko solovo<br></p>";
echo "<p style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'\">ucwords(strtolower(\$string)) => " . ucwords(strtolower($string)) . " <br></p>";
echo "<hr>";
