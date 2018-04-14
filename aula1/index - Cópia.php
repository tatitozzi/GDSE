<?php
#versao do encoding xml
$dom = new DOMDocument("1.0", "ISO-8859-1");


#retirar os espacos em branco
$dom->preserveWhiteSpace = false;

#gerar o codigo
$dom->formatOutput = true;

#criando o nó principal (root)
$root   = $dom->createElement("agenda");

#nó filho (contato)
$contato = $dom->createElement("contato");

#setanto nomes e atributos dos elementos xml (nós)
$nome     = $dom->createElement("nome", "Juan Pablo");
$telefone = $dom->createElement("telefone", "(11) 5500-0055");
$endereco = $dom->createElement("endereco", "Av. longa n 1");


$contato = $dom->createElement("contato");
$contato->setAttribute("id", "001");

#setanto nomes e atributos dos elementos xml (nós)
$nome = $dom->createElement("nome", "Juan Pablo");
$telefone = $dom->createElement("telefone", "(11) 5500-0055");
$endereco = $dom->createElement("endereco", "Av. longa n 1");

#setanto nomes e atributos dos elementos xml (nós)
$nome     = $dom->createElement("nome", "Juaddfdsfn Pablo");
$telefone = $dom->createElement("telefone", "(11) 550sdfdsf0-0055");
$endereco = $dom->createElement("endereco", "Av. lodsfdsfdsfnga n 1");


$contato = $dom->createElement("contato");
$contato->setAttribute("id", "002");

#setanto nomes e atributos dos elementos xml (nós)
$nome = $dom->createElement("nome", "Juan sdfsfPablo");
$telefone = $dom->createElement("telefone", "(11) 550sfsdf0-0055");
$endereco = $dom->createElement("endereco", "Av. longasfdsf n 1");

#adiciona os nós (informacaoes do contato) em contato
$contato->appendChild($nome);
$contato->appendChild($telefone);
$contato->appendChild($endereco);


#adiciona o nó contato em (root) agenda
$root->appendChild($contato);


$dom->appendChild($root);

# Para salvar o arquivo, descomente a linha


#cabeçalho da página
header("Content-Type: text/xml");
# imprime o xml na tela
print $dom->saveXML();
?>