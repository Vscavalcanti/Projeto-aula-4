-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 11-Out-2024 às 23:32
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_comercio`
--
CREATE DATABASE IF NOT EXISTS `sistema_comercio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema_comercio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id_produto`, `nome_produto`, `preco`, `estoque`, `categoria`, `imagem`) VALUES
(2, 'Arroz 1Kg', '5.29', 7391, 'Cesta básica', 'https://superprix.vteximg.com.br/arquivos/ids/174487-600-600/Arroz-Tio-Joao-Branco-1kg.png'),
(3, 'Macarrão parafuso 400g', '2.25', 7893, 'Cesta básica', 'https://cdn.awsli.com.br/2500x2500/1775/1775051/produto/134340036/9a86c9269b.jpg'),
(4, 'Sabão de roupas líquido 700ml', '27.00', 303, 'Limpeza', 'https://m.media-amazon.com/images/I/61u9z7MCjHL._AC_UF1000,1000_QL80_.jpg'),
(5, 'Detergente 200ml', '1.69', 827, 'Limpeza', 'https://deskontao.agilecdn.com.br/13850_1.jpg'),
(6, 'Detergente 200ml', '1.69', 827, 'Limpeza', 'https://www.extrabom.com.br/uploads/produtos/original/2830_20171031092445_thumb_2830_DetergenteLimpolMaca500ml.jpg'),
(7, 'Esponja de limpeza geral', '0.89', 1053, 'Limpeza', 'https://a-static.mlcdn.com.br/450x450/esponja-brilux-premium-1-und/webglamour/10692341568/0b54459997df32334fdd14b9b7e03b33.jpeg'),
(8, 'Atum sólido 200g', '7.39', 290, 'Enlatados', 'https://m.media-amazon.com/images/I/51w+EqYRRhL._AC_UF894,1000_QL80_.jpg'),
(9, 'Maionese 150g', '4.80', 459, 'Molhos', 'https://m.media-amazon.com/images/I/61+z7uJeMnL._AC_UF1000,1000_QL80_.jpg'),
(10, 'Sazom legumes 80g', '3.45', 468, 'Temperos', 'https://redemix.vteximg.com.br/arquivos/ids/210959-1000-1000/7891132019403.jpg\n'),
(13, 'Leite em pó integral', '7.00', 1000, 'Cesta básica', 'https://www.itambe.com.br/portal/Images/Produto/3ditambeleiteempointegral400g1_full.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
