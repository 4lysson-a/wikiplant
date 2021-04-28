<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <!-- carrossel -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- style -->
      <link rel="stylesheet" href="_css/nav.css">
      <link rel="stylesheet" href="_css/index.css">
      <link rel="stylesheet" href="_css/linkar.css">
      <link rel="stylesheet" href="_css/equipe.css">
      <link rel="stylesheet" href="_css/footer.css">
      <link rel="stylesheet" href="_css/df.css">
      <link rel="stylesheet" href="_css/cadastro.css">
      <link rel="stylesheet" href="_css/conta.css">
      <link rel="stylesheet" href="_css/testes3.css">
    <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- address -->
      <link rel="icon" href="_img/favicon.ico" tipo="imagem/x-ícone" >
    <title>WikiPlant</title>
  </head>
  <body>
    <!--Java Script-->
  <script>
    function openoi() {
        document.getElementById("df").style.width = "250px";

        document.getElementById("df2").style.width = "0";
    }

    function closeoi() {
        document.getElementById("df").style.width = "0";
    }

    function openca() {
        document.getElementById("df2").style.width = "250px";

        document.getElementById("df").style.width = "0";
    }

    function closeca() {
        document.getElementById("df2").style.width = "0";
    }

    function opendf3() {
        document.getElementById("df3").style.width = "100%";

        document.getElementById("df").style.width = "0";

        document.getElementById("df2").style.width = "0";
    }

    function closedf3() {
        document.getElementById("df3").style.width = "0";
    }
  </script>


<!-- abas -->

<!-- Aba do hamburgur-->
  <div id="df">
    <a href="javascript:void(0)" class="closebtn" onclick="closeoi()">&times;</a>

       <ul style="padding-left: 56px;">
         <li><a id="home" href="index.php">HOME</a></li>
         <li><a id="linkarP" href="linkar-plantas.php">LINKAR PLANTAS</a></li>
         <li><a id="equipe" href="equipe.php">EQUIPE</a></li>
         <li><a href="#">NOSSO BLOG</a></li>
       </ul>

       <center>
      <span onclick="openca()"><img id="user" src="_img/_icon/user.png"></span>
      <a href="www.facebook.com/wikiplant" target="_blank"><img id="facebook" src="_img/_icon/focebook.png"></a>
      <a href="mailto:wikiplant@gmail.com"><img id="mail" src="_img/_icon/email.png"></a>
      <a href="tel:+5512981025957"><img id="tel" src="_img/_icon/tell.png" alt=""></a>
        </center>

  </div>

<!--Aba do usuário  -->
  <div id="df2">
    <a href="javascript:void(0)" class="closebtn" onclick="closeca()">&times;</a>
    <div class="meio">
      <input type="text" name="Nomecompreto" placeholder="  Nome Completo"><br>
      <input type="email" name="email" placeholder="   Email"><br>
      <input type="password" name="senha" placeholder="   Senha">
      <br><button type="reset" name="button">Cadastrar</button>
      <button type="reset">Fazer login</button>
    </div>
  </div>    <nav class="navegacao">
      <a href="index.html"><img id="logo" src="_img/_icon/plant.png"></a>

      <!-- <img id="pesquisa" src="_img/_icon/pesquisa.png"> -->

      <ul>
        <li><a id="home" href="index.php">HOME</a></li>
        <!-- <li><a id="linkarP" href="linkar-plantas.php">LINKAR PLANTAS</a></li> -->
        <li><a id="equipe" href="equipe.php">EQUIPE</a></li>
        <li><a href="https://testeswikiplant.000webhostapp.com/">NOSSO BLOG</a></li>
        <li><a id="teste" href="conta.php">aba de cadastro (teste)</a></li>
      </ul>
      <span onclick="openoi()"><img id="hab" src="_img/_icon/hamb.png"></span>
      <!-- <span></a><img id="user" src="_img/_icon/user.png"></a></span> -->
    </nav>
