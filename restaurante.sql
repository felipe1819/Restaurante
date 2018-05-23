-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2018 às 00:00
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
--

CREATE TABLE `bebida` (
  `idcardapio` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `litros` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bebida`
--

INSERT INTO `bebida` (`idcardapio`, `nome`, `litros`, `valor`, `img`) VALUES
(4, 'Vinho Tinto', '1 litro', '30,00', 'https://www.casadabebida.com.br/img/products/vinho-periquita-tinto_1_400.jpg'),
(5, 'vinho Branco', '2 litros', '100,00', 'https://www.casadabebida.com.br/img/products/vinho-periquita-tinto_1_400.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `idcardapio` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `porcao` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`idcardapio`, `nome`, `porcao`, `valor`, `img`) VALUES
(4, 'pastel', '4 pessoas', 'R$ 50,00', 'https://i2.wp.com/hi-mundim.com.br/wp-content/uploads/2017/11/hi-mundim-pastel-concurso.jpg?fit=690%2C460'),
(5, 'Pastel de Flango', '1 pessoa', '10 Real', 'https://i2.wp.com/hi-mundim.com.br/wp-content/uploads/2017/11/hi-mundim-pastel-concurso.jpg?fit=690%2C460');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `idreserva` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `q_pessoas` varchar(45) DEFAULT NULL,
  `horario` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`idreserva`, `nome`, `q_pessoas`, `horario`, `rg`, `cpf`, `telefone`) VALUES
(2, 'fulano', '4', '12:00am', '123456765', '12134567890', '33445566');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`idcardapio`);

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`idcardapio`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idreserva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bebida`
--
ALTER TABLE `bebida`
  MODIFY `idcardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `idcardapio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
