-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2023 às 23:29
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inventario_labs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`id`, `email`, `senha`) VALUES
(1, 'suporte01@teste.com', 'senhatestesuporte1'),
(2, 'suporte02@teste.com', 'senhatestesuporte2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comp`
--

CREATE TABLE `tb_comp` (
  `id_comp` int(11) NOT NULL,
  `posicao` varchar(20) DEFAULT NULL,
  `fila` varchar(10) DEFAULT NULL,
  `patrimonio` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `mesa_patrimonio` varchar(100) DEFAULT NULL,
  `lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_comp`
--

INSERT INTO `tb_comp` (`id_comp`, `posicao`, `fila`, `patrimonio`, `modelo`, `ip`, `mesa_patrimonio`, `lab`) VALUES
(1, '212', '1', '12324', 'dell', '227.12', '12223', 1),
(2, '212', '0', '12323', 'imac', '227.12', '12223', 1),
(3, '312', '1', '12323', 'imac', '227.12', '12223', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_info_modelos`
--

CREATE TABLE `tb_info_modelos` (
  `fabricante` varchar(30) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `processador` varchar(150) NOT NULL,
  `cpu_mark` varchar(20) NOT NULL,
  `mem_capacidade` varchar(10) NOT NULL,
  `mem_tipo` varchar(50) NOT NULL,
  `disco1_capacidade` varchar(20) NOT NULL,
  `disco1_tipo` varchar(20) NOT NULL,
  `disco1_modelo` varchar(50) NOT NULL,
  `disco2_capacidade` varchar(20) NOT NULL,
  `disco2_tipo` varchar(20) NOT NULL,
  `disco2_modelo` varchar(50) NOT NULL,
  `so_nome` varchar(50) NOT NULL,
  `so_compilacao` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_info_modelos`
--

INSERT INTO `tb_info_modelos` (`fabricante`, `modelo`, `processador`, `cpu_mark`, `mem_capacidade`, `mem_tipo`, `disco1_capacidade`, `disco1_tipo`, `disco1_modelo`, `disco2_capacidade`, `disco2_tipo`, `disco2_modelo`, `so_nome`, `so_compilacao`, `id`) VALUES
('aaaaaa', 'cc', 'aa', 'aa', 'aa', 'aa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1),
('aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 2),
('bb', 'bb', 'bb', 'bb', 'bb', 'bb', 'bb', '', 'b', 'b', 'b', 'b', 'b', 'bb', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_modelos`
--

CREATE TABLE `tb_modelos` (
  `modelo` varchar(100) NOT NULL,
  `lab1` int(11) NOT NULL,
  `lab2` int(11) NOT NULL,
  `lab3` int(11) NOT NULL,
  `lab4` int(11) NOT NULL,
  `lab5` int(11) NOT NULL,
  `lab6` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_modelos`
--

INSERT INTO `tb_modelos` (`modelo`, `lab1`, `lab2`, `lab3`, `lab4`, `lab5`, `lab6`, `id`) VALUES
('imac', 28, 20, 0, 0, 18, 87, 1),
('lenovo', 0, 25, 0, 34, 0, 0, 2),
('sansung', 0, 0, 0, 0, 0, 0, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_modelos-bkp`
--

CREATE TABLE `tb_modelos-bkp` (
  `modelo` varchar(100) NOT NULL,
  `lab1` int(11) NOT NULL,
  `lab2` int(11) NOT NULL,
  `lab3` int(11) NOT NULL,
  `lab4` int(11) NOT NULL,
  `lab5` int(11) NOT NULL,
  `lab6` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_modelos-bkp`
--

INSERT INTO `tb_modelos-bkp` (`modelo`, `lab1`, `lab2`, `lab3`, `lab4`, `lab5`, `lab6`, `id`) VALUES
('imac', 21, 20, 0, 0, 17, 87, 1),
('lenovo', 0, 25, 0, 34, 0, 0, 2),
('dell', 14, 91, 0, 23, 0, 0, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_comp`
--
ALTER TABLE `tb_comp`
  ADD PRIMARY KEY (`id_comp`);

--
-- Índices para tabela `tb_info_modelos`
--
ALTER TABLE `tb_info_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_modelos`
--
ALTER TABLE `tb_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_modelos-bkp`
--
ALTER TABLE `tb_modelos-bkp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_comp`
--
ALTER TABLE `tb_comp`
  MODIFY `id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_info_modelos`
--
ALTER TABLE `tb_info_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_modelos`
--
ALTER TABLE `tb_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_modelos-bkp`
--
ALTER TABLE `tb_modelos-bkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
