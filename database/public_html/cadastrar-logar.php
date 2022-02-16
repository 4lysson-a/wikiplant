<?php session_start(); //include 'nav.php';
?>
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
  <section>
    <div id="df3">
      <div class="doisformis">
        <?php
        include 'conexao.php';
        $con = mysqli_connect($host, $user, $pass, "contas");
        if (!$con) {
          echo "<h1>Erro!!!</h1>";
        }
        $respos = "";
        $apas = '"';
        $resposnome = "";
        $resposemail = "";
        $respossenha = "";
        $resposLOG = "";
        $resposemailLOG = "";
        $respossenhaLOG = "";

        if (isset($_POST["cadastrar"])) {
          if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $verificar = "SELECT * FROM contas WHERE email='" . $email . "'";
            $requerimento = mysqli_query($con, $verificar);
            $requerimento = mysqli_num_rows($requerimento);
            if ($requerimento == 0) {
              $cadastrar = "INSERT INTO `contas`( `email`, `nome`, `senha` ) VALUES ( '" . $email . "', '" . $nome . "', '" . $senha . "' )";
              $cadastrar = mysqli_query($con, $cadastrar);
            } elseif ($requerimento == 1) {
              $respos = "ERRO: Já exite uma conta com esse Email.";
              echo "<style media='screen'>.meio1 input[name=" . $apas . "email" . $apas . "]{border-bottom: 1px solid red;}</style>";
            }
          }
          if (empty($_POST["nome"])) {
            $resposnome = "<br>ERRO!: O campo 'Nome Completo' esta vazio.";
            echo "<style media='screen'>.meio1 input[name=" . $apas . "nome" . $apas . "]{border-bottom: 1px solid red;}</style>";
          }
          if (empty($_POST["email"])) {
            $resposemail = "<br>ERRO!: O campo 'Email' esta vazio.";
            echo "<style media='screen'>.meio1 input[name=" . $apas . "email" . $apas . "]{border-bottom: 1px solid red;}</style>";
          }
          if (empty($_POST["senha"])) {
            $respossenha = "<br>ERRO!: O campo 'Senha' esta vazio.";
            echo "<style media='screen'>.meio1 input[name=" . $apas . "senha" . $apas . "]{border-bottom: 1px solid red;}</style>";
          }
        }
        if (isset($_POST["logar"])) {
          if (!empty($_POST["emailLOG"]) && !empty($_POST["senhaLOG"])) {
            $email = $_POST["emailLOG"];
            $_SESSION['email'] = $email;
            $senha = $_POST["senhaLOG"];
            $_SESSION['senha'] = $senha;
            $verificaremail = "SELECT * FROM contas WHERE email='" . $email . "'";
            $requerimentoemail = mysqli_query($con, $verificaremail);
            $requerimentoemail = mysqli_num_rows($requerimentoemail);
            if ($requerimentoemail == 1) {
              $verificarsenha = "SELECT * FROM contas WHERE email='" . $email . "' AND senha='" . $senha . "'";
              $requerimentosenha = mysqli_query($con, $verificarsenha);
              $requerimentosenha = mysqli_num_rows($requerimentosenha);
              if ($requerimentosenha == 1) {
                header('Location: conta.php?respos=3');
              } elseif ($requerimentosenha == 0) {
                $resposLOG = "ERRO: Não exite uma conta com esse Email e Senha.<br> Verifice se as digitou corretamente";
                echo "<style media='screen'>.meio2 input[name=" . $apas . "emailLOG" . $apas . "], input[name=" . $apas . "senhaLOG" . $apas . "]{border-bottom: 1px solid red;}</style>";
              }
            } elseif ($requerimentoemail == 0) {
              $resposLOG = "ERRO: Não exite uma conta com esse Email.";
              echo "<style media='screen'>.meio2 input[name=" . $apas . "emailLOG" . $apas . "]{border-bottom: 1px solid red;}</style>";
            }
          }
          if (empty($_POST["emailLOG"])) {
            $respossenhaLOG = "<br>ERRO!: O campo 'Email' esta vazio.";
            echo "<style media='screen'>.meio2 input[name=" . $apas . "emailLOG" . $apas . "]{border-bottom: 1px solid red;}</style>";
          }
          if (empty($_POST["senhaLOG"])) {
            $resposemailLOG = "<br>ERRO!: O campo 'Senha' esta vazio.";
            echo "<style media='screen'>.meio2 input[name=" . $apas . "senhaLOG" . $apas . "]{border-bottom: 1px solid red;}</style>";
          }
        }
        mysqli_close($con);
        ?>

        <form class="meio1" action="cadastrar-logar.php" method="post">
          <p><?php echo $respos . $resposnome . $resposemail . $respossenha; ?></p>
          <h2>Cadastre-se</h2>
          <input type="text" name="nome" placeholder="  Nome Completo"><br>
          <input type="email" name="email" placeholder="   Email"><br>
          <input type="password" name="senha" placeholder="   Senha"><br>
          <input type="submit" name="cadastrar" value="Cadastrar">
        </form>

        <form id="Login" class="meio2" action="cadastrar-logar.php" method="post">
          <p><?php echo $resposLOG . $resposemailLOG . $respossenhaLOG; ?></p>
          <h2>Login</h2>
          <input type="email" name="emailLOG" placeholder="   Email"><br>
          <input type="password" name="senhaLOG" placeholder="   Senha">
          <br><input type="submit" name="logar" value="Fazer login">
        </form>
      </div>
    </div>
  </section>
</body>

</html>
<?php //include 'footer.php'; 
?>