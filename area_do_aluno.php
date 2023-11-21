<?php
session_start();
include_once("conexao.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Área do aluno</title>

    <style>
        body{background-color: rgb(13, 1, 24);
                margin: 20px;
                padding: 8px;
                
                
        }
        #btn_entrar{
            display: flex;
            justify-content: center;

        }

        #redes{
            display: flex;
            justify-content: center;
            height: 50px;
        }
        #logo{
            display: flex;
            justify-content: center;
            height: 150px;            
               
        }

        h2 {
            text-align: center;
            color: red;
        }

        .white-text {
        color: white;
    }

    .white-hr {
        border-color: white;
    }

    .custom-border {
        border-bottom: 2px solid #30E691;
    }

    .custom-border2 {
        border-top: 2px solid #30E691;
    }      

    .custom-text {
        color: white;
    }

    .profile-container {
        display: flex;
        align-items: center;
    }

    .profile-image {
        width: 100px; 
        height: 100px; 
        margin-right: 10px; 
        object-fit: cover; 
        border-radius: 50%; 
    }

    .profile-info {
        flex-grow: 1; 
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

    </style>
    
</head>     
<body>
    <div id="logo">
    <img src="<?php echo 'Imagens/icons8-barra-de-peso-100.png' ?>" alt="logo">   
    <h2 class="logo-text">Área do aluno</h2>  
    </div>
        <h4 class="text-center custom-text custom-border2" ></h4><br><br>          
       
        
        <div class="white-text">
    <a href="prof_indicado.php" style="display: block; margin-bottom: 80px;">
        <h4>
            <img src="Imagens/personal_trainer.png" alt="prof indicado"> Profissionais indicados
        </h4>
    </a>
    
    <a href="pagamento.php" style="display: block; margin-bottom: 80px;">
        <h4>
            <img src="Imagens/pagamento.png" alt="pag"> Pagamento
        </h4>
    </a>
    
    <a href="agendamento.php" style="display: block; margin-bottom: 80px;">
        <h4>
            <img src="Imagens/agendar.png" alt="agendar"> Agendamento
        </h4>
    </a>
    
    <a href="perfil_usuario.php" style="display: block; margin-bottom: 80px;">
        <h4>
            <img src="Imagens/perfil.png" alt="pag"> Seu perfil e desempenho
        </h4>
    </a>
</div>



</body>
</html>
