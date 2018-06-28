# Host: localhost  (Version 5.7.14)
# Date: 2017-05-22 18:16:41
# Generator: MySQL-Front 6.0  (Build 1.160)


#
# Structure for table "imovel"
#

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE `imovel` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `destacado` varchar(255) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `dominio` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `tipo_imovel` varchar(255) DEFAULT NULL,
  `sub_tipo_imovel` varchar(255) DEFAULT NULL,
  `transacao` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `valor_condominio` varchar(255) DEFAULT NULL,
  `valor_iptu` varchar(255) DEFAULT NULL,
  `area_privativa` varchar(255) DEFAULT NULL,
  `area_construida` varchar(255) DEFAULT NULL,
  `area_total` varchar(255) DEFAULT NULL,
  `area_terreno` varchar(255) DEFAULT NULL,
  `dormitorios` varchar(255) DEFAULT NULL,
  `banheiro` varchar(255) DEFAULT NULL,
  `suites` varchar(255) DEFAULT NULL,
  `vagas` varchar(255) DEFAULT NULL,
  `mobiliado` varchar(255) DEFAULT NULL,
  `em_condominio` varchar(255) DEFAULT NULL,
  `ano_construcao` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `endereco_logradouro` varchar(255) DEFAULT NULL,
  `endereco_numero` varchar(255) DEFAULT NULL,
  `endereco_complemento` varchar(255) DEFAULT NULL,
  `endereco_cep` varchar(255) DEFAULT NULL,
  `endereco_bairro` varchar(255) DEFAULT NULL,
  `endereco_zona` varchar(255) DEFAULT NULL,
  `endereco_regiao` varchar(255) DEFAULT NULL,
  `endereco_cidade` varchar(255) DEFAULT NULL,
  `endereco_estado` varchar(255) DEFAULT NULL,
  `endereco_pais` varchar(255) DEFAULT NULL,
  `descricao` text,
  `empreendimento_estagio` varchar(255) DEFAULT NULL,
  `empreendimento_inicio` varchar(255) DEFAULT NULL,
  `empreendimento_terminio` varchar(255) DEFAULT NULL,
  `empreendimento_nome` varchar(255) DEFAULT NULL,
  `empreendimento_descricao` varchar(255) DEFAULT NULL,
  `fotos` text,
  `anunciante` varchar(255) DEFAULT NULL,
  `anunciante_fone` varchar(255) DEFAULT NULL,
  `anunciante_email` varchar(255) DEFAULT NULL,
  `anunciante_logradouro` varchar(255) DEFAULT NULL,
  `anunciante_numero` varchar(255) DEFAULT NULL,
  `anunciante_bairro` varchar(255) DEFAULT NULL,
  `anunciante_cidade` varchar(255) DEFAULT NULL,
  `anunciante_estado` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=50846 DEFAULT CHARSET=utf8;

#
# Data for table "imovel"
#

/*!40000 ALTER TABLE `imovel` DISABLE KEYS */;
INSERT INTO `imovel` VALUES (34697,' Não ',' 257 ',' http://www.ferruccioimb.com.br ',' http://www.ferruccioimb.com.br/imovel/34697/casa-venda-rio-claro-sp-bairro-do-estadio ',' Casa para Venda em Rio Claro / SP no bairro Bairro do Estádio ',' Casa ',' Casa ',' Venda ',' 315000 ','  ','  ','  ',' 151,00 ',' 155 ','  ',' 2 ',' 1 ',' 1 ','  ','  ','  ','  ','  ','  ','  ','  ','  ',' Bairro do Estádio ','  ','  ',' Rio Claro ',' SP ',' Brasil ',' Casa muito aconchegante, de piso frio, com duas suítes, cozinha planejada com mesa de mármore, área de serviço, portão automatico, com uma vaga coberta. Possui Jardim de inverno   ','  ','  ','  ','  ','  ','\n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095107493.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t1\n\t\t\t\t\t\t\t\t\t\t\tSim\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095109272.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t2\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095110214.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t3\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095111527.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t4\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095112398.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t5\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095114838.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t6\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095115968.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t7\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t http://www.ferruccioimb.com.br/imagens/imoveis/20141218095116714.jpg \n\t\t\t\t\t\t\t\t\t\t\t  \n\t\t\t\t\t\t\t\t\t\t\t8\n\t\t\t\t\t\t\t\t\t\t\tNão\n\t\t\t\t\t\t\t\t\t\t  ',' Ferruccio Scotuzzi ',' 19. 36177100 ',' ferruccioimb@hotmail.com ',' Av. 38 , entre ruas 5 e 6 ',' 721 ',' Vila Operária ',' Rio Claro ',' SP ',' 19/05/2017 ');
/*!40000 ALTER TABLE `imovel` ENABLE KEYS */;
