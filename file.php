<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>file()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Čita tekst upisan u fajlu. Ista je kao funkcija file_get_contents(), uz razliku da vraća fajl kao niz, dok file_get_contents() vraća tekst kao string. Svaka nova linija u tekstu fajla je novi element niza.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
print_r(file(\"my-errors.log\"));;
</pre>";

echo "<pre>";
print_r(file("my-errors.log"));
echo "</pre>";
echo "<hr>";

echo "<a href=\"file_put_contents_&_file_get_contents.php\" target=\"_blank\">file_put_contents() & file_get_contents()</a><br>";
