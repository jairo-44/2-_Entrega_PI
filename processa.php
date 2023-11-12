<?php

session_start();

include_once("conexao.php");

$nomeAluno = filter_input(INPUT_POST, 'nome_aluno', FILTER_SANITIZE_STRING);
$cpfAluno=filter_input(INPUT_POST, 'cpf_aluno', FILTER_SANITIZE_STRING);
$idadeAluno=filter_input(INPUT_POST, 'idade_aluno', FILTER_SANITIZE_STRING);
$sexoAluno=filter_input(INPUT_POST, 'sexo_aluno', FILTER_SANITIZE_STRING);
$enderecoAluno=filter_input(INPUT_POST, 'sexo_aluno', FILTER_SANITIZE_STRING);
$cidadeAluno=filter_input(INPUT_POST, 'cidade_aluno', FILTER_SANITIZE_STRING);
$estadoAluno=filter_input(INPUT_POST, 'estado_aluno', FILTER_SANITIZE_STRING);
$opcaoBusca_aluno=filter_input(INPUT_POST, 'opcao_busca', FILTER_SANITIZE_STRING);
$opcaoBusca2_aluno=filter_input(INPUT_POST, 'opcao_busca2', FILTER_SANITIZE_STRING);
$emagrecimento=filter_input(INPUT_POST, 'emagrecimento', FILTER_SANITIZE_STRING);
$ganho_de_massa=filter_input(INPUT_POST, 'ganho_massa', FILTER_SANITIZE_STRING);
$condiciona=filter_input(INPUT_POST, 'condicionamento', FILTER_SANITIZE_STRING);
$saude=filter_input(INPUT_POST, 'melhora_saude', FILTER_SANITIZE_STRING);
$Peso=filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_STRING);
$Altura=filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_STRING);
$Atividade_fisica=filter_input(INPUT_POST, 'atriv_fisic', FILTER_SANITIZE_STRING);
$Atividade_fisica2=filter_input(INPUT_POST, 'atriv_fisic2', FILTER_SANITIZE_STRING);
$Quant_ativ=filter_input(INPUT_POST, 'qtd_ativ', FILTER_SANITIZE_STRING);
$Probl_saude=filter_input(INPUT_POST, 'prob_saude', FILTER_SANITIZE_STRING);
$emailAluno=filter_input(INPUT_POST, 'email_aluno', FILTER_SANITIZE_STRING);
$senhaAluno=filter_input(INPUT_POST, 'senha_aluno', FILTER_SANITIZE_STRING);



$result_alunos = "INSERT INTO alunos (nome, cpf, idade, sexo, endereco, cidade, estado, busca_nutri, busca_personal, emagrecimento, massa, condionamento, saude, peso, altura, ativ_sim, ativ_nao, quant_ativ, prob_saude, email_aluno, senha_aluno) VALUES ('$nomeAluno','$cpfAluno','$idadeAluno','$sexoAluno','$enderecoAluno','$cidadeAluno','$estadoAluno','$opcaoBusca_alun','$opcaoBusca2_alun','$emagrecimento','$ganho_de_massa','$condiciona','$saude','$Peso','$Altura','$Atividade_fisica','$Atividade_fisica2','$Quant_ativ','$Probl_saude','$emailAluno','$senhaAluno')";

$resultado_alunos = mysqli_query($conn, $result_alunos);

if (mysqli_insert_id($conn)){
    $_SESSION['msg']="<h2 style='color:green;' >Cadastrado com sucesso!</h2>";
    header("Location: cadastro_aluno.php");
   
}else{
    $_SESSION['msg']="<h2 style='color:green;' >Não cadastrado!</h2>";
    header("Location: cadastro_aluno.php");
}


