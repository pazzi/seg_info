-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30/11/2022 às 20:09
-- Versão do servidor: 8.0.31
-- Versão do PHP: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `seg_info`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cartoes`
--

CREATE TABLE `cartoes` (
  `id` int NOT NULL,
  `titular` varbinary(112) DEFAULT NULL,
  `numero` varbinary(32) DEFAULT NULL,
  `validade` varbinary(16) DEFAULT NULL,
  `codigo_seguranca` varbinary(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cartoes`
--

INSERT INTO `cartoes` (`id`, `titular`, `numero`, `validade`, `codigo_seguranca`) VALUES
(2, 0x39f6043a7cebd81309cfca672edfdb8d, 0x8654dcc280d27777d6e835e1b1f016f1, 0x4fe77992060b81fe570815b47ca2b60a, 0xabc5500d3e40ae859e6a15b15bebd8f1),
(3, 0x4c243eca32cdcb4a6bd16b8ba8a7a32a, 0x8de0ae4425fb17b35e57ac5ad5e5d205, 0xdbc52e766f918f36336b7f5057638f2d, 0x657f8d711fde5b5d1b4664c816d2cdb0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` char(128) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `login`, `senha`, `nome`, `email`) VALUES
(3, 'leonice', '2e6f9b0d5885b6010f9167787445617f553a735f', 'leonice teste', 'leonice@uol.com.br'),
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador', 'adm@icpv.edu.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cartoes`
--
ALTER TABLE `cartoes`
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
-- AUTO_INCREMENT de tabela `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
