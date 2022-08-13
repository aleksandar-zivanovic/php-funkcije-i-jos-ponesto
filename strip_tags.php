<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>strip_tags()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Uklanja HTML i PHP tagove iz stringa. Ako želio da sačuvamo neke tagove, prosledjujemo ih kao drugi parametart.<br><br>
<code> strip_tags(string \$string, array|string|null \$allowed_tags = null): string</code></p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>";
echo htmlspecialchars("\$tekst = \"<?php echo 'Skroz drugi tekst'; ?><html> <p>Jedan sasvim obican paragaraf <br></p><br><?= 'Neki tekst'; ?><p>Test paragraph.</p>  <!-- Comment --> <a href=\"#fragment\">Other text</a></html>\"");
echo "<br>";
echo "echo strip_tags(\$tekst);";
echo "</pre>";

$tekst = "<?php echo 'Skroz drugi tekst'; ?><html> <p>Jedan sasvim obican paragaraf <br></p><br><?= 'Neki tekst'; ?><p>Test paragraph.</p>  <!-- Comment --> <a href=\"#fragment\">Other text</a></html>";

echo strip_tags($tekst);
