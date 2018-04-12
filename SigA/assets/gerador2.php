<?php

$connection = pg_connect("host=localhost port=5433 dbname=list user=postgres password=theo");
    if($connection) {
     //  echo '<br> Conectado com o banco de dados';
    } else {
      //  echo '<br> Deu ruim ao conectar como banco de dados';
    }

	$sql = pg_query($connection,"select produto.id_produto, produto.descricao, count (produto_estoque.id_estoque) 
	as quantidade from produto inner join produto_estoque as produto_estoque on 
	produto.id_produto = produto_estoque.id_produto group by produto.id_produto");

/*
select produto.id_produto, produto.descricao, count (produto_estoque.id_estoque) 
	as quantidade from produto inner join produto_estoque as produto_estoque on 
	produto.id_produto = produto_estoque.id_produto group by produto.descricao
*/

#versao do encoding xml
$dom = new DOMDocument("1.0");

#retirar os espacos em branco
$dom->preserveWhiteSpace = false;

#gerar o codigo
$dom->formatOutput = true;

#criando o nó principal (root)
$root   = $dom->createElement("produtos");

while($exibe = pg_fetch_assoc($sql)){
	#nó filho (produto)
	$produto = $dom->createElement("produto");
	$produto->setAttribute("id", $exibe['id_produto']);
			
	#setanto nomes e atributos dos elementos xml (nós)
	$descricao = $dom->createElement("descricao", $exibe['descricao']);
	$quantidade = $dom->createElement("quantidade", $exibe['quantidade']);
	

	#adiciona os nós (informacaoes do produto) em produto
	$produto->appendChild($descricao);
	$produto->appendChild($quantidade);
	
	#adiciona o nó produto em (root) agenda
	$root->appendChild($produto);

}
$dom->appendChild($root);

# Para salvar o arquivo, descomente a linha

#cabeçalho da página
header("Content-Type: text/xml");
# imprime o xml na tela
print $dom->saveXML();
$dom->save('estoque.xml');
