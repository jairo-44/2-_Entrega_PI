<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Pagamento</title>

    <style>
        body {
            background-color: rgb(13, 1, 24);
            margin: 20px;
            padding: 8px;
        }
        #btn_entrar {
            display: flex;
            justify-content: center;
        }
        #redes {
            display: flex;
            justify-content: center;
            height: 50px;
        }
        #logo {
            display: flex;
            justify-content: space-between; 
        }
        #logo img {
            padding-left: 150px;
        }
        .logo-text {
            display: flex;
            align-items: center;
            color: #FFF;
            padding-right: 240px;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-container {
            border: 3px solid #30E691;
            height: 130px;
            margin-right: 30px;
        }
        .image-container img {
            height: 124px;
            width: auto;
        }
        .text-container {
            color: #FFF;
            max-width: 400px;
        }
        .section-container {
            max-width: 1050px;
        }
        .section {
            color: #FFF;
            margin-left: 150px;
            border-bottom: 4px solid #30E691;
        }
        .tabela-planos {
            color: #FFF;
            display: flex;
            justify-content: center;
        }
        .planos {
            padding-bottom: 30px;
            padding-left: 30px;
        }
        .icones-pequenos {
            max-width: 50px;
            margin: 10px;
        }
        .pagamentos {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pagamentos p {
            color: #FFF;
        }
        .btn1 {
            display: flex;
            justify-content: center;
        }
        .pagar-btn {
            border: none;
            border-radius: 5px;
            background-color: #30E691;
            cursor: pointer;
            padding: 8px 16px;
        }
        a, a:hover {
            text-decoration: none;
            color: #000;
        }
        p {
            margin-top: 1rem !important;
            margin-right: 30px;
            text-align: center;
        }

        #logo {
            display: flex;
            justify-content: center;
            align-items: center; 
        }
        #logo img {
            margin-right: 45px;
        }
        .logo-text {            
            color: #FFF;
            padding-right: 80px;
            margin-left: 45px;
            
        }     

        .voltar-container {
        text-align: right;
        margin: 20px 0 15; 
        }

        .voltar-link {
            display: block;
            margin-bottom: 80px;
        }

        .voltar-link h4 {
            margin: 0; 
            color: blue;
        }
    </style> 
</head>
<body>
    <!-- cabeçalho -->
    <div id="logo">
    <img src="<?php echo 'Imagens/icons8-barra-de-peso-100.png' ?>" alt="logo">   
    <h2 class="logo-text">Pagamento</h2>  
    </div>
    <br><br>

    

    <!-- imagem -->
    <div class="container">
        <div class="image-container">
        <img src="<?php echo 'Imagens/personal-trainer.jpg' ?>" alt="Imagem do profissional" style="max-width: 100%;">            
        </div>
        <div class="text-container">
            <p>Nome: Marcelo Alves do Santos</p>
            <p>Personal Trainer</p>
            <p>Avaliação: ★★★★ </p>
        </div>
    </div>
    <div class="voltar-container">
        <a href="area_do_aluno.php" class="voltar-link">
        <h4><img src="Imagens/voltar.png" alt="pag"> Voltar</h4>
        </a>
    </div>

    <!-- plano -->
    <div class="section-container">
        <h2 class="section">Plano</h2>
        <form>
            <table class="tabela-planos">
                <tr>
                    <td class="planos"><input type="radio" name="plano"></td>
                    <td class="planos">Pack:<br>Consulta Online<br>Plano de exercício com vídeos<br>Acompanhamento (6 meses)</td>
                    <td class="planos">Valor: R$600,00</td>
                </tr>
                <tr>
                    <td class="planos"><input type="radio" name="plano"></td>
                    <td class="planos">Pack:<br>Consulta Online<br>Plano de exercício com vídeos<br>Acompanhamento (1 mês)</td>
                    <td class="planos">Valor: R$250,00</td>
                </tr>
                <tr>
                    <td class="planos"><input type="radio" name="plano"></td>
                    <td class="planos">Plano de exercício com vídeos</td>
                    <td class="planos">Valor: R$180,00</td>
                </tr>
                <tr>
                    <td class="planos"><input type="radio" name="plano"></td>
                    <td class="planos">Plano de exercício com planilhas</td>
                    <td class="planos">Valor: R$80,00</td>
                </tr>
            </table>
        </form>
    </div>
    

    <!-- pagamento -->
    <div class="section-container">
        <h2 class="section">Forma de Pagamento</h2>
        <form>
            <div class="pagamentos">
                <table>
                    <tr>
                        <td><input type="radio" name="metodo_pagamento" id="cartao"></td>
                        <td><label for="cartao" style="color: white;">Cartão</label></td>
                        <td><img src="<?php echo 'Imagens/visa-cartao.png' ?>" alt="Visa" class="icones-pequenos"></td> 
                        <td><img src="<?php echo 'Imagens/master-cartao.png' ?>" alt="Master" class="icones-pequenos"></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="metodo_pagamento" id="pix"></td>
                        <td><label for="pix" style="color: white;">Pix</label></td>
                        <td><img src="<?php echo 'Imagens/pix-pag.png' ?>" alt="Pix" class="icones-pequenos"></td>                         
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="metodo_pagamento" id="boleto"></td>
                        <td><label for="boleto" style="color: white;">Boleto</label></td>
                        <td><img src="Imagens/boleto-pag.png" alt="Boleto" class="icones-pequenos"></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        <br><br>
        <div class="btn1">
            <a href="" class="pagar-btn">Pagar</a>
        </div>
    </div>
</body>
</html>
