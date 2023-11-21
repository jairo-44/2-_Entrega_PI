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
        <br><br>

        <h2 style='color:white;' >Seja bem-vindo a área do aluno!</h2><br><br>

        <h5 style='color:white;' >Estes são os prifissionais selecionados para você:</h5><br><br>


<div class="white-text">
    <?php
    if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $result_prof = "SELECT * FROM profissional";
    $resultado_profissionais = mysqli_query($conn, $result_prof);

    while($row_prof = mysqli_fetch_assoc($resultado_profissionais)){
        $caminho_imagem = 'Imagens/' . $row_prof['cpf_prof'] . '.jpg'; //na pasta imagem, o nome da foto deve ser o CPF do profissional cadastrado no BD
        echo "<div class='profile-container'>";
        echo "<img src='{$caminho_imagem}' alt='{$row_prof['nome_prof']} Foto' class='profile-image'>"; 
        echo "<div class='profile-info'>";
        echo "Nome:  " . $row_prof['nome_prof']. "<br>";         
        echo "Formação:  " . $row_prof['especialidade']. "<br>";
        echo "Atendimento Online:  " . $row_prof['opcao_atendimento'] . "<br>";
        echo "</div>";
        
        // Adicionar o link para a página de pagamento com os parâmetros necessários
        echo "<a href='pagamento.html?nome={$row_prof['nome_prof']}&cpf={$row_prof['cpf_prof']}' class='add-button'>Adicionar</a>";
        
        echo "</div>";
        echo "<hr class='white-hr'>";
    }
    ?>
</div>


</body>
</html>
