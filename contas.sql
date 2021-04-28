-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23/07/2019 às 17:24
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `00.001.18.04.19.1`
--

CREATE TABLE `00.001.18.04.19.1` (
  `codfabri` varchar(30) NOT NULL,
  `nomeala` char(25) NOT NULL,
  `tipoala` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `00.001.18.04.19.1`
--

INSERT INTO `00.001.18.04.19.1` (`codfabri`, `nomeala`, `tipoala`) VALUES
('000.001.1', 'oi', '1'),
('000.002.2', 'ta bao', '2'),
('000.003.3', 'mano', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `00.002.18.04.19.1`
--

CREATE TABLE `00.002.18.04.19.1` (
  `codfabri` varchar(30) NOT NULL,
  `nomeala` char(25) NOT NULL,
  `tipoala` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `00.002.18.04.19.1`
--

INSERT INTO `00.002.18.04.19.1` (`codfabri`, `nomeala`, `tipoala`) VALUES
('000.004.1', 'eu', '1'),
('000.005.2', 'so', '2'),
('000.006.3', 'foda', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `00.003.27.05.19.1`
--

CREATE TABLE `00.003.27.05.19.1` (
  `codfabri` varchar(30) NOT NULL,
  `nomeala` char(25) NOT NULL,
  `tipoala` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contas`
--

CREATE TABLE `contas` (
  `email` varchar(40) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `senha` char(25) NOT NULL,
  `cubomae1` varchar(40) NOT NULL,
  `cubomae2` varchar(40) NOT NULL,
  `cubomae3` varchar(40) NOT NULL,
  `cubomae4` varchar(40) NOT NULL,
  `cubomae5` varchar(40) NOT NULL,
  `cubonome1` varchar(25) NOT NULL,
  `cubonome2` varchar(25) NOT NULL,
  `cubonome3` varchar(25) NOT NULL,
  `cubonome4` varchar(25) NOT NULL,
  `cubonome5` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `contas`
--

INSERT INTO `contas` (`email`, `nome`, `senha`, `cubomae1`, `cubomae2`, `cubomae3`, `cubomae4`, `cubomae5`, `cubonome1`, `cubonome2`, `cubonome3`, `cubonome4`, `cubonome5`) VALUES
('d@d', 'Leandro de Meirelles', 'd', '00.001.18.04.19.1', '00.003.27.05.19.1', '00.002.18.04.19.1', '', '', 'se é loco', 'fai se fode', 'oi', '', ''),
('l@l', 'eslleriem de droanle', 'l', '00.002.18.04.19.1', '', '', '', '', 'ta me tirano ', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cubosmae`
--

CREATE TABLE `cubosmae` (
  `codigo` varchar(40) NOT NULL,
  `ativo` int(1) DEFAULT NULL,
  `codsecundario` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cubosmae`
--

INSERT INTO `cubosmae` (`codigo`, `ativo`, `codsecundario`) VALUES
('00.001.18.04.19.1', 1, NULL),
('00.002.18.04.19.1', 1, NULL),
('00.003.27.05.19.1', 1, NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `00.001.18.04.19.1`
--
ALTER TABLE `00.001.18.04.19.1`
  ADD UNIQUE KEY `codfabri` (`codfabri`),
  ADD UNIQUE KEY `codfabri_2` (`codfabri`);

--
-- Índices de tabela `00.002.18.04.19.1`
--
ALTER TABLE `00.002.18.04.19.1`
  ADD UNIQUE KEY `codfabri` (`codfabri`);

--
-- Índices de tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`,`senha`);

--
-- Índices de tabela `cubosmae`
--
ALTER TABLE `cubosmae`
  ADD UNIQUE KEY `codigo` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
