<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <!-- carrossel -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- style -->
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/linkar.css">
  <link rel="stylesheet" href="css/equipe.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/df.css">
  <link rel="stylesheet" href="css/cadastrar-logar.css">
  <link rel="stylesheet" href="css/conta.css">
  <link rel="stylesheet" href="css/testes3.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <!-- address -->
  <link rel="icon" href="img/favicon.ico" tipo="imagem/x-ícone">
  <title>WikiPlant</title>
</head>

<body>
  <?php
  include 'df.php';
  ?>
  <nav class="navegacao">
    <a href="index.html"><img id="logo" src="img/icon/plant.png"></a>

    <!-- <img id="pesquisa" src="img/icon/pesquisa.png"> -->

    <ul>
      <li><a id="home" href="index.php">HOME</a></li>
      <!-- <li><a id="linkarP" href="linkar-plantas.php">LINKAR PLANTAS</a></li> -->
      <li><a id="equipe" href="equipe.php">EQUIPE</a></li>
      <li><a href="https://testeswikiplant.000webhostapp.com/">NOSSO BLOG</a></li>
      <li><a id="teste" href="conta.php">aba de cadastro (teste)</a></li>
    </ul>
    <span onclick="openoi()"><img id="hab" src="img/icon/hamb.png"></span>
    <!-- <span></a><img id="user" src="img/icon/user.png"></a></span> -->
  </nav>