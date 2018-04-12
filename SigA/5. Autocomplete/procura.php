<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("produtos.xml");

$x=$xmlDoc->getElementsByTagName('produto');


$q=$_GET["t"];


if(strlen($t)>0){
	$hint="";
	for($i=0; $i<($x->length); $i++){
		$y=$x->item($i)->getElementsByTagName('descricao');
		$z=$x->item($i)->getElementsByTagName('Quantidade');
		if($y->item(0)->nodeType==1){
			
if(stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)){
				
				if($hint==""){
					
					$hint="<a href='" .
					
					$z->item(0)->childNodes->item(0)->nodeValue.
					"' target='_blank'>" .
					
					$y->item(0)->childNodes->item(0)->nodeValue. "</a>";
				}
				else
				{
					$hint=$hint . "<br/><a href='" .
					
					$z->item(0)->childNodes->item(0)->nodeValue .
					"' target='_blank'>".
					
					$y->item(0)->childNodes->item(0)->nodeValue. "</a>";
				}
			}
		}
	}
}

// Set Output to "No results found" if no hint was found or to the correct values

if($hint==""){
	$resultado = "Sem resultados";
}
else
{
	$response=$hint;
}

//output the response
echo $response;

			
?>