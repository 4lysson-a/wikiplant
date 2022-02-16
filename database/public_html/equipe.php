<?php
include 'nav.php';
include 'df-da-equipe.php';
?>
<style>
  #equipe {
    color: #268e1a;
    text-decoration: none;
  }

  #df #equipe {
    color: #268e1a;
    text-decoration: none;
  }
</style>

<!--Texto-->
<section id="equipe" class="equipe">
  <div id="borda">
    <header>
      <h1>Equipe Wiki<span class="verde">Plant</span></h1>
    </header>
    <p>Está é uma aba dedicada a <span class="verde">homenagear</span> aqueles que deram <span class="verde">vida</span> ao projeto, Obrigado !!!</p>
  </div>

</section>



<!--Imagens-->



<div id="box">
  <span onclick="abre()"><img class="staff" id="aly" src="img/_staff/Alysson.jpg"></span>
  <span onclick="abrelea()"><img class="staff" id="lea" src="img/_staff/Leandro.jpg"></span>
  <span onclick="abrelet()"><img class="staff" id="let" src="img/_staff/Lettycia.jpg"></span>
  <span onclick="abregrazi()"><img class="staff" id="grazi" src="img/_staff/graziela.jpg"></span>
  <span onclick="abregle()"><img class="staff" id="gle" src="img/_staff/Gleyce.jpg"></span>
  <span onclick="abreeliz()"><img class="staff" id="eliz" src="img/_staff/Elizabeth.jpg"></span>
</div>

<?php include 'footer.php'; ?>