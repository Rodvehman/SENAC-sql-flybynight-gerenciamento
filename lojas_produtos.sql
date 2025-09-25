-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/09/2025 às 20:14
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
-- Banco de dados: `flybynight_rodrigo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `lojas_produtos`
--

CREATE TABLE `lojas_produtos` (
  `loja_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lojas_produtos`
--

INSERT INTO `lojas_produtos` (`loja_id`, `produto_id`, `estoque`) VALUES
(1, 2, 10),
(4, 1, 5),
(4, 2, 3),
(4, 3, 30);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `lojas_produtos`
--
ALTER TABLE `lojas_produtos`
  ADD PRIMARY KEY (`loja_id`,`produto_id`),
  ADD KEY `produto_id` (`produto_id`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `lojas_produtos`
--
ALTER TABLE `lojas_produtos`
  ADD CONSTRAINT `lojas_produtos_ibfk_1` FOREIGN KEY (`loja_id`) REFERENCES `lojas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lojas_produtos_ibfk_2` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
