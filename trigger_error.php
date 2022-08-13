<?php

echo "<h1>trigger_error()</h1>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
 . "\$usernum = 12;
if (\$usernum>10) {
  trigger_error(\"Number cannot be larger than 10\");
}"
 . "</pre>";

$usernum = 12;
if ($usernum > 10) {
    trigger_error("Number cannot be larger than 10");
}

echo "<hr>";
echo "<p>The trigger_error() function creates a user-level error message.</br>

<small>The trigger_error() function can be used with the built-in error handler, or with a user-defined function set by the set_error_handler() function.</small></p>";
echo "<hr>";

echo "<a href=\"error_log.php\" target=\"_blank\">error_log()</a> <br>";
echo "<a href=\"restore_error_handler.php\" target=\"_blank\">restore_error_handler()</a><br>";
echo "<a href=\"set_error_handler.php\" target=\"_blank\">set_error_handler()</a><br>";
