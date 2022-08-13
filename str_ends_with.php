<style>
  .container {
    display: flex;
    justify-content: stretch;
    align-items: center;
  }

  .container > .log {
    margin-right: 5rem;
  }

  .container > h2 {
    text-shadow: 1px 2px 2px lightgray;
  }
</style>

<div class="container">
    <div class="log">
        <img src="https://styde.net/wp-content/uploads/2021/02/php8-ico.png" width="60px">
    </div>
    <h2>str_ends_with()</h2>
</div>

<?php
echo "<p style=\"font-size:1.2rem; padding: 1rem; background-color: #ffcccb;\">Proverava da li se string završava zadatim substringom. Pretraga je <strong>case-sensitive</strong>. Vraća TRUE ili FALSE.</p><hr>";

$haystack = "Na vr' brda vrba mrda";
$needle1 = "mrda";
$needle2 = "a";
$needle3 = "MRDA";
$needle4 = "a";

$rez1 = str_contains(haystack: $haystack, needle: $needle1);
$rez2 = str_contains(haystack: $haystack, needle: $needle2);
$rez3 = str_contains(haystack: $haystack, needle: $needle3);
$rez4 = str_contains(haystack: $haystack, needle: $needle4);

echo "<pre style='background-color:lightyellow; padding:10px; line-height: 1.1rem;'>"
     . "\$haystack = \"Na vr' brda vrba mrda\";
\$needle1 = \"mrda\";
\$needle2 = \"a\";
\$needle3 = \"MRDA\";
\$needle4 = \"A\";

\$rez1 = str_contains(haystack: \$haystack, needle: \$needle1);
\$rez2 = str_contains(haystack: \$haystack, needle: \$needle2);
\$rez3 = str_contains(haystack: \$haystack, needle: \$needle3);
\$rez4 = str_contains(haystack: \$haystack, needle: \$needle4);"
     . "</pre>";

echo "\$rez1 = "; var_dump($rez1);
echo "<br> \$rez2 = "; var_dump($rez2);
echo "<br> \$rez3 = "; var_dump($rez3);
echo "<br> \$rez4 = "; var_dump($rez4);

echo "<hr>";

echo "<a href=\"str_starts_with.php\" target=\"_blank\">str_starts_with</a> <br>";
echo "<a href=\"str_contains.php\" target=\"_blank\">str_contains</a>";
