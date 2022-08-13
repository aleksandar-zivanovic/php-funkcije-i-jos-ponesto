<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title><?= basename($_SERVER['PHP_SELF'], '.php'); ?></title>
</head>

<body>
  <p>Pogledati "View Page Source" u browser-u, da bi se videlo kako funkcija postupa sa specijalnim karakterima</p>
  <p>
      <?php
      $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
      echo $new . "<br>";

      $new1 = trim(
          htmlspecialchars(
              ' <?php>echo "Bio je <strong>lep dan</strong> i padala je <i>kiša, dok je <span style=\'background-color:yellow;\'>uragan</span> rušio kuće, a <pre>deca se igrala</pre> na ulici motornom testerom.";?> '
          )
      );
      echo $new1 . "<br>";

      $new2 = filter_var("<a href='test'>Test</a>", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      echo $new2;

      ?>
  </p>
</body>
</html>
