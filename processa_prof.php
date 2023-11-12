<?php

session_start();

include_once("conexao_prof.php");

$opcaoProf = filter_input(INPUT_POST, 'opcao_prof', FILTER_SANITIZE_STRING);
$nomeProfissional = filter_input(INPUT_POST, 'nome_prof', FILTER_SANITIZE_STRING);
$cpfProfissional=filter_input(INPUT_POST, 'cpf_prof', FILTER_SANITIZE_STRING);
$sexoProfissional=filter_input(INPUT_POST, 'sexo_prof', FILTER_SANITIZE_STRING);
$enderecoProfissional=filter_input(INPUT_POST, 'endereco_prof', FILTER_SANITIZE_STRING);
$cidadeProfissional=filter_input(INPUT_POST, 'cidade_prof', FILTER_SANITIZE_STRING);
$estadoProfissional=filter_input(INPUT_POST, 'estado_prof', FILTER_SANITIZE_STRING);
$conselho_prof=filter_input(INPUT_POST, 'n_conselho', FILTER_SANITIZE_STRING);
$especialidade_prof=filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_STRING);
$especializacao1=filter_input(INPUT_POST, 'espe1', FILTER_SANITIZE_STRING);
$especializacao2=filter_input(INPUT_POST, 'espe2', FILTER_SANITIZE_STRING);
$especializacao3=filter_input(INPUT_POST, 'espe3', FILTER_SANITIZE_STRING);
$especializacao4=filter_input(INPUT_POST, 'espe4', FILTER_SANITIZE_STRING);
$op_atend=filter_input(INPUT_POST, 'opcao_atend', FILTER_SANITIZE_STRING);
$emailProf=filter_input(INPUT_POST, 'email_prof', FILTER_SANITIZE_STRING);
$senhaProf=filter_input(INPUT_POST, 'senha_prof', FILTER_SANITIZE_STRING);





$result_prof = "INSERT INTO profissional (opcao_prof, nome_prof, cpf_prof, sexo_prof, endereco_prof, cidade_prof, estado_prof, conselho, especialidade, especializacao1, especializacao2, especializacao3, especializacao4, opcao_atendimento, email_prof, senha_prof) VALUES ('$opcaoProf','$nomeProfissional','$cpfProfissional','$sexoProfissional','$enderecoProfissional','$cidadeProfissional','$estadoProfissional','$conselho_prof','$especialidade_prof','$especializacao1','$especializacao2','$especializacao3','$especializacao4','$op_atend','$emailProf','$senhaProf')";

$resultado_profi = mysqli_query($conn, $result_prof);

if (mysqli_insert_id($conn)){
    $_SESSION['msg']="<h2 style='color:green;' >Cadastrado com sucesso!</h2>";
    header("Location: cadastro_profissional.php");
   
}else{
    $_SESSION['msg']="<h2 style='color:green;' >Não cadastrado!</h2>";
    header("Location: cadastro_profissional.php");
}


