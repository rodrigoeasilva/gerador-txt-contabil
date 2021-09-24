-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2021 às 16:44
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contabilidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `balancete_mensal`
--

CREATE TABLE `balancete_mensal` (
  `conta_balMensal` int(11) NOT NULL,
  `saldoInicial` decimal(10,2) NOT NULL,
  `saldoFinal` decimal(10,2) NOT NULL,
  `credito` decimal(10,2) NOT NULL,
  `debito` decimal(10,2) NOT NULL,
  `dataatual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano_geral`
--

CREATE TABLE `plano_geral` (
  `subcodigoCNPJ` int(11) NOT NULL,
  `conta` varchar(20) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `indicadorTributacao` varchar(5) NOT NULL,
  `codigoLeiComplementar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `plano_geral`
--

INSERT INTO `plano_geral` (`subcodigoCNPJ`, `conta`, `descricao`, `indicadorTributacao`, `codigoLeiComplementar`) VALUES
(0, '', '', '', 0),
(2147483647, 'teste', 'pagamento', 'S', 10.15);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `balancete_mensal`
--
ALTER TABLE `balancete_mensal`
  ADD PRIMARY KEY (`conta_balMensal`);

--
-- Índices para tabela `plano_geral`
--
ALTER TABLE `plano_geral`
  ADD PRIMARY KEY (`subcodigoCNPJ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
