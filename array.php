<?php

function getArray() {
    return array(1, 2, 3);
}

echo getArray()[0] . "<br>";

$secondElement = getArray()[1];
echo $secondElement . "<br>";
echo "<hr>";


$round = round(3.3);

$niz = [ceil(2.7) => "2.7", "pera", 5 => "broj pet", null, true, "ime" => "prezime", $round = "round(3.3)"];
echo "<pre>";
var_export($niz);
echo "</pre><hr>";

$juices["apple"]["green"] = "good";
echo "<pre>";
print_r($juices);
echo "</pre><hr>";