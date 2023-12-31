<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Agendamento</title>
    
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
        #subtitulo {
            margin-left: 1070px;
        }
        .subtitulo-text {
        color: white;
        font-size: 25px;
        margin-bottom: 10px;
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
        .agendamentos {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .agendamentos p {
            color: #FFF;
        }
        .btn1 {
            display: flex;
            justify-content: center;
        }
        .agendar-btn {
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

                #textoPag {
            text-align: right;
            padding-left: 130px; 
        }

            .textPagDesc {
                font-size: 25px;
                color: white;
                margin-bottom: 1px; /* Ajuste o espaçamento inferior conforme necessário */
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
    <h2 class="logo-text">Agedamento</h2>  
    </div>
    <div id="textoPag">
        <p class="textPagDesc">Agendar consultas - Planos de treinos - Vídeo-aulas</p>
        
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
            
        </div>
    </div>
    <div class="voltar-container">
        <a href="area_do_aluno.php" class="voltar-link">
            <h4><img src="Imagens/voltar.png" alt="pag"> Voltar</h4>
        </a>
    </div>
    <!-- agendamento -->
    <div class="section-container">
        <h2 class="section">Horários Disponíveis</h2>
        <form>
            <div class="horários"></div>
        
            <!-- Segunda-feira -->
            <fieldset style="text-align: left; color: white;">
                <legend style="font-size: 20px; padding-left: 150px;">Segunda-feira:
                    <input type="radio" name="dia" value="08:00" style="margin-left: 10px;"> 08:00
                    <input type="radio" name="dia" value="10:30" style="margin-left: 10px;"> 10:30
                    <input type="radio" name="dia" value="15:00" style="margin-left: 10px;"> 15:00
                    <input type="radio" name="dia" value="17:00" style="margin-left: 10px;"> 17:00
                </legend>
                <br>
                <!-- Terça-feira -->
                <legend style="font-size: 20px; padding-left: 150px;">Terça-feira:
                    <input type="radio" name="dia" value="09:00" style="margin-left: 40px;"> 09:00
                    <input type="radio" name="dia" value="12:30" style="margin-left: 10px;"> 12:30
                    <input type="radio" name="dia" value="14:30" style="margin-left: 10px;"> 14:30
                    <input type="radio" name="dia" value="17:00" style="margin-left: 10px;"> 17:00
                </legend>
                <br>
        
                <!-- Quarta-feira -->
                <legend style="font-size: 20px; padding-left: 150px;">Quarta-feira:
                    <input type="radio" name="dia" value="08:40" style="margin-left: 25px;"> 08:40
                    <input type="radio" name="dia" value="11:30" style="margin-left: 10px;"> 11:30
                    <input type="radio" name="dia" value="15:00" style="margin-left: 10px;"> 15:00
                    <input type="radio" name="dia" value="16:30" style="margin-left: 10px;"> 16:30
                </legend>
                <br>
        
                <!-- Quinta-feira -->
                <legend style="font-size: 20px; padding-left: 150px;">Quinta-feira:
                    <input type="radio" name="dia" value="10:30" style="margin-left: 25px;"> 10:30
                    <input type="radio" name="dia" value="12:00" style="margin-left: 10px;"> 12:00
                    <input type="radio" name="dia" value="15:30" style="margin-left: 10px;"> 15:30
                    <input type="radio" name="dia" value="17:00" style="margin-left: 10px;"> 17:00
                </legend>
                <br>
        
                <!-- Sexta-feira -->
                <legend style="font-size: 20px; padding-left: 150px;">Sexta-feira:
                    <input type="radio" name="dia" value="08:00" style="margin-left: 35px;"> 08:00
                    <input type="radio" name="dia" value="10:30" style="margin-left: 10px;"> 10:00
                    <input type="radio" name="dia" value="12:00" style="margin-left: 10px;"> 12:00
                    <input type="radio" name="dia" value="15:40" style="margin-left: 10px;"> 15:40
                </legend>
            </fieldset>
        </form>
    </div>
    <br><br><br>
  
 <!-- planos e treinos -->
 <div class="section-container">
    <h2 class="section">Planos de Treinos Disponíveis</h2>
    <div class="treinos">
        <table>
            <tr>
                <td>
                    <p style="color: white; font-size: 20px; text-align: left; margin-left: 150px;"><strong>Atenção!</strong> O prazo para o seu plano de treino estar pronto é de até 72 horas após a consulta. Caso não tenha optado pelo pack com consulta, aguarde até 72 horas para baixar o plano de treino.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: #30E691; font-size: 20px; text-align: left; margin-left: 150px;">
                        <strong>Seu plano de treino está pronto.</strong>
                        <input type="image" name="consultapdf" src="Imagens/pdf-icon.png" alt="Ícone PDF" style="width: 80px; margin-left: 10px;">
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: #30E691; font-size: 20px; text-align: left; margin-left: 150px;">
                    <strong>Assista a Videoaula.</strong>
                    <input type="image" name="consultapdf" src="Imagens/monitor-icon.png" alt="Ícone PDF" style="width: 90px; margin-left: 130px;">
                </td>
            </tr>
        </table>
    </div>
</div>
