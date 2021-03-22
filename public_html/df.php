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
  </div>