<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php

$a; echo "\$a;<br>";
if(isset($a)){
    echo "\$a postoji<br><br>";
} else {
     echo "\$a NE postoji<br><br>";
}

$b = NULL; echo "\$b = NULL;<br>";
if(isset($b)){
    echo "\$b postoji<br><br>";
} else {
     echo "\$b NE postoji<br><br>";
}
echo "<hr>";

$c = FALSE; echo "\$c = FALSE;<br>";
if(isset($c)){
    echo "\$c postoji<br><br>";
} else {
     echo "\$c NE postoji<br><br>";
}

$d = ""; echo '$d = "";<br>';
if(isset($d)){
    echo "\$d postoji<br><br>";
} else {
     echo "\$d NE postoji<br><br>";
}

$e = 0; echo "\$e = 0;<br>";
if(isset($e)){
    echo "\$e postoji<br><br>";
} else {
     echo "\$e NE postoji<br><br>";
}

$f = array(); echo "\$f = array();<br>";
if(isset($f)){
    echo "\$f postoji<br><br>";
} else {
     echo "\$f NE postoji<br><br>";
}
echo "<hr>";

$g; echo "\$g; echo gettype(\$g);";
echo gettype($g);
echo "<hr>";

echo "<a href=\"empty.php\" target=\"_blank\">empty()</a><br>";
