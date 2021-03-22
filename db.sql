DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `numero` int NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `data_nasc` date NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
);
