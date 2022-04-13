-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 16-Fev-2022 às 15:39
-- Versão do servidor: 8.0.28-0ubuntu0.20.04.3
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdAgenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbContato`
--

CREATE TABLE `tbContato` (
  `idContato` int NOT NULL,
  `nomeContato` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefoneContato` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailContato` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fotoContato` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tbContato`
--

INSERT INTO `tbContato` (`idContato`, `nomeContato`, `telefoneContato`, `emailContato`, `fotoContato`) VALUES
(1, 'Cauã', '33456789', 'caua@gmail.com', 'WALLPAPER_LIVE_JMF_2021(1).png'),
(2, 'caua', '12345678', 'cauaa@gmail.com', 'WALLPAPER_LIVE_JMF_2021.png'),
(3, 'Gabriel', '85858585', 'gabi@gmail.com', ''),
(5, 'Leandro Costa', '8599199-9999', 'leandro@gmail.com', ''),
(13, 'joão', '84829000', 'joao@gmail', ''),
(14, 'pedro', '34678900', 'pedro@gmail.com', ''),
(15, 'Cauã', '12345678', 'caua@gmail.com', ''),
(16, 'a', '22', 'oiii@gmail.com', 'user7-128x128.jpg'),
(17, 'Elsa', '400028922', 'lerigoubusiness@outlook.com', 'user5-128x128.jpg'),
(18, 'Roberto Carlos', '(85) - 99239883', 'meuveidescongelou@hotmail.com', 'avatar2.png'),
(19, 'Luiz Fernando', '(85) - 99782322', 'soulindokkk@hotmail.com', ''),
(20, 'gato da gretchen', '(55) - 9982728', 'miauUoou@gmail.com', ''),
(21, 'prefeito Horizonte', '(85) - 9972727', 'prefeitooficial@outlook.com', ''),
(22, 'emo gotico', '(85) - 928393', 'trevasdor4@yahoo.com', ''),
(23, 'Calypso', '(15) - 928278', 'contatooficial@yahoo.com', ''),
(24, 'vei da lancha', '(85) - 8372769', 'dinheiroiate@hotmail.com', ''),
(25, 'Whinderson Nunes', '(85) - 9928374', 'Whindersonofc@yahoo.com', ''),
(27, 'aa', '8474', 'jfksd@gmail.com', ''),
(28, 'aa', '8474', 'jfksd@gmail.com', ''),
(29, 'aa', '8474', 'jfksd@gmail.com', ''),
(30, 'aa', '8474', 'jfksd@gmail.com', ''),
(31, 'Thainá Moreira ', '(85) 92918292', 'thainatopdemais@gmail.com', ''),
(32, 'Socorro Sálvame', '(15) 84928439', 'estouemperigo@yahoo.com', ''),
(33, 'Socorro Sálvame', '(15) 84928439', 'estouemperigo@yahoo.com', ''),
(34, 'Cauã', '8599999999', 'caua@gmail.com', ''),
(35, 'Cauã S', '(85)999999999', 'caua@gmail.com', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbContato`
--
ALTER TABLE `tbContato`
  ADD PRIMARY KEY (`idContato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbContato`
--
ALTER TABLE `tbContato`
  MODIFY `idContato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
