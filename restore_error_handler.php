<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>restore_error_handler()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Resetuje na prethodnu error handler funkciju. Koristi se za poništenje funkcije setovane set_error_handler() funkcijom, čime se handlovanje greškama vraća na stanje pre njenog setovanja (bez obzira da li je to stanje bilo odredjeno ugradjenom ili korisnički kreiranom funkcijom).</p>";

function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Error [$errno] $errstr <br> occured in line $errline in file $errfile ";
}
set_error_handler('myErrorHandler');

$number = 3;
if ($number < 6) {
    trigger_error("Custom error: number is less than 6");
}
echo "<br><br>";

restore_error_handler();
if ($number < 6) {
    trigger_error("Custom error: number is less than 6");
}
echo "<hr>";

echo "<a href=\"set_error_handler.php\" target=\"_blank\">set_error_handler()</a><br>";
echo "<a href=\"error_log.php\" target=\"_blank\">error_log()</a> <br>";
echo "<a href=\"trigger_error.php\" target=\"_blank\">trigger_error()</a><br>";
