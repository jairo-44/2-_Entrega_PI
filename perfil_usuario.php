<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Perfil do Usuário</title>
    
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
            align-items: center;
            justify-content: space-between;
        }
        .foto-logo {
            padding-left: 150px;
        }
        .foto-usuario {
            width: 90px;
            margin-right: 5px;
            border-radius: 50%;
        }
        .logo-text {
            display: flex;
            align-items: center;
            color: #FFF;
            padding-right: 230px;
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
        .tabela-dados {
            color: #FFF;
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-around; 
        }
        .dados {
            padding-bottom: 15px;
        flex-basis: 48%;
        }
        .icones-pequenos {
            max-width: 50px;
            margin: 10px;
        }
        .garficos{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn1 {
            display: flex;
            justify-content: center;
        }
        .grafico-btn {
            border: none;
            border-radius: 5px;
            background-color: #30E691;
            cursor: pointer;
            padding: 8px 16px;
        }
        a, a:hover {
            text-decoration: none;
            color: #FFF;
        }
        p {
            margin-top: 1rem !important;
            margin-right: 30px;
            text-align: center;
        }

        #logo {
        text-align: center; 
        margin-top: 50px; 
        }
    
        #logo img {
            display: block; 
            margin: 0 auto 10px;
        }
        .logo-text {            
            color: #FFF;
            padding-right: 80px;
            margin: 10;
            
        }     

        .table-container {
        display: flex;
        justify-content: center;
        }

        .graficos {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .grafico-item {
            flex-basis: calc(50% - 20px); /* Ajuste conforme necessário */
            text-align: center;
            margin-bottom: 20px;
        }

        .grafico-item img {
            width: 200px;
            
        }

        .voltar-container {
        text-align: right;
        margin: 20px; 
        }

        .voltar-link {
            display: block;
            margin-bottom: 2px;
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
        <h2 class="logo-text">Área do aluno</h2>  
        </div>
    <br><br>

    <!-- plano -->
   
    
    <div class="voltar-container">
        <a href="area_do_aluno.php" class="voltar-link">
            <h4><img src="Imagens/voltar.png" alt="pag"> Voltar</h4>
        </a>
    </div>
    <div class="section-container">
        <h2 class="section">Dados</h2>
        <table class="tabela-dados">
            <tr>
                <td class="dados" style="color: #30E691;">Nome:</td>
                <td class="dados" style="color: white;">José Henrique Sobrinho</td>
            </tr>
            <tr>
                <td class="dados" style="color: #30E691;">Município:</td>
                <td class="dados" style="color: white;">Rio de Janeiro</td>
                <td class="dados" style="color: #30E691;">UF:</td>
                <td class="dados" style="color: white;">RJ</td>
            </tr>
            <tr>
                <td class="dados" style="color: #30E691;">Idade:</td>
                <td class="dados" style="color: white;">30 anos</td>
                <td class="dados" style="color: #30E691;">Altura:</td>
                <td class="dados" style="color: white;">1.80m</td>
                <td class="dados" style="color: #30E691;">Peso:</td>
                <td class="dados" style="color: white;">105kg</td>
            </tr>
            <tr>
                <td class="dados" style="color: #30E691;">Taxa de Metabolismo Basal:</td>
                <td class="dados" style="color: white;">1916 kcal</td>
            </tr>
            <tr>
                <td class="dados" style="color: #30E691;">Status (IMC):</td>
                <td class="dados" style="color: white;">Sobrepeso</td>
            </tr>
        </table>
        <div class="btn1">
            <a href="" class="grafico-btn" style="color: #000;">Imprimir Relatório Completo</a>
        </div>
    </div>
    <br><br>

    <!-- gráficos -->
    <div class="section-container">
        <h2 class="section">Gráficos de Desempenho</h2>
        <div class="table-container">
    <table class="graficos" style="color: white;">
    <tr>
        <td class="grafico-item">
            <span></span>
            Peso
            <br>
            <input type="image" name="Grafico-peso" src="Imagens/grafico-peso.png" alt="GraficoPeso">
        </td>
        <td class="grafico-item">
            <span></span>
            Massa Muscular
            <br>
            <input type="image" name="Grafico-muscular" src="Imagens/grafico-muscular.png" alt="GraficoMusucular">
        </td>
    </tr>
    <tr>
        <td class="grafico-item">
            <span></span>
            Gordura Corporal
            <br>
            <input type="image" name="grafico-corporal" src="Imagens/grafico-corporal.png" alt="GraficoCorporal">
        </td>
        <td class="grafico-item">
            <span></span>
            Gordura Visceral
            <br>
            <input type="image" name="grafico-visceral" src="Imagens/grafico-visceral.png" alt="GraficoVisceral">
        </td>
    </tr>
    <tr>
        <td class="grafico-item">
            <span></span>
            Taxa de Água Corporal
            <br>
            <input type="image" name="grafico-taxa" src="Imagens/grafico-taxa.png" alt="GraficoTaxa">
        </td>
        <td class="grafico-item">
            <span></span>
            Idade Metabólica
            <br>
            <input type="image" name="grafico-metabolica" src="Imagens/grafico-metabolica.png" alt="GraficoMeatabolica">
        </td>
    </tr>
</table>
        <br><br>
        
    </div>
    <div class="btn1">
            <a href="" class="grafico-btn" style="color: #000;">Imprimir Relatório Completo</a>
        </div>
</body>
</html>
