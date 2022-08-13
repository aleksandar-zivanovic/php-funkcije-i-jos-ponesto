<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>wordwrap()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Formatira tekst kao wordwrap u editoru na maksimalan broj karaktera u liniji teksta, čija se vrednost zadaje kao intiger u drugom parametru funkcije. Treći parametar odredjuje pravilo za posanje novog reda i po defauktu ima vrednost \"\\n\", zato ga treba zameniti u HTML " . htmlspecialchars("<br>") ." tag na windows-u. Četvrti parametar, ako mu se da true vrednost deli dugačke reči (po default-u je false).</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$tekst1 = \"If the cut_long_words is set to true, the string is always wrapped at or before the specified width. So if you have a word that is larger than the given width, it is broken apart. (See_second_example). When false the function does not split the word even if the width is smaller than the word width.\";

echo wordwrap(\$tekst1, 40, \"". htmlspecialchars("<br>") . "\");
</pre>";

$tekst1 = "If the cut_long_words is set to true, the string is always wrapped at or before the specified width. So if you have a word that is larger than the given width, it is broken apart. When false the function does not split the word even if the width is smaller than the word width.";

echo wordwrap($tekst1, 40, "<br>");
echo "<hr>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$tekst2 = \"loooooooooooooooooooooooooong wooooooooorrrrrrrrddddddddddsssss separatiooooooon example\";

echo wordwrap(\$tekst2, 40, \"". htmlspecialchars("<br>") . "\");

echo wordwrap(\$tekst2, 40, \"". htmlspecialchars("<br>") . "\", true);
</pre>";
$tekst2 = "loooooooooooooooooooooooooong wooooooooorrrrrrrrddddddddddsssss separatiooooooon example";

echo wordwrap($tekst2, 10, "<br>");
echo "<br><br>";

echo wordwrap($tekst2, 10, "<br>", true);
echo "<hr>";

echo "<p style=\"padding: 1rem; background-color: lightcyan;\"><strong>Zaključak</strong>: ako se kao treći parametar upiše bilo šta, onda će upisivati to u tekst umesto da pravi novu liniju.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
echo wordwrap(\$tekst2, 40, \"***\", true);
</pre>";
echo wordwrap($tekst2, 10, "***", true);
