-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2023 às 15:30
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
-- Estrutura da tabela `problemas`
--

CREATE TABLE `problemas` (
  `id` int(11) NOT NULL,
  `laboratório` text NOT NULL,
  `categoria` text NOT NULL,
  `software` text NOT NULL,
  `equipamento` text NOT NULL,
  `problema` text NOT NULL,
  `outro_problema` text NOT NULL,
  `mesa` int(3) NOT NULL,
  `situação` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `problemas`
--

INSERT INTO `problemas` (`id`, `laboratório`, `categoria`, `software`, `equipamento`, `problema`, `outro_problema`, `mesa`, `situação`) VALUES
(5, '2', 'Software', 'godot', '', 'Expirou a licença', '', 123, 1),
(6, '2', 'Software', 'godot', '', 'Expirou a licença', '', 123, 1),
(7, '4', 'Computador', '', '', 'Sem internet', '', 123, 1),
(8, '4', 'Equipamento', '', 'Ar-condicionado', 'Pingando', '', 0, 1),
(9, '6', 'Software', 'sla', '', 'Não foi instalado', '', 156, 1),
(10, '5', 'Outro', '', '', 'Não foi instalado', 'aconteceu algum problema aqui', 0, 1),
(11, '2', 'Outro', '', '', 'Não foi instalado', 'i', 0, 1),
(12, '2', 'Outro', '', '', 'Não foi instalado', 'oi', 0, 1),
(13, '3', 'Outro', '', '', '', 'sei n viu\r\n', 0, 1),
(14, '', '', '', '', '', '', 0, 1),
(15, '', '', '', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_softwares`
--

CREATE TABLE `tabela_softwares` (
  `id` int(100) NOT NULL,
  `software` varchar(100) NOT NULL,
  `lab1` bit(1) NOT NULL,
  `lab2` bit(1) NOT NULL,
  `lab3` bit(1) NOT NULL,
  `lab4` bit(1) NOT NULL,
  `lab5` bit(1) NOT NULL,
  `lab6` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela_softwares`
--

INSERT INTO `tabela_softwares` (`id`, `software`, `lab1`, `lab2`, `lab3`, `lab4`, `lab5`, `lab6`) VALUES
(1, 'Altium', b'0', b'0', b'1', b'0', b'1', b'1'),
(2, 'Android Studio', b'1', b'0', b'1', b'1', b'0', b'0'),
(3, 'Arduino', b'0', b'1', b'1', b'0', b'0', b'1'),
(4, 'Blender', b'1', b'0', b'1', b'0', b'0', b'0'),
(5, 'Gimp', b'1', b'1', b'1', b'0', b'1', b'0'),
(6, 'Processing', b'1', b'1', b'0', b'1', b'0', b'1'),
(7, 'Visual Studio Code', b'1', b'1', b'0', b'0', b'0', b'0');

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
-- Estrutura da tabela `tb_equipamentos`
--

CREATE TABLE `tb_equipamentos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `patrimonio` varchar(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `lab1` tinyint(1) NOT NULL,
  `lab2` tinyint(1) NOT NULL,
  `lab3` tinyint(1) NOT NULL,
  `lab4` tinyint(1) NOT NULL,
  `lab5` tinyint(1) NOT NULL,
  `lab6` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_equipamentos`
--

INSERT INTO `tb_equipamentos` (`id`, `modelo`, `patrimonio`, `fabricante`, `lab1`, `lab2`, `lab3`, `lab4`, `lab5`, `lab6`) VALUES
(1, 'projetor', '2885677', 'Epson', 1, 1, 0, 1, 1, 0),
(2, 'Ar-condicionar', '2345677', 'Philco', 0, 1, 0, 0, 1, 0);

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
('Dell', 'Dell optilex 780', 'intel core 2 QuadCPU 2.8GHz', '229', '4gb', 'ddr3-10600', '244GB', 'SSD', 'ADATA SU630', '500GB', 'HDD', 'ST500', 'Windows 10 pro', '19004', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_info_softwares`
--

CREATE TABLE `tb_info_softwares` (
  `id` int(100) NOT NULL,
  `software` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `licenca` varchar(100) NOT NULL,
  `versao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_info_softwares`
--

INSERT INTO `tb_info_softwares` (`id`, `software`, `categoria`, `licenca`, `versao`) VALUES
(1, 'Altium', 'Design', 'gratuita', '2.2.1.6'),
(2, 'Android Studio', 'IDE', 'gratuita', '2021.2.1'),
(3, 'Arduino', 'DEV', 'gratuita', '1.8.19'),
(4, 'Blender', 'Animação', 'gratuita', '3.3'),
(5, 'Gimp', 'Mídia', 'open source', '2.10'),
(6, 'Processing', 'IDE', 'gratuita', '3.5.4'),
(7, 'Visual Studio Code', 'Editor', 'gratuita', '');

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
('imac', 0, 20, 0, 0, 18, 87, 1),
('lenovo', 0, 25, 0, 34, 0, 0, 2),
('sansung', 0, 0, 0, 0, 0, 0, 7),
('Dell optilex 780', 17, 15, 15, 0, 0, 0, 16),
('Positivo D610', 0, 0, 0, 0, 0, 0, 17),
('imac 16,2', 25, 0, 0, 0, 0, 0, 18);

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
-- Índices para tabela `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tabela_softwares`
--
ALTER TABLE `tabela_softwares`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `tb_equipamentos`
--
ALTER TABLE `tb_equipamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_info_modelos`
--
ALTER TABLE `tb_info_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_info_softwares`
--
ALTER TABLE `tb_info_softwares`
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
-- AUTO_INCREMENT de tabela `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tabela_softwares`
--
ALTER TABLE `tabela_softwares`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT de tabela `tb_equipamentos`
--
ALTER TABLE `tb_equipamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_info_modelos`
--
ALTER TABLE `tb_info_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_info_softwares`
--
ALTER TABLE `tb_info_softwares`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_modelos`
--
ALTER TABLE `tb_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tb_modelos-bkp`
--
ALTER TABLE `tb_modelos-bkp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
