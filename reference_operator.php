<?php

$var = "foo";
$ref1 = &$var; // new object that references $var
$ref2 = &$ref1; // references $var directly, not $ref1!!!!!
//$ref2 = "promenjena vrednost"; // menja vrednost svih aliasa i $var promenljive

echo $ref1 . " - \$ref1 <br>"; // >foo

unset($ref1); // unsetuje samo $ref1 promenljivu ($ref1 je alias promenljive $var)

echo $ref1 . " - \$ref1 <br>"; // >Warning:  Undefined variable: ref1
echo $ref2 . " - \$ref2 <br>"; // >foo
echo $var . " - \$var <br>"; // >foo

echo "<hr>";


/* Assignment of scalar variables */
$a = 1;
$b = &$a;
$c = $b;
$c = 7; //$c is not a reference; no change to $a or $b

echo "\$a = " . $a . "<br>";
echo "\$b = " . $b . "<br>";
echo "\$c = " . $c . "<br>";

echo "<hr>";


/* Assignment of array variables */
$arr = [1, 10, "neki string"];
$d = &$arr[0]; //$d and $arr[0] are in the same reference set
$arr2 = $arr; //not an assignment-by-reference!

echo "\$d = " . $d . " - pre deklarisanja: <code>\$arr2[0]++</code><br>";

$arr2[0]++;

$value = [];
foreach ($arr as $value) {
    echo "\$arr['\$value'] = " . $value . "<br>";
}

echo "\$d = " . $d . "<br>";

foreach ($arr2 as $value2) {
    echo "\$arr2['\$value'] = " . $value2 . "<br>";
}

/* $d == 2, $arr == array(2) */
/* The contents of $arr are changed even though it's not a reference! */

echo "<hr>";

echo "<pre>";
print_r(get_defined_vars());
echo "</pre>";
?>
