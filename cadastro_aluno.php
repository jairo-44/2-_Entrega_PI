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

    </style>
    
</head>     
<body>

<div id="logo">
<img src="icons8-barra-de-peso-100.png" alt="logo">
</div>
<h3 class="text-center text-white pt-5" style="margin-top: -75px;">________________________________________</h3>
<br><br>

    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form method="POST" action="processa.php">
                            <h3 class="text-center text-info">CADASTRO</h3>
                            <br>

                            <h4 class="text-center text-info">Aluno / Paciente</h4><br>
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
                                        <option value="masculino">Sexo</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
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
                            <label class="text-info">Defina sua senha:</label>
                                <input type="text" name="email_aluno" id="email_aluno" class="form-control" placeholder="Email">
                            </div>                            
                                <div>
                                    <input type="password" name="senha_aluno" id="senha_aluno" class="form-control" placeholder="Senha">
                                </div>                            
                            </div>
                            <br>
                            <h3 class="text-center text-white pt-5" style="margin-top: -75px;" >________________________________________</h3>
                            <h4 class="text-left text-info">O que você busca?</h4>

                            <div class="form-group">
                                <label class="text-info">Escolha uma opção:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="opcao_busca" id="opcao_busca" value="nutricionista_busca">
                                    <label class="form-check-label" for="nutricionista_busca" style="color: white;">Nutricionista</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="opcao_busca2" id="opcao_busca2" value="personal_trainer">
                                    <label class="form-check-label" for="personal_trainer_busca" style="color: white;">Personal Trainer</label>
                                </div>
                            </div><br>
                            <h3 class="text-center text-white pt-5" style="margin-top: -75px;" >________________________________________</h3>
                            <h4 class="text-left text-info">Qual o seu objetivo?</h4>

                            <div class="form-row">
                                <!-- Opções à esquerda -->
                                <div class="col">
                                    <div class="form-group">                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="emagrecimento" id="emagrecimento" value="emagrecimento">
                                            <label class="form-check-label" for="emagrecimento" style="color: white;">Emagrecimento</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ganho_massa" id="ganho_massa" value="ganho_massa">
                                            <label class="form-check-label" for="ganho_massa" style="color: white;">Ganho de massa muscular</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="condicionamento" id="condicionamento" value="condicionamento">
                                            <label class="form-check-label" for="condicionamento" style="color: white;">Condicionamento físico</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="melhora_saude" id="melhora_saude" value="melhora_saude">
                                            <label class="form-check-label" for="melhora_saude" style="color: white;">Melhora da saúde</label>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Observações à direita -->
                                <div class="col">
                                    <div class="form-group">                                        
                                        <textarea name="observacoes" id="observacoes" class="form-control" rows="4" placeholder="Escreva suas observações aqui..."></textarea>
                                    </div>
                                </div>
                            </div><br>
                            <h3 class="text-center text-white pt-5" style="margin-top: -75px;" >________________________________________</h3>
                            <h4 class="text-left text-info">Conte mais sobre você.</h4>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" name="peso" id="peso" class="form-control" placeholder="Peso">
                                </div>
                                <div class="col">
                                    <input type="text" name="altura" id="altura" class="form-control" placeholder="Altura">
                                </div>
                            </div>                        

                            <div class="form-group">
                                <label class="text-info">Já pratica atividade física?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ativ_fisic" id="ativ_fisic" value="ativ_fisic">
                                    <label class="form-check-label" for="ativ_fisic" style="color: white;">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ativ_fisic2" id="ativ_fisic2" value="ativ_fisic2">
                                    <label class="form-check-label" for="ativ_fisic2" style="color: white;">Não</label>
                                </div>
                                <div class="form-group">
                                    <label class="text-info">Qunatas vezes na semana?</label>
                                    <div class="form-check form-check-inline">
                                        <input type="number" name="qtd_ativ" id="qtd_ativ" class="form-control col-3">
                                    </div> 
                                    <br><br>
                                    <div class="form-group">
                                        <label class="text-info">Algum problema de  saúde?</label>
                                        <div class="form-check form-check-inline">
                                            <input type="text" name="prob_saude" id="prob_saude" class="form-control col-50" placeholder="Qual?">
                                        </div>                              
                                </div><br>                             
                            </div>
                            <h3 class="text-center text-white pt-5" style="margin-top: -75px;" >________________________________________</h3>

                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-secondary">Termo de Uso</button>
                            </div><br>

                            <label class="text-info">Li e concordo com os termos de uso  </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ativ_fisic" id="ativ_fisic" value="ativ_fisic">
                                    <label class="form-check-label" for="ativ_fisic" style="color: white;"></label>
                                </div><br><br>


                                <input type="submit" value="Enviar Formulário">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>