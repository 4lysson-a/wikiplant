<?php session_start(); include 'nav.php'; $apas = '"'; ?>
<section id="conta">

  <style media="screen">
    #teste{
      color: #268e1a;
    }
  </style>
  
  <?php
    // codigo anti cheater maldito
    if ( !isset($_GET["respos"])) {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=cadastrar-logar.php'>";
    }
    if (!isset($_SESSION['email']) == true || !isset($_SESSION['senha']) == true){
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=cadastrar-logar.php'>";
    }
    // conexao com o banco de dados
    include 'conexao.php';
    $con = mysqli_connect($host, $user, $pass, "contas");
    if (!$con){echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=cadastrar-logar.php'>";}
    // critério para puxar informasões do user
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $res = mysqli_query($con,"SELECT * FROM contas WHERE email='".$email."' AND senha='".$senha."'");
    while ($campo = mysqli_fetch_array($res)){ 
      $nomecliente = $campo['nome']; 
      $quantcubomae = 0;
      if(!empty($campo['cubomae1'])){
        $quantcubomae++;
        $rescubomae1 = $campo['cubomae1'];
        $cubonome1 = $campo['cubonome1'];
      }
      if(!empty($campo['cubomae2'])){
        $quantcubomae++;
        $rescubomae2 = $campo['cubomae2'];
        $cubonome2 = $campo['cubonome2'];
      }
      if(!empty($campo['cubomae3'])){
        $quantcubomae++;
        $rescubomae3 = $campo['cubomae3'];
        $cubonome3 = $campo['cubonome3'];
      }
      if(!empty($campo['cubomae4'])){
        $quantcubomae++;
        $rescubomae4 = $campo['cubomae4'];
        $cubonome4 = $campo['cubonome4'];
      }
      if(!empty($campo['cubomae5'])){
        $quantcubomae++;
        $rescubomae5 = $campo['cubomae5'];
        $cubonome5 = $campo['cubonome5'];
      }
    }
    // "teste" estrutura de decisão para a resposta do add de alas
    
    $estatus1addform = "0%";
    $estatus2addform = "none";
    if ($_GET["respos"] == 0) {
      $estatus1addform = "100%";
      $estatus2addform = "inherit";
      echo "<style media=" . $apas . "screen" . $apas . "> #textorespostaaddform{ background: rgba(144, 4, 4, 0.83);
      box-shadow: 0px 0px 40px rgba(144, 4, 4, 1);</style>";
      $textrespos = "<h5>ERRO</h5><br>
        <a href='javascript:void(0)' class='closebtn' onclick='respostaaddform()'><button type='button' name='fechar'>Sair</button></a>
      ";
    }elseif ($_GET["respos"] == 1){ 
      $estatus1addform = "100%";
      $estatus2addform = "inherit";
      echo "<style media=" . $apas . "screen" . $apas . "> #textorespostaaddform{ background: rgba(20, 144, 4, 0.83);
      box-shadow: 0px 0px 40px rgba(20, 144, 4, 1);</style>";
      $textrespos = "<h5>Operação feita com sucesso</h5><br>
        <a href='javascript:void(0)' class='closebtn' onclick='respostaaddform()'><button type='button' name='fechar'>Sair</button></a>
      ";
    }
  ?>
  
  <section id="alas-perfilmachine">
    <section id="respostaaddform" style="width: <?php echo $estatus1addform; ?>;">
      <div id="textorespostaaddform" style="display: <?php echo $estatus2addform; ?>;">
        <?php echo $textrespos; ?>
      </div>
    </section>
    <section id="addcontrolador" style="width: 0%;">
      <div id="addform" style="display: none;">
        <form action="addcubo.php" method="post">
          <label>Digite aqui o codigo de seu cubo mãe</label>
          <input type="text" class="form-control" name="codigocubo" placeholder="00.000.00.00.00.0" maxlength="17" onKeyPress="MascaraRG(form1.rg);">
          <input type="text" class="form-control" name="nomecubo" placeholder="Digite o nome aqui">
          <input type="submit" name="add" value="Adicionar">
          <a href='javascript:void(0)' class='closebtn' onclick='fecharaddform()'><button type='button' name='fechar'>Cancelar</button></a>
        </form>
      </div>
    </section>
    <samp onclick="add()" >
      <div class="ala">
        <h4>Adicionar Cubo Mãe</h4>
      </div>
    </samp>
    <samp onclick="perfil()" >
      <div class="ala">
        <h4>Meu Perfil</h4>
      </div>
    </samp>
    <?php
      $loopsubala = 0;
      $lnalas= 1;
      // Gerar abas
      for ($ves=1; $ves <= $quantcubomae ; $ves++) { 
        echo "<samp onclick='ala" . $ves . "()'><div class='ala'><h4>" . ${"cubonome" . $ves} . "</h4></div></samp>\n";
        $res2 = mysqli_query($con,"SELECT * FROM `" . ${"rescubomae" . $ves} ."` ");
        while ($comtrocampos = mysqli_fetch_array($res2)){
          ${"nome" . $lnalas} = $comtrocampos['nomeala'];
          ${"tipoala" . $lnalas} = $comtrocampos['tipoala'];
          echo "<samp onclick='subala" . $lnalas . "()'>";
          echo "<div class='subala'>";
          echo "<h4>" . ${"nome" . $lnalas} . ${"tipoala" . $lnalas} . "</h4>";
          echo "</div>";
          echo "</samp>\n";
          $lnalas++;
          $loopsubala++;
        }
      }
    ?>
    <div class='seai' style="height: 250px;"></div>
  </section>
  <section>
    <form id="info-perfilmachine" action="teste.php" method="post">
    <div id="perfil">
      <h1 style="margin-top: 0px;">Meu Perfil<a href="javascript:void(0)" class="closebtn" onclick="clperfil()">&times;</a></h1>
    </div>
      <?php
        // Gerar canpos de informação
        $lnalas= 1;
        for ($ves=1; $ves <= $quantcubomae ; $ves++) {
        echo "<div class='info' id='cala" . $ves . "'style='display: none;'>";
        echo "<h1>" . ${"cubonome" . $ves} . "<a href='javascript:void(0)' class='closebtn' onclick=clala" . $ves . "()>&times;</a></h1>";
        echo "</div>\n"; 
        $res3 = mysqli_query($con,"SELECT * FROM `" . ${"rescubomae" . $ves} ."` ");
        
          while ($comtrocampos = mysqli_fetch_array($res3)){
            ${"nome" . $lnalas} = $comtrocampos['nomeala'];
            ${"tipoala" . $lnalas} = $comtrocampos['tipoala'];
            $codigo = $comtrocampos['codfabri'];
            if (${"tipoala" . $lnalas} == 1){
              echo "<div class='info' id='csubala" . $lnalas . "'style='display: none;'>";
              echo "<h2>1" . ${"nome" . $lnalas} . "<a href='javascript:void(0)' class='closebtn' onclick=clsubala" . $lnalas . "()>&times;</a></h2>";
              echo "
                  <a href='javascript:void(0)' class='closebtn' onclick='excluir" . $lnalas . "()'><button type='button' >Excluir</button></a>
            <section id=" . $apas . "tudoexcluir" . $lnalas . $apas . " class=" . $apas . "tudoexcluir" . $apas . " style=" . $apas . "width: 0%;" . $apas . ">
            <div id=" . $apas . "excluir" . $lnalas . $apas . " class=" . $apas . "excluir" . $apas . " style=" . $apas . "display: none;" . $apas . ">
              <h1>Atenção</h1>
              <a href='javascript:void(0)' class='closebtn' onclick='redirect" . $lnalas . "()'><button type='button' >Excluir</button></a>
              <a href='javascript:void(0)' class='closebtn' onclick='fecharexcluir" . $lnalas . "()'><button type='button' >Cancelar</button></a>
              <div id=" . $apas . "conteudo" . $lnalas . $apas . "></div>
            </div>
            </section>
            <script>
            function redirect" . $lnalas . "() {
            var x = document.getElementById(" . $apas . "conteudo" . $lnalas . $apas . ");
            x.innerHTML = " . $apas . "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=teste.php?codigos=" . ${"rescubomae" . $ves} . "/" . $codigo . "'>" . $apas . ";
            }
            function fecharexcluir" . $lnalas . "() {
            document.getElementById('tudoexcluir" . $lnalas . "').style.width = '0%';
            document.getElementById('excluir" . $lnalas . "').style.display = 'none';
            }
            function excluir" . $lnalas . "() {
            document.getElementById('tudoexcluir" . $lnalas . "').style.width = '100%';
            document.getElementById('excluir" . $lnalas . "').style.display = 'inherit';
            }
            </script>
            ";
              echo "</div>\n";
            }if (${"tipoala" . $lnalas} == 2){
              echo "<div class='info' id='csubala" . $lnalas . "'style='display: none;'>";
              echo "<h2>2" . ${"nome" . $lnalas} . "<a href='javascript:void(0)' class='closebtn' onclick=clsubala" . $lnalas . "()>&times;</a></h2>";
              echo "
                  <a href='javascript:void(0)' class='closebtn' onclick='excluir" . $lnalas . "()'><button type='button' >Excluir</button></a>
            <section id=" . $apas . "tudoexcluir" . $lnalas . $apas . " class=" . $apas . "tudoexcluir" . $apas . " style=" . $apas . "width: 0%;" . $apas . ">
            <div id=" . $apas . "excluir" . $lnalas . $apas . " class=" . $apas . "excluir" . $apas . " style=" . $apas . "display: none;" . $apas . ">
              <h1>Atenção</h1>
              <a href='javascript:void(0)' class='closebtn' onclick='redirect" . $lnalas . "()'><button type='button' >Excluir</button></a>
              <a href='javascript:void(0)' class='closebtn' onclick='fecharexcluir" . $lnalas . "()'><button type='button' >Cancelar</button></a>
              <div id=" . $apas . "conteudo" . $lnalas . $apas . "></div>
            </div>
            </section>
            <script>
            function redirect" . $lnalas . "() {
            var x = document.getElementById(" . $apas . "conteudo" . $lnalas . $apas . ");
            x.innerHTML = " . $apas . "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=teste.php?codigos=" . ${"rescubomae" . $ves} . "/" . $codigo . "'>" . $apas . ";
            }
            function fecharexcluir" . $lnalas . "() {
            document.getElementById('tudoexcluir" . $lnalas . "').style.width = '0%';
            document.getElementById('excluir" . $lnalas . "').style.display = 'none';
            }
            function excluir" . $lnalas . "() {
            document.getElementById('tudoexcluir" . $lnalas . "').style.width = '100%';
            document.getElementById('excluir" . $lnalas . "').style.display = 'inherit';
            }
            </script>
            ";
              echo "</div>\n";
            }if (${"tipoala" . $lnalas} == 3) {
              echo "<div class='info' id='csubala" . $lnalas . "'style='display: none;'>";
              echo "<h2>3" . ${"nome" . $lnalas} . "<a href='javascript:void(0)' class='closebtn' onclick=clsubala" . $lnalas . "()>&times;</a></h2>";
              echo "
                  <a href='javascript:void(0)' class='closebtn' onclick='excluir" . $lnalas . "()'><button type='button' >Excluir</button></a>
            <section id=" . $apas . "tudoexcluir" . $lnalas . $apas . " class=" . $apas . "tudoexcluir" . $apas . " style=" . $apas . "width: 0%;" . $apas . ">
            <div id=" . $apas . "excluir" . $lnalas . $apas . " class=" . $apas . "excluir" . $apas . " style=" . $apas . "display: none;" . $apas . ">
              <h1>Atenção</h1>
              <a href='javascript:void(0)' class='closebtn' onclick='redirect" . $lnalas . "()'><button type='button' >Excluir</button></a>
              <a href='javascript:void(0)' class='closebtn' onclick='fecharexcluir" . $lnalas . "()'><button type='button' >Cancelar</button></a>
              <div id=" . $apas . "conteudo" . $lnalas . $apas . "></div>
            </div>
            </section>
            <script>
            function redirect" . $lnalas . "() {
            var x = document.getElementById(" . $apas . "conteudo" . $lnalas . $apas . ");
            x.innerHTML = " . $apas . "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=teste.php?codigos=" . ${"rescubomae" . $ves} . "/" . $codigo . "'>" . $apas . ";
            }
            function fecharexcluir" . $lnalas . "() {
            document.getElementById('tudoexcluir" . $lnalas . "').style.width = '0%';
            document.getElementById('excluir" . $lnalas . "').style.display = 'none';
            }
            function excluir" . $lnalas . "() {
            document.getElementById('tudoexcluir" . $lnalas . "').style.width = '100%';
            document.getElementById('excluir" . $lnalas . "').style.display = 'inherit';
            }
            </script>
            ";
              echo "</div>\n";
            }
            $lnalas++;
          }
        }
      ?>
    </form>
  </section>
</section>

  <script>
    function respostaaddform() {
      document.getElementById('respostaaddform').style.width = '0%';
      document.getElementById('textorespostaaddform').style.display = 'none';
    }
    function fecharaddform() {
      document.getElementById('addcontrolador').style.width = '0%';
      document.getElementById('addform').style.display = 'none';
    }
    function add(){
      document.getElementById('addcontrolador').style.width = '100%';
      document.getElementById('addform').style.display = 'inherit';
    }
    function perfil(){
      document.getElementById('perfil').style.display = 'inherit';
    }
    function clperfil(){
      document.getElementById('perfil').style.display = 'none';
    }
<?php 
  // Gerar script de cada função
  for ($lnalas = 1; $lnalas <= $quantcubomae; $lnalas++) {
    echo "function ala" . $lnalas . "() {";
    echo "document.getElementById(" . $apas . "cala" . $lnalas . $apas . ").style.display = 'inherit';\n";
    echo "}\n";
  }
  for ($lnalas = 1; $lnalas <= $quantcubomae; $lnalas++) {
    echo "function clala" . $lnalas . "() {";
    echo "document.getElementById(" . $apas . "cala" . $lnalas . $apas . ").style.display = 'none';\n";
    echo "}\n";
  }
  for ($lnalas = 1; $lnalas <= $loopsubala; $lnalas++) {
    echo "function subala" . $lnalas . "() {";
    echo "document.getElementById(" . $apas . "csubala" . $lnalas . $apas . ").style.display = 'inherit';\n";
    echo "}\n";
  }
  for ($lnalas = 1; $lnalas <= $loopsubala; $lnalas++) {
    echo "function clsubala" . $lnalas . "() {";
    echo "document.getElementById(" . $apas . "csubala" . $lnalas . $apas . ").style.display = 'none';\n";
    echo "}\n";
  }
  echo "</script>";
  mysqli_close($con); 
?>
