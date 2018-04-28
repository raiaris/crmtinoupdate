-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Abr-2018 às 04:41
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinodb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chamado`
--

CREATE TABLE `tb_chamado` (
  `id_chamado` int(11) NOT NULL,
  `nr_protocolo` int(11) DEFAULT NULL,
  `ds_obs_chamado` varchar(200) DEFAULT NULL,
  `vr_nivel_prioridade` int(11) DEFAULT NULL,
  `ds_situacao` varchar(45) DEFAULT NULL,
  `id_motivo_chamado` int(11) NOT NULL,
  `id_local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_chamado`
--

INSERT INTO `tb_chamado` (`id_chamado`, `nr_protocolo`, `ds_obs_chamado`, `vr_nivel_prioridade`, `ds_situacao`, `id_motivo_chamado`, `id_local`) VALUES
(1, 3553, 'Roof em Fuego', 3, 'Tá pegando fogo bicho', 3, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_chamado_fotos`
--

CREATE TABLE `tb_chamado_fotos` (
  `id_chamado` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentario`
--

CREATE TABLE `tb_comentario` (
  `id_comentario` int(11) NOT NULL,
  `ds_comentario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentario_chamado`
--

CREATE TABLE `tb_comentario_chamado` (
  `id_comentario` int(11) NOT NULL,
  `id_chamado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fotos`
--

CREATE TABLE `tb_fotos` (
  `id_foto` int(11) NOT NULL,
  `ds_camainho` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_local`
--

CREATE TABLE `tb_local` (
  `id_local` int(11) NOT NULL,
  `ds_local` varchar(200) DEFAULT NULL,
  `ds_qrcode` varchar(45) NOT NULL,
  `vr_peso_0` int(11) NOT NULL,
  `vr_peso_90` int(11) NOT NULL,
  `vr_peso_180` int(11) NOT NULL,
  `vr_peso_270` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_local`
--

INSERT INTO `tb_local` (`id_local`, `ds_local`, `ds_qrcode`, `vr_peso_0`, `vr_peso_90`, `vr_peso_180`, `vr_peso_270`) VALUES
(7, 'Banheiro', 'Bath and Beyond', 7, 8, 9, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_motivo_chamado`
--

CREATE TABLE `tb_motivo_chamado` (
  `id_motivo_chamado` int(11) NOT NULL,
  `ds_chamado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_motivo_chamado`
--

INSERT INTO `tb_motivo_chamado` (`id_motivo_chamado`, `ds_chamado`) VALUES
(3, 'Dilúvio no Banheiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nr_registro_academico` int(11) DEFAULT NULL,
  `nm_usuario` varchar(100) DEFAULT NULL,
  `ds_senha` varchar(45) DEFAULT NULL,
  `ds_tino_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nr_registro_academico`, `nm_usuario`, `ds_senha`, `ds_tino_perfil`) VALUES
(1, 35351515, 'Tonhao', 'tribe33', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_chamado`
--

CREATE TABLE `tb_usuario_chamado` (
  `id_usuario` int(11) NOT NULL,
  `id_chamado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario_comentario`
--

CREATE TABLE `tb_usuario_comentario` (
  `id_usuario` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chamado`
--
ALTER TABLE `tb_chamado`
  ADD PRIMARY KEY (`id_chamado`,`id_motivo_chamado`,`id_local`),
  ADD KEY `fk_tb_chamado_tb_motivo_chamado1_idx` (`id_motivo_chamado`),
  ADD KEY `fk_tb_chamado_tb_local1_idx` (`id_local`);

--
-- Indexes for table `tb_chamado_fotos`
--
ALTER TABLE `tb_chamado_fotos`
  ADD PRIMARY KEY (`id_chamado`,`id_foto`),
  ADD KEY `fk_tb_chamado_has_tb_fotos_tb_fotos1_idx` (`id_foto`),
  ADD KEY `fk_tb_chamado_has_tb_fotos_tb_chamado1_idx` (`id_chamado`);

--
-- Indexes for table `tb_comentario`
--
ALTER TABLE `tb_comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indexes for table `tb_comentario_chamado`
--
ALTER TABLE `tb_comentario_chamado`
  ADD PRIMARY KEY (`id_comentario`,`id_chamado`),
  ADD KEY `fk_tb_comentario_has_tb_chamado_tb_chamado1_idx` (`id_chamado`),
  ADD KEY `fk_tb_comentario_has_tb_chamado_tb_comentario1_idx` (`id_comentario`);

--
-- Indexes for table `tb_fotos`
--
ALTER TABLE `tb_fotos`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tb_local`
--
ALTER TABLE `tb_local`
  ADD PRIMARY KEY (`id_local`);

--
-- Indexes for table `tb_motivo_chamado`
--
ALTER TABLE `tb_motivo_chamado`
  ADD PRIMARY KEY (`id_motivo_chamado`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `tb_usuario_chamado`
--
ALTER TABLE `tb_usuario_chamado`
  ADD PRIMARY KEY (`id_usuario`,`id_chamado`),
  ADD KEY `fk_tb_usuario_has_tb_chamado_tb_chamado1_idx` (`id_chamado`),
  ADD KEY `fk_tb_usuario_has_tb_chamado_tb_usuario_idx` (`id_usuario`);

--
-- Indexes for table `tb_usuario_comentario`
--
ALTER TABLE `tb_usuario_comentario`
  ADD PRIMARY KEY (`id_usuario`,`id_comentario`),
  ADD KEY `fk_tb_usuario_has_tb_comentario_tb_comentario1_idx` (`id_comentario`),
  ADD KEY `fk_tb_usuario_has_tb_comentario_tb_usuario1_idx` (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comentario`
--
ALTER TABLE `tb_comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_local`
--
ALTER TABLE `tb_local`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_motivo_chamado`
--
ALTER TABLE `tb_motivo_chamado`
  MODIFY `id_motivo_chamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_chamado`
--
ALTER TABLE `tb_chamado`
  ADD CONSTRAINT `fk_tb_chamado_tb_local1` FOREIGN KEY (`id_local`) REFERENCES `tb_local` (`id_local`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_chamado_tb_motivo_chamado1` FOREIGN KEY (`id_motivo_chamado`) REFERENCES `tb_motivo_chamado` (`id_motivo_chamado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_chamado_fotos`
--
ALTER TABLE `tb_chamado_fotos`
  ADD CONSTRAINT `fk_tb_chamado_has_tb_fotos_tb_chamado1` FOREIGN KEY (`id_chamado`) REFERENCES `tb_chamado` (`id_chamado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_chamado_has_tb_fotos_tb_fotos1` FOREIGN KEY (`id_foto`) REFERENCES `tb_fotos` (`id_foto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_comentario_chamado`
--
ALTER TABLE `tb_comentario_chamado`
  ADD CONSTRAINT `fk_tb_comentario_has_tb_chamado_tb_chamado1` FOREIGN KEY (`id_chamado`) REFERENCES `tb_chamado` (`id_chamado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_comentario_has_tb_chamado_tb_comentario1` FOREIGN KEY (`id_comentario`) REFERENCES `tb_comentario` (`id_comentario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_usuario_chamado`
--
ALTER TABLE `tb_usuario_chamado`
  ADD CONSTRAINT `fk_tb_usuario_has_tb_chamado_tb_chamado1` FOREIGN KEY (`id_chamado`) REFERENCES `tb_chamado` (`id_chamado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_usuario_has_tb_chamado_tb_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_usuario_comentario`
--
ALTER TABLE `tb_usuario_comentario`
  ADD CONSTRAINT `fk_tb_usuario_has_tb_comentario_tb_comentario1` FOREIGN KEY (`id_comentario`) REFERENCES `tb_comentario` (`id_comentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_usuario_has_tb_comentario_tb_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
