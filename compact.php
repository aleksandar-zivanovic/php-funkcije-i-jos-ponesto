<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php
echo "<h2>Compact</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Od varijabli i njihovih vrednosti pravi niz, pri čemu naziv varijable postaje key, a njena vrednost value elementa niza.</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
. "\$ime = \"Marko\";
\$prezime = \"Markovic\";
\$godine = 24;
\$prebivaliste = \"BG\";
\$osoba1 = compact(\"ime\", \"godine\", \"prebivaliste\", \"prezime\");
print_r(\$osoba1);"
     . "</pre>";

$ime = "Marko";
$prezime = "Markovic";
$godine = 24;
$prebivaliste = "BG";

$osoba1 = compact("ime", "godine", "prebivaliste", "prezime");
echo "<pre>";
print_r($osoba1);
echo "</pre>";

echo "<hr>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
. "\$tip = \"PC\";
\$os = \"Win10\";
\$ram = \"8gb\";
\$hdd = \"1tb\";
\$cpu = \"i7\";

\$sistem = ['tip', 'os'];
\$konfiguracija = compact(\$sistem, 'ram', 'hdd', 'cpu');
print_r(\$konfiguracija);"
     . "</pre>";


$tip = "PC";
$os = "Win10";
$ram = "8gb";
$hdd = "1tb";
$cpu = "i7";

$sistem = ['tip', 'os'];
$konfiguracija = compact($sistem, 'ram', 'hdd', 'cpu');
echo "<pre>";
print_r($konfiguracija);
echo "</pre>";
echo "<hr>";

echo "<a href=\"extract.php\" target=\"_blank\">extract</a><br>";
echo "<a href=\"list.php\" target=\"_blank\">list</a><br>";
