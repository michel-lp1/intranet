-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para clientesintegrados
CREATE DATABASE IF NOT EXISTS `clientesintegrados` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `clientesintegrados`;

-- Copiando estrutura para tabela clientesintegrados.acessoadm
CREATE TABLE IF NOT EXISTS `acessoadm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(14) NOT NULL DEFAULT '0',
  `senha` varchar(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.artigos
CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setor` text NOT NULL,
  `ramal` text NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.autotrac
CREATE TABLE IF NOT EXISTS `autotrac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaliador` varchar(50) NOT NULL DEFAULT '0',
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(14) NOT NULL DEFAULT '0',
  `dia` date NOT NULL,
  `pergunta_um` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_dois` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_tres` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_quatro` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_cinco` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `contato` varchar(50) NOT NULL DEFAULT '0',
  `telefone` varchar(15) NOT NULL DEFAULT '0',
  `tms` varchar(50) NOT NULL DEFAULT '0',
  `condicao` varchar(30) NOT NULL DEFAULT '0',
  `data_integrada` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.controle_jornada
CREATE TABLE IF NOT EXISTS `controle_jornada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `telefone` varchar(14) NOT NULL DEFAULT '0',
  `contato` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.gabaritos
CREATE TABLE IF NOT EXISTS `gabaritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tecnologia` varchar(50) NOT NULL,
  `resposta_um` varchar(1) NOT NULL DEFAULT '0',
  `resposta_dois` varchar(1) NOT NULL DEFAULT '0',
  `resposta_tres` varchar(1) NOT NULL DEFAULT '0',
  `resposta_quatro` varchar(1) NOT NULL DEFAULT '0',
  `resposta_cinco` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.kronaapp
CREATE TABLE IF NOT EXISTS `kronaapp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) NOT NULL DEFAULT '0',
  `emailacesso` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.omnilink
CREATE TABLE IF NOT EXISTS `omnilink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaliador` varchar(50) NOT NULL DEFAULT '0',
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(14) NOT NULL DEFAULT '0',
  `dia` date NOT NULL,
  `pergunta_um` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_dois` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_tres` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_quatro` varchar(1) NOT NULL DEFAULT '0',
  `pergunta_cinco` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.onix
CREATE TABLE IF NOT EXISTS `onix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avaliador` varchar(50) NOT NULL DEFAULT '0',
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(14) NOT NULL DEFAULT '0',
  `dia` date NOT NULL,
  `pergunta_um` varchar(1) NOT NULL DEFAULT '',
  `pergunta_dois` varchar(1) NOT NULL DEFAULT '',
  `pergunta_tres` varchar(1) NOT NULL DEFAULT '',
  `pergunta_quatro` varchar(1) NOT NULL DEFAULT '',
  `pergunta_cinco` varchar(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.resultados
CREATE TABLE IF NOT EXISTS `resultados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colaborador` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(50) NOT NULL DEFAULT '0',
  `autotrac` int(5) DEFAULT NULL,
  `omnilink` int(5) DEFAULT NULL,
  `onix` int(5) DEFAULT NULL,
  `sighra` int(5) DEFAULT NULL,
  `sascar` varchar(10) DEFAULT NULL,
  `historico` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela clientesintegrados.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  `senha` int(6) NOT NULL DEFAULT 0,
  `email` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
