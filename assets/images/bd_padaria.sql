-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2023 às 05:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_padaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL,
  `id_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome_categoria`, `id_funcionario`) VALUES
(1, 'paes', 1),
(2, 'bolos', 1),
(3, 'salgados', 1),
(4, 'folhados', 1),
(5, 'doces', 1),
(6, 'bebidas', 1),
(7, 'outros', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_lucro`
--

CREATE TABLE `controle_lucro` (
  `id_lucro` int(11) NOT NULL,
  `dia_lucro` date DEFAULT NULL,
  `valor_lucro` float DEFAULT NULL,
  `descricao_vendas` varchar(100) DEFAULT NULL,
  `id_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_produto` int(11) NOT NULL,
  `descricao_produto_estoque` varchar(100) NOT NULL,
  `quantidade_disponivel` int(11) DEFAULT NULL,
  `validade_lote` varchar(10) DEFAULT NULL,
  `tipo_produto` varchar(50) DEFAULT NULL,
  `medida_produto_estoque` varchar(10) DEFAULT NULL,
  `quantidade_minima_produto` int(11) DEFAULT NULL,
  `quantidade_maxima_produto` int(11) DEFAULT NULL,
  `ignorado` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_produto`, `descricao_produto_estoque`, `quantidade_disponivel`, `validade_lote`, `tipo_produto`, `medida_produto_estoque`, `quantidade_minima_produto`, `quantidade_maxima_produto`, `ignorado`, `id_funcionario`) VALUES
