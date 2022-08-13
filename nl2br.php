<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>nl2br()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Zamenjuje <strong>\\n</strong> znak za novi red html tagom <strong><span><</span><span>br</span><span>></span></strong> za novi red.</p>";

$string = "Inserts HTML\n  line breaks before\n  all newlines in\n  a string";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$string = \"Inserts HTML\\n line breaks before\\n  all newlines in\\n  a string\";
echo nl2br(\$string); </pre>";

echo nl2br($string);
echo "<hr>";
