<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

<?php
echo "<h3>Funkcija empty()</h3>";
echo "<pre>";
echo "1. \"tekst\" - ";
var_dump(empty("tekst"));
echo "2. 7 - ";
var_dump(empty(7));
echo "3. \"7\" - ";
var_dump(empty("7"));
echo "4. \"\" - ";
var_dump(empty(""));
echo "5. \'\' - ";
var_dump(empty(''));
echo "6. \"0\" - ";
var_dump(empty("0"));
echo "7. 0 - ";
var_dump(empty(0));
echo "8. TRUE - ";
var_dump(empty(TRUE));
echo "9. FALSE - ";
var_dump(empty(FALSE));
echo "10. NULL - ";
var_dump(empty(NULL));
echo "10. \$var - ";
var_dump(empty($var));
echo "</pre>";
?>


<head>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
</head>

<hr>


<table>
    <tr>
        <td><?php echo "1. \"tekst\"" ?></td>
        <td style="background-color: lightyellow;"><?php var_dump(empty("tekst")); ?></td>
    </tr>
    <tr>
        <td><?php echo "2. 7"; ?></td>
        <td style="background-color: lightyellow;"><?php var_dump(empty(7)); ?></td>
    </tr>
    <tr>
        <td><?php echo "3. \"7\""; ?></td>
        <td style="background-color: lightyellow;"><?php var_dump(empty("7")); ?></td>
    </tr>
    <tr>
        <td><?php echo "4. \"\""; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty("")); ?></td>
    </tr>
    <tr>
        <td><?php echo "5. ''"; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty('')); ?></td>
    </tr>
    <tr>
        <td><?php echo "6. \"0\""; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty("0")); ?></td>
    </tr>
    <tr>
        <td><?php echo "7. 0 "; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty(0)); ?></td>
    </tr>
    <tr>
        <td><?php echo "8. TRUE"; ?></td>
        <td style="background-color: lightyellow;"><?php var_dump(empty(TRUE)); ?></td>
    </tr>
    <tr>
        <td><?php echo "9. FALSE"; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty(FALSE)); ?></td>
    </tr>
    <tr>
        <td><?php echo "10. NULL"; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty(NULL)); ?></td>
    </tr>
    <tr>
        <td><?php echo "11. \$var <br> (nedefinisana promenljiva)"; ?></td>
        <td style="background-color: lightcyan;"><?php var_dump(empty($var)); ?></td>
    </tr>
</table>

<?php
echo "<hr>";

echo "<a href=\"isset.php\" target=\"_blank\">isset()</a><br>";
