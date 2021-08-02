-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Ago-2020 às 00:15
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

CREATE DATABASE sitephp;
USE sitephp;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitephp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) DEFAULT NULL,
  `bd_dados` double DEFAULT NULL,
  `estrutura_dados` double DEFAULT NULL,
  `pgm_web` double DEFAULT NULL,
  `logica` double DEFAULT NULL,
  `calculo` double DEFAULT NULL,
  `eng_software` double DEFAULT NULL,
  `foto` varchar(40) DEFAULT 'aluno.jpg',
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome`, `bd_dados`, `estrutura_dados`, `pgm_web`, `logica`, `calculo`, `eng_software`, `foto`) VALUES
(1, 'Luiz', 9.5, 7.8, 8.1, 6.5, 7.2, 6.9, 'aluno.jpg'),
(2, 'Eliza Pereira', 8.5, 7.4, 7.9, 8.7, 5.7, 7.2, 'daisy.jpg'),
(9, 'Ana Almeida', 9, 9.2, 9.5, 9.7, 9.9, 10, 'daisy.jpg'),
(5, 'Tereza', 8, 8, 9, 4.7, 5.9, 6.8, 'aluno.jpg'),
(8, 'Maria', 7.5, 7.9, 9.5, 6.4, 6.7, 8.2, 'aluno.jpg'),
(10, 'Bruno Carlos de Alcantara', 8.3, 8.5, 9.3, 6.3, 9.3, 8.3, 'mario.png'),
(12, 'Carol Ferreira Dias', 6.8, 6.2, 9.1, 9.8, 7.5, 6.4, 'daisy.jpg'),
(13, 'Luana Soares', 8.1, 8.7, 9.5, 9.3, 7.9, 8, 'daisy.jpg'),
(18, 'JoÃ£o Vitor', 9.1, 8.3, 7.98, 8.1, 8.7, 9.5, '600879867c53364150e0fa4ac1d3ceeb.jpg'),
(16, 'Rita', 7, 6, 8.7, 7.2, 6.8, 9.3, 'aluno.jpg'),
(17, 'Sophia Monteiro', 7, 5, 8, 7, 9, 9.5, 'daisy.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'adm', 'adm123', 'adm_sitephp@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
