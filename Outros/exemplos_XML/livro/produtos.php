 <html>
 <head>
 <title> Resultado da busca </title>
 </head>
 
 <body>
 
 <h2> Resultado </h2>
 
 <?
 
 $parser = xml_parser_create();
 $dados = implode (<<>>, file (<<produtos.xml>>));
 xml_parse_into_struct($parser, $dados. &$valores. &$indice);
xml_parse_free($parser);
$valido=false;

foreach ($valores as $elemento){
	if ($elemento["tag"]=="descricao" || $elemento["tag"]=="quantidade")
		{
			$valor = trim($elemento["value"]);
				if (preg_match("/$consulta/i", $valor))
					$valido = true;
			
			if ($elemento["tag"]== "descricao")
				$titulo_atual = $valor;
				
			else {
				$descricao_atual = $valor;
					if ($valido) {
						$titulo_atual = str_replace($consulta, "<b>$consulta</b>", $descricao_atual);
							echo "<font color=\"blue\"><u>$titulo_atual</u></font><br>";
							echo "<font color=\"black\"><u>$descricao_atual</u></font><br>";
								$valido=false;
								}
							}
							}
							}
							?>
							</body>
							</html>
			}