<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<style>
    p {
        padding: 5px;
        margin: 0;
        background-color: lightgoldenrodyellow;
    }

    h4 {
        padding: 5px;
        margin: 0;
    }

</style>

<?php
echo "<h2>substr()</h2>";
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Odseca deo stringa u odnosu na zadate parametre</p>";

echo "<h4>pozitivni offset</h4>";
echo "<p>substr(\"abcdef\", NULL) => " . substr("abcdef", NULL) . "</p>";
echo "<p>substr(\"abcdef\", 3) => " . substr("abcdef", 3) . "</p>";
echo "<p>substr(\"abcdef\", 15) => " . substr("abcdef", 15) . "</p>";
echo "<p>substr(\"abcdef\", TRUE) => " . substr("abcdef", TRUE) . "</p>";
echo "<p>substr(\"abcdef\", 0) => " . substr("abcdef", 0)  . "</p>";
echo "<p>substr(\"abcdef\", 15) => " . substr("abcdef", 1)  . "</p>";
echo "<p>substr(\"abcdef\", 0, 15) => " . substr("abcdef", 0, 15)  . "</p>";
echo "<p>substr(\"abcdef\", 0, 3) => " . substr("abcdef", 0, 3)  . "</p>";
echo "<p>substr(\"abcdef\", 0, 5) => " . substr("abcdef", 0, 5)  . "</p>";
echo "<p>substr(\"abcdef\", 0, 6) => " . substr("abcdef", 0, 6)  . "</p>";
echo "<p>substr(\"abcdef\", 1, 3) => " . substr("abcdef", 1, 3)  . "</p>";
echo "<p>substr(\"abcdef\", 1, 15) => " . substr("abcdef", 1, 15)  . "</p>";
echo "<p>substr(\"abcdef\", 3, 3) => " . substr("abcdef", 3, 3)  . "</p>";

echo "<hr>";
echo "<h4>negativni offset</h4>";
echo "<p>substr(\"abcdef\", -1) => " . substr("abcdef", -1) . "</p>";
echo "<p>substr(\"abcdef\", -1, 0) => " . substr("abcdef", -1, 0) . "</p>";
echo "<p>substr(\"abcdef\", -1, -1) => " . substr("abcdef", -1, -1) . "</p>";
echo "<p>substr(\"abcdef\", -1, 1) => " . substr("abcdef", -1, 1) . "</p>";
echo "<p>substr(\"abcdef\", -6, -2) => " . substr("abcdef", -6, -2) . "</p>";
echo "<p>substr(\"abcdef\", -5, -1) => " . substr("abcdef", -5, -1) . "</p>";
echo "<p>substr(\"abcdef\", -5, 1) => " . substr("abcdef", -5, 1) . "</p>";
echo "<p>substr(\"abcdef\", -5, 3) => " . substr("abcdef", -5, 3) . "</p>";
?>
