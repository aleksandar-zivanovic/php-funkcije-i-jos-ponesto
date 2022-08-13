<html>
<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>

    <?php

    function printPre($value) {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }

    echo '<div id="ovde"></div>';


// rand()
    echo "<h1 id=\"rand\">rand()</h1>";
    echo "<p>Vraca random kljuceve iz odredjenog niza</p>";
    $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    $rand_keys = array_rand($input, 3);

    $af = function() use($rand_keys, $input) {
        $rezultat =[];
        for ($i = 0; $i < count($rand_keys); $i++) {
            $rezultat[] = $input[$rand_keys[$i]] . "<br>";
        }
        return $rezultat;
    };


    printPre($af());


    $playlist = [
        ["song" => "01.mp3", "min" => "91"],
        ["song" => "02.mp3", "min" => "101"],
        ["song" => "03.mp3", "min" => "143"],
        ["song" => "04.mp3", "min" => "143"],
        ["song" => "05.mp3", "min" => "151"],
    ];
    $randPlaylistKeys = array_rand($playlist);
    printPre(
            "\$playlist = [
        [\"song\" => \"01.mp3\", \"min\" => \"91\"],
        [\"song\" => \"02.mp3\", \"min\" => \"101\"],
        [\"song\" => \"03.mp3\", \"min\" => \"143\"],
        [\"song\" => \"04.mp3\", \"min\" => \"143\"],
        [\"song\" => \"05.mp3\", \"min\" => \"151\"],
    ];" . "<br>"
            . "\$randPlaylistKeys = array_rand(\$playlist);" . "<br>"
            . "print_r(\"Rezultat: \" . \$playlist[\$randPlaylistKeys][\"song\"] . \" - \" . \$playlist[\$randPlaylistKeys][\"min\"])" . "<br>". "<br>"
            . "Rezultat: " . $playlist[$randPlaylistKeys]["song"] . " - " . $playlist[$randPlaylistKeys]["min"]
    );



// array_merge()
    echo "<h1 id=\"array_merge\">array_merge()</h1>";
    echo "<p>Spaja dva ili vise nizova u jedan niz, tako sto na kraj prvog niza dodaje drugi itd.. Ako nizovi koji se spajaju imaju imaju isti key, onda se zadrzava vrednost key-a iz prvog niza. Kod nizova sa numerickim key-em, vrednosti iz prvog niza ne prepisuju vrednosti iz drugih nizova za isti key, vec se samo vrednosti koje se razlikuju nalepe na kraj prvog niza.</p>";

    $array_merge11 = array("color" => "red", 2, 4, "trapezoid", "red" => "trapezoid");
    $array_merge12 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4, "red", "trapezoid" => "red");
    $result_merge1 = array_merge($array_merge11, $array_merge12);
    /* output:
      [color] => green
      [0] => 2
      [1] => 4
      [2] => trapezoid
      [red] => trapezoid
      [3] => a
      [4] => b
      [shape] => trapezoid
      [5] => 4
      [6] => red
      [trapezoid] => red
     */

    printPre($result_merge1);

    echo "<p><strong>array union operator</strong></p>";
    $array_union11 = [0 => 'zero_a', 2 => 'two_a', 3 => 'three_a', 81, "hero" => "Hi-Man"];
    $array_union12 = [1 => 'one_b', 3 => 'three_b', 4 => 'four_b', 5 => 'two_a', "hero" => "Superman"];
    $result_union1 = $array_union11 + $array_union12;
    /* output:
      [0] => zero_a
      [2] => two_a
      [3] => three_a
      [4] => 81
      [hero] => Hi-Man
      [1] => one_b
      [5] => two_a
     */

    printPre($result_union1);
    echo "<hr>";



// array_diff()
    echo "<h1 id=\"array_diff\">array_diff()</h1>";
    echo "<p>Uporedjuje prvi niz sa nizom ili vise nizova i <strong>vraca</strong> novi niz koji sadrzi sve elemente prvog niza, koji se po vrednosti (value) ne nalaze u nizu/nizovima sa kojim se uporedjuje.</p>";
    $array_diff11 = ["a" => "green", "red", "blue", "red", "green", "c" => "orange"];
    $array_diff12 = ["b" => "green", "yellow", "red", "c" => "brown"];
    $result_diff1 = array_diff($array_diff11, $array_diff12);
    /* output:
      [1] => blue
      [c] => orange
     */

    printPre($result_diff1);

    $source = [1, 2, 3, 4, 8, 21, 103];
    $filter = [3, 4, "b" => 21, 6];
    $result_diff2 = array_diff($source, $filter);
    /* output:
      [0] => 1
      [1] => 2
      [4] => 8
      [6] => 103
     */

    printPre($result_diff2);
    echo "<hr>";
    ?>
    <script>
        let allH1 = document.getElementsByTagName("h1");
        let cilj = document.getElementById("ovde");
        for (i = 0; i < allH1.length; i++) {
            console.log(allH1[i].id);
            cilj.innerHTML += "<li><a href='#" + allH1[i].id + "'>" + allH1[i].id + "</a></li>";
        }
    </script>

</html>
