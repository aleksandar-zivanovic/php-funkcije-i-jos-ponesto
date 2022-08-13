<?php

$message = "Zdravo";

$greeting = function() use ($message) {
    $pera = "Pero";
    echo $message . " " . $pera . "<br>";
};

$greeting();

/*
 * Prihvata vrednost varijable pre definisanja funkcije.
 * Kasnije promene vrednosti varijable ne prihvata
 */
$message = "Hello";
$greeting();

echo "<hr>";



$znak_plus = "+";
$sabiranje = function ($broj1, $broj2) use ($znak_plus) {
    echo "Kod sabiranja koristimo znak {$znak_plus} <br>";
    echo $broj1 + $broj2;
};

$sabiranje(2, 5);

echo "<hr>";



$niz_brojeva = [1, 2, 3,];

$resenje = function() use($niz_brojeva) {

    function mojaFunkcija($value, $key) {
        echo "Na poziciji $key je broj $value <br>";
    }

    return array_walk($niz_brojeva, 'mojaFunkcija');
};
$resenje();
echo "<hr>";


/* arrow function - shortcut anonimne funkcije u upotrebi od PHP 7.4 */
$anonimna = fn()=> "Ovo arrow function u upotrebi od PHP 7.4";
echo $anonimna();
//iznad je skraceni oblik funkcije ispod:
//$anonimna = function(){
//    echo "Ovo arrow function u upotrebi od PHP 7.4";
//};
//$anonimna();

echo "<hr>";


$version = 7.4;
$anonimna = fn($jezik)=> "Ovo arrow function u upotrebi od " . $jezik . " " . $version;
echo $anonimna("PHP");
echo "<hr>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$anFn = fn()=> $message . " bre!";
// ovo je skraceni oblik funkcije ispod:
// $anFn = function() use ($message) {
// echo $message . " bre!";
// }
// $anFn();

echo $anFn();
echo "<hr>";
