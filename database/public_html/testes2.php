<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/teste2.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
  <link rel="icon" href="img/favicon.ico" tipo="imagem/x-ícone">
  <title>WikiPlant</title>
</head>

<body>
  <?php
  $cod = "001.000.001.1";
  $arraycod = explode(".", $cod);
  // $arraycod[0] = $arraycod[0] + 0;
  function uni($rsu)
  {
    $r = $rsu + 0;
    return $r;
  }
  echo uni($arraycod[0]);

  $oi = "codigos/io";
  $codigos = explode("/", $oi);
  echo $codigos[0] . "</br>" . $codigos[1];
  ?>
</body>

</html>