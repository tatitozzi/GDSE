<?php
$con_string = pg_connect("host=localhost port=5433 dbname=list user=postgres password=theo");
$row = pg_query("SELECT id_produto, descricao, preco  FROM produto ORDER BY id_produto");

$strQuery = "select * from produto";
$query = pg_query($strQuery);

if (true){

#versao do encoding xml
$dom = new DOMDocument("1.0", "ISO-8859-1");

#retirar os espacos em branco
$dom->preserveWhiteSpace = false;

#gerar o codigo
$dom->formatOutput = true;

#criando o nó principal (root)
$root = $dom->createElement("produtos");

#nó filho (contato)

#setanto nomes e atributos dos elementos xml (nós)
#$nome = $dom->createElement("nome", $nome);
#$email = $dom->createElement("email", $email);
#$telefone = $dom->createElement("telefone", $telefone);

while ($row = pg_fetch_array($query)){
$produto = $dom->createElement("produto");
$id_produto = $row["id_produto"];
$descricao = $row["descricao"];
$preco = $row["preco"];
$id_produto = $dom->createElement("id_produto", $id_produto);
$descricao = $dom->createElement("descricao", $descricao);
$preco = $dom->createElement("preco", $preco);
$produto->appendChild($id_produto);
$produto->appendChild($descricao);
$produto->appendChild($preco);
$root->appendChild($produto);
}

#adiciona os nós (informacaoes do contato) em contato
#$contato->appendChild($nome);
#$contato->appendChild($email);
#$contato->appendChild($telefone);

#adiciona o nó contato em (root) agenda
$root->appendChild($produto);
$dom->appendChild($root);

# Para salvar o arquivo, descomente a linha
$dom->save("produtos.xml");

#cabeçalho da página
header("Content-Type: text/xml");
# imprime o xml na tela
print $dom->saveXML();

}

?>