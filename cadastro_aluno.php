<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>cadastro aluno</title>

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
        .custom-border {
        border-bottom: 2px solid #30E691;
    }

    .custom-border2 {
        border-top: 2px solid #30E691;
    }      

    .custom-text {
        color: white;
    }

    </style>
    
</head>     
<body>

<div id="logo">
<img src="<?php echo 'Imagens/icons8-barra-de-peso-100.png' ?>" alt="logo">
</div>



    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form method="POST" action="processa.php">
                        
                            <h3 class="text-center custom-text custom-border2">CADASTRO</h3>
                                                   
                            
                            
                            <br>

                            <h4 class="text-center custom-text">Aluno / Paciente</h4><br>
                            <?php
                            if (isset($_SESSION['msg']))
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg'] );
                            ?>
                        
                            <div class="form-group">
                                <input type="text" name="nome_aluno" id="nome_aluno" class="form-control" class="form-control" placeholder="Nome">
                            </div>

                            <div class="form-group">                                
                                <input type="int" name="cpf_aluno" id="cpf_aluno" class="form-control" placeholder="CPF (sem ponto ou traço)">
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="int" name="idade_aluno" id="idade_aluno" class="form-control" placeholder="Idade">
                                </div>
                                <div class="col">
                                    <select name="sexo_aluno" id="sexo_aluno" class="form-control">
                                        <option value="Sexo">Sexo</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">                                
                                <input type="text" name="endereco_aluno" id="endereco_aluno" class="form-control" placeholder="Endereço">
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" name="cidade_aluno" id="cidade_aluno" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="col">
                                    <input type="text" name="estado_aluno" id="estado_aluno" class="form-control" placeholder="Estado">
                                </div>
                            </div><br>                         

                            <div class="form-group">   
                            <label class="custom-text">Defina sua senha:</label>
                                <input type="text" name="email_aluno" id="email_aluno" class="form-control" placeholder="Email">
                            </div>                            
                                <div>
                                    <input type="password" name="senha_aluno" id="senha_aluno" class="form-control" placeholder="Senha">
                                </div>                            
                            </div>
                            <br>
                            
                            <h5 class="text-left custom-text custom-border">O que você busca?</h5>

                            <div class="form-group">
                                <label class="custom-text">Escolha uma opção:</label>
                                <div class="col">
                                    <select name="opcao_busca" id="opcao_busca" class="form-control">
                                        <option value="Escolha">Escolha</option>
                                        <option value="Personal treiner">Personal treiner</option>
                                        <option value="Nutricionista">Nutricionista</option>                                        
                                    </select>
                                </div>
                            </div><br>
                            <h5 class="text-left custom-text custom-border">Qual seu objetivo?</h5>

                            <div class="form-row">
                                <!-- Opções à esquerda -->
                                <div class="col">
                                <div class="col">
                                    <select name="obj_aluno" id="obj_aluno" class="form-control">
                                        <option value="escol">Escolha</option>
                                        <option value="Emagrecimento">Emagrecimento</option>
                                        <option value="Ganho de massa muscular">Ganho de massa muscular</option>
                                        <option value="Condionamento físico">Concionamento físico</option>
                                        <option value="Melhora da saúde">Melhora da saúde</option>
                                    </select>
                                </div>
                                </div>
                            
                                <!-- Observações à direita -->
                                <div class="col">
                                    <div class="form-group">                                        
                                        <textarea name="observacoes" id="observacoes" class="form-control" rows="4" placeholder="Escreva suas observações aqui..."></textarea>
                                    </div>
                                </div>
                            </div><br>
                            <h5 class="text-left custom-text custom-border">Conte mais sobre você.</h5>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" name="peso" id="peso" class="form-control" placeholder="Peso">
                                </div>
                                <div class="col">
                                    <input type="text" name="altura" id="altura" class="form-control" placeholder="Altura">
                                </div>
                            </div><br>                        

                            <div class="form-group">
                                <label class="custom-text">Já pratica atividade física?</label>
                                <div class="form-check form-check-inline">
                                  <select name="prat_ativ_fisic" id="prat_ativ_fisic" class="form-control">
                                        <option value="esc">Escolha</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div><br><br>    
                                <div class="form-group">
                                    <label class="custom-text">Quantas vezes na semana?</label>
                                    <div class="form-check form-check-inline">
                                        <input type="number" name="qtd_ativ" id="qtd_ativ" class="form-control col-3">
                                    </div> 
                                    <br><br>

                                    <div class="form-group">
                                        <label class="custom-text">Algum problema de  saúde?</label>
                                        <div class="form-check form-check-inline">
                                            <input type="text" name="prob_saude" id="prob_saude" class="form-control col-50" placeholder="Qual?">
                                        </div>                              
                                </div><br>                             
                            </div>
                            <h5 class="text-left custom-text custom-border">Termos de uso e contrato</h5>

                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-secondary">Termo de Uso</button>
                            </div><br>

                            <label class="custom-text">Li e concordo com os termos de uso  </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ativ_fisic" id="ativ_fisic" value="ativ_fisic">
                                    <label class="form-check-label" for="ativ_fisic" style="color: white;"></label>
                                </div><br><br>

                            <div style="text-align: center;">
                                <input type="submit" value="Enviar Formulário">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>