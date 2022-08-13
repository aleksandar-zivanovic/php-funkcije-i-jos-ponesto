<html>
    <div>
        <a href="https://wiki.php.net/rfc/named_params" target="_blank"><h3 style="background-color: lightgoldenrodyellow;">PHP RFC: Named Arguments</h3></a>
    </div>

<?php



$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = ["fruits", "vegetables", "fiber"];
$yummy   = ["pizza", "beer", "ice cream"];
echo $newphrase = str_replace(replace: $yummy, search: $healthy, subject:$phrase);
echo "<hr>";


$tekst = "Ovo je neki tekst, koji se deli na svakih 5 karaktera!";
$duzina = 5;
echo "<pre>";
var_dump(str_split(length: $duzina, string:$tekst));
echo "</pre>";
echo "<hr>";



if(str_contains(needle:"fruits", haystack: $phrase)){
    echo "String SADRZI rec \"fruits\"!";
} else {
    echo "String NE sadrzi rec \"fruits\"!";
}
?>
</html>
