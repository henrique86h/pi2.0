-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/06/2024 às 02:59
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_pi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pi`
--

CREATE TABLE `tb_pi` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `banner` varchar(1000) NOT NULL,
  `xbox` varchar(1000) NOT NULL,
  `playstation` varchar(1000) NOT NULL,
  `nintendo` varchar(1000) NOT NULL,
  `pc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_pi`
--

INSERT INTO `tb_pi` (`id`, `nome`, `descricao`, `banner`, `xbox`, `playstation`, `nintendo`, `pc`) VALUES
(1, 'Fortnite', 'Um jogo que ja foi bom, mas agr esta uma merda', 'https://static.wikia.nocookie.net/fortnite/images/d/d5/The_Wastelanders_%28Full%29_-_Loading_Screen_-_Fortnite.png/revision/latest/scale-to-width-down/1000?cb=20240524182251', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, 'fgcjc', 'fgjfj', '', '', '', '', ''),
(4, 'drhfnxf', 'dddddddd', '', 'xbox', '', 'nintendo', ''),
(5, 'aaaa', 'fffffffff', 'puma.jpg', '', 'playstation', 'nintendo', ''),
(6, 'ppppppppp', 'pppppppppppppp', 'adidas.png', '', '', '', 'pc');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_pi`
--
ALTER TABLE `tb_pi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_pi`
--
ALTER TABLE `tb_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
