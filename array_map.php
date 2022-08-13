<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
$array1 = [1, 4, 67, 9, 2];
$array2 = ["prvi", "drugi", "treci", "cetvrti", "peti"];
$assocArray = [
    "opel" => [
        "boja" => "plava",
        "max.brzina" => "220 km/h",
        "karoserija" => "hecbek",
        "model" => "astra",
    ],
    "reno" => [
        "boja" => "bela",
        "max.brzina" => "180 km/h",
        "karoserija" => "limuzina",
        "marka" => "megan",
    ],
];

function sabiranje(int $broj): int {
    return $broj + 5;
}

// obavlja funkciju sabiranje()
// za sve element odabranog niza
$rez1 = array_map('sabiranje', $array1);
print_r($rez1);
echo "<hr>";


/* Obavlja operaciju [$n =>$m] za oba niza */
$rez2 = array_map(function(string $n, int $m): array {
    return [$n => $m];
}, $array2, $array1);
echo "<pre>";
print_r($rez2);
echo "</pre>";
echo "<hr>";




$var1 = "Ovo je broj: ";
$var2 = 5;
$var3 = 10;
$var4 = 100;

$fun1 = function($nesto) use ($var1, $var2) {
    $closure_var = $nesto . " - Ovo je closure vrednost - " . $var1 . $var2 + 10;
    echo $closure_var;
};

$fun1("nista");
echo "<hr>";

$fun2 = function($var3) {
    echo "Upisana varijabla je: $var3";
};

$fun2('VREDNOST');
echo "<hr>";



$fun3 = function($tekst) use ($var1, $var2) {
    $closure_var = "Ovo je tekst = $tekst " . $var1 . $var2 + 3;
    return $closure_var;
};

echo "<pre>";
print_r($fun3('neki tekst'));
$fun3('izuzetan tekst');
echo "</pre>";
echo "<hr>";

$fun4 = function() use ($var3, $var2, $var4) {
    $rez = $var2 + $var3 + $var4;
    return $rez;
};

print_r($fun4());
echo "<hr>";


$fun5 = function() {
    return "Ovo je tekst funkcije 5!";
};

echo $fun5();
echo "<hr>";

$afun1 = array_map(function($result) {
    return $result;
}, $assocArray);
print_r($afun1['reno']['boja']);
echo "<hr>";
?>
