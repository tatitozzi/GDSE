<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . '/imobiliaria/conexao/Conexao.php' );



print_r($_POST['imovel']);



$conn = Conexao::conexao();

for ($i = 0; $i <count($imovel) - 1; $i++) {
    
    $sql = "insert into imovel(id,destacado,
                                         referencia,
                                         dominio,
                                         url,
                                         titulo,
                                         tipo_imovel,
                                         sub_tipo_imovel,
                                         transacao,
                                         valor,
                                         valor_condominio,
                                         valor_iptu,
                                         area_privativa,
                                         area_construida,
                                         area_total,
                                         area_terreno,
                                         dormitorios,
                                         banheiro,
                                         suites,
                                         vagas,
                                         mobiliado,
                                         em_condominio,
                                         ano_construcao,
                                         video,
                                         endereco_logradouro,
                                         endereco_numero,
                                         endereco_complemento,
                                         endereco_cep,
                                         endereco_bairro,
                                         endereco_zona,
                                         endereco_regiao,
                                         endereco_cidade,
                                         endereco_estado,
                                         endereco_pais,
                                         descricao,
                                         empreendimento_estagio,
                                         empreendimento_inicio,
                                         empreendimento_terminio,
                                         empreendimento_nome,
                                         empreendimento_descricao,
                                         fotos,
                                         anunciante,
                                         anunciante_fone,
                                         anunciante_email,
                                         anunciante_logradouro,
                                         anunciante_numero,
                                         anunciante_bairro,
                                         anunciante_cidade,
                                         anunciante_estado,
                                         data) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    $ps = $conn->prepare($sql);
    
    $ps->bindValue(1, $imovel[$i]['id']);
    $ps->bindValue(2, $imovel[$i]['destacado']);
    $ps->bindValue(3, $imovel[$i]['ref']);
    $ps->bindValue(4, $imovel[$i]['dominio']);
    $ps->bindValue(5, $imovel[$i]['url']);
    $ps->bindValue(6, $imovel[$i]['titulo']);
    $ps->bindValue(7, $imovel[$i]['tipoimovel']);
    $ps->bindValue(8, $imovel[$i]['subtipoimovel']);
    $ps->bindValue(9, $imovel[$i]['transacao']);
    $ps->bindValue(10, $imovel[$i]['valor']);
    $ps->bindValue(11, $imovel[$i]['valor_condominio']);
    $ps->bindValue(12, $imovel[$i]['valor_iptu']);
    $ps->bindValue(13, $imovel[$i]['area_privativa']);
    $ps->bindValue(14, $imovel[$i]['area_construida']);
    $ps->bindValue(15, $imovel[$i]['area_total']);
    $ps->bindValue(16, $imovel[$i]['area_terreno']);
    $ps->bindValue(17, $imovel[$i]['dormitorios']);
    $ps->bindValue(18, $imovel[$i]['banheiro']);
    $ps->bindValue(19, $imovel[$i]['suites']);
    $ps->bindValue(20, $imovel[$i]['vagas']);
    $ps->bindValue(21, $imovel[$i]['mobiliado']);
    $ps->bindValue(22, $imovel[$i]['em_condominio']);
    $ps->bindValue(23, $imovel[$i]['ano_construcao']);
    $ps->bindValue(24, $imovel[$i]['video']);
    $ps->bindValue(25, $imovel[$i]['endereco_logradouro']);
    $ps->bindValue(26, $imovel[$i]['endereco_numero']);
    $ps->bindValue(27, $imovel[$i]['endereco_complemento']);
    $ps->bindValue(28, $imovel[$i]['endereco_cep']);
    $ps->bindValue(29, $imovel[$i]['endereco_bairro']);
    $ps->bindValue(30, $imovel[$i]['endereco_zona']);
    $ps->bindValue(31, $imovel[$i]['endereco_regiao']);
    $ps->bindValue(32, $imovel[$i]['endereco_cidade']);
    $ps->bindValue(33, $imovel[$i]['endereco_estado']);
    $ps->bindValue(34, $imovel[$i]['endereco_pais']);
    $ps->bindValue(35, $imovel[$i]['descricao']);
    $ps->bindValue(36, $imovel[$i]['empreendimento_estagio']);
    $ps->bindValue(37, $imovel[$i]['empreendimento_inicio']);
    $ps->bindValue(38, $imovel[$i]['empreendimento_terminio']);
    $ps->bindValue(39, $imovel[$i]['empreendimento_nome']);
    $ps->bindValue(40, $imovel[$i]['empreendimento_descricao']);
    $ps->bindValue(41, $imovel[$i]['fotos']);
    $ps->bindValue(42, $imovel[$i]['anunciante']);
    $ps->bindValue(43, $imovel[$i]['anunciante_fone']);
    $ps->bindValue(44, $imovel[$i]['anunciante_email']);
    $ps->bindValue(45, $imovel[$i]['anunciante_logradouro']);
    $ps->bindValue(46, $imovel[$i]['anunciante_numero']);
    $ps->bindValue(47, $imovel[$i]['anunciante_bairro']);
    $ps->bindValue(48, $imovel[$i]['anunciante_cidade']);
    $ps->bindValue(49, $imovel[$i]['anunciante_estado']);
    $ps->bindValue(50, $imovel[$i]['data']);
    
    
    //$ps->execute();
}


