<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>file_put_contents()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Upisuje teks u fajl. Na ovaj način izbegavamo da zovemo fopen(), fwrite() i fclose() funkcije za upis teksta u fajl.<br>
Ako fajl ne postoji, kreira ga, a ako postoji prepisuje njegov sadržaj, osim ako je prosledjen FILE_APPEND parametar.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$file       = \"my-errors.log\";
\$addingText = date(\"m/d/Y h:i:s a\", time()) . \": Added from file_put_contents_&_file_get_contents.php!\" . PHP_EOL;
file_put_contents(\$file, \$addingText, FILE_APPEND);
</pre>";
?>

<a href="file_put_contents_&_file_get_contents.php" style="background-color: lightcyan; padding: 5px; borider: 1px solid black;">Page refresh</a><br><br>

<?php
// upisivanje teksta u fajl
$file       = "my-errors.log";
$addingText = date("m/d/Y h:i:s a", time()) . ": Added from file_put_contents_&_file_get_contents.php!" . PHP_EOL;
file_put_contents($file, $addingText, FILE_APPEND);
echo "<hr>";

// velicina fajla
echo "Velicna fajla je " . round(filesize("my-errors.log") / (8 * 1024), 3) . " kilobajta.<br>";
echo "<hr>";

// citanje sadrzaja fajla
echo "<h1>file_get_contents()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Čita tekst upisan u fajlu. Ista je kao funkcija file(), uz razliku da vraća tekst kao string, dok file() vraća tekst kao niz.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
file_get_contents(\"my-errors.log\");
</pre>";

echo "<pre><p><h3>Ispis fajla my-errors.log</h3></p></br>"
     . file_get_contents("my-errors.log")
     . "</pre>";
echo "<hr>";

echo "<a href=\"file.php\" target=\"_blank\">file()</a><br>";
