<?php
# Incluindo a classe de conexao
require_once 'conexao.php';
# Instanciando a conexao MySql
$con = new pgCon;
# Instanciando o XMLWriter
$xml = new XMLWriter;
$xml->openMemory();
# Definindo o encoding do XML
$xml->startDocument( '1.0' , 'utf-8' );
# Primeiro elemento do XML
$xml->startElement("featureset");
	# Query na tabela albuns
	$tb_produto = pg_query("select * from produto");
	while($produto = pg_fetch_array($tb_produto))
	{
		# Transformando array em objeto
		$produto = (object)$produto;
		# Criando elemento album
		$xml->startElement("produto");
		# Setando os atributos
		$xml->writeAttribute("id_produto", "$produto->id_produto");
		$xml->writeAttribute("descricao", "$produto->descricao");
		$xml->writeAttribute("preco", "$produto->preco");
		$xml->writeAttribute("id_fornecedor", "$produto->id_fornecedor");

	}
	# Fechando o elemento album
	$xml->endElement();
# Fechando o elemento featureset
$xml->endElement();

# Encerrando a conexao
$con->close();

# Definindo cabecalho de saida
header( 'Content-type: text/xml' );
# Imprimindo a saida do XML
print $xml->outputMemory(true);

# Salva arquivo em disco
$file = fopen('songs.xml','w+');
//@fwrite($file,$xml->outputMemory(true));
fclose($file);

?>
