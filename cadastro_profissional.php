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
    
    <title>cadastro profissional</title>

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

    .custom-text2 {
        color: white;
    }

    .custom-margin {
        margin-bottom: 10px;
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
<h2 class="logo-text">Cadastro</h2>  
</div>

    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                       <form method="POST" action="processa_prof.php">
                            <h3 class="text-center custom-text custom-border2"></h3>
                            

                            <h4 class="text-center custom-text">Profissional</h4><br>
                            <br>
                            <?php
                            if (isset($_SESSION['msg']))
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg'] );
                            ?>

                            <div>
                                <label class="text-center custom-text">Qual sua área?</label>
                                <div>
                                    <select name="opcao_prof" id="opcao_prof" class="form-control">  
                                    <option value="ops">Escolha uma pção</option>                                      
                                        <option value="Nutricionista">Nutricionista</option>
                                        <option value="Personal treiner">Personal Trainer</option>
                                    </select>
                                </div>
                            </div><br>


                            <div class="form-group">
                                <input type="text" name="nome_prof" id="nome_prof" class="form-control" class="form-control" placeholder="Nome">
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" name="cpf_prof" id="cpf_prof" class="form-control" placeholder="CPF">
                                </div>
                                <div class="col">
                                    <select name="sexo_prof" id="sexo_prof" class="form-control">
                                        <option value="masculino">Sexo</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" name="cidade_prof" id="cidade_prof" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="col">
                                    <input type="text" name="estado_prof" id="estado_prof" class="form-control" placeholder="Estado">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" name="n_conselho" id="n_conselho" class="form-control" placeholder="Nº Conselho">
                                </div>
                                <div class="col">
                                    <input type="text" name="especialidade" id="especialidade" class="form-control" placeholder="Formação">
                                </div>
                            </div>    
                            
                            <div class="form-group">
                                <label class="text-center custom-text">Defina sua senha:</label>
                                <div class="mb-3">
                                    <input type="text" name="email_prof" id="email_prof" class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <input type="password" name="senha_prof" id="senha_prof" class="form-control" placeholder="Senha">
                                </div>
                            </div><br>                       
                        </form>


                        <form>                          
                            
                        <h5 class="text-left custom-text custom-border">Formação</h5>
                        <p class="text-left custom-text2 ">(clique na seta e escolha a imagem)</p>

                        <div class="form-group row custom-margin">
                            <div class="col-7">
                                <input type="text" name="form_academ" id="form_academ" class="form-control" placeholder="Formação">
                            </div>
                            <div class="col-2">
                            <label for="fileInput" class="form-control">
                                <span>&#9650;</span>
                                <input type="file" id="fileInput" style="display: none;">
                            </label>
                            </div>
                            <div class="col-2">
                                <button name="upload1" type="submit" class="btn btn-primary">Anexar</button>
                            </div>                            
                        </div><br>

                        <!-- Repetir o mesmo padrão para as especializações -->
                        <h5 class="text-left custom-text custom-border">Especializações</h5>

                        <div class="form-group row custom-margin">
                            <div class="col-7">
                                <input type="text" name="especializacao1" id="especializacao1" class="form-control" placeholder="Especialização 1">
                            </div>
                            <div class="col-2">
                            <label for="fileInput" class="form-control">
                                <span>&#9650;</span>
                                <input type="file" id="fileInput" style="display: none;">
                            </label>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Anexar</button>
                            </div>
                        </div>

                        <div class="form-group row custom-margin">
                            <div class="col-7">
                                <input type="text" name="especializacao2" id="especializacao2" class="form-control" placeholder="Especialização 2">
                            </div>
                            <div class="col-2">
                            <label for="fileInput" class="form-control">
                                <span>&#9650;</span>
                                <input type="file" id="fileInput" style="display: none;">
                            </label>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Anexar</button>
                            </div>
                        </div>

                        <div class="form-group row custom-margin">
                            <div class="col-7">
                                <input type="text" name="especializacao3" id="especializacao3" class="form-control" placeholder="Especialização 3">
                            </div>
                            <div class="col-2">
                            <label for="fileInput" class="form-control">
                                <span>&#9650;</span>
                                <input type="file" id="fileInput" style="display: none;">
                            </label>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Anexar</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <textarea name="observacoes_prof" id="observacoes_prof" class="form-control" rows="4" placeholder="Conte mais sobre você."></textarea>
                            </div>
                        </div><br>
                            
                            <h5 class="text-left custom-text custom-border">Atendimento on-line?</h5>

                            <div class="form-group">
                                
                            <div>
                                    <select name="opcao_atend" id="opcao_atend" class="form-control">  
                                    <option value="opcao_at" >Escolha uma pção</option>                                      
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                                </div><br>
            
                            
                            <h5 class="text-left custom-text custom-border">Termos de uso e contrato</h5>
                            <label class="custom-text">As informações por mim prestadas são verdadeiras  </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="check_info" id="check_info" value="check_info">
                                    <label class="form-check-label" for="check_info" style="color: white;"></label>
                                </div><br><br>

                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-secondary">Termo de Uso</button>
                            </div><br>

                            <label class="custom-text">Li e concordo com os termos de uso  </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="check_info2" id="check_info2" value="check_info2">
                                    <label class="form-check-label" for="check_info2" style="color: white;"></label>
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