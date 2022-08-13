<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<a href='https://www.php.net/manual/en/function.http-build-query.php' target='_blank'>"
. "<h2>http_build_query()</h2>"
        . "</a>";
echo "Pretvara niz u string u obliku URL-a sa GET parametrima";
echo "<hr>";


/* Niz sa indexima */
$imena = ['Mika', 'Zika', 'Pera', 'Djoka', 'Sima',];

echo "<div style='background-color:lightyellow;'><pre>";
echo "<h3 style='color:red;'>Niz sa indexima</h3>";
echo "\$imena = ['Mika', 'Zika', 'Pera', 'Djoka', 'Sima',];" . "<br>";
echo "<i>echo http_build_query(\$data);</i>";
echo "</pre></div>";

echo http_build_query($imena);

echo "<hr>";


/* Asocijativni niz */
$data = array(
    'foo' => 'bar',
    'baz' => 'boom',
    'cow' => 'milk',
    'null' => null,
    'php' => 'hypertext processor'
);

echo "<div style='background-color:lightyellow;'><pre>";
echo "<h3 style='color:red;'>Asicijativni niz</h3>";
echo "\$data = array(
    'foo' => 'bar',
    'baz' => 'boom',
    'cow' => 'milk',
    'null' => null,
    'php' => 'hypertext processor'
)" . "<br>";
echo "<i>echo http_build_query(\$data);</i>";
echo "</pre></div>";

echo http_build_query($data);

echo "<hr>";


/* Multimidmenzionalni niz */

$data2 = array(
    'user' => array(
        'name' => 'Bob Smith',
        'age'  => 47,
        'sex'  => 'M',
        'dob'  => '5/12/1956'
    ),
    'pastimes' => array('golf', 'opera', 'poker', 'rap'),
    'children' => array(
        'bobby' => array('age'=>12, 'sex'=>'M'),
        'sally' => array('age'=>8, 'sex'=>'F')
    ),
    'CEO', 'vrednost1', 'vrednost2',
);

echo "<div style='background-color:lightyellow;'><pre>";
echo "<h3 style='color:red;'>Multidimenzionalni niz</h3>";
echo "\$data2 = array(
    'user' => array(
        'name' => 'Bob Smith',
        'age'  => 47,
        'sex'  => 'M',
        'dob'  => '5/12/1956'
    ),
    'pastimes' => array('golf', 'opera', 'poker', 'rap'),
    'children' => array(
        'bobby' => array('age'=>12, 'sex'=>'M'),
        'sally' => array('age'=>8, 'sex'=>'F')
    ),
    'CEO', 'vrednost1', 'vrednost2',
)" . "<br>";
echo "<i>echo http_build_query(\$data);</i>";
echo "</pre></div>";

echo "<p>" . http_build_query($data2) . "</p>";
echo "<hr>";


/* Objekti */


echo "<div style='background-color:lightyellow;'><pre>";
echo "<h3 style='color:red;'>Rad sa OBJEKTIMA</h3>";
echo "http_build_query radi i sa objektima, tako sto se kao parametar upisuje instanca objekta" . "<br>";
echo "</pre></div>";


