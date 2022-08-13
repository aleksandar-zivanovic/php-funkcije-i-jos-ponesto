<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>random_bytes()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Generates cryptographically secure pseudo-random bytes</p>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$string1 = random_bytes(50);
echo \$string1;"
     . "</pre>";
$string1 = random_bytes(50);
echo $string1 . "<br>";

echo "<br>Gornji tekst ima " . strlen($string1) . " karaktera!<hr>";

echo "<h2>bin2hex()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Convert binary data into hexadecimal representation</p>";
echo "Funkcija bin2hex() za gornji tekst izgleda ovako: <br>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "echo \$bin2hex = bin2hex(\$string1);"
     . "</pre>";
echo $bin2hex = bin2hex($string1);
echo "<br><br> i ima <strong>" . strlen($bin2hex) . "</strong> karaktera.";
echo "<hr>";

// /* JS skripta reloaduje stranu dok god se ispunjava uslov
//
//if (strlen($bin2hex) < 101) {
//    ?>
    <!--<script> location.reload();</script>-->
<?php // } else {
//    echo strlen($bin2hex);
//}
?>
