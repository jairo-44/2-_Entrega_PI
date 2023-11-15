<?php
include('conexao.php');

if (isset($_POST['username']) || isset($_POST['senha'])){


            
        $email=$mysqli->real_escape_string($_POST['username']);
        $senha=$mysqli->real_escape_string($_POST['senha']);
        

        $sql_code = "SELECT * FROM alunos WHERE email_aluno = '$email' AND senha_aluno = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade==1){

            $usuario=$sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id']=$usuario['id'];
            $_SESSION['nome']=$usuario['nome_aluno'];

            header("Location: area_aluno.php");


        }else{
            echo "<h6 style='color:yellow;'>Email ou senha inválidos!</h6>";
        }
       

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Login</title>

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

        h4, h5, h6 {
            text-align: center;
            color: red;"
        }

    </style>
    
</head>
<body>

<div id="logo">
<img src="<?php echo 'Imagens/icons8-barra-de-peso-100.png' ?>" alt="logo"> 
</div>
<h3 class="text-center text-white pt-5" style="margin-top: -75px;">____________________________________</h3>
<br><br>

    <div id="login">
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Já faz parte da nossa corrente?</h3>
                            <br><br>
                            <h4 class="text-center text-info">Entre</h4>
                            
                            <?php
                            
                                if (strlen($_POST['username'])==0){
                                    echo "<h5  text-align: center; style='color:red;' >Preencha seu e-mail!</h5>";
                                } else if (strlen($_POST['senha'])==0){
                                    echo "<h5 style='color:red;' >Preencha sua senha!</h5>";
                                } else {

                                }
                            ?>

                            
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha" class="text-info">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div id="btn_entrar">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                            </div>
                            <br><br>
                            <h3 class="text-center text-info">Ainda não faz parte?</h3><br>
                            <h3 class="text-center text-info">FIT-Connect</h3>
                            <p class="text-center text-info">Conectando a necessidade por saúde e bem-estar a quem entende do assunto. Faça seu cadastro e entre para a corrente do bem.</p>
                            <br>
                            <p class="text-center text-info">Clique aqui e saiba mais sobre a gente.</p>
                            <br>
                            <div id="register-link" class="text-right">
                                <h4 class="text-center text-info">Cadastra-se aqui.</h4>
                            </div>
                            <br><br>
                            <div id="redes">
                            <img src="<?php echo 'Imagens/icons8-whatsapp-48.png' ?>" alt="logo">
                            <img src="<?php echo 'Imagens/icons8-instagram-94.png' ?>" alt="logo">
                            <img src="<?php echo 'Imagens/icons8-facebook-48.png' ?>" alt="logo">                            
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>