<meta charset="UTF-8">


<?php 

$xml = simplexml_load_file('venda.xml');

echo 'Título: ' . $xml->titulo . '<br>';
echo 'Data de Atualização: ' . $xml->data_atualizacao . '<br>';

foreach($xml->venda as $registro):
	echo 'Código da Venda: ' . $registro->cod_venda . '<br>';
	echo 'Cliente: ' . $registro->cliente . '<br>';
	echo 'Email: ' . $registro->email . '<br>';

	foreach($registro->itens->item as $item):
		echo 'Código do Produto: ' . $item->cod_produto . '<br>';
		echo 'Quantidade: ' . $item->qtde . '<br>';
		echo 'Descrição do Produto: ' . $item->descricao . '<br>';
	endforeach;

	echo '<hr>';
endforeach;

?>