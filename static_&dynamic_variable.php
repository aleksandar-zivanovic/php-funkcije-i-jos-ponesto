<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php

function dodaj() {
    static $x = 3;
    return $x++;
}

function nijeStatic(){
    $broj = 3;
    return $broj++;
}

echo "<h3><b>STATIC</b> - pozivanje staticke promenljive:</h3>";
echo dodaj() . " - 1. <br>";
echo dodaj() . " - 2. <br>";
echo dodaj() . " - 3. <br>";
echo dodaj() . " - 4. <br>";
echo "<hr>";

echo "<h3><b>NIJE STATIC</b> - pozivanje dinamicke promenljive:</h3>";
echo nijeStatic() . " - 1. <br>";
echo nijeStatic() . " - 2. <br>";
echo nijeStatic() . " - 3. <br>";
echo nijeStatic() . " - 4. <br>";
echo "<hr>";
