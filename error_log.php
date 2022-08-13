<title><?= basename($_SERVER['PHP_SELF'], '.php'); ?></title>
<?php
echo "<h2>error_log()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Salje proizvoljnu poruku o gresci: 0 sistemskom logu u skladu sa podesavanjima servera, 1 emailom, 2 ne salje, 3 salje u fajl naznacen u putanji, 4 salje SAPI logging handler-u</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "<h3>Primer ispisivanja greske u fajl naveden u putuanji</h3>"
     . "\$a = 1;
if(\$a == 1) {
    error_log(date('m/d/Y h:i:s a\", time()) . \": You messed up agan!\" . PHP_EOL, 3, \"my-errors.log\");
}"
     . "</pre>";

$a = 1;
if ($a == 1) {
    error_log(date('m/d/Y h:i:s a', time()) . ": You messed up agan!" . PHP_EOL, 3, "my-errors.log");
}
?>

<a href="error_log.php" style="background-color: lightcyan; padding: 5px; borider: 1px solid black;">Page refresh</a><br><br>
<form method="POST" action="error_log.php">
  <input type="submit" name="delete_text" value="Obrisi log">
</form>

<?php
// brisanje sadrzaja fajla
if (isset($_POST['delete_text'])) {
    file_put_contents("my-errors.log", "");
}

// postojanje fajla
if (file_exists("my-errors.log")) {
    echo "<a href=\"my-errors.log\" target=\"_blank\">Log faj: my-errors.log postoji</a><br>";
} else {
    echo "<h3>Error log fajl ne postoji";
}

// velicina fajla
echo "Velicna fajla je " . round(filesize("my-errors.log") / (8 * 1024), 3) . " kilobajta.<br>";

// citanje sadrzaja fajla
echo "<pre>"
     . "<p><h3>Ispis fajla my-errors.log</h3></p></br>"
     . file_get_contents("my-errors.log")
     . "</pre>";
echo "<hr>";

echo "<a href=\"trigger_error.php\" target=\"_blank\">trigger_error()</a><br>";
echo "<a href=\"restore_error_handler.php\" target=\"_blank\">restore_error_handler()</a><br>";
echo "<a href=\"set_error_handler.php\" target=\"_blank\">set_error_handler()</a><br>";
