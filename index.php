<?php
   include "cabecalho.php";
   ?>
<title>Invicta-X Transportes</title>


   <div class="w3-container" style="margin-top:80px" id="invictax">
   <div class="button">
  <h1 class="w3-xxxlarge w3-text-red"><b>Bem-Vindo!</b></h1>
   <hr style="width:18%;border:5px solid red" class="w3-round">
   </div>
   </div>
   <div class="buttons">
       <button class="btn btn-primary btn-lg" onclick="window.open('PagLogin.php')">JÁ POSSUO CADASTRO</button>
       <button class="btn btn-secondary btn-lg" onclick="window.open ('PagClienteTipoCadastro.php')">QUERO ME CADASTRAR</button>
   </div>

   <!-- Header -->
<div class="w3-container" style="margin-top:80px" id="invictax">
  <h1 class="w3-xxxlarge w3-text-red"><b>Invicta-X.</b></h1>
  <hr style="width:14%;border:5px solid red" class="w3-round">
</div>
<!-- Photo grid (modal) -->
<div class="w3-row-padding">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/sede.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Titulo1</h5>
        <p>Descrição1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/sede.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Titulo2</h5>
        <p>Descrição2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/sede.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Titulo3</h5>
        <p>Descrição3</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
   <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
   <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
   </div>
</div>
<!-- historia -->
<div class="w3-container" id="historia" style="margin-top:75px">
   <h1 class="w3-xxxlarge w3-text-red"><b>Historia.</b></h1>
   <hr style="width:12%;border:5px solid red" class="w3-round">
   <h3>A Invicta surgiu, devido a uma sociedade desfeita em outra empresa na qual a mesma também era do ramo de transportes, visto isto, para dar seguimento ao trabalho dentro da mesma área, surgiu a Invicta X Transportes Ltda, na qual hoje atuamos em todo o território do Brasil, realizamos desembaraços de DTAS, trabalhamos com armazenagens de cargas e etc...</h3>
   <h3>Trabalhamos com transporte de cargas aéreas e marítimas. Contamos com uma equipe de 15 funcionários e uma frota de 20 carros entre fiorinos, sprinters, 710, cavalos mecânicos, muncks e carretas!!
   </h3>
</div>
<!-- Veiculos -->
<div class="w3-container" id="veiculos" style="margin-top:75px">
<div>
   <h1 class="w3-xxxlarge w3-text-red"><b>Veiculos.</b></h1>
   <hr style="width:13%;border:5px solid red" class="w3-round">
   <div>
   <h3>Nossa equipe</h3>
   <h3>Temos uma equipe muito bem treinada para oferecer a melhor experiência aos clientes. Nossos motoristas estão preparados para qualquer situação que possa acontecer e nossa marca sempre visa a excelência no atendimento a nossos clientes.
   </h3>
   <h3><b>Nossos veiculos</b>:</h3>
</div>
<!-- The Team -->
<div class="w3-row-padding w3-grayscale">
   <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
         <img src="imagens/constellation.jpg" alt="Constellation" style="width:100%">
         <div class="w3-container">
            <h3>Tractor Constellation</h3>
            <p class="w3-opacity">Caminhão</p>
            <p>Volkswagen Constellation é uma linha de caminhões de médio e de grande porte, fabricada pela Volkswagen, com peso bruto de 13-57 toneladas</p>
         </div>
      </div>
   </div>
   <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
         <img src="imagens/fiorino.jpg" alt="Fiorino" style="width:100%">
         <div class="w3-container">
            <h3>Fiat Fiorino</h3>
            <p class="w3-opacity">Furgão Van</p>
            <p>Fiorino é uma linha de automóveis comerciais leves fabricados pela montadora italiana Fiat desde 1977, e são usados para entregas ate hoje.</p>
         </div>
      </div>
   </div>
   <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
         <img src="imagens/sprinter.jpg" alt="Sprinter" style="width:100%">
         <div class="w3-container">
            <h3>Mercedes-Benz Sprinter</h3>
            <p class="w3-opacity">Furgão Van</p>
            <p>Sprinter é um veículo utilitário leve produzido pela Daimler AG na Argentina e Alemanha e comercializado por suas marcas Mercedes-Benz.</p>
         </div>
      </div>
   </div>
</div>
<!-- Packages / Pricing Tables -->
<div class="w3-container" style="margin-top:75px">
   <h1 class="w3-xxxlarge w3-text-red"><b>Nossa localização.</b></h1>
   <hr style="width:27%;border:5px solid red" class="w3-round">
</div>
    <div class="container">
      <div class="row">
        <div class="card col-sm">
          <div class="card-body">
            <h5 class="card-title">Localização</h5>
            <p class="card-text">Abaixo você pode checar nossa localização no google maps.</p>
            <p class="card-text"><small class="text-muted">Last updated today</small></p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.197240865866!2d-43.27703718441968!3d-22.83219104095501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997bbeedb6abbb%3A0x81d7347085e9cebe!2sR.%20Beliz%C3%A1rio%20Pena%2C%20450%20-%20Penha%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021020-010!5e0!3m2!1spt-BR!2sbr!4v1606514206032!5m2!1spt-BR!2sbr" width="540" height="355" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="card col-sm">
          <div class="card-body">
            <h5 class="card-title">Sede</h5>
            <p class="card-text">Abaixo você pode ver nossa sede caso queira encontrar conosco pessoalmente.</p>
            <p class="card-text"><small class="text-muted">Last updated today</small></p>
          </div>
          <img src="imagens/sede.png" class="card-img-bottom" alt="...">
        </div>
      </div>
    </div>
  </div>
<!-- Contato -->
<div class="w3-container" id="contato" style="margin-top:75px">
   <h1 class="w3-xxxlarge w3-text-red"><b>Contato.</b></h1>
   <hr style="width:13%;border:5px solid red" class="w3-round">
   <h4>Gostou do nosso trabalho? Entre em contato!</h4>
</div>
<!-- End page content -->
</div>

<!-- W3.CSS Container -->

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
   <p class="w3-right"> <a href="index.php" title="inicio" class="w3-hover-opacity">Inicio</a></p>
    <!-- target="_blank" -->
</div>
<script>
   // Script to open and close sidebar
   function w3_open() {
   document.getElementById("mySidebar").style.display = "block";
   document.getElementById("myOverlay").style.display = "block";
   }
   
   function w3_close() {
   document.getElementById("mySidebar").style.display = "none";
   document.getElementById("myOverlay").style.display = "none";
   }
   
   // Modal Image Gallery
   function onClick(element) {
   document.getElementById("img01").src = element.src;
   document.getElementById("modal01").style.display = "block";
   var captionText = document.getElementById("caption");
   captionText.innerHTML = element.alt;
   }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>