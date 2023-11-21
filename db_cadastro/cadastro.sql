-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Nov-2023 às 22:48
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `idade` int NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `estado` varchar(220) NOT NULL,
  `opcao_busca1` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `obj_aluno1` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `peso` int NOT NULL,
  `altura` int NOT NULL,
  `ativ_op` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quant_ativ` int NOT NULL,
  `prob_saude` varchar(220) NOT NULL,
  `email_aluno` varchar(220) NOT NULL,
  `senha_aluno` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `idade`, `sexo`, `endereco`, `cidade`, `estado`, `opcao_busca1`, `obj_aluno1`, `peso`, `altura`, `ativ_op`, `quant_ativ`, `prob_saude`, `email_aluno`, `senha_aluno`) VALUES
(28, 'José Medeiros Reis', '52565678922', 45, 'Masculino', 'Rua Tapajós, N256', 'Fortaleza ', 'Ceará', 'Personal treiner', 'Emagrecimento', 105, 180, 'sim', 2, 'Pressão Alta', 'medeiros@hotmail.com', '123456789'),
(27, 'Tanea Bezerra', '8877545821', 33, 'Feminino', 'Rua 10', 'Fortaleza', 'Ceará', 'Personal treiner', 'Ganho de massa muscular', 95, 170, 'sim', 1, 'Coração', 'tania@hotmail.com', '123456789'),
(26, 'Maria da Sila Moreira', '88877799955', 38, 'Masculino', 'Rua Tapajós,. N 25', 'Goiânia', 'Goiás', 'Personal treiner', 'Emagrecimento', 95, 170, 'sim', 2, 'Diabetes tipo 2', 'mario@hotmail.com', '123456'),
(25, 'Jairo Souza ', '88792452104', 28, 'Masculino', 'Rua Santos Silva, Qd 27 Lt 15', 'Fortaleza', 'Ceará', 'Personal treiner', 'Emagrecimento', 95, 175, 'sim', 2, 'Pressão Alta', 'jairo_3@gmail.com', '123456'),
(24, 'João José Firmino', '88899977766', 28, 'Masculino', 'Rua Tamandaré', 'Fortaleza ', 'Ceará', 'Personal treiner', 'Emagrecimento', 98, 185, 'sim', 1, 'Não tenho', 'joaojose@jose.com.br', '123456'),
(23, 'José Pereira Nascimento', '54678921312', 42, 'Masculino', 'Rua Trenembé, N555', 'Fortaleza ', 'Ceará', 'Personal treiner', 'Emagrecimento', 85, 165, 'sim', 2, 'Pressão alta e diabetes', 'nascimento@hotmail.com', '123456'),
(22, 'Josefina Andrade do Nascimento', '88952569874', 52, 'Feminino', 'Rua das Margaridas, N 256', 'Goiânia', 'Goiás', 'Personal treiner', 'Emagrecimento', 75, 152, 'sim', 2, 'Pressão alta', 'josefina@andrade.com.br', '123456'),
(21, 'Maria Rufina da Silva', '88899988877', 28, 'Feminino', 'Rua das Flores, N 425', 'Fortaleza', 'Ceará', 'Personal treiner', 'Emagrecimento', 80, 180, 'nao', 0, 'Pressão alta', 'maria@dasflores.com.br', '123456'),
(18, 'Antonio Soares', '99988877755', 95, 'masculino', 'Rua Cajazeiras', 'Fortaleza', 'Ceará', 'nutri', 'cond', 70, 170, 'sim', 10, 'Diabetes e Pressão', 'toinho@andrade.com.br', '111222333'),
(19, 'Marieta Soares', '99988877755', 95, 'masculino', 'Rua Cajazeiras', 'Fortaleza', 'Ceará', 'personal', 'saude', 70, 170, 'sim', 10, 'Diabetes e Pressão', 'toinho@andrade.com.br', '123456'),
(20, 'Gorete Aparecida Amansio', '5687953241', 38, 'Feminino', 'Rua do Carajas', 'Fortaleza', 'Ceará', 'Personal treiner', 'Ganho de massa muscular', 70, 170, 'sim', 8, 'Diabetes Pressão Alta', 'gorete@maria.com.br', '555666999'),
(29, 'Joana Maranhão da Silva', '88877755544', 45, 'Feminino', 'Rua das Magnólias', 'Fortaleza ', 'Ceará', 'Personal treiner', 'Emagrecimento', 85, 165, 'sim', 2, 'Pressão alta', 'joana@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

DROP TABLE IF EXISTS `profissional`;
CREATE TABLE IF NOT EXISTS `profissional` (
  `id_prof` int NOT NULL AUTO_INCREMENT,
  `opcao_prof` varchar(220) NOT NULL,
  `nome_prof` varchar(220) NOT NULL,
  `cpf_prof` varchar(220) NOT NULL,
  `sexo_prof` varchar(220) NOT NULL,
  `cidade_prof` varchar(220) NOT NULL,
  `estado_prof` varchar(220) NOT NULL,
  `conselho` varchar(220) NOT NULL,
  `especialidade` varchar(220) NOT NULL,
  `especializacao1` varchar(220) NOT NULL,
  `especializacao2` varchar(220) NOT NULL,
  `especializacao3` varchar(220) NOT NULL,
  `especializacao4` varchar(220) NOT NULL,
  `obs_prof` varchar(700) NOT NULL,
  `opcao_atendimento` varchar(220) NOT NULL,
  `email_prof` varchar(220) NOT NULL,
  `senha_prof` varchar(220) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`id_prof`, `opcao_prof`, `nome_prof`, `cpf_prof`, `sexo_prof`, `cidade_prof`, `estado_prof`, `conselho`, `especialidade`, `especializacao1`, `especializacao2`, `especializacao3`, `especializacao4`, `obs_prof`, `opcao_atendimento`, `email_prof`, `senha_prof`) VALUES
(1, 'psronal', 'Marcos Freire', '65465456622', 'masculino', 'Goiania', 'Goiás', '564654654', 'Educação Física', '', '', '', '', '', 'sim', '', ''),
(2, 'psronal', 'Maria Joaquina', '58587896522', 'feminino', 'São Paulo', 'SP', '65465465', 'Educação Física', '', '', '', '', '', 'sim', '', ''),
(3, 'nutri', 'Sophia Loren', '8645494654', 'feminino', 'Terezina', 'Piaui', '2147483647', 'Nutrição', '', '', '', '', '', 'sim', '', ''),
(4, 'psronal', 'Marina Silva', '8887779955', 'feminino', 'Goiania', 'Goias', '2147483647', 'Educação Física', '', '', '', '', '', 'nao', 'mariSilva@marina.com.br', '454877845'),
(5, 'nutri', 'Dona Maria', '11122233355', 'feminino', 'Goiania', 'Goiás', '56464654', 'Educação Física', '', '', '', '', '', 'sim', 'dona@hotmail.com', '2546875');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
