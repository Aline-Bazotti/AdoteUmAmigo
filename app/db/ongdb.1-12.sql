-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.21 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para ongdb
DROP DATABASE IF EXISTS `ongdb`;
CREATE DATABASE IF NOT EXISTS `ongdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ongdb`;


-- Copiando estrutura para tabela ongdb.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.categoria: ~5 rows (aproximadamente)
DELETE FROM `categoria`;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `nome`) VALUES
	(1, 'Animais'),
	(2, 'Ambiente'),
	(3, 'Pessoas'),
	(4, 'Social'),
	(5, 'Saúde');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Copiando estrutura para tabela ongdb.colaborador
DROP TABLE IF EXISTS `colaborador`;
CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `idOng` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_colaborador_ong` (`idOng`),
  CONSTRAINT `FK_colaborador_ong` FOREIGN KEY (`idOng`) REFERENCES `ong` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.colaborador: ~2 rows (aproximadamente)
DELETE FROM `colaborador`;
/*!40000 ALTER TABLE `colaborador` DISABLE KEYS */;
INSERT INTO `colaborador` (`id`, `nome`, `endereco`, `telefone`, `idOng`) VALUES
	(1, 'Jessica Kemper', 'São Miguel do Oeste', '21222222333', 1),
	(2, 'Bruna Eidt', 'Itapiranga', '333333333333', 1);
/*!40000 ALTER TABLE `colaborador` ENABLE KEYS */;


-- Copiando estrutura para tabela ongdb.ong
DROP TABLE IF EXISTS `ong`;
CREATE TABLE IF NOT EXISTS `ong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ong_categoria` (`idCategoria`),
  CONSTRAINT `FK_ong_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.ong: ~5 rows (aproximadamente)
DELETE FROM `ong`;
/*!40000 ALTER TABLE `ong` DISABLE KEYS */;
INSERT INTO `ong` (`id`, `nome`, `endereco`, `telefone`, `idCategoria`) VALUES
	(1, 'Amigo bicho', 'Rua Santos Dumont, SMO', '999999955', 1),
	(3, 'Fundação SOS Mata Atlântica', 'TESTE', '666666666', 2),
	(4, 'APAE', 'Centro', '5555555555', 4),
	(5, 'AACC', 'Centro', '33333334', 3),
	(6, 'Instituto da Criança', NULL, '4444444443', 3);
/*!40000 ALTER TABLE `ong` ENABLE KEYS */;


-- Copiando estrutura para tabela ongdb.portfolio
DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(250) DEFAULT NULL,
  `idProjeto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_portfolio_projeto` (`idProjeto`),
  CONSTRAINT `FK_portfolio_projeto` FOREIGN KEY (`idProjeto`) REFERENCES `projeto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.portfolio: ~0 rows (aproximadamente)
DELETE FROM `portfolio`;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;


-- Copiando estrutura para tabela ongdb.projeto
DROP TABLE IF EXISTS `projeto`;
CREATE TABLE IF NOT EXISTS `projeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text,
  `idOng` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_projeto_ong` (`idOng`),
  CONSTRAINT `FK_projeto_ong` FOREIGN KEY (`idOng`) REFERENCES `ong` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.projeto: ~3 rows (aproximadamente)
DELETE FROM `projeto`;
/*!40000 ALTER TABLE `projeto` DISABLE KEYS */;
INSERT INTO `projeto` (`id`, `nome`, `descricao`, `idOng`) VALUES
	(1, 'Adoção de animais', 'Descrição do Projeto!!!', 1),
	(2, 'Instituto Espaço Silvestre', 'Descrição do Projeto!!!', 3),
	(3, 'Transforme Sorrisos', 'Descrição do Projeto!!!', 6);
/*!40000 ALTER TABLE `projeto` ENABLE KEYS */;


-- Copiando estrutura para tabela ongdb.projeto_colaborador
DROP TABLE IF EXISTS `projeto_colaborador`;
CREATE TABLE IF NOT EXISTS `projeto_colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idColaborador` int(11) DEFAULT NULL,
  `idProjeto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_projeto_colaborador_colaborador` (`idColaborador`),
  KEY `FK_projeto_colaborador_projeto` (`idProjeto`),
  CONSTRAINT `FK_projeto_colaborador_colaborador` FOREIGN KEY (`idColaborador`) REFERENCES `colaborador` (`id`),
  CONSTRAINT `FK_projeto_colaborador_projeto` FOREIGN KEY (`idProjeto`) REFERENCES `projeto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.projeto_colaborador: ~0 rows (aproximadamente)
DELETE FROM `projeto_colaborador`;
/*!40000 ALTER TABLE `projeto_colaborador` DISABLE KEYS */;
/*!40000 ALTER TABLE `projeto_colaborador` ENABLE KEYS */;


-- Copiando estrutura para tabela ongdb.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela ongdb.usuario: ~2 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
	(1, 'bruna_eidt@gmail.com', '123'),
	(2, 'jessica_kemper@gmail.com', '123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
