-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2024 às 01:18
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
-- Banco de dados: `clube`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `listagem`
--

CREATE TABLE `listagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `data_de_adesao` date NOT NULL,
  `tipo_de_membresia` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `listagem`
--

INSERT INTO `listagem` (`id`, `nome`, `endereco`, `data_de_adesao`, `tipo_de_membresia`, `status`) VALUES
(8, 'Luan Graciano ', 'GENESIO VARGAS', '2023-02-05', 'premium', 'ativo'),
(10, 'Carlinho', 'cachoeirinha', '1992-06-26', 'normal', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `phone`, `email`, `name`, `password`) VALUES
(1, '34343434', 't@t.com', 'carlos', '$2y$10$NkyAQI0V929//puScMIW6.cXAGypnmHbGoPkZ2AXTX7HAuYQi5Sh.'),
(3, '34332424', 'luan@bol.com', 'Luan', '$2y$10$aP.gJYarHJRFzSGbh/yu..6859VO66IjT9YL71p6s8pf.fZ8Z7R4O'),
(4, '6666', 'tita@hh.com', 'tita', '$2y$10$qFMHlIrlcYIwdVbLaOFxiurg2VCFPVHSR8ipTouBBIv63xyRpvjG.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `listagem`
--
ALTER TABLE `listagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `listagem`
--
ALTER TABLE `listagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
