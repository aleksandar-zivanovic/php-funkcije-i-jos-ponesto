<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h1>microtime()</h1>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća trenutno vreme u sekundama i mikrosekundama u Unix formatu.<br>
Funkcija time() vraća vreme u sekundama kao intiger, dok microtime() vraća string sa mikrosekundama i sekundama.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
echo \$microTime = microtime();
list(\$mSec, \$sec) = (explode(\" \", \$microTime));
\$mSec = (float)\$mSec;
\$sec = (int)\$sec;
\$currentTime = \$sec + \$mSec;
</pre>";
echo $microTime = microtime() . "<br>";
[$mSec, $sec] = (explode(" ", $microTime));
$mSec = (float)$mSec;
$sec = (int)$sec;
$currentTime = $sec + $mSec;

echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vreme sa tačnim mikrosekundama, dobijeno microtime() funkcijom ne može da bude konvertovano u ljudski čitljivo vreme funkcijom date(), jer date() vraća intiger, tako da se za mikrosekunde dobija vrednost 000000</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
date('m-d-Y H:i:s.u', \$currentTime)
</pre>";
echo date('m-d-Y H:i:s.u', $currentTime);

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>
\$now = DateTime::createFromFormat('U.u', number_format(microtime(true), 6, '.', ''));
echo \$now->format(\"m-d-Y H:i:s.u\");
</pre>";
$now = DateTime::createFromFormat('U.u', number_format(microtime(true), 6, '.', ''));
echo $now->format("m-d-Y H:i:s.u");
