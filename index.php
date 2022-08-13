<head>
  <style>
    a {
      color: black;
    }

    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
      background-color: palegoldenrod;
      font-weight: bold;
      margin: 5px;
      padding: 4px;
    }

    a:active {
      text-decoration: underline;
    }

    .kl_fajla {
      padding: 0;
      margin: 0;
      font-size: 1.05rem;
    }
  </style>
</head>

<body>
  <?php
  //$lista_fajlova = array_diff(scandir('C:\xampp\htdocs\Vezbanje_Razno'), ['.', '..']);
  $listaSvihFajlova = glob('*.*');
  $listaPhpFajlova  = glob('*.php'); // lista samo fajlove sa array_rand.php ekstenzijom
  foreach ($listaPhpFajlova as $fajl) {
      echo "<a href='{$fajl}' target='_blank'><span class='kl_fajla'>{$fajl}</span></a><br>";
  }

  echo "<hr>";

  echo "<h4>Non PHP files:</h4>";
  $notPhpFiles = array_diff($listaSvihFajlova, $listaPhpFajlova);
  foreach ($notPhpFiles as $notPhpFile) {
      echo "<a href='{$notPhpFile}' target='_blank'><span>{$notPhpFile}</span></a><br>";
  }

  echo "<hr>";

  //echo "<pre>";
  //print_r(array_values($lista_fajlova));
  //echo "</pre>";
  ?>
</body>
