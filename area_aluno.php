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
            color: red;"
        }

        .white-text {
        color: white;
    }

    .white-hr {
        border-color: white;
    }
    

    </style>
    
</head>     
<body>

<div id="logo">
<img src="<?php echo 'Imagens/icons8-barra-de-peso-100.png' ?>" alt="logo">
</div>
<h3 class="text-center text-white pt-5" style="margin-top: -75px;">________________________________________</h3>
<br><br>

<h2 style='color:white;' >Seja bem-vindo a área do aluno!</h2><br><br>

<h5 style='color:green;' >Estes são os prifissionais selecionados para você:</h5>


<div class="white-text">
    <?php
    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $result_prof = "SELECT * FROM profissional";
    $resultado_profissionais = mysqli_query($conn, $result_prof);

    while($row_prof = mysqli_fetch_assoc($resultado_profissionais)){
        echo "Nome:  " . $row_prof['nome_prof']. "<br>"; 
        echo "Formação:  " . $row_prof['especialidade']. "<br>";
        echo "Atendimento Online:  " . $row_prof['opcao_atendimento'] . "<br>";
        echo "<hr class='white-hr'>"; // Linha separadora com cor branca
    }
    ?>
</div>


</body>
</html>