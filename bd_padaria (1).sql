-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jan-2023 às 11:48
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
  `validade_lote` date DEFAULT NULL,
  `tipo_produto` varchar(50) DEFAULT NULL,
  `medida_produto_estoque` varchar(10) DEFAULT NULL,
  `quantidade_minima_produto` int(11) DEFAULT NULL,
  `quantidade_maxima_produto` int(11) DEFAULT NULL,
  `ignorado` int(11) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `nome_imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'farinha de trigo', '100'),
(2, 'açúcar', '100'),
(3, 'cacau em pó', '100'),
(4, 'fermento em pó', '10'),
(5, 'sal', '5'),
(6, 'bicarbonato de sódio', '5'),
(7, 'ovos', '100'),
(8, 'óleo', '100'),
(9, 'água', '100'),
(10, 'essência de chocolate', '10'),
(11, 'nozes', '20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id_receita` int(11) NOT NULL,
  `nome_receita` varchar(100) NOT NULL,
  `instrucoes_receita` varchar(500) NOT NULL,
  `rendimento` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `id_imagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id_receita`, `nome_receita`, `instrucoes_receita`, `rendimento`, `categoria`, `id_imagem`) VALUES
(2, 'Pão de Queijo', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture o polvilho, o queijo e o sal. 3. Adicione o óleo e o leite, e misture até formar uma massa homogênea. 4. Faça pequenas bolas da massa e coloque-as em uma assadeira untada. 5. Leve ao forno por 15-20 minutos.', 12, 1, 9),
(3, 'Bolo de Laranja', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao forno por 25-30 minutos.', 8, 2, 10),
(4, 'Pão de Forma', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos.', 12, 1, 11),
(5, 'Torta de Limão', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao forno por 25-30 minutos.', 8, 7, 12),
(6, 'Bolo de Morango', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao for no por 25-30 minutos e adicione os morangos no final.', 8, 2, 13),
(7, 'Croissant recheado', '1. Abra a massa folhada em um retângulo. 2. Faça cortes triangulares na massa, começando do canto superior esquerdo até o canto inferior direito. 3. Enrole cada triângulo a partir da base larga até a ponta. 4. Deixe os croissants descansarem por 30 minutos antes de assar. 5. Leve ao forno por 15-20 minutos.', 12, 4, 14),
(8, 'Bolo de Cenoura', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Despeje a massa em uma forma untada e enfarinhada. 5. Leve ao forno por 25-30 minutos.', 8, 2, 15),
(9, 'Pão de Açúcar', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos e polvilhe açúcar de confeiteiro antes de servir.', 12, 1, 16),
(10, 'Bolo de Banana', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4 . Adicione as bananas amassadas e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 17),
(11, 'Pão de Queijo', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture a farinha de mandioca, o queijo ralado, o leite e o sal. 3. Adicione a gema e misture novamente. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 15-20 minutos.', 12, 1, 18),
(12, 'Bolo de Chocolate', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o chocolate derretido e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 19),
(13, 'Pão de Forma', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça a forma do pão e coloque-o em uma assadeira untada. 5. Leve ao forno por 25-30 minutos.', 8, 1, 20),
(14, 'Bolo de Laranja', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o suco de laranja e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 21),
(15, 'Pão de Milho', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de milho. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos.', 12, 1, 22),
(16, 'Bolo de Limão', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o suco de limão e raspas de limão e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 23),
(17, 'Croissant', '1. Abra a massa folhada e corte-a em triângulos. 2. Adicione o recheio de sua escolha e enrole a massa a partir da base. 3. Leve ao forno por 15-20 minutos até dourar.', 6, 4, 24),
(18, 'Bolo de Morango', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione os morangos picados e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 25),
(19, 'Pão de Açúcar', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça as formas dos pães e coloque-os em uma assadeira untada. 5. Leve ao forno por 25-30 minutos. 6. Pincele açúcar de confeiteiro na superfície dos pães antes de servir.', 12, 1, 26),
(20, 'Bolo de Abacaxi', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione o suco e a calda de limão e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 2, 27),
(21, 'Pão de Forma', '1. Em uma tigela, misture a água, o açúcar, o óleo, o sal e a farinha de trigo. 2. Adicione o fermento e misture bem. 3. Deixe a massa descansar por 30 minutos. 4. Faça a forma do pão e coloque-o em uma assadeira untada. 5. Leve ao forno por 25-30 minutos.', 8, 1, 28),
(23, 'Torta de Maçã', '1. Pré-aqueça o forno a 180 graus. 2. Em uma tigela, misture os ingredientes secos. 3. Adicione os ingredientes líquidos e misture até ficar homogêneo. 4. Adicione as maçãs picadas e misture novamente. 5. Despeje a massa em uma forma untada e enfarinhada. 6. Leve ao forno por 25-30 minutos.', 8, 7, 30);

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
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(12, 5),
(12, 6);

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
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id_receita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
