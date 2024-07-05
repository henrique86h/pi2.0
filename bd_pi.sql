-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/07/2024 às 02:26
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
  `pc` varchar(1000) NOT NULL,
  `trailer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_pi`
--

INSERT INTO `tb_pi` (`id`, `nome`, `descricao`, `banner`, `xbox`, `playstation`, `nintendo`, `pc`, `trailer`) VALUES
(11, 'The Last of Us 2', 'The Last of Us  é um jogo que conta uma historia sobre amor, confiança, ódio e vingança, com uma trama, personagens. Com detalhes incríveis o jogo impressiona com seus gráficos e jogabilidade.  ', '1jc13gwmn0n.jpg', '', 'playstation', '', 'pc', 'https://www.youtube.com/embed/7ksH7-9vWZ0?si=ew6bF2GrvzRdO6PN'),
(12, 'Elden Ring', 'Sous like', 'elden ring.jpg', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/E3Huy2cdih0?si=seRk07_RsXtwg0lh'),
(13, 'Death Stranding', 'Death Stranding, mais conhecido como \"walk simulator\"', 'death_stranding.jpg', '', 'playstation', '', 'pc', 'https://www.youtube.com/embed/oBtvax0jI4g?si=dM45DX0YAA20bo0s'),
(14, 'Dead Space 2', '', 'dead-space-2.jpg', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/z7Qy_4sWs3I?si=DjSw5lcsbmEzqH1x'),
(15, 'Red Dead Redenption 2', '', 'red-dead-redemption-2-hero-banner-03-ps4-us-07jun18.webp', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/gmA6MrX81z4?si=Qk-v_MgMsQeMCuh6'),
(16, 'Far Cry Primal', '', 'far-cry-primal.jpg', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/H3uYzQA_h18?si=JUK1EL4AINx5gHGR'),
(17, 'Call Of Duty Black Ops 2', '', 'COD-BO-2.jpg', 'xbox', 'playstation', 'nintendo', 'pc', 'https://www.youtube.com/embed/x3tedlWs1XY?si=twNdtyBkSwScZB5A'),
(18, 'Metal Gear Rising Revengeance', '', 'Metal Gear Rising.jpg', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/EMCkbDnaTDM?si=-xUZKgUHFbEZxjCj'),
(19, 'Tony Hawk’s™ Pro Skater™ 1 and 2', '', 'Tony hawks.jpg', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/awVubQVhtrE?si=h8V0QMdTTicXuFNs'),
(20, 'Call Of Duty Vanguard', '', 'VGD_SEE_THEM_RISE.jpg', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/OQ1CwPhE8KQ?si=TIZYuj6klElU1wpi'),
(21, 'Grand Theft Auto V ', '', 'Grand-theft-auto-v-banner.webp', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/QkkoHAzjnUs?si=fdWR_L9adb3D-mfV'),
(22, 'UNDERTALE', '', 'UNDERTALE.jfif', 'xbox', 'playstation', 'nintendo', 'pc', 'https://www.youtube.com/embed/1Hojv0m3TqA?si=vKlLcqGI7OzMuRGn'),
(23, 'Assassins Creed Rogue', '', 'AC Rogue.jfif', 'xbox', 'playstation', 'nintendo', 'pc', 'https://www.youtube.com/embed/7c9e_LUGHwo?si=pWb9vb0MBVh7LTcD'),
(24, 'TEKKEN 7', '', 'TEKKEN 7.png', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/kKLCwDg2JLA?si=4mU8QFZ68nwXTvBp'),
(25, 'The Witcher 3: Wild Hunt', '', 'The witcher.jfif', 'xbox', 'playstation', '', 'pc', 'https://www.youtube.com/embed/c0i88t0Kacs?si=oDkdrLn9z0svTXU5');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
