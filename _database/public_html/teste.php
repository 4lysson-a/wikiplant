<?php 
  $cod = $_GET["codigos"];
  $arraycod = explode("/", $cod);
  $codcubo = $arraycod[0];
  $codcontro = $arraycod[1];
  include 'conexao.php';
  $con = mysqli_connect($host,$user,$pass, "contas");
  if (!$con){
   echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";
  }
  $run = mysqli_query($con,"DELETE FROM `" . $codcubo . "` WHERE `codfabri`= '" . $codcontro . "'");
  if ($run){
   echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=1'>";
  }
?>
<h1>123</h1>