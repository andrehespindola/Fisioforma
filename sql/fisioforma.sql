-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Ago-2017 às 01:56
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `fisioforma`
--
CREATE DATABASE IF NOT EXISTS `fisioforma` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fisioforma`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `idade`, `cpf`, `telefone`, `email`, `senha`, `da_ta`) VALUES
(1, 'Andre Espindola', 16, '25023265801', '12991498039', 'andrehespindola@gmail.com', '44454545', '2017-08-17'),
(13, 'Andre Espindola', 16, '25023265802', '12991498039', 'andrehespindola@gmail.com', '111111111', '2017-08-10'),
(14, 'andre', 16, '25023265803', '12991498039', 'andrehespindola@gmail.com', '999999999', '2017-08-14'),
(16, 'andre', 16, '25023265804', '12991498039', 'andrehespindola@gmail.com', '123456789', '2017-08-01'),
(17, 'andre', 15, '25023265800', '12991498039', 'andrehespindola@gmail.com', '888888888', '2017-08-07'),
(19, 'Andre Espindola', 16, '12345678911', '12991498039', 'andre_espindola@hotmail.com', 'espindola', '2017-08-01'),
(20, 'kevin gonzaga', 18, '12345678911', '12991498039', 'kevin@gmail.com', '1234567890', '2017-08-16'),
(21, 'ana', 44, '12345678911', '12991498039', 'andrehespindola@gmail.com', '123456789', '2017-08-11'),
(22, 'tobby', 16, '12345678911', '12991498039', 'andrehespindola@gmail.com', '123456789', '2017-11-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cinesioterapia`
--

CREATE TABLE IF NOT EXISTS `cinesioterapia` (
  `nome` varchar(60) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cinesioterapia`
--

INSERT INTO `cinesioterapia` (`nome`, `idade`, `rg`, `endereco`, `cidade`, `estado`, `da_ta`, `hora`) VALUES
('Andre Espindola', 18, 123456789, 'rua almeida tavares 345', 'lorena', 'sp', '2017-11-02', '14:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eletroterapia`
--

CREATE TABLE IF NOT EXISTS `eletroterapia` (
  `nome` varchar(60) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eletroterapia`
--

INSERT INTO `eletroterapia` (`nome`, `idade`, `rg`, `endereco`, `cidade`, `estado`, `da_ta`, `hora`) VALUES
('andre henrique', 16, 123456789, 'rua almeida tavares 345', 'lorena', 'rj', '2017-08-24', '14:30:00'),
('Andre Espindola', 18, 123456789, 'rua almeida tavares 345', 'lorena', 'sp', '2017-11-02', '14:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fototerapia`
--

CREATE TABLE IF NOT EXISTS `fototerapia` (
  `nome` varchar(60) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fototerapia`
--

INSERT INTO `fototerapia` (`nome`, `idade`, `rg`, `endereco`, `cidade`, `estado`, `da_ta`, `hora`) VALUES
('andre henrique', 19, 123456789, 'rua almeida tavares 345', 'lorena', 'rj', '2017-11-02', '14:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hidroterapia`
--

CREATE TABLE IF NOT EXISTS `hidroterapia` (
  `nome` varchar(60) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hidroterapia`
--

INSERT INTO `hidroterapia` (`nome`, `idade`, `rg`, `endereco`, `cidade`, `estado`, `da_ta`, `hora`) VALUES
('andre henrique', 18, 123456789, 'rua almeida tavares 345', 'lorena', 'sp', '2017-11-02', '14:30:00'),
('Andre Espindola', 19, 123456789, 'rua almeida tavares 345', 'lorena', 'sp', '2017-10-02', '15:45:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pediatrica`
--

CREATE TABLE IF NOT EXISTS `pediatrica` (
  `nome` varchar(60) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pediatrica`
--

INSERT INTO `pediatrica` (`nome`, `idade`, `rg`, `endereco`, `cidade`, `estado`, `da_ta`, `hora`) VALUES
('andre henrique', 45, 123456789, 'rua almeida tavares 345', 'lorena', 'sp', '2017-11-02', '14:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `termoterapia`
--

CREATE TABLE IF NOT EXISTS `termoterapia` (
  `nome` varchar(60) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `da_ta` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `termoterapia`
--

INSERT INTO `termoterapia` (`nome`, `idade`, `rg`, `endereco`, `cidade`, `estado`, `da_ta`, `hora`) VALUES
('andre henrique', 19, 123456789, 'rua almeida tavares 345', 'lorena', 'mg', '2017-11-02', '14:30:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
