<?php
  require './components/top.php';
  require './components/nav.php';
?>

<section>
  <div aria-label="breadcrumb">
    <div class="container">
      <ol class="breadcrumb" style="background:#ffffff">
        <li class="breadcrumb-item"><a href="https://www.althisengenharia.com.br">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contato</li>
      </ol>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="title">
      Nosso <span>Contato</span>
    </div>
  </div>
</section>

<section>
  <div class="painel2">
    <div class="container">
      <p>ENTRE EM CONTATO <br> Tire suas dúvidas e veja em que podemos te ajudar</p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <form  action="" method="post" name="enviar">
      <div class="form-row">

        <div class="col-md-6 mb-3">
          <input type="text" id="nome"  class="form-control" placeholder="Nome" required autocomplete="off">
          <input type="text" id="email" class="form-control" placeholder="E-mail" required autocomplete="off">
          <input type="text" id="assunto" class="form-control" placeholder="Assunto" required autocomplete="off">
        </div>

        <div class="col-md-6 mb-3">
          <textarea class="form-control" id="mensagem" rows="6" placeholder="Mensagem" required></textarea>
          <input class="enviar" type="submit" value="ENVIAR" id="submit" />
        </div>

      </div>

      <div id="enviar"></div>

    </form>
  </div>
</section>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229.19703789585108!2d-49.38372841992345!3d-23.201108488306858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9db5c4a57e22f474!2sAlthis+Engenharia!5e0!3m2!1spt-BR!2sbr!4v1559927438798!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php
  require './components/footer.php';
?>