<?php
    include "cabecalho.php";
?>
<title>Invicta-X Transportes | Início</title>
<div id="tb_div" style="display: inline-block; width: 100%; background-color: #fff500;">
    <img style="float: right; width: 50%; object-fit: cover;" src="imagens/caminhao.jpg" alt="" />
    <div id="tbc_div" style="width: 50%; display: table; font-family: Helvetica, Arial, sans-serif;">
        <div style="display: table-cell; vertical-align: middle; padding: 0 50px; height: 100%;">
            <div style="font-size: 3.9vw; color: #161500;">
                <b>Sua carga está segura conosco</b>
            </div>
            <div style="padding-top: 20px; font-size: 2vw; color: #d23123;">
                Especialistas em cargas secas e containers.
                <div style="margin: 0; padding-top: 15px;">Cotações para<b> todo o Brasil</b>!</div>
            </div>
        </div>
    </div>
</div>

<div class="button">
    <h1 style="color: yellow;">SEJA BEM-VINDO AO INVICTA-X!</h1>
</div>
<div class="buttons">
    <button onclick="window.open('PagLogin.php')">JÁ POSSUO CADASTRO</button>
    <button onclick="window.location.href = 'PagClienteTipoCadastro.php'">QUERO ME CADASTRAR</button>
</div>

<div style="background-color: pink; height: 100%; min-height: 600px; width: 100%; margin: 0;">
    <div style="background-color: lightgreen; height: 265px; width: 100%; margin: 0;">
        <div id="divImg1" style="background-color: aqua; height: 100%; width: 80%; margin: 0 10%;"></div>
    </div>

    <div>
        <div>
            Contato Esquerda:
            <div>
                Contate-nos!
            </div>
        </div>
        <div>
            Contato Direita
            <div>
                Conteúdo Contatos
            </div>
        </div>
    </div>
</div>

<div style="background-color: red;" >
    <div style="height: 100%; min-height: 300px; width: 100%; margin: 0 25%;">
        <div style="background-color: purple; height: 100%; min-height: 300px; width: 25%; margin: 0;float:left;">

        </div>        
    
        <div style="background-color: orange; height: 100%; width: 50%; min-height: 300px; margin: 0;">
            <h2>Contate-nos!</h2>
        </div>
    </div>
</div>

<div class="branca" style="background-color: black; height: 100%; min-height: 450px; width: 100%;">
    <div style="text-align: center; padding-top: 70px;">
        <h1>NOSSA HISTÓRIA</h1>
        <div style="text-align: left; padding-top: 60px; width: 50%; margin: 0 25%;">
            <h2>
                Operando em todo território nacional, realizando desembaraços de DTAS, a INVICTA-X investe em equipamentos de ponta para servir, possibilitando mais agilidade e segurança. Nossa filosofia é criar e manter uma imensa parceria
                com os clientes, visando exceder expectativas pela qualidade dos serviços e pela rapidez da entrega. Para isso, investimos sempre em tecnologia e comprometimento pessoal, objetivando atingir padrões internacionais
                situando-nos entre as melhores. ta de 20 carros entre fiorinos, sprinters, 720 cavalos mecânicos, munck e carretas.
            </h2>
        </div>
    </div>
</div>
<div style="text-align: center; padding-top: 0px;">

    <div style="padding-top: 60px; width: 50%; margin: 0 25%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.197240865866!2d-43.27703718441968!3d-22.83219104095501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997bbeedb6abbb%3A0x81d7347085e9cebe!2sR.%20Beliz%C3%A1rio%20Pena%2C%20450%20-%20Penha%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2021020-010!5e0!3m2!1spt-BR!2sbr!4v1606514206032!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<script>
    let divElement1 = document.getElementById("tb_div");
    let heightTable = document.defaultView.getComputedStyle(divElement1).height;
    let divElement2 = document.getElementById("tbc_div");
    let heightCell = document.defaultView.getComputedStyle(divElement2).height;
    if (heightTable > heightCell) {
        document.getElementById("tbc_div").style.height = heightTable;
    } else {
        document.getElementById("tb_div").style.height = heightCell;
    }
</script>
<?php
    include "rodape.php";
?>