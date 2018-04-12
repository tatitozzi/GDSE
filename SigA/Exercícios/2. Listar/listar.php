<meta charset="UTF-8">


<?php 

$xml = simplexml_load_file('estoque.xml');

echo 'Produtos: ' . $xml->produtos . '<br>';
//echo 'Data de Atualização: ' . $xml->data_atualizacao . '<br>';

foreach($xml->produto as $registro):
	echo 'Código do produto: ' . $registro->id_produto . '<br>';
	echo 'Descrição do produto: ' . $registro->descricao . '<br>';
	echo 'Quantidade: ' . $registro->quantidade . '<br>';

//	foreach($registro->itens->item as $item):
//		echo 'Código do Estoque: ' . $item->cod_produto . '<br>';
//		echo 'Quantidade: ' . $item->qtde . '<br>';
//		echo 'Descrição do Produto: ' . $item->descricao . '<br>';
//	endforeach;

	echo '<hr>';
endforeach;

?>