<section id="conta">

  <style media="screen">
    #teste{
      color: #268e1a;
    }
  </style>
  
    <section id="alas-perfilmachine">
    <section id="respostaaddform" style="width: 0%;">
      <div id="textorespostaaddform" style="display: none;">
        <br />
<b>Notice</b>:  Undefined variable: textrespos in <b>/opt/lampp/htdocs/public_html/conta.php</b> on line <b>76</b><br />
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
    <samp onclick='ala1()'><div class='ala'><h4>se � loco</h4></div></samp>
<samp onclick='subala1()'><div class='subala'><h4>oi1</h4></div></samp>
<samp onclick='subala2()'><div class='subala'><h4>ta bao2</h4></div></samp>
<samp onclick='subala3()'><div class='subala'><h4>mano3</h4></div></samp>
<samp onclick='ala2()'><div class='ala'><h4>oi ta de boa</h4></div></samp>
  </section>
  <section>
    <form id="info-perfilmachine" action="teste.php" method="post">
    <div id="perfil">
      <h1 style="margin-top: 0px;">Meu Perfil<a href="javascript:void(0)" class="closebtn" onclick="clperfil()">&times;</a></h1>
    </div>
    

      <div class='info' id='cala1'style='display: none;'><h1>se � loco<a href='javascript:void(0)' class='closebtn' onclick=clala1()>&times;</a></h1></div>
<div class='info' id='csubala1'style='display: none;'><h2>1oi<a href='javascript:void(0)' class='closebtn' onclick=clsubala1()>&times;</a></h2>
    

    <a href='javascript:void(0)' class='closebtn' onclick='excluir()'><button type='button' >Excluir</button></a>
    <section id="tudoexcluir" class="tudoexcluir" style="width: 0%;">
      <div id="excluir" class="excluir" style="display: none;">
          <h1>Atenção</h1>
          <!-- <input type="text" name="codigos" value="00.001.18.04.19.1/000.001.1"> -->
          <a href='javascript:void(0)' class='closebtn' onclick='redirect1()'><button type='button' >Excluir</button></a>
          <a href='javascript:void(0)' class='closebtn' onclick='fecharexcluir()'><button type='button' >Cancelar</button></a>
          <div id="conteudo"></div>
      </div>
    </section>
    <script>
      function redirect1() {
        var x = document.getElementById("conteudo");
        x.innerHTML = "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=teste.php'>";
      }
      function fecharexcluir() {
        document.getElementById('tudoexcluir').style.width = '0%';
        document.getElementById('excluir').style.display = 'none';
      }
      function excluir() {
        document.getElementById('tudoexcluir').style.width = '100%';
        document.getElementById('excluir').style.display = 'inherit';
      }
    </script>



</div>
<div class='info' id='csubala2'style='display: none;'><h2>2ta bao<a href='javascript:void(0)' class='closebtn' onclick=clsubala2()>&times;</a></h2></div>
<div class='info' id='csubala3'style='display: none;'><h2>3mano<a href='javascript:void(0)' class='closebtn' onclick=clsubala3()>&times;</a></h2></div>
<div class='info' id='cala2'style='display: none;'><h1>oi ta de boa<a href='javascript:void(0)' class='closebtn' onclick=clala2()>&times;</a></h1></div>
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
function ala1() {document.getElementById("cala1").style.display = 'inherit';
}
function ala2() {document.getElementById("cala2").style.display = 'inherit';
}
function clala1() {document.getElementById("cala1").style.display = 'none';
}
function clala2() {document.getElementById("cala2").style.display = 'none';
}
function subala1() {document.getElementById("csubala1").style.display = 'inherit';
}
function subala2() {document.getElementById("csubala2").style.display = 'inherit';
}
function subala3() {document.getElementById("csubala3").style.display = 'inherit';
}
function clsubala1() {document.getElementById("csubala1").style.display = 'none';
}
function clsubala2() {document.getElementById("csubala2").style.display = 'none';
}
function clsubala3() {document.getElementById("csubala3").style.display = 'none';
}
</script>