<?php
    include ('cabecalho.php')
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
            <h1>SEJA BEM-VINDO AO INVICTA-X!</h1>
            <button onclick="window.open('form_login.php')">JÁ POSSUO CADASTRO</button>
            <button onclick="window.location.href = 'escolha.php'">QUERO ME CADASTRAR</button>
        
<div style="background-color: pink;height:100%;min-height:600px; width:100%; margin:0;">
    <div style="background-color: lightgreen;height:265px; width:100%; margin:0;">
        <div id="divImg1" style="background-color:aqua;height:100%;width:80%;margin:0 10%;">
        </div>
    </div>
    
    <div>
        <div>
            Contato Esquerda margin:
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
    include ('rodape.php');
?>