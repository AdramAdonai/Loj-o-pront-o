-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08-Dez-2017 às 12:00
-- Versão do servidor: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adramfeliz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `preco`, `categoria`, `estoque`) VALUES
(1, 'Alfacezão', '210.00', 'Fruta', 1),
(2, 'Beringela', '100.00', 'Legume', 50),
(3, 'Tangerina', '100.00', 'Fruta', 0),
(4, 'Maçã', '2.87', 'Fruta', 0),
(5, 'Manga', '100.00', 'Fruta', 25),
(6, 'Tomate', '1.48', 'Fruta', 2),
(7, 'Cebola', '100.00', 'Hortaliça', 100),
(8, 'Couve', '100.00', 'Hortaliça', 3),
(9, 'Couve-flor', '101.00', 'Hortaliça', 7),
(16, 'Abóbora', '3.25', 'Fruta', 60),
(22, 'aaa', '1.00', 'Legume', 1),
(23, 'AAAAAAAAAAAAAAAAAAAAA', '4.00', 'Fruta', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
