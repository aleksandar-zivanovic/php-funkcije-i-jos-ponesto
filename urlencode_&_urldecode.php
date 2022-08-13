<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h2>urlencode & urldecode</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">
<strong>urlencode</strong>: kodira url link (string), tako da specijalni karalteri dobijaju odredjeni kod. <br>
<strong>urldecode</strong>: dekodira string kodiran funkcijom urlencode(), tako da se dobija normalan zapis.
</p>";

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$query = \"my=apple<\script>alert('umetnuti pop-up kod u JavaScript-u')<\/script>&are=green&and&red\";
echo \"<\strong>urlencode<\/strong>: \" . \$queryEncoded = urlencode(\$query) . \" <\br>\";
echo \"<\strong>urldecode<\/strong>: \" . urldecode(\$queryEncoded) . \" <\br>\";"
     . "</pre>";

$query = "my=apple<script>alert('umetnuti pop-up kod u JavaScript-u')</script>&are=green&and&red";
echo "<strong>urlencode</strong>: " .$queryEncoded = urlencode($query) . " <br>";
echo "<strong>urldecode</strong>: " . urldecode($queryEncoded) . " <strong>NOTE:</strong> <small>S obzirom da \$query sadrzi JavaScript alert() funkiju, ovaj red aktivira pop-up</small>";
echo "<hr>";


echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "
\$url = \"example.com/?id=3&cat=monitori&dijagonala=24\";
\$urlEncoded = urlencode(\$url);
\$urlDecoded = urldecode(\$urlEncoded);
echo \"<\strong><\span style='background-color: lightgreen'>urlencode<\/span>:<\/strong>\" . \$url . \"<\br>\";
echo \"<\strong><\span style='background-color: lightgreen'>urlencode<\/span>:<\/strong>\" . \$urlEncoded . \"<\br>\";
echo \"<\strong><\span style='background-color: lightgreen'>urldecode<\/span>:<\/strong>\" . \$urlDecoded . \"<\br>\";"
     . "</pre>";

$url = "example.com/?id=3&cat=monitori&dijagonala=24";
$urlEncoded = urlencode($url);
$urlDecoded = urldecode($urlEncoded);
echo "<strong><span style='background-color: lightgreen'>url adresa:</span></strong> $url <br>";
echo "<strong><span style='background-color: lightgreen'>urlencode:</span></strong> {$urlEncoded} <br>";
echo "<strong><span style='background-color: lightgreen'>urldecode:</span></strong> {$urlDecoded} <br>";
echo "<hr>";

echo "<h3>htmlentities() VS htmlspecialchars() VS urlencode()</h3>";
echo "(uporediti kod u view sorce u browser-u) <br>";
$htmlWithPopUp = "<div><p>Ovde ide kod za pop-up iz JavaScript-a: <script>alert('urlencode')</script></p></div>";
echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$htmlWithPopUp = \"<\div><\p>Ovde ide kod za pop-up iz JavaScript-a: <\script>alert('urlencode')<\/script><\/p><\/div>\";"
     . "</pre>";

echo "<strong><span style='background-color: lightgreen'>htmlentities():</span></strong> " . htmlentities($htmlWithPopUp) . " <br>";
echo "<strong><span style='background-color: lightgreen'>htmlspecialchars():</span></strong> " . htmlspecialchars($htmlWithPopUp) . " <br>";
echo "<strong><span style='background-color: lightgreen'>urlencode():</span></strong> " . urlencode($htmlWithPopUp) . " <br>";
?>