(1, 'farinha de trigo', 750, '10/12/2023', 'grão', 'grama', 500, 10000, 0, 1),
(2, 'açúcar', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(3, 'cacau em pó', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(4, 'fermento em pó', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(5, 'sal', 750, '10/12/2023', 'grão', 'grama', 500, 10000, 0, 1),
(6, 'bicarbonato de sódio', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(7, 'ovos', 10000, '10/12/2023', 'proteina', 'grama', 1, 10000, 0, 1),
(8, 'óleo', 10000, '10/12/2023', 'líquido', 'grama', 1, 10000, 0, 1),
(9, 'água', 10000, '10/12/2023', 'líquido', 'grama', 1, 10000, 0, 1),
(10, 'essência de chocolate', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(11, 'nozes', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(12, 'polvinho doce', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(13, 'queijo minas', 10000, '10/12/2023', 'laticínios', 'grama', 1, 10000, 0, 1),
(14, 'leite', 10000, '10/12/2023', 'laticínios', 'grama', 1, 10000, 0, 1),
(15, 'manteiga', 10000, '10/12/2023', 'laticínios', 'grama', 1, 10000, 0, 1),
(16, 'maçâ', 10000, '10/12/2023', 'fruta', 'grama', 1, 10000, 0, 1),
(17, 'biscoito maisena', 10000, '10/12/2023', 'biscoito', 'grama', 1, 10000, 0, 1),
(18, 'açúcar refinado', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(19, 'canela', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1),
(20, 'limão', 10000, '10/12/2023', 'fruta', 'grama', 1, 10000, 0, 1),
(21, 'leite condensado', 10000, '10/12/2023', 'creme', 'grama', 1, 10000, 0, 1),
(22, 'creme de leite', 10000, '10/12/2023', 'creme', 'grama', 1, 10000, 0, 1),
(23, 'baunilha', 10000, '10/12/2023', 'grão', 'grama', 1, 10000, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(100) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `bloco` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_funcionario`, `login`, `senha`, `bloco`) VALUES
(1, 'Marcos', 'admin', 'admin', NULL),
(2, 'marcio', 'admin2', 'admin2', 'Boa notie bruno'),
(3, 'marcio', 'admin2', 'admin2', NULL),
(4, 'leticia', 'admin3', 'admin3', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `nome_imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `nome_imagem`) VALUES
(1, 'https://st.depositphotos.com/3033681/4909/i/450/depositphotos_49093343-stock-photo-brazilian-snack-cheese-bread-pao.jpg%27'),
(2, 'https://t1.uc.ltmcdn.com/pt/posts/5/2/8/como_fazer_um_bolo_de_laranja_6825_orig.jpg'),
(3, 'https://st3.depositphotos.com/1364913/34805/i/450/depositphotos_348057150-stock-photo-berliner-doughnuts-fresh-made-detailed.jpg%27'),
(4, 'https://st4.depositphotos.com/4489936/24733/i/450/depositphotos_247333854-stock-photo-mini-cornbread-muffins-cooling-tray.jpg%27'),
(5, 'https://amopaocaseiro.com.br/wp-content/uploads/2019/12/pao-de-forma-caseiro_02.jpg'),
(6, 'https://vovopalmirinha.com.br/wp-content/uploads/2017/05/bolo-morango.jpg'),
(7, 'https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2020/08/20/croissant-presunto-e-queijo.jpg'),
(8, 'https://www.beltnutrition.com.br/media/mageplaza/blog/post/r/e/receita-bolo-de-cenoura-fit_9.jpeg'),
(9, 'https://areademulher.r7.com/wp-content/uploads/2021/10/aprenda-a-melhor-receita-de-bolo-de-banana-de-todas-a-mais-deliciosa-5-1200x900.jpg'),
(10, 'https://i.ytimg.com/vi/QFMxJWh3mqE/maxresdefault.jpg'),
(11, 'https://www.restodonte.com.br/recipePics/9900717.jpg?v114'),
(12, 'https://comidinhasdochef.com/wp-content/uploads/2018/12/Bolo-Lim%C3%A3o-Fofinho.jpg'),
(13, 'https://img.itdg.com.br/tdg/images/recipes/000/011/234/349247/349247_original.jpg'),
(14, 'https://claudia.abril.com.br/wp-content/uploads/2020/02/receita-bolo-morango-chantilly.jpg?quality=85&strip=info'),
(15, 'https://guiadacozinha.com.br/wp-content/uploads/2019/10/bolo-abacaxi-leite-condensado.jpg'),
(16, 'https://www.casalcozinha.com.br/wp-content/uploads/2020/11/receita-simples-e-caseira-de-torta-de-maca-1300x932.png'),
(17, 'teste.com'),
(18, 'teste.com'),
(19, 'teste.com'),
(20, 'https://img.itdg.com.br/tdg/images/recipes/000/049/393/352606/352606_original.jpg?w=1200'),
(21, 'https://img.itdg.com.br/tdg/images/recipes/000/049/393/352606/352606_original.jpg?w=1200'),
(22, 'https://img.itdg.com.br/tdg/images/recipes/000/049/393/352606/352606_original.jpg?w=1200'),
(23, 'https://receitinhas.com.br/wp-content/uploads/2016/12/Screen-Shot-2017-05-12-at-20.webp'),
(24, 'https://p7m4z9n9.stackpathcdn.com/wp-content/uploads/2021/04/roscadecalabresa-receita.jpg'),
(25, ''),
(26, ''),
(27, 'imagem.com'),
(28, 'teste'),
(29, 'https://akdelicatessen.com.br/wp-content/uploads/2022/03/cigarrete-queijo-e-presunto.jpg'),
(30, 'https://img.itdg.com.br/tdg/images/recipes/000/080/686/21535/21535_original.jpg?w=1200'),
(31, ''),
(32, ''),
(33, '54'),
(34, 'qwewqeqwe'),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, 'https://2.bp.blogspot.com/-CTn3R_g7fow/WFHJ49OlRnI/AAAAAAAAIDE/c3wf7fT-UEoVXFqoLe-wnQZj7Eo2afL6QCLcB/s1600/TAZ%2BMANIA%2B.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingrediente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `porcentagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingrediente`, `nome`, `porcentagem`) VALUES
(1, '1', '100'),
(2, '2', '100'),
(3, '3', '100'),
(4, '4', '10'),
(5, '5', '5'),
(6, '6', '5'),
(7, '7', '100'),
(8, '8', '100'),
(9, '9', '100'),
(10, '10', '10'),
(11, '11', '20'),
(12, '12', '100'),
(13, '13', '100'),
(14, '14', '100'),
(15, '15', '100'),
(16, '16', '100'),
(17, '17', '100'),
(18, '18', '100'),
(19, '19', '100'),
(20, '20', '100'),
(21, '21', '100'),
(22, '22', '100'),
(23, '23', '100'),
(24, '9', '9'),
(25, '14', '14'),
(26, '21', '21'),
(27, '1', '1'),
(28, '9', '9'),
(29, '19', '19'),
(30, '3', '3'),
(31, '1', '100'),
(32, '9', '5'),
(33, '19', '25'),
(34, '3', '2'),
(35, '3', '100'),
(36, '1', '25'),
(37, '2', '65'),
(38, '7', '25'),
(39, '2', '5'),
(40, '13', '25'),
(41, '1', '100'),
(42, '1', '100'),
(43, '5', '10'),
(44, '13', '1'),
(45, '2', '23'),
(46, '2', '32'),
(47, '2', '23'),
(48, '2', '23'),
(49, '2', '23'),
(50, '4', '23'),
(51, '2', '100'),
(52, '1', '23'),
(53, '1', '100'),
(54, '1', '100'),
(55, '2', '50'),
(56, '4', '100'),
(57, '2', '100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id_receita` int(11) NOT NULL,
  `nome_receita` varchar(100) NOT NULL,
  `instrucoes_receita` varchar(500) NOT NULL,
  `rendimento` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `id_imagem` int(11) DEFAULT NULL,
  `favorita` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id_receita`, `nome_receita`, `instrucoes_receita`, `rendimento`, `categoria`, `id_imagem`, `favorita`) VALUES
(2, 'Pão de Queijo', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture o polvilho, o queijo e o sal. 3. Adicione o óleo e o leite, e misture até formar uma massa homogênea. 4. Faça pequenas bolas da massa e coloque-as em uma assadeira untada. 5. Leve ao forno por 15-20 minutos.', 12, 1, 1, 1),
(3, 'Bolo de Laranja', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao forno por 25-30 minutos.', 8, 2, 2, 1),
(4, 'Pão de Forma', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos.', 12, 1, 5, 0),
(5, 'Torta de Limão', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao forno por 25-30 minutos.', 8, 7, 4, 1),
(6, 'Bolo de Morango', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao for no por 25-30 minutos e adicione os morangos no final.', 8, 2, 6, 0),
(7, 'Croissant recheado', '1. Abra a massa folhada em um retângulo. 2. Faça cortes triangulares na massa, começando do canto superior esquerdo até o canto inferior direito. 3. Enrole cada triângulo a partir da base larga até a ponta. 4. Deixe os croissants descansarem por 30 minutos antes de assar. 5. Leve ao forno por 15-20 minutos.', 12, 4, 7, 0),
(8, 'Bolo de Cenoura', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao forno por 25-30 minutos.', 8, 2, 8, 0),
(9, 'Pão de Açúcar', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos e polvilhe açúcar de confeiteiro antes de servir.', 12, 1, 3, 1),
(10, 'Bolo de Banana', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4 . Adicione as bananas amassadas e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 9, 0),
(12, 'Bolo de Chocolate', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o chocolate derretido e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 10, 0),
(15, 'Pão de Milho', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de milho. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos.', 12, 1, 11, 1),
(16, 'Bolo de Limão', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o suco de limão e raspas de limão e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 12, 0),
(17, 'Croissant', '1. Abra a massa folhada e corte-a em triângulos. 2. Adicione o recheio de sua escolha e enrole a massa a partir da base. 3. Leve ao forno por 15-20 minutos até dourar.', 6, 4, 13, 0),
(18, 'Bolo de Morango', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione os morangos picados e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 14, 0),
(20, 'Bolo de Abacaxi', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o suco e a calda de limão e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 15, 0),
(23, 'Torta de Maçã', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione as maçãs picadas e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 7, 16, 0),
(30, 'Bolo de Aipim', 'Prepare o bolo de aipim', 10, 2, 23, 0),
(31, 'Rosca de Calabresa', 'Prepare a rosca', 2, 3, 24, 0),
(36, 'Cigarrete', 'qwewqe', 10, 3, 29, 0),
(37, 'Coxinha de Frango', 'qweqweqwe', 10, 3, 30, 0),
(47, 'Bolo de Fermento', 'bolo com muito fermento', 10000, 4, 40, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita_ingrediente`
--

CREATE TABLE `receita_ingrediente` (
  `id_receita` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receita_ingrediente`
--

INSERT INTO `receita_ingrediente` (`id_receita`, `id_ingrediente`) VALUES
(2, 5),
(2, 7),
(2, 8),
(2, 12),
(2, 13),
(2, 14),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(12, 5),
(12, 6),
(17, 1),
(17, 2),
(17, 4),
(17, 5),
(17, 7),
(17, 9),
(17, 15),
(23, 7),
(23, 15),
(23, 16),
(23, 17),
(23, 18),
(23, 19),
(23, 20),
(23, 21),
(23, 22),
(23, 23),
(26, 24),
(26, 25),
(26, 26),
(27, 27),
(27, 28),
(27, 29),
(27, 30),
(28, 31),
(28, 32),
(28, 33),
(28, 34),
(29, 35),
(29, 36),
(29, 37),
(29, 38),
(30, 39),
(30, 40),
(30, 41),
(31, 42),
(31, 43),
(31, 44),
(34, 45),
(34, 46),
(35, 47),
(35, 48),
(36, 49),
(36, 50),
(37, 51),
(37, 52),
(40, 53),
(41, 54),
(41, 55),
(47, 56),
(47, 57);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `controle_lucro`
--
ALTER TABLE `controle_lucro`
  ADD PRIMARY KEY (`id_lucro`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`);

--
-- Índices para tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id_receita`);

--
-- Índices para tabela `receita_ingrediente`
--
ALTER TABLE `receita_ingrediente`
  ADD PRIMARY KEY (`id_receita`,`id_ingrediente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `controle_lucro`
--
ALTER TABLE `controle_lucro`
  MODIFY `id_lucro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id_receita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
