-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jul-2025 às 15:07
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pokemon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pokemons`
--

CREATE TABLE `pokemons` (
  `id_pokemon` int(11) NOT NULL,
  `nome_pokemon` varchar(300) NOT NULL,
  `tipo_pokemon` enum('Normal','Fogo','Água','Grama','Elétrico','Gelo','Lutador','Venenoso','Terra','Voador',' Psíquico','Inseto','Pedra','Fantasma','Dragão','Aço','Sombrio','Fada') NOT NULL,
  `localizacao_pokemon` varchar(600) NOT NULL,
  `registro_pokemon` date NOT NULL,
  `obs_pokemon` varchar(800) DEFAULT NULL,
  `hp_pokemon` varchar(200) DEFAULT NULL,
  `ataque_pokemon` varchar(200) DEFAULT NULL,
  `defesa_pokemon` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id_pokemon`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
