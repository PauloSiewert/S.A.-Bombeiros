-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2023 às 15:31
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `noar_teste2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorios`
--

CREATE TABLE `relatorios` (
  `n°_do_relatorio` int(11) NOT NULL,
  `id_preenchedor` int(11) DEFAULT NULL,
  `nome_preenchedor` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `data_preenchimento` timestamp NOT NULL DEFAULT current_timestamp(),
  `file_data` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `cpf`, `is_admin`, `is_active`) VALUES
(1, 'Administrador da Silva', '$2y$10$oSaOChhjnhth0DUS3JgAWeTe0MArralZjEylnarBGZVGeS9xSbjBq', '11111111111', 1, 1),
(2, 'Bombeiro da Silva', '$2y$10$qfB0NocK1Xo/URIQehv4De32ZVDOuV0gfKjC1TQo7TajJv3r01RB6', '22222222222', 0, 1),
(3, 'Jamal Thompson', '$2y$10$LSauriia2HA5jK7KT7.fteiVFJ3ZLLNB.HIrkn0K/RG.qr5j8p5cG', '64729467402', 0, 0),
(4, 'Dev C++', '$2y$10$fhrMe8njdYtJAm4J1SzTFet7x0QhNoQajeQZ/sSHit0bY5VrwJIPi', '333.333.333-33', 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`n°_do_relatorio`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `n°_do_relatorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
