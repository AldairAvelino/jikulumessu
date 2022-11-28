-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 23:37
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jikulumessu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` enum('Administrator','Moderator') NOT NULL DEFAULT 'Administrator',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(22, 'admin', '12354@gmail.com', '1234', 'Administrator', '2022-11-23 19:24:20', '2022-11-23 19:24:20'),
(23, 'testeoooo', 'test@gm.co.ao', '1245', 'Administrator', '2022-11-23 19:54:25', '2022-11-23 19:54:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `bi` varchar(25) NOT NULL,
  `status` enum('Esperando','Desistiu','Atendido') NOT NULL DEFAULT 'Esperando',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `bi`, `status`, `created_at`, `updated_at`) VALUES
(8, 'name', '5.4154165', 'Desistiu', '2022-11-23 18:08:03', '2022-11-23 18:08:03'),
(9, 'teste-1', '41254', 'Desistiu', '2022-11-23 21:30:46', '2022-11-23 21:30:46'),
(10, 'teste-2', '', 'Atendido', '2022-11-23 21:31:10', '2022-11-23 21:31:10'),
(11, 'nome', '7890', 'Atendido', '2022-11-26 22:09:01', '2022-11-26 22:09:01'),
(12, 'absvcawus', '9876', 'Desistiu', '2022-11-26 22:25:13', '2022-11-26 22:25:13'),
(13, 'teste 02', '8793', 'Esperando', '2022-11-26 22:25:30', '2022-11-26 22:25:30'),
(14, 'user', '0123456789', 'Esperando', '2022-11-26 22:25:48', '2022-11-26 22:25:48'),
(15, 'testeX', '01254', 'Esperando', '2022-11-27 15:07:30', '2022-11-27 15:07:30'),
(16, 'testB', '123', 'Esperando', '2022-11-27 19:25:33', '2022-11-27 19:25:33'),
(17, 'admin', '4124', 'Desistiu', '2022-11-27 19:33:37', '2022-11-27 19:33:37'),
(18, 'admin', '158', 'Atendido', '2022-11-27 19:34:27', '2022-11-27 19:34:27'),
(19, 'admin', '58', 'Esperando', '2022-11-27 19:35:03', '2022-11-27 19:35:03'),
(21, 'Otchali', '00345', 'Esperando', '2022-11-28 20:11:09', '2022-11-28 20:11:09');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bi` (`bi`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
