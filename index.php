<?php
   include "cabecalho.php";
   ?>
<title>Invicta-X Transportes</title>

   <div class="button">
   <div class="w3-container" style="margin-left:-110px;" id="invictax">
   <h1 class="w3-xxxlarge w3-text-red"><b>SEJA BEM-VINDO AO INVICTA-X!</b></h1>
   <hr style="width:740px;border:5px solid red" class="w3-round">
   </div>
   </div>
   <div class="buttons">
       <button onclick="window.open('PagLogin.php')">JÁ POSSUO CADASTRO</button>
       <button onclick="window.location.href = 'PagClienteTipoCadastro.php'">QUERO ME CADASTRAR</button>
   </div>
   


   <!-- Header -->
<div class="w3-container" style="margin-top:80px" id="invictax">
  <h1 class="w3-xxxlarge w3-text-red"><b>Invicta-X.</b></h1>
  <hr style="width:225px;border:5px solid red" class="w3-round">
</div>
<!-- Photo grid (modal) -->
<div class="w3-row-padding">
   <div class="w3-half">
      <img src="imagens/caminhao4.jpg" style="width:100%" onclick="onClick(this)" alt="cm1">
      <img src="imagens/caminhao3.jpg" style="width:100%" onclick="onClick(this)" alt="cm2">
      <img src="imagens/caminhao1.png" style="width:100%" onclick="onClick(this)" alt="cm3">
   </div>
   <div class="w3-half">
      <img src="imagens/caminhao4.jpg" style="width:100%" onclick="onClick(this)" alt="cm4">
      <img src="imagens/caminhao3.jpg" style="width:100%" onclick="onClick(this)" alt="cm5">
      <img src="imagens/caminhao1.png" style="width:100%" onclick="onClick(this)" alt="cm6">
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
   <hr style="width:185px;border:5px solid red" class="w3-round">
   <h3>A Invicta surgiu, devido a uma sociedade desfeita em outra empresa na qual a mesma também era do ramo de transportes, visto isto, para dar seguimento ao trabalho dentro da mesma área, surgiu a Invicta X Transportes Ltda, na qual hoje atuamos em todo o território do Brasil, realizamos desembaraços de DTAS, trabalhamos com armazenagens de cargas e etc...</h3>
   <h3>Trabalhamos com transporte de cargas aéreas e marítimas. Contamos com uma equipe de 15 funcionários e uma frota de 20 carros entre fiorinos, sprinters, 710, cavalos mecânicos, muncks e carretas!!
   </h3>
</div>
<!-- Veiculos -->
<div class="w3-container" id="veiculos" style="margin-top:75px">
   <h1 class="w3-xxxlarge w3-text-red"><b>Veiculos.</b></h1>
   <hr style="width:185px;border:5px solid red" class="w3-round">
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
<div class="w3-container" id="packages" style="margin-top:75px">
   <h1 class="w3-xxxlarge w3-text-red"><b>Nossa localização</b></h1>
   <hr style="width:385px;border:5px solid red" class="w3-round">
</div>
<div style="padding-left:6%;" class="w3-left">
   <div class="w3-center">
      <ul class="w3-ul w3-light-grey w3-right">
         <li class="w3-red w3-xlarge w3-padding-32">Mapa</li>
         <div style="width: 100%; margin: 0%;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.197240865866!2d-43.27703718441968!3d-22.83219104095501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997bbeedb6abbb%3A0x81d7347085e9cebe!2sR.%20Beliz%C3%A1rio%20Pena%2C%20450%20-%20Penha%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021020-010!5e0!3m2!1spt-BR!2sbr!4v1606514206032!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
         </li>
      </ul>
   </div>
</div>
<div style="padding-left:6%;" class="w3-center">
   <div class="w3-center">
      <ul class="w3-ul w3-light-grey w3-left">
         <li class="w3-red w3-xlarge w3-padding-32">Sede</li>
         <div style="width: 100%; margin: 0%;">
            <img src="imagens/sede.png" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
         </div>
         </li>
      </ul>
   </div>
</div>
<!-- Contato -->
<div class="w3-container" id="contato" style="margin-top:75px">
   <h1 class="w3-xxxlarge w3-text-red"><b>Contato.</b></h1>
   <hr style="width:185px;border:5px solid red" class="w3-round">
   <h4>Gostou do nosso trabalho? Entre em contato!</h4>
</div>
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
   <p class="w3-right">xxxx <a href="" title="mudaraqui" target="_blank" class="w3-hover-opacity">Informações</a></p>
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
</body>
</html>