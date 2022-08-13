<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php

echo "<h2>array_values()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Vraća novi niz sa vrednostima iz odabranog niza, pri čemu vrednosti indeksira numerički</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$array = ['brasno' => 
                        ['psenicno' => ['tip-400', 'tip-500']],
                        ['kukuruzno' => ['sitno', 'krupno0]],
           'so' => ['natrijumova' => 
                        ['morska', 'jodirana'], 'himalajska', 'kalijumova'
                    ],
           'ulje',
           'mleko', 
           2 => 'meso', 
           'secer' => ['beli', 'braon', 'kocka'],
           'med'
           ];

    print_r(array_values(\$array));"
     . "</pre>";

$array = ['brasno' => ['psenicno' => ['tip-400', 'tip-500']], ['kukuruzno' => ['sitno', 'krupno']],
    'so' => ['natrijumova' => ['morska', 'jodirana'], 'himalajska', 'kalijumova'],
    'ulje',
    'mleko',
    'meso',
    'secer' => ['beli', 'braon', 'kocka'],
    'med',];

echo "<pre>";
print_r(array_values($array));
echo "</pre>";
echo "<hr>";

function loopValues($someArray) {
    foreach (array_values($someArray) as $key => $value) {
        if (is_array($value)) {
            echo " * - arr -  >>> " . loopValues($value) ;
        } else {
            if ($value === 'beli') {
                $value .= " <strong>Ovaj secer nije zdrav!</strong>";
            }
            echo "* {$key} => {$value} <br>";
        }
    }
}

loopValues($array);
echo "<hr>";

echo "<a href=\"array_keys.php\" target=\"_blank\">array_keys</a>";
