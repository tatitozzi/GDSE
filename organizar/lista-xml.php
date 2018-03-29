<?php
$con_string = pg_connect("host=localhost port=5433 dbname=list user=postgres password=theo");
//coneta a um banco de dados chamado "list" na máquina "localhost" com um usuário e senha
//transformar a lista do banco em xml
$prod = pg_query("SELECT * FROM produto");
 
$xml = "<?xml version='1.0' encoding='UTF-8'?>n";//cabeçalho do arquivo
    $xml .= "<produtos> n";

    while($reg = pg_fetch_object($prod)){
        $xml .= "t<produto>";
            $xml .= "tt<idProduto>$reg->id_produto</idProduto>";
            $xml .= "tt<descricao>$reg->descricao</descricao>";
            $xml .= "tt<preco>$reg->preco</preco>";
            $xml .= "tt<id_fornecedor>$reg->id_fornecedor</id_fornecedor>";
        $xml .= "t</produto>";
    }
    $xml .= "</produtos>";
 
       $ponteiro = fopen('backup.xml', 'w'); //cria um arquivo com o nome backup.xml
       fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml
 
       $ponteiro = fclose($ponteiro); //fecha o arquivo
 
?>

