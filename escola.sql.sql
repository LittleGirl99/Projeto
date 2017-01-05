-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Dez-2016 às 18:15
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `Curso` varchar(70) NOT NULL,
  PRIMARY KEY (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`idCurso`, `Curso`) VALUES
(1, 'Técnico de Apoio à Infância'),
(2, 'Técnico Auxiliar de Saúde'),
(3, 'Técnico de Gestão'),
(4, 'Técnico de Vendas'),
(5, 'Técnico de Gestão e Programação de Sistemas Informáticos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE IF NOT EXISTS `disciplinas` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `Disciplina` varchar(70) DEFAULT NULL,
  `Horas` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDisciplina`),
  KEY `idCurso` (`idCurso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`idDisciplina`, `Disciplina`, `Horas`, `idCurso`) VALUES
(21, 'Saúde Infantil', 219, 1),
(22, 'Expressão Plástica', 330, 1),
(23, 'Expressão Corporal, Dramática e Musical', 240, 1),
(24, 'Ténica Pedagógica e Intervenção Educativa', 311, 1),
(25, 'Formação em contexto de trabalho', 620, 1),
(34, 'Saúde', 355, 2),
(35, 'Gestão e Organização dos Serviços e Cuidados de Saúde', 200, 2),
(36, 'Correlações e Relações Interpessoais', 175, 2),
(37, 'Higiene, Segurança e Cuidados Gerais', 450, 2),
(38, 'Formação em Contexto de Trabalho', 420, 2),
(46, 'Gestão', 500, 3),
(47, 'Contabilidade e Fiscalidade', 450, 3),
(48, 'Direito das Organizações', 130, 3),
(49, 'Cálculo Financeiro e Estatística Aplicada', 100, 3),
(50, 'Formação em Contexto de trabalho', 420, 3),
(58, 'Vender', 480, 4),
(59, 'Organizar e Gerir a Atividade', 330, 4),
(60, 'Comunicar em Vendas', 280, 4),
(61, 'Comunicar em Francês', 90, 4),
(62, 'Formação em Contexto de Trabalho', 420, 4),
(70, 'Sistemas Operativos', 130, 5),
(71, 'Arquitetura de Computadores', 130, 5),
(72, 'Redes de Computadores', 232, 5),
(73, 'Programação de Sistemas Informáticos', 608, 5),
(74, 'Formação em Contexto de Trabalho', 600, 5);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
