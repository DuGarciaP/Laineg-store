-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2019 às 02:54
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `carrinho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho_cupom`
--

CREATE TABLE `carrinho_cupom` (
  `cupom_id` int(11) NOT NULL,
  `cupom_titulo` varchar(255) NOT NULL,
  `cupom_desconto` int(11) NOT NULL,
  `cupom_inicio` datetime NOT NULL,
  `cupom_final` datetime NOT NULL,
  `cupom_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho_cupom`
--

INSERT INTO `carrinho_cupom` (`cupom_id`, `cupom_titulo`, `cupom_desconto`, `cupom_inicio`, `cupom_final`, `cupom_status`) VALUES
(1, 'DESCONTO10', 10, '2017-01-20 00:00:00', '2017-01-31 00:00:00', 2),
(2, 'VALE50', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho_pedidos`
--

CREATE TABLE `carrinho_pedidos` (
  `pedido_id` int(11) NOT NULL,
  `pedido_produto` int(11) NOT NULL,
  `pedido_quantidade` int(11) NOT NULL,
  `pedido_preco` decimal(10,2) NOT NULL,
  `pedido_valor_total` decimal(10,2) NOT NULL,
  `pedido_cliente` varchar(255) NOT NULL,
  `pedido_data` datetime NOT NULL,
  `pedido_sessao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho_pedidos`
--

INSERT INTO `carrinho_pedidos` (`pedido_id`, `pedido_produto`, `pedido_quantidade`, `pedido_preco`, `pedido_valor_total`, `pedido_cliente`, `pedido_data`, `pedido_sessao`) VALUES
(1537, 1, 1, '32.00', '32.00', '', '2019-12-01 05:00:23', 44607),
(1538, 1, 1, '32.00', '32.00', '', '2019-12-01 05:00:32', 44607),
(1539, 2, 1, '30.00', '30.00', '', '2019-12-01 05:18:41', 45114),
(1540, 2, 1, '30.00', '30.00', '', '2019-12-01 05:18:55', 45114),
(1541, 1, 1, '32.00', '32.00', '', '2019-12-01 05:25:07', 47808),
(1542, 1, 1, '32.00', '32.00', '', '2019-12-01 05:41:03', 17911),
(1543, 1, 1, '32.00', '32.00', '', '2019-12-01 05:41:14', 17911),
(1544, 2, 1, '30.00', '30.00', '', '2019-12-01 05:50:08', 28323),
(1545, 2, 1, '30.00', '30.00', '', '2019-12-01 05:50:21', 28323),
(1546, 1, 1, '32.00', '32.00', '', '2019-12-01 05:59:48', 97930),
(1547, 1, 1, '32.00', '32.00', '', '2019-12-01 05:59:59', 97930),
(1548, 2, 1, '35.00', '135.00', '', '2019-12-02 02:32:34', 4549),
(1549, 6, 1, '50.00', '135.00', '', '2019-12-02 02:32:34', 4549),
(1550, 3, 1, '50.00', '135.00', '', '2019-12-02 02:32:34', 4549),
(1551, 2, 1, '35.00', '135.00', '', '2019-12-02 02:32:46', 4549),
(1552, 6, 1, '50.00', '135.00', '', '2019-12-02 02:32:46', 4549),
(1553, 3, 1, '50.00', '135.00', '', '2019-12-02 02:32:46', 4549),
(1554, 2, 1, '35.00', '135.00', '', '2019-12-02 02:33:42', 4549),
(1555, 6, 1, '50.00', '135.00', '', '2019-12-02 02:33:43', 4549),
(1556, 3, 1, '50.00', '135.00', '', '2019-12-02 02:33:43', 4549),
(1557, 2, 1, '35.00', '135.00', '', '2019-12-02 02:33:54', 4549),
(1558, 6, 1, '50.00', '135.00', '', '2019-12-02 02:33:54', 4549),
(1559, 3, 1, '50.00', '135.00', '', '2019-12-02 02:33:54', 4549),
(1560, 2, 1, '35.00', '135.00', '', '2019-12-02 02:35:59', 4549),
(1561, 6, 1, '50.00', '135.00', '', '2019-12-02 02:35:59', 4549),
(1562, 3, 1, '50.00', '135.00', '', '2019-12-02 02:35:59', 4549),
(1563, 2, 1, '35.00', '135.00', '', '2019-12-02 02:36:16', 4549),
(1564, 6, 1, '50.00', '135.00', '', '2019-12-02 02:36:16', 4549),
(1565, 3, 1, '50.00', '135.00', '', '2019-12-02 02:36:16', 4549),
(1566, 2, 1, '35.00', '135.00', '', '2019-12-02 02:38:45', 4549),
(1567, 6, 1, '50.00', '135.00', '', '2019-12-02 02:38:45', 4549),
(1568, 3, 1, '50.00', '135.00', '', '2019-12-02 02:38:45', 4549),
(1569, 2, 1, '35.00', '135.00', '', '2019-12-02 02:39:49', 4549),
(1570, 6, 1, '50.00', '135.00', '', '2019-12-02 02:39:49', 4549),
(1571, 3, 1, '50.00', '135.00', '', '2019-12-02 02:39:49', 4549),
(1572, 1, 1, '35.00', '35.00', '', '2019-12-02 02:41:54', 53915),
(1573, 1, 1, '35.00', '35.00', '', '2019-12-02 02:42:03', 53915),
(1574, 1, 1, '35.00', '135.00', '', '2019-12-02 02:48:13', 47101),
(1575, 3, 1, '50.00', '135.00', '', '2019-12-02 02:48:13', 47101),
(1576, 6, 1, '50.00', '135.00', '', '2019-12-02 02:48:13', 47101),
(1577, 1, 1, '35.00', '135.00', '', '2019-12-02 02:49:34', 37562),
(1578, 3, 1, '50.00', '135.00', '', '2019-12-02 02:49:34', 37562),
(1579, 6, 1, '50.00', '135.00', '', '2019-12-02 02:49:34', 37562);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho_produtos`
--

CREATE TABLE `carrinho_produtos` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(255) NOT NULL,
  `produto_preco` decimal(10,2) NOT NULL,
  `produto_quantidade` int(11) NOT NULL,
  `produto_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho_produtos`
--

INSERT INTO `carrinho_produtos` (`produto_id`, `produto_nome`, `produto_preco`, `produto_quantidade`, `produto_img`) VALUES
(1, 'Caneca Laineg', '35.00', 100, 'caneca-laineg.jpg'),
(2, 'Caneca Perspectiva', '35.00', 100, 'caneca-tenteperspectiva.jpg'),
(3, 'Camiseta Preta', '50.00', 100, 'camiseta-preta.jpg'),
(4, 'Camiseta Clara', '50.00', 100, 'camiseta-clara.jpg'),
(6, 'Camiseta Laineg', '50.00', 100, 'camiseta-laineg.jpg'),
(7, 'Camiseta Perspectiva', '50.00', 100, 'camiseta-perspectiva.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho_temporario`
--

CREATE TABLE `carrinho_temporario` (
  `temporario_id` int(11) NOT NULL,
  `temporario_produto` int(11) NOT NULL,
  `temporario_quantidade` int(11) NOT NULL,
  `temporario_preco` decimal(10,2) NOT NULL,
  `temporario_data` datetime NOT NULL,
  `temporario_sessao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carrinho_temporario`
--

INSERT INTO `carrinho_temporario` (`temporario_id`, `temporario_produto`, `temporario_quantidade`, `temporario_preco`, `temporario_data`, `temporario_sessao`) VALUES
(14, 1, 2, '240.00', '2017-01-21 12:00:13', 41291),
(16, 5, 4, '480.00', '2017-01-21 12:14:24', 41291),
(17, 4, 2, '240.00', '2017-01-21 13:41:16', 41291),
(18, 3, 1, '120.00', '2017-01-21 14:12:17', 41291),
(24, 1, 1, '32.00', '2019-10-21 16:44:18', 48015),
(25, 3, 1, '50.00', '2019-10-21 16:50:44', 85150),
(26, 1, 1, '32.00', '2019-10-21 16:50:48', 85150),
(27, 1, 2, '64.00', '2019-10-21 19:40:38', 57927),
(28, 3, 1, '50.00', '2019-10-21 21:39:46', 57927),
(29, 1, 1, '32.00', '2019-10-21 23:52:39', 68255),
(30, 1, 1, '32.00', '2019-10-22 00:20:09', 7812),
(32, 1, 1, '32.00', '2019-10-22 16:12:56', 14989),
(34, 3, 1, '50.00', '2019-10-22 16:26:10', 69748),
(36, 1, 1, '32.00', '2019-10-24 04:06:52', 72789),
(38, 1, 1, '32.00', '2019-10-26 04:51:40', 40111),
(45, 1, 1, '32.00', '2019-11-01 12:24:58', 61615),
(46, 1, 1, '32.00', '2019-11-25 15:01:46', 59488),
(47, 1, 2, '64.00', '2019-11-25 15:08:35', 4200),
(48, 1, 1, '32.00', '2019-11-25 15:23:15', 22601),
(49, 2, 1, '30.00', '2019-11-25 15:24:57', 22601),
(52, 1, 1, '32.00', '2019-12-01 01:05:15', 3400),
(53, 2, 1, '30.00', '2019-12-01 01:05:18', 3400),
(54, 1, 1, '32.00', '2019-12-01 01:42:17', 18008),
(55, 1, 1, '32.00', '2019-12-01 02:29:36', 1152),
(56, 1, 3, '96.00', '2019-12-01 02:34:54', 34337),
(57, 1, 1, '32.00', '2019-12-01 04:53:36', 1652),
(58, 1, 1, '32.00', '2019-12-01 04:55:56', 48952),
(59, 1, 1, '32.00', '2019-12-01 05:00:18', 44607),
(60, 2, 1, '30.00', '2019-12-01 05:18:36', 45114),
(61, 1, 1, '32.00', '2019-12-01 05:25:03', 47808),
(62, 1, 1, '32.00', '2019-12-01 05:40:59', 17911),
(63, 2, 1, '30.00', '2019-12-01 05:50:03', 28323),
(64, 1, 1, '32.00', '2019-12-01 05:59:44', 97930),
(66, 2, 1, '35.00', '2019-12-02 02:31:46', 4549),
(67, 6, 1, '50.00', '2019-12-02 02:31:59', 4549),
(68, 3, 1, '50.00', '2019-12-02 02:32:03', 4549),
(69, 1, 1, '35.00', '2019-12-02 02:41:50', 53915),
(70, 1, 1, '35.00', '2019-12-02 02:47:54', 47101),
(71, 3, 1, '50.00', '2019-12-02 02:47:59', 47101),
(72, 6, 1, '50.00', '2019-12-02 02:48:02', 47101),
(73, 1, 1, '35.00', '2019-12-02 02:49:23', 37562),
(74, 3, 1, '50.00', '2019-12-02 02:49:26', 37562),
(75, 6, 1, '50.00', '2019-12-02 02:49:30', 37562);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `email` varchar(50) NOT NULL,
  `ddd` varchar(5) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `numero_casa` int(20) NOT NULL,
  `bairro` varchar(500) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `sobrenome`, `cpf`, `data_cadastro`, `email`, `ddd`, `telefone`, `endereco`, `numero_casa`, `bairro`, `cep`, `cidade`, `estado`, `pais`) VALUES
(1, 'canalti', '10f722b5984a49bce67d434464fae37e', 'Canal TI', '', '0', '2019-01-11 19:42:12', '', '0', '0', '', 0, '', '', '', '', ''),
(2, 'asde', '289dff07669d7a23de0ef88d2f7129e7', 'asd', '', '0', '2019-10-21 11:18:15', '', '0', '0', '', 0, '', '', '', '', ''),
(3, 'alecnicolas@hotmail.com', 'f68a3a461f73200184a2b5efae4cc561', '123', '', '0', '2019-10-21 11:18:20', '', '0', '0', '', 0, '', '', '', '', ''),
(4, 'randzinho', '202cb962ac59075b964b07152d234b70', 'rand', '', '0', '2019-10-21 11:19:00', '', '0', '0', '', 0, '', '', '', '', ''),
(11, 'testuser', '202cb962ac59075b964b07152d234b70', 'testnome', 'testsobrenome', '11111111111', '2019-10-29 18:44:53', 'test@test.com', '0', '0', '', 0, '', '', '', '', ''),
(12, 'testuser2', '202cb962ac59075b964b07152d234b70', 'testnome2', 'testsobrenome2', '22222222222', '2019-10-29 18:54:58', 'test@test.com', '0', '96854', '', 0, '', '', '', '', ''),
(13, 'user43', '202cb962ac59075b964b07152d234b70', 'nome', 'sobrenome', '222.222.222', '2019-10-29 18:57:15', 'test@test.com', '(018)', '99999-9999', '', 0, '', '', '', '', ''),
(14, 'usertest3', '202cb962ac59075b964b07152d234b70', 'nometest3', 'sobrenometest3', '999.999.999-99', '2019-10-29 19:48:51', 'test@test.com', '99', '99999-9999', 'rua teste', 9999, 'testebairro', '14999-999', 'cidadetest', 'estadotest', 'paistest'),
(15, 'user2', '25f9e794323b453885f5181f1b624d0b', 'Alec Nicolas', 'sobrenomene', '0000000000000', '2019-12-01 11:48:46', 'asdasd@sdfa.dsg', '88', '6966669696', 'ruasdasf', 23, 'bairro', '121344324', 'Araraquara', 'SÃ£o Paulo', 'Brasil');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho_cupom`
--
ALTER TABLE `carrinho_cupom`
  ADD PRIMARY KEY (`cupom_id`);

--
-- Índices para tabela `carrinho_pedidos`
--
ALTER TABLE `carrinho_pedidos`
  ADD PRIMARY KEY (`pedido_id`);

--
-- Índices para tabela `carrinho_produtos`
--
ALTER TABLE `carrinho_produtos`
  ADD PRIMARY KEY (`produto_id`);

--
-- Índices para tabela `carrinho_temporario`
--
ALTER TABLE `carrinho_temporario`
  ADD PRIMARY KEY (`temporario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho_cupom`
--
ALTER TABLE `carrinho_cupom`
  MODIFY `cupom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `carrinho_pedidos`
--
ALTER TABLE `carrinho_pedidos`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1580;

--
-- AUTO_INCREMENT de tabela `carrinho_produtos`
--
ALTER TABLE `carrinho_produtos`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `carrinho_temporario`
--
ALTER TABLE `carrinho_temporario`
  MODIFY `temporario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
