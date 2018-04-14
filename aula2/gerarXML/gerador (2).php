<?php

$connection = pg_connect("host=localhost port=5433 dbname=list user=postgres password=theo");
    if($connection) {
       //echo '<br> Conectado com o banco de dados';
    } else {
        //echo '<br> Deu ruim ao conectar como banco de dados';
    }

	$sql = pg_query($connection,"Select id_produto, descricao, preco, id_fornecedor from produto");

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
	$preco = $dom->createElement("preco", $exibe['preco']);
	$id_fornecedor = $dom->createElement("endereco", $exibe['id_fornecedor']);

	#adiciona os nós (informacaoes do produto) em produto
	$produto->appendChild($descricao);
	$produto->appendChild($preco);
	$produto->appendChild($id_fornecedor);

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
?>
