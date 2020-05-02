<?php
require './components/top.php';
require './components/nav.php';
require './components/carousel.php';
?>

<!------- 
CONTATO 
------------------------------------------------------------------------------------------------->

<section>
  <div class="contat">
    <div class="container">
      <div class="row" style="padding:50px;">
        <div class="col-sm-3 col-md-9">
          <p>ENTRE EM CONTATO <br> Tire suas dúvidas e veja em que podemos te ajudar</p>
        </div>
        <div class="col-sm-9 col-md-3">
          <button onclick='window.location.href="Contato";'>Contato</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!------- 
O QUE FAZEMOS 
------------------------------------------------------------------------------------------------->

<section style="margin-top: 30px;">
  <div class="container" >
    <div class="row">

      <label class=" col-md-12">O que</label>
      <div class='index col-md-12'> Fazemos </div>

      <!--div class="justify-content-center" style="padding-top: 30px; background: #000;"-->

        <div class="card col-md-3" style="border:0">
          <img class="card-img-top" src="./images/eletrica.png" style="border:0">
          <div class="card-body">
            <h4 class="card-title">Projeto Elétrico</h4>
          </div>
        </div>

        <div class="card col-md-3" style="border:0">
          <img class="card-img-top" src="./images/residencia.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Residencial</h4>
          </div>
        </div>

        <div class="card col-md-3" style="border:0">
          <img class="card-img-top" src="./images/comercial.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Comercial</h4>
          </div>
        </div>

        <div class="card col-md-3" style="border:0">
          <img class="card-img-top" src="./images/rural.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Rural</h4>
          </div>
        </div>

      <!--/div-->

    </div>
  </div>
</section>

<!------- 
ENERGIA SOLAR 
------------------------------------------------------------------------------------------------->

<section>
  <div class="solar">
    <div class="container">
      <div class="row" style="padding-top:50px;">
        <div class="col-sm-3 col-md-9">
          <p>Energia Solar Fotovoltaica </p>
          A melhor escolha para você
        </div>
      </div>
    </div>
  </div>
</section>

<!------- 
PARCEIROS 
------------------------------------------------------------------------------------------------->

<section style="margin-top: 30px;">
  <div class="multicarouselp">
    <div class="container">
      <div class="row">
        <label class=" col-md-12">Nossos</label>
        <div class='index col-md-12'> Parceiros </div>
        <?php
        require './components/multi-carousel.php';
        ?>
      </div>
    </div>
  </div>
</section>


<?php
require './components/footer.php';
?>