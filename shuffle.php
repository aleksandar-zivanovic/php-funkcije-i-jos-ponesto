<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array = ['prvi', 'drugi', 'treci', 'cetvrti', 'peti'];
shuffle(\$array);
print_r(\$array);"
     . "</pre>";

$array = ['prvi', 'drugi', 'treci', 'cetvrti', 'peti'];
shuffle($array);

echo "<pre>";
print_r($array);
echo "</pre>";
