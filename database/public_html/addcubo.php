<?php
  session_start();
  include 'conexao.php';
  $codigo = $_POST["codigocubo"];
  $nome = $_POST["nomecubo"];
  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];
  $con = mysqli_connect($host, $user, $pass, "contas");
  if (!$con){
   echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";
  }
  $res = mysqli_query($con,"SELECT * FROM cubosmae WHERE codigo='".$codigo."' AND ativo='0'");
  $requerimento = mysqli_num_rows($res);
  if ($requerimento == 1) {
  	$res2 = mysqli_query($con,"SELECT * FROM contas WHERE email='".$email."' AND senha='".$senha."'");if (!$res2){echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	while ($campo = mysqli_fetch_array($res2)){
  	  $vesdocampo = 1;
  	  if(empty($campo['cubomae1']) && $vesdocampo == true){
  	  	$alterar = mysqli_query($con,
  	  	"UPDATE `contas` SET `cubomae1` = '".$codigo."', `cubonome1` = '".$nome."'  WHERE `contas`.`email` = '".$email."' AND `senha` = '".$senha."';");
  	    if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	    $alterar = mysqli_query($con,
  	  	"CREATE TABLE `".$codigo."` (`codfabri` varchar(30) NOT NULL,`nomeala` char(25) NOT NULL,`tipoala` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  	  	if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	  	$alterar = mysqli_query($con,
  	  	"UPDATE `cubosmae` SET `ativo` = '1' WHERE `cubosmae`.`codigo` = '".$codigo."';");
        $vesdocampo = 0;
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=1'>";
      }
      if(empty($campo['cubomae2']) && $vesdocampo == true){
      	$alterar = mysqli_query($con,
  	  	"UPDATE `contas` SET `cubomae2` = '".$codigo."', `cubonome2` = '".$nome."'  WHERE `contas`.`email` = '".$email."' AND `senha` = '".$senha."';");
  	    if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	    $alterar = mysqli_query($con,
  	  	"CREATE TABLE `".$codigo."` (`codfabri` varchar(30) NOT NULL,`nomeala` char(25) NOT NULL,`tipoala` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  	  	if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	  	$alterar = mysqli_query($con,
  	  	"UPDATE `cubosmae` SET `ativo` = '1' WHERE `cubosmae`.`codigo` = '".$codigo."';");
        $vesdocampo = 0;
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=1'>";
      }
      if(empty($campo['cubomae3']) && $vesdocampo == true){
      	$alterar = mysqli_query($con,
  	  	"UPDATE `contas` SET `cubomae3` = '".$codigo."', `cubonome3` = '".$nome."'  WHERE `contas`.`email` = '".$email."' AND `senha` = '".$senha."';");
  	    if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	    $alterar = mysqli_query($con,
  	  	"CREATE TABLE `".$codigo."` (`codfabri` varchar(30) NOT NULL,`nomeala` char(25) NOT NULL,`tipoala` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  	  	if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	  	$alterar = mysqli_query($con,
  	  	"UPDATE `cubosmae` SET `ativo` = '1' WHERE `cubosmae`.`codigo` = '".$codigo."';");
        $vesdocampo = 0;
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=1'>";
      }
      if(empty($campo['cubomae4']) && $vesdocampo == true){
      	$alterar = mysqli_query($con,
  	  	"UPDATE `contas` SET `cubomae4` = '".$codigo."', `cubonome4` = '".$nome."'  WHERE `contas`.`email` = '".$email."' AND `senha` = '".$senha."';");
  	    if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	    $alterar = mysqli_query($con,
  	  	"CREATE TABLE `".$codigo."` (`codfabri` varchar(30) NOT NULL,`nomeala` char(25) NOT NULL,`tipoala` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  	  	if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	  	$alterar = mysqli_query($con,
  	  	"UPDATE `cubosmae` SET `ativo` = '1' WHERE `cubosmae`.`codigo` = '".$codigo."';");
        $vesdocampo = 0;
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=1'>";
      }
      if(empty($campo['cubomae5']) && $vesdocampo == true){
      	$alterar = mysqli_query($con,
  	  	"
  	  	UPDATE `contas` SET `cubomae5` = '".$codigo."', `cubonome5` = '".$nome."'  WHERE `contas`.`email` = '".$email."' AND `senha` = '".$senha."';");
  	    if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	    $alterar = mysqli_query($con,
  	  	"CREATE TABLE `".$codigo."` (`codfabri` varchar(30) NOT NULL,`nomeala` char(25) NOT NULL,`tipoala` varchar(15) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  	  	if (!$alterar) {echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";}
  	  	$alterar = mysqli_query($con,
  	  	"UPDATE `cubosmae` SET `ativo` = '1' WHERE `cubosmae`.`codigo` = '".$codigo."';");
        $vesdocampo = 0;
        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=1'>";
      }
      if ($vesdocampo == true) {
      	echo "voce não pode likar mais cubos";
      }
  	}
  }
  elseif ($requerimento < 1){
  	echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";
  }
  elseif ($requerimento > 1){
  	echo"<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=conta.php?respos=0'>";
  }
?>