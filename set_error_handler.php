<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>set_error_handler()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Ovom funkcijom definišemo našu funkciju za rad sa greškama (Sets a user-defined error handler function).</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
function myErrorHandler(\$errno, \$errstr, \$errfile, \$errline) {
  echo \"Error [\$errno] \$errstr <\br> occured in line \$errline in file \$errfile \";
}
set_error_handler('myErrorHandler');

\$number = rand(0, 10);
echo \$number . \"" . htmlspecialchars("<br>") . "\";
if (\$number < 6) {
  trigger_error(\"Custom error: number is less than 6\");
}
</pre>";

function myErrorHandler($errno, $errstr, $errfile, $errline) {
  echo "Error [$errno] $errstr <br> occured in line $errline in file $errfile ";
}
set_error_handler('myErrorHandler');

$number = rand(0, 10);
echo $number . "<br>";
if ($number < 6) {
  trigger_error("Custom error: number is less than 6");
} else {
  sleep(1);
  header('location: ' . $_SERVER["PHP_SELF"]);
}
echo "<hr>";

echo "<a href=\"restore_error_handler.php\" target=\"_blank\">restore_error_handler()</a><br>";
echo "<a href=\"error_log.php\" target=\"_blank\">error_log()</a> <br>";
echo "<a href=\"trigger_error.php\" target=\"_blank\">trigger_error()</a><br>";
