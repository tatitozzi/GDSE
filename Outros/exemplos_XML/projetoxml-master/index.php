<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Resultados XML</title>

    </head>

    <body>


        <div class="container">
            <div class="col-md-3 central">
                Chamar XML:
                <button type="button" class="btn btn-primary" id="btn" onclick="retornarXML()">Chamar</button>
            </div>
        </div>

        <?php
//        $json = json_encode(simplexml_load_file('http://localhost/imobiliaria/xml/arquivo.xml'));
//       echo $json;
        ?>

    </body>

    <script src="js/jquery.js" type="text/javascript"></script>
    <!-- Script to Activate the Carousel -->
    <script>
                    $(document).ready(function () {


                    });
                    function retornarXML() {

                        var imovel = {};

                        $.ajax({
                            url: "http://localhost/imobiliaria/xml/arquivo.xml",
                            //data: form.serialize(),
                            dataType: 'xml',
                            crossDomain: true,
                            //type: 'POST',
                            success: function (data) {
                                var i = 0;
                                $(data).find('imovel').each(function () {
                                    imovel[i] = {
                                        'id': $(this).find('id').text(),
                                        'destacado': $(this).find('destacado').text(),
                                        'ref': $(this).find('ref').text(),
                                        'dominio': $(this).find('dominio').text(),
                                        'url': $(this).find('url').text(),
                                        'titulo': $(this).find('titulo').text(),
                                        'tipoimovel': $(this).find('tipoimovel').text(),
                                        'subtipoimovel': $(this).find('subtipoimovel').text(),
                                        'transacao': $(this).find('transacao').text(),
                                        'valor': $(this).find('valor').text(),
                                        'valor_condominio': $(this).find('valor_condominio').text(),
                                        'valor_iptu': $(this).find('valor_iptu').text(),
                                        'area_privativa': $(this).find('area_privativa').text(),
                                        'area_construida': $(this).find('area_construida').text(),
                                        'area_total': $(this).find('area_total').text(),
                                        'area_terreno': $(this).find('area_terreno').text(),
                                        'dormitorios': $(this).find('dormitorios').text(),
                                        'banheiro': $(this).find('banheiro').text(),
                                        'suites': $(this).find('suites').text(),
                                        'vagas': $(this).find('vagas').text(),
                                        'mobiliado': $(this).find('mobiliado').text(),
                                        'em_condominio': $(this).find('em_condominio').text(),
                                        'ano_construcao': $(this).find('ano_construcao').text(),
                                        'video': $(this).find('video').text(),
                                        'endereco_logradouro': $(this).find('endereco_logradouro').text(),
                                        'endereco_numero': $(this).find('endereco_numero').text(),
                                        'endereco_complemento': $(this).find('endereco_complemento').text(),
                                        'endereco_cep': $(this).find('endereco_cep').text(),
                                        'endereco_bairro': $(this).find('endereco_bairro').text(),
                                        'endereco_zona': $(this).find('endereco_zona').text(),
                                        'endereco_regiao': $(this).find('endereco_regiao').text(),
                                        'endereco_cidade': $(this).find('endereco_cidade').text(),
                                        'endereco_estado': $(this).find('endereco_estado').text(),
                                        'endereco_pais': $(this).find('endereco_pais').text(),
                                        'descricao': $(this).find('descricao').text(),
                                        'empreendimento_estagio': $(this).find('empreendimento_estagio').text(),
                                        'empreendimento_inicio': $(this).find('empreendimento_inicio').text(),
                                        'empreendimento_terminio': $(this).find('empreendimento_terminio').text(),
                                        'empreendimento_nome': $(this).find('empreendimento_nome').text(),
                                        'empreendimento_descricao': $(this).find('empreendimento_descricao').text(),
                                        'fotos': $(this).find('fotos').text(),
                                        'anunciante': $(this).find('anunciante').text(),
                                        'anunciante_fone': $(this).find('anunciante_fone').text(),
                                        'anunciante_email': $(this).find('anunciante_email').text(),
                                        'anunciante_logradouro': $(this).find('anunciante_logradouro').text(),
                                        'anunciante_numero': $(this).find('anunciante_numero').text(),
                                        'anunciante_bairro': $(this).find('anunciante_bairro').text(),
                                        'anunciante_cidade': $(this).find('anunciante_cidade').text(),
                                        'anunciante_estado': $(this).find('anunciante_estado').text(),
                                        'data': $(this).find('data').text()

                                    };                                   
                                 
                                    i++;

                                });

                                console.log(imovel);
                                enviar(imovel);
                                
                            }
                        });

                    }

                    function enviar(imovel) {
                           $.ajax({
                                    url: "receber.php",
                                    data: {imovel:imovel},
                                    dataType: 'json',
                                    //crossDomain: true,
                                    type: 'POST',
                                    success: function (data) {

                                    }
                                });

                    }



    </script>
</html>
