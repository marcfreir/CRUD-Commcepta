-- SUBJECT: DATABASE PROJECT - COMMCEPTA
-- AUTHOR: MARCOS FREIRE
-- CREATED ON: 13-MAY-2018, 11:40:14 PM

CREATE DATABASE db_commcepta;

-- DROP DATABASE db_commcepta;

USE db_commcepta;

CREATE TABLE tb_produtos
(
	produtoid INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    produtocodigo VARCHAR(32) NOT NULL,
	produtonome VARCHAR(32) NOT NULL,
	produtodescricao TEXT,
	produtopreco VARCHAR(10) NOT NULL,
	produtodataentrada VARCHAR(10) NOT NULL, -- Mudado de DATA para VARCHAR(10)
	produtodatasaida VARCHAR(10) NOT NULL, -- Mudado DATA para VARCHAR(10)
    produtostatus VARCHAR(13) NOT NULL,
	
	CONSTRAINT PRIMARY KEY (produtoid)
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO tb_produtos
VALUES
(DEFAULT, "1234567899", "Camisa", "Algodão/Poliester", "R$ 30,00", "03-03-2018", "04-04-2018", "disponível");

-- DELETE FROM tb_produtos
-- WHERE produtoid = "2";

SELECT * FROM tb_produtos;

SELECT * FROM tb_produtos WHERE produtodataentrada = "";

CREATE TABLE tb_vendedores
(
	vendedorid INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	vendedornome VARCHAR(32) NOT NULL,
	vendedorcadastro VARCHAR(10) NOT NULL,
		
	CONSTRAINT PRIMARY KEY (vendedorid)
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE tb_vendas
(
	vendaid INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    vendavendedorid INT(11) UNSIGNED NOT NULL,
    vendaprodutoid INT(11) UNSIGNED NOT NULL,
	vendadata VARCHAR(10) NOT NULL, -- Mudado de DATA para VARCHAR(10)
			
	CONSTRAINT PRIMARY KEY (vendaid),
    CONSTRAINT fk_vendavendedorid FOREIGN KEY (vendavendedorid)
	REFERENCES tb_vendedores(vendedorid),
    CONSTRAINT fk_vendaprodutoid FOREIGN KEY (vendaprodutoid)
	REFERENCES tb_produtos(produtoid)
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;