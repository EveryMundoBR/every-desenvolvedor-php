-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2019 às 04:44
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep_cadastrados`
--

CREATE TABLE `cep_cadastrados` (
  `id` int(100) NOT NULL,
  `cep` varchar(10) COLLATE utf8_bin NOT NULL,
  `logradouro` varchar(120) COLLATE utf8_bin NOT NULL,
  `localidade` varchar(120) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cep_cadastrados`
--

INSERT INTO `cep_cadastrados` (`id`, `cep`, `logradouro`, `localidade`) VALUES
(6, '81480142', 'Rua TarcÃ­zio Pires da Silva', 'Curitiba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cep_cadastrados`
--
ALTER TABLE `cep_cadastrados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cep` (`cep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cep_cadastrados`
--
ALTER TABLE `cep_cadastrados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